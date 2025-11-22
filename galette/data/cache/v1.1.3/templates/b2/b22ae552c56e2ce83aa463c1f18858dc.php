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

/* macros.twig */
class __TwigTemplate_127bba566bdea839e562db88b3c07437 extends Template
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
        $macros["_self"] = $this->macros["_self"] = $this;
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 52
        yield "
";
        // line 75
        yield "
";
        // line 88
        yield "
";
        // line 99
        yield "
";
        // line 110
        yield "
";
        // line 127
        yield "
";
        return; yield '';
    }

    // line 21
    public function macro_renderMenu($__title__ = null, $__icon__ = null, $__items__ = null, $__mode__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "title" => $__title__,
            "icon" => $__icon__,
            "items" => $__items__,
            "mode" => $__mode__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        return ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            // line 22
            yield "    ";
            $context["my_routes"] = [];
            // line 23
            yield "    ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["items"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 24
                yield "        ";
                $context["my_routes"] = Twig\Extension\CoreExtension::merge(Twig\Extension\CoreExtension::merge(($context["my_routes"] ?? null), [CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "route", [], "any", false, false, false, 24), "name", [], "any", false, false, false, 24)]), (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "route", [], "any", false, true, false, 24), "aliases", [], "any", true, true, false, 24) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "route", [], "any", false, true, false, 24), "aliases", [], "any", false, false, false, 24)))) ? (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "route", [], "any", false, true, false, 24), "aliases", [], "any", false, false, false, 24)) : ([])));
                // line 25
                yield "    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 26
            yield "    ";
            if ((($context["mode"] ?? null) == "compact")) {
                // line 27
                yield "        <div class=\"ui";
                if (CoreExtension::inFilter(($context["cur_route"] ?? null), ($context["my_routes"] ?? null))) {
                    yield " active-menu";
                }
                yield " dropdown navigation item tooltip\" data-html=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["title"] ?? null), "html", null, true);
                yield "\" data-position=\"right center\">
            <i class=\"";
                // line 28
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["icon"] ?? null), "html", null, true);
                yield " icon\" aria-hidden=\"true\"></i>
            <span class=\"visually-hidden\">";
                // line 29
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["title"] ?? null), "html", null, true);
                yield "</span>
            <i class=\"dropdown icon\" aria-hidden=\"true\"></i>
            <div class=\"menu\">
                ";
                // line 32
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(($context["items"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                    // line 33
                    yield "                    ";
                    yield CoreExtension::callMacro($macros["_self"], "macro_renderMenuItem", [CoreExtension::getAttribute($this->env, $this->source, $context["item"], "label", [], "any", false, false, false, 33), (((CoreExtension::getAttribute($this->env, $this->source, $context["item"], "title", [], "any", true, true, false, 33) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, $context["item"], "title", [], "any", false, false, false, 33)))) ? (CoreExtension::getAttribute($this->env, $this->source, $context["item"], "title", [], "any", false, false, false, 33)) : (null)), CoreExtension::getAttribute($this->env, $this->source, $context["item"], "route", [], "any", false, false, false, 33), (((CoreExtension::getAttribute($this->env, $this->source, $context["item"], "icon", [], "any", true, true, false, 33) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, $context["item"], "icon", [], "any", false, false, false, 33)))) ? (CoreExtension::getAttribute($this->env, $this->source, $context["item"], "icon", [], "any", false, false, false, 33)) : (null)), null, "right center"], 33, $context, $this->getSourceContext());
                    yield "
                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 35
                yield "            </div>
        </div>
    ";
            } else {
                // line 38
                yield "        <div class=\"item\">
            <div class=\"image header title";
                // line 39
                if (CoreExtension::inFilter(($context["cur_route"] ?? null), ($context["my_routes"] ?? null))) {
                    yield " active";
                }
                yield "\" data-fold=\"fold-";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::replace(($context["icon"] ?? null), [" " => "-"]), "html", null, true);
                yield "\" tabindex=\"0\">
                <i class=\"";
                // line 40
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["icon"] ?? null), "html", null, true);
                yield " icon\" aria-hidden=\"true\"></i>
                ";
                // line 41
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["title"] ?? null), "html", null, true);
                yield "
                <i class=\"dropdown icon\" aria-hidden=\"true\"></i>
            </div>
            <div class=\"content";
                // line 44
                if (CoreExtension::inFilter(($context["cur_route"] ?? null), ($context["my_routes"] ?? null))) {
                    yield " active";
                }
                yield "\">
                ";
                // line 45
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(($context["items"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                    // line 46
                    yield "                    ";
                    yield CoreExtension::callMacro($macros["_self"], "macro_renderMenuItem", [CoreExtension::getAttribute($this->env, $this->source, $context["item"], "label", [], "any", false, false, false, 46), (((CoreExtension::getAttribute($this->env, $this->source, $context["item"], "title", [], "any", true, true, false, 46) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, $context["item"], "title", [], "any", false, false, false, 46)))) ? (CoreExtension::getAttribute($this->env, $this->source, $context["item"], "title", [], "any", false, false, false, 46)) : (null)), CoreExtension::getAttribute($this->env, $this->source, $context["item"], "route", [], "any", false, false, false, 46), (((CoreExtension::getAttribute($this->env, $this->source, $context["item"], "icon", [], "any", true, true, false, 46) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, $context["item"], "icon", [], "any", false, false, false, 46)))) ? (CoreExtension::getAttribute($this->env, $this->source, $context["item"], "icon", [], "any", false, false, false, 46)) : (null)), null, null, ($context["mode"] ?? null)], 46, $context, $this->getSourceContext());
                    yield "
                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 48
                yield "            </div>
        </div>
    ";
            }
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    // line 53
    public function macro_renderMenuItem($__label__ = null, $__title__ = null, $__route__ = null, $__icon__ = null, $__class__ = null, $__tips_position__ = null, $__mode__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "label" => $__label__,
            "title" => $__title__,
            "route" => $__route__,
            "icon" => $__icon__,
            "class" => $__class__,
            "tips_position" => $__tips_position__,
            "mode" => $__mode__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        return ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            // line 54
            yield "    ";
            if (Twig\Extension\CoreExtension::testEmpty(($context["class"] ?? null))) {
                // line 55
                yield "        ";
                $context["my_routes"] = Twig\Extension\CoreExtension::merge([CoreExtension::getAttribute($this->env, $this->source, ($context["route"] ?? null), "name", [], "any", false, false, false, 55)], (((CoreExtension::getAttribute($this->env, $this->source, ($context["route"] ?? null), "aliases", [], "any", true, true, false, 55) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, ($context["route"] ?? null), "aliases", [], "any", false, false, false, 55)))) ? (CoreExtension::getAttribute($this->env, $this->source, ($context["route"] ?? null), "aliases", [], "any", false, false, false, 55)) : ([])));
                // line 56
                yield "        ";
                if ($this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->isCurrentUrl(CoreExtension::getAttribute($this->env, $this->source, ($context["route"] ?? null), "name", [], "any", false, false, false, 56), ((((CoreExtension::getAttribute($this->env, $this->source, ($context["route"] ?? null), "args", [], "any", true, true, false, 56) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, ($context["route"] ?? null), "args", [], "any", false, false, false, 56)))) ? (CoreExtension::getAttribute($this->env, $this->source, ($context["route"] ?? null), "args", [], "any", false, false, false, 56)) : ([])) + (($context["cur_route_args"]) ?? ([]))))) {
                    // line 57
                    yield "            ";
                    $context["class"] = "active item";
                    // line 58
                    yield "        ";
                } else {
                    // line 59
                    yield "            ";
                    $context["class"] = "item";
                    // line 60
                    yield "        ";
                }
                // line 61
                yield "    ";
            }
            // line 62
            yield "    <a
            href=\"";
            // line 63
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor(CoreExtension::getAttribute($this->env, $this->source, ($context["route"] ?? null), "name", [], "any", false, false, false, 63), ((CoreExtension::getAttribute($this->env, $this->source, ($context["route"] ?? null), "args", [], "any", true, true, false, 63)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["route"] ?? null), "args", [], "any", false, false, false, 63), [])) : ([]))), "html", null, true);
            yield "\"
            class=\"";
            // line 64
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["class"] ?? null), "html", null, true);
            yield "\"
            ";
            // line 65
            if (($context["title"] ?? null)) {
                yield "title=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["title"] ?? null), "html", null, true);
                yield "\"";
            }
            // line 66
            yield "            ";
            if (($context["tips_position"] ?? null)) {
                yield "data-position=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["tips_position"] ?? null), "html", null, true);
                yield "\"";
            }
            // line 67
            yield "            ";
            if ((($context["mode"] ?? null) != "default")) {
                yield "tabindex=\"-1\"";
            }
            // line 68
            yield "    >
        ";
            // line 69
            if (($context["icon"] ?? null)) {
                // line 70
                yield "            <i class=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["icon"] ?? null), "html", null, true);
                yield " icon\" aria-hidden=\"true\"></i>
        ";
            }
            // line 72
            yield "        ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["label"] ?? null), "html", null, true);
            yield "
    </a>
