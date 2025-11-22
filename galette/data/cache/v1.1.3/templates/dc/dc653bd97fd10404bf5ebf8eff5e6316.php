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

/* components/forms/picture.html.twig */
class __TwigTemplate_067833f3c20f2d88978d66360bb78055 extends Template
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
        yield "<div class=\"field ui items\">
    <label>";
        // line 22
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("Picture:"), "html", null, true);
        yield "</label>
    <div class=\"item\">
        <div class=\"content\">
    ";
        // line 25
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["member"] ?? null), "hasPicture", [], "method", false, false, false, 25) == 1)) {
            // line 26
            yield "            <div class=\"extra ui basic fitted segment\">
                <div class=\"ui toggle checkbox\">
                    <input type=\"checkbox\" name=\"del_photo\" id=\"del_photo\" value=\"1\"/>
                    <label for=\"del_photo\" class=\"labelalign\">";
            // line 29
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("Delete image"), "html", null, true);
            yield "</label>
                </div>
            </div>
    ";
        }
        // line 33
        yield "            <div class=\"description\">
                <div class=\"ui file action input\">
                    <input id=\"photo_new\" type=\"file\" name=\"photo\"/>
                    <label for=\"photo_new\" class=\"ui button";
        // line 36
        if ($this->env->getFunction('callstatic')->getCallable()("\\Galette\\Core\\Galette", "isDemo")) {
            yield " disabled";
        }
        yield "\">
                        <i class=\"blue upload icon\" aria-hidden=\"true\"></i>
                        ";
        // line 38
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["member"] ?? null), "hasPicture", [], "method", false, false, false, 38) == 1)) {
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("Choose another file"), "html", null, true);
        } else {
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("Choose a file"), "html", null, true);
        }
        // line 39
        yield "                    </label>
                </div>
            </div>
    ";
        // line 42
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["preferences"] ?? null), "pref_force_picture_ratio", [], "any", false, false, false, 42) == 1)) {
            // line 43
            yield "            ";
            $context["system_ratio"] = (((CoreExtension::getAttribute($this->env, $this->source, ($context["preferences"] ?? null), "pref_member_picture_ratio", [], "any", false, false, false, 43) == "square_ratio")) ? ($this->env->getFunction('_T')->getCallable()("Square (1:1)")) : ((((CoreExtension::getAttribute($this->env, $this->source, ($context["preferences"] ?? null), "pref_member_picture_ratio", [], "any", false, false, false, 43) == "portrait_ratio")) ? ($this->env->getFunction('_T')->getCallable()("Portrait (3:4)")) : ((((CoreExtension::getAttribute($this->env, $this->source, ($context["preferences"] ?? null), "pref_member_picture_ratio", [], "any", false, false, false, 43) == "landscape_ratio")) ? ($this->env->getFunction('_T')->getCallable()("Landscape (4:3)")) : (""))))));
            // line 44
            yield "            <div id=\"crop_focus_field\" class=\"extra ui basic fitted segment displaynone\">
                <div class=\"inline field\">
                    <label for=\"crop_focus\">";
            // line 46
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("Cropping focus"), "html", null, true);
            yield "</label>
                    <select name=\"crop_focus\" id=\"crop_focus\" class=\"ui dropdown\">
                        <option value=\"center\">";
            // line 48
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("Center"), "html", null, true);
            yield "</option>
                        <option value=\"top\">";
            // line 49
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("Top"), "html", null, true);
            yield "</option>
                        <option value=\"bottom\">";
            // line 50
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("Bottom"), "html", null, true);
            yield "</option>
                        <option value=\"left\">";
            // line 51
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("Left"), "html", null, true);
            yield "</option>
                        <option value=\"right\">";
            // line 52
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("Right"), "html", null, true);
            yield "</option>
                    </select>
                    <i class=\"tooltip circular inverted primary small icon info\" data-html=\"";
            // line 54
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::replace($this->env->getFunction('_T')->getCallable()("Choose the area of the original image to preserve after cropping to the final ratio defined in the settings : %ratio"), ["%ratio" => ($context["system_ratio"] ?? null)]), "html", null, true);
            yield "\" aria-hidden=\"true\"></i>
                </div>
            </div>
    ";
        }
        // line 58
        yield "        </div>
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
        return "components/forms/picture.html.twig";
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
        return array (  126 => 58,  119 => 54,  114 => 52,  110 => 51,  106 => 50,  102 => 49,  98 => 48,  93 => 46,  89 => 44,  86 => 43,  84 => 42,  79 => 39,  73 => 38,  66 => 36,  61 => 33,  54 => 29,  49 => 26,  47 => 25,  41 => 22,  38 => 21,);
    }

    public function getSourceContext()
    {
        return new Source("", "components/forms/picture.html.twig", "/var/www/galette/templates/default/components/forms/picture.html.twig");
    }
}
