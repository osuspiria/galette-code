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

/* components/dynamic_fields.html.twig */
class __TwigTemplate_7278ef0f3fbad2d2c6dc189076609710 extends Template
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
        $macros["_self"] = $this->macros["_self"] = $this;
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 21
        if ( !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, ($context["object"] ?? null), "getDynamicFields", [], "method", false, false, false, 21))) {
            // line 22
            yield "    ";
            $context["fields"] = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["object"] ?? null), "getDynamicFields", [], "method", false, false, false, 22), "getFields", [], "method", false, false, false, 22);
            // line 23
            yield "    ";
            $context["masschange"] = (($context["masschange"]) ?? (false));
            // line 24
            yield "
    ";
            // line 25
            if ( !Twig\Extension\CoreExtension::testEmpty(($context["fields"] ?? null))) {
                // line 26
                yield "
        ";
                // line 145
                yield "
        <div class=\"ui styled fluid accordion field\">
            <div class=\"active title\">
                <i class=\"jsonly displaynone icon dropdown\" aria-hidden=\"true\"></i>
                ";
                // line 149
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("Additionnal fields:"), "html", null, true);
                yield "
            </div>
            <div class=\"active content field\">
                <div class=\"ui";
                // line 152
                if (CoreExtension::getAttribute($this->env, $this->source, ($context["preferences"] ?? null), "pref_member_form_grid", [], "any", true, true, false, 152)) {
                    yield " ";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["preferences"] ?? null), "pref_member_form_grid", [], "any", false, false, false, 152), "html", null, true);
                }
                yield " column stackable grid\">
                ";
                // line 153
                $context["access_level"] = CoreExtension::getAttribute($this->env, $this->source, ($context["login"] ?? null), "getAccessLevel", [], "method", false, false, false, 153);
                // line 154
                yield "                ";
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(($context["fields"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["field"]) {
                    // line 155
                    yield "                    ";
                    $context["perm"] = CoreExtension::getAttribute($this->env, $this->source, $context["field"], "getPermission", [], "method", false, false, false, 155);
                    // line 156
                    yield "                    ";
                    if (($this->env->getFunction('get_class')->getCallable()($context["field"]) == "Galette\\DynamicFields\\Separator")) {
                        // line 157
                        yield "                    <div class=\"sixteen wide column\">
                        <div class=\"ui horizontal divider\">";
                        // line 158
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["field"], "getName", [], "method", false, false, false, 158));
                        yield "</div>
                    </div>
                    ";
                    } elseif (((($this->env->getFunction('get_class')->getCallable()(                    // line 160
$context["field"]) == "Galette\\DynamicFields\\File") || CoreExtension::getAttribute($this->env, $this->source, $context["field"], "isRepeatable", [], "method", false, false, false, 160)) && ($context["masschange"] ?? null))) {
                        // line 161
                        yield "                        <!-- File and repeatable fields not shown in mass changes form -->
                    ";
                    } else {
                        // line 163
                        yield "                        ";
                        $context["disabled"] = false;
                        // line 164
                        yield "                        ";
                        if (((($context["perm"] ?? null) == Twig\Extension\CoreExtension::constant("Galette\\Entity\\FieldsConfig::USER_READ")) && (($context["access_level"] ?? null) == Twig\Extension\CoreExtension::constant("Galette\\Core\\Authentication::ACCESS_USER")))) {
                            // line 165
                            yield "                            ";
                            $context["disabled"] = true;
                            // line 166
                            yield "                        ";
                        }
                        // line 167
                        yield "                        ";
                        $context["values"] = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["object"] ?? null), "getDynamicFields", [], "method", false, false, false, 167), "getValues", [CoreExtension::getAttribute($this->env, $this->source, $context["field"], "getId", [], "method", false, false, false, 167)], "method", false, false, false, 167);
                        // line 168
                        yield "                        ";
                        // line 172
                        yield "                        ";
                        if (((($this->env->getFunction('get_class')->getCallable()($context["field"]) == "Galette\\DynamicFields\\File") || (CoreExtension::getAttribute($this->env, $this->source, $context["field"], "isRepeatable", [], "method", false, false, false, 172) && (CoreExtension::getAttribute($this->env, $this->source, $context["field"], "getRepeat", [], "method", false, false, false, 172) > 1))) || (CoreExtension::getAttribute($this->env, $this->source, $context["field"], "isMultiValued", [], "method", false, false, false, 172) && (CoreExtension::getAttribute($this->env, $this->source, $context["field"], "getRepeat", [], "method", false, false, false, 172) == 0)))) {
                            // line 173
                            yield "                          ";
                            $context["columns"] = "sixteen wide ";
                            // line 174
                            yield "                        ";
                        } elseif (((CoreExtension::getAttribute($this->env, $this->source, $context["field"], "getWidthInForms", [], "method", false, false, false, 174) == 1) || ((CoreExtension::getAttribute($this->env, $this->source, ($context["preferences"] ?? null), "pref_member_form_grid", [], "any", false, false, false, 174) == "two") && (CoreExtension::getAttribute($this->env, $this->source, $context["field"], "getWidthInForms", [], "method", false, false, false, 174) == 3)))) {
                            // line 175
                            yield "                          ";
                            $context["columns"] = "";
                            // line 176
                            yield "                        ";
                        } else {
                            // line 177
                            yield "                          ";
                            $context["columns"] = (((CoreExtension::getAttribute($this->env, $this->source, $context["field"], "getWidthInForms", [], "method", false, false, false, 177) == 3)) ? ("eight wide ") : ("sixteen wide "));
                            // line 178
                            yield "                        ";
                        }
                        // line 179
                        yield "                        <div class=\"
                            ";
                        // line 180
                        if (((($this->env->getFunction('get_class')->getCallable()($context["field"]) == "Galette\\DynamicFields\\File") || (CoreExtension::getAttribute($this->env, $this->source, $context["field"], "isRepeatable", [], "method", false, false, false, 180) && (CoreExtension::getAttribute($this->env, $this->source, $context["field"], "getRepeat", [], "method", false, false, false, 180) > 1))) || (CoreExtension::getAttribute($this->env, $this->source, $context["field"], "isMultiValued", [], "method", false, false, false, 180) && (CoreExtension::getAttribute($this->env, $this->source, $context["field"], "getRepeat", [], "method", false, false, false, 180) == 0)))) {
                            // line 181
                            yield "                               repetable ";
                        }
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["columns"] ?? null), "html", null, true);
                        yield "column\">
                            ";
                        // line 182
                        $context['_parent'] = $context;
                        $context['_seq'] = CoreExtension::ensureTraversable(($context["values"] ?? null));
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
                        foreach ($context['_seq'] as $context["_key"] => $context["field_data"]) {
                            // line 183
                            yield "                                <div class=\"field";
                            if (CoreExtension::getAttribute($this->env, $this->source, $context["field"], "isRequired", [], "method", false, false, false, 183)) {
                                yield " required";
                            }
                            if (($this->env->getFunction('get_class')->getCallable()($context["field"]) == "Galette\\DynamicFields\\File")) {
                                yield " wide";
                            }
                            yield "\">
                                    ";
                            // line 184
                            yield CoreExtension::callMacro($macros["_self"], "macro_draw_field", [$context["field"], $context["field_data"], ($context["disabled"] ?? null), CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 184), ($context["object"] ?? null), ($context["masschange"] ?? null)], 184, $context, $this->getSourceContext());
                            yield "
                                </div>
                            ";
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
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['field_data'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 187
                        yield "                            ";
                        if (( !is_iterable(($context["values"] ?? null)) || (Twig\Extension\CoreExtension::length($this->env->getCharset(), ($context["values"] ?? null)) == 0))) {
                            // line 188
                            yield "                                ";
                            $context["field_data"] = ["field_val" => ""];
                            // line 189
                            yield "                                ";
                            if (is_iterable(($context["values"] ?? null))) {
                                // line 190
                                yield "                                    ";
                                $context["current_count"] = Twig\Extension\CoreExtension::length($this->env->getCharset(), ($context["values"] ?? null));
                                // line 191
                                yield "                                ";
                            } else {
                                // line 192
                                yield "                                    ";
                                $context["current_count"] = 0;
                                // line 193
                                yield "                                ";
                            }
                            // line 194
                            yield "                                ";
                            yield CoreExtension::callMacro($macros["_self"], "macro_draw_field", [$context["field"], ($context["field_data"] ?? null), ($context["disabled"] ?? null), (($context["current_count"] ?? null) + 1), ($context["object"] ?? null), ($context["masschange"] ?? null)], 194, $context, $this->getSourceContext());
                            yield "
                            ";
                        }
                        // line 196
                        yield "                            ";
                        if (CoreExtension::getAttribute($this->env, $this->source, $context["field"], "isRepeatable", [], "method", false, false, false, 196)) {
                            // line 197
                            yield "                                ";
                            if ((CoreExtension::getAttribute($this->env, $this->source, $context["field"], "getRepeat", [], "method", false, false, false, 197) == 0)) {
                                // line 198
                                yield "                                    <p class=\"exemple\" id=\"repeat_msg\">";
                                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("Enter as many occurrences you want."), "html", null, true);
                                yield "</p>
                                ";
                            } elseif ((( !is_iterable(                            // line 199
($context["values"] ?? null)) || (Twig\Extension\CoreExtension::length($this->env->getCharset(), ($context["values"] ?? null)) < CoreExtension::getAttribute($this->env, $this->source, $context["field"], "getRepeat", [], "method", false, false, false, 199))) || (Twig\Extension\CoreExtension::length($this->env->getCharset(), ($context["values"] ?? null)) == 0))) {
                                // line 200
                                yield "                                    ";
                                if (is_iterable(($context["values"] ?? null))) {
                                    // line 201
                                    yield "                                        ";
                                    $context["current_count"] = Twig\Extension\CoreExtension::length($this->env->getCharset(), ($context["values"] ?? null));
                                    // line 202
                                    yield "                                    ";
                                } else {
                                    // line 203
                                    yield "                                        ";
                                    $context["current_count"] = 1;
                                    // line 204
                                    yield "                                    ";
                                }
                                // line 205
                                yield "                                    ";
                                $context["remaining"] = (CoreExtension::getAttribute($this->env, $this->source, $context["field"], "getRepeat", [], "method", false, false, false, 205) - ($context["current_count"] ?? null));
                                // line 206
                                yield "                                    <p class=\"exemple\" id=\"repeat_msg\">";
                                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::replace($this->env->getFunction('_T')->getCallable()("Enter up to %count more occurrences."), ["%count" => ($context["remaining"] ?? null)]), "html", null, true);
                                yield "</p>
                                ";
                            }
                            // line 208
                            yield "                            ";
                        }
                        // line 209
                        yield "                        </div>
                    ";
                    }
                    // line 211
                    yield "                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['field'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 212
                yield "                </div>
            </div>
        </div>
        ";
                // line 215
                if ( !($context["masschange"] ?? null)) {
                    // line 216
                    yield "            <script type=\"text/javascript\">
                var _addLnk = function(){
                    return \$('<a class=\"ui tiny green labeled icon button\" href=\"#\"><i class=\"plus icon\" aria-hidden=\"true\"></i> ";
                    // line 218
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("Add"), "html", null, true);
                    yield "</a>');
                };

                var _lnkEvent = function(_a, _input, _parent) {
                    var _vals = _input[0].id.split(/_/);
                    var _total = \$(_input[0]).data('maxrepeat'); //max number of occurrences
                    var _current = _vals[_vals.length-1]; //current occurrence

                   _a.click(function(e) {
                        var _new = _input.clone();

                        var _id = '';

                        for ( var i = 0 ; i < _vals.length -1 ; i++ ) {
                            _id += _vals[i] + '_';
                        }

                        _current = Number(_current) + 1;
                        _new.attr('id', _id + _current);
                        _new.attr('name', _id + _current);
                        _new.val('');
                        _a.remove();
                        _parent.append(_new);
                        _parent.append('<br/><br/>');
                        _new.focus();
                        if( _total == '0' || _current < _total ) {
                            var _b = _addLnk();
                            _lnkEvent(_b, _new, _parent);
                            _parent.append(_b);
                            if (_current < _total) {
                                \$('#repeat_msg').html('";
                    // line 248
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::replace($this->env->getFunction('_T')->getCallable()("Enter up to %count more occurrences."), ["%count" => "COUNT"]), "js"), "html", null, true);
                    yield "'.replace(/COUNT/, _total - _current));
                            }
                        } else if (_current == _total) {
                            \$('#repeat_msg').remove();
                        }
                        return false;
                    });
                }

                \$(function(){
                    \$('.repetable').each(function(){
                        var _total;
                        var _current;
                        var _parent = \$(this);

                        var _input = \$(this).find('.field:last input');
                        if ( _input.length > 0 ) {
                            while ( \$(this).find('.field').length > 1 && _input.val() == '' ) {
                                _input.remove();
                                _input = \$(this).find('.field:last input')
                            }
                            var _vals = _input[0].id.split(/_/);
                            var _total = \$(_input[0]).data('maxrepeat'); //max number of occurrences
                            var _current = _vals[_vals.length-1]; //current occurrence

                            if ( _total == '0' || _current < _total ) {
                                var _a = _addLnk();
                                \$(this).append(_a);
                                _lnkEvent(_a, _input, _parent);
                            }
                        }
                    });
                });
            </script>
        ";
                }
                // line 283
                yield "    ";
            }
        }
        return; yield '';
    }

    // line 27
    public function macro_draw_field($__field__ = null, $__field_data__ = null, $__disabled__ = null, $__loop__ = null, $__object__ = null, $__masschange__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "field" => $__field__,
            "field_data" => $__field_data__,
            "disabled" => $__disabled__,
            "loop" => $__loop__,
            "object" => $__object__,
            "masschange" => $__masschange__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        return ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            // line 28
            yield "            ";
            $context["valuedata"] = $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["field_data"] ?? null), "field_val", [], "any", false, false, false, 28));
            // line 29
            yield "            ";
            if (($this->env->getFunction('get_class')->getCallable()(($context["field"] ?? null)) == "Galette\\DynamicFields\\File")) {
                // line 30
                yield "                <label>";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "getName", [], "method", false, false, false, 30));
                yield "</label>
            ";
            } else {
                // line 32
                yield "                <label for=\"info_field_";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "getId", [], "method", false, false, false, 32), "html", null, true);
                yield "_";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["loop"] ?? null), "html", null, true);
                yield "\">
                    ";
                // line 33
                if (($context["masschange"] ?? null)) {
                    // line 34
                    yield "                        ";
                    // line 35
                    yield "                        <input type=\"checkbox\" name=\"mass_info_field_";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "getId", [], "method", false, false, false, 35), "html", null, true);
                    yield "\" class=\"mass_checkbox\"/>
                    ";
                }
                // line 37
                yield "                    ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "getName", [], "method", false, false, false, 37));
                yield "
                </label>
            ";
            }
            // line 40
            yield "            ";
            if ((CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "getInformation", [], "method", false, false, false, 40) && CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "hasInformationAbove", [], "method", false, false, false, 40))) {
                // line 41
                yield "                <div class=\"exemple\">";
                yield CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "getInformation", [], "method", false, false, false, 41);
                yield "</div>
            ";
            }
            // line 43
            yield "            ";
            if (($this->env->getFunction('get_class')->getCallable()(($context["field"] ?? null)) == "Galette\\DynamicFields\\Text")) {
                // line 44
                yield "                <textarea name=\"info_field_";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "getId", [], "method", false, false, false, 44), "html", null, true);
                yield "_";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["loop"] ?? null), "html", null, true);
                yield "\" id=\"info_field_";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "getId", [], "method", false, false, false, 44), "html", null, true);
                yield "_";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["loop"] ?? null), "html", null, true);
                yield "\"
                    cols=\"";
                // line 45
                if ((CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "getWidth", [], "method", false, false, false, 45) > 0)) {
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "getWidth", [], "method", false, false, false, 45), "html", null, true);
                } else {
                    yield "61";
                }
                yield "\"
                    rows=\"";
                // line 46
                if ((CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "getHeight", [], "method", false, false, false, 46) > 0)) {
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "getHeight", [], "method", false, false, false, 46), "html", null, true);
                } else {
                    yield "6";
                }
                yield "\"
                    ";
                // line 47
                if (CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "isRepeatable", [], "method", false, false, false, 47)) {
                    yield " data-maxrepeat=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "getRepeat", [], "method", false, false, false, 47), "html", null, true);
                    yield "\"";
                }
                // line 48
                yield "                ";
                if ( !($context["masschange"] ?? null)) {
                    // line 49
                    yield "                    ";
                    if (CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "isRequired", [], "method", false, false, false, 49)) {
                        yield " required=\"required\"";
                    }
                    // line 50
                    yield "                ";
                }
                // line 51
                yield "                    ";
                if (($context["disabled"] ?? null)) {
                    yield " disabled=\"disabled\"";
                }
                yield ">";
                yield ($context["valuedata"] ?? null);
                yield "</textarea>
            ";
            } elseif (($this->env->getFunction('get_class')->getCallable()(            // line 52
($context["field"] ?? null)) == "Galette\\DynamicFields\\Line")) {
                // line 53
                yield "                <input type=\"text\" name=\"info_field_";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "getId", [], "method", false, false, false, 53), "html", null, true);
                yield "_";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["loop"] ?? null), "html", null, true);
                yield "\" id=\"info_field_";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "getId", [], "method", false, false, false, 53), "html", null, true);
                yield "_";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["loop"] ?? null), "html", null, true);
                yield "\"
                    ";
                // line 54
                if ((CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "getWidth", [], "method", false, false, false, 54) > 0)) {
                    yield "size=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "getWidth", [], "method", false, false, false, 54), "html", null, true);
                    yield "\"";
                }
                // line 55
                yield "                    ";
                if ((CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "getSize", [], "method", false, false, false, 55) > 0)) {
                    yield "maxlength=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "getSize", [], "method", false, false, false, 55), "html", null, true);
                    yield "\"";
                }
                // line 56
                yield "                    ";
                if ((CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "getMinSize", [], "method", false, false, false, 56) > 0)) {
                    yield "minlength=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "getMinSize", [], "method", false, false, false, 56), "html", null, true);
                    yield "\"";
                }
                // line 57
                yield "                    value=\"";
                yield ($context["valuedata"] ?? null);
                yield "\"
                ";
                // line 58
                if ( !($context["masschange"] ?? null)) {
                    // line 59
                    yield "                    ";
                    if (CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "isRequired", [], "method", false, false, false, 59)) {
                        yield " required=\"required\"";
                    }
                    // line 60
                    yield "                ";
                }
                // line 61
                yield "                    ";
                if ((CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "isRepeatable", [], "method", false, false, false, 61) || (CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "getRepeat", [], "method", false, false, false, 61) == 0))) {
                    yield "data-maxrepeat=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "getRepeat", [], "method", false, false, false, 61), "html", null, true);
                    yield "\"";
                }
                // line 62
                yield "                    ";
                if (($context["disabled"] ?? null)) {
                    yield " disabled=\"disabled\"";
                }
                // line 63
                yield "                />
            ";
            } elseif (($this->env->getFunction('get_class')->getCallable()(            // line 64
($context["field"] ?? null)) == "Galette\\DynamicFields\\Choice")) {
                // line 65
                yield "                <select name=\"info_field_";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "getId", [], "method", false, false, false, 65), "html", null, true);
                yield "_";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["loop"] ?? null), "html", null, true);
                yield "\" id=\"info_field_";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "getId", [], "method", false, false, false, 65), "html", null, true);
                yield "_";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["loop"] ?? null), "html", null, true);
                yield "\"
                ";
                // line 66
                if ( !($context["masschange"] ?? null)) {
                    // line 67
                    yield "                    ";
                    if (CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "isRequired", [], "method", false, false, false, 67)) {
                        yield " required=\"required\"";
                    }
                    // line 68
                    yield "                ";
                }
                // line 69
                yield "                    ";
                if (CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "isRepeatable", [], "method", false, false, false, 69)) {
                    yield " data-maxrepeat=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "getRepeat", [], "method", false, false, false, 69), "html", null, true);
                    yield "\"";
                }
                // line 70
                yield "                    ";
                if (($context["disabled"] ?? null)) {
                    yield " disabled=\"disabled\"";
                }
                // line 71
                yield "                    >
                    <!-- If no option is present, page is not XHTML compliant -->
                    <option value=\"\">";
                // line 73
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("Select an option"), "html", null, true);
                yield "</option>
                    ";
                // line 74
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "getValues", [], "method", false, false, false, 74));
                foreach ($context['_seq'] as $context["key"] => $context["value"]) {
                    // line 75
                    yield "                        <option value=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["key"], "html", null, true);
                    yield "\"";
                    if (($context["key"] == ($context["valuedata"] ?? null))) {
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
                // line 77
                yield "                </select>
            ";
            } elseif (($this->env->getFunction('get_class')->getCallable()(            // line 78
($context["field"] ?? null)) == "Galette\\DynamicFields\\Date")) {
                // line 79
                yield "                <div id=\"dynamic_date_";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "getId", [], "method", false, false, false, 79), "html", null, true);
                yield "_rangestart\" class=\"ui calendar\">
                    <div class=\"ui fluid input left icon\">
                        <i class=\"calendar icon\" aria-hidden=\"true\"></i>
                        <input type=\"text\" name=\"info_field_";
                // line 82
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "getId", [], "method", false, false, false, 82), "html", null, true);
                yield "_";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["loop"] ?? null), "html", null, true);
                yield "\" id=\"info_field_";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "getId", [], "method", false, false, false, 82), "html", null, true);
                yield "_";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["loop"] ?? null), "html", null, true);
                yield "\" maxlength=\"10\"
                            value=\"";
                // line 83
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["valuedata"] ?? null), "html", null, true);
                yield "\" class=\"dynamic_date modif_date\" placeholder=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("yyyy-mm-dd format"), "html", null, true);
                yield "\"
                            ";
                // line 84
                if (CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "isRepeatable", [], "method", false, false, false, 84)) {
                    yield " data-maxrepeat=\"{field.getRepeat()}\"";
                }
                // line 85
                yield "                        ";
                if ( !($context["masschange"] ?? null)) {
                    // line 86
                    yield "                            ";
                    if (CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "isRequired", [], "method", false, false, false, 86)) {
                        yield " required=\"required\"";
                    }
                    // line 87
                    yield "                        ";
                }
                // line 88
                yield "                            ";
                if (($context["disabled"] ?? null)) {
                    yield " disabled=\"disabled\"";
                }
                // line 89
                yield "                        />
                    </div>
                </div>
            ";
            } elseif (($this->env->getFunction('get_class')->getCallable()(            // line 92
($context["field"] ?? null)) == "Galette\\DynamicFields\\Boolean")) {
                // line 93
                yield "                <div class=\"ui toggle checkbox\">
                    <input type=\"checkbox\" name=\"info_field_";
                // line 94
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "getId", [], "method", false, false, false, 94), "html", null, true);
                yield "_";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["loop"] ?? null), "html", null, true);
                yield "\" id=\"info_field_";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "getId", [], "method", false, false, false, 94), "html", null, true);
                yield "_";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["loop"] ?? null), "html", null, true);
                yield "\" value=\"1\"
                        ";
                // line 95
                if ((($context["valuedata"] ?? null) == 1)) {
                    yield " checked=\"checked\"";
                }
                // line 96
                yield "                        ";
                if (CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "isRepeatable", [], "method", false, false, false, 96)) {
                    yield " data-maxrepeat=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "getRepeat", [], "method", false, false, false, 96), "html", null, true);
                    yield "\"";
                }
                // line 97
                yield "                    ";
                if ( !($context["masschange"] ?? null)) {
                    // line 98
                    yield "                        ";
                    if (CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "isRequired", [], "method", false, false, false, 98)) {
                        yield " required=\"required\"";
                    }
                    // line 99
                    yield "                    ";
                }
                // line 100
                yield "                        ";
                if (($context["disabled"] ?? null)) {
                    yield " disabled=\"disabled\"";
                }
                // line 101
                yield "                    />
                </div>
            ";
            } elseif (($this->env->getFunction('get_class')->getCallable()(            // line 103
($context["field"] ?? null)) == "Galette\\DynamicFields\\File")) {
                // line 104
                yield "                ";
                if ((CoreExtension::getAttribute($this->env, $this->source, ($context["object"] ?? null), "id", [], "any", false, false, false, 104) && ($context["valuedata"] ?? null))) {
                    // line 105
                    yield "                <a href=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("getDynamicFile", ["form_name" => CoreExtension::getAttribute($this->env, $this->source, ($context["object"] ?? null), "getFormName", [], "method", false, false, false, 105), "id" => CoreExtension::getAttribute($this->env, $this->source, ($context["object"] ?? null), "id", [], "any", false, false, false, 105), "fid" => CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "getId", [], "method", false, false, false, 105), "pos" => ($context["loop"] ?? null), "name" => ($context["valuedata"] ?? null)]), "html", null, true);
                    yield "\">
                    ";
                    // line 106
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["valuedata"] ?? null), "html", null, true);
                    yield "
                    <i class=\"external alternate icon\" aria-hidden=\"true\"></i>
                </a>
                ";
                }
                // line 110
                yield "                <div class=\"extra ui basic fitted segment\">
                    <div class=\"ui file action input\">
                        <input
                            type=\"file\"
                            name=\"info_field_";
                // line 114
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "getId", [], "method", false, false, false, 114), "html", null, true);
                yield "_";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["loop"] ?? null), "html", null, true);
                yield "\"
                            id=\"info_field_";
                // line 115
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "getId", [], "method", false, false, false, 115), "html", null, true);
                yield "_";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["loop"] ?? null), "html", null, true);
                yield "_new\"
                            ";
                // line 116
                if ((CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "isRequired", [], "method", false, false, false, 116) && (($context["valuedata"] ?? null) == ""))) {
                    yield " required=\"required\"";
                }
                // line 117
                yield "                            ";
                if (($context["disabled"] ?? null)) {
                    yield " disabled=\"disabled\"";
                }
                // line 118
                yield "                        />
                        <label for=\"info_field_";
                // line 119
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "getId", [], "method", false, false, false, 119), "html", null, true);
                yield "_";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["loop"] ?? null), "html", null, true);
                yield "_new\" class=\"ui button\">
                            <i class=\"blue upload icon\" aria-hidden=\"true\"></i>
                            ";
                // line 121
                if ((CoreExtension::getAttribute($this->env, $this->source, ($context["object"] ?? null), "id", [], "any", false, false, false, 121) && ($context["valuedata"] ?? null))) {
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("Choose another file"), "html", null, true);
                } else {
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("Choose a file"), "html", null, true);
                }
                // line 122
                yield "                        </label>
                    </div>
                </div>
                ";
                // line 125
                if ((CoreExtension::getAttribute($this->env, $this->source, ($context["object"] ?? null), "id", [], "any", false, false, false, 125) && ($context["valuedata"] ?? null))) {
                    // line 126
                    yield "                <div class=\"extra ui basic fitted segment\">
                    <div class=\"ui toggle checkbox\">
                        <input
                            type=\"checkbox\"
                            name=\"info_field_";
                    // line 130
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "getId", [], "method", false, false, false, 130), "html", null, true);
                    yield "_";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["loop"] ?? null), "html", null, true);
                    yield "\"
                            id=\"info_field_";
                    // line 131
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "getId", [], "method", false, false, false, 131), "html", null, true);
                    yield "_";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["loop"] ?? null), "html", null, true);
                    yield "_delete\"
                            onclick=\"this.form.info_field_";
                    // line 132
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "getId", [], "method", false, false, false, 132), "html", null, true);
                    yield "_";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["loop"] ?? null), "html", null, true);
                    yield "_new.disabled = this.checked;\"
                        />
                        <label class=\"labelalign\" for=\"info_field_";
                    // line 134
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "getId", [], "method", false, false, false, 134), "html", null, true);
                    yield "_";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["loop"] ?? null), "html", null, true);
                    yield "_delete\">
                            ";
                    // line 135
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("delete"), "html", null, true);
                    yield "
                        </label>
                    </div>
                </div>
                ";
                }
                // line 140
                yield "            ";
            }
            // line 141
            yield "            ";
            if ((CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "getInformation", [], "method", false, false, false, 141) &&  !CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "hasInformationAbove", [], "method", false, false, false, 141))) {
                // line 142
                yield "                <div class=\"exemple\">";
                yield CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "getInformation", [], "method", false, false, false, 142);
                yield "</div>
            ";
            }
            // line 144
            yield "        ";
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "components/dynamic_fields.html.twig";
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
        return array (  820 => 144,  814 => 142,  811 => 141,  808 => 140,  800 => 135,  794 => 134,  787 => 132,  781 => 131,  775 => 130,  769 => 126,  767 => 125,  762 => 122,  756 => 121,  749 => 119,  746 => 118,  741 => 117,  737 => 116,  731 => 115,  725 => 114,  719 => 110,  712 => 106,  707 => 105,  704 => 104,  702 => 103,  698 => 101,  693 => 100,  690 => 99,  685 => 98,  682 => 97,  675 => 96,  671 => 95,  661 => 94,  658 => 93,  656 => 92,  651 => 89,  646 => 88,  643 => 87,  638 => 86,  635 => 85,  631 => 84,  625 => 83,  615 => 82,  608 => 79,  606 => 78,  603 => 77,  588 => 75,  584 => 74,  580 => 73,  576 => 71,  571 => 70,  564 => 69,  561 => 68,  556 => 67,  554 => 66,  543 => 65,  541 => 64,  538 => 63,  533 => 62,  526 => 61,  523 => 60,  518 => 59,  516 => 58,  511 => 57,  504 => 56,  497 => 55,  491 => 54,  480 => 53,  478 => 52,  469 => 51,  466 => 50,  461 => 49,  458 => 48,  452 => 47,  444 => 46,  436 => 45,  425 => 44,  422 => 43,  416 => 41,  413 => 40,  406 => 37,  400 => 35,  398 => 34,  396 => 33,  389 => 32,  383 => 30,  380 => 29,  377 => 28,  360 => 27,  353 => 283,  315 => 248,  282 => 218,  278 => 216,  276 => 215,  271 => 212,  265 => 211,  261 => 209,  258 => 208,  252 => 206,  249 => 205,  246 => 204,  243 => 203,  240 => 202,  237 => 201,  234 => 200,  232 => 199,  227 => 198,  224 => 197,  221 => 196,  215 => 194,  212 => 193,  209 => 192,  206 => 191,  203 => 190,  200 => 189,  197 => 188,  194 => 187,  177 => 184,  167 => 183,  150 => 182,  144 => 181,  142 => 180,  139 => 179,  136 => 178,  133 => 177,  130 => 176,  127 => 175,  124 => 174,  121 => 173,  118 => 172,  116 => 168,  113 => 167,  110 => 166,  107 => 165,  104 => 164,  101 => 163,  97 => 161,  95 => 160,  90 => 158,  87 => 157,  84 => 156,  81 => 155,  76 => 154,  74 => 153,  67 => 152,  61 => 149,  55 => 145,  52 => 26,  50 => 25,  47 => 24,  44 => 23,  41 => 22,  39 => 21,);
    }

    public function getSourceContext()
    {
        return new Source("", "components/dynamic_fields.html.twig", "/var/www/galette/templates/default/components/dynamic_fields.html.twig");
    }
}
