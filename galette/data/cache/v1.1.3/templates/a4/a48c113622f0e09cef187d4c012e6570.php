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

/* components/form.html.twig */
class __TwigTemplate_41077ad58a0c4edf505cba1f81b3636a extends Template
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
        yield "            ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["fieldsets"] ?? null));
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
        foreach ($context['_seq'] as $context["_key"] => $context["fieldset"]) {
            // line 22
            yield "            <div class=\"galetteform fieldset-";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["fieldset"], "id", [], "any", false, false, false, 22), "html", null, true);
            yield " ui styled fluid accordion field\">
                <div class=\"active title\">
                    <i class=\"jsonly displaynone dropdown icon\" aria-hidden=\"true\"></i>
                    ";
            // line 25
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()(CoreExtension::getAttribute($this->env, $this->source, $context["fieldset"], "label", [], "any", false, false, false, 25)), "html", null, true);
            yield "
                </div>
                <div class=\"active content field\">
                    <div class=\"ui";
            // line 28
            if (CoreExtension::getAttribute($this->env, $this->source, ($context["preferences"] ?? null), "pref_member_form_grid", [], "any", true, true, false, 28)) {
                yield " ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["preferences"] ?? null), "pref_member_form_grid", [], "any", false, false, false, 28), "html", null, true);
            }
            yield " column stackable grid\">
                    ";
            // line 29
            if ((( !array_key_exists("masschange", $context) &&  !($context["self_adh"] ?? null)) && (CoreExtension::getAttribute($this->env, $this->source, $context["fieldset"], "id", [], "any", false, false, false, 29) == "1"))) {
                // line 30
                yield "                        <div class=\"sixteen wide field column\">
                            ";
                // line 31
                yield from                 $this->loadTemplate("components/forms/picture.html.twig", "components/form.html.twig", 31)->unwrap()->yield($context);
                // line 32
                yield "                        </div>
                    ";
            }
            // line 34
            yield "                    ";
            if ((((array_key_exists("groups", $context) && (Twig\Extension\CoreExtension::length($this->env->getCharset(), ($context["groups"] ?? null)) != 0)) && CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "last", [], "any", false, false, false, 34)) && ( !array_key_exists("masschange", $context) || (($context["masschange"] ?? null) == false)))) {
                // line 35
                yield "                        <div class=\"sixteen wide field column\">
                            ";
                // line 36
                yield from                 $this->loadTemplate("components/forms/groups.html.twig", "components/form.html.twig", 36)->unwrap()->yield($context);
                // line 37
                yield "                        </div>
                    ";
            }
            // line 39
            yield "                    ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["fieldset"], "elements", [], "any", false, false, false, 39));
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
                // line 40
                yield "                        ";
                if (((CoreExtension::getAttribute($this->env, $this->source, $context["entry"], "width_in_forms", [], "any", false, false, false, 40) == 1) || ((CoreExtension::getAttribute($this->env, $this->source, ($context["preferences"] ?? null), "pref_member_form_grid", [], "any", false, false, false, 40) == "two") && (CoreExtension::getAttribute($this->env, $this->source, $context["entry"], "width_in_forms", [], "any", false, false, false, 40) == 3)))) {
                    // line 41
                    yield "                          ";
                    $context["columns"] = "";
                    // line 42
                    yield "                        ";
                } else {
                    // line 43
                    yield "                          ";
                    $context["columns"] = (((CoreExtension::getAttribute($this->env, $this->source, $context["entry"], "width_in_forms", [], "any", false, false, false, 43) == 3)) ? ("eight wide ") : ("sixteen wide "));
                    // line 44
                    yield "                        ";
                }
                // line 45
                yield "                        <div class=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["columns"] ?? null), "html", null, true);
                yield "field column\">
                        ";
                // line 46
                $context["template"] = "text.html.twig";
                // line 47
                yield "                        ";
                $context["title"] = null;
                // line 48
                yield "                        ";
                $context["tip"] = null;
                // line 49
                yield "                        ";
                $context["size"] = null;
                // line 50
                yield "                        ";
                $context["propname"] = CoreExtension::getAttribute($this->env, $this->source, $context["entry"], "propname", [], "any", false, false, false, 50);
                // line 51
                yield "                        ";
                $context["value"] = null;
                // line 52
                yield "                        ";
                $context["example"] = null;
                // line 53
                yield "
                        ";
                // line 54
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["entry"], "type", [], "any", false, false, false, 54) == Twig\Extension\CoreExtension::constant("Galette\\Entity\\FieldsConfig::TYPE_BOOL"))) {
                    // line 55
                    yield "                            ";
                    $context["template"] = "checkbox.html.twig";
                    // line 56
                    yield "                            ";
                    $context["value"] = "1";
                    // line 57
                    yield "                        ";
                }
                // line 58
                yield "                        ";
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["entry"], "field_id", [], "any", false, false, false, 58) == "titre_adh")) {
                    // line 59
                    yield "                            ";
                    $context["template"] = "titles.html.twig";
                    // line 60
                    yield "                            ";
                    $context["value"] = CoreExtension::getAttribute($this->env, $this->source, ($context["member"] ?? null), "title", [], "any", false, false, false, 60);
                    // line 61
                    yield "                        ";
                }
                // line 62
                yield "                        ";
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["entry"], "field_id", [], "any", false, false, false, 62) == "pref_lang")) {
                    // line 63
                    yield "                            ";
                    $context["template"] = "lang.html.twig";
                    // line 64
                    yield "                        ";
                }
                // line 65
                yield "                        ";
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["entry"], "field_id", [], "any", false, false, false, 65) == "sexe_adh")) {
                    // line 66
                    yield "                            ";
                    $context["template"] = "gender.html.twig";
                    // line 67
                    yield "                        ";
                }
                // line 68
                yield "                        ";
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["entry"], "field_id", [], "any", false, false, false, 68) == "societe_adh")) {
                    // line 69
                    yield "                            ";
                    $context["template"] = "company.html.twig";
                    // line 70
                    yield "                        ";
                }
                // line 71
                yield "                        ";
                if (((is_string($__internal_compile_0 = CoreExtension::getAttribute($this->env, $this->source, $context["entry"], "field_id", [], "any", false, false, false, 71)) && is_string($__internal_compile_1 = "date_") && str_starts_with($__internal_compile_0, $__internal_compile_1)) || (CoreExtension::getAttribute($this->env, $this->source, $context["entry"], "field_id", [], "any", false, false, false, 71) == "ddn_adh"))) {
                    // line 72
                    yield "                            ";
                    $context["template"] = "date.html.twig";
                    // line 73
                    yield "                        ";
                }
                // line 74
                yield "                        ";
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["entry"], "field_id", [], "any", false, false, false, 74) == "adresse_adh")) {
                    // line 75
                    yield "                            ";
                    $context["template"] = "address.html.twig";
                    // line 76
                    yield "                        ";
                }
                // line 77
                yield "                        ";
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["entry"], "field_id", [], "any", false, false, false, 77) == "mdp_adh")) {
                    // line 78
                    yield "                            ";
                    if ( !($context["self_adh"] ?? null)) {
                        // line 79
                        yield "                                ";
                        $context["template"] = "password.html.twig";
                        // line 80
                        yield "                            ";
                    } else {
                        // line 81
                        yield "                                ";
                        $context["template"] = "captcha.html.twig";
                        // line 82
                        yield "                            ";
                    }
                    // line 83
                    yield "                        ";
                }
                // line 84
                yield "                        ";
                if (((CoreExtension::getAttribute($this->env, $this->source, $context["entry"], "field_id", [], "any", false, false, false, 84) == "info_adh") || (CoreExtension::getAttribute($this->env, $this->source, $context["entry"], "field_id", [], "any", false, false, false, 84) == "info_public_adh"))) {
                    // line 85
                    yield "                            ";
                    $context["template"] = "textarea.html.twig";
                    // line 86
                    yield "                            ";
                    if ((CoreExtension::getAttribute($this->env, $this->source, $context["entry"], "field_id", [], "any", false, false, false, 86) == "info_adh")) {
                        // line 87
                        yield "                                ";
                        $context["example"] = $this->env->getFunction('_T')->getCallable()("This comment is only displayed for admins and staff members.");
                        // line 88
                        yield "                            ";
                    } else {
                        // line 89
                        yield "                                ";
                        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["login"] ?? null), "isAdmin", [], "method", false, false, false, 89) || CoreExtension::getAttribute($this->env, $this->source, ($context["login"] ?? null), "isStaff", [], "method", false, false, false, 89))) {
                            // line 90
                            yield "                                    ";
                            $context["example"] = $this->env->getFunction('_T')->getCallable()("This comment is reserved to the member.");
                            // line 91
                            yield "                                ";
                        }
                        // line 92
                        yield "                            ";
                    }
                    // line 93
                    yield "                        ";
                }
                // line 94
                yield "                        ";
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["entry"], "field_id", [], "any", false, false, false, 94) == "activite_adh")) {
                    // line 95
                    yield "                            ";
                    $context["template"] = "account.html.twig";
                    // line 96
                    yield "                        ";
                }
                // line 97
                yield "                        ";
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["entry"], "field_id", [], "any", false, false, false, 97) == "id_statut")) {
                    // line 98
                    yield "                            ";
                    $context["template"] = "status.html.twig";
                    // line 99
                    yield "                        ";
                }
                // line 100
                yield "                        ";
                if (((((CoreExtension::getAttribute($this->env, $this->source, $context["entry"], "field_id", [], "any", false, false, false, 100) == "ville_adh") || (CoreExtension::getAttribute($this->env, $this->source, $context["entry"], "field_id", [], "any", false, false, false, 100) == "lieu_naissance")) || (CoreExtension::getAttribute($this->env, $this->source, $context["entry"], "field_id", [], "any", false, false, false, 100) == "pays_adh")) || (CoreExtension::getAttribute($this->env, $this->source, $context["entry"], "field_id", [], "any", false, false, false, 100) == "region_adh"))) {
                    // line 101
                    yield "                            ";
                    $context["template"] = "search.html.twig";
                    // line 102
                    yield "                        ";
                }
                // line 103
                yield "
                        ";
                // line 104
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["entry"], "field_id", [], "any", false, false, false, 104) == "gpgid")) {
                    // line 105
                    yield "                            ";
                    $context["size"] = "8";
                    // line 106
                    yield "                        ";
                }
                // line 107
                yield "                        ";
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["entry"], "field_id", [], "any", false, false, false, 107) == "email_adh")) {
                    // line 108
                    yield "                            ";
                    $context["size"] = "30";
                    // line 109
                    yield "                        ";
                }
                // line 110
                yield "                        ";
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["entry"], "field_id", [], "any", false, false, false, 110) == "fingerprint")) {
                    // line 111
                    yield "                            ";
                    $context["size"] = "40";
                    // line 112
                    yield "                        ";
                }
                // line 113
                yield "                        ";
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["entry"], "field_id", [], "any", false, false, false, 113) == "bool_display_info")) {
                    // line 114
                    yield "                            ";
                    $context["title"] = $this->env->getFunction('_T')->getCallable()("Do member want to appear publically?");
                    // line 115
                    yield "                            ";
                    $context["tip"] = $this->env->getFunction('_T')->getCallable()("If you check this box (and if you are up to date with your contributions), your full name and other information will be publically visible on the members list.<br/>If you've uploaded a photo, it will be displayed on the trombinoscope page.<br/>Note that administrators can disabled public pages, this setting will have no effect in that case.");
                    // line 116
                    yield "                            ";
                    $context["checked"] = CoreExtension::getAttribute($this->env, $this->source, ($context["member"] ?? null), "appearsInMembersList", [], "method", false, false, false, 116);
                    // line 117
                    yield "                        ";
                }
                // line 118
                yield "                        ";
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["entry"], "field_id", [], "any", false, false, false, 118) == "login_adh")) {
                    // line 119
                    yield "                            ";
                    $context["example"] = Twig\Extension\CoreExtension::replace($this->env->getFunction('_T')->getCallable()("(at least %i characters)"), ["%i" => 2]);
                    // line 120
                    yield "                        ";
                }
                // line 121
                yield "
                        ";
                // line 122
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["entry"], "field_id", [], "any", false, false, false, 122) == "bool_admin_adh")) {
                    // line 123
                    yield "                            ";
                    $context["checked"] = CoreExtension::getAttribute($this->env, $this->source, ($context["member"] ?? null), "isAdmin", [], "method", false, false, false, 123);
                    // line 124
                    yield "                        ";
                }
                // line 125
                yield "                        ";
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["entry"], "field_id", [], "any", false, false, false, 125) == "bool_exempt_adh")) {
                    // line 126
                    yield "                            ";
                    $context["checked"] = CoreExtension::getAttribute($this->env, $this->source, ($context["member"] ?? null), "isDueFree", [], "method", false, false, false, 126);
                    // line 127
                    yield "                        ";
                }
                // line 128
                yield "                        ";
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["entry"], "field_id", [], "any", false, false, false, 128) == "parent_id")) {
                    // line 129
                    yield "                            ";
                    $context["value"] = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["member"] ?? null), "parent", [], "any", false, false, false, 129), "id", [], "any", false, false, false, 129);
                    // line 130
                    yield "                        ";
                }
                // line 131
                yield "                        ";
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["entry"], "field_id", [], "any", false, false, false, 131) == "activite_adh")) {
                    // line 132
                    yield "                            ";
                    $context["value"] = CoreExtension::getAttribute($this->env, $this->source, ($context["member"] ?? null), "isActive", [], "method", false, false, false, 132);
                    // line 133
                    yield "                        ";
                }
                // line 134
                yield "
                        ";
                // line 136
                yield "                        ";
                if (( !($context["value"] ?? null) && (($context["propname"] ?? null) != "password"))) {
                    // line 137
                    yield "                            ";
                    $context["value"] = CoreExtension::getAttribute($this->env, $this->source, ($context["member"] ?? null), ($context["propname"] ?? null), [], "any", false, false, false, 137);
                    // line 138
                    yield "                        ";
                }
                // line 139
                yield "
                        ";
                // line 140
                yield from                 $this->loadTemplate(("components/forms/" . ($context["template"] ?? null)), "components/form.html.twig", 140)->unwrap()->yield(CoreExtension::merge($context, ["name" => CoreExtension::getAttribute($this->env, $this->source,                 // line 141
$context["entry"], "field_id", [], "any", false, false, false, 141), "id" => CoreExtension::getAttribute($this->env, $this->source,                 // line 142
$context["entry"], "field_id", [], "any", false, false, false, 142), "value" =>                 // line 143
($context["value"] ?? null), "required" => CoreExtension::getAttribute($this->env, $this->source,                 // line 144
$context["entry"], "required", [], "any", false, false, false, 144), "readonly" => CoreExtension::getAttribute($this->env, $this->source,                 // line 145
$context["entry"], "readonly", [], "any", false, false, false, 145), "disabled" => CoreExtension::getAttribute($this->env, $this->source,                 // line 146
$context["entry"], "disabled", [], "any", false, false, false, 146), "label" => CoreExtension::getAttribute($this->env, $this->source,                 // line 147
$context["entry"], "label", [], "any", false, false, false, 147), "title" =>                 // line 148
($context["title"] ?? null), "size" =>                 // line 149
($context["size"] ?? null), "tip" =>                 // line 150
($context["tip"] ?? null), "compile_id" => ("input_" . CoreExtension::getAttribute($this->env, $this->source,                 // line 151
$context["entry"], "field_id", [], "any", false, false, false, 151)), "checked" => ((                // line 152
$context["checked"]) ?? (false)), "masschange" => ((                // line 153
$context["masschange"]) ?? (false))]));
                // line 155
                yield "                        </div>
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
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entry'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 157
            yield "                    </div>
                </div>
            </div>

                ";
            // line 162
            yield "                ";
            if ((((CoreExtension::getAttribute($this->env, $this->source, $context["fieldset"], "id", [], "any", false, false, false, 162) == 3) &&  !(($context["masschange"]) ?? (false))) && (CoreExtension::getAttribute($this->env, $this->source, ($context["preferences"] ?? null), "pref_disable_members_socials", [], "any", false, false, false, 162) != 1))) {
                // line 163
                yield "                    ";
                yield from                 $this->loadTemplate("elements/edit_socials.html.twig", "components/form.html.twig", 163)->unwrap()->yield(CoreExtension::merge($context, ["socials" => CoreExtension::getAttribute($this->env, $this->source, ($context["member"] ?? null), "socials", [], "any", false, false, false, 163)]));
                // line 164
                yield "                ";
            }
            // line 165
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['fieldset'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "components/form.html.twig";
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
        return array (  457 => 165,  454 => 164,  451 => 163,  448 => 162,  442 => 157,  427 => 155,  425 => 153,  424 => 152,  423 => 151,  422 => 150,  421 => 149,  420 => 148,  419 => 147,  418 => 146,  417 => 145,  416 => 144,  415 => 143,  414 => 142,  413 => 141,  412 => 140,  409 => 139,  406 => 138,  403 => 137,  400 => 136,  397 => 134,  394 => 133,  391 => 132,  388 => 131,  385 => 130,  382 => 129,  379 => 128,  376 => 127,  373 => 126,  370 => 125,  367 => 124,  364 => 123,  362 => 122,  359 => 121,  356 => 120,  353 => 119,  350 => 118,  347 => 117,  344 => 116,  341 => 115,  338 => 114,  335 => 113,  332 => 112,  329 => 111,  326 => 110,  323 => 109,  320 => 108,  317 => 107,  314 => 106,  311 => 105,  309 => 104,  306 => 103,  303 => 102,  300 => 101,  297 => 100,  294 => 99,  291 => 98,  288 => 97,  285 => 96,  282 => 95,  279 => 94,  276 => 93,  273 => 92,  270 => 91,  267 => 90,  264 => 89,  261 => 88,  258 => 87,  255 => 86,  252 => 85,  249 => 84,  246 => 83,  243 => 82,  240 => 81,  237 => 80,  234 => 79,  231 => 78,  228 => 77,  225 => 76,  222 => 75,  219 => 74,  216 => 73,  213 => 72,  210 => 71,  207 => 70,  204 => 69,  201 => 68,  198 => 67,  195 => 66,  192 => 65,  189 => 64,  186 => 63,  183 => 62,  180 => 61,  177 => 60,  174 => 59,  171 => 58,  168 => 57,  165 => 56,  162 => 55,  160 => 54,  157 => 53,  154 => 52,  151 => 51,  148 => 50,  145 => 49,  142 => 48,  139 => 47,  137 => 46,  132 => 45,  129 => 44,  126 => 43,  123 => 42,  120 => 41,  117 => 40,  99 => 39,  95 => 37,  93 => 36,  90 => 35,  87 => 34,  83 => 32,  81 => 31,  78 => 30,  76 => 29,  69 => 28,  63 => 25,  56 => 22,  38 => 21,);
    }

    public function getSourceContext()
    {
        return new Source("", "components/form.html.twig", "/var/www/galette/templates/default/components/form.html.twig");
    }
}
