<?php

/**
 *
 * Ajax Chat extension for phpBB.
 *
 * @copyright (c) 2015 spaceace <http://www.livemembersonly.com>
 * @license GNU General Public License, version 2 (GPL-2.0)
 *
 */

namespace spaceace\ajaxchat\core;

class acp_manager
{

	protected $db;
	protected $request;
	protected $user;
	protected $phpbb_root_path;
	protected $php_ext;

	public function __construct(\phpbb\db\driver\driver_interface $db, \phpbb\request\request $request, \phpbb\user $user, $phpbb_root_path, $php_ext)
	{
		$this->db				= $db;
		$this->request			= $request;
		$this->user				= $user;
		$this->phpbb_root_path	= $phpbb_root_path;
		$this->php_ext			= $php_ext;
	}

	public function move($action)
	{
		if ($action == 'drag_drop')
		{
			if (!$this->request->is_ajax())
			{
				return;
			}

			$tablename	= $this->request->variable('tablename', '');
			$bbcodes_list = $this->request->variable($tablename, array(0 => ''));
			foreach ($bbcodes_list as $order => $bbcode_id)
			{
				if ($order == 0)
				{
					continue;
				}

				$sql = 'UPDATE ' . BBCODES_TABLE . '
					SET bbcode_order = ' . $order . '
					WHERE bbcode_id = ' . (int) $bbcode_id;
				$this->db->sql_query($sql);
			}

			$this->resynchronize_bbcode_order();
			$json_response = new \phpbb\json_response;
			$json_response->send(array(
				'success' => true,
			));
		}
		else
		{
			$bbcode_id = $this->request->variable('id', 0);

			if (!check_link_hash($this->request->variable('hash', ''), $action . $bbcode_id))
			{
				trigger_error($this->user->lang('FORM_INVALID'), E_USER_WARNING);
			}

			$sql		   = 'SELECT bbcode_order
				FROM ' . BBCODES_TABLE . "
				WHERE bbcode_id = $bbcode_id";
			$result		= $this->db->sql_query($sql);
			$current_order = (int) $this->db->sql_fetchfield('bbcode_order');
			$this->db->sql_freeresult($result);

			if ($current_order <= 1 && $action == 'move_up')
			{
				return;
			}

			$order_total = $current_order * 2 + (($action == 'move_up') ? -1 : 1);

			$sql = 'UPDATE ' . BBCODES_TABLE . '
				SET bbcode_order = ' . $order_total . ' - bbcode_order
				WHERE bbcode_order IN (' . $current_order . ', ' . (($action == 'move_up') ? $current_order - 1 : $current_order + 1) . ')';
			$this->db->sql_query($sql);

			$this->resynchronize_bbcode_order();

			if ($this->request->is_ajax())
			{
				$json_response = new \phpbb\json_response;
				$json_response->send(array(
					'success' => (bool) $this->db->sql_affectedrows(),
				));
			}
		}
	}

	public function get_max_bbcode_order()
	{
		$sql	   = 'SELECT MAX(bbcode_order) AS max_bbcode_order
			FROM ' . BBCODES_TABLE;
		$result	= $this->db->sql_query($sql);
		$max_order = (int) $this->db->sql_fetchfield('max_bbcode_order');
		$this->db->sql_freeresult($result);

		return $max_order;
	}

	public function install_bbcodes($bbcode_data)
	{
		if (!class_exists('acp_bbcodes'))
		{
			include($this->phpbb_root_path . 'includes/acp/acp_bbcodes.' . $this->php_ext);
		}
		$bbcode_tool = new \acp_bbcodes();

		foreach ($bbcode_data as $bbcode_name => $bbcode_array)
		{
			$data = $bbcode_tool->build_regexp($bbcode_array['bbcode_match'], $bbcode_array['bbcode_tpl']);

			$bbcode_array += array(
				'bbcode_tag'			=> $data['bbcode_tag'],
				'first_pass_match'		=> $data['first_pass_match'],
				'first_pass_replace'	=> $data['first_pass_replace'],
				'second_pass_match'		=> $data['second_pass_match'],
				'second_pass_replace'	=> $data['second_pass_replace']
			);

			$sql		= 'SELECT bbcode_id
				FROM ' . BBCODES_TABLE . "
				WHERE LOWER(bbcode_tag) = '" . strtolower($bbcode_name) . "'
				OR LOWER(bbcode_tag) = '" . strtolower($bbcode_array['bbcode_tag']) . "'";
			$result	 = $this->db->sql_query($sql);
			$row_exists = $this->db->sql_fetchrow($result);
			$this->db->sql_freeresult($result);

			if ($row_exists)
			{
				$bbcode_id = $row_exists['bbcode_id'];

				$sql = 'UPDATE ' . BBCODES_TABLE . '
					SET ' . $this->db->sql_build_array('UPDATE', $bbcode_array) . '
					WHERE bbcode_id = ' . $bbcode_id;
				$this->db->sql_query($sql);
			}
			else
			{
				$sql	= 'SELECT MAX(bbcode_id) AS max_bbcode_id
					FROM ' . BBCODES_TABLE;
				$result = $this->db->sql_query($sql);
				$row	= $this->db->sql_fetchrow($result);
				$this->db->sql_freeresult($result);

				if ($row)
				{
					$bbcode_id = $row['max_bbcode_id'] + 1;

					if ($bbcode_id <= NUM_CORE_BBCODES)
					{
						$bbcode_id = NUM_CORE_BBCODES + 1;
					}
				}
				else
				{
					$bbcode_id = NUM_CORE_BBCODES + 1;
				}

				if ($bbcode_id <= BBCODE_LIMIT)
				{
					$bbcode_array['bbcode_id']		  = (int) $bbcode_id;
					$bbcode_array['display_on_posting'] = 0;

					$this->db->sql_query('INSERT INTO ' . BBCODES_TABLE . ' ' . $this->db->sql_build_array('INSERT', $bbcode_array));
				}
			}
		}
	}
}
