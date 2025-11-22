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

/* elements/edit_core_fields.html.twig */
class __TwigTemplate_a8d2ce7810f1a01355196e7a32ae3269 extends Template
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
        yield "    <div class=\"ui basic fitted segment loader_selector\">
        <table class=\"listing ui celled striped table\">
            <thead>
                <tr>
                    <th class=\"id_row\">#</th>
                    <th>";
        // line 26
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("Name"), "html", null, true);
        yield "</th>
                    <th>";
        // line 27
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("Permissions"), "html", null, true);
        yield "</th>
                    <th class=\"date_row\">";
        // line 28
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("Required"), "html", null, true);
        yield "</th>
";
        // line 29
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["preferences"] ?? null), "pref_member_form_grid", [], "any", false, false, false, 29) != "one")) {
            // line 30
            yield "                    <th class=\"date_row\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("Width in forms"), "html", null, true);
            yield "</th>
";
        }
        // line 32
        yield "                </tr>
            </thead>
            <tbody id=\"sortable_fields_";
        // line 34
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["fs"] ?? null), "html", null, true);
        yield "\" class=\"sortable-items\" data-category=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["fs"] ?? null), "html", null, true);
        yield "\">
";
        // line 35
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((($__internal_compile_0 = ($context["categorized_fields"] ?? null)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0[($context["fs"] ?? null)] ?? null) : null));
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["col"] => $context["field"]) {
            // line 36
            yield "    ";
            if (((CoreExtension::getAttribute($this->env, $this->source, ($context["preferences"] ?? null), "pref_show_id", [], "any", false, false, false, 36) || (CoreExtension::getAttribute($this->env, $this->source, $context["field"], "field_id", [], "any", false, false, false, 36) != "id_adh")) && (CoreExtension::getAttribute($this->env, $this->source, $context["field"], "field_id", [], "any", false, false, false, 36) != "parent_id"))) {
                // line 37
                yield "        ";
                $context["fid"] = CoreExtension::getAttribute($this->env, $this->source, $context["field"], "field_id", [], "any", false, false, false, 37);
                // line 38
                yield "                <tr>
                    <td data-scope=\"id\" class=\"collapsing\">
                        <i class=\"jsonly displaynone arrows alternate icon\" aria-hidden=\"true\"></i>
                        ";
                // line 41
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 41), "html", null, true);
                yield "
                    </td>
                    <td class=\"fieldname\" data-scope=\"row\">
                        <input type=\"hidden\" name=\"fields[]\" value=\"";
                // line 44
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["fid"] ?? null), "html", null, true);
                yield "\"/>
                        <input type=\"hidden\" name=\"";
                // line 45
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["fid"] ?? null), "html", null, true);
                yield "_category\" value=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["category"] ?? null), "id_field_category", [], "any", false, false, false, 45), "html", null, true);
                yield "\"/>
                        <input type=\"hidden\" name=\"";
                // line 46
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["fid"] ?? null), "html", null, true);
                yield "_label\" value=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["field"], "label", [], "any", false, false, false, 46), "html", null, true);
                yield "\"/>
                        ";
                // line 47
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["field"], "label", [], "any", false, false, false, 47), "html", null, true);
                yield "
                    </td>
                    <td class=\"visibility_cell\" data-col-label=\"";
                // line 49
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("Permissions"), "html", null, true);
                yield "\">
                        <span data-prop-label=\"";
                // line 50
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("Permissions"), "html", null, true);
                yield "\" class=\"visible\" title=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::replace($this->env->getFunction('_T')->getCallable()("Change '%field' permissions"), ["%field" => CoreExtension::getAttribute($this->env, $this->source, $context["field"], "label", [], "any", false, false, false, 50)]), "html", null, true);
                yield "\">
                            <select name=\"";
                // line 51
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["fid"] ?? null), "html", null, true);
                yield "_visible\" id=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["fid"] ?? null), "html", null, true);
                yield "_visible\" class=\"ui dropdown\">
                                ";
                // line 52
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(($context["perm_names"] ?? null));
                foreach ($context['_seq'] as $context["key"] => $context["value"]) {
                    // line 53
                    yield "                                    <option value=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["key"], "html", null, true);
                    yield "\"";
                    if (($context["key"] == CoreExtension::getAttribute($this->env, $this->source, $context["field"], "visible", [], "any", false, false, false, 53))) {
                        yield " selected=\"selected\"";
                    }
                    yield ">";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["value"], "html", null, true);
                    yield "</option>
                                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['key'], $context['value'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 55
                yield "                            </select>
                        </span>
                    </td>
                    <td class=\"required_cell\" data-col-label=\"";
                // line 58
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("Required"), "html", null, true);
                yield "\">
                        <span data-prop-label=\"";
                // line 59
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("Required"), "html", null, true);
                yield "\" class=\"required\" title=\"";
                if (CoreExtension::inFilter(($context["fid"] ?? null), ($context["non_required"] ?? null))) {
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::replace($this->env->getFunction('_T')->getCallable()("Field '%field' cannot be set as required."), ["%field" => CoreExtension::getAttribute($this->env, $this->source, $context["field"], "label", [], "any", false, false, false, 59)]), "html", null, true);
                } else {
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::replace($this->env->getFunction('_T')->getCallable()("Mark '%field' as (not) required"), ["%field" => CoreExtension::getAttribute($this->env, $this->source, $context["field"], "label", [], "any", false, false, false, 59)]), "html", null, true);
                }
                yield "\">
                            <label for=\"";
                // line 60
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["fid"] ?? null), "html", null, true);
                yield "_required_yes\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("Yes"), "html", null, true);
                yield "</label>
                            <input type=\"radio\" name=\"";
                // line 61
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["fid"] ?? null), "html", null, true);
                yield "_required\" id=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["fid"] ?? null), "html", null, true);
                yield "_required_yes\" value=\"1\"";
                if (CoreExtension::getAttribute($this->env, $this->source, $context["field"], "required", [], "any", false, false, false, 61)) {
                    yield " checked=\"checked\"";
                }
                if (CoreExtension::inFilter(($context["fid"] ?? null), ($context["non_required"] ?? null))) {
                    yield " disabled=\"disabled\"";
                }
                yield "/>
                            <label for=\"";
                // line 62
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["fid"] ?? null), "html", null, true);
                yield "_required_no\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("No"), "html", null, true);
                yield "</label>
                            <input type=\"radio\" name=\"";
                // line 63
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["fid"] ?? null), "html", null, true);
                yield "_required\" id=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["fid"] ?? null), "html", null, true);
                yield "_required_no\" value=\"0\"";
                if ( !CoreExtension::getAttribute($this->env, $this->source, $context["field"], "required", [], "any", false, false, false, 63)) {
                    yield " checked=\"checked\"";
                }
                if (CoreExtension::inFilter(($context["fid"] ?? null), ($context["non_required"] ?? null))) {
                    yield " disabled=\"disabled\"";
                }
                yield "/>
                        </span>
                    </td>
        ";
                // line 66
                if ((CoreExtension::getAttribute($this->env, $this->source, ($context["preferences"] ?? null), "pref_member_form_grid", [], "any", false, false, false, 66) != "one")) {
                    // line 67
                    yield "                    <td class=\"left\" data-col-label=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("Width in forms"), "html", null, true);
                    yield "\">
                        <span data-prop-label=\"";
                    // line 68
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("Width in forms"), "html", null, true);
                    yield "\" title=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("Change field's width with in forms"), "html", null, true);
                    yield "\">
                            <select name=\"";
                    // line 69
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["fid"] ?? null), "html", null, true);
                    yield "_width_in_forms\" id=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["fid"] ?? null), "html", null, true);
                    yield "_width_in_forms\" class=\"ui dropdown\">
                                <option value=\"1\"";
                    // line 70
                    if (((CoreExtension::getAttribute($this->env, $this->source, $context["field"], "width_in_forms", [], "any", false, false, false, 70) == 1) || ((CoreExtension::getAttribute($this->env, $this->source, ($context["preferences"] ?? null), "pref_member_form_grid", [], "any", false, false, false, 70) == "two") && (CoreExtension::getAttribute($this->env, $this->source, $context["field"], "width_in_forms", [], "any", false, false, false, 70) == 3)))) {
                        yield " selected=\"selected\"";
                    }
                    yield ">";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("Default"), "html", null, true);
                    yield "</option>
                                <option value=\"2\"";
                    // line 71
                    if ((CoreExtension::getAttribute($this->env, $this->source, $context["field"], "width_in_forms", [], "any", false, false, false, 71) == 2)) {
                        yield " selected=\"selected\"";
                    }
                    yield ">";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("Full"), "html", null, true);
                    yield "</option>
            ";
                    // line 72
                    if ((CoreExtension::getAttribute($this->env, $this->source, ($context["preferences"] ?? null), "pref_member_form_grid", [], "any", false, false, false, 72) == "three")) {
                        // line 73
                        yield "                                <option value=\"3\"";
                        if ((CoreExtension::getAttribute($this->env, $this->source, $context["field"], "width_in_forms", [], "any", false, false, false, 73) == 3)) {
                            yield " selected=\"selected\"";
                        }
                        yield ">";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("Half"), "html", null, true);
                        yield "</option>
            ";
                    }
                    // line 75
                    yield "                            </select>
                        </span>
                    </td>
        ";
                }
                // line 79
                yield "                </tr>
    ";
            }
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['col'], $context['field'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 82
        yield "            </tbody>
        </table>
    </div>
";
        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "elements/edit_core_fields.html.twig";
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
        return array (  293 => 82,  277 => 79,  271 => 75,  261 => 73,  259 => 72,  251 => 71,  243 => 70,  237 => 69,  231 => 68,  226 => 67,  224 => 66,  209 => 63,  203 => 62,  190 => 61,  184 => 60,  174 => 59,  170 => 58,  165 => 55,  150 => 53,  146 => 52,  140 => 51,  134 => 50,  130 => 49,  125 => 47,  119 => 46,  113 => 45,  109 => 44,  103 => 41,  98 => 38,  95 => 37,  92 => 36,  75 => 35,  69 => 34,  65 => 32,  59 => 30,  57 => 29,  53 => 28,  49 => 27,  45 => 26,  38 => 21,);
    }

    public function getSourceContext()
    {
        return new Source("", "elements/edit_core_fields.html.twig", "/var/www/galette/templates/default/elements/edit_core_fields.html.twig");
    }
}
