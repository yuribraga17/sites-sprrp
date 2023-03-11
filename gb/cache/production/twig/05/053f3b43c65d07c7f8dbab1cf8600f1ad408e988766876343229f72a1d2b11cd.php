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

/* site_footer_area.html */
class __TwigTemplate_28144254eae9301650e27eba28fd6816b5aad8be9ef22e11a10030ad9b054f17 extends \Twig\Template
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
        echo "<div id=\"site-footer-area\">
\t<div class=\"chunk\">
\t\t<div class=\"grid-4\">
\t\t\t<h5> São Paulo Roleplay </h5>
\t\t\t<p>O São Paulo Roleplay é um servidor online baseado no San Andreas Multiplayer (SA-MP).
Crie sua conta em http://sp-roleplay.com.br</p>
\t\t</div>
\t\t<div class=\"grid-4\">
\t\t\t<h5>Contato</h5>
\t\t\t<ul class=\"cfooter-contact\">
\t\t\t\t<li>
\t\t\t\t\t<i class=\"fa fa-building\"></i>
\t\t\t\t\tSão Paulo
\t\t\t\t</li>
\t\t\t\t<li>
\t\t\t\t\t<i class=\"fa fa-envelope\"></i>
\t\t\t\t\tsproleplay12@gmail.com
\t\t\t\t</li>
\t\t\t</ul>
\t\t</div>
\t\t<div class=\"grid-4\">
\t\t\t<h5>Links importantes</h5>
\t\t\t<ul class=\"cfooter-links\">
\t\t\t\t<li>
\t\t\t\t\t<a href=\"https://sp-roleplay.com.br\">User Control Panel</a>
\t\t\t\t</li>
\t\t\t\t<li>
\t\t\t\t\t<a href=\"https://sp-gov.net\">Prefeitura de São Paulo</a>
\t\t\t\t</li>
\t\t\t\t<li>
\t\t\t\t\t<a href=\"https://pm.sp-gov.net\">Polícia Militar</a>
\t\t\t\t</li>
\t\t\t\t<li>
\t\t\t\t\t<a href=\"https://pc.sp-gov.net\">Polícia Civil</a>
\t\t\t\t</li>
\t\t\t\t<li>
\t\t\t\t\t<a href=\"https://gb.sp-gov.net\">Corpo de Bombeiros</a>
\t\t\t\t</li>
\t\t\t</ul>
\t\t</div>
\t\t<div class=\"grid-4\">
\t\t\t<h5>Rede Social</h5>
\t\t\t<p> Siga-nos</p>
\t\t\t<ul class=\"cfooter-social\">
\t\t\t\t<li>
\t\t\t\t\t<a href=\"https://instagram.com/sprpoficial\"><i class=\"fa fa-instagram\"></i></a>
\t\t\t\t</li>
\t\t\t\t<li>
\t\t\t\t\t<a href=\"https://www.facebook.com/sprpoficial\"><i class=\"fa fa-facebook\"></i></a>
\t\t\t\t</li>
\t\t\t</ul>
\t\t</div>
\t</div>
</div>
";
    }

    public function getTemplateName()
    {
        return "site_footer_area.html";
    }

    public function getDebugInfo()
    {
        return array (  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "site_footer_area.html", "");
    }
}
