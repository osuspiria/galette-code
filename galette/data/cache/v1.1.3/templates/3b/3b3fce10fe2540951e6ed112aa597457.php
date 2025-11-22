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

/* pages/configuration_payment_types.html.twig */
class __TwigTemplate_259eb983904cf526d425b9b7a3e63956 extends Template
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
        $this->parent = $this->loadTemplate("page.html.twig", "pages/configuration_payment_types.html.twig", 21);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 23
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 24
        yield "        <form action=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("paymentTypes"), "html", null, true);
        yield "\" method=\"post\" enctype=\"multipart/form-data\" class=\"ui form\">
            <div class=\"ui basic fitted segment loader_selector\">
                <table class=\"listing ui celled striped table\">
                    <thead>
                        <tr>
                            <th class=\"id_row\">#</th>
                            <th>";
        // line 30
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("Name"), "html", null, true);
        yield "</th>
                            <th>";
        // line 31
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("Actions"), "html", null, true);
        yield "</th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <td data-scope=\"row\">
                                <span class=\"visually-hidden\">
                                    ";
        // line 38
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("Add payment type"), "html", null, true);
        yield "
                                </span>
                            </td>
                            <td class=\"left\" data-col-label=\"";
        // line 41
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("Label"), "html", null, true);
        yield "\">
                                <div class=\"required field\">
                                    <label for=\"name\" class=\"visually-hidden\">";
        // line 43
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("Name"), "html", null, true);
        yield "</label>
                                    <input size=\"20\" type=\"text\" name=\"name\" required=\"required\"/>
                                </div>
                            </td>
                            <td class=\"center actions_row\">
                                <input type=\"hidden\" name=\"new\" value=\"1\" />
                                <button type=\"submit\" name=\"valid\" class=\"ui labeled icon button\">
                                    <i class=\"plus green icon\" aria-disabled=\"true\"></i>
                                    ";
        // line 51
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("Add"), "html", null, true);
        yield "
                                </button>
                            </td>
                        </tr>
                    </tfoot>
                    <tbody>
            ";
        // line 57
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["list"] ?? null));
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
        foreach ($context['_seq'] as $context["_key"] => $context["ptype"]) {
            // line 58
            yield "                        <tr>
                            <td data-scope=\"id\" class=\"collapsing\">
                ";
            // line 60
            if (CoreExtension::getAttribute($this->env, $this->source, ($context["preferences"] ?? null), "pref_show_id", [], "any", false, false, false, 60)) {
                // line 61
                yield "                                ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["ptype"], "__get", ["id"], "method", false, false, false, 61), "html", null, true);
                yield "
                ";
            } else {
                // line 63
                yield "                                ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 63), "html", null, true);
                yield "
                ";
            }
            // line 65
            yield "                            </td>
                            <td class=\"left\" data-col-label=\"";
            // line 66
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("Name"), "html", null, true);
            yield "\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["ptype"], "getName", [], "method", false, false, false, 66), "html", null, true);
            yield "</td>
                            <td class=\"center actions_row\">
                                <a
                                    href=\"";
            // line 69
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("editPaymentType", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["ptype"], "__get", ["id"], "method", false, false, false, 69)]), "html", null, true);
            yield "\"
                                    class=\"action single-edit\"
                                >
                                    <i class=\"ui edit icon tooltip\" aria-hidden=\"true\"></i>
                                    <span class=\"ui special popup\">";
            // line 73
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::replace($this->env->getFunction('_T')->getCallable()("Edit '%s' payment type"), ["%s" => CoreExtension::getAttribute($this->env, $this->source, $context["ptype"], "getName", [], "method", false, false, false, 73)]), "html", null, true);
            yield "</span>
                                </a>
                                <a
                                    href=\"";
            // line 76
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("dynamicTranslations", ["text_orig" => $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["ptype"], "getName", [false], "method", false, false, false, 76))]), "html", null, true);
            yield "\"
                                    class=\"action single-translate\"
                                >
                                    <i class=\"ui language grey icon tooltip\" aria-hidden=\"true\"></i>
                                    <span class=\"ui special popup\">";
            // line 80
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::replace($this->env->getFunction('_T')->getCallable()("Translate '%s'"), ["%s" => CoreExtension::getAttribute($this->env, $this->source, $context["ptype"], "getName", [], "method", false, false, false, 80)]), "html", null, true);
            yield "</span>
                                </a>
                ";
            // line 82
            if (CoreExtension::getAttribute($this->env, $this->source, $context["ptype"], "isSystemType", [], "method", false, false, false, 82)) {
                // line 83
                yield "                                <i class=\"ui icon\">&nbsp;</i>
                ";
            } else {
                // line 85
                yield "                                <a
                                    href=\"";
                // line 86
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("removePaymentType", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["ptype"], "__get", ["id"], "method", false, false, false, 86)]), "html", null, true);
                yield "\"
                                    class=\"delete\"
                                >
                                    <i class=\"ui trash red icon tooltip\" aria-hidden=\"true\"></i>
                                    <span class=\"ui special popup\">";
                // line 90
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::replace($this->env->getFunction('_T')->getCallable()("Delete '%s' payment type"), ["%s" => CoreExtension::getAttribute($this->env, $this->source, $context["ptype"], "getName", [], "method", false, false, false, 90)]), "html", null, true);
                yield "</span>
                                </a>
                ";
            }
            // line 93
            yield "                            </td>
                        </tr>
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ptype'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 96
        yield "                    </tbody>
                </table>
            </div>
            ";
        // line 99
        yield from         $this->loadTemplate("components/forms/csrf.html.twig", "pages/configuration_payment_types.html.twig", 99)->unwrap()->yield($context);
        // line 100
        yield "        </form>