";
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    // line 76
    public function macro_dashboardCard($__label__ = null, $__title__ = null, $__route__ = null, $__icon__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "label" => $__label__,
            "title" => $__title__,
            "route" => $__route__,
            "icon" => $__icon__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        return ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            // line 77
            yield "    <a class=\"ui card\" href=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor(CoreExtension::getAttribute($this->env, $this->source, ($context["route"] ?? null), "name", [], "any", false, false, false, 77), ((CoreExtension::getAttribute($this->env, $this->source, ($context["route"] ?? null), "args", [], "any", true, true, false, 77)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["route"] ?? null), "args", [], "any", false, false, false, 77), [])) : ([]))), "html", null, true);
            yield "\"";
            if (($context["title"] ?? null)) {
                yield " title=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["title"] ?? null), "html", null, true);
                yield "\"";
            }
            yield ">
        <div class=\"content\">
            <div class=\"ui header\">
                <em data-emoji=\"";
            // line 80
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["icon"] ?? null), "html", null, true);
            yield "\" class=\"medium\" aria-hidden=\"true\"></em>
                <div class=\"content\">
                    ";
            // line 82
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["label"] ?? null), "html", null, true);
            yield "
                </div>
            </div>
        </div>
    </a>
";
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    // line 89
    public function macro_drawListAction($__title__ = null, $__route__ = null, $__icon__ = null, $__extra_class__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "title" => $__title__,
            "route" => $__route__,
            "icon" => $__icon__,
            "extra_class" => $__extra_class__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        return ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            // line 90
            yield "    <a
            href=\"";
            // line 91
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor(CoreExtension::getAttribute($this->env, $this->source, ($context["route"] ?? null), "name", [], "any", false, false, false, 91), ((CoreExtension::getAttribute($this->env, $this->source, ($context["route"] ?? null), "args", [], "any", true, true, false, 91)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["route"] ?? null), "args", [], "any", false, false, false, 91), [])) : ([]))), "html", null, true);
            yield "\"
            class=\"";
            // line 92
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((array_key_exists("extra_class", $context)) ? (Twig\Extension\CoreExtension::default(($context["extra_class"] ?? null), "")) : ("")), "html", null, true);
            yield " tooltip\"
            title=\"";
            // line 93
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["title"] ?? null), "html", null, true);
            yield "\"
    >
        <i class=\"ui ";
            // line 95
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["icon"] ?? null), "html", null, true);
            yield " icon\" aria-hidden=\"true\"></i>
        <span class=\"visually-hidden\">";
            // line 96
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["title"] ?? null), "html", null, true);
            yield "</span>
    </a>
