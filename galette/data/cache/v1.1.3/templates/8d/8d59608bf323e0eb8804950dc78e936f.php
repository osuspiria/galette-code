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

/* elements/navigation/navigation_items.html.twig */
class __TwigTemplate_60d684426c8a41ed6b30bb699936cf24 extends Template
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
        $macros["menus_macros"] = $this->macros["menus_macros"] = $this->loadTemplate("macros.twig", "elements/navigation/navigation_items.html.twig", 21)->unwrap();
        // line 22
        yield "
";
        // line 23
        $context["mode"] = ((array_key_exists("mode", $context)) ? (($context["mode"] ?? null)) : (""));
        // line 24
        yield "
";
        // line 25
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["login"] ?? null), "isLogged", [], "method", false, false, false, 25)) {
            // line 26
            yield "        <a href=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("dashboard"), "html", null, true);
            yield "\"
            title=\"";
            // line 27
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("Go to Galette's dashboard"), "html", null, true);
            yield "\"
            class=\"";
            // line 28
            if ((($context["cur_route"] ?? null) == "dashboard")) {
                yield "active ";
            }
            yield "item\"
            data-position=\"right center\"
        >
        ";
            // line 31
            if ((($context["mode"] ?? null) != "compact")) {
                // line 32
                yield "            <div class=\"image header title";
                if ((($context["mode"] ?? null) == "compact")) {
                    yield " tooltip\" data-html=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("Dashboard"), "html", null, true);
                    yield "\"";
                } else {
                    yield "\"";
                }
                yield ">
        ";
            }
            // line 34
            yield "                <i class=\"compass icon\" aria-hidden=\"true\"></i>
        ";
            // line 35
            if ((($context["mode"] ?? null) != "compact")) {
                // line 36
                yield "                ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("Dashboard"), "html", null, true);
                yield "
            </div>
        ";
            }
            // line 39
            yield "        </a>
";
        }
        // line 41
        yield "
";
        // line 42
        $context["menus"] = $this->env->getFunction('callstatic')->getCallable()("\\Galette\\Core\\Galette", "getAllMenus");
        // line 43
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["menus"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["menu"]) {
            // line 44
            yield "    ";
            yield CoreExtension::callMacro($macros["menus_macros"], "macro_renderMenu", [CoreExtension::getAttribute($this->env, $this->source, $context["menu"], "title", [], "any", false, false, false, 44), CoreExtension::getAttribute($this->env, $this->source, $context["menu"], "icon", [], "any", false, false, false, 44), CoreExtension::getAttribute($this->env, $this->source, $context["menu"], "items", [], "any", false, false, false, 44), ($context["mode"] ?? null)], 44, $context, $this->getSourceContext());
            yield "
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['menu'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "elements/navigation/navigation_items.html.twig";
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
        return array (  106 => 44,  102 => 43,  100 => 42,  97 => 41,  93 => 39,  86 => 36,  84 => 35,  81 => 34,  69 => 32,  67 => 31,  59 => 28,  55 => 27,  50 => 26,  48 => 25,  45 => 24,  43 => 23,  40 => 22,  38 => 21,);
    }

    public function getSourceContext()
    {
        return new Source("", "elements/navigation/navigation_items.html.twig", "/var/www/galette/templates/default/elements/navigation/navigation_items.html.twig");
    }
}
