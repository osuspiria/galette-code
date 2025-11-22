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

/* pages/contributions_types_list.html.twig */
class __TwigTemplate_4c469b8df114eb599c512520f940e6a1 extends Template
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
        $this->parent = $this->loadTemplate("page.html.twig", "pages/contributions_types_list.html.twig", 21);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 23
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 24
        yield "    <form action=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("doAddContributionType"), "html", null, true);
        yield "\" method=\"post\" class=\"tabbed ui form\">
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
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("Amount"), "html", null, true);
        yield "</th>
                    <th>";
        // line 32
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("Membership extension"), "html", null, true);
        yield "</th>
                    <th>";
        // line 33
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("Actions"), "html", null, true);
        yield "</th>
                </tr>
            </thead>
            <tfoot>
                <tr>
                    <td data-scope=\"row\">
                        <span class=\"visually-hidden\">
                            ";
        // line 40
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("New contribution type"), "html", null, true);
        yield "
                        </span>
                    </td>
                    <td class=\"left\" data-col-label=\"";
        // line 43
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("Name"), "html", null, true);
        yield "\">
                        <div class=\"required field\">
                            <label for=\"libelle_type_cotis\" class=\"visually-hidden\">";
        // line 45
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("Name"), "html", null, true);
        yield "</label>
                            <input size=\"40\" type=\"text\" name=\"libelle_type_cotis\" id=\"libelle_type_cotis\" required=\"required\"/>
                        </div>
                    </td>
                    <td class=\"left\" data-col-label=\"";
        // line 49
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("Amount"), "html", null, true);
        yield "\">
                        <div class=\"field\">
                            <label for=\"amount\" class=\"visually-hidden\">";
        // line 51
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("Amount"), "html", null, true);
        yield "</label>
                            <input size=\"5\" type=\"text\" name=\"amount\" id=\"amount\" />
                        </div>
                    </td>
                    <td class=\"left\" data-col-label=\"";
        // line 55
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("Membership extension"), "html", null, true);
        yield "\">
                        ";
        // line 56
        $context["cotisextensions"] = [Twig\Extension\CoreExtension::constant("Galette\\Entity\\ContributionsTypes::DEFAULT_TYPE") => $this->env->getFunction('_T')->getCallable()("Default"), Twig\Extension\CoreExtension::constant("Galette\\Entity\\ContributionsTypes::DONATION_TYPE") => $this->env->getFunction('_T')->getCallable()("No"), 1 => Twig\Extension\CoreExtension::sprintf($this->env->getFunction('_Tn')->getCallable()("%1\$s month", "%1\$s months", 1), 1)];
        // line 61
        yield "                        ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(range(2, 11));
        foreach ($context['_seq'] as $context["_key"] => $context["m"]) {
            // line 62
            yield "                            ";
            $context["cotisextensions"] = (($context["cotisextensions"] ?? null) + [$context["m"] => Twig\Extension\CoreExtension::sprintf($this->env->getFunction('_Tn')->getCallable()("%1\$s month", "%1\$s months", $context["m"]), $context["m"])]);
            // line 63
            yield "                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['m'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 64
        yield "                        ";
        yield from         $this->loadTemplate("components/forms/select.html.twig", "pages/contributions_types_list.html.twig", 64)->unwrap()->yield(CoreExtension::merge($context, ["id" => "cotis_extension", "value" => Twig\Extension\CoreExtension::constant("Galette\\Entity\\ContributionsTypes::DEFAULT_TYPE"), "values" =>         // line 67
($context["cotisextensions"] ?? null), "nolabel" => true]));
        // line 70
        yield "                    </td>
                    <td class=\"center actions_row\">
                        <input type=\"hidden\" name=\"new\" value=\"1\" />
                        <button type=\"submit\" name=\"valid\" class=\"ui labeled icon button\">
                            <i class=\"plus green icon\" aria-hidden=\"true\"></i>
                            ";
        // line 75
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("Add"), "html", null, true);
        yield "
                        </button>
                    </td>
                </tr>
            </tfoot>
            <tbody>
