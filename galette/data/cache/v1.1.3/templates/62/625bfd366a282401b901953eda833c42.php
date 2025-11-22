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

/* pages/configuration_dynamic_field_form.html.twig */
class __TwigTemplate_cdee29536c70fdb84de24790ffa3d99f extends Template
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
        return $this->loadTemplate((((($context["mode"] ?? null) == "ajax")) ? ("ajax.html.twig") : ("page.html.twig")), "pages/configuration_dynamic_field_form.html.twig", 21);
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
        if ((($context["action"] ?? null) == "edit")) {
            // line 25
            yield "    <form action=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("doEditDynamicField", ["form_name" => ($context["form_name"] ?? null), "id" => CoreExtension::getAttribute($this->env, $this->source, ($context["df"] ?? null), "getId", [], "method", false, false, false, 25)]), "html", null, true);
            yield "\" method=\"post\" class=\"ui form\">
    ";
            // line 26
            if ((($context["mode"] ?? null) != "ajax")) {
                // line 27
                yield "        <div class=\"ui top attached accordion-styled header\">
            ";
                // line 28
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::replace($this->env->getFunction('_T')->getCallable()("Edit field %field"), ["%field" => CoreExtension::getAttribute($this->env, $this->source, ($context["df"] ?? null), "getName", [], "method", false, false, false, 28)]), "html", null, true);
                yield "
        </div>
        <div class=\"ui bottom attached accordion-styled segment\">
            <div class=\"active content field\">
    ";
            }
            // line 33
            yield "                <div class=\"";
            if ((CoreExtension::getAttribute($this->env, $this->source, ($context["df"] ?? null), "getType", [], "any", false, false, false, 33) != 0)) {
                yield " required ";
            }
            yield "inline field\">
                    <label for=\"field_name\">";
            // line 34
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("Name:"), "html", null, true);
            yield "</label>
                    <input type=\"text\" name=\"field_name\" id=\"field_name\" value=\"";
            // line 35
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["df"] ?? null), "getName", [false], "method", false, false, false, 35), "html", null, true);
            yield "\"";
            if ((CoreExtension::getAttribute($this->env, $this->source, ($context["df"] ?? null), "getType", [], "any", false, false, false, 35) != 0)) {
                yield " required=\"required\"";
            }
            yield "/>
                </div>
                <div class=\"inline field\">
                    <label for=\"field_perm\">";
            // line 38
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("Permissions:"), "html", null, true);
            yield "</label>
                    <select name=\"field_perm\" id=\"field_perm\" class=\"ui dropdown\">
                        ";
            // line 40
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["perm_names"] ?? null));
            foreach ($context['_seq'] as $context["key"] => $context["value"]) {
                // line 41
                yield "                            <option value=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["key"], "html", null, true);
                yield "\"";
                if (($context["key"] == CoreExtension::getAttribute($this->env, $this->source, ($context["df"] ?? null), "getPermission", [], "method", false, false, false, 41))) {
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
            // line 43
            yield "                    </select>
                </div>
    ";
            // line 45
            if (CoreExtension::getAttribute($this->env, $this->source, ($context["df"] ?? null), "hasData", [], "method", false, false, false, 45)) {
                // line 46
                yield "                <div class=\"inline field\">
                    <label for=\"field_required\">";
                // line 47
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("Required:"), "html", null, true);
                yield "</label>
                    <select name=\"field_required\" id=\"field_required\" class=\"ui dropdown\">
                        <option value=\"0\" ";
                // line 49
                if ( !CoreExtension::getAttribute($this->env, $this->source, ($context["df"] ?? null), "isRequired", [], "method", false, false, false, 49)) {
                    yield "selected=\"selected\"";
                }
                yield ">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("No"), "html", null, true);
                yield "</option>
                        <option value=\"1\" ";
                // line 50
                if (CoreExtension::getAttribute($this->env, $this->source, ($context["df"] ?? null), "isRequired", [], "method", false, false, false, 50)) {
                    yield "selected=\"selected\"";
                }
                yield ">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("Yes"), "html", null, true);
                yield "</option>
                    </select>
                </div>
    ";
            }
            // line 54
            yield "    ";
            if (CoreExtension::getAttribute($this->env, $this->source, ($context["df"] ?? null), "hasWidth", [], "method", false, false, false, 54)) {
                // line 55
                yield "                <div class=\"inline field\">
                    <label for=\"field_width\">";
                // line 56
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("Width:"), "html", null, true);
                yield "</label>
                    <input type=\"text\" name=\"field_width\" id=\"field_width\" value=\"";
                // line 57
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["df"] ?? null), "getWidth", [], "method", false, false, false, 57), "html", null, true);
                yield "\" size=\"3\"/>
                </div>
    ";
            }
            // line 60
            yield "    ";
            if (CoreExtension::getAttribute($this->env, $this->source, ($context["df"] ?? null), "hasHeight", [], "method", false, false, false, 60)) {
                // line 61
                yield "                <div class=\"inline field\">
                    <label for=\"field_height\">";
                // line 62
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("Height:"), "html", null, true);
                yield "</label>
                    <input type=\"text\" name=\"field_height\" id=\"field_height\" value=\"";
                // line 63
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["df"] ?? null), "getHeight", [], "method", false, false, false, 63), "html", null, true);
                yield "\" size=\"3\"/>
                </div>
    ";
            }
            // line 66
            yield "    ";
            if (CoreExtension::getAttribute($this->env, $this->source, ($context["df"] ?? null), "hasMinSize", [], "method", false, false, false, 66)) {
                // line 67
                yield "                <div class=\"inline field\">
                    <label for=\"field_min_size\">";
                // line 68
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("Min Size:"), "html", null, true);
                yield "</label>
                    <input type=\"text\" name=\"field_min_size\" id=\"field_min_size\" value=\"";
                // line 69
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["df"] ?? null), "getMinSize", [], "method", false, false, false, 69), "html", null, true);
                yield "\" size=\"3\"/>
                    <span class=\"exemple\">";
                // line 70
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("Minimum number of characters."), "html", null, true);
                yield "</span>
                </div>
    ";
            }
            // line 73
            yield "    ";
            if (CoreExtension::getAttribute($this->env, $this->source, ($context["df"] ?? null), "hasSize", [], "method", false, false, false, 73)) {
                // line 74
                yield "                <div class=\"inline field\">
                    <label for=\"field_size\">";
                // line 75
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("Size:"), "html", null, true);
                yield "</label>
                    <input type=\"text\" name=\"field_size\" id=\"field_size\" value=\"";
                // line 76
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["df"] ?? null), "getSize", [], "method", false, false, false, 76), "html", null, true);
                yield "\" size=\"3\"/>
        ";
                // line 77
                if ((CoreExtension::getAttribute($this->env, $this->source, ($context["df"] ?? null), "getType", [], "any", false, false, false, 77) == 6)) {
                    // line 78
                    yield "                    <span class=\"exemple\">";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("Maximum file size, in Ko."), "html", null, true);
                    yield "</span>
        ";
                } else {
                    // line 80
                    yield "                    <span class=\"exemple\">";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("Maximum number of characters."), "html", null, true);
                    yield "</span>
        ";
                }
                // line 82
                yield "                </div>
    ";
            }
            // line 84
            yield "    ";
            if (CoreExtension::getAttribute($this->env, $this->source, ($context["df"] ?? null), "isMultiValued", [], "method", false, false, false, 84)) {
                // line 85
                yield "                <div class=\"inline field\">
                    <label for=\"field_repeat\">";
                // line 86
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("Repeat:"), "html", null, true);
                yield "</label>
                    <input type=\"text\" name=\"field_repeat\" id=\"field_repeat\" value=\"";
                // line 87
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["df"] ?? null), "getRepeat", [], "method", false, false, false, 87), "html", null, true);
                yield "\" size=\"3\"/>
                    <span class=\"exemple\">";
                // line 88
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("Number of values or zero if infinite."), "html", null, true);
                yield "</span>
                </div>
    ";
            }
            // line 91
            yield "    ";
            if (CoreExtension::getAttribute($this->env, $this->source, ($context["df"] ?? null), "hasFixedValues", [], "method", false, false, false, 91)) {
                // line 92
                yield "                <div class=\"inline field\">
                    <label for=\"fixed_values\">";
                // line 93
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("Values:"), "html", null, true);
                yield "</label>
                    <textarea name=\"fixed_values\" id=\"fixed_values\" cols=\"20\" rows=\"6\">";
                // line 94
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["df"] ?? null), "getValues", [true], "method", false, false, false, 94), "html", null, true);
                yield "</textarea>
                    <br/><span class=\"exemple\">";
                // line 95
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("Choice list (one entry per line)."), "html", null, true);
                yield "</span>
                </div>
    ";
            }
            // line 98
            yield "                <div class=\"field\">
                    <label for=\"field_information\">";
            // line 99
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("Information:"), "html", null, true);
            yield "</label>
                    <textarea name=\"field_information\" id=\"field_information\" cols=\"20\" rows=\"6\">";
            // line 100
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["df"] ?? null), "getInformation", [], "method", false, false, false, 100), "html", null, true);
            yield "</textarea>
                    <span class=\"tip\">";
            // line 101
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("Extra information displayed along with dynamic field."), "html", null, true);
            yield "</span>
                </div>
                <div class=\"inline field\">
                    <label for=\"field_information_above\">";
            // line 104
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("Display information above input"), "html", null, true);
            yield ":</label>
                    <select name=\"field_information_above\" id=\"field_information_above\" class=\"ui dropdown\">
                        <option value=\"0\" ";
            // line 106
            if ( !CoreExtension::getAttribute($this->env, $this->source, ($context["df"] ?? null), "hasInformationAbove", [], "method", false, false, false, 106)) {
                yield "selected=\"selected\"";
            }
            yield ">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("No"), "html", null, true);
            yield "</option>
                        <option value=\"1\" ";
            // line 107
            if (CoreExtension::getAttribute($this->env, $this->source, ($context["df"] ?? null), "hasInformationAbove", [], "method", false, false, false, 107)) {
                yield "selected=\"selected\"";
            }
            yield ">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("Yes"), "html", null, true);
            yield "</option>
                    </select>
                </div>
    ";
            // line 110
            if ((CoreExtension::getAttribute($this->env, $this->source, ($context["preferences"] ?? null), "pref_member_form_grid", [], "any", false, false, false, 110) != "one")) {
                // line 111
                yield "                <div class=\"inline field\">
                    <label for=\"field_width_in_forms\">";
                // line 112
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("Width in forms"), "html", null, true);
                yield ":</label>
                    <select name=\"field_width_in_forms\" id=\"field_width_in_forms\" class=\"ui dropdown\">
                        <option value=\"1\"";
                // line 114
                if (((CoreExtension::getAttribute($this->env, $this->source, ($context["df"] ?? null), "getWidthInForms", [], "method", false, false, false, 114) == 1) || ((CoreExtension::getAttribute($this->env, $this->source, ($context["preferences"] ?? null), "pref_member_form_grid", [], "any", false, false, false, 114) == "two") && (CoreExtension::getAttribute($this->env, $this->source, ($context["df"] ?? null), "getWidthInForms", [], "method", false, false, false, 114) == 3)))) {
                    yield "selected=\"selected\"";
                }
                yield ">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("Default"), "html", null, true);
                yield "</option>
                        <option value=\"2\"";
                // line 115
                if ((CoreExtension::getAttribute($this->env, $this->source, ($context["df"] ?? null), "getWidthInForms", [], "method", false, false, false, 115) == 2)) {
                    yield "selected=\"selected\"";
                }
                yield ">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("Full"), "html", null, true);
                yield "</option>
        ";
                // line 116
                if ((CoreExtension::getAttribute($this->env, $this->source, ($context["preferences"] ?? null), "pref_member_form_grid", [], "any", false, false, false, 116) == "three")) {
                    // line 117
                    yield "                        <option value=\"3\"";
                    if ((CoreExtension::getAttribute($this->env, $this->source, ($context["df"] ?? null), "getWidthInForms", [], "method", false, false, false, 117) == 3)) {
                        yield "selected=\"selected\"";
                    }
                    yield ">";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("Half"), "html", null, true);
                    yield "</option>
        ";
                }
                // line 119
                yield "                    </select>
                </div>
    ";
            }
            // line 122
            yield "    ";
            if ((($context["mode"] ?? null) != "ajax")) {
                // line 123
                yield "            </div>
        </div>

        <div class=\"ui basic center aligned segment\">
            <button type=\"submit\" class=\"ui labeled icon primary button action\">
                <i class=\"save icon\" aria-hidden=\"true\"></i> ";
                // line 128
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("Save"), "html", null, true);
                yield "
            </button>
            <input type=\"submit\" name=\"cancel\" value=\"";
                // line 130
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("Cancel"), "html", null, true);
                yield "\" class=\"ui button\"/>
            <input type=\"hidden\" name=\"form_name\" id=\"form_name\" value=\"";
                // line 131
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["form_name"] ?? null), "html", null, true);
                yield "\"/>
        </div>
    ";
            }
            // line 134
            yield "            ";
            yield from             $this->loadTemplate("components/forms/csrf.html.twig", "pages/configuration_dynamic_field_form.html.twig", 134)->unwrap()->yield($context);
            // line 135
            yield "     </form>
