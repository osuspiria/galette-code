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

/* elements/edit_pdf_models.html.twig */
class __TwigTemplate_46ba13cc8421d66eafa94bee4208a97b extends Template
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
        yield "        <form action=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("pdfModels"), "html", null, true);
        yield "\" method=\"post\" enctype=\"multipart/form-data\" class=\"form ui\">
            <div class=\"ui basic fitted segment\">
";
        // line 23
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["model"] ?? null), "id", [], "any", false, false, false, 23) != 1)) {
            // line 24
            yield "                    <div class=\"field\">
                        <label for=\"title_";
            // line 25
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["model"] ?? null), "id", [], "any", false, false, false, 25), "html", null, true);
            yield "\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("Title"), "html", null, true);
            yield "</label>
                        <div class=\"ui corner labeled input\">
                            <input type=\"text\" name=\"model_title\" id=\"title_";
            // line 27
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["model"] ?? null), "id", [], "any", false, false, false, 27), "html", null, true);
            yield "\" class=\"codeeditor\" value=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["model"] ?? null), "title", [], "any", false, false, false, 27));
            yield "\"/>
                            <div class=\"ui corner label\"></div>
                        </div>
                    </div>
                    <div class=\"field\">
                        <label for=\"subtitle_";
            // line 32
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["model"] ?? null), "id", [], "any", false, false, false, 32), "html", null, true);
            yield "\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("Subtitle"), "html", null, true);
            yield "</label>
                        <div class=\"ui corner labeled input\">
                            <input type=\"text\" name=\"model_subtitle\" id=\"subtitle_";
            // line 34
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["model"] ?? null), "id", [], "any", false, false, false, 34), "html", null, true);
            yield "\" class=\"codeeditor\" value=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["model"] ?? null), "subtitle", [], "any", false, false, false, 34));
            yield "\"/>
                            <div class=\"ui corner label\"></div>
                        </div>
                    </div>
";
        }
        // line 39
        yield "                    <div class=\"field\">
                        <label for=\"header_";
        // line 40
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["model"] ?? null), "id", [], "any", false, false, false, 40), "html", null, true);
        yield "\">";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("Header"), "html", null, true);
        yield "</label>
                        <div class=\"ui corner labeled input\">
                            <div class=\"ui corner label\"></div>
                            <textarea name=\"model_header\" id=\"header_";
        // line 43
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["model"] ?? null), "id", [], "any", false, false, false, 43), "html", null, true);
        yield "\" class=\"codeeditor\">";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["model"] ?? null), "header", [], "any", false, false, false, 43), "html", null, true);
        yield "</textarea>
                        </div>
                    </div>
                    <div class=\"field\">
                        <label for=\"footer_";
        // line 47
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["model"] ?? null), "id", [], "any", false, false, false, 47), "html", null, true);
        yield "\">";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("Footer"), "html", null, true);
        yield "</label>
                        <div class=\"ui corner labeled input\">
                            <div class=\"ui corner label\"></div>
                            <textarea name=\"model_footer\" id=\"footer_";
        // line 50
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["model"] ?? null), "id", [], "any", false, false, false, 50), "html", null, true);
        yield "\" class=\"codeeditor\">";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["model"] ?? null), "footer", [], "any", false, false, false, 50), "html", null, true);
        yield "</textarea>
                        </div>
                    </div>
";
        // line 53
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["model"] ?? null), "id", [], "any", false, false, false, 53) != 1)) {
            // line 54
            yield "                    <div class=\"field\">
                        <label for=\"body_";
            // line 55
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["model"] ?? null), "id", [], "any", false, false, false, 55), "html", null, true);
            yield "\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("Body"), "html", null, true);
            yield "</label>
                        <div class=\"ui corner labeled input\">
                            <div class=\"ui corner label\"></div>
                            <textarea name=\"model_body\" id=\"body_";
            // line 58
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["model"] ?? null), "id", [], "any", false, false, false, 58), "html", null, true);
            yield "\" class=\"codeeditor\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["model"] ?? null), "body", [], "any", false, false, false, 58), "html", null, true);
            yield "</textarea>
                        </div>
                    </div>
