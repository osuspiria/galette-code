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

/* pages/import_model.html.twig */
class __TwigTemplate_da930d5efbd7a7f4e2873a01968a558a extends Template
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
        $this->parent = $this->loadTemplate("page.html.twig", "pages/import_model.html.twig", 21);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 23
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 24
        yield "<div class=\"ui stackable pointing inverted menu tabbed\">
    <a href=\"";
        // line 25
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("importModel"), "html", null, true);
        yield "?tab=current\" class=\"item";
        yield (((($context["tab"] ?? null) == "current")) ? (" active") : (""));
        yield "\" data-tab=\"current\">";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("Current model"), "html", null, true);
        yield "</a>
    <a href=\"";
        // line 26
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("importModel"), "html", null, true);
        yield "?tab=change\" class=\"item";
        yield (((($context["tab"] ?? null) == "change")) ? (" active") : (""));
        yield "\" data-tab=\"change\">";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("Change model"), "html", null, true);
        yield "</a>
</div>
<div class=\"ui";
        // line 28
        yield (((($context["tab"] ?? null) == "current")) ? (" active") : (""));
        yield " tab segment\" data-tab=\"current\">
    <table class=\"listing ui celled striped table\">
        <div class=\"ui small header\">
            ";
        // line 31
        if (($context["defaults_loaded"] ?? null)) {
            // line 32
            yield "                ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("Default fields"), "html", null, true);
            yield "
            ";
        } else {
            // line 34
            yield "                ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::replace($this->env->getFunction('_T')->getCallable()("Model parameted on %date"), ["%date" => CoreExtension::getAttribute($this->env, $this->source, ($context["model"] ?? null), "getCreationDate", [], "method", false, false, false, 34)]), "html", null, true);
            yield "
            ";
        }
        // line 36
        yield "        </div>
        <thead>
            <tr>
                <th>";
        // line 39
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("Field"), "html", null, true);
        yield "</th>
            </tr>
        </thead>
        <tbody>
    ";
        // line 43
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["fields"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["field"]) {
            // line 44
            yield "            <tr>
        ";
            // line 45
            if ( !CoreExtension::getAttribute($this->env, $this->source, ($context["members_fields"] ?? null), $context["field"], [], "array", true, true, false, 45)) {
                // line 46
                yield "                <td>";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::replace($this->env->getFunction('_T')->getCallable()("Missing field '%field'"), ["%field" => $context["field"]]), "html", null, true);
                yield "</td>
        ";
            } else {
                // line 48
                yield "                <td>";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::replace((($__internal_compile_0 = (($__internal_compile_1 = ($context["members_fields"] ?? null)) && is_array($__internal_compile_1) || $__internal_compile_1 instanceof ArrayAccess ? ($__internal_compile_1[$context["field"]] ?? null) : null)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0["label"] ?? null) : null), [":" => ""]), "html", null, true);
                yield "</td>
        ";
            }
            // line 50
            yield "            </tr>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['field'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 52
        yield "    </table>
    <div class=\"ui basic center aligned segment\">
        <div class=\"ui wrapping spaced buttons\">
            <a class=\"ui labeled icon primary button\" href=\"";
        // line 55
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("getImportModel"), "html", null, true);
        yield "\">
                <i class=\"file csv icon\" aria-hidden=\"true\"></i>
                ";
        // line 57
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("Generate empty CSV file"), "html", null, true);
        yield "
            </a>
            ";
        // line 59
        if ( !($context["defaults_loaded"] ?? null)) {
            // line 60
            yield "            <a
                id=\"delete\"
                class=\"ui labeled icon button delete tooltip\"
                href=\"";
            // line 63
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("importModel"), "html", null, true);
            yield "?remove=true\"
                title=\"";
            // line 64
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("Remove model and back to defaults"), "html", null, true);
            yield "\"
            >
                <i class=\"trash icon\" aria-hiden=\"true\"></i>
                ";
            // line 67
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("Remove model"), "html", null, true);
            yield "
            </a>
            ";
        }
        // line 70
        yield "        </div>
    </div>