";
        } elseif ((        // line 136
($context["action"] ?? null) == "add")) {
            // line 137
            yield "    <form action=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("doAddDynamicField", ["form_name" => ($context["form_name"] ?? null)]), "html", null, true);
            yield "\" method=\"post\" enctype=\"multipart/form-data\" title=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("New dynamic field"), "html", null, true);
            yield "\" class=\"ui form\">
    ";
            // line 138
            if ((($context["mode"] ?? null) != "ajax")) {
                // line 139
                yield "        <div class=\"ui top attached accordion-styled header\">
            ";
                // line 140
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("New dynamic field"), "html", null, true);
                yield "
        </div>
        <div class=\"ui bottom attached accordion-styled segment\">
            <div class=\"active content field\">
    ";
            }
            // line 145
            yield "                <div class=\"inline field\">
                    <label for=\"field_name\">";
            // line 146
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("Field name"), "html", null, true);
            yield "</label>
                    <input size=\"40\" type=\"text\" name=\"field_name\" id=\"field_name\" value=\"";
            // line 147
            if (array_key_exists("df", $context)) {
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["df"] ?? null), "getName", [], "method", false, false, false, 147), "html", null, true);
            }
            yield "\"/>
                </div>
                <div class=\"inline field\">
                    <label for=\"field_perm\">";
            // line 150
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("Visibility"), "html", null, true);
            yield "</label>
                    <select name=\"field_perm\" id=\"field_perm\" class=\"ui dropdown\">
                        ";
            // line 152
            $context["perm"] = 0;
            // line 153
            yield "                        ";
            if (array_key_exists("df", $context)) {
                // line 154
                yield "                            ";
                $context["perm"] = CoreExtension::getAttribute($this->env, $this->source, ($context["df"] ?? null), "getPermission", [], "method", false, false, false, 154);
                // line 155
                yield "                        ";
            }
            // line 156
            yield "                        ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["perm_names"] ?? null));
            foreach ($context['_seq'] as $context["key"] => $context["value"]) {
                // line 157
                yield "                            <option value=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["key"], "html", null, true);
                yield "\"";
                if (($context["key"] == ($context["perm"] ?? null))) {
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
            // line 159
            yield "                    </select>
                </div>
                <div class=\"inline field\">
                    <label for=\"field_type\">";
            // line 162
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("Type"), "html", null, true);
            yield "</label>
                    <select name=\"field_type\" id=\"field_type\" class=\"ui dropdown\">
                        ";
            // line 164
            $context["type"] = 0;
            // line 165
            yield "                        ";
            if (array_key_exists("df", $context)) {
                // line 166
                yield "                            ";
                $context["type"] = CoreExtension::getAttribute($this->env, $this->source, ($context["df"] ?? null), "getType", [], "method", false, false, false, 166);
                // line 167
                yield "                        ";
            }
            // line 168
            yield "                        ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["field_type_names"] ?? null));
            foreach ($context['_seq'] as $context["key"] => $context["value"]) {
                // line 169
                yield "                            <option value=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["key"], "html", null, true);
                yield "\"";
                if (($context["key"] == ($context["type"] ?? null))) {
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
            // line 171
            yield "                    </select>
                </div>
                <div class=\"inline field\">
                    <label for=\"field_required\">";
            // line 174
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("Required"), "html", null, true);
            yield "</label>
                    <select name=\"field_required\" id=\"field_required\" class=\"ui dropdown\">
                        <option value=\"0\"";
            // line 176
            if (( !array_key_exists("df", $context) ||  !CoreExtension::getAttribute($this->env, $this->source, ($context["df"] ?? null), "isRequired", [], "method", false, false, false, 176))) {
                yield " selected=\"selected\"";
            }
            yield ">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("No"), "html", null, true);
            yield "</option>
                        <option value=\"1\"";
            // line 177
            if ((array_key_exists("df", $context) && CoreExtension::getAttribute($this->env, $this->source, ($context["df"] ?? null), "isRequired", [], "method", false, false, false, 177))) {
                yield " selected=\"selected\"";
            }
            yield ">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("Yes"), "html", null, true);
            yield "</option>
                    </select>
                    ";
            // line 179
            yield from             $this->loadTemplate("components/forms/csrf.html.twig", "pages/configuration_dynamic_field_form.html.twig", 179)->unwrap()->yield($context);
            // line 180
            yield "                </div>
    ";
            // line 181
            if ((($context["mode"] ?? null) != "ajax")) {
                // line 182
                yield "            </div>
        </div>
        <div class=\"ui basic center aligned segment\">
            <button type=\"submit\" name=\"valid\" class=\"ui labeled icon primary button action\">
                <i class=\"plus icon\" aria-hidden=\"true\"></i> ";
                // line 186
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("Add"), "html", null, true);
                yield "
            </button>
            <input type=\"submit\" name=\"cancel\" value=\"";
                // line 188
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("Cancel"), "html", null, true);
                yield "\" class=\"ui button\"/>
    ";
            }
            // line 190
            yield "            <input type=\"hidden\" name=\"form_name\" id=\"form_name\" value=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["form_name"] ?? null), "html", null, true);
            yield "\"/>
    ";
            // line 191
            if ((($context["mode"] ?? null) == "ajax")) {
                // line 192
                yield "            <input type=\"hidden\" name=\"ajax\" value=\"true\"/>
    ";
            }
            // line 194
            yield "    ";
            if ((($context["mode"] ?? null) != "ajax")) {
                // line 195
                yield "        </div>
    ";
            }
            // line 197
            yield "    </form>