";
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    // line 100
    public function macro_drawDetailedAction($__label__ = null, $__title__ = null, $__route__ = null, $__icon__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "label" => $__label__,
            "title" => $__title__,
            "route" => $__route__,
            "icon" => $__icon__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        return ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            // line 101
            yield "    <a
        href=\"";
            // line 102
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor(CoreExtension::getAttribute($this->env, $this->source, ($context["route"] ?? null), "name", [], "any", false, false, false, 102), ((CoreExtension::getAttribute($this->env, $this->source, ($context["route"] ?? null), "args", [], "any", true, true, false, 102)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["route"] ?? null), "args", [], "any", false, false, false, 102), [])) : ([]))), "html", null, true);
            yield "\"
        title=\"";
            // line 103
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["title"] ?? null), "html", null, true);
            yield "\"
        class=\"ui item\"
    >
        <i class=\"";
            // line 106
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["icon"] ?? null), "html", null, true);
            yield " icon\" aria-hidden=\"true\"></i>
        ";
            // line 107
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["label"] ?? null), "html", null, true);
            yield "
    </a>
";
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    // line 111
    public function macro_drawBatchActionsList($__batch_actions__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "batch_actions" => $__batch_actions__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        return ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            // line 112
            yield "    <div class=\"checkboxes ui basic horizontal segments\">
        <div class=\"ui basic fitted segment batch-selection\">
            <div class=\"ui blue tertiary dropdown icon button batch-select-action\">
                <i class=\"tasks icon\" aria-hidden=\"true\"></i>
                ";
            // line 116
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("For the selection:"), "html", null, true);
            yield "
                <i class=\"dropdown icon\" aria-hidden=\"true\"></i>
                <div class=\"menu\">
                ";
            // line 119
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["batch_actions"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["batch_action"]) {
                // line 120
                yield "                    ";
                yield CoreExtension::callMacro($macros["_self"], "macro_drawBatchAction", [CoreExtension::getAttribute($this->env, $this->source, $context["batch_action"], "name", [], "any", false, false, false, 120), CoreExtension::getAttribute($this->env, $this->source, $context["batch_action"], "label", [], "any", false, false, false, 120), CoreExtension::getAttribute($this->env, $this->source, $context["batch_action"], "icon", [], "any", false, false, false, 120), (((CoreExtension::getAttribute($this->env, $this->source, $context["batch_action"], "title", [], "any", true, true, false, 120) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, $context["batch_action"], "title", [], "any", false, false, false, 120)))) ? (CoreExtension::getAttribute($this->env, $this->source, $context["batch_action"], "title", [], "any", false, false, false, 120)) : (null))], 120, $context, $this->getSourceContext());
                yield "
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['batch_action'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 122
            yield "                </div>
            </div>
        </div>
    </div>
";
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    // line 128
    public function macro_drawBatchAction($__name__ = null, $__label__ = null, $__icon__ = null, $__title__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "name" => $__name__,
            "label" => $__label__,
            "icon" => $__icon__,
            "title" => $__title__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        return ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            // line 129
            yield "    <span class=\"ui item batch-action batch-";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["name"] ?? null), "html", null, true);
            yield "\" data-value=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["name"] ?? null), "html", null, true);
            yield "\"";
            if (($context["title"] ?? null)) {
                yield " title=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["title"] ?? null), "html", null, true);
                yield "\"";
            }
            yield ">
        <i class=\"";
            // line 130
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["icon"] ?? null), "html", null, true);
            yield " icon\" aria-hidden=\"true\"></i> ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["label"] ?? null), "html", null, true);
            yield "
    </span>
