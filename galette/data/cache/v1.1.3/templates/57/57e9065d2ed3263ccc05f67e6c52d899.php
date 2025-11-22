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

/* elements/language.html.twig */
class __TwigTemplate_d967272a77e5f3886a69a143094056ab extends Template
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
        if (array_key_exists("ui", $context)) {
            // line 22
            yield "    ";
            if ((($context["ui"] ?? null) == "item")) {
                // line 23
                yield "        ";
                $context["component_classes"] = "tooltip language item";
                // line 24
                yield "        ";
                $context["content_classes"] = "content";
                // line 25
                yield "        ";
                $context["header"] = true;
                // line 26
                yield "    ";
            } elseif ((($context["ui"] ?? null) == "dropdown")) {
                // line 27
                yield "        ";
                $context["component_classes"] = "tooltip language ui dropdown navigation right-aligned item";
                // line 28
                yield "        ";
                $context["content_classes"] = "menu";
                // line 29
                yield "        ";
                $context["header"] = false;
                // line 30
                yield "    ";
            }
        }
        // line 32
        yield "
<div class=\"";
        // line 33
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["component_classes"] ?? null), "html", null, true);
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["i18n"] ?? null), "isRtl", [], "method", false, false, false, 33)) {
            yield " rtl";
        }
        yield "\" title=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("Choose your language"), "html", null, true);
        yield "\">
";
        // line 34
        if ((($context["header"] ?? null) == true)) {
            // line 35
            yield "    <div class=\"image header title\"";
            if ((($context["ui"] ?? null) == "item")) {
                yield " data-fold=\"fold-language\" tabindex=\"0\"";
            }
            yield ">
";
        }
        // line 37
        yield "        <i class=\"icon language\" aria-hidden=\"true\"></i>
        <span>";
        // line 38
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["galette_lang"] ?? null), "html", null, true);
        yield "</span>
        <i class=\"dropdown icon\" aria-hidden=\"true\"></i>
";
        // line 40
        if ((($context["header"] ?? null) == true)) {
            // line 41
            yield "    </div>
";
        }
        // line 43
        yield "    <div class=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["content_classes"] ?? null), "html", null, true);
        yield "\">
";
        // line 44
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["languages"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["langue"]) {
            // line 45
            yield "    ";
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["langue"], "getAbbrev", [], "method", false, false, false, 45) != ($context["galette_lang"] ?? null))) {
                // line 46
                yield "        <a href=\"?ui_pref_lang=";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["langue"], "getID", [], "method", false, false, false, 46), "html", null, true);
                yield "\"
           title=\"";
                // line 47
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::replace($this->env->getFunction('_T')->getCallable()("Switch locale to '%locale'"), ["%locale" => CoreExtension::getAttribute($this->env, $this->source, $context["langue"], "getName", [], "method", false, false, false, 47)]), "html", null, true);
                yield "\"
           class=\"item\"
        >
            ";
                // line 50
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["langue"], "getName", [], "method", false, false, false, 50), "html", null, true);
                yield " <span>(";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["langue"], "getAbbrev", [], "method", false, false, false, 50), "html", null, true);
                yield ")</span>
        </a>
    ";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['langue'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 54
        yield "    </div>
</div>
";
        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "elements/language.html.twig";
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
        return array (  139 => 54,  127 => 50,  121 => 47,  116 => 46,  113 => 45,  109 => 44,  104 => 43,  100 => 41,  98 => 40,  93 => 38,  90 => 37,  82 => 35,  80 => 34,  71 => 33,  68 => 32,  64 => 30,  61 => 29,  58 => 28,  55 => 27,  52 => 26,  49 => 25,  46 => 24,  43 => 23,  40 => 22,  38 => 21,);
    }

    public function getSourceContext()
    {
        return new Source("", "elements/language.html.twig", "/var/www/galette/templates/default/elements/language.html.twig");
    }
}