";
        }
        return; yield '';
    }

    // line 201
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        yield "    <script>
        \$(function() {
            activateHtmlEditor(\$('#field_information'), true);
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
        return "pages/configuration_dynamic_field_form.html.twig";
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
        return array (  576 => 201,  569 => 197,  565 => 195,  562 => 194,  558 => 192,  556 => 191,  551 => 190,  546 => 188,  541 => 186,  535 => 182,  533 => 181,  530 => 180,  528 => 179,  519 => 177,  511 => 176,  506 => 174,  501 => 171,  486 => 169,  481 => 168,  478 => 167,  475 => 166,  472 => 165,  470 => 164,  465 => 162,  460 => 159,  445 => 157,  440 => 156,  437 => 155,  434 => 154,  431 => 153,  429 => 152,  424 => 150,  416 => 147,  412 => 146,  409 => 145,  401 => 140,  398 => 139,  396 => 138,  389 => 137,  387 => 136,  384 => 135,  381 => 134,  375 => 131,  371 => 130,  366 => 128,  359 => 123,  356 => 122,  351 => 119,  341 => 117,  339 => 116,  331 => 115,  323 => 114,  318 => 112,  315 => 111,  313 => 110,  303 => 107,  295 => 106,  290 => 104,  284 => 101,  280 => 100,  276 => 99,  273 => 98,  267 => 95,  263 => 94,  259 => 93,  256 => 92,  253 => 91,  247 => 88,  243 => 87,  239 => 86,  236 => 85,  233 => 84,  229 => 82,  223 => 80,  217 => 78,  215 => 77,  211 => 76,  207 => 75,  204 => 74,  201 => 73,  195 => 70,  191 => 69,  187 => 68,  184 => 67,  181 => 66,  175 => 63,  171 => 62,  168 => 61,  165 => 60,  159 => 57,  155 => 56,  152 => 55,  149 => 54,  138 => 50,  130 => 49,  125 => 47,  122 => 46,  120 => 45,  116 => 43,  101 => 41,  97 => 40,  92 => 38,  82 => 35,  78 => 34,  71 => 33,  63 => 28,  60 => 27,  58 => 26,  53 => 25,  51 => 24,  47 => 23,  37 => 21,);
    }

    public function getSourceContext()
    {
        return new Source("", "pages/configuration_dynamic_field_form.html.twig", "/var/www/galette/templates/default/pages/configuration_dynamic_field_form.html.twig");
    }
}
