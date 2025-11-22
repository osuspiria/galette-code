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

/* pages/members_public_list.html.twig */
class __TwigTemplate_0534c4f4cba09df11100612538064f08 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'infoline' => [$this, 'block_infoline'],
            'header' => [$this, 'block_header'],
            'search' => [$this, 'block_search'],
            'body' => [$this, 'block_body'],
        ];
        $macros["_self"] = $this->macros["_self"] = $this;
    }

    protected function doGetParent(array $context)
    {
        // line 21
        return "elements/list.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 23
        $context["nb"] = Twig\Extension\CoreExtension::length($this->env->getCharset(), ($context["members"] ?? null));
        // line 24
        $context["no_action"] = true;
        // line 25
        $context["is_public"] =  !CoreExtension::getAttribute($this->env, $this->source, ($context["login"] ?? null), "isLogged", [], "method", false, false, false, 25);
        // line 69
        $context["form"] = ["order" => ["name" => "publicList", "args" => ["type" => "list"]]];
        // line 21
        $this->parent = $this->loadTemplate("elements/list.html.twig", "pages/members_public_list.html.twig", 21);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 78
    public function block_infoline($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 79
        yield "    ";
        $context["infoline"] = ["label" => Twig\Extension\CoreExtension::replace($this->env->getFunction('_Tn')->getCallable()("%count member", "%count members",         // line 80
($context["nb_members"] ?? null)), ["%count" => ($context["nb_members"] ?? null)]), "route" => ["name" => "filterPublicList", "args" => ["type" => "list"]]];
        // line 88
        yield "    ";
        yield from $this->yieldParentBlock("infoline", $context, $blocks);
        yield "
";
        return; yield '';
    }

    // line 91
    public function block_header($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 92
        yield "    ";
        $context["columns"] = [["label" => $this->env->getFunction('_T')->getCallable()("Name"), "order" => Twig\Extension\CoreExtension::constant("Galette\\Repository\\Members::ORDERBY_NAME")], ["label" => $this->env->getFunction('_T')->getCallable()("Nickname"), "order" => Twig\Extension\CoreExtension::constant("Galette\\Repository\\Members::ORDERBY_NICKNAME")]];
        // line 96
        yield "
    ";
        // line 97
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["login"] ?? null), "isLogged", [], "method", false, false, false, 97)) {
            // line 98
            yield "        ";
            $context["columns"] = Twig\Extension\CoreExtension::merge(($context["columns"] ?? null), [["label" => $this->env->getFunction('_T')->getCallable()("Email")]]);
            // line 101
            yield "    ";
        }
        // line 102
        yield "
    ";
        // line 103
        $context["columns"] = Twig\Extension\CoreExtension::merge(($context["columns"] ?? null), [["label" => $this->env->getFunction('_T')->getCallable()("Information")]]);
        // line 106
        yield "
    ";
        // line 107
        yield from $this->yieldParentBlock("header", $context, $blocks);
        yield "
";
        return; yield '';
    }

    // line 110
    public function block_search($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 111
        yield "    <div class=\"ui icon info visible message\">
        <i class=\"info circle blue icon\" aria-hidden=\"true\"></i>
        <div class=\"content\">
            ";
        // line 114
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("This page shows only members who have choosen to be visible on the public lists and are up-to-date within their contributions. If you want your account to be visible here, edit your profile and check 'Be visible in the members list'"), "html", null, true);
        yield "
        </div>
    </div>