";
        // line 81
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["entries"] ?? null));
        foreach ($context['_seq'] as $context["eid"] => $context["entry"]) {
            // line 82
            yield "                <tr>
                    <td data-scope=\"id\" class=\"collapsing\">
                        ";
            // line 84
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["eid"], "html", null, true);
            yield "
                    </td>
                    <td class=\"left\" data-col-label=\"";
            // line 86
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("Name"), "html", null, true);
            yield "\">
                        ";
            // line 87
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["entry"], "name", [], "any", false, false, false, 87));
            yield "
                    </td>
                    <td data-col-label=\"";
            // line 89
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("Amount"), "html", null, true);
            yield "\">
                        ";
            // line 90
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["entry"], "amount", [], "any", false, false, false, 90), "html", null, true);
            yield "
                    </td>
                    <td data-col-label=\"";
            // line 92
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("Membership extension"), "html", null, true);
            yield "\">
    ";
            // line 93
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["entry"], "extra", [], "any", false, false, false, 93) ==  -1)) {
                // line 94
                yield "                        ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("Default"), "html", null, true);
                yield "
    ";
            } elseif ((CoreExtension::getAttribute($this->env, $this->source,             // line 95
$context["entry"], "extra", [], "any", false, false, false, 95) == 0)) {
                // line 96
                yield "                        ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("No"), "html", null, true);
                yield "
    ";
            } else {
                // line 98
                yield "                        ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::sprintf($this->env->getFunction('_Tn')->getCallable()("%1\$s month", "%1\$s months", CoreExtension::getAttribute($this->env, $this->source, $context["entry"], "extra", [], "any", false, false, false, 98)), CoreExtension::getAttribute($this->env, $this->source, $context["entry"], "extra", [], "any", false, false, false, 98)), "html", null, true);
                yield "
    ";
            }
            // line 100
            yield "                    </td>
                    <td class=\"center actions_row\">
                        <a
                            href=\"";
            // line 103
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("editContributionType", ["id" => $context["eid"]]), "html", null, true);
            yield "\"
                            class=\"action single-edit\"
                        >
                            <i class=\"ui edit icon tooltip\" aria-hidden=\"true\"></i>
                            <span class=\"ui special popup\">";
            // line 107
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::replace($this->env->getFunction('_T')->getCallable()("Edit '%s' field"), ["%s" => $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["entry"], "name", [], "any", false, false, false, 107))]), "html", null, true);
            yield "</span>
                        </a>
                        <a
                            href=\"";
            // line 110
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("removeContributionType", ["id" => $context["eid"]]), "html", null, true);
            yield "\"
                            class=\"delete\"
                        >
                            <i class=\"ui trash red icon tooltip\" aria-hidden=\"true\"></i>
                            <span class=\"ui special popup\">";
            // line 114
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::replace($this->env->getFunction('_T')->getCallable()("Delete '%s' field"), ["%s" => $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["entry"], "name", [], "any", false, false, false, 114))]), "html", null, true);
            yield "</span>
                        </a>
                    </td>
                </tr>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['eid'], $context['entry'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 119
        yield "            </tbody>
        </table>
    </div>
        ";
        // line 122
        yield from         $this->loadTemplate("components/forms/csrf.html.twig", "pages/contributions_types_list.html.twig", 122)->unwrap()->yield($context);
        // line 123
        yield "    </form>
";
        return; yield '';
    }

    // line 126
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 127
        yield "    <script type=\"text/javascript\">
        \$(function() {
            ";
        // line 129
        $context["modal_onapprove"] = "
                \$('.modal-form form #redirect_uri').val(window.location.href);
                \$('.modal-form form').submit();
            ";
        // line 133
        yield "            ";
        yield from         $this->loadTemplate("elements/js/modal_action.js.twig", "pages/contributions_types_list.html.twig", 133)->unwrap()->yield(CoreExtension::merge($context, ["selector" => ".single-edit", "modal_title_twig" => $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("Edit contribution type"), "js"), "modal_class" => "mini", "modal_onapprove" =>         // line 137
($context["modal_onapprove"] ?? null)]));
        // line 139
        yield "
            ";
        // line 140
        yield from         $this->loadTemplate("elements/js/removal.js.twig", "pages/contributions_types_list.html.twig", 140)->unwrap()->yield(CoreExtension::merge($context, ["single_action" => "true"]));
        // line 143
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
        return "pages/contributions_types_list.html.twig";
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
        return array (  281 => 143,  279 => 140,  276 => 139,  274 => 137,  272 => 133,  267 => 129,  263 => 127,  259 => 126,  253 => 123,  251 => 122,  246 => 119,  235 => 114,  228 => 110,  222 => 107,  215 => 103,  210 => 100,  204 => 98,  198 => 96,  196 => 95,  191 => 94,  189 => 93,  185 => 92,  180 => 90,  176 => 89,  171 => 87,  167 => 86,  162 => 84,  158 => 82,  154 => 81,  145 => 75,  138 => 70,  136 => 67,  134 => 64,  128 => 63,  125 => 62,  120 => 61,  118 => 56,  114 => 55,  107 => 51,  102 => 49,  95 => 45,  90 => 43,  84 => 40,  74 => 33,  70 => 32,  66 => 31,  62 => 30,  52 => 24,  48 => 23,  37 => 21,);
    }

    public function getSourceContext()
    {
        return new Source("", "pages/contributions_types_list.html.twig", "/var/www/galette/templates/default/pages/contributions_types_list.html.twig");
    }
}
