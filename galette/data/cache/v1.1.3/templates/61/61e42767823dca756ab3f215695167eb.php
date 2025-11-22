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

/* elements/navigation/public_pages.html.twig */
class __TwigTemplate_74a2776cd293fb54f50661ca3c5384df extends Template
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
        if ((array_key_exists("sign_in", $context) && (($context["sign_in"] ?? null) == true))) {
            // line 22
            yield "    ";
            $macros["menus_macros"] = $this->macros["menus_macros"] = $this->loadTemplate("macros.twig", "elements/navigation/public_pages.html.twig", 22)->unwrap();
            // line 23
            yield "
    ";
            // line 24
            if ( !array_key_exists("ext_auth", $context)) {
                // line 25
                yield "        ";
                $context["public_menus"] = $this->env->getFunction('callstatic')->getCallable()("\\Galette\\Core\\Galette", "getPublicMenus");
                // line 26
                yield "        ";
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(($context["public_menus"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["public_menu"]) {
                    // line 27
                    yield "            ";
                    $context['_parent'] = $context;
                    $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["public_menu"], "items", [], "any", false, false, false, 27));
                    foreach ($context['_seq'] as $context["_key"] => $context["public_item"]) {
                        // line 28
                        yield "                ";
                        yield CoreExtension::callMacro($macros["menus_macros"], "macro_renderMenuItem", [CoreExtension::getAttribute($this->env, $this->source, $context["public_item"], "label", [], "any", false, false, false, 28), (((CoreExtension::getAttribute($this->env, $this->source, $context["public_item"], "title", [], "any", true, true, false, 28) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, $context["public_item"], "title", [], "any", false, false, false, 28)))) ? (CoreExtension::getAttribute($this->env, $this->source, $context["public_item"], "title", [], "any", false, false, false, 28)) : (null)), CoreExtension::getAttribute($this->env, $this->source, $context["public_item"], "route", [], "any", false, false, false, 28), (((CoreExtension::getAttribute($this->env, $this->source, $context["public_item"], "icon", [], "any", true, true, false, 28) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, $context["public_item"], "icon", [], "any", false, false, false, 28)))) ? (CoreExtension::getAttribute($this->env, $this->source, $context["public_item"], "icon", [], "any", false, false, false, 28)) : (null)), null, ($context["tips_position"] ?? null), ($context["mode"] ?? null)], 28, $context, $this->getSourceContext());
                        yield "
            ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['public_item'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 30
                    yield "        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['public_menu'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 31
                yield "    ";
            }
            // line 32
            yield "
    ";
            // line 33
            $context["public_items"] = [];
            // line 34
            yield "    <div class=\"";
            if ((array_key_exists("sign_in_side", $context) &&  !Twig\Extension\CoreExtension::testEmpty(($context["sign_in_side"] ?? null)))) {
                yield "right ";
            }
            yield "item\">
    ";
            // line 35
            if ((((CoreExtension::getAttribute($this->env, $this->source, ($context["preferences"] ?? null), "pref_bool_selfsubscribe", [], "any", false, false, false, 35) == true) &&  !$this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->isCurrentUrl("subscribe")) &&  !array_key_exists("ext_auth", $context))) {
                // line 36
                yield "        ";
                $context["public_items"] = Twig\Extension\CoreExtension::merge(($context["public_items"] ?? null), [["label" => $this->env->getFunction('_T')->getCallable()("Subscribe"), "route" => ["name" => "subscribe"], "icon" => "add user", "class" => "ui basic button"]]);
                // line 42
                yield "    ";
            }
            // line 43
            yield "    ";
            if (( !$this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->isCurrentUrl("login") &&  !array_key_exists("ext_auth", $context))) {
                // line 44
                yield "        ";
                $context["public_items"] = Twig\Extension\CoreExtension::merge(($context["public_items"] ?? null), [["label" => $this->env->getFunction('_T')->getCallable()("Login"), "route" => ["name" => "slash"], "icon" => "sign in alt", "class" => "ui primary button"]]);
                // line 50
                yield "    ";
            }
            // line 51
            yield "
    ";
            // line 52
            if ( !array_key_exists("ext_auth", $context)) {
                // line 53
                yield "        ";
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(($context["public_items"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["public_item"]) {
                    // line 54
                    yield "            ";
                    yield CoreExtension::callMacro($macros["menus_macros"], "macro_renderMenuItem", [CoreExtension::getAttribute($this->env, $this->source, $context["public_item"], "label", [], "any", false, false, false, 54), (((CoreExtension::getAttribute($this->env, $this->source, $context["public_item"], "title", [], "any", true, true, false, 54) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, $context["public_item"], "title", [], "any", false, false, false, 54)))) ? (CoreExtension::getAttribute($this->env, $this->source, $context["public_item"], "title", [], "any", false, false, false, 54)) : (null)), CoreExtension::getAttribute($this->env, $this->source, $context["public_item"], "route", [], "any", false, false, false, 54), CoreExtension::getAttribute($this->env, $this->source, $context["public_item"], "icon", [], "any", false, false, false, 54), CoreExtension::getAttribute($this->env, $this->source, $context["public_item"], "class", [], "any", false, false, false, 54), ($context["tips_position"] ?? null), ($context["mode"] ?? null)], 54, $context, $this->getSourceContext());
                    yield "
        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['public_item'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 56
                yield "    ";
            }
            // line 57
            yield "        <a
            href=\"#\"
            class=\"ui darkmode";
            // line 59
            if (CoreExtension::getAttribute($this->env, $this->source, ($context["login"] ?? null), "isDarkModeEnabled", [], "method", false, false, false, 59)) {
                yield " black";
            }
            yield " icon button\"
            data-position=\"";
            // line 60
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["tips_position"] ?? null), "html", null, true);
            yield "\"
            title=\"";
            // line 61
            if (CoreExtension::getAttribute($this->env, $this->source, ($context["login"] ?? null), "isDarkModeEnabled", [], "method", false, false, false, 61)) {
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("Disable dark mode"), "html", null, true);
            } else {
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("Enable dark mode"), "html", null, true);
            }
            yield "\"
        >
            <i class=\"icon adjust\" aria-hidden=\"true\"></i>
            <span>";
            // line 64
            if (CoreExtension::getAttribute($this->env, $this->source, ($context["login"] ?? null), "isDarkModeEnabled", [], "method", false, false, false, 64)) {
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("Disable dark mode"), "html", null, true);
            } else {
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("Enable dark mode"), "html", null, true);
            }
            yield "</span>
        </a>
    </div>
";
        }
        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "elements/navigation/public_pages.html.twig";
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
        return array (  154 => 64,  144 => 61,  140 => 60,  134 => 59,  130 => 57,  127 => 56,  118 => 54,  113 => 53,  111 => 52,  108 => 51,  105 => 50,  102 => 44,  99 => 43,  96 => 42,  93 => 36,  91 => 35,  84 => 34,  82 => 33,  79 => 32,  76 => 31,  70 => 30,  61 => 28,  56 => 27,  51 => 26,  48 => 25,  46 => 24,  43 => 23,  40 => 22,  38 => 21,);
    }

    public function getSourceContext()
    {
        return new Source("", "elements/navigation/public_pages.html.twig", "/var/www/galette/templates/default/elements/navigation/public_pages.html.twig");
    }
}
