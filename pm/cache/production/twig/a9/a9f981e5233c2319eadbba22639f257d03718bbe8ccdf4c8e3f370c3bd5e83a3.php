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

/* test.txt */
class __TwigTemplate_da0a8eac794b26e1cef39ac4028f9a84433defc78af38fd0fef21581bd73d770 extends \Twig\Template
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
        echo "Subject: O phpBB está configurado corretamente para enviar emails

Olá ";
        // line 3
        echo ($context["USERNAME"] ?? null);
        echo ",

Parabéns. Se você recebeu este email, o phpBB está configurado corretamente para enviar emails.

";
        // line 7
        if (($context["MESSAGE"] ?? null)) {
            // line 8
            echo ($context["MESSAGE"] ?? null);
            echo "

";
        }
        // line 11
        echo "
Se você precisar de ajuda, visite os fóruns de suporte do phpBB - https://www.phpbb.com/community/

";
        // line 14
        echo ($context["EMAIL_SIG"] ?? null);
        echo "
";
    }

    public function getTemplateName()
    {
        return "test.txt";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  61 => 14,  56 => 11,  50 => 8,  48 => 7,  41 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "test.txt", "");
    }
}
