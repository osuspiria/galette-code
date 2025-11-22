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

/* pages/configuration_titles.html.twig */
class __TwigTemplate_f8e807acb48b9f474fbed4ec44cb1141 extends Template
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
        $this->parent = $this->loadTemplate("page.html.twig", "pages/configuration_titles.html.twig", 21);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 23
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 24
        yield "    <form action=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("titles"), "html", null, true);
        yield "\" method=\"post\" enctype=\"multipart/form-data\" class=\"ui form\">
        <div class=\"ui basic fitted segment loader_selector\">
            <table class=\"listing ui celled striped table\">
                <thead>
                    <tr>
                        <th class=\"id_row\">#</th>
                        <th>";
        // line 30
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("Short form"), "html", null, true);
        yield "</th>
                        <th>";
        // line 31
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("Long form"), "html", null, true);
        yield "</th>
                        <th>";
        // line 32
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("Actions"), "html", null, true);
        yield "</th>
                    </tr>
                </thead>
                <tfoot>
                    <tr>
                        <td data-scope=\"row\">
                            <span class=\"visually-hidden\">
                                ";
        // line 39
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("Add title"), "html", null, true);
        yield "
                            </span>
                        </td>
                        <td class=\"left\" data-col-label=\"";
        // line 42
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("Short form"), "html", null, true);
        yield "\">
                            <div class=\"required field\">
                                <label for=\"short_label\" class=\"visually-hidden\">";
        // line 44
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("Short form"), "html", null, true);
        yield "</label>
                                <input size=\"20\" type=\"text\" name=\"short_label\" required=\"required\"/>
                            </div>
                        </td>
                        <td class=\"left\" data-col-label=\"";
        // line 48
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("Long form"), "html", null, true);
        yield "\">
                            <div class=\"required field\">
                                <label for=\"long_label\" class=\"visually-hidden\">";
        // line 50
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("Long form"), "html", null, true);
        yield "</label>
                                <input size=\"20\" type=\"text\" name=\"long_label\" required=\"required\"/>
                            </div>
                        </td>
                        <td class=\"center actions_row\">
                            <input type=\"hidden\" name=\"new\" value=\"1\" />
                            <button type=\"submit\" name=\"valid\" class=\"ui labeled icon button\">
                                <i class=\"plus green icon\" aria-hidden=\"true\"></i>
                                ";
        // line 58
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("Add"), "html", null, true);
        yield "
                            </button>
                        </td>
                    </tr>
                </tfoot>
                <tbody>
        ";
        // line 64
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["titles_list"] ?? null));
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
        foreach ($context['_seq'] as $context["_key"] => $context["title"]) {
            // line 65
            yield "                    <tr>
                        <td data-scope=\"row\">
            ";
            // line 67
            if (CoreExtension::getAttribute($this->env, $this->source, ($context["preferences"] ?? null), "pref_show_id", [], "any", false, false, false, 67)) {
                // line 68
                yield "                            ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["title"], "id", [], "any", false, false, false, 68), "html", null, true);
                yield "
            ";
            } else {
                // line 70
                yield "                            ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 70), "html", null, true);
                yield "
            ";
            }
            // line 72
            yield "                        </td>
                        <td class=\"left\" data-col-label=\"";
            // line 73
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("Short form"), "html", null, true);
            yield "\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["title"], "short", [], "any", false, false, false, 73));
            yield "</td>
                        <td class=\"left\" data-col-label=\"";
            // line 74
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("Long form"), "html", null, true);
            yield "\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["title"], "long", [], "any", false, false, false, 74));
            yield "</td>
                        <td class=\"center actions_row\">
                            <a
                                href=\"";
            // line 77
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("editTitle", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["title"], "id", [], "any", false, false, false, 77)]), "html", null, true);
            yield "\"
                                class=\"action single-edit\"
                            >
                                <i class=\"ui edit icon tooltip\" aria-hidden=\"true\"></i>
                                <span class=\"ui special popup\">";
            // line 81
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::replace($this->env->getFunction('_T')->getCallable()("Edit '%s' title"), ["%s" => $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["title"], "short", [], "any", false, false, false, 81))]), "html", null, true);
            yield "</span>
                            </a>
            ";
            // line 83
            if (((CoreExtension::getAttribute($this->env, $this->source, $context["title"], "id", [], "any", false, false, false, 83) == 1) || (CoreExtension::getAttribute($this->env, $this->source, $context["title"], "id", [], "any", false, false, false, 83) == 2))) {
                // line 84
                yield "                            <i class=\"ui icon\">&nbsp;</i>
            ";
            } else {
                // line 86
                yield "                            <a
                                href=\"";
                // line 87
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("removeTitle", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["title"], "id", [], "any", false, false, false, 87)]), "html", null, true);
                yield "\"
                                class=\"delete \"
                            >
                                <i class=\"ui trash red icon tooltip\" aria-hidden=\"true\"></i>
                                <span class=\"ui special popup\">";
                // line 91
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::replace($this->env->getFunction('_T')->getCallable()("Delete '%s' title"), ["%s" => $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["title"], "short", [], "any", false, false, false, 91))]), "html", null, true);
                yield "</span>
                            </a>
            ";
            }
            // line 94
            yield "                        </td>
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['title'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 97
        yield "                </tbody>
            </table>
        </div>
        ";
        // line 100
        yield from         $this->loadTemplate("components/forms/csrf.html.twig", "pages/configuration_titles.html.twig", 100)->unwrap()->yield($context);
        // line 101
        yield "    </form>
";
        return; yield '';
    }

    // line 104
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 105
        yield "    <script type=\"text/javascript\">
        \$(function() {
            ";
        // line 107
        $context["modal_onapprove"] = "
                \$('.modal-form form #redirect_uri').val(window.location.href);
                \$('.modal-form form').submit();
            ";
        // line 111
        yield "            ";
        yield from         $this->loadTemplate("elements/js/modal_action.js.twig", "pages/configuration_titles.html.twig", 111)->unwrap()->yield(CoreExtension::merge($context, ["selector" => ".single-edit", "modal_title_twig" => $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("Edit title"), "js"), "modal_class" => "mini", "modal_onapprove" =>         // line 115
($context["modal_onapprove"] ?? null)]));
        // line 117
        yield "
            ";
        // line 118
        yield from         $this->loadTemplate("elements/js/removal.js.twig", "pages/configuration_titles.html.twig", 118)->unwrap()->yield(CoreExtension::merge($context, ["single_action" => "true"]));
        // line 121
        yield "        });
    </script>
";
        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "pages/configuration_titles.html.twig";
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
        return array (  260 => 121,  258 => 118,  255 => 117,  253 => 115,  251 => 111,  246 => 107,  242 => 105,  238 => 104,  232 => 101,  230 => 100,  225 => 97,  209 => 94,  203 => 91,  196 => 87,  193 => 86,  189 => 84,  187 => 83,  182 => 81,  175 => 77,  167 => 74,  161 => 73,  158 => 72,  152 => 70,  146 => 68,  144 => 67,  140 => 65,  123 => 64,  114 => 58,  103 => 50,  98 => 48,  91 => 44,  86 => 42,  80 => 39,  70 => 32,  66 => 31,  62 => 30,  52 => 24,  48 => 23,  37 => 21,);
    }

    public function getSourceContext()
    {
        return new Source("", "pages/configuration_titles.html.twig", "/var/www/galette/templates/default/pages/configuration_titles.html.twig");
    }
}
