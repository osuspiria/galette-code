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

/* @PluginGaletteObjectslend/category_edit.html.twig */
class __TwigTemplate_314d47a7d51c1d00d40454843a48a43d extends Template
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
        return "page.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("page.html.twig", "@PluginGaletteObjectslend/category_edit.html.twig", 21);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 23
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 24
        yield "<form action=\"";
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["category"] ?? null), "category_id", [], "any", false, false, false, 24)) {
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("objectslend_category_action_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, ($context["category"] ?? null), "category_id", [], "any", false, false, false, 24)]), "html", null, true);
        } else {
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("objectslend_category_action_add"), "html", null, true);
        }
        yield "\" method=\"post\" enctype=\"multipart/form-data\" class=\"ui form\">
    <div class=\"ui styled fluid accordion field\">
        <div class=\"active title\">
            <i class=\"icon dropdown\"></i>
            ";
        // line 28
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("Category", "objectslend"), "html", null, true);
        yield "
        </div>
        <div class=\"active content\">
            ";
        // line 31
        yield from         $this->loadTemplate("components/forms/text.html.twig", "@PluginGaletteObjectslend/category_edit.html.twig", 31)->unwrap()->yield(CoreExtension::merge($context, ["id" => "name", "value" => CoreExtension::getAttribute($this->env, $this->source,         // line 33
($context["category"] ?? null), "name", [], "any", false, false, false, 33), "label" => $this->env->getFunction('_T')->getCallable()("Name", "objectslend"), "required" => true]));
        // line 37
        yield "
            ";
        // line 38
        yield from         $this->loadTemplate("components/forms/checkbox.html.twig", "@PluginGaletteObjectslend/category_edit.html.twig", 38)->unwrap()->yield(CoreExtension::merge($context, ["id" => "is_active", "value" => 1, "label" => $this->env->getFunction('_T')->getCallable()("Is active", "objectslend"), "checked" => CoreExtension::getAttribute($this->env, $this->source,         // line 42
($context["category"] ?? null), "is_active", [], "any", false, false, false, 42)]));
        // line 44
        yield "
            <div class=\"inline field\">
                <label>";
        // line 46
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("Picture:", "objectslend"), "html", null, true);
        yield "</label>
                <img
                    src=\"";
        // line 48
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["category"] ?? null), "category_id", [], "any", false, false, false, 48)) {
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("objectslend_photo", ["type" => "category", "mode" => "thumbnail", "id" => CoreExtension::getAttribute($this->env, $this->source, ($context["category"] ?? null), "category_id", [], "any", false, false, false, 48)]), "html", null, true);
        } else {
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("objectslend_photo", ["type" => "category", "mode" => "thumbnail"]), "html", null, true);
        }
        yield "\"
                    class=\"picture\"
                    width=\"";
        // line 50
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["category"] ?? null), "picture", [], "any", false, false, false, 50), "getOptimalThumbWidth", [($context["olendsprefs"] ?? null)], "method", false, false, false, 50), "html", null, true);
        yield "\"
                    height=\"";
        // line 51
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["category"] ?? null), "picture", [], "any", false, false, false, 51), "getOptimalThumbHeight", [($context["olendsprefs"] ?? null)], "method", false, false, false, 51), "html", null, true);
        yield "\"
                    alt=\"";
        // line 52
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("Category photo", "objectslend"), "html", null, true);
        yield "\"/>
                <br/>
                ";
        // line 54
        if (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["category"] ?? null), "picture", [], "any", false, false, false, 54), "hasPicture", [], "method", false, false, false, 54)) {
            // line 55
            yield "                    ";
            yield from             $this->loadTemplate("components/forms/checkbox.html.twig", "@PluginGaletteObjectslend/category_edit.html.twig", 55)->unwrap()->yield(CoreExtension::merge($context, ["id" => "del_photo", "value" => 1, "label" => $this->env->getFunction('_T')->getCallable()("Delete image"), "required" => false]));
            // line 61
            yield "                ";
        }
        // line 62
        yield "                <input class=\"labelalign\" type=\"file\" name=\"picture\"/>
            </div>
        </div>
    </div>

    <div class=\"ui basic center aligned fitted segment\">
        <button type=\"submit\" name=\"valid\" class=\"action ui labeled icon primary button\">
            <i class=\"save icon\"></i> ";
        // line 69
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("Save"), "html", null, true);
        yield "
        </button>
        <input type=\"hidden\" name=\"category_id\" id=\"id\" value=\"";
        // line 71
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["category"] ?? null), "getId", [], "method", false, false, false, 71), "html", null, true);
        yield "\"/>
        ";
        // line 72
        yield from         $this->loadTemplate("components/forms/csrf.html.twig", "@PluginGaletteObjectslend/category_edit.html.twig", 72)->unwrap()->yield($context);
        // line 73
        yield "    </div>
</form>
";
        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@PluginGaletteObjectslend/category_edit.html.twig";
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
        return array (  137 => 73,  135 => 72,  131 => 71,  126 => 69,  117 => 62,  114 => 61,  111 => 55,  109 => 54,  104 => 52,  100 => 51,  96 => 50,  87 => 48,  82 => 46,  78 => 44,  76 => 42,  75 => 38,  72 => 37,  70 => 33,  69 => 31,  63 => 28,  51 => 24,  47 => 23,  36 => 21,);
    }

    public function getSourceContext()
    {
        return new Source("", "@PluginGaletteObjectslend/category_edit.html.twig", "/var/www/galette/plugins/plugin-objectslend/templates/default/category_edit.html.twig");
    }
}
