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

/* pages/configuration_dynamic_translations.html.twig */
class __TwigTemplate_ac6584972f408938ac61ba68e4f97a8b extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 21
        return $this->loadTemplate((((($context["mode"] ?? null) == "ajax")) ? ("ajax.html.twig") : ("page.html.twig")), "pages/configuration_dynamic_translations.html.twig", 21);
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        yield from $this->getParent($context)->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 23
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 24
        if ((array_key_exists("trans", $context) && (Twig\Extension\CoreExtension::length($this->env->getCharset(), ($context["trans"] ?? null)) > 0))) {
            // line 25
            yield "    ";
            if ((($context["exists"] ?? null) && (($context["mode"] ?? null) != "ajax"))) {
                // line 26
                yield "        <div class=\"ui top attached accordion-styled header\">
            ";
                // line 27
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("Choose label to translate"), "html", null, true);
                yield "
        </div>
        <div class=\"ui bottom attached accordion-styled segment\">
            <form action=\"";
                // line 30
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("dynamicTranslations"), "html", null, true);
                yield "\" method=\"get\" enctype=\"multipart/form-data\" id=\"select_orig\" class=\"ui form\">
                <div class=\"inline field\">
                    <div class=\"ui fluid dropdown selection autosubmit\">
                        <input type=\"hidden\" name=\"text_orig\" value=\"";
                // line 33
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["text_orig"] ?? null), "html", null, true);
                yield "\">
                        <i class=\"dropdown icon\"></i>
                        <div class=\"text\">";
                // line 35
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["text_orig"] ?? null), "html", null, true);
                yield "</div>
                        <div class=\"menu\">
                        ";
                // line 37
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(($context["orig"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["value"]) {
                    // line 38
                    yield "                            <div class=\"item";
                    if (($context["value"] == ($context["text_orig"] ?? null))) {
                        yield " active selected ";
                    }
                    yield "\" data-value=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["value"], "html", null, true);
                    yield "\">";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["value"], "html", null, true);
                    yield "</div>
                        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['value'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 40
                yield "                        </div>
                    </div>
                    ";
                // line 42
                yield from                 $this->loadTemplate("components/forms/csrf.html.twig", "pages/configuration_dynamic_translations.html.twig", 42)->unwrap()->yield($context);
                // line 43
                yield "                </div>
            </form>
        </div>
    ";
            }
            // line 47
            yield "
        <form action=\"";
            // line 48
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("editDynamicTranslation"), "html", null, true);
            yield "\" method=\"post\" enctype=\"multipart/form-data\" class=\"ui equal width form\">
    ";
            // line 49
            if ( !($context["exists"] ?? null)) {
                // line 50
                yield "            <div class=\"field\">
                <label>";
                // line 51
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::replace($this->env->getFunction('_T')->getCallable()("Original text: '%s'"), ["%s" => $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["text_orig"] ?? null))]), "html", null, true);
                yield "</label>
                <input type=\"hidden\" name=\"new\" value=\"true\"/>
            </div>
    ";
            }
            // line 55
            yield "            <div class=\"ui top attached accordion-styled header\">
                ";
            // line 56
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::replace($this->env->getFunction('_T')->getCallable()("Translation of '%s' label"), ["%s" => ($context["text_orig"] ?? null)]), "html", null, true);
            yield "
            </div>
            <div class=\"ui bottom attached accordion-styled segment\">
                <div class=\"active content field\">
                    <table class=\"ui striped table\">
    ";
            // line 61
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["trans"] ?? null));
            foreach ($context['_seq'] as $context["k"] => $context["text"]) {
                // line 62
                yield "                        <tr>
                            <td class=\"three wide\"><label for=\"text_trans_";
                // line 63
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["text"], "key", [], "any", false, false, false, 63), "html", null, true);
                yield "\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["text"], "name", [], "any", false, false, false, 63), "html", null, true);
                yield "</label></td>
                            <td class=\"thirteen wide\">
                                <input type=\"text\" name=\"text_trans_";
                // line 65
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["text"], "key", [], "any", false, false, false, 65), "html", null, true);
                yield "\" id=\"text_trans_";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["text"], "key", [], "any", false, false, false, 65), "html", null, true);
                yield "\" value=\"";
                if (CoreExtension::getAttribute($this->env, $this->source, $context["text"], "text", [], "any", false, false, false, 65)) {
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["text"], "text", [], "any", false, false, false, 65));
                }
                yield "\"/>
                            </td>
                        </tr>
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['k'], $context['text'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 69
            yield "                    </table>
                    <input type=hidden name=\"text_orig\" value=\"";
            // line 70
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["text_orig"] ?? null));
            yield "\"/>
                </div>
            </div>
    ";
            // line 73
            if ((($context["mode"] ?? null) != "ajax")) {
                // line 74
                yield "            <div class=\"ui basic center aligned segment\">
                <button type=\"submit\" name=\"trans\" class=\"ui labeled icon primary button action\">
                    <i class=\"save icon\" aria-hidden=\"true\"></i> ";
                // line 76
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("Save"), "html", null, true);
                yield "
                </button>
            </div>
    ";
            } else {
                // line 80
                yield "            <input type=\"hidden\" name=\"trans\" id=\"trans\" value=\"true\"/>
            <input type=\"hidden\" name=\"redirect_uri\" id=\"redirect_uri\" value=\"\"/>
    ";
            }
            // line 83
            yield "                ";
            yield from             $this->loadTemplate("components/forms/csrf.html.twig", "pages/configuration_dynamic_translations.html.twig", 83)->unwrap()->yield($context);
            // line 84
            yield "        </form>
";
        } else {
            // line 86
            yield "        <p>";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("No fields to translate."), "html", null, true);
            yield "</p>
";
        }
        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "pages/configuration_dynamic_translations.html.twig";
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
        return array (  205 => 86,  201 => 84,  198 => 83,  193 => 80,  186 => 76,  182 => 74,  180 => 73,  174 => 70,  171 => 69,  155 => 65,  148 => 63,  145 => 62,  141 => 61,  133 => 56,  130 => 55,  123 => 51,  120 => 50,  118 => 49,  114 => 48,  111 => 47,  105 => 43,  103 => 42,  99 => 40,  84 => 38,  80 => 37,  75 => 35,  70 => 33,  64 => 30,  58 => 27,  55 => 26,  52 => 25,  50 => 24,  46 => 23,  36 => 21,);
    }

    public function getSourceContext()
    {
        return new Source("", "pages/configuration_dynamic_translations.html.twig", "/var/www/galette/templates/default/pages/configuration_dynamic_translations.html.twig");
    }
}
