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

/* elements/member_card.html.twig */
class __TwigTemplate_0b76af715de194b33bf200d8eacaf433 extends Template
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
        yield "<div id=\"member_card\" class=\"ui horizontal fluid card\">
    ";
        // line 22
        if ( !(is_string($__internal_compile_0 = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["member"] ?? null), "picture", [], "any", false, false, false, 22), "path", [], "any", false, false, false, 22)) && is_string($__internal_compile_1 = "/default/images/default.png") && str_ends_with($__internal_compile_0, $__internal_compile_1))) {
            // line 23
            yield "    <div class=\"image\">
        <img
                id=\"photo_adh\"
                src=\"";
            // line 26
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("photo", ["id" => CoreExtension::getAttribute($this->env, $this->source, ($context["member"] ?? null), "id", [], "any", false, false, false, 26), "rand" => ($context["time"] ?? null)]), "html", null, true);
            yield "\"
                width=\"";
            // line 27
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["member"] ?? null), "picture", [], "any", false, false, false, 27), "getOptimalWidth", [], "method", false, false, false, 27), "html", null, true);
            yield "\"
                height=\"";
            // line 28
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["member"] ?? null), "picture", [], "any", false, false, false, 28), "getOptimalHeight", [], "method", false, false, false, 28), "html", null, true);
            yield "\"
                alt=\"";
            // line 29
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("Picture"), "html", null, true);
            yield "\"
                class=\"green tooltip\"
        ";
            // line 32
            yield "        ";
            if ( !array_key_exists("hidden_elements", $context)) {
                // line 33
                yield "                data-html=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("Drag and drop an image file to change the picture"), "html", null, true);
                yield "\">
        <span class=\"ui bottom left corner tiny label\">
            <i class=\"download icon\" aria-hidden=\"true\"></i>
        </span>
        ";
            } else {
                // line 38
                yield "        >
        ";
            }
            // line 40
            yield "    </div>
    ";
        }
        // line 42
        yield "    <div class=\"content\">
        <div class=\"header aligned\">
            ";
        // line 44
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["member"] ?? null), "sname", [], "any", false, false, false, 44), "html", null, true);
        yield "
        </div>
        <div class=\"meta aligned\">
            <span>";
        // line 47
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["member"] ?? null), "sstatus", [], "any", false, false, false, 47), "html", null, true);
        yield "</span>
        </div>
        <div class=\"description\">
            <div class=\"ui relaxed divided list\">
                ";
        // line 51
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["member"] ?? null), "phone", [], "any", false, false, false, 51) || CoreExtension::getAttribute($this->env, $this->source, ($context["member"] ?? null), "gsm", [], "any", false, false, false, 51))) {
            // line 52
            yield "                    <div class=\"item\">
                        <div class=\"content\">
                            <span class=\"header\">";
            // line 54
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("Phone"), "html", null, true);
            yield "</span>
                            <div class=\"description\">
                                ";
            // line 56
            if (CoreExtension::getAttribute($this->env, $this->source, ($context["member"] ?? null), "phone", [], "any", false, false, false, 56)) {
                // line 57
                yield "                                    ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["member"] ?? null), "phone", [], "any", false, false, false, 57), "html", null, true);
                yield "
                                ";
            }
            // line 59
            yield "                                ";
            if (CoreExtension::getAttribute($this->env, $this->source, ($context["member"] ?? null), "gsm", [], "any", false, false, false, 59)) {
                // line 60
                yield "                                    ";
                if (CoreExtension::getAttribute($this->env, $this->source, ($context["member"] ?? null), "phone", [], "any", false, false, false, 60)) {
                    yield ", ";
                }
                // line 61
                yield "                                    ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["member"] ?? null), "gsm", [], "any", false, false, false, 61), "html", null, true);
                yield "
                                ";
            }
            // line 63
            yield "                            </div>
                        </div>
                    </div>
                ";
        }
        // line 67
        yield "                ";
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["member"] ?? null), "getEmail", [], "method", false, false, false, 67)) {
            // line 68
            yield "                    <div class=\"item\">
                        <div class=\"content\">
                            <span class=\"blue header\">";
            // line 70
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("Email"), "html", null, true);
            yield "</span>
                            <div class=\"description\">";
            // line 71
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["member"] ?? null), "getEMail", [], "method", false, false, false, 71), "html", null, true);
            yield "</div>
                        </div>
                    </div>
                ";
        }
        // line 75
        yield "            </div>
        </div>
    </div>
    <div class=\"extra ";
        // line 78
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["member"] ?? null), "getRowClass", [], "method", false, false, false, 78), "html", null, true);
        yield " content\">
        <i class=\"icon receipt\" aria-hidden=\"true\"></i>
        ";
        // line 80
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["member"] ?? null), "getDues", [], "method", false, false, false, 80));
        yield "
    </div>
</div>
";
        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "elements/member_card.html.twig";
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
        return array (  169 => 80,  164 => 78,  159 => 75,  152 => 71,  148 => 70,  144 => 68,  141 => 67,  135 => 63,  129 => 61,  124 => 60,  121 => 59,  115 => 57,  113 => 56,  108 => 54,  104 => 52,  102 => 51,  95 => 47,  89 => 44,  85 => 42,  81 => 40,  77 => 38,  68 => 33,  65 => 32,  60 => 29,  56 => 28,  52 => 27,  48 => 26,  43 => 23,  41 => 22,  38 => 21,);
    }

    public function getSourceContext()
    {
        return new Source("", "elements/member_card.html.twig", "/var/www/galette/templates/default/elements/member_card.html.twig");
    }
}
