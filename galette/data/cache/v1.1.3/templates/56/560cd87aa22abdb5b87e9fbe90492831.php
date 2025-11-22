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

/* elements/display_dynamic_fields.html.twig */
class __TwigTemplate_e3583ce029cb0153faae08e1225e2f77 extends Template
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
        if (( !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, ($context["object"] ?? null), "getDynamicFields", [], "method", false, false, false, 21)) && (Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["object"] ?? null), "getDynamicFields", [], "method", false, false, false, 21), "getFields", [], "method", false, false, false, 21)) > 0))) {
            // line 22
            yield "<div class=\"ui basic fitted segment\">
    <div class=\"ui styled fluid accordion row\">
        <div class=\"active title\">
            <i class=\"jsonly displaynone icon dropdown\" aria-hidden=\"true\"></i>
            ";
            // line 26
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("Additionnal fields:"), "html", null, true);
            yield "
        </div>
        <div class=\"active content field\">
            <table class=\"ui very basic striped stackable padded table\">
                ";
            // line 30
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["object"] ?? null), "getDynamicFields", [], "method", false, false, false, 30), "getFields", [], "method", false, false, false, 30));
            foreach ($context['_seq'] as $context["_key"] => $context["field"]) {
                // line 31
                yield "                    ";
                if (($this->env->getFunction('get_class')->getCallable()($context["field"]) == "Galette\\DynamicFields\\Separator")) {
                    // line 32
                    yield "                <tr>
                    <td colspan=\"2\"><div class=\"ui horizontal divider\">";
                    // line 33
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["field"], "getName", [], "method", false, false, false, 33));
                    yield "</div></td>
                </tr>
                    ";
                } else {
                    // line 36
                    yield "                <tr>
                    <th class=\"three wide column\">";
                    // line 37
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["field"], "getName", [], "method", false, false, false, 37));
                    yield "</th>
                    <td>
                        ";
                    // line 39
                    $context['_parent'] = $context;
                    $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["object"] ?? null), "getDynamicFields", [], "method", false, false, false, 39), "getValues", [CoreExtension::getAttribute($this->env, $this->source, $context["field"], "getId", [], "method", false, false, false, 39)], "method", false, false, false, 39));
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
                        // line 40
                        yield "                            ";
                        $context["value"] = Twig\Extension\CoreExtension::default($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["field_data"], "field_val", [], "any", false, false, false, 40)), "");
                        // line 41
                        yield "                            ";
                        if (($this->env->getFunction('get_class')->getCallable()($context["field"]) == "Galette\\DynamicFields\\Choice")) {
                            // line 42
                            yield "                                ";
                            if (CoreExtension::getAttribute($this->env, $this->source, $context["field_data"], "text_val", [], "any", true, true, false, 42)) {
                                // line 43
                                yield "                                    ";
                                $context["value"] = CoreExtension::getAttribute($this->env, $this->source, $context["field_data"], "text_val", [], "any", false, false, false, 43);
                                // line 44
                                yield "                                ";
                            } else {
                                // line 45
                                yield "                                    ";
                                $context["value"] = "";
                                // line 46
                                yield "                                ";
                            }
                            // line 47
                            yield "                            ";
                        } elseif (($this->env->getFunction('get_class')->getCallable()($context["field"]) == "Galette\\DynamicFields\\Text")) {
                            // line 48
                            yield "                                ";
                            $context["value"] = Twig\Extension\CoreExtension::default(Twig\Extension\CoreExtension::nl2br($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["field_data"], "field_val", [], "any", false, false, false, 48))), "");
                            // line 49
                            yield "                            ";
                        }
                        // line 50
                        yield "                            ";
                        if ( !CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "first", [], "any", false, false, false, 50)) {
                            yield "<br />";
                        }
                        // line 51
                        yield "                            ";
                        if (($this->env->getFunction('get_class')->getCallable()($context["field"]) == "Galette\\DynamicFields\\Boolean")) {
                            // line 52
                            yield "                                ";
                            if (($context["value"] ?? null)) {
                                // line 53
                                yield "                        ";
                                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("Yes"), "html", null, true);
                                yield "
                                ";
                            } else {
                                // line 55
                                yield "                        ";
                                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("No"), "html", null, true);
                                yield "
                                ";
                            }
                            // line 57
                            yield "                            ";
                        } elseif (($this->env->getFunction('get_class')->getCallable()($context["field"]) == "Galette\\DynamicFields\\File")) {
                            // line 58
                            yield "                                <a href=\"";
                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("getDynamicFile", ["form_name" => CoreExtension::getAttribute($this->env, $this->source, ($context["object"] ?? null), "getFormName", [], "method", false, false, false, 58), "id" => CoreExtension::getAttribute($this->env, $this->source, ($context["object"] ?? null), "id", [], "any", false, false, false, 58), "fid" => CoreExtension::getAttribute($this->env, $this->source, $context["field"], "getId", [], "method", false, false, false, 58), "pos" => CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 58), "name" => ($context["value"] ?? null)]), "html", null, true);
                            yield "\">";
                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["value"] ?? null), "html", null, true);
                            yield "</a>
                            ";
                        } elseif ((($this->env->getFunction('get_class')->getCallable()(                        // line 59
$context["field"]) == "Galette\\DynamicFields\\Line") && $this->env->getFunction('callstatic')->getCallable()("Galette\\Core\\GaletteMail", "isValidEmail", ($context["value"] ?? null)))) {
                            // line 60
                            yield "                                <a href=\"mailto:";
                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["value"] ?? null), "html", null, true);
                            yield "\">";
                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["value"] ?? null), "html", null, true);
                            yield "</a>
                            ";
                        } elseif ((($this->env->getFunction('get_class')->getCallable()(                        // line 61
$context["field"]) == "Galette\\DynamicFields\\Line") && $this->env->getFunction('callstatic')->getCallable()("Galette\\Core\\GaletteMail", "isUrl", ($context["value"] ?? null)))) {
                            // line 62
                            yield "                                <a href=\"";
                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["value"] ?? null), "html", null, true);
                            yield "\" target=\"_blank\" title=\"";
                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::replace($this->env->getFunction('_T')->getCallable()("Open '%s' in a new window"), ["%s" => ($context["value"] ?? null)]), "html", null, true);
                            yield "\">";
                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["value"] ?? null), "html", null, true);
                            yield "</a>
                            ";
                        } else {
                            // line 64
                            yield "                                ";
                            yield ($context["value"] ?? null);
                            yield "
                            ";
                        }
                        // line 66
                        yield "                        ";
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
                    // line 67
                    yield "                    </td>
                </tr>
                    ";
                }
                // line 70
                yield "                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['field'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 71
            yield "            </table>
        </div>
    </div>
</div>
";
        }
        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "elements/display_dynamic_fields.html.twig";
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
        return array (  209 => 71,  203 => 70,  198 => 67,  184 => 66,  178 => 64,  168 => 62,  166 => 61,  159 => 60,  157 => 59,  150 => 58,  147 => 57,  141 => 55,  135 => 53,  132 => 52,  129 => 51,  124 => 50,  121 => 49,  118 => 48,  115 => 47,  112 => 46,  109 => 45,  106 => 44,  103 => 43,  100 => 42,  97 => 41,  94 => 40,  77 => 39,  72 => 37,  69 => 36,  63 => 33,  60 => 32,  57 => 31,  53 => 30,  46 => 26,  40 => 22,  38 => 21,);
    }

    public function getSourceContext()
    {
        return new Source("", "elements/display_dynamic_fields.html.twig", "/var/www/galette/templates/default/elements/display_dynamic_fields.html.twig");
    }
}
