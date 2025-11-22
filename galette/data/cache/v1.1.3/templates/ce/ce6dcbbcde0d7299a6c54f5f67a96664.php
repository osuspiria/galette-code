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

/* elements/group.html.twig */
class __TwigTemplate_3038c8f38fb45dadc9427b666773c572 extends Template
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
        $context["can_edit"] = CoreExtension::getAttribute($this->env, $this->source, ($context["group"] ?? null), "canEdit", [($context["login"] ?? null)], "method", false, false, false, 21);
        // line 22
        yield "
";
        // line 23
        $context["managers"] = CoreExtension::getAttribute($this->env, $this->source, ($context["group"] ?? null), "getManagers", [], "method", false, false, false, 23);
        // line 24
        $context["members"] = CoreExtension::getAttribute($this->env, $this->source, ($context["group"] ?? null), "getMembers", [], "method", false, false, false, 24);
        // line 25
        yield "
<div class=\"ui stackable pointing inverted menu tabbed\">
    <div class=\"item header\">
        <div class=\"ui breadcrumb\">
            ";
        // line 29
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, ($context["group"] ?? null), "parents", [], "any", false, false, false, 29));
        foreach ($context['_seq'] as $context["_key"] => $context["parent"]) {
            // line 30
            yield "                <span class=\"section\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["parent"], "html", null, true);
            yield "</span>
                <i class=\"right angle icon divider\"></i>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['parent'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 33
        yield "            <span class=\"section active\">";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["group"] ?? null), "getName", [], "method", false, false, false, 33), "html", null, true);
        yield "</span>
        </div>
    </div>
    <a href=\"";
        // line 36
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("groups", ["id" => CoreExtension::getAttribute($this->env, $this->source, ($context["group"] ?? null), "getId", [], "method", false, false, false, 36)]), "html", null, true);
        yield "?tab=group_information\" class=\"item";
        yield (((($context["tab"] ?? null) == "group_information")) ? (" active") : (""));
        yield "\" data-tab=\"group_information\">";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("Information"), "html", null, true);
        yield "</a>
    <a href=\"";
        // line 37
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("groups", ["id" => CoreExtension::getAttribute($this->env, $this->source, ($context["group"] ?? null), "getId", [], "method", false, false, false, 37)]), "html", null, true);
        yield "?tab=group_managers\" class=\"item";
        yield (((($context["tab"] ?? null) == "group_managers")) ? (" active") : (""));
        yield "\" data-tab=\"group_managers\"><i class=\"user shield icon\" aria-hidden=\"true\"></i>";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("Managers"), "html", null, true);
        yield " (";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), ($context["managers"] ?? null)), "html", null, true);
        yield ")</a>
    <a href=\"";
        // line 38
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("groups", ["id" => CoreExtension::getAttribute($this->env, $this->source, ($context["group"] ?? null), "getId", [], "method", false, false, false, 38)]), "html", null, true);
        yield "?tab=group_members\" class=\"item";
        yield (((($context["tab"] ?? null) == "group_members")) ? (" active") : (""));
        yield "\" data-tab=\"group_members\"><i class=\"user icon\" aria-hidden=\"true\"></i>";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("Members"), "html", null, true);
        yield " (";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), ($context["members"] ?? null)), "html", null, true);
        yield ")</a>
