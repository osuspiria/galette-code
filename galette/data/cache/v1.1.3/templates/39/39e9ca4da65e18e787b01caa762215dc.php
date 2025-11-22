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

/* pages/member_show.html.twig */
class __TwigTemplate_9031c8849c20ba9d61358b445bf58721 extends Template
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
        // line 23
        $macros["macros"] = $this->macros["macros"] = $this->loadTemplate("macros.twig", "pages/member_show.html.twig", 23)->unwrap();
        // line 21
        $this->parent = $this->loadTemplate("page.html.twig", "pages/member_show.html.twig", 21);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 25
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 26
        yield "<div class=\"ui stackable grid\">
    <div class=\"row\">
        <div class=\"sixteen wide tablet six wide computer five wide widescreen column order-2\">
            <div class=\"position-sticky\">
                <div class=\"ui basic clearing horizontally fitted segment\">

                    <div class=\"ui left floated basic fitted segment\">
                        ";
        // line 33
        yield from         $this->loadTemplate("elements/navigate.html.twig", "pages/member_show.html.twig", 33)->unwrap()->yield(CoreExtension::merge($context, ["mpath" => "member"]));
        // line 34
        yield "                    </div>

                    <div class=\"ui right floated basic fitted segment\">
                        <div class=\"ui primary small buttons\">
                ";
        // line 38
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["member"] ?? null), "canEdit", [($context["login"] ?? null)], "method", false, false, false, 38)) {
            // line 39
            yield "                            <a
                                href=\"";
            // line 40
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("editMember", ["id" => CoreExtension::getAttribute($this->env, $this->source, ($context["member"] ?? null), "id", [], "any", false, false, false, 40)]), "html", null, true);
            yield "\"
                                class=\"ui labeled icon button\"
                            >
                                <i class=\"user edit icon\" aria-hidden=\"true\"></i>
                                ";
            // line 44
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("Modification"), "html", null, true);
            yield "
                            </a>
                ";
        }
        // line 47
        yield "                            <div class=\"ui combo top right pointing simple dropdown icon button\">
                                <i class=\"dropdown icon\" aria-hidden=\"true\"></i>
                                <div class=\"menu\">
                ";
        // line 50
        if (((CoreExtension::getAttribute($this->env, $this->source, ($context["preferences"] ?? null), "pref_mail_method", [], "any", false, false, false, 50) != Twig\Extension\CoreExtension::constant("Galette\\Core\\GaletteMail::METHOD_DISABLED")) && (CoreExtension::getAttribute($this->env, $this->source, ($context["login"] ?? null), "isAdmin", [], "method", false, false, false, 50) || CoreExtension::getAttribute($this->env, $this->source, ($context["login"] ?? null), "isStaff", [], "method", false, false, false, 50)))) {
            // line 51
            yield "                                    <a
                                        href=\"";
            // line 52
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("retrieve-pass", ["id_adh" => CoreExtension::getAttribute($this->env, $this->source, ($context["member"] ?? null), "id", [], "any", false, false, false, 52)]), "html", null, true);
            yield "\"
                                        id=\"btn_lostpassword\"
                                        title=\"";
            // line 54
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("Send member a link to generate a new password, as if had used the 'lost password' functionality."), "html", null, true);
            yield "\"
                                            class=\"ui item\"
                                    >
                                        <i class=\"unlock icon\" aria-hidden=\"true\"></i>
                                        ";
            // line 58
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("New password"), "html", null, true);
            yield "
                                    </a>
                ";
        }
        // line 61
        yield "                ";
        if (((CoreExtension::getAttribute($this->env, $this->source, ($context["preferences"] ?? null), "pref_card_self", [], "any", false, false, false, 61) == 1) || (CoreExtension::getAttribute($this->env, $this->source, ($context["login"] ?? null), "isAdmin", [], "method", false, false, false, 61) || CoreExtension::getAttribute($this->env, $this->source, ($context["login"] ?? null), "isStaff", [], "method", false, false, false, 61)))) {
            // line 62
            yield "                                    <a
                                        href=\"";
            // line 63
            if (CoreExtension::getAttribute($this->env, $this->source, ($context["member"] ?? null), "isUp2Date", [], "method", false, false, false, 63)) {
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("pdf-members-cards", ["id_adh" => CoreExtension::getAttribute($this->env, $this->source, ($context["member"] ?? null), "id", [], "any", false, false, false, 63)]), "html", null, true);
            } else {
                yield "#";
            }
            yield "\"
                                        class=\"ui item";
            // line 64
            if ( !CoreExtension::getAttribute($this->env, $this->source, ($context["member"] ?? null), "isUp2Date", [], "method", false, false, false, 64)) {
                yield " disabled";
            }
            yield " tooltip\"
                                    >
                                        <i class=\"id badge icon\" aria-hidden=\"true\"></i>
                                        ";
            // line 67
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("Generate Member Card"), "html", null, true);
            yield "
                                    </a>
                                    <a
                                        href=\"";
            // line 70
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("adhesionForm", ["id_adh" => CoreExtension::getAttribute($this->env, $this->source, ($context["member"] ?? null), "id", [], "any", false, false, false, 70)]), "html", null, true);
            yield "\"
                                        class=\"ui item\"
                                    >
                                        <i class=\"id card icon\" aria-hidden=\"true\"></i>
                                        ";
            // line 74
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("Adhesion form"), "html", null, true);
            yield "
                                    </a>
                ";
        }
        // line 77
        yield "                ";
        if ((((CoreExtension::getAttribute($this->env, $this->source, ($context["login"] ?? null), "isAdmin", [], "method", false, false, false, 77) || CoreExtension::getAttribute($this->env, $this->source, ($context["login"] ?? null), "isStaff", [], "method", false, false, false, 77)) || (CoreExtension::getAttribute($this->env, $this->source, ($context["login"] ?? null), "id", [], "any", false, false, false, 77) == CoreExtension::getAttribute($this->env, $this->source, ($context["member"] ?? null), "id", [], "any", false, false, false, 77))) || (CoreExtension::getAttribute($this->env, $this->source, ($context["member"] ?? null), "hasParent", [], "method", false, false, false, 77) && (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["member"] ?? null), "parent", [], "any", false, false, false, 77), "id", [], "any", false, false, false, 77) == CoreExtension::getAttribute($this->env, $this->source, ($context["login"] ?? null), "id", [], "any", false, false, false, 77))))) {
            // line 78
            yield "                                    <a
                                        href=\"";
            // line 79
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("contributions", ["type" => "contributions", "option" => "member", "value" => CoreExtension::getAttribute($this->env, $this->source, ($context["member"] ?? null), "id", [], "any", false, false, false, 79)]), "html", null, true);
            yield "\"
                                        class=\"ui item\"
                                    >
                                        <i class=\"receipt icon\" aria-hidden=\"true\"></i>
                                        ";
            // line 83
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("View contributions"), "html", null, true);
            yield "
                                    </a>
                ";
        }
        // line 86
        yield "                ";
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["login"] ?? null), "isAdmin", [], "method", false, false, false, 86) || CoreExtension::getAttribute($this->env, $this->source, ($context["login"] ?? null), "isStaff", [], "method", false, false, false, 86))) {
            // line 87
            yield "                                    <a
                                        href=\"";
            // line 88
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("addContribution", ["type" => Twig\Extension\CoreExtension::constant("Galette\\Entity\\Contribution::TYPE_FEE")]), "html", null, true);
            yield "?id_adh=";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["member"] ?? null), "id", [], "any", false, false, false, 88), "html", null, true);
            yield "\"
                                        class=\"ui item\"
                                    >
                                        <i class=\"user check icon\" aria-hidden=\"true\"></i>
                                        ";
            // line 92
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("Add a membership fee"), "html", null, true);
            yield "
                                    </a>
                                    <a
                                        href=\"";
            // line 95
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("addContribution", ["type" => Twig\Extension\CoreExtension::constant("Galette\\Entity\\Contribution::TYPE_DONATION")]), "html", null, true);
            yield "?id_adh=";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["member"] ?? null), "id", [], "any", false, false, false, 95), "html", null, true);
            yield "\"
                                        class=\"ui item\"
                                    >
                                        <i class=\"gift icon\" aria-hidden=\"true\"></i>
                                        ";
            // line 99
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("Add a donation"), "html", null, true);
            yield "
                                    </a>
                    ";
            // line 101
            if ((CoreExtension::getAttribute($this->env, $this->source, ($context["login"] ?? null), "isAdmin", [], "method", false, false, false, 101) || CoreExtension::getAttribute($this->env, $this->source, ($context["login"] ?? null), "isStaff", [], "method", false, false, false, 101))) {
                // line 102
                yield "                                    <a
                                        href=\"";
                // line 103
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("duplicateMember", ["id_adh" => CoreExtension::getAttribute($this->env, $this->source, ($context["member"] ?? null), "id", [], "any", false, false, false, 103)]), "html", null, true);
                yield "\"
                                        title=\"";
                // line 104
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::replace($this->env->getFunction('_T')->getCallable()("Create a new member with %name information."), ["%name" => CoreExtension::getAttribute($this->env, $this->source, ($context["member"] ?? null), "sfullname", [], "any", false, false, false, 104)]), "html", null, true);
                yield "\"
                                        class=\"ui item\"
                                    >
                                        <i class=\"clone icon\" aria-hidden=\"true\"></i>
                                        ";
                // line 108
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("Duplicate"), "html", null, true);
                yield "
                                    </a>
                    ";
            }
            // line 111
            yield "
                    ";
            // line 112
            $context["actions"] = $this->env->getFunction('callstatic')->getCallable()("\\Galette\\Core\\Galette", "getDetailedActions", ($context["member"] ?? null));
            // line 113
            yield "                    ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["actions"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["action"]) {
                // line 114
                yield "                                ";
                yield CoreExtension::callMacro($macros["macros"], "macro_drawDetailedAction", [CoreExtension::getAttribute($this->env, $this->source, $context["action"], "label", [], "any", false, false, false, 114), (((CoreExtension::getAttribute($this->env, $this->source, $context["action"], "title", [], "any", true, true, false, 114) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, $context["action"], "title", [], "any", false, false, false, 114)))) ? (CoreExtension::getAttribute($this->env, $this->source, $context["action"], "title", [], "any", false, false, false, 114)) : ("")), CoreExtension::getAttribute($this->env, $this->source, $context["action"], "route", [], "any", false, false, false, 114), CoreExtension::getAttribute($this->env, $this->source, $context["action"], "icon", [], "any", false, false, false, 114)], 114, $context, $this->getSourceContext());
                yield "
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['action'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 116
            yield "                ";
        }
        // line 117
        yield "                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            ";
        // line 123
        yield from         $this->loadTemplate("elements/member_card.html.twig", "pages/member_show.html.twig", 123)->unwrap()->yield($context);
        // line 124
        yield "
        ";
        // line 125
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["member"] ?? null), "hasParent", [], "method", false, false, false, 125) || CoreExtension::getAttribute($this->env, $this->source, ($context["member"] ?? null), "hasChildren", [], "method", false, false, false, 125))) {
            // line 126
            yield "                <div class=\"ui basic fitted segment\">
                    <div class=\"ui styled fluid accordion row\">
                        <div class=\"active title\">
                            <i class=\"jsonly hidden icon dropdown\" aria-hidden=\"true\"></i>
                            ";
            // line 130
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("Family"), "html", null, true);
            yield "
                        </div>
                        <div class=\"active content field\">
                            <table class=\"ui very basic striped collapsing stackable padded table\">
                ";
            // line 134
            if (CoreExtension::getAttribute($this->env, $this->source, ($context["member"] ?? null), "hasParent", [], "method", false, false, false, 134)) {
                // line 135
                yield "                                <tr>
                                    <th>";
                // line 136
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("Attached to:"), "html", null, true);
                yield "</th>
                                    <td><a href=\"";
                // line 137
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("member", ["id" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["member"] ?? null), "parent", [], "any", false, false, false, 137), "id", [], "any", false, false, false, 137)]), "html", null, true);
                yield "\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["member"] ?? null), "parent", [], "any", false, false, false, 137), "sfullname", [], "any", false, false, false, 137), "html", null, true);
                yield "</a></td>
                                </tr>
                ";
            }
            // line 140
            yield "                ";
            if (CoreExtension::getAttribute($this->env, $this->source, ($context["member"] ?? null), "hasChildren", [], "method", false, false, false, 140)) {
                // line 141
                yield "                                <tr>
                                    <th>";
                // line 142
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("Parent of:"), "html", null, true);
                yield "</th>
                                    <td>
                    ";
                // line 144
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, ($context["member"] ?? null), "children", [], "any", false, false, false, 144));
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
                foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                    // line 145
                    yield "                                        <a href=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("member", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["child"], "id", [], "any", false, false, false, 145)]), "html", null, true);
                    yield "\">";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["child"], "sfullname", [], "any", false, false, false, 145), "html", null, true);
                    yield "</a>";
                    if ( !CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "last", [], "any", false, false, false, 145)) {
                        yield ", ";
                    }
                    // line 146
                    yield "                    ";
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
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 147
                yield "                                    </td>
                                </tr>
                ";
            }
            // line 150
            yield "                            </table>
                        </div>
                    </div>
                </div>
        ";
        }
        // line 155
        yield "            </div>
        </div>

        <div class=\"sixteen wide tablet ten wide computer eleven wide widescreen column\">