</div>
<div class=\"ui";
        // line 73
        yield (((($context["tab"] ?? null) == "change")) ? (" active") : (""));
        yield " tab segment\" data-tab=\"change\">
    <form action=\"";
        // line 74
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("storeImportModel"), "html", null, true);
        yield "\" method=\"POST\" class=\"ui form\" id=\"modelform\">
        <table class=\"listing ui celled striped table\">
            <thead>
                <tr>
                    <th></th>
                    <th>";
        // line 79
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("Field"), "html", null, true);
        yield "</th>
                </tr>
            </thead>
            <tbody>
        ";
        // line 83
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["members_fields"] ?? null));
        foreach ($context['_seq'] as $context["k"] => $context["field"]) {
            // line 84
            yield "                <tr>
                    <td>
                        <input type=\"checkbox\" name=\"fields[]\" id=\"field_";
            // line 86
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["k"], "html", null, true);
            yield "\" value=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["k"], "html", null, true);
            yield "\"";
            if (CoreExtension::inFilter($context["k"], ($context["fields"] ?? null))) {
                yield " checked=\"checked\"";
            }
            yield "/>
                    </td>
                    <td>
                        <label for=\"field_";
            // line 89
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["k"], "html", null, true);
            yield "\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::replace((($__internal_compile_2 = $context["field"]) && is_array($__internal_compile_2) || $__internal_compile_2 instanceof ArrayAccess ? ($__internal_compile_2["label"] ?? null) : null), [":" => ""]), "html", null, true);
            yield "</label>
                    </td>
                </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['k'], $context['field'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 93
        yield "        </table>
        <div class=\"ui basic center aligned segment\">
            <button type=\"submit\" name=\"store-model\" id=\"store-model\" class=\"ui labeled icon primary button action\">
                <i class=\"save icon\" aria-hidden=\"true\"></i>
                ";
        // line 97
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("Store new model"), "html", null, true);
        yield "
            </button>
            ";
        // line 99
        yield from         $this->loadTemplate("components/forms/csrf.html.twig", "pages/import_model.html.twig", 99)->unwrap()->yield($context);
        // line 100
        yield "        </div>
    </form>
</div>
<div class=\"ui basic center aligned segment\">
    <a
        class=\"ui labeled icon button\"
        href=\"";
        // line 106
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("import"), "html", null, true);
        yield "\"
    >
        <i class=\"arrow left icon\" aria-hidden=\"true\"></i>
        ";
        // line 109
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("Go back to import page"), "html", null, true);
        yield "
    </a>
</div>
";
        return; yield '';
    }

    // line 114
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 115
        yield "<script type=\"text/javascript\">
    \$(function() {
        \$('#store-model').click(function() {
            var _checked = \$('#modelform').find('input[type=checkbox]:checked').length;
            if ( _checked == 0 ) {
                ";
        // line 120
        yield from         $this->loadTemplate("elements/js/modal.js.twig", "pages/import_model.html.twig", 120)->unwrap()->yield(CoreExtension::merge($context, ["modal_title_twig" => $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("No field selected"), "js"), "modal_content_twig" => $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("Please make sure to select at least one field from the list to perform this action."), "js"), "modal_class" => "tiny", "modal_deny_only" => true, "modal_cancel_text" => $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("Close"), "js"), "modal_classname" => "redalert"]));
        // line 128
        yield "                return false;
            } else {
                return true;
            }
        });
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
        return "pages/import_model.html.twig";
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
        return array (  275 => 128,  273 => 120,  266 => 115,  262 => 114,  253 => 109,  247 => 106,  239 => 100,  237 => 99,  232 => 97,  226 => 93,  214 => 89,  202 => 86,  198 => 84,  194 => 83,  187 => 79,  179 => 74,  175 => 73,  170 => 70,  164 => 67,  158 => 64,  154 => 63,  149 => 60,  147 => 59,  142 => 57,  137 => 55,  132 => 52,  125 => 50,  119 => 48,  113 => 46,  111 => 45,  108 => 44,  104 => 43,  97 => 39,  92 => 36,  86 => 34,  80 => 32,  78 => 31,  72 => 28,  63 => 26,  55 => 25,  52 => 24,  48 => 23,  37 => 21,);
    }

    public function getSourceContext()
    {
        return new Source("", "pages/import_model.html.twig", "/var/www/galette/templates/default/pages/import_model.html.twig");
    }
}
