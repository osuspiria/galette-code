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

/* elements/group_persons.html.twig */
class __TwigTemplate_b89a8c8605626d765966bc767c9aee50 extends Template
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
        yield "                <div class=\"ui basic fitted segment loader_selector\">
                    <table class=\"listing ui celled striped table\">
                        <thead>
                            <tr>
                                <th class=\"left\">
                                    ";
        // line 26
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("Name"), "html", null, true);
        yield "
                                </th>
                                <th class=\"left\">
                                    ";
        // line 29
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("Nickname"), "html", null, true);
        yield "
                                </th>
                                ";
        // line 31
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["login"] ?? null), "isSuperAdmin", [], "method", false, false, false, 31)) {
            // line 32
            yield "                                <th>&nbsp;</th>
                                ";
        }
        // line 34
        yield "                            </tr>
                        </thead>
                        <tbody>
";
        // line 37
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["persons"] ?? null));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["person"]) {
            // line 38
            yield "                            <tr>
                                <td class=\"username_row\">
                                <input type=\"hidden\" name=\"";
            // line 40
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["person_mode"] ?? null), "html", null, true);
            yield "[]\" value=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["person"], "id", [], "any", false, false, false, 40), "html", null, true);
            yield "\"/>
                                ";
            // line 41
            if (CoreExtension::getAttribute($this->env, $this->source, $context["person"], "isCompany", [], "method", false, false, false, 41)) {
                // line 42
                yield "                                    <span>
                                        <i class=\"ui building outline icon tooltip\" aria-hidden=\"true\"></i>
                                        <span class=\"ui special popup\">";
                // line 44
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("Company"), "html", null, true);
                yield "</span>
                                    </span>
                                ";
            } elseif (CoreExtension::getAttribute($this->env, $this->source,             // line 46
$context["person"], "isMan", [], "method", false, false, false, 46)) {
                // line 47
                yield "                                    <span>
                                        <i class=\"ui male icon tooltip\" aria-hidden=\"true\"></i>
                                        <span class=\"ui special popup\">";
                // line 49
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("Man"), "html", null, true);
                yield "</span>
                                    </span>
                                ";
            } elseif (CoreExtension::getAttribute($this->env, $this->source,             // line 51
$context["person"], "isWoman", [], "method", false, false, false, 51)) {
                // line 52
                yield "                                    <span>
                                        <i class=\"ui female icon tooltip\" aria-hidden=\"true\"></i>
                                        <span class=\"ui special popup\">";
                // line 54
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("Woman"), "html", null, true);
                yield "</span>
                                    </span>
                                ";
            } else {
                // line 57
                yield "                                    <i class=\"ui icon\" aria-hidden=\"true\"></i>
                                ";
            }
            // line 59
            yield "                                ";
            if (CoreExtension::getAttribute($this->env, $this->source, $context["person"], "isAdmin", [], "method", false, false, false, 59)) {
                // line 60
                yield "                                    <span>
                                        <i class=\"ui user shield red icon tooltip\" aria-hidden=\"true\"></i>
                                        <span class=\"ui special popup\">";
                // line 62
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("Administrator"), "html", null, true);
                yield "</span>
                                    </span>
                                ";
            } elseif (CoreExtension::getAttribute($this->env, $this->source,             // line 64
$context["person"], "isStaff", [], "method", false, false, false, 64)) {
                // line 65
                yield "                                    <span>
                                        <i class=\"ui user tie orange icon tooltip\" aria-hidden=\"true\"></i>
                                        <span class=\"ui special popup\">";
                // line 67
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("Staff member"), "html", null, true);
                yield "</span>
                                    </span>
                                ";
            } elseif (CoreExtension::getAttribute($this->env, $this->source,             // line 69
$context["person"], "getManagedGroups", [], "method", false, false, false, 69)) {
                // line 70
                yield "                                    <span>
                                        <i class=\"ui users cog orange icon tooltip\" aria-hidden=\"true\"></i>
                                        <span class=\"ui special popup\">";
                // line 72
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("Group manager"), "html", null, true);
                yield "</span>
                                    </span>
                                ";
            } else {
                // line 75
                yield "                                    <i class=\"ui icon\" aria-hidden=\"true\"></i>
                                ";
            }
            // line 77
            yield "                                <a href=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("member", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["person"], "id", [], "any", false, false, false, 77)]), "html", null, true);
            yield "\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["person"], "sfullname", [], "any", false, false, false, 77), "html", null, true);
            yield "</a>
                                </td>
                                <td class=\"\">";
            // line 79
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["person"], "nickname", [], "any", false, false, false, 79));
            yield "</td>
    ";
            // line 80
            if (CoreExtension::getAttribute($this->env, $this->source, ($context["login"] ?? null), "isSuperAdmin", [], "method", false, false, false, 80)) {
                // line 81
                yield "                                <td class=\"actions_row\">
                                    <a
                                            href=\"";
                // line 83
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("impersonate", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["person"], "id", [], "any", false, false, false, 83)]), "html", null, true);
                yield "\"
                                    >
                                        <i class=\"ui user secret grey icon tooltip\" aria-hidden=\"true\"></i>
                                        <span class=\"ui special popup\">";
                // line 86
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::replace($this->env->getFunction('_T')->getCallable()("Log in in as %membername"), ["%membername" => CoreExtension::getAttribute($this->env, $this->source, $context["person"], "sname", [], "any", false, false, false, 86)]), "html", null, true);
                yield "</span>
                                    </a>
                                </td>
                            </tr>
    ";
            }
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 92
            yield "                            <tr>
                                <td colspan=\"";
            // line 93
            if (CoreExtension::getAttribute($this->env, $this->source, ($context["login"] ?? null), "isSuperAdmin", [], "method", false, false, false, 93)) {
                yield "3";
            } else {
                yield "2";
            }
            yield "\">
    ";
            // line 94
            if ((($context["person_mode"] ?? null) == "members")) {
                // line 95
                yield "                                    ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("No member attached"), "html", null, true);
                yield "
    ";
            } else {
                // line 97
                yield "                                    ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("No manager attached"), "html", null, true);
                yield "
    ";
            }
            // line 99
            yield "                                </td>
                            </tr>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['person'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 102
        yield "                        </tbody>
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
        return "elements/group_persons.html.twig";
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
        return array (  227 => 102,  219 => 99,  213 => 97,  207 => 95,  205 => 94,  197 => 93,  194 => 92,  183 => 86,  177 => 83,  173 => 81,  171 => 80,  167 => 79,  159 => 77,  155 => 75,  149 => 72,  145 => 70,  143 => 69,  138 => 67,  134 => 65,  132 => 64,  127 => 62,  123 => 60,  120 => 59,  116 => 57,  110 => 54,  106 => 52,  104 => 51,  99 => 49,  95 => 47,  93 => 46,  88 => 44,  84 => 42,  82 => 41,  76 => 40,  72 => 38,  67 => 37,  62 => 34,  58 => 32,  56 => 31,  51 => 29,  45 => 26,  38 => 21,);
    }

    public function getSourceContext()
    {
        return new Source("", "elements/group_persons.html.twig", "/var/www/galette/templates/default/elements/group_persons.html.twig");
    }
}
