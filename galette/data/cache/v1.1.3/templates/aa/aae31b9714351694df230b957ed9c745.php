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

/* pages/status_list.html.twig */
class __TwigTemplate_562bd034a1b3d5fed8182709b328f1e4 extends Template
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
        $this->parent = $this->loadTemplate("page.html.twig", "pages/status_list.html.twig", 21);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 23
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 24
        yield "    <form action=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("doAddStatus"), "html", null, true);
        yield "\" method=\"post\" class=\"tabbed ui form\">
        <div class=\"ui icon info visible message\">
            <i class=\"info circle blue icon\" aria-hidden=\"true\"></i>
            <div class=\"content\">
                ";
        // line 28
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::replace($this->env->getFunction('_T')->getCallable()("Note: members with a status priority lower than %priority are staff members."), ["%priority" => ($context["non_staff_priority"] ?? null)]), "html", null, true);
        yield "
            </div>
        </div>
        <div class=\"ui basic fitted segment loader_selector\">
            <table class=\"listing ui celled striped table\">
                <thead>
                <tr>
                    <th class=\"id_row\">#</th>
                    <th>";
        // line 36
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("Name"), "html", null, true);
        yield "</th>
                    <th>";
        // line 37
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("Priority"), "html", null, true);
        yield "</th>
                    <th>";
        // line 38
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("Actions"), "html", null, true);
        yield "</th>
                </tr>
                </thead>
                <tfoot>
                <tr>
                    <td data-scope=\"row\">
                        <span class=\"visually-hidden\">
                            ";
        // line 45
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("New status"), "html", null, true);
        yield "
                        </span>
                    </td>
                    <td class=\"left\" data-col-label=\"";
        // line 48
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("Name"), "html", null, true);
        yield "\">
                        <div class=\"required field\">
                            <label for=\"name\" class=\"visually-hidden\">";
        // line 50
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("Name"), "html", null, true);
        yield "</label>
                            <input size=\"40\" type=\"text\" name=\"libelle_statut\" required=\"required\"/>
                        </div>
                    </td>
                    <td class=\"left\" data-col-label=\"";
        // line 54
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("Priority"), "html", null, true);
        yield "\">
                        <input size=\"4\" type=\"text\" name=\"priorite_statut\" value=\"99\" />
                    </td>
                    <td class=\"center actions_row\">
                        <input type=\"hidden\" name=\"new\" value=\"1\" />
                        <button type=\"submit\" name=\"valid\" class=\"ui labeled icon button\">
                            <i class=\"plus green icon\" aria-hidden=\"true\"></i>
                            ";
        // line 61
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("Add"), "html", null, true);
        yield "
                        </button>
                    </td>
                </tr>
                </tfoot>
                <tbody>
                ";
        // line 67
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["entries"] ?? null));
        foreach ($context['_seq'] as $context["eid"] => $context["entry"]) {
            // line 68
            yield "                    <tr>
                        <td data-scope=\"id\" class=\"collapsing\">
                            ";
            // line 70
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["eid"], "html", null, true);
            yield "
                        </td>
                        <td class=\"left\" data-col-label=\"";
            // line 72
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("Name"), "html", null, true);
            yield "\">
                            ";
            // line 73
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["entry"], "extra", [], "any", false, false, false, 73) < 30)) {
                // line 74
                yield "                                <span>
                                <i class=\"ui user tie icon tooltip\" aria-hidden=\"true\"></i>
                                <span class=\"ui special popup\">";
                // line 76
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("Staff member"), "html", null, true);
                yield "</span>
                            </span>
                            ";
            } else {
                // line 79
                yield "                                <i class=\"ui icon\">&nbsp;</i>
                            ";
            }
            // line 81
            yield "                            ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["entry"], "name", [], "any", false, false, false, 81));
            yield "
                        </td>
                        <td data-col-label=\"";
            // line 83
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("Priority"), "html", null, true);
            yield "\">
                            ";
            // line 84
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["entry"], "extra", [], "any", false, false, false, 84), "html", null, true);
            yield "
                        </td>
                        <td class=\"center actions_row\">
                            <a
                                    href=\"";
            // line 88
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("editStatus", ["id" => $context["eid"]]), "html", null, true);
            yield "\"
                                    class=\"action single-edit\"
                            >
                                <i class=\"ui edit icon tooltip\" aria-hidden=\"true\"></i>
                                <span class=\"ui special popup\">";
            // line 92
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::replace($this->env->getFunction('_T')->getCallable()("Edit '%s' field"), ["%s" => $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["entry"], "name", [], "any", false, false, false, 92))]), "html", null, true);
            yield "</span>
                            </a>
                            <a
                                    href=\"";
            // line 95
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("removeStatus", ["id" => $context["eid"]]), "html", null, true);
            yield "\"
                                    class=\"delete\"
                            >
                                <i class=\"ui trash red icon tooltip\" aria-hidden=\"true\"></i>
                                <span class=\"ui special popup\">";
            // line 99
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::replace($this->env->getFunction('_T')->getCallable()("Delete '%s' field"), ["%s" => $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["entry"], "name", [], "any", false, false, false, 99))]), "html", null, true);
            yield "</span>
                            </a>
                        </td>
                    </tr>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['eid'], $context['entry'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 104
        yield "                </tbody>
            </table>
        </div>

        ";
        // line 108
        yield from         $this->loadTemplate("components/forms/csrf.html.twig", "pages/status_list.html.twig", 108)->unwrap()->yield($context);
        // line 109
        yield "    </form>
";
        return; yield '';
    }

    // line 112
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 113
        yield "    <script type=\"text/javascript\">
        \$(function() {
            ";
        // line 115
        $context["modal_onapprove"] = "
                \$('.modal-form form #redirect_uri').val(window.location.href);
                \$('.modal-form form').submit();
            ";
        // line 119
        yield "            ";
        $context["modal_title_twig"] = $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("Edit status"), "js");
        // line 120
        yield "            ";
        yield from         $this->loadTemplate("elements/js/modal_action.js.twig", "pages/status_list.html.twig", 120)->unwrap()->yield(CoreExtension::merge($context, ["selector" => ".single-edit", "modal_title_twig" =>         // line 122
($context["modal_title_twig"] ?? null), "modal_class" => "mini", "modal_onapprove" =>         // line 124
($context["modal_onapprove"] ?? null)]));
        // line 126
        yield "
            ";
        // line 127
        yield from         $this->loadTemplate("elements/js/removal.js.twig", "pages/status_list.html.twig", 127)->unwrap()->yield(CoreExtension::merge($context, ["single_action" => "true"]));
        // line 130
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
        return "pages/status_list.html.twig";
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
        return array (  247 => 130,  245 => 127,  242 => 126,  240 => 124,  239 => 122,  237 => 120,  234 => 119,  229 => 115,  225 => 113,  221 => 112,  215 => 109,  213 => 108,  207 => 104,  196 => 99,  189 => 95,  183 => 92,  176 => 88,  169 => 84,  165 => 83,  159 => 81,  155 => 79,  149 => 76,  145 => 74,  143 => 73,  139 => 72,  134 => 70,  130 => 68,  126 => 67,  117 => 61,  107 => 54,  100 => 50,  95 => 48,  89 => 45,  79 => 38,  75 => 37,  71 => 36,  60 => 28,  52 => 24,  48 => 23,  37 => 21,);
    }

    public function getSourceContext()
    {
        return new Source("", "pages/status_list.html.twig", "/var/www/galette/templates/default/pages/status_list.html.twig");
    }
}