</div>
<form class=\"ui form\" action=\"";
        // line 40
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("doEditGroup", ["id" => CoreExtension::getAttribute($this->env, $this->source, ($context["group"] ?? null), "getId", [], "method", false, false, false, 40)]), "html", null, true);
        yield "\" method=\"post\" enctype=\"multipart/form-data\" id=\"group_form\">
    <div class=\"ui";
        // line 41
        yield (((($context["tab"] ?? null) == "group_information")) ? (" active") : (""));
        yield " tab segment\" data-tab=\"group_information\">
        <div class=\"ui basic segment\">
            ";
        // line 43
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["group"] ?? null), "getId", [], "method", false, false, false, 43)) {
            // line 44
            yield "                <div class=\"inline field\">
                    <label>";
            // line 45
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("Creation date:"), "html", null, true);
            yield "</label>
                    <span>";
            // line 46
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["group"] ?? null), "getCreationDate", [], "method", false, false, false, 46), "html", null, true);
            yield "</span>
                </div>
            ";
        }
        // line 49
        yield "            <div class=\"inline field";
        if (($context["can_edit"] ?? null)) {
            yield " required";
        }
        yield "\">
                <label for=\"group_name\">";
        // line 50
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("Name:"), "html", null, true);
        yield "</label>
            ";
        // line 51
        if (($context["can_edit"] ?? null)) {
            // line 52
            yield "                <input type=\"text\" name=\"group_name\" id=\"group_name\" value=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["group"] ?? null), "getName", [], "method", false, false, false, 52), "html", null, true);
            yield "\" maxlength=\"250\" required/>
            ";
        } else {
            // line 54
            yield "                <span>";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["group"] ?? null), "getName", [], "method", false, false, false, 54), "html", null, true);
            yield "</span>
            ";
        }
        // line 56
        yield "            </div>

            ";
        // line 58
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["group"] ?? null), "getParentGroup", [], "method", false, false, false, 58)) {
            // line 59
            yield "                ";
            $context["pgroup"] = CoreExtension::getAttribute($this->env, $this->source, ($context["group"] ?? null), "getParentGroup", [], "method", false, false, false, 59);
            // line 60
            yield "            ";
        }
        // line 61
        yield "            <div class=\"inline field\">
                    <label for=\"parent_group\">";
        // line 62
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("Parent group:"), "html", null, true);
        yield "</label>
                ";
        // line 63
        if ((($context["can_edit"] ?? null) && (Twig\Extension\CoreExtension::length($this->env->getCharset(), ($context["parent_groups"] ?? null)) > 0))) {
            // line 64
            yield "                    ";
            if ((array_key_exists("pgroup", $context) &&  !CoreExtension::getAttribute($this->env, $this->source, ($context["login"] ?? null), "isGroupManager", [CoreExtension::getAttribute($this->env, $this->source, ($context["pgroup"] ?? null), "getId", [], "method", false, false, false, 64)], "method", false, false, false, 64))) {
                // line 65
                yield "                        ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["pgroup"] ?? null), "getName", [], "method", false, false, false, 65), "html", null, true);
                yield "
                        <input type=\"hidden\" name=\"parent_group\" value=\"";
                // line 66
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["pgroup"] ?? null), "getId", [], "method", false, false, false, 66), "html", null, true);
                yield "\"/>
                    ";
            } else {
                // line 68
                yield "                        <div class=\"ui search compact selection dropdown\">
                            <input type=\"hidden\" name=\"parent_group\" id=\"parent_group\" value=\"";
                // line 69
                if (array_key_exists("pgroup", $context)) {
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["pgroup"] ?? null), "getId", [], "method", false, false, false, 69), "html", null, true);
                }
                yield "\">
                            <i class=\"dropdown icon\" aria-hidden=\"true\"></i>
                            <div class=\"text\">";
                // line 71
                if (array_key_exists("pgroup", $context)) {
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["pgroup"] ?? null), "getName", [], "method", false, false, false, 71), "html", null, true);
                }
                yield "</div>
                            <div class=\"menu\">
                                <div class=\"item\" data-value=\"\">";
                // line 73
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("None"), "html", null, true);
                yield "</div>
                            ";
                // line 74
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(($context["parent_groups"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["g"]) {
                    // line 75
                    yield "                                <div class=\"item\" data-value=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["g"], "getId", [], "method", false, false, false, 75), "html", null, true);
                    yield "\">";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["g"], "getIndentName", [], "method", false, false, false, 75);
                    yield "</div>
                            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['g'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 77
                yield "                            </div>
                        </div>
                    ";
            }
            // line 80
            yield "                ";
        } else {
            // line 81
            yield "                    <span>
                    ";
            // line 82
            if (array_key_exists("pgroup", $context)) {
                // line 83
                yield "                        ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["pgroup"] ?? null), "getName", [], "method", false, false, false, 83), "html", null, true);
                yield "
                        <input type=\"hidden\" name=\"parent_group\" value=\"";
                // line 84
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["pgroup"] ?? null), "getId", [], "method", false, false, false, 84), "html", null, true);
                yield "\"/>
                    ";
            } else {
                // line 86
                yield "                        ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("None"), "html", null, true);
                yield "
                        <input type=\"hidden\" name=\"parent_group\" value=\"\"/>
                    ";
            }
            // line 89
            yield "                    </span>
                ";
        }
        // line 91
        yield "            </div>
        </div>
    </div>

    <div id=\"group_managers\" class=\"ui";
        // line 95
        yield (((($context["tab"] ?? null) == "group_managers")) ? (" active") : (""));
        yield " tab segment\" data-tab=\"group_managers\">
        <div class=\"ui basic segment\">
            ";
        // line 97
        if (($context["group"] ?? null)) {
            // line 98
            yield "                ";
            if ((CoreExtension::getAttribute($this->env, $this->source, ($context["login"] ?? null), "isAdmin", [], "method", false, false, false, 98) || CoreExtension::getAttribute($this->env, $this->source, ($context["login"] ?? null), "isStaff", [], "method", false, false, false, 98))) {
                // line 99
                yield "                <a href=\"#\" class=\"jsonly disabled ui labeled icon button\" id=\"btnmanagers_small\">
                    <i class=\"user shield icon\" aria-hidden=\"true\"></i>
                    ";
                // line 101
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("Manage managers"), "html", null, true);
                yield "
                </a>
                ";
            }
            // line 104
            yield "                ";
            yield from             $this->loadTemplate("elements/group_persons.html.twig", "elements/group.html.twig", 104)->unwrap()->yield(CoreExtension::merge($context, ["person_mode" => "managers", "persons" => ($context["managers"] ?? null)]));
            // line 105
            yield "            ";
        }
        // line 106
        yield "        </div>
    </div>

    <div id=\"group_members\" class=\"ui";
        // line 109
        yield (((($context["tab"] ?? null) == "group_members")) ? (" active") : (""));
        yield " tab segment\" data-tab=\"group_members\">
        <div class=\"ui basic segment\">
            ";
        // line 111
        if (($context["group"] ?? null)) {
            // line 112
            yield "                ";
            if ((CoreExtension::getAttribute($this->env, $this->source, ($context["login"] ?? null), "isAdmin", [], "method", false, false, false, 112) || CoreExtension::getAttribute($this->env, $this->source, ($context["login"] ?? null), "isStaff", [], "method", false, false, false, 112))) {
                // line 113
                yield "                <a href=\"#\" class=\"jsonly disabled ui labeled icon button\" id=\"btnusers_small\">
                    <i class=\"user icon\" aria-hidden=\"true\"></i>
                    ";
                // line 115
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("Manage members"), "html", null, true);
                yield "
                </a>
                ";
            }
            // line 118
            yield "                ";
            yield from             $this->loadTemplate("elements/group_persons.html.twig", "elements/group.html.twig", 118)->unwrap()->yield(CoreExtension::merge($context, ["person_mode" => "members", "persons" => ($context["members"] ?? null)]));
            // line 119
            yield "            ";
        }
        // line 120
        yield "        </div>
    </div>

    <div class=\"ui basic center aligned segment\">
        <div class=\"ui wrapping spaced buttons\">
            ";
        // line 125
        if (($context["can_edit"] ?? null)) {
            // line 126
            yield "            <button type=\"submit\" name=\"valid\" class=\"ui labeled icon primary button action\">
                <i class=\"save icon\" aria-hidden=\"true\"></i> ";
            // line 127
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("Save"), "html", null, true);
            yield "
            </button>
            <input type=\"hidden\" name=\"id_group\" id=\"id_group\" value=\"";
            // line 129
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["group"] ?? null), "getId", [], "method", false, false, false, 129), "html", null, true);
            yield "\"/>
            <input type=\"hidden\" name=\"tab\" id=\"tab\" value=\"";
            // line 130
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["tab"] ?? null), "html", null, true);
            yield "\"/>
            ";
            // line 131
            yield from             $this->loadTemplate("components/forms/csrf.html.twig", "elements/group.html.twig", 131)->unwrap()->yield($context);
            // line 132
            yield "            ";
        }
        // line 133
        yield "            ";
        if (($context["can_export"] ?? null)) {
            // line 134
            yield "                <a href=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("pdf_groups", ["id" => CoreExtension::getAttribute($this->env, $this->source, ($context["group"] ?? null), "getId", [], "method", false, false, false, 134)]), "html", null, true);
            yield "\" class=\"ui labeled icon button tooltip\" title=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("Current group (and attached people) as PDF"), "html", null, true);
            yield "\">
                    <i class=\"file pdf red icon\" aria-hidden=\"true\"></i>
                    ";
            // line 136
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("Group PDF"), "html", null, true);
            yield "
                </a>
            ";
        }
        // line 139
        yield "            ";
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["login"] ?? null), "isAdmin", [], "method", false, false, false, 139) || CoreExtension::getAttribute($this->env, $this->source, ($context["login"] ?? null), "isStaff", [], "method", false, false, false, 139))) {
            // line 140
            yield "                <a class=\"ui labeled icon button delete\" id=\"delete\" href=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("removeGroup", ["id" => CoreExtension::getAttribute($this->env, $this->source, ($context["group"] ?? null), "getId", [], "method", false, false, false, 140)]), "html", null, true);
            yield "\">
                    <i class=\"trash alt red icon\" aria-hidden=\"true\"></i>
                    ";
            // line 142
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("Delete"), "html", null, true);
            yield "
                </a>
            ";
        }
        // line 145
        yield "        </div>
    </div>
