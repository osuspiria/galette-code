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

/* elements/navigation/navigation_sidebar.html.twig */
class __TwigTemplate_26b3f52b6760561550cbeb683a9ccf05 extends Template
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
        yield "    <nav id=\"sidebarmenu\" class=\"ui simple left vertical accordion menu sidebar\">
";
        // line 22
        if (( !CoreExtension::getAttribute($this->env, $this->source, ($context["login"] ?? null), "isLogged", [], "method", false, false, false, 22) || array_key_exists("ext_auth", $context))) {
            // line 23
            yield "    ";
            if ((($context["cur_route"] ?? null) != "login")) {
                // line 24
                yield "        ";
                $macros["menus_macros"] = $this->macros["menus_macros"] = $this->loadTemplate("macros.twig", "elements/navigation/navigation_sidebar.html.twig", 24)->unwrap();
                // line 25
                yield "        ";
                $context["item"] = ["label" => $this->env->getFunction('_T')->getCallable()("Home"), "title" => $this->env->getFunction('_T')->getCallable()("Go back to Galette homepage"), "route" => ["name" => "slash", "alias" => "login"], "icon" => "home"];
                // line 31
                yield "        ";
                yield CoreExtension::callMacro($macros["menus_macros"], "macro_renderMenuItem", [CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "label", [], "any", false, false, false, 31), CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "title", [], "any", false, false, false, 31), CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "route", [], "any", false, false, false, 31), CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "icon", [], "any", false, false, false, 31), null, "right center"], 31, $context, $this->getSourceContext());
                yield "
    ";
            }
            // line 33
            yield "
    ";
            // line 34
            yield from             $this->loadTemplate("elements/navigation/public_pages.html.twig", "elements/navigation/navigation_sidebar.html.twig", 34)->unwrap()->yield(CoreExtension::merge($context, ["tips_position" => "right center", "sign_in" => true, "mode" => "default"]));
        } else {
            // line 40
            yield "    ";
            yield from             $this->loadTemplate("elements/navigation/navigation_items.html.twig", "elements/navigation/navigation_sidebar.html.twig", 40)->unwrap()->yield(CoreExtension::merge($context, ["mode" => "default"]));
        }
        // line 44
        yield "    ";
        yield from         $this->loadTemplate("elements/language.html.twig", "elements/navigation/navigation_sidebar.html.twig", 44)->unwrap()->yield(CoreExtension::merge($context, ["ui" => "item"]));
        // line 47
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["login"] ?? null), "isLogged", [], "method", false, false, false, 47) &&  !array_key_exists("ext_auth", $context))) {
            // line 48
            yield "        ";
            yield from             $this->loadTemplate("elements/logged_user.html.twig", "elements/navigation/navigation_sidebar.html.twig", 48)->unwrap()->yield(CoreExtension::merge($context, ["ui" => "item"]));
        }
        // line 52
        yield "        <div class=\"ui basic center aligned segment\">
            ";
        // line 53
        yield from         $this->loadTemplate("elements/modes.html.twig", "elements/navigation/navigation_sidebar.html.twig", 53)->unwrap()->yield($context);
        // line 54
        yield "        </div>
    </nav>
";
        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "elements/navigation/navigation_sidebar.html.twig";
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
        return array (  82 => 54,  80 => 53,  77 => 52,  73 => 48,  71 => 47,  68 => 44,  64 => 40,  61 => 34,  58 => 33,  52 => 31,  49 => 25,  46 => 24,  43 => 23,  41 => 22,  38 => 21,);
    }

    public function getSourceContext()
    {
        return new Source("", "elements/navigation/navigation_sidebar.html.twig", "/var/www/galette/templates/default/elements/navigation/navigation_sidebar.html.twig");
    }
}