";
        }
        // line 62
        yield "                    <div class=\"field nolegend\">
                        <label for=\"styles_";
        // line 63
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["model"] ?? null), "id", [], "any", false, false, false, 63), "html", null, true);
        yield "\">";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("CSS styles"), "html", null, true);
        yield "</label>
                        <textarea name=\"model_styles\" id=\"styles_";
        // line 64
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["model"] ?? null), "id", [], "any", false, false, false, 64), "html", null, true);
        yield "\" class=\"codeeditor\">";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["model"] ?? null), "styles", [], "any", false, false, false, 64), "html", null, true);
        yield "</textarea>
                    </div>
";
        // line 66
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["model"] ?? null), "id", [], "any", false, false, false, 66) > 4)) {
            // line 67
            yield "                    <div class=\"field\">
                        <label for=\"type_";
            // line 68
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["model"] ?? null), "id", [], "any", false, false, false, 68), "html", null, true);
            yield "\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("Type"), "html", null, true);
            yield "</label>
                        <select name=\"model_type\" id=\"type_";
            // line 69
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["model"] ?? null), "id", [], "any", false, false, false, 69), "html", null, true);
            yield "\" class=\"ui dropdown\" required>
                            <option value=\"\">";
            // line 70
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("Select"), "html", null, true);
            yield "</option>
                            <option value=\"";
            // line 71
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::constant("Galette\\Entity\\PdfModel::INVOICE_MODEL"), "html", null, true);
            yield "\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("Invoice"), "html", null, true);
            yield "</option>
                            <option value=\"";
            // line 72
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::constant("Galette\\Entity\\PdfModel::RECEIPT_MODEL"), "html", null, true);
            yield "\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("Receipt"), "html", null, true);
            yield "</option>
                            <option value=\"";
            // line 73
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::constant("Galette\\Entity\\PdfModel::ADHESION_FORM_MODEL"), "html", null, true);
            yield "\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("Adhesion form"), "html", null, true);
            yield "</option>
                        </select>
                    </div>
";
        }
        // line 77
        yield "            </div>
            <div class=\"ui basic fitted segment actions\">
                <input type=\"hidden\" name=\"store\" value=\"true\"/>
                <input type=\"hidden\" name=\"model_id\" value=\"";
        // line 80
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["model"] ?? null), "id", [], "any", false, false, false, 80), "html", null, true);
        yield "\"/>
";
        // line 81
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["model"] ?? null), "id", [], "any", false, false, false, 81) <= 4)) {
            // line 82
            yield "                <input type=\"hidden\" name=\"model_type\" value=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["model"] ?? null), "type", [], "any", false, false, false, 82), "html", null, true);
            yield "\"/>
";
        }
        // line 84
        yield "                <button type=\"submit\" class=\"ui labeled icon primary button action\">
                    <i class=\"save icon\" aria-hidden=\"true\"></i> ";
        // line 85
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("Save"), "html", null, true);
        yield "
                </button>
                ";
        // line 87
        yield from         $this->loadTemplate("components/forms/csrf.html.twig", "elements/edit_pdf_models.html.twig", 87)->unwrap()->yield($context);
        // line 88
        yield "            </div>
        </form>
        ";
        // line 90
        yield from         $this->loadTemplate("modals/replacements_legend.html.twig", "elements/edit_pdf_models.html.twig", 90)->unwrap()->yield(CoreExtension::merge($context, ["legends" => CoreExtension::getAttribute($this->env, $this->source, ($context["model"] ?? null), "getLegend", [], "method", false, false, false, 90), "cur_ref" => CoreExtension::getAttribute($this->env, $this->source, ($context["model"] ?? null), "id", [], "any", false, false, false, 90)]));
        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "elements/edit_pdf_models.html.twig";
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
        return array (  228 => 90,  224 => 88,  222 => 87,  217 => 85,  214 => 84,  208 => 82,  206 => 81,  202 => 80,  197 => 77,  188 => 73,  182 => 72,  176 => 71,  172 => 70,  168 => 69,  162 => 68,  159 => 67,  157 => 66,  150 => 64,  144 => 63,  141 => 62,  132 => 58,  124 => 55,  121 => 54,  119 => 53,  111 => 50,  103 => 47,  94 => 43,  86 => 40,  83 => 39,  73 => 34,  66 => 32,  56 => 27,  49 => 25,  46 => 24,  44 => 23,  38 => 21,);
    }

    public function getSourceContext()
    {
        return new Source("", "elements/edit_pdf_models.html.twig", "/var/www/galette/templates/default/elements/edit_pdf_models.html.twig");
    }
}
