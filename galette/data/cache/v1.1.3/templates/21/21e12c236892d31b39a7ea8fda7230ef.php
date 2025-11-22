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

/* pages/configuration_texts.html.twig */
class __TwigTemplate_7a3277ce04b24a7c3fe04d24e2618811 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'content' => [$this, 'block_content'],
            'javascripts' => [$this, 'block_javascripts'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 21
        return "page.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("page.html.twig", "pages/configuration_texts.html.twig", 21);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 23
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 24
        yield "        <div class=\"ui top attached accordion-styled header\">
            ";
        // line 25
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("Choose an entry"), "html", null, true);
        yield "
        </div>
        <div class=\"ui bottom attached accordion-styled segment\">
            <form action=\"";
        // line 28
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("changeText"), "html", null, true);
        yield "\" method=\"post\" enctype=\"multipart/form-data\" class=\"ui form\">
                <div class=\"fields\">
                    <div class=\"inline field\">
                        <label for=\"sel_lang\">";
        // line 31
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("Language:"), "html", null, true);
        yield "</label>
                        <div class=\"ui dropdown selection autosubmit\">
                            <input type=\"hidden\" name=\"sel_lang\" value=\"";
        // line 33
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["cur_lang"] ?? null), "html", null, true);
        yield "\">
                            <i class=\"dropdown icon\"></i>
                            <div class=\"text\">";
        // line 35
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["cur_lang_name"] ?? null), "html", null, true);
        yield "</div>
                            <div class=\"menu\">
                            ";
        // line 37
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["langlist"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["langue"]) {
            // line 38
            yield "                                <div class=\"item";
            if ((($context["cur_lang"] ?? null) == CoreExtension::getAttribute($this->env, $this->source, $context["langue"], "getID", [], "method", false, false, false, 38))) {
                yield " active selected ";
            }
            yield "\" data-value=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["langue"], "getID", [], "method", false, false, false, 38), "html", null, true);
            yield "\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["langue"], "getName", [], "method", false, false, false, 38), "html", null, true);
            yield "</div>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['langue'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 40
        yield "                            </div>
                        </div>
                    </div>
                    <div class=\"inline field\">
                        <label for=\"sel_ref\">";
        // line 44
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("Reference:"), "html", null, true);
        yield "</label>
                        <div class=\"ui dropdown selection autosubmit\">
                            <input type=\"hidden\" name=\"sel_ref\" value=\"";
        // line 46
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["cur_ref"] ?? null), "html", null, true);
        yield "\">
                            <i class=\"dropdown icon\"></i>
                            <div class=\"text\">";
        // line 48
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["reflist"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["ref"]) {
            if ((($context["cur_ref"] ?? null) == CoreExtension::getAttribute($this->env, $this->source, $context["ref"], "tref", [], "any", false, false, false, 48))) {
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["ref"], "tcomment", [], "any", false, false, false, 48), "html", null, true);
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ref'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        yield "</div>
                            <div class=\"menu\">
                            ";
        // line 50
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["reflist"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["ref"]) {
            // line 51
            yield "                                <div class=\"item";
            if ((($context["cur_ref"] ?? null) == CoreExtension::getAttribute($this->env, $this->source, $context["ref"], "tref", [], "any", false, false, false, 51))) {
                yield " active selected ";
            }
            yield "\" data-value=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["ref"], "tref", [], "any", false, false, false, 51), "html", null, true);
            yield "\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["ref"], "tcomment", [], "any", false, false, false, 51), "html", null, true);
            yield "</div>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ref'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 53
        yield "                            </div>
                        </div>
                    </div>
                    ";
        // line 56
        yield from         $this->loadTemplate("components/forms/csrf.html.twig", "pages/configuration_texts.html.twig", 56)->unwrap()->yield($context);
        // line 57
        yield "                </div>
            </form>
        </div>

        <form action=\"";
        // line 61
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("texts"), "html", null, true);
        yield "\" method=\"post\" enctype=\"multipart/form-data\" class=\"ui form\">
            <div class=\"ui top attached accordion-styled header\">
                ";
        // line 63
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["mtxt"] ?? null), "tcomment", [], "any", false, false, false, 63), "html", null, true);
        yield "
            </div>
            <div class=\"ui bottom attached accordion-styled segment\">
                <div class=\"active content field\">
                    <div class=\"field\">
                        <label for=\"tsubject\">";
        // line 68
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("Email Subject"), "html", null, true);
        yield "</label>
                        <div class=\"ui corner labeled input\">
                            <input type=\"text\" name=\"text_subject\" id=\"tsubject\" value=\"";
        // line 70
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["mtxt"] ?? null), "tsubject", [], "any", false, false, false, 70), "html", null, true);
        yield "\" maxlength=\"255\" size=\"32\" class=\"codeeditor\"/>
                            <div class=\"ui corner label\"></div>
                        </div>
                        <span class=\"exemple\">";
        // line 73
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("(Max 255 characters)"), "html", null, true);
        yield "</span>
                    </div>
                    <div class=\"field\">
                        <label id=\"body_label\" for=\"text_body\">";
        // line 76
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("Email Body:"), "html", null, true);
        yield "</label>
                        <div class=\"ui corner labeled input\">
                            <div class=\"ui corner label\"></div>
                            <textarea name=\"text_body\" id=\"text_body\" cols=\"64\" rows=\"15\" class=\"codeeditor\">";
        // line 79
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["mtxt"] ?? null), "tbody", [], "any", false, false, false, 79), "html", null, true);
        yield "</textarea>
                        </div>
                    </div>
                </div>
            </div>
            <div class=\"ui basic center aligned segment\">
                <input type=\"hidden\" name=\"cur_lang\"  value=\"";
        // line 85
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["cur_lang"] ?? null), "html", null, true);
        yield "\"/>
                <input type=\"hidden\" name=\"cur_ref\" value=\"";
        // line 86
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["cur_ref"] ?? null), "html", null, true);
        yield "\"/>
                <input type=\"hidden\" name=\"valid\" id=\"valid\" value=\"1\"/>
                <button type=\"submit\" class=\"ui labeled icon primary button action\">
                    <i class=\"save icon\" aria-hidden=\"true\"></i> ";
        // line 89
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("Save"), "html", null, true);
        yield "
                </button>
                ";
        // line 91
        yield from         $this->loadTemplate("components/forms/csrf.html.twig", "pages/configuration_texts.html.twig", 91)->unwrap()->yield($context);
        // line 92
        yield "            </div>
        </form>
        ";
        // line 94
        yield from         $this->loadTemplate("modals/replacements_legend.html.twig", "pages/configuration_texts.html.twig", 94)->unwrap()->yield(CoreExtension::merge($context, ["legends" => CoreExtension::getAttribute($this->env, $this->source, ($context["texts"] ?? null), "getLegend", [], "method", false, false, false, 94), "cur_ref" => ($context["cur_ref"] ?? null)]));
        return; yield '';
    }

    // line 97
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        yield "        <script type=\"text/javascript\">
            \$(function() {
                _addLegendButton('.ui.corner.label');
                _handleLegend();
                _bindFomanticComponents();
            });
        </script>
";
        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "pages/configuration_texts.html.twig";
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
        return array (  234 => 97,  229 => 94,  225 => 92,  223 => 91,  218 => 89,  212 => 86,  208 => 85,  199 => 79,  193 => 76,  187 => 73,  181 => 70,  176 => 68,  168 => 63,  163 => 61,  157 => 57,  155 => 56,  150 => 53,  135 => 51,  131 => 50,  117 => 48,  112 => 46,  107 => 44,  101 => 40,  86 => 38,  82 => 37,  77 => 35,  72 => 33,  67 => 31,  61 => 28,  55 => 25,  52 => 24,  48 => 23,  37 => 21,);
    }

    public function getSourceContext()
    {
        return new Source("", "pages/configuration_texts.html.twig", "/var/www/galette/templates/default/pages/configuration_texts.html.twig");
    }
}
