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

/* elements/edit_socials.html.twig */
class __TwigTemplate_03fca94b36da089077f34751bad5136d extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'social_edit' => [$this, 'block_social_edit'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 21
        if (((($context["tabbed"]) ?? (false)) == true)) {
            // line 22
            yield "<div id=\"social\" class=\"ui";
            yield (((($context["tab"] ?? null) == "social")) ? (" active") : (""));
            yield " tab segment\" data-tab=\"social\">
    <div class=\"ui stackable two column grid\">
        <div class=\"ten wide column\">
    ";
            // line 25
            yield from $this->unwrap()->yieldBlock('social_edit', $context, $blocks);
            // line 64
            yield "        </div>
        <div class=\"six wide column\">
            <div class=\"field inline\">
                <div class=\"ui right aligned toggle checkbox\">
                    <input type=\"checkbox\" name=\"pref_disable_members_socials\" id=\"pref_disable_members_socials\" value=\"1\" ";
            // line 68
            if (CoreExtension::getAttribute($this->env, $this->source, ($context["preferences"] ?? null), "pref_disable_members_socials", [], "any", false, false, false, 68)) {
                yield " checked=\"checked\"";
            }
            yield "/>
                    <label for=\"pref_disable_members_socials\">";
            // line 69
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("Disable social networks on member form"), "html", null, true);
            yield "</label>
                </div>
            </div>
        </div>
    </div>
</div>
";
        } else {
            // line 76
            yield "    <div id=\"social\" class=\"ui styled fluid accordion field\">
        <div class=\"active title\">
            <i class=\"jsonly displaynone icon dropdown\" aria-hidden=\"true\"></i>
            ";
            // line 79
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("Social networks"), "html", null, true);
            yield "
        </div>
        <div class=\"active content field\">
            ";
            // line 82
            yield from             $this->unwrap()->yieldBlock("social_edit", $context, $blocks);
            yield "
        </div>
    </div>
";
        }
        return; yield '';
    }

    // line 25
    public function block_social_edit($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 26
        yield "        ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["socials"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["social"]) {
            // line 27
            yield "            <div class=\"inline field stored\">
                <label for=\"social_";
            // line 28
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["social"], "id", [], "any", false, false, false, 28), "html", null, true);
            yield "\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["social"], "getSystemType", [CoreExtension::getAttribute($this->env, $this->source, $context["social"], "type", [], "any", false, false, false, 28)], "method", false, false, false, 28), "html", null, true);
            yield "</label>
                <div class=\"ui right action input\">
                    <input type=\"text\" name=\"social_";
            // line 30
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["social"], "id", [], "any", false, false, false, 30), "html", null, true);
            yield "\" id=\"social_";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["social"], "id", [], "any", false, false, false, 30), "html", null, true);
            yield "\" value=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["social"], "url", [], "any", false, false, false, 30), "html", null, true);
            yield "\" class=\"large\"/>
                    <a href=\"#\" class=\"ui icon red button delete delsocial\" title=\"";
            // line 31
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::replace($this->env->getFunction('_T')->getCallable()("Remove %type"), ["%type" => CoreExtension::getAttribute($this->env, $this->source, $context["social"], "getSystemType", [CoreExtension::getAttribute($this->env, $this->source, $context["social"], "type", [], "any", false, false, false, 31)], "method", false, false, false, 31)]));
            yield "\">
                        <i class=\"trash icon\" aria-hidden=\"true\"></i>
                        <span class=\"visually-hidden\">";
            // line 33
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::replace($this->env->getFunction('_T')->getCallable()("Remove %type"), ["%type" => CoreExtension::getAttribute($this->env, $this->source, $context["social"], "getSystemType", [CoreExtension::getAttribute($this->env, $this->source, $context["social"], "type", [], "any", false, false, false, 33)], "method", false, false, false, 33)]));
            yield "</span>
                    </a>
                </div>
            </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['social'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 38
        yield "            ";
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), ($context["socials"] ?? null)) > 0)) {
            yield "<div class=\"ui divider\"></div>";
        }
        // line 39
        yield "            <div class=\"field addsocial\">
                <label>";
        // line 40
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("Add new social network"), "html", null, true);
        yield "</label>
                <div class=\"combo-social fields\">
                    <div class=\"field\">
                        <div id=\"social_new_type_1\" class=\"jsonly search-dropdown socials-dropdown ui input\">
                            <input id=\"social_new_type_input_1\" type=\"hidden\" name=\"social_new_type_1\" value=\"\">
                            <i class=\"jsonly displaynone dropdown icon\" aria-hidden=\"true\"></i>
                            <div class=\"jsonly displaynone default text\">";
        // line 46
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("Choose or enter your own..."), "html", null, true);
        yield "</div>
                            <div class=\"jsonly displaynone menu\">
                            ";
        // line 48
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, ($context["osocials"] ?? null), "getSystemTypes", [false], "method", false, false, false, 48));
        foreach ($context['_seq'] as $context["_key"] => $context["social_type"]) {
            // line 49
            yield "                                <div class=\"item\" data-value=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["social_type"], "html", null, true);
            yield "\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["osocials"] ?? null), "getSystemType", [$context["social_type"]], "method", false, false, false, 49), "html", null, true);
            yield "</div>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['social_type'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 51
        yield "                            </div>
                        </div>
                    </div>
                    <div class=\"field\">
                        <input type=\"text\" name=\"social_new_value_1\" id=\"social_new_value_1\" value=\"\" size=\"50\" class=\"value\"/>
                    </div>
                </div>
                <a href=\"#\" class=\"ui tiny green labeled icon button action addsocial\">
                    <i class=\"plus icon\" aria-hidden=\"true\"></i>
                    ";
        // line 60
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("Add"), "html", null, true);
        yield "
                </a>
            </div>
    ";
        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "elements/edit_socials.html.twig";
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
        return array (  184 => 60,  173 => 51,  162 => 49,  158 => 48,  153 => 46,  144 => 40,  141 => 39,  136 => 38,  125 => 33,  120 => 31,  112 => 30,  105 => 28,  102 => 27,  97 => 26,  93 => 25,  83 => 82,  77 => 79,  72 => 76,  62 => 69,  56 => 68,  50 => 64,  48 => 25,  41 => 22,  39 => 21,);
    }

    public function getSourceContext()
    {
        return new Source("", "elements/edit_socials.html.twig", "/var/www/galette/templates/default/elements/edit_socials.html.twig");
    }
}
