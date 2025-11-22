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

/* pages/member_form.html.twig */
class __TwigTemplate_2553f88c85f61145e64d4c0bd8c4cea4 extends Template
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
        return $this->loadTemplate(($context["parent_tpl"] ?? null), "pages/member_form.html.twig", 21);
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
        yield "<form action=\"";
        if (($context["self_adh"] ?? null)) {
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("storeselfmembers"), "html", null, true);
        } elseif ( !CoreExtension::getAttribute($this->env, $this->source, ($context["member"] ?? null), "id", [], "any", false, false, false, 24)) {
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("doAddMember"), "html", null, true);
        } else {
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("doEditMember", ["id" => CoreExtension::getAttribute($this->env, $this->source, ($context["member"] ?? null), "id", [], "any", false, false, false, 24)]), "html", null, true);
        }
        yield "\" method=\"post\" enctype=\"multipart/form-data\" id=\"form\" class=\"ui form";
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["member"] ?? null), "id", [], "any", false, false, false, 24)) {
            yield " edit-member";
        }
        yield "\">
    ";
        // line 25
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["member"] ?? null), "id", [], "any", false, false, false, 25) || (( !($context["self_adh"] ?? null) && CoreExtension::getAttribute($this->env, $this->source, ($context["members"] ?? null), "list", [], "any", true, true, false, 25)) && (Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, ($context["members"] ?? null), "list", [], "any", false, false, false, 25)) > 0)))) {
            // line 26
            yield "<div class=\"ui stackable grid\">
    <div class=\"row\">
        <div class=\"sixteen wide tablet six wide computer five wide widescreen column order-2\">
            <div class=\"position-sticky\">
        ";
            // line 30
            if (CoreExtension::getAttribute($this->env, $this->source, ($context["member"] ?? null), "id", [], "any", false, false, false, 30)) {
                // line 31
                yield "                <div class=\"ui basic clearing horizontally fitted segment\">

                    <div class=\"ui left floated basic fitted segment\">
                        ";
                // line 34
                yield from                 $this->loadTemplate("elements/navigate.html.twig", "pages/member_form.html.twig", 34)->unwrap()->yield(CoreExtension::merge($context, ["mpath" => "editMember"]));
                // line 35
                yield "                    </div>

                    <div class=\"ui right floated basic fitted segment\">
                        <div class=\"ui small spaced buttons\">
                    ";
                // line 39
                if (CoreExtension::getAttribute($this->env, $this->source, ($context["member"] ?? null), "id", [], "any", false, false, false, 39)) {
                    // line 40
                    yield "                            <button type=\"submit\" name=\"valid\" class=\"action ui labeled icon primary button\">
                                <i class=\"save icon\" aria-hidden=\"true\"></i> ";
                    // line 41
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("Save"), "html", null, true);
                    yield "
                            </button>
                    ";
                }
                // line 44
                yield "                            <a
                                href=\"";
                // line 45
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("member", ["id" => CoreExtension::getAttribute($this->env, $this->source, ($context["member"] ?? null), "id", [], "any", false, false, false, 45)]), "html", null, true);
                yield "\"
                                class=\"ui basic labeled icon button\"
                            >
                                <i class=\"eye outline icon\" aria-hidden=\"true\"></i>
                                ";
                // line 49
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("Display"), "html", null, true);
                yield "
                            </a>
                        </div>
                    </div>
                </div>
                ";
                // line 54
                yield from                 $this->loadTemplate("elements/member_card.html.twig", "pages/member_form.html.twig", 54)->unwrap()->yield($context);
                // line 55
                yield "        ";
            }
            // line 56
            yield "    ";
        }
        // line 57
        yield "
    ";
        // line 58
        if ((( !($context["self_adh"] ?? null) && CoreExtension::getAttribute($this->env, $this->source, ($context["members"] ?? null), "list", [], "any", true, true, false, 58)) && (Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, ($context["members"] ?? null), "list", [], "any", false, false, false, 58)) > 0))) {
            // line 59
            yield "                <div class=\"ui basic horizontally fitted segment\">
                    <div class=\"ui segment\">
        ";
            // line 61
            if ((CoreExtension::getAttribute($this->env, $this->source, ($context["member"] ?? null), "hasParent", [], "method", false, false, false, 61) &&  !CoreExtension::getAttribute($this->env, $this->source, ($context["member"] ?? null), "isDuplicate", [], "method", false, false, false, 61))) {
                // line 62
                yield "                        <div class=\"field\">
                            <div class=\"ui label\">
                                <i class=\"linkify icon\" aria-hidden=\"true\"></i>
                                ";
                // line 65
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("Attached to:"), "html", null, true);
                yield "
                            </div>
                            <div class=\"ui celled list\">
                                <a href=\"";
                // line 68
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("member", ["id" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["member"] ?? null), "parent", [], "any", false, false, false, 68), "id", [], "any", false, false, false, 68)]), "html", null, true);
                yield "\" class=\"item\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["member"] ?? null), "parent", [], "any", false, false, false, 68), "sfullname", [], "any", false, false, false, 68), "html", null, true);
                yield "</a>
                            </div>
            ";
                // line 70
                if ( !CoreExtension::getAttribute($this->env, $this->source, ($context["member"] ?? null), "id", [], "any", false, false, false, 70)) {
                    // line 71
                    yield "                            <input type=\"hidden\" name=\"parent_id\" value=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["member"] ?? null), "parent", [], "any", false, false, false, 71), "id", [], "any", false, false, false, 71), "html", null, true);
                    yield "\"/>
            ";
                }
                // line 73
                yield "                        </div>
            ";
                // line 74
                if ((CoreExtension::getAttribute($this->env, $this->source, ($context["login"] ?? null), "isAdmin", [], "method", false, false, false, 74) || (CoreExtension::getAttribute($this->env, $this->source, ($context["login"] ?? null), "isStaff", [], "method", false, false, false, 74) && ( !array_key_exists("addchild", $context) ||  !($context["addchild"] ?? null))))) {
                    // line 75
                    yield "                        <div class=\"field\">
                            <div class=\"ui toggle checkbox\">
                                <input type=\"checkbox\" name=\"detach_parent\" id=\"detach_parent\" value=\"1\"/>
                                <label for=\"detach_parent\">";
                    // line 78
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("Detach?"), "html", null, true);
                    yield "</label>
                            </div>
                        </div>
            ";
                }
                // line 82
                yield "        ";
            } elseif (((CoreExtension::getAttribute($this->env, $this->source, ($context["login"] ?? null), "isAdmin", [], "method", false, false, false, 82) || CoreExtension::getAttribute($this->env, $this->source, ($context["login"] ?? null), "isStaff", [], "method", false, false, false, 82)) &&  !CoreExtension::getAttribute($this->env, $this->source, ($context["member"] ?? null), "hasChildren", [], "method", false, false, false, 82))) {
                // line 83
                yield "                        <div class=\"field\">
                            <div id=\"attach-checkbox\" class=\"ui";
                // line 84
                if (CoreExtension::getAttribute($this->env, $this->source, ($context["member"] ?? null), "isDuplicate", [], "method", false, false, false, 84)) {
                    yield " checked";
                }
                yield " toggle checkbox\">
                                <input type=\"checkbox\" name=\"attach\" id=\"attach\" value=\"1\"";
                // line 85
                if (CoreExtension::getAttribute($this->env, $this->source, ($context["member"] ?? null), "isDuplicate", [], "method", false, false, false, 85)) {
                    yield " checked=\"checked\"";
                }
                yield "/>
                                <label for=\"attach\"><i class=\"linkify icon\" aria-hidden=\"true\"></i> ";
                // line 86
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("Attach member"), "html", null, true);
                yield "</label>
                            </div>
                        </div>
                        <span id=\"parent_id_elt\" class=\"\">
                            ";
                // line 90
                yield from                 $this->loadTemplate("components/forms/member_dropdown.html.twig", "pages/member_form.html.twig", 90)->unwrap()->yield(CoreExtension::merge($context, ["component_id" => "parent_id_elt", "id" => "parent_id", "label" => $this->env->getFunction('_T')->getCallable()("Parent member"), "value" => ((((CoreExtension::getAttribute($this->env, $this->source,                 // line 94
($context["member"] ?? null), "isDuplicate", [], "method", false, false, false, 94) && CoreExtension::getAttribute($this->env, $this->source, ($context["member"] ?? null), "parent", [], "any", true, true, false, 94)) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, ($context["member"] ?? null), "parent", [], "any", false, false, false, 94)))) ? (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["member"] ?? null), "parent", [], "any", false, false, false, 94), "id", [], "any", false, false, false, 94)) : ("")), "notag" => true]));
                // line 97
                yield "                        </span>
            ";
                // line 98
                if (CoreExtension::getAttribute($this->env, $this->source, ($context["member"] ?? null), "isDuplicate", [], "method", false, false, false, 98)) {
                    // line 99
                    yield "                        <input type=\"hidden\" name=\"duplicate\" value=\"1\" />
            ";
                }
                // line 101
                yield "        ";
            } elseif (CoreExtension::getAttribute($this->env, $this->source, ($context["member"] ?? null), "hasChildren", [], "method", false, false, false, 101)) {
                // line 102
                yield "                        <div class=\"field\">
                            <div class=\"ui label\">
                                <i class=\"linkify icon\" aria-hidden=\"true\"></i>
                                ";
                // line 105
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("Parent of:"), "html", null, true);
                yield "
                            </div>
                            <div class=\"ui celled list\">
            ";
                // line 108
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, ($context["member"] ?? null), "children", [], "any", false, false, false, 108));
                foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                    // line 109
                    yield "                                <a href=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("member", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["child"], "id", [], "any", false, false, false, 109)]), "html", null, true);
                    yield "\" class=\"item\">";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["child"], "sfullname", [], "any", false, false, false, 109), "html", null, true);
                    yield "</a>
            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 111
                yield "                            </div>
                        </div>
        ";
            }
            // line 114
            yield "                    </div>
                </div>
    ";
        }
        // line 117
        yield "
    ";
        // line 118
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["member"] ?? null), "id", [], "any", false, false, false, 118) || (( !($context["self_adh"] ?? null) && CoreExtension::getAttribute($this->env, $this->source, ($context["members"] ?? null), "list", [], "any", true, true, false, 118)) && (Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, ($context["members"] ?? null), "list", [], "any", false, false, false, 118)) > 0)))) {
            // line 119
            yield "            </div>
        </div>
        <div class=\"sixteen wide tablet ten wide computer eleven wide widescreen column\">
    ";
        }
        // line 123
        yield "            ";
        // line 124
        yield "            ";
        yield from         $this->loadTemplate("components/form.html.twig", "pages/member_form.html.twig", 124)->unwrap()->yield($context);
        // line 125
        yield "
            ";
        // line 127
        yield "            ";
        yield from         $this->loadTemplate("components/dynamic_fields.html.twig", "pages/member_form.html.twig", 127)->unwrap()->yield(CoreExtension::merge($context, ["object" => ($context["member"] ?? null)]));
        // line 128
        yield "
    ";
        // line 129
        if (( !CoreExtension::getAttribute($this->env, $this->source, ($context["member"] ?? null), "id", [], "any", false, false, false, 129) &&  !($context["self_adh"] ?? null))) {
            // line 130
            yield "        ";
            if ((CoreExtension::getAttribute($this->env, $this->source, ($context["login"] ?? null), "isAdmin", [], "method", false, false, false, 130) || CoreExtension::getAttribute($this->env, $this->source, ($context["login"] ?? null), "isStaff", [], "method", false, false, false, 130))) {
                // line 131
                yield "            <div class=\"ui center aligned yellow segment\">
                <div class=\"inline field\">
                    <label for=\"redirect_on_create\">";
                // line 133
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("After member creation:"), "html", null, true);
                yield "</label>
                    <select name=\"redirect_on_create\" id=\"redirect_on_create\"i class=\"ui search dropdown\">
                        <option value=\"";
                // line 135
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::constant("Galette\\Entity\\Adherent::AFTER_ADD_DEFAULT"), "html", null, true);
                yield "\"";
                if ((CoreExtension::getAttribute($this->env, $this->source, ($context["preferences"] ?? null), "pref_redirect_on_create", [], "any", false, false, false, 135) == Twig\Extension\CoreExtension::constant("Galette\\Entity\\Adherent::AFTER_ADD_DEFAULT"))) {
                    yield " selected=\"selected\"";
                }
                yield ">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("create a new contribution (default action)"), "html", null, true);
                yield "</option>
                        <option value=\"";
                // line 136
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::constant("Galette\\Entity\\Adherent::AFTER_ADD_TRANS"), "html", null, true);
                yield "\"";
                if ((CoreExtension::getAttribute($this->env, $this->source, ($context["preferences"] ?? null), "pref_redirect_on_create", [], "any", false, false, false, 136) == Twig\Extension\CoreExtension::constant("Galette\\Entity\\Adherent::AFTER_ADD_TRANS"))) {
                    yield " selected=\"selected\"";
                }
                yield ">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("create a new transaction"), "html", null, true);
                yield "</option>
                        <option value=\"";
                // line 137
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::constant("Galette\\Entity\\Adherent::AFTER_ADD_NEW"), "html", null, true);
                yield "\"";
                if ((CoreExtension::getAttribute($this->env, $this->source, ($context["preferences"] ?? null), "pref_redirect_on_create", [], "any", false, false, false, 137) == Twig\Extension\CoreExtension::constant("Galette\\Entity\\Adherent::AFTER_ADD_NEW"))) {
                    yield " selected=\"selected\"";
                }
                yield ">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("create another new member"), "html", null, true);
                yield "</option>
                        <option value=\"";
                // line 138
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::constant("Galette\\Entity\\Adherent::AFTER_ADD_SHOW"), "html", null, true);
                yield "\"";
                if ((CoreExtension::getAttribute($this->env, $this->source, ($context["preferences"] ?? null), "pref_redirect_on_create", [], "any", false, false, false, 138) == Twig\Extension\CoreExtension::constant("Galette\\Entity\\Adherent::AFTER_ADD_SHOW"))) {
                    yield " selected=\"selected\"";
                }
                yield ">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("show member"), "html", null, true);
                yield "</option>
                        <option value=\"";
                // line 139
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::constant("Galette\\Entity\\Adherent::AFTER_ADD_LIST"), "html", null, true);
                yield "\"";
                if ((CoreExtension::getAttribute($this->env, $this->source, ($context["preferences"] ?? null), "pref_redirect_on_create", [], "any", false, false, false, 139) == Twig\Extension\CoreExtension::constant("Galette\\Entity\\Adherent::AFTER_ADD_LIST"))) {
                    yield " selected=\"selected\"";
                }
                yield ">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("go to members list"), "html", null, true);
                yield "</option>
                        <option value=\"";
                // line 140
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::constant("Galette\\Entity\\Adherent::AFTER_ADD_HOME"), "html", null, true);
                yield "\"";
                if ((CoreExtension::getAttribute($this->env, $this->source, ($context["preferences"] ?? null), "pref_redirect_on_create", [], "any", false, false, false, 140) == Twig\Extension\CoreExtension::constant("Galette\\Entity\\Adherent::AFTER_ADD_HOME"))) {
                    yield " selected=\"selected\"";
                }
                yield ">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("go to main page"), "html", null, true);
                yield "</option>
                    </select>
                </div>
            </div>
        ";
            } else {
                // line 145
                yield "            <input type=\"hidden\" name=\"redirect_on_create\" value=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::constant("Galette\\Entity\\Adherent::AFTER_ADD_SHOW"), "html", null, true);
                yield "\"/>
        ";
            }
            // line 147
            yield "        ";
            if ((array_key_exists("addchild", $context) && ($context["addchild"] ?? null))) {
                // line 148
                yield "            <input type=\"hidden\" name=\"addchild\" value=\"true\"/>
        ";
            }
            // line 150
            yield "    ";
        }
        // line 151
        yield "    ";
        if (((CoreExtension::getAttribute($this->env, $this->source, ($context["preferences"] ?? null), "pref_mail_method", [], "any", false, false, false, 151) != Twig\Extension\CoreExtension::constant("Galette\\Core\\GaletteMail::METHOD_DISABLED")) && ( !($context["self_adh"] ?? null) && (CoreExtension::getAttribute($this->env, $this->source, ($context["login"] ?? null), "isAdmin", [], "method", false, false, false, 151) || CoreExtension::getAttribute($this->env, $this->source, ($context["login"] ?? null), "isStaff", [], "method", false, false, false, 151))))) {
            // line 152
            yield "            <div class=\"ui center aligned yellow segment\">
                <div class=\"inline field\">
                    <div class=\"ui toggle checkbox\">
                        <input type=\"checkbox\" name=\"mail_confirm\" id=\"mail_confirm\" value=\"1\"";
            // line 155
            if ((CoreExtension::getAttribute($this->env, $this->source, ($context["preferences"] ?? null), "pref_bool_mailowner", [], "any", false, false, false, 155) || CoreExtension::getAttribute($this->env, $this->source, ($context["member"] ?? null), "sendEMail", [], "method", false, false, false, 155))) {
                yield " checked=\"checked\"";
            }
            yield "/>
                        <label for=\"mail_confirm\">
        ";
            // line 157
            if (CoreExtension::getAttribute($this->env, $this->source, ($context["member"] ?? null), "id", [], "any", false, false, false, 157)) {
                // line 158
                yield "                            ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("Notify member his account has been modified"), "html", null, true);
                yield "
        ";
            } else {
                // line 160
                yield "                            ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("Notify member his account has been created"), "html", null, true);
                yield "
        ";
            }
            // line 162
            yield "                        </label>
                        <br/>
                        <span class=\"exemple\">
        ";
            // line 165
            if (CoreExtension::getAttribute($this->env, $this->source, ($context["member"] ?? null), "id", [], "any", false, false, false, 165)) {
                // line 166
                yield "                            ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("Member will be notified by email his account has been modified."), "html", null, true);
                yield "
        ";
            } else {
                // line 168
                yield "                            ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("Member will receive his username and password by email, if he has an address."), "html", null, true);
                yield "
        ";
            }
            // line 170
            yield "                        </span>
                    </div>
                </div>
            </div>
    ";
        }
        // line 175
        yield "            <div class=\"ui basic center aligned fitted segment\">
                <button type=\"submit\" name=\"valid\" class=\"action ui labeled icon primary button\">
                    <i class=\"save icon\" aria-hidden=\"true\"></i> ";
        // line 177
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("Save"), "html", null, true);
        yield "
                </button>
            ";
        // line 179
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["hidden_elements"] ?? null));
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
        foreach ($context['_seq'] as $context["_key"] => $context["entry"]) {
            // line 180
            yield "                ";
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["entry"], "field_id", [], "any", false, false, false, 180) != "mdp_adh")) {
                // line 181
                yield "                    ";
                $context["title"] = null;
                // line 182
                yield "                    ";
                $context["tip"] = null;
                // line 183
                yield "                    ";
                $context["size"] = null;
                // line 184
                yield "                    ";
                $context["propname"] = CoreExtension::getAttribute($this->env, $this->source, $context["entry"], "propname", [], "any", false, false, false, 184);
                // line 185
                yield "                    ";
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["entry"], "field_id", [], "any", false, false, false, 185) == "activite_adh")) {
                    // line 186
                    yield "                        ";
                    $context["value"] = CoreExtension::getAttribute($this->env, $this->source, ($context["member"] ?? null), "isActive", [], "method", false, false, false, 186);
                    // line 187
                    yield "                    ";
                } else {
                    // line 188
                    yield "                        ";
                    $context["value"] = CoreExtension::getAttribute($this->env, $this->source, ($context["member"] ?? null), ($context["propname"] ?? null), [], "any", false, false, false, 188);
                    // line 189
                    yield "                    ";
                }
                // line 190
                yield "                    ";
                $context["checked"] = null;
                // line 191
                yield "                    ";
                $context["example"] = null;
                // line 192
                yield "
                    ";
                // line 193
                if (((($context["value"] ?? null) != "") && (CoreExtension::getAttribute($this->env, $this->source, $context["entry"], "field_id", [], "any", false, false, false, 193) != "parent_id"))) {
                    // line 194
                    yield "                        ";
                    yield from                     $this->loadTemplate("components/forms/hidden.html.twig", "pages/member_form.html.twig", 194)->unwrap()->yield(CoreExtension::merge($context, ["name" => CoreExtension::getAttribute($this->env, $this->source,                     // line 195
$context["entry"], "field_id", [], "any", false, false, false, 195), "id" => CoreExtension::getAttribute($this->env, $this->source,                     // line 196
$context["entry"], "field_id", [], "any", false, false, false, 196), "value" =>                     // line 197
($context["value"] ?? null)]));
                    // line 199
                    yield "                    ";
                }
                // line 200
                yield "                ";
            }
            // line 201
            yield "            ";
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entry'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 202
        yield "            ";
        yield from         $this->loadTemplate("components/forms/csrf.html.twig", "pages/member_form.html.twig", 202)->unwrap()->yield($context);
        // line 203
        yield "            </div>

    ";
        // line 205
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["member"] ?? null), "id", [], "any", false, false, false, 205) || (( !($context["self_adh"] ?? null) && CoreExtension::getAttribute($this->env, $this->source, ($context["members"] ?? null), "list", [], "any", true, true, false, 205)) && (Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, ($context["members"] ?? null), "list", [], "any", false, false, false, 205)) > 0)))) {
            // line 206
            yield "        </div>
    </div>
</div>
    ";
        }
        // line 210
        yield "</form>