</form>
";
        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "elements/group.html.twig";
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
        return array (  381 => 145,  375 => 142,  369 => 140,  366 => 139,  360 => 136,  352 => 134,  349 => 133,  346 => 132,  344 => 131,  340 => 130,  336 => 129,  331 => 127,  328 => 126,  326 => 125,  319 => 120,  316 => 119,  313 => 118,  307 => 115,  303 => 113,  300 => 112,  298 => 111,  293 => 109,  288 => 106,  285 => 105,  282 => 104,  276 => 101,  272 => 99,  269 => 98,  267 => 97,  262 => 95,  256 => 91,  252 => 89,  245 => 86,  240 => 84,  235 => 83,  233 => 82,  230 => 81,  227 => 80,  222 => 77,  211 => 75,  207 => 74,  203 => 73,  196 => 71,  189 => 69,  186 => 68,  181 => 66,  176 => 65,  173 => 64,  171 => 63,  167 => 62,  164 => 61,  161 => 60,  158 => 59,  156 => 58,  152 => 56,  146 => 54,  140 => 52,  138 => 51,  134 => 50,  127 => 49,  121 => 46,  117 => 45,  114 => 44,  112 => 43,  107 => 41,  103 => 40,  92 => 38,  82 => 37,  74 => 36,  67 => 33,  57 => 30,  53 => 29,  47 => 25,  45 => 24,  43 => 23,  40 => 22,  38 => 21,);
    }

    public function getSourceContext()
    {
        return new Source("", "elements/group.html.twig", "/var/www/galette/templates/default/elements/group.html.twig");
    }
}