";
        return; yield '';
    }

    // line 103
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 104
        yield "        <script type=\"text/javascript\">
            \$(function() {
                ";
        // line 106
        $context["modal_onapprove"] = "
                    \$('.modal-form form #redirect_uri').val(window.location.href);
                    \$('.modal-form form').submit();
                ";
        // line 110
        yield "
                ";
        // line 111
        yield from         $this->loadTemplate("elements/js/modal_action.js.twig", "pages/configuration_payment_types.html.twig", 111)->unwrap()->yield(CoreExtension::merge($context, ["selector" => ".single-edit", "modal_title_twig" => $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("Edit payment type"), "js"), "modal_class" => "mini", "modal_onapprove" =>         // line 115
($context["modal_onapprove"] ?? null)]));
        // line 117
        yield "
                ";
        // line 118
        $context["extra_success"] = "
                    \$('.modal-form form').on('submit', function(event) {
                        event.preventDefault();
                        var _form = \$(this);
                        var _data = _form.serialize();
                        \$.ajax({
                            url: _form.attr('action'),
                            type: 'POST',
                            datatype: 'json',
                            data: _data,
                            error: function() {
                                \$.modal({
                                    title: '%error%',
                                    class: 'mini',
                                    actions: [{
                                        text: '%close%',
                                        icon: 'times',
                                        class: 'icon labeled cancel'
                                    }],
                                    className: {
                                        modal: 'ui redalert modal',
                                        title: 'center aligned header',
                                        content: 'center aligned content',
                                        actions: 'center aligned actions'
                                    }
                                }).modal('show');
                            }
                        });
                    });
                ";
        // line 148
        yield "                ";
        yield from         $this->loadTemplate("elements/js/modal_action.js.twig", "pages/configuration_payment_types.html.twig", 148)->unwrap()->yield(CoreExtension::merge($context, ["selector" => ".single-translate", "extra_success" => Twig\Extension\CoreExtension::replace(        // line 150
($context["extra_success"] ?? null), ["%error%" => $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("An error occurred :("), "js"), "%close%" => $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("Close"), "js")]), "modal_title_twig" => $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("Translate labels"), "js"), "modal_content_class" => "scrolling", "modal_onapprove" =>         // line 153
($context["modal_onapprove"] ?? null)]));
        // line 155
        yield "
                ";
        // line 156
        yield from         $this->loadTemplate("elements/js/removal.js.twig", "pages/configuration_payment_types.html.twig", 156)->unwrap()->yield(CoreExtension::merge($context, ["single_action" => "true"]));
        // line 159
        yield "            });
        </script>
";
        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "pages/configuration_payment_types.html.twig";
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
        return array (  292 => 159,  290 => 156,  287 => 155,  285 => 153,  284 => 150,  282 => 148,  251 => 118,  248 => 117,  246 => 115,  245 => 111,  242 => 110,  237 => 106,  233 => 104,  229 => 103,  223 => 100,  221 => 99,  216 => 96,  200 => 93,  194 => 90,  187 => 86,  184 => 85,  180 => 83,  178 => 82,  173 => 80,  166 => 76,  160 => 73,  153 => 69,  145 => 66,  142 => 65,  136 => 63,  130 => 61,  128 => 60,  124 => 58,  107 => 57,  98 => 51,  87 => 43,  82 => 41,  76 => 38,  66 => 31,  62 => 30,  52 => 24,  48 => 23,  37 => 21,);
    }

    public function getSourceContext()
    {
        return new Source("", "pages/configuration_payment_types.html.twig", "/var/www/galette/templates/default/pages/configuration_payment_types.html.twig");
    }
}