";
        // line 160
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["display_elements"] ?? null));
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
        foreach ($context['_seq'] as $context["_key"] => $context["display_element"]) {
            // line 161
            yield "    ";
            $context["elements"] = CoreExtension::getAttribute($this->env, $this->source, $context["display_element"], "elements", [], "any", false, false, false, 161);
            // line 162
            yield "            <div class=\"fieldset-";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["display_element"], "id", [], "any", false, false, false, 162), "html", null, true);
            yield " ui basic fitted segment\">
                <div class=\"ui styled fluid accordion row\">
                    <div class=\"active title\">
                        <i class=\"jsonly displaynone icon dropdown\" aria-hidden=\"true\"></i>
                        ";
            // line 166
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()(CoreExtension::getAttribute($this->env, $this->source, $context["display_element"], "label", [], "any", false, false, false, 166)), "html", null, true);
            yield "
                    </div>
                    <div class=\"active content field\">
                        <table class=\"ui very basic striped stackable padded table\">
    ";
            // line 170
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["elements"] ?? null));
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
            foreach ($context['_seq'] as $context["_key"] => $context["element"]) {
                // line 171
                yield "                ";
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["element"], "field_id", [], "any", false, false, false, 171) == "parent_id")) {
                    // line 172
                    yield "                    {continue}
                ";
                }
                // line 174
                yield "
                ";
                // line 175
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["element"], "field_id", [], "any", false, false, false, 175) == "nom_adh")) {
                    // line 176
                    yield "                    ";
                    $context["value"] = CoreExtension::getAttribute($this->env, $this->source, ($context["member"] ?? null), "sfullname", [], "any", false, false, false, 176);
                    // line 177
                    yield "                ";
                } elseif ((CoreExtension::getAttribute($this->env, $this->source, $context["element"], "field_id", [], "any", false, false, false, 177) == "pref_lang")) {
                    // line 178
                    yield "                    ";
                    $context["value"] = ($context["pref_lang"] ?? null);
                    // line 179
                    yield "                ";
                } elseif ((CoreExtension::getAttribute($this->env, $this->source, $context["element"], "field_id", [], "any", false, false, false, 179) == "adresse_adh")) {
                    // line 180
                    yield "                    ";
                    $context["value"] = Twig\Extension\CoreExtension::nl2br($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["member"] ?? null), "saddress", [], "any", false, false, false, 180)));
                    // line 181
                    yield "                ";
                } elseif ((CoreExtension::getAttribute($this->env, $this->source, $context["element"], "field_id", [], "any", false, false, false, 181) == "bool_display_info")) {
                    // line 182
                    yield "                    ";
                    $context["value"] = CoreExtension::getAttribute($this->env, $this->source, ($context["member"] ?? null), "sappears_in_list", [], "any", false, false, false, 182);
                    // line 183
                    yield "                ";
                } elseif ((CoreExtension::getAttribute($this->env, $this->source, $context["element"], "field_id", [], "any", false, false, false, 183) == "activite_adh")) {
                    // line 184
                    yield "                    ";
                    $context["value"] = CoreExtension::getAttribute($this->env, $this->source, ($context["member"] ?? null), "sactive", [], "any", false, false, false, 184);
                    // line 185
                    yield "                ";
                } elseif ((CoreExtension::getAttribute($this->env, $this->source, $context["element"], "field_id", [], "any", false, false, false, 185) == "id_statut")) {
                    // line 186
                    yield "                    ";
                    $context["value"] = CoreExtension::getAttribute($this->env, $this->source, ($context["member"] ?? null), "sstatus", [], "any", false, false, false, 186);
                    // line 187
                    yield "                ";
                } elseif ((CoreExtension::getAttribute($this->env, $this->source, $context["element"], "field_id", [], "any", false, false, false, 187) == "bool_admin_adh")) {
                    // line 188
                    yield "                    ";
                    $context["value"] = CoreExtension::getAttribute($this->env, $this->source, ($context["member"] ?? null), "sadmin", [], "any", false, false, false, 188);
                    // line 189
                    yield "                ";
                } elseif ((CoreExtension::getAttribute($this->env, $this->source, $context["element"], "field_id", [], "any", false, false, false, 189) == "bool_exempt_adh")) {
                    // line 190
                    yield "                    ";
                    $context["value"] = CoreExtension::getAttribute($this->env, $this->source, ($context["member"] ?? null), "sdue_free", [], "any", false, false, false, 190);
                    // line 191
                    yield "                ";
                } elseif ((CoreExtension::getAttribute($this->env, $this->source, $context["element"], "field_id", [], "any", false, false, false, 191) == "info_adh")) {
                    // line 192
                    yield "                    ";
                    $context["value"] = Twig\Extension\CoreExtension::nl2br($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["member"] ?? null), "others_infos_admin", [], "any", false, false, false, 192)));
                    // line 193
                    yield "                ";
                } elseif ((CoreExtension::getAttribute($this->env, $this->source, $context["element"], "field_id", [], "any", false, false, false, 193) == "info_public_adh")) {
                    // line 194
                    yield "                    ";
                    $context["value"] = Twig\Extension\CoreExtension::nl2br($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["member"] ?? null), "others_infos", [], "any", false, false, false, 194)));
                    // line 195
                    yield "                ";
                } else {
                    // line 196
                    yield "                    ";
                    $context["propname"] = CoreExtension::getAttribute($this->env, $this->source, $context["element"], "propname", [], "any", false, false, false, 196);
                    // line 197
                    yield "                    ";
                    $context["propvalue"] = CoreExtension::getAttribute($this->env, $this->source, ($context["member"] ?? null), ($context["propname"] ?? null), [], "any", false, false, false, 197);
                    // line 198
                    yield "                    ";
                    $context["value"] = $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["propvalue"] ?? null));
                    // line 199
                    yield "                ";
                }
                // line 200
                yield "                ";
                if (((CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "first", [], "any", false, false, false, 200) && CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "parent", [], "any", false, false, false, 200), "loop", [], "any", false, false, false, 200), "last", [], "any", false, false, false, 200)) && ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, ($context["member"] ?? null), "getGroups", [], "method", false, false, false, 200)) != 0) || (Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, ($context["member"] ?? null), "getManagedGroups", [], "method", false, false, false, 200)) != 0)))) {
                    // line 201
                    yield "                            <tr>
                                <th class=\"three wide column\">";
                    // line 202
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("Groups:"), "html", null, true);
                    yield "</th>
                                <td>
                                    <div class=\"ui large labels\">
            ";
                    // line 205
                    $context['_parent'] = $context;
                    $context['_seq'] = CoreExtension::ensureTraversable(($context["groups"] ?? null));
                    foreach ($context['_seq'] as $context["kgroup"] => $context["group"]) {
                        // line 206
                        yield "                ";
                        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["member"] ?? null), "isGroupMember", [$context["group"]], "method", false, false, false, 206) || CoreExtension::getAttribute($this->env, $this->source, ($context["member"] ?? null), "isGroupManager", [$context["group"]], "method", false, false, false, 206))) {
                            // line 207
                            yield "                                        <a href=\"";
                            if (CoreExtension::getAttribute($this->env, $this->source, ($context["login"] ?? null), "isGroupManager", [$context["kgroup"]], "method", false, false, false, 207)) {
                                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("groups", ["id" => $context["kgroup"]]), "html", null, true);
                            } else {
                                yield "#";
                            }
                            yield "\" class=\"ui label";
                            if ( !CoreExtension::getAttribute($this->env, $this->source, ($context["login"] ?? null), "isGroupManager", [$context["kgroup"]], "method", false, false, false, 207)) {
                                yield " disabled notmanaged";
                            }
                            yield "\">
                    ";
                            // line 208
                            if (CoreExtension::getAttribute($this->env, $this->source, ($context["member"] ?? null), "isGroupMember", [$context["group"]], "method", false, false, false, 208)) {
                                // line 209
                                yield "                                            <i class=\"ui tag icon tooltip\" title=\"";
                                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("Member of group"), "html", null, true);
                                yield "\" aria-hidden=\"true\"></i>
                    ";
                            }
                            // line 211
                            yield "                    ";
                            if (CoreExtension::getAttribute($this->env, $this->source, ($context["member"] ?? null), "isGroupManager", [$context["group"]], "method", false, false, false, 211)) {
                                // line 212
                                yield "                                            <i class=\"ui shield icon tooltip\" title=\"";
                                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("Group manager"), "html", null, true);
                                yield "\" aria-hidden=\"true\"></i>
                    ";
                            }
                            // line 214
                            yield "                                            ";
                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["group"], "html", null, true);
                            yield "
                                        </a>
                ";
                        }
                        // line 217
                        yield "            ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['kgroup'], $context['group'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 218
                    yield "                                    </div>
                                </td>
                            </tr>
                ";
                }
                // line 222
                yield "                            <tr>
                                <th class=\"three wide column\">";
                // line 223
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["element"], "label", [], "any", false, false, false, 223), "html", null, true);
                yield "</th>
                                <td>
                ";
                // line 225
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["element"], "field_id", [], "any", false, false, false, 225) == "nom_adh")) {
                    // line 226
                    yield "                    ";
                    if (CoreExtension::getAttribute($this->env, $this->source, ($context["member"] ?? null), "isCompany", [], "method", false, false, false, 226)) {
                        // line 227
                        yield "                                    <i class=\"ui industry icon\" aria-hidden=\"true\"></i>
                    ";
                    } elseif (CoreExtension::getAttribute($this->env, $this->source,                     // line 228
($context["member"] ?? null), "isMan", [], "method", false, false, false, 228)) {
                        // line 229
                        yield "                                    <i class=\"ui mars icon\" aria-hidden=\"true\"></i>
                    ";
                    } elseif (CoreExtension::getAttribute($this->env, $this->source,                     // line 230
($context["member"] ?? null), "isWoman", [], "method", false, false, false, 230)) {
                        // line 231
                        yield "                                    <i class=\"ui venus icon\" aria-hidden=\"true\"></i>
                    ";
                    }
                    // line 233
                    yield "                ";
                }
                // line 234
                yield "                ";
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["element"], "field_id", [], "any", false, false, false, 234) == "email_adh")) {
                    // line 235
                    yield "                                        <a href=\"mailto:";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["value"] ?? null), "html", null, true);
                    yield "\">";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["value"] ?? null), "html", null, true);
                    yield "</a>
                ";
                } elseif (((CoreExtension::getAttribute($this->env, $this->source,                 // line 236
$context["element"], "field_id", [], "any", false, false, false, 236) == "tel_adh") || (CoreExtension::getAttribute($this->env, $this->source, $context["element"], "field_id", [], "any", false, false, false, 236) == "gsm_adh"))) {
                    // line 237
                    yield "                                        <a href=\"tel:";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["value"] ?? null), "html", null, true);
                    yield "\">";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["value"] ?? null), "html", null, true);
                    yield "</a>
                ";
                } elseif ((CoreExtension::getAttribute($this->env, $this->source,                 // line 238
$context["element"], "field_id", [], "any", false, false, false, 238) == "ddn_adh")) {
                    // line 239
                    yield "                                ";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["value"] ?? null), "html", null, true);
                    yield " ";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["member"] ?? null), "getAge", [], "method", false, false, false, 239), "html", null, true);
                    yield "
                ";
                } else {
                    // line 241
                    yield "                                ";
                    yield ($context["value"] ?? null);
                    yield "
                ";
                }
                // line 243
                yield "                                </td>
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
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['element'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 246
            yield "                        </table>
                    </div>
                </div>
            </div>
    ";
            // line 251
            yield "    ";
            if (((CoreExtension::getAttribute($this->env, $this->source, $context["display_element"], "id", [], "any", false, false, false, 251) == "3") && (CoreExtension::getAttribute($this->env, $this->source, ($context["preferences"] ?? null), "pref_disable_members_socials", [], "any", false, false, false, 251) != 1))) {
                // line 252
                yield "            ";
                yield from                 $this->loadTemplate("elements/display_socials.html.twig", "pages/member_show.html.twig", 252)->unwrap()->yield(CoreExtension::merge($context, ["socials" => CoreExtension::getAttribute($this->env, $this->source, ($context["member"] ?? null), "socials", [], "any", false, false, false, 252)]));
                // line 253
                yield "    ";
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['display_element'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 255
        yield "
            ";
        // line 257
        yield "            ";
        yield from         $this->loadTemplate("elements/display_dynamic_fields.html.twig", "pages/member_show.html.twig", 257)->unwrap()->yield(CoreExtension::merge($context, ["object" => ($context["member"] ?? null)]));
        // line 258
        yield "        </div>
    </div>
</div>

";
        return; yield '';
    }

    // line 264
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 265
        yield "    ";
        if (((CoreExtension::getAttribute($this->env, $this->source, ($context["login"] ?? null), "isAdmin", [], "method", false, false, false, 265) || CoreExtension::getAttribute($this->env, $this->source, ($context["login"] ?? null), "isStaff", [], "method", false, false, false, 265)) || (CoreExtension::getAttribute($this->env, $this->source, ($context["login"] ?? null), "login", [], "any", false, false, false, 265) == CoreExtension::getAttribute($this->env, $this->source, ($context["member"] ?? null), "login", [], "any", false, false, false, 265)))) {
            // line 266
            yield "    <script type=\"text/javascript\">
        \$(function() {
            ";
            // line 268
            yield from             $this->loadTemplate("elements/js/photo_dnd.js.twig", "pages/member_show.html.twig", 268)->unwrap()->yield($context);
            // line 269
            yield "
            \$('.notmanaged').click(function(){
                ";
            // line 271
            yield from             $this->loadTemplate("elements/js/modal.js.twig", "pages/member_show.html.twig", 271)->unwrap()->yield(CoreExtension::merge($context, ["modal_title_twig" => $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("Not managed group"), "js"), "modal_content_twig" => $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("You are not part of managers for the requested group."), "js"), "modal_class" => "tiny", "modal_deny_only" => true, "modal_cancel_text" => $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("Close"), "js"), "modal_classname" => "redalert"]));
            // line 279
            yield "                return false;
            });
        });
    </script>
    ";
        }
        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "pages/member_show.html.twig";
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
        return array (  718 => 279,  716 => 271,  712 => 269,  710 => 268,  706 => 266,  703 => 265,  699 => 264,  690 => 258,  687 => 257,  684 => 255,  669 => 253,  666 => 252,  663 => 251,  657 => 246,  641 => 243,  635 => 241,  627 => 239,  625 => 238,  618 => 237,  616 => 236,  609 => 235,  606 => 234,  603 => 233,  599 => 231,  597 => 230,  594 => 229,  592 => 228,  589 => 227,  586 => 226,  584 => 225,  579 => 223,  576 => 222,  570 => 218,  564 => 217,  557 => 214,  551 => 212,  548 => 211,  542 => 209,  540 => 208,  527 => 207,  524 => 206,  520 => 205,  514 => 202,  511 => 201,  508 => 200,  505 => 199,  502 => 198,  499 => 197,  496 => 196,  493 => 195,  490 => 194,  487 => 193,  484 => 192,  481 => 191,  478 => 190,  475 => 189,  472 => 188,  469 => 187,  466 => 186,  463 => 185,  460 => 184,  457 => 183,  454 => 182,  451 => 181,  448 => 180,  445 => 179,  442 => 178,  439 => 177,  436 => 176,  434 => 175,  431 => 174,  427 => 172,  424 => 171,  407 => 170,  400 => 166,  392 => 162,  389 => 161,  372 => 160,  365 => 155,  358 => 150,  353 => 147,  339 => 146,  330 => 145,  313 => 144,  308 => 142,  305 => 141,  302 => 140,  294 => 137,  290 => 136,  287 => 135,  285 => 134,  278 => 130,  272 => 126,  270 => 125,  267 => 124,  265 => 123,  257 => 117,  254 => 116,  245 => 114,  240 => 113,  238 => 112,  235 => 111,  229 => 108,  222 => 104,  218 => 103,  215 => 102,  213 => 101,  208 => 99,  199 => 95,  193 => 92,  184 => 88,  181 => 87,  178 => 86,  172 => 83,  165 => 79,  162 => 78,  159 => 77,  153 => 74,  146 => 70,  140 => 67,  132 => 64,  124 => 63,  121 => 62,  118 => 61,  112 => 58,  105 => 54,  100 => 52,  97 => 51,  95 => 50,  90 => 47,  84 => 44,  77 => 40,  74 => 39,  72 => 38,  66 => 34,  64 => 33,  55 => 26,  51 => 25,  46 => 21,  44 => 23,  37 => 21,);
    }

    public function getSourceContext()
    {
        return new Source("", "pages/member_show.html.twig", "/var/www/galette/templates/default/pages/member_show.html.twig");
    }
}