";
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "macros.twig";
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
        return array (  478 => 130,  465 => 129,  450 => 128,  440 => 122,  431 => 120,  427 => 119,  421 => 116,  415 => 112,  403 => 111,  394 => 107,  390 => 106,  384 => 103,  380 => 102,  377 => 101,  362 => 100,  353 => 96,  349 => 95,  344 => 93,  340 => 92,  336 => 91,  333 => 90,  318 => 89,  306 => 82,  301 => 80,  288 => 77,  273 => 76,  263 => 72,  257 => 70,  255 => 69,  252 => 68,  247 => 67,  240 => 66,  234 => 65,  230 => 64,  226 => 63,  223 => 62,  220 => 61,  217 => 60,  214 => 59,  211 => 58,  208 => 57,  205 => 56,  202 => 55,  199 => 54,  181 => 53,  172 => 48,  163 => 46,  159 => 45,  153 => 44,  147 => 41,  143 => 40,  135 => 39,  132 => 38,  127 => 35,  118 => 33,  114 => 32,  108 => 29,  104 => 28,  95 => 27,  92 => 26,  86 => 25,  83 => 24,  78 => 23,  75 => 22,  60 => 21,  54 => 127,  51 => 110,  48 => 99,  45 => 88,  42 => 75,  39 => 52,);
    }

    public function getSourceContext()
    {
        return new Source("", "macros.twig", "/var/www/galette/templates/default/macros.twig");
    }
}
