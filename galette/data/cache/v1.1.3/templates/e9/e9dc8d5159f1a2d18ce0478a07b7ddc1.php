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

/* elements/edit_dynamic_fields.html.twig */
class __TwigTemplate_c8bdec0bd385a765ea32b968d79125d2 extends Template
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
        yield "    <div class=\"ui basic fitted segment\">
        <a
            href=\"";
        // line 23
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("addDynamicField", ["form_name" => ($context["form_name"] ?? null)]), "html", null, true);
        yield "\"
            class=\"ui labeled icon button addfield\"
        >
            <i class=\"plus green icon\" aria-hidden=\"true\"></i>
            ";
        // line 27
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("Add"), "html", null, true);
        yield "
        </a>
    </div>
    <div class=\"ui basic fitted segment loader_selector\">
        <table class=\"listing ui celled striped table\">
            <thead>
                <tr>
                    <th class=\"id_row\">#</th>
                    <th>";
        // line 35
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("Name"), "html", null, true);
        yield "</th>
                    <th>";
        // line 36
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("Permissions"), "html", null, true);
        yield "</th>
                    <th class=\"date_row\">";
        // line 37
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("Type"), "html", null, true);
        yield "</th>
                    <th class=\"date_row\">";
        // line 38
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("Required"), "html", null, true);
        yield "</th>
";
        // line 39
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["preferences"] ?? null), "pref_member_form_grid", [], "any", false, false, false, 39) != "one")) {
            // line 40
            yield "                    <th class=\"date_row\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("Width in forms"), "html", null, true);
            yield "</th>
";
        }
        // line 42
        yield "                    <th>";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("Actions"), "html", null, true);
        yield "</th>
                </tr>
            </thead>
            <tbody>
";
        // line 46
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["fields_list"] ?? null));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["field"]) {
            // line 47
            yield "                <tr>
                    <td data-scope=\"id\" class=\"collapsing\">";
            // line 48
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["field"], "getIndex", [], "method", false, false, false, 48), "html", null, true);
            yield "</td>
                    <td class=\"left\" data-scope=\"row\">";
            // line 49
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["field"], "getName", [], "method", false, false, false, 49));
            yield "</td>
                    <td class=\"left\" data-col-label=\"";
            // line 50
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("Permissions"), "html", null, true);
            yield "\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["field"], "getPermissionName", [], "method", false, false, false, 50), "html", null, true);
            yield "</td>
                    <td class=\"left\" data-col-label=\"";
            // line 51
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("Type"), "html", null, true);
            yield "\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["field"], "getTypeName", [], "method", false, false, false, 51), "html", null, true);
            yield "</td>
                    <td data-col-label=\"";
            // line 52
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("Required"), "html", null, true);
            yield "\">
    ";
            // line 53
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["field"], "getType", [], "any", false, false, false, 53) != 0)) {
                // line 54
                yield "        ";
                if (CoreExtension::getAttribute($this->env, $this->source, $context["field"], "isRequired", [], "method", false, false, false, 54)) {
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("Yes"), "html", null, true);
                } else {
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("No"), "html", null, true);
                }
                // line 55
                yield "    ";
            }
            // line 56
            yield "                    </td>
    ";
            // line 57
            if ((CoreExtension::getAttribute($this->env, $this->source, ($context["preferences"] ?? null), "pref_member_form_grid", [], "any", false, false, false, 57) != "one")) {
                // line 58
                yield "                    <td class=\"left\" data-col-label=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("Width in forms"), "html", null, true);
                yield "\">
        ";
                // line 59
                if (((CoreExtension::getAttribute($this->env, $this->source, ($context["preferences"] ?? null), "pref_member_form_grid", [], "any", false, false, false, 59) == "three") && (CoreExtension::getAttribute($this->env, $this->source, $context["field"], "getWidthInForms", [], "method", false, false, false, 59) == 3))) {
                    // line 60
                    yield "                        ";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("Half"), "html", null, true);
                    yield "
        ";
                } elseif ((CoreExtension::getAttribute($this->env, $this->source,                 // line 61
$context["field"], "getWidthInForms", [], "method", false, false, false, 61) == 2)) {
                    // line 62
                    yield "                        ";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("Full"), "html", null, true);
                    yield "
        ";
                } else {
                    // line 64
                    yield "                        ";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("Default"), "html", null, true);
                    yield "
        ";
                }
                // line 66
                yield "                    </td>
    ";
            }
            // line 68
            yield "                    <td class=\"center actions_row\">
                        <a
                            href=\"";
            // line 70
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("editDynamicField", ["form_name" => ($context["form_name"] ?? null), "id" => CoreExtension::getAttribute($this->env, $this->source, $context["field"], "getId", [], "method", false, false, false, 70)]), "html", null, true);
            yield "\"
                            class=\"action single-edit\"
                        >
                            <i class=\"ui user edit blue icon tooltip\" aria-hidden=\"true\"></i>
                            <span class=\"ui special popup\">";
            // line 74
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::replace($this->env->getFunction('_T')->getCallable()("Edit '%s' field"), ["%s" => CoreExtension::getAttribute($this->env, $this->source, $context["field"], "getName", [], "method", false, false, false, 74)]), "html", null, true);
            yield "</span>
                        </a>
                        <a
                            href=\"";
            // line 77
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("dynamicTranslations", ["text_orig" => CoreExtension::getAttribute($this->env, $this->source, $context["field"], "getName", [false], "method", false, false, false, 77)]), "html", null, true);
            yield "\"
                            class=\"action single-translate\"
                        >
                            <i class=\"ui language grey icon tooltip\" aria-hidden=\"true\"></i>
                            <span class=\"ui special popup\">";
            // line 81
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::replace($this->env->getFunction('_T')->getCallable()("Translate '%s' field"), ["%s" => CoreExtension::getAttribute($this->env, $this->source, $context["field"], "getName", [], "method", false, false, false, 81)]), "html", null, true);
            yield "</span>
                        </a>
                        <a
                            href=\"";
            // line 84
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("removeDynamicField", ["form_name" => ($context["form_name"] ?? null), "id" => CoreExtension::getAttribute($this->env, $this->source, $context["field"], "getId", [], "method", false, false, false, 84)]), "html", null, true);
            yield "\"
                            class=\"delete\"
                        >
                            <i class=\"ui trash red icon tooltip\" aria-hidden=\"true\"></i>
                            <span class=\"ui special popup\">";
            // line 88
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::replace($this->env->getFunction('_T')->getCallable()("Delete '%s' field"), ["%s" => CoreExtension::getAttribute($this->env, $this->source, $context["field"], "getName", [], "method", false, false, false, 88)]), "html", null, true);
            yield "</span>
                        </a>
    ";
            // line 90
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["field"], "getIndex", [], "method", false, false, false, 90) == 1)) {
                // line 91
                yield "                        <i class=\"ui icon\">&nbsp;</i>
    ";
            } else {
                // line 93
                yield "                        <a
                            href=\"";
                // line 94
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("moveDynamicField", ["form_name" => ($context["form_name"] ?? null), "direction" => "up", "id" => CoreExtension::getAttribute($this->env, $this->source, $context["field"], "getId", [], "method", false, false, false, 94)]), "html", null, true);
                yield "\"
                        >
                            <i class=\"ui caret up grey icon tooltip\" aria-hidden=\"true\"></i>
                            <span class=\"ui special popup\">";
                // line 97
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::replace($this->env->getFunction('_T')->getCallable()("Move up '%s' field"), ["%s" => CoreExtension::getAttribute($this->env, $this->source, $context["field"], "getName", [], "method", false, false, false, 97)]), "html", null, true);
                yield "</span>
                        </a>
    ";
            }
            // line 100
            yield "    ";
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["field"], "getIndex", [], "method", false, false, false, 100) == Twig\Extension\CoreExtension::length($this->env->getCharset(), ($context["fields_list"] ?? null)))) {
                // line 101
                yield "                        <i class=\"ui icon\">&nbsp;</i>
    ";
            } else {
                // line 103
                yield "                        <a
                            href=\"";
                // line 104
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("moveDynamicField", ["form_name" => ($context["form_name"] ?? null), "direction" => "down", "id" => CoreExtension::getAttribute($this->env, $this->source, $context["field"], "getId", [], "method", false, false, false, 104)]), "html", null, true);
                yield "\"
                        >
                            <i class=\"ui caret down grey icon tooltip\" aria-hidden=\"true\"></i>
                            <span class=\"ui special popup\">";
                // line 107
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::replace($this->env->getFunction('_T')->getCallable()("Move down '%s' field"), ["%s" => CoreExtension::getAttribute($this->env, $this->source, $context["field"], "getName", [], "method", false, false, false, 107)]), "html", null, true);
                yield "</span>
                        </a>
    ";
            }
            // line 110
            yield "                    </td>
                </tr>