";
        return; yield '';
    }

    // line 213
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 214
        yield "        <script type=\"text/javascript\">
            ";
        // line 215
        yield from         $this->loadTemplate("elements/js/choose_adh.js.twig", "pages/member_form.html.twig", 215)->unwrap()->yield(CoreExtension::merge($context, ["js_chosen_id" => "#parent_id"]));
        // line 216
        yield "            ";
        yield from         $this->loadTemplate("elements/js/choose_social.js.twig", "pages/member_form.html.twig", 216)->unwrap()->yield($context);
        // line 217
        yield "
            \$(function() {
                \$('#company_field.nocompany').addClass('displaynone');
                \$('#is_company').change(function(){
                    \$('#company_field').toggleClass('displaynone');
                });

";
        // line 224
        if ( !($context["self_adh"] ?? null)) {
            // line 225
            yield "                ";
            // line 226
            yield "                \$('#btngroups, #btnmanagedgroups').click(function(){
                    var _managed = false;
                    if ( \$(this).attr('id') == 'btnmanagedgroups' ) {
                        _managed = true;
                    }
                    var _groups = [];
                    var _form = (_managed) ? 'managed' : 'user';
                    \$('#' + _form + 'groups_form input').each(function(){
                        _group = \$(this).val().split('|');
                        _groups[_groups.length] = {
                            id: _group[0],
                            name: _group[1]
                        };
                    });
                    \$.ajax({
                        url: '";
            // line 241
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("ajax_groups"), "html", null, true);
            yield "',
                        type: \"POST\",
                        data: {
                            ajax: true,
                            groups: _groups,
                            managed: _managed
                        },
                        ";
            // line 248
            yield from             $this->loadTemplate("elements/js/loader.js.twig", "pages/member_form.html.twig", 248)->unwrap()->yield(CoreExtension::merge($context, ["selector" => "#groups_field"]));
            // line 250
            yield ",
                        success: function(res){
                            _groups_dialog(res, _groups, _managed);
                        },
                        error: function() {
                            ";
            // line 255
            yield from             $this->loadTemplate("elements/js/modal.js.twig", "pages/member_form.html.twig", 255)->unwrap()->yield(CoreExtension::merge($context, ["modal_title_twig" => $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("An error occurred displaying groups interface :("), "js"), "modal_without_content" => true, "modal_class" => "mini", "modal_deny_only" => true, "modal_cancel_text" => $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("Close"), "js"), "modal_classname" => "redalert"]));
            // line 263
            yield "                        }
                    });
                    return false;
                });

                var _groups_dialog = function(res, _groups, _managed){
                    var _title = '";
            // line 269
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("Groups selection"), "js"), "html", null, true);
            yield "';
                    if ( _managed ) {
                        _title = '";
            // line 271
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("Managed groups selection"), "js"), "html", null, true);
            yield "';
                    }
                    ";
            // line 273
            yield from             $this->loadTemplate("elements/js/modal.js.twig", "pages/member_form.html.twig", 273)->unwrap()->yield(CoreExtension::merge($context, ["modal_title" => "_title", "modal_content" => "res", "modal_class" => "groups-selection fullscreen", "modal_content_class" => "scrolling", "modal_deny_only" => true, "modal_cancel_text" => $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("Close"), "js")]));
            // line 281
            yield "                    _groups_ajax_mapper(res, _groups, _managed);
                }

                var _groups_ajax_mapper = function(res, _groups, _managed){
                    \$('#btnvalid').click(function(){
                        //remove actual groups
                        var _form = (_managed) ? 'managed' : 'user';
                        \$('#' + _form + 'groups_form').empty();
                        var _existing_labels = \$('#groups_field .labels').children().length;
                        var _new_labels = 0;
                        if (\$('#groups_field .labels').length === 0) {
                            var _labels_container = '<div class=\"ui large labels\"></div>';
                            \$('#btngroups').before(_labels_container);
                        } else {
                            if (_managed) {
                                \$('#groups_field .labels').find('.label.manager').remove();
                            } else {
                                \$('#groups_field .labels').find('.label.member').remove();
                            }
                        }
                        var _groups = new Array();
                        var _groups_str = '';

                        \$('li[id^=\"group_\"]').each(function(){
                            //get group values
                            _gid = this.id.substring(6, this.id.length);
                            _gname = \$(this).text();
                            _groups[_groups.length] = this.id.substring(6, this.id.length);
                            var _iname = (_managed) ? 'groups_managed_adh' : 'groups_adh';
                            \$('#' + _form + 'groups_form').append(
                                '<input type=\"hidden\" value=\"' +
                                _gid + '|' + _gname + '|' +
                                '\" name=\"' + _iname + '[]\">'
                            );
                            if (_managed) {
                                _groups_str += '<span class=\"ui orange basic label manager\">';
                                _groups_str += '<i class=\"ui shield icon tooltip\" title=\"' + '";
            // line 317
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("Group manager"), "js"), "html", null, true);
            yield "' + '\" aria-hidden=\"true\"></i>';
                            } else {
                                _groups_str += '<span class=\"ui orange basic label member\">';
                                _groups_str += '<i class=\"ui tag icon tooltip\" title=\"' + '";
            // line 320
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("Member of group"), "js"), "html", null, true);
            yield "' + '\" aria-hidden=\"true\"></i>';
                            }
                            _groups_str += _gname;
                            _groups_str += '</span>';
                            _new_labels += 1;
                        });
                        \$('#groups_field .labels').append(_groups_str);
                        var _modified = '<div class=\"ui yellow tiny message with-transition\">";
            // line 327
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("Items in this list have been modified. Don't forget to save your changes."), "js"), "html", null, true);
            yield "</div>';
                        if (_existing_labels != _new_labels) {
                            \$('#groups_field').find('.message').remove();
                            \$('#groups_field').append(_modified);
                        }
                        \$('.message.with-transition').transition('flash');
                        \$('.groups-selection').modal('hide');
                    });

                    //Remap links
                    var _none = \$('#none_selected').clone();
                    \$('li input[type=checkbox]').click(function(e){
                        e.stopPropagation();
                    });
                    \$('li[id^=\"group_\"]').click(function(){
                        \$(this).remove();
                        if ( \$('#selected_groups ul li').length == 0 ) {
                            \$('#selected_groups ul').append(_none);
                        }
                    });

                    //Select a row
                    \$('#listing tbody tr').click(function(event){
                        event.preventDefault();
                        var _glink = \$(this).find('.username_row a');
                        var _gid = _glink[0].href.match(/.*\\/(\\d+)\$/)[1];
                        var _gname = _glink.text();
                        \$('#none_selected').remove()
                        if ( \$('#group_' + _gid).length == 0 ) {
                            var _li = '<li id=\"group_' + _gid + '\" class=\"item\">'
                                    + '<i class=\"icons\" aria-hidden=\"true\"><i class=\"users icon\"><i class=\"top right corner minus icon\"></i></i></i>'
                                    + '<span class=\"ui content\">' + _gname + '</span></li>';
                            \$('#selected_groups ul').append(_li);
                            \$('#group_' + _gid).click(function(){
                                \$(this).remove();
                                if ( \$('#selected_groups ul li').length == 0 ) {
                                    \$('#selected_groups ul').append(_none);
                                }
                            });
                        }
                        return false;
                    }).css('cursor', 'pointer').attr('title', '";
            // line 368
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("Click on a row to select a group"), "js"), "html", null, true);
            yield "');
                }

    ";
            // line 371
            if (( !($context["self_adh"] ?? null) &&  !CoreExtension::getAttribute($this->env, $this->source, ($context["member"] ?? null), "hasChildren", [], "method", false, false, false, 371))) {
                // line 372
                yield "                ";
                // line 373
                yield "        ";
                if ( !CoreExtension::getAttribute($this->env, $this->source, ($context["member"] ?? null), "isDuplicate", [], "method", false, false, false, 373)) {
                    // line 374
                    yield "                \$('#parent_id_elt').addClass('displaynone');
        ";
                }
                // line 376
                yield "                \$('#attach-checkbox').checkbox({
                    onChecked: function() {
                        \$('#parent_id_elt').removeClass('displaynone');
                    },
                    onUnchecked: function() {
                        \$('#parent_id_elt').addClass('displaynone');
                    }
                });
    ";
            }
            // line 385
            yield "
    ";
            // line 386
            if ( !($context["self_adh"] ?? null)) {
                // line 387
                yield "        ";
                if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), ($context["parent_fields"] ?? null)) > 0)) {
                    // line 388
                    yield "                \$('#detach_parent').on('change', function(){
                    var _checked = \$(this).is(':checked');
                    var _changes = '';
            ";
                    // line 391
                    $context['_parent'] = $context;
                    $context['_seq'] = CoreExtension::ensureTraversable(($context["parent_fields"] ?? null));
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
                    foreach ($context['_seq'] as $context["_key"] => $context["req"]) {
                        // line 392
                        yield "                    _changes += '#";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["req"], "html", null, true);
                        yield "';
                ";
                        // line 393
                        if ( !CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "last", [], "any", false, false, false, 393)) {
                            // line 394
                            yield "                    _changes += ',';
                ";
                        }
                        // line 396
                        yield "            ";
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
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['req'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 397
                    yield "                    if (_checked) {
                        \$(_changes).attr('required', 'required');
                    } else {
                        \$(_changes).removeAttr('required');
                    }
                });

                \$('#parent_id').on('change', function(){
                    var _hasParent = \$(this).attr('value') != '';
                    var _changes = '';
            ";
                    // line 407
                    $context['_parent'] = $context;
                    $context['_seq'] = CoreExtension::ensureTraversable(($context["parent_fields"] ?? null));
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
                    foreach ($context['_seq'] as $context["_key"] => $context["req"]) {
                        // line 408
                        yield "                    _changes += '#";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["req"], "html", null, true);
                        yield "';
                ";
                        // line 409
                        if ( !CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "last", [], "any", false, false, false, 409)) {
                            // line 410
                            yield "                    _changes += ',';
                ";
                        }
                        // line 412
                        yield "            ";
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
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['req'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 413
                    yield "                    if (_hasParent) {
                        \$(_changes).removeAttr('required');
                    } else {
                        \$(_changes).attr('required', 'required');
                    }
                });
        ";
                }
                // line 420
                yield "    ";
            }
            // line 421
            yield "
                \$('#ddn_adh').on('blur', function() {
                    var _bdate = \$(this).val();
                    if ('";
            // line 424
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("Y-m-d"), "html", null, true);
            yield "' === 'Y-m-d') {
                        _bdate = new Date(_bdate);
                    } else {
                        //try for dd/mm/yyyy
                        var _dparts = _bdate.split(\"/\");
                        _bdate = new Date(_dparts[2], _dparts[1] - 1, _dparts[0]);
                    }

                    if (! isNaN(_bdate.getTime())) {
                        var _today = new Date();
                        var _age = Math.floor((_today-_bdate) / (365.25 * 24 * 60 * 60 * 1000));
                        \$('#member_age').html('";
            // line 435
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()(" (%age years old)"), "html", null, true);
            yield "'.replace(/%age/, _age))
                    } else {
                        \$('#member_age').html('');
                    }
                });

    ";
            // line 441
            if ((CoreExtension::getAttribute($this->env, $this->source, ($context["preferences"] ?? null), "pref_force_picture_ratio", [], "any", false, false, false, 441) == 1)) {
                // line 442
                yield "                // Show photo cropping preferences on file selection
                let _photo_new = document.getElementById('photo_new');
                _photo_new.addEventListener('change', function () {
                    if (_photo_new.files.length > 0) {
                        let _crop_focus = document.getElementById('crop_focus_field');
                        _crop_focus.classList.remove('displaynone');
                        \$('#crop_focus_field').transition('glow');
                        return;
                    }
                });
    ";
            }
        }
        // line 454
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
        return "pages/member_form.html.twig";
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
        return array (  918 => 454,  904 => 442,  902 => 441,  893 => 435,  879 => 424,  874 => 421,  871 => 420,  862 => 413,  848 => 412,  844 => 410,  842 => 409,  837 => 408,  820 => 407,  808 => 397,  794 => 396,  790 => 394,  788 => 393,  783 => 392,  766 => 391,  761 => 388,  758 => 387,  756 => 386,  753 => 385,  742 => 376,  738 => 374,  735 => 373,  733 => 372,  731 => 371,  725 => 368,  681 => 327,  671 => 320,  665 => 317,  627 => 281,  625 => 273,  620 => 271,  615 => 269,  607 => 263,  605 => 255,  598 => 250,  596 => 248,  586 => 241,  569 => 226,  567 => 225,  565 => 224,  556 => 217,  553 => 216,  551 => 215,  548 => 214,  544 => 213,  538 => 210,  532 => 206,  530 => 205,  526 => 203,  523 => 202,  509 => 201,  506 => 200,  503 => 199,  501 => 197,  500 => 196,  499 => 195,  497 => 194,  495 => 193,  492 => 192,  489 => 191,  486 => 190,  483 => 189,  480 => 188,  477 => 187,  474 => 186,  471 => 185,  468 => 184,  465 => 183,  462 => 182,  459 => 181,  456 => 180,  439 => 179,  434 => 177,  430 => 175,  423 => 170,  417 => 168,  411 => 166,  409 => 165,  404 => 162,  398 => 160,  392 => 158,  390 => 157,  383 => 155,  378 => 152,  375 => 151,  372 => 150,  368 => 148,  365 => 147,  359 => 145,  345 => 140,  335 => 139,  325 => 138,  315 => 137,  305 => 136,  295 => 135,  290 => 133,  286 => 131,  283 => 130,  281 => 129,  278 => 128,  275 => 127,  272 => 125,  269 => 124,  267 => 123,  261 => 119,  259 => 118,  256 => 117,  251 => 114,  246 => 111,  235 => 109,  231 => 108,  225 => 105,  220 => 102,  217 => 101,  213 => 99,  211 => 98,  208 => 97,  206 => 94,  205 => 90,  198 => 86,  192 => 85,  186 => 84,  183 => 83,  180 => 82,  173 => 78,  168 => 75,  166 => 74,  163 => 73,  157 => 71,  155 => 70,  148 => 68,  142 => 65,  137 => 62,  135 => 61,  131 => 59,  129 => 58,  126 => 57,  123 => 56,  120 => 55,  118 => 54,  110 => 49,  103 => 45,  100 => 44,  94 => 41,  91 => 40,  89 => 39,  83 => 35,  81 => 34,  76 => 31,  74 => 30,  68 => 26,  66 => 25,  51 => 24,  47 => 23,  37 => 21,);
    }

    public function getSourceContext()
    {
        return new Source("", "pages/member_form.html.twig", "/var/www/galette/templates/default/pages/member_form.html.twig");
    }
}
