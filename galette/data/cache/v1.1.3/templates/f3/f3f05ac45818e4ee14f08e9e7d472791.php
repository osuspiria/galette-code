<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\CoreExtension;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* @PluginGaletteMaps/headers.html.twig */
class __TwigTemplate_99b128a3d0857b4505787a28d57758c6 extends Template
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
        // line 21
        if ((is_string($__internal_compile_0 = ($context["cur_route"] ?? null)) && is_string($__internal_compile_1 = "maps_") && str_starts_with($__internal_compile_0, $__internal_compile_1))) {
            // line 22
            yield "    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("plugin_res", ["plugin" => ($context["module_id"] ?? null), "path" => "maps-main.bundle.min.css"]), "html", null, true);
            yield "\"/>
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
            // line 23
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("plugin_res", ["plugin" => ($context["module_id"] ?? null), "path" => "galette_maps.css"]), "html", null, true);
            yield "\"/>
";
        }
        // line 25
        if (((($context["cur_route"] ?? null) == "maps_localize_member") || (($context["cur_route"] ?? null) == "maps_mymap"))) {
            // line 26
            yield "    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("plugin_res", ["plugin" => ($context["module_id"] ?? null), "path" => "maps-locate.bundle.min.css"]), "html", null, true);
            yield "\"/>
";
        }
        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@PluginGaletteMaps/headers.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function isTraitable()
    {
        return false;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo()
    {
        return array (  52 => 26,  50 => 25,  45 => 23,  40 => 22,  38 => 21,);
    }

    public function getSourceContext()
    {
        return new Source("", "@PluginGaletteMaps/headers.html.twig", "/var/www/galette/plugins/plugin-maps/templates/default/headers.html.twig");
    }
}