";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 113
            yield "                <tr>
                    <td colspan=\"7\">
                        ";
            // line 115
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::replace($this->env->getFunction('_T')->getCallable()("There is not yet any dynamic field configured for '%formname'"), ["%formname" => ($context["form_title"] ?? null)]), "html", null, true);
            yield "
                    </td>
                </tr>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['field'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 119
        yield "            </tbody>
        </table>
    </div>
    <script type=\"text/javascript\">
        ";
        // line 123
        yield from         $this->loadTemplate("elements/js/removal.js.twig", "elements/edit_dynamic_fields.html.twig", 123)->unwrap()->yield(CoreExtension::merge($context, ["single_action" => "true"]));
        // line 126
        yield "    </script>
";
        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "elements/edit_dynamic_fields.html.twig";
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
        return array (  285 => 126,  283 => 123,  277 => 119,  267 => 115,  263 => 113,  256 => 110,  250 => 107,  244 => 104,  241 => 103,  237 => 101,  234 => 100,  228 => 97,  222 => 94,  219 => 93,  215 => 91,  213 => 90,  208 => 88,  201 => 84,  195 => 81,  188 => 77,  182 => 74,  175 => 70,  171 => 68,  167 => 66,  161 => 64,  155 => 62,  153 => 61,  148 => 60,  146 => 59,  141 => 58,  139 => 57,  136 => 56,  133 => 55,  126 => 54,  124 => 53,  120 => 52,  114 => 51,  108 => 50,  104 => 49,  100 => 48,  97 => 47,  92 => 46,  84 => 42,  78 => 40,  76 => 39,  72 => 38,  68 => 37,  64 => 36,  60 => 35,  49 => 27,  42 => 23,  38 => 21,);
    }

    public function getSourceContext()
    {
        return new Source("", "elements/edit_dynamic_fields.html.twig", "/var/www/galette/templates/default/elements/edit_dynamic_fields.html.twig");
    }
}
