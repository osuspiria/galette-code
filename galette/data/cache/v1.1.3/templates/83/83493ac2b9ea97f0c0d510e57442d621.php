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

/* pages/members_public_gallery.html.twig */
class __TwigTemplate_faf7d3aa3dacfdbc7c776b9bbb0016b0 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'infoline' => [$this, 'block_infoline'],
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
        $context["is_public"] =  !CoreExtension::getAttribute($this->env, $this->source, ($context["login"] ?? null), "isLogged", [], "method", false, false, false, 24);
        // line 25
        $context["list_type"] = (((($context["nb_members"] ?? null) > 0)) ? ("cards") : ("empty"));
        // line 21
        $this->parent = $this->loadTemplate("elements/list.html.twig", "pages/members_public_gallery.html.twig", 21);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 53
    public function block_infoline($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 54
        yield "    ";
        $context["infoline"] = ["label" => Twig\Extension\CoreExtension::replace($this->env->getFunction('_Tn')->getCallable()("%count member", "%count members",         // line 55
($context["nb_members"] ?? null)), ["%count" => ($context["nb_members"] ?? null)]), "route" => ["name" => "filterPublicList", "args" => ["type" => "trombi"]]];
        // line 63
        yield "    ";
        yield from $this->yieldParentBlock("infoline", $context, $blocks);
        yield "
";
        return; yield '';
    }

    // line 66
    public function block_search($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 67
        yield "    <div class=\"ui icon info visible message\">
        <i class=\"info circle blue icon\" aria-hidden=\"true\"></i>
        <div class=\"content\">
            ";
        // line 70
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("This page shows only members who have choosen to be visible on the public lists and are up-to-date within their contributions. If you want your account to be visible here, edit your profile and check 'Be visible in the members list'"), "html", null, true);
        yield "
        </div>
    </div>
";
        return; yield '';
    }

    // line 75
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 76
        yield "    ";
        if ((($context["nb_members"] ?? null) > 0)) {
            // line 77
            yield "        ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, ($context["members"] ?? null), "staff", [], "any", false, false, false, 77));
            foreach ($context['_seq'] as $context["_key"] => $context["member"]) {
                // line 78
                yield "            ";
                yield CoreExtension::callMacro($macros["_self"], "macro_drawEntry", [$context["member"], true, ($context["time"] ?? null)], 78, $context, $this->getSourceContext());
                yield "
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['member'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 80
            yield "        ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, ($context["members"] ?? null), "members", [], "any", false, false, false, 80));
            foreach ($context['_seq'] as $context["_key"] => $context["member"]) {
                // line 81
                yield "            ";
                yield CoreExtension::callMacro($macros["_self"], "macro_drawEntry", [$context["member"], false, ($context["time"] ?? null)], 81, $context, $this->getSourceContext());
                yield "
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['member'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 83
            yield "    ";
        } else {
            // line 84
            yield "        <div class=\"ui small message\">
            <div class=\"content\">
                <em>";
            // line 86
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("No member"), "html", null, true);
            yield "</em>
            </div>
        </div>
    ";
        }
        return; yield '';
    }

    // line 27
    public function macro_drawEntry($__member__ = null, $__staff__ = null, $__time__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "member" => $__member__,
            "staff" => $__staff__,
            "time" => $__time__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        return ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            // line 28
            yield "    <div class=\"ui fluid card\">
        ";
            // line 29
            $context["mid"] = CoreExtension::getAttribute($this->env, $this->source, ($context["member"] ?? null), "id", [], "any", false, false, false, 29);
            // line 30
            yield "        <div class=\"image\">
            <img
                    src=\"";
            // line 32
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("photo", ["id" => CoreExtension::getAttribute($this->env, $this->source, ($context["member"] ?? null), "id", [], "any", false, false, false, 32), "rand" => ($context["time"] ?? null)]), "html", null, true);
            yield "\"
                    width=\"";
            // line 33
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["member"] ?? null), "picture", [], "any", false, false, false, 33), "getOptimalWidth", [], "method", false, false, false, 33), "html", null, true);
            yield "\"
                    height=\"";
            // line 34
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["member"] ?? null), "picture", [], "any", false, false, false, 34), "getOptimalHeight", [], "method", false, false, false, 34), "html", null, true);
            yield "\"
                    alt=\"";
            // line 35
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["member"] ?? null), "sfullname", [], "any", false, false, false, 35), "html", null, true);
            if ((CoreExtension::getAttribute($this->env, $this->source, ($context["member"] ?? null), "nickname", [], "any", false, false, false, 35) != "")) {
                yield " (";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["member"] ?? null), "nickname", [], "any", false, false, false, 35));
                yield ")";
            }
            yield "\"
            />
        </div>
        <div class=\"center aligned content\">
            <div class=\"header\">";
            // line 39
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["member"] ?? null), "sfullname", [], "any", false, false, false, 39), "html", null, true);
            yield "</div>
            <a class=\"ui label\">
    ";
            // line 41
            if (($context["staff"] ?? null)) {
                // line 42
                yield "                <i class=\"ui user tie orange icon tooltip\" aria-hidden=\"true\"></i>
    ";
            }
            // line 44
            yield "                ";
            if ((CoreExtension::getAttribute($this->env, $this->source, ($context["member"] ?? null), "nickname", [], "any", false, false, false, 44) != "")) {
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["member"] ?? null), "nickname", [], "any", false, false, false, 44));
            }
            // line 45
            yield "    ";
            if (($context["staff"] ?? null)) {
                // line 46
                yield "                <div class=\"detail\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["member"] ?? null), "sstatus", [], "any", false, false, false, 46), "html", null, true);
                yield "</div>
    ";
            }
            // line 48
            yield "            </a>
        </div>
    </div>
";
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "pages/members_public_gallery.html.twig";
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
        return array (  215 => 48,  209 => 46,  206 => 45,  201 => 44,  197 => 42,  195 => 41,  190 => 39,  178 => 35,  174 => 34,  170 => 33,  166 => 32,  162 => 30,  160 => 29,  157 => 28,  143 => 27,  133 => 86,  129 => 84,  126 => 83,  117 => 81,  112 => 80,  103 => 78,  98 => 77,  95 => 76,  91 => 75,  82 => 70,  77 => 67,  73 => 66,  65 => 63,  63 => 55,  61 => 54,  57 => 53,  52 => 21,  50 => 25,  48 => 24,  46 => 23,  39 => 21,);
    }

    public function getSourceContext()
    {
        return new Source("", "pages/members_public_gallery.html.twig", "/var/www/galette/templates/default/pages/members_public_gallery.html.twig");
    }
}