";
        return; yield '';
    }

    // line 119
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 120
        yield "    ";
        if ((($context["nb_members"] ?? null) > 0)) {
            // line 121
            yield "        ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, ($context["members"] ?? null), "staff", [], "any", false, false, false, 121));
            foreach ($context['_seq'] as $context["_key"] => $context["member"]) {
                // line 122
                yield "            ";
                yield CoreExtension::callMacro($macros["_self"], "macro_drawEntry", [$context["member"], true], 122, $context, $this->getSourceContext());
                yield "
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['member'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 124
            yield "
        ";
            // line 125
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, ($context["members"] ?? null), "members", [], "any", false, false, false, 125));
            foreach ($context['_seq'] as $context["_key"] => $context["member"]) {
                // line 126
                yield "            ";
                yield CoreExtension::callMacro($macros["_self"], "macro_drawEntry", [$context["member"], false], 126, $context, $this->getSourceContext());
                yield "
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['member'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 128
            yield "    ";
        } else {
            // line 129
            yield "        <tr>
            <td class=\"emptylist\" colspan=\"4\">
                ";
            // line 131
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("No member"), "html", null, true);
            yield "
            </td>
        </tr>
    ";
        }
        return; yield '';
    }

    // line 27
    public function macro_drawEntry($__member__ = null, $__staff__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "member" => $__member__,
            "staff" => $__staff__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        return ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            // line 28
            yield "    ";
            $context["rclass"] = CoreExtension::getAttribute($this->env, $this->source, ($context["member"] ?? null), "getRowClass", [], "method", false, false, false, 28);
            // line 29
            yield "    <tr>
        <td class=\"";
            // line 30
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["rclass"] ?? null), "html", null, true);
            yield " username_row\" data-scope=\"row\">
            ";
            // line 31
            if (CoreExtension::getAttribute($this->env, $this->source, ($context["member"] ?? null), "isCompany", [], "method", false, false, false, 31)) {
                // line 32
                yield "                <span>
                        <i class=\"ui building outline icon tooltip\" title=\"";
                // line 33
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("Is a company"), "html", null, true);
                yield "\" aria-hidden=\"true\"></i>
                        <span class=\"ui special popup\">";
                // line 34
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("Is a company"), "html", null, true);
                yield "</span>
                    </span>
            ";
            } elseif (CoreExtension::getAttribute($this->env, $this->source,             // line 36
($context["member"] ?? null), "isMan", [], "method", false, false, false, 36)) {
                // line 37
                yield "                <span>
                        <i class=\"ui male icon tooltip\" title=\"";
                // line 38
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("Is a man"), "html", null, true);
                yield "\" aria-hidden=\"true\"></i>
                        <span class=\"ui special popup\">";
                // line 39
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("Is a man"), "html", null, true);
                yield "</span>
                    </span>
            ";
            } elseif (CoreExtension::getAttribute($this->env, $this->source,             // line 41
($context["member"] ?? null), "isWoman", [], "method", false, false, false, 41)) {
                // line 42
                yield "                <span>
                        <i class=\"ui female icon tooltip\" title=\"";
                // line 43
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("Is a woman"), "html", null, true);
                yield "\" aria-hidden=\"true\"></i>
                        <span class=\"ui special popup\">";
                // line 44
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("Is a woman"), "html", null, true);
                yield "</span>
                    </span>
            ";
            } else {
                // line 47
                yield "                <i class=\"ui icon\" aria-hidden=\"true\"></i>
            ";
            }
            // line 49
            yield "            ";
            if ((CoreExtension::getAttribute($this->env, $this->source, ($context["member"] ?? null), "website", [], "any", false, false, false, 49) != "")) {
                // line 50
                yield "                <a href=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["member"] ?? null), "website", [], "any", false, false, false, 50), "html", null, true);
                yield "\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["member"] ?? null), "sfullname", [], "any", false, false, false, 50), "html", null, true);
                yield "</a>
            ";
            } else {
                // line 52
                yield "                ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["member"] ?? null), "sfullname", [], "any", false, false, false, 52), "html", null, true);
                yield "
            ";
            }
            // line 54
            yield "            ";
            if (($context["staff"] ?? null)) {
                // line 55
                yield "                <a class=\"ui label\">
                    <i class=\"ui user tie orange icon tooltip\" aria-hidden=\"true\"></i>
                    ";
                // line 57
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["member"] ?? null), "sstatus", [], "any", false, false, false, 57), "html", null, true);
                yield "
                </a>
            ";
            }
            // line 60
            yield "        </td>
        <td class=\"";
            // line 61
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["rclass"] ?? null), "html", null, true);
            yield "\" data-col-label=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("Nickname"), "html", null, true);
            yield "\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["member"] ?? null), "nickname", [], "any", false, false, false, 61));
            yield "</td>
        ";
            // line 62
            if (CoreExtension::getAttribute($this->env, $this->source, ($context["login"] ?? null), "isLogged", [], "method", false, false, false, 62)) {
                // line 63
                yield "            <td class=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["rclass"] ?? null), "html", null, true);
                yield "\" data-col-label=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("Email"), "html", null, true);
                yield "\"><a href=\"mailto:";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["member"] ?? null), "email", [], "any", false, false, false, 63), "html", null, true);
                yield "\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["member"] ?? null), "email", [], "any", false, false, false, 63), "html", null, true);
                yield "</a></td>
        ";
            }
            // line 65
            yield "        <td class=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["rclass"] ?? null), "html", null, true);
            yield "\" data-col-label=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("Information"), "html", null, true);
            yield "\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["member"] ?? null), "others_infos", [], "any", false, false, false, 65), "html", null, true);
            yield "</td>
    </tr>
";
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "pages/members_public_list.html.twig";
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
        return array (  306 => 65,  294 => 63,  292 => 62,  284 => 61,  281 => 60,  275 => 57,  271 => 55,  268 => 54,  262 => 52,  254 => 50,  251 => 49,  247 => 47,  241 => 44,  237 => 43,  234 => 42,  232 => 41,  227 => 39,  223 => 38,  220 => 37,  218 => 36,  213 => 34,  209 => 33,  206 => 32,  204 => 31,  200 => 30,  197 => 29,  194 => 28,  181 => 27,  171 => 131,  167 => 129,  164 => 128,  155 => 126,  151 => 125,  148 => 124,  139 => 122,  134 => 121,  131 => 120,  127 => 119,  118 => 114,  113 => 111,  109 => 110,  102 => 107,  99 => 106,  97 => 103,  94 => 102,  91 => 101,  88 => 98,  86 => 97,  83 => 96,  80 => 92,  76 => 91,  68 => 88,  66 => 80,  64 => 79,  60 => 78,  55 => 21,  53 => 69,  51 => 25,  49 => 24,  47 => 23,  40 => 21,);
    }

    public function getSourceContext()
    {
        return new Source("", "pages/members_public_list.html.twig", "/var/www/galette/templates/default/pages/members_public_list.html.twig");
    }
}
