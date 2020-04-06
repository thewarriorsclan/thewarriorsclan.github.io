<?php

/* user_welcome.txt */
class __TwigTemplate_8cc6c380dd45349fc8d761a4617d5e1c0c4cecd798657582031fa13cf2603688 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "Subject: Bem-vindo ao fórum \"";
        echo (isset($context["SITENAME"]) ? $context["SITENAME"] : null);
        echo "\"

";
        // line 3
        echo (isset($context["WELCOME_MSG"]) ? $context["WELCOME_MSG"] : null);
        echo "

Por favor, salve este e-mail para consultas posteriores. As informações de seu registro são as seguintes:

----------------------------
Usuário: ";
        // line 8
        echo (isset($context["USERNAME"]) ? $context["USERNAME"] : null);
        echo "

Endereço: ";
        // line 10
        echo (isset($context["U_BOARD"]) ? $context["U_BOARD"] : null);
        echo "
----------------------------

A sua senha foi codificada de forma segura em nosso banco de dados e não podemos restaurá-la. Contudo, caso se esqueça da mesma, você poderá resetá-la usando o endereço de e-mail associado ao seu registro.

Obrigado por registrar-se!

";
        // line 17
        echo (isset($context["EMAIL_SIG"]) ? $context["EMAIL_SIG"] : null);
        echo "
";
    }

    public function getTemplateName()
    {
        return "user_welcome.txt";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  48 => 17,  38 => 10,  33 => 8,  25 => 3,  19 => 1,);
    }
}
/* Subject: Bem-vindo ao fórum "{SITENAME}"*/
/* */
/* {WELCOME_MSG}*/
/* */
/* Por favor, salve este e-mail para consultas posteriores. As informações de seu registro são as seguintes:*/
/* */
/* ----------------------------*/
/* Usuário: {USERNAME}*/
/* */
/* Endereço: {U_BOARD}*/
/* ----------------------------*/
/* */
/* A sua senha foi codificada de forma segura em nosso banco de dados e não podemos restaurá-la. Contudo, caso se esqueça da mesma, você poderá resetá-la usando o endereço de e-mail associado ao seu registro.*/
/* */
/* Obrigado por registrar-se!*/
/* */
/* {EMAIL_SIG}*/
/* */
