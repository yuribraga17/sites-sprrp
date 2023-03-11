<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* user_welcome.txt */
class __TwigTemplate_aee1c6ac18d1ef8d6117b349eab187418f1950c279de200a2dd905e0f359c4a3 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "Subject: Bem-vindo ao fórum \"";
        echo ($context["SITENAME"] ?? null);
        echo "\"

";
        // line 3
        echo ($context["WELCOME_MSG"] ?? null);
        echo "

Por favor, salve este e-mail para consultas posteriores. As informações de seu registro são as seguintes:

----------------------------
Usuário: ";
        // line 8
        echo ($context["USERNAME"] ?? null);
        echo "

Endereço: ";
        // line 10
        echo ($context["U_BOARD"] ?? null);
        echo "
----------------------------

A sua senha foi codificada de forma segura em nosso banco de dados e não podemos restaurá-la. Contudo, caso se esqueça da mesma, você poderá resetá-la usando o endereço de e-mail associado ao seu registro.

Obrigado por registrar-se!

";
        // line 17
        echo ($context["EMAIL_SIG"] ?? null);
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
        return array (  66 => 17,  56 => 10,  51 => 8,  43 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "user_welcome.txt", "");
    }
}
