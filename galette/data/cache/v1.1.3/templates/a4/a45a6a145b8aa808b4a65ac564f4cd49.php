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

/* pages/preferences.html.twig */
class __TwigTemplate_bd291dafe7f8d73b0a4f6c3b95100d7a extends Template
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
        $this->parent = $this->loadTemplate("page.html.twig", "pages/preferences.html.twig", 21);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 23
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 24
        yield "        <form action=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("store-preferences"), "html", null, true);
        yield "\" method=\"post\" enctype=\"multipart/form-data\" class=\"ui form\">
        <div class=\"ui stackable pointing inverted wrapping centered fluid menu tabbed\">
            <a href=\"";
        // line 26
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("preferences"), "html", null, true);
        yield "?tab=general\" class=\"item";
        yield (((($context["tab"] ?? null) == "general")) ? (" active") : (""));
        yield "\" data-tab=\"general\">";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("General"), "html", null, true);
        yield "</a>
            <a href=\"";
        // line 27
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("preferences"), "html", null, true);
        yield "?tab=social\" class=\"item";
        yield (((($context["tab"] ?? null) == "social")) ? (" active") : (""));
        yield "\" data-tab=\"social\">";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("Social networks"), "html", null, true);
        yield "</a>
            <a href=\"";
        // line 28
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("preferences"), "html", null, true);
        yield "?tab=parameters\" class=\"item";
        yield (((($context["tab"] ?? null) == "parameters")) ? (" active") : (""));
        yield "\" data-tab=\"parameters\">";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("Parameters"), "html", null, true);
        yield "</a>
            <a href=\"";
        // line 29
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("preferences"), "html", null, true);
        yield "?tab=rights\" class=\"item";
        yield (((($context["tab"] ?? null) == "rights")) ? (" active") : (""));
        yield "\" data-tab=\"rights\">";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("Rights"), "html", null, true);
        yield "</a>
            <a href=\"";
        // line 30
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("preferences"), "html", null, true);
        yield "?tab=mail\" class=\"item";
        yield (((($context["tab"] ?? null) == "mail")) ? (" active") : (""));
        yield "\" data-tab=\"mail\">";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("E-Mail"), "html", null, true);
        yield "</a>
            <a href=\"";
        // line 31
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("preferences"), "html", null, true);
        yield "?tab=labels\" class=\"item";
        yield (((($context["tab"] ?? null) == "labels")) ? (" active") : (""));
        yield "\" data-tab=\"labels\">";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("Labels"), "html", null, true);
        yield "</a>
            <a href=\"";
        // line 32
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("preferences"), "html", null, true);
        yield "?tab=cards\" class=\"item";
        yield (((($context["tab"] ?? null) == "cards")) ? (" active") : (""));
        yield "\" data-tab=\"cards\">";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("Cards"), "html", null, true);
        yield "</a>
";
        // line 33
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["login"] ?? null), "isAdmin", [], "method", false, false, false, 33)) {
            // line 34
            yield "            <a href=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("preferences"), "html", null, true);
            yield "?tab=security\" class=\"item";
            yield (((($context["tab"] ?? null) == "security")) ? (" active") : (""));
            yield "\" data-tab=\"security\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("Security parameters"), "html", null, true);
            yield "</a>
";
        }
        // line 36
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["login"] ?? null), "isSuperAdmin", [], "method", false, false, false, 36)) {
            // line 37
            yield "            <a href=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("preferences"), "html", null, true);
            yield "?tab=admin\" class=\"item";
            yield (((($context["tab"] ?? null) == "admin")) ? (" active") : (""));
            yield "\" data-tab=\"admin\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("Admin"), "html", null, true);
            yield "</a>
";
        }
        // line 39
        yield "        </div>
        <div class=\"ui";
        // line 40
        yield (((($context["tab"] ?? null) == "general")) ? (" active") : (""));
        yield " tab segment\" data-tab=\"general\">
            <div class=\"ui stackable two column grid\">
                <div class=\"column\">
                    <div class=\"";
        // line 43
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["required"] ?? null), "pref_nom", [], "any", true, true, false, 43) && (CoreExtension::getAttribute($this->env, $this->source, ($context["required"] ?? null), "pref_nom", [], "any", false, false, false, 43) == 1))) {
            yield "required ";
        }
        yield " field\">
                        <label for=\"pref_nom\">";
        // line 44
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("Name of the association:"), "html", null, true);
        yield "</label>
                        <input type=\"text\" name=\"pref_nom\" id=\"pref_nom\" value=\"";
        // line 45
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["pref"] ?? null), "pref_nom", [], "any", false, false, false, 45), "html", null, true);
        yield "\" maxlength=\"190\"";
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["required"] ?? null), "pref_nom", [], "any", true, true, false, 45) && (CoreExtension::getAttribute($this->env, $this->source, ($context["required"] ?? null), "pref_nom", [], "any", false, false, false, 45) == 1))) {
            yield " required=\"required\"";
        }
        yield "/>
                    </div>
                    <div class=\"field\">
                        <label for=\"pref_slogan\">";
        // line 48
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("Association's short description:"), "html", null, true);
        yield "
                            <i class=\"circular small inverted primary icon info tooltip\" title=\"";
        // line 49
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("Enter here a short description for your association, it will be displayed on the index page and into pages' title."), "html", null, true);
        yield "\" aria-hidden=\"true\"></i>
                        </label>
                        <div class=\"ui action input\">
                            <input type=\"text\" name=\"pref_slogan\" id=\"pref_slogan\" value=\"";
        // line 52
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["pref"] ?? null), "pref_slogan", [], "any", false, false, false, 52), "html", null, true);
        yield "\"/>
                            <a
                                href=\"";
        // line 54
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("dynamicTranslations", ["text_orig" => $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["pref"] ?? null), "pref_slogan", [], "any", false, false, false, 54))]), "html", null, true);
        yield "\"
                                class=\"tooltip ui icon button\"
                                title=\"";
        // line 56
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::replace($this->env->getFunction('_T')->getCallable()("Translate '%s'"), ["%s" => CoreExtension::getAttribute($this->env, $this->source, ($context["pref"] ?? null), "pref_slogan", [], "any", false, false, false, 56)]), "html", null, true);
        yield "\"
                            >
                                <i class=\"language icon\" aria-hidden=\"true\"></i>
                                <span class=\"visually-hidden\">";
        // line 59
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::replace($this->env->getFunction('_T')->getCallable()("Translate '%s'"), ["%s" => CoreExtension::getAttribute($this->env, $this->source, ($context["pref"] ?? null), "pref_slogan", [], "any", false, false, false, 59)]), "html", null, true);
        yield "</span>
                            </a>
                        </div>
                    </div>
                </div>
                <div class=\"column\">
                    <div class=\"field wide ui items\">
                        <label>";
        // line 66
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("Logo:"), "html", null, true);
        yield "</label>
                        <div class=\"item\">
        ";
        // line 68
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["logo"] ?? null), "isCustom", [], "method", false, false, false, 68)) {
            // line 69
            yield "                            <div class=\"image\">
                                <img src=\"";
            // line 70
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("logo"), "html", null, true);
            yield "\" class=\"picture\" width=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["logo"] ?? null), "getOptimalWidth", [], "method", false, false, false, 70), "html", null, true);
            yield "\" height=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["logo"] ?? null), "getOptimalHeight", [], "method", false, false, false, 70), "html", null, true);
            yield "\" alt=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("Current logo"), "html", null, true);
            yield "\"/>
                            </div>
        ";
        }
        // line 73
        yield "                            <div class=\"content\">
                                <div class=\"description\">
                                    <div class=\"ui file action input\">
                                        <input type=\"file\" name=\"logo\" id=\"logo_picture\"";
        // line 76
        if ($this->env->getFunction('callstatic')->getCallable()("\\Galette\\Core\\Galette", "isDemo")) {
            yield " disabled=\"disabled\"";
        }
        yield "/>
                                        <label for=\"logo_picture\" class=\"ui button";
        // line 77
        if ($this->env->getFunction('callstatic')->getCallable()("\\Galette\\Core\\Galette", "isDemo")) {
            yield " disabled";
        }
        yield "\">
                                            <i class=\"blue upload icon\" aria-hidden=\"true\"></i>
                                            ";
        // line 79
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["logo"] ?? null), "isCustom", [], "method", false, false, false, 79)) {
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("Choose another file"), "html", null, true);
        } else {
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("Choose a file"), "html", null, true);
        }
        // line 80
        yield "                                        </label>
                                    </div>
                                </div>
                                <div class=\"extra ui basic fitted segment\">
        ";
        // line 84
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["logo"] ?? null), "isCustom", [], "method", false, false, false, 84)) {
            // line 85
            yield "                                    <div class=\"ui toggle checkbox\">
                                        <input type=\"checkbox\" name=\"del_logo\" id=\"del_logo\" value=\"1\"/>
                                        <label for=\"del_logo\" class=\"labelalign\">";
            // line 87
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("Delete image"), "html", null, true);
            yield "</label>
                                    </div>
        ";
        }
        // line 90
        yield "                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class=\"ui stackable two column grid\">
                <div class=\"column\">
                    <div class=\"field\">
                        <label for=\"pref_adresse\">";
        // line 99
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("Address:"), "html", null, true);
        yield "</label>
                        <input type=\"text\" name=\"pref_adresse\" id=\"pref_adresse\" value=\"";
        // line 100
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["pref"] ?? null), "pref_adresse", [], "any", false, false, false, 100), "html", null, true);
        yield "\" maxlength=\"190\"/><br/>
                    </div>
                    <div class=\"field\">
                        <label for=\"pref_adresse2\" class=\"libelle\">";
        // line 103
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("Address:"), "html", null, true);
        yield " ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()(" (continuation)"), "html", null, true);
        yield "</label>
                        <input type=\"text\" name=\"pref_adresse2\" id=\"pref_adresse2\" value=\"";
        // line 104
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["pref"] ?? null), "pref_adresse2", [], "any", false, false, false, 104), "html", null, true);
        yield "\" maxlength=\"190\"/>
                    </div>
                    <div class=\"field\">
                        <label for=\"pref_cp\">";
        // line 107
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("Zip Code:"), "html", null, true);
        yield "</label>
                        <input type=\"text\" name=\"pref_cp\" id=\"pref_cp\" value=\"";
        // line 108
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["pref"] ?? null), "pref_cp", [], "any", false, false, false, 108), "html", null, true);
        yield "\" maxlength=\"10\"/>
                    </div>
                    <div class=\"field\">
                        <label for=\"pref_ville\">";
        // line 111
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("City:"), "html", null, true);
        yield "</label>
                        <input type=\"text\" name=\"pref_ville\" id=\"pref_ville\" value=\"";
        // line 112
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["pref"] ?? null), "pref_ville", [], "any", false, false, false, 112), "html", null, true);
        yield "\" maxlength=\"100\"/>
                    </div>
                    <div class=\"field\">
                        <label for=\"pref_region\">";
        // line 115
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("Region:"), "html", null, true);
        yield "</label>
                        <input type=\"text\" name=\"pref_region\" id=pref_region\" value=\"";
        // line 116
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["pref"] ?? null), "pref_region", [], "any", false, false, false, 116), "html", null, true);
        yield "\" maxlength=\"100\"/>
                    </div>
                    <div class=\"field\">
                        <label for=\"pref_pays\">";
        // line 119
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("Country:"), "html", null, true);
        yield "</label>
                        <input type=\"text\" name=\"pref_pays\" id=\"pref_pays\" value=\"";
        // line 120
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["pref"] ?? null), "pref_pays", [], "any", false, false, false, 120), "html", null, true);
        yield "\" maxlength=\"50\"/>
                    </div>
                    <div class=\"field\">
                        <label for=\"pref_website\">";
        // line 123
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("Website:"), "html", null, true);
        yield "</label>
                        <input type=\"text\" name=\"pref_website\" id=\"pref_website\" value=\"";
        // line 124
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["pref"] ?? null), "pref_website", [], "any", false, false, false, 124), "html", null, true);
        yield "\" maxlength=\"100\"/>
                    </div>
                </div>";
        // line 127
        yield "                <div class=\"column\">
                    <div class=\"field\">
                        <label>
                            ";
        // line 130
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("Postal address:"), "html", null, true);
        yield "
                            <i class=\"circular inverted primary small icon info tooltip\" title=\"";
        // line 131
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("Use either the address setted below or select a staff member to retrieve he's address."), "html", null, true);
        yield "\" aria-hidden=\"true\"></i>
                        </label>
                        <div class=\"inline fields\">
                            <div class=\"field\">
                                <label for=\"pref_postal_address_0\">";
        // line 135
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("from preferences"), "html", null, true);
        yield "</label>
                                <input type=\"radio\" name=\"pref_postal_address\" id=\"pref_postal_address_0\" value=\"";
        // line 136
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::constant("Galette\\Core\\Preferences::POSTAL_ADDRESS_FROM_PREFS"), "html", null, true);
        yield "\" ";
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["pref"] ?? null), "pref_postal_address", [], "any", false, false, false, 136) == Twig\Extension\CoreExtension::constant("Galette\\Core\\Preferences::POSTAL_ADDRESS_FROM_PREFS"))) {
            yield "checked=\"checked\"";
        }
        yield "/>
                            </div>
                            <div class=\"field\">
                                <label for=\"pref_postal_address_1\">";
        // line 139
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("from a staff user"), "html", null, true);
        yield "</label>
                                <input type=\"radio\" name=\"pref_postal_address\" id=\"pref_postal_address_1\" value=\"";
        // line 140
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::constant("Galette\\Core\\Preferences::POSTAL_ADDRESS_FROM_STAFF"), "html", null, true);
        yield "\" ";
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["pref"] ?? null), "pref_postal_address", [], "any", false, false, false, 140) == Twig\Extension\CoreExtension::constant("Galette\\Core\\Preferences::POSTAL_ADDRESS_FROM_STAFF"))) {
            yield "checked=\"checked\"";
        }
        yield "/>
                            </div>
                        </div>
                        <label for=\"pref_postal_staff_member\">";
        // line 143
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("Staff member"), "html", null, true);
        yield "</label>
                        <select name=\"pref_postal_staff_member\" id=\"pref_postal_staff_member\" class=\"ui search dropdown\">
                            <option value=\"-1\">";
        // line 145
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("-- Choose a staff member --"), "html", null, true);
        yield "</option>
                        ";
        // line 146
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["staff_members"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["staff"]) {
            // line 147
            yield "                            <option value=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["staff"], "id", [], "any", false, false, false, 147), "html", null, true);
            yield "\"";
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["staff"], "id", [], "any", false, false, false, 147) == CoreExtension::getAttribute($this->env, $this->source, ($context["pref"] ?? null), "pref_postal_staff_member", [], "any", false, false, false, 147))) {
                yield " selected=\"selected\"";
            }
            yield ">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["staff"], "name", [], "any", false, false, false, 147), "html", null, true);
            yield " (";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["staff"], "sstatus", [], "any", false, false, false, 147), "html", null, true);
            yield ")</option>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['staff'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 149
        yield "                        </select>
                    </div>
                    <div class=\"field\">
                        <label for=\"pref_footer\">";
        // line 152
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("Footer text:"), "html", null, true);
        yield "</label>
                        <div class=\"ui right corner labeled input\">
                            <div class=\"ui corner label\">
                                <i class=\"circular inverted primary icon info tooltip\" title=\"";
        // line 155
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("Enter a text (HTML allowed) that will be displayed in the footer of every page"), "html", null, true);
        yield "\" aria-hidden=\"true\"></i>
                            </div>
                            <textarea name=\"pref_footer\" id=\"pref_footer\" rows=\"2\">";
        // line 157
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["pref"] ?? null), "pref_footer", [], "any", false, false, false, 157), "html", null, true);
        yield "</textarea>
                        </div>
                    </div>
                    <div class=\"field\">
                        <label>
                            ";
        // line 162
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("Telemetry date:"), "html", null, true);
        yield "
                            <i class=\"circular inverted primary small icon info tooltip\" title=\"";
        // line 163
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("Last telemetry sent date."), "html", null, true);
        yield "\" aria-hidden=\"true\"></i>
                        </label>
                        <span>
                            ";
        // line 166
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["preferences"] ?? null), "getTelemetryDate", [], "method", false, false, false, 166), "html", null, true);
        yield "
                           - <a href=\"#\" id=\"telemetry\" class=\"ui labeled icon button\"><i class=\"chart bar icon\" aria-hidden=\"true\"></i> ";
        // line 167
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("send"), "html", null, true);
        yield "</a>
                        </span>
                    </div>
                    <div class=\"field\">
                        <label>
                            ";
        // line 172
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("Registration date:"), "html", null, true);
        yield "
                            <i class=\"circular inverted primary small icon info tooltip\" title=\"";
        // line 173
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("Date on which you registered your Galette instance."), "html", null, true);
        yield "\" aria-hidden=\"true\"></i>
                        </label>
                        <span>
                            ";
        // line 176
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["pref"] ?? null), "pref_registration_date", [], "any", false, false, false, 176)) {
            // line 177
            yield "                                ";
            $context["regtxt"] = $this->env->getFunction('_T')->getCallable()("Update your information");
            // line 178
            yield "                                ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["preferences"] ?? null), "getRegistrationDate", [], "method", false, false, false, 178), "html", null, true);
            yield "
                            ";
        } else {
            // line 180
            yield "                                ";
            $context["regtxt"] = $this->env->getFunction('_T')->getCallable()("Register");
            // line 181
            yield "                                ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("Not registered"), "html", null, true);
            yield "
                            ";
        }
        // line 183
        yield "                            - <a href=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::constant("GALETTE_TELEMETRY_URI"), "html", null, true);
        yield "reference?showmodal&uuid=";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["pref"] ?? null), "pref_registration_uuid", [], "any", false, false, false, 183), "html", null, true);
        yield "\" id=\"register\" target=\"_blank\" class=\"ui labeled icon button\"><i class=\"pen alternate icon\" aria-hidden=\"true\"></i>";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["regtxt"] ?? null), "html", null, true);
        yield "</a>
                        </span>
                    </div>
                    <div class=\"field inline\">
                        <div class=\"ui right aligned toggle checkbox\">
                            <input type=\"checkbox\" name=\"pref_noindex\" id=\"pref_noindex\" value=\"1\"";
        // line 188
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["pref"] ?? null), "pref_noindex", [], "any", false, false, false, 188)) {
            yield " checked=\"checked\"";
        }
        yield "/>
                            <label for=\"pref_noindex\">";
        // line 189
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("Prevent search engines indexation"), "html", null, true);
        yield "</label>
                        </div>
                    </div>

                </div>";
        // line 194
        yield "            </div>";
        // line 195
        yield "        </div>";
        // line 196
        yield "        ";
        $context["socials"] = CoreExtension::getAttribute($this->env, $this->source, ($context["preferences"] ?? null), "socials", [], "any", false, false, false, 196);
        // line 197
        yield "        ";
        yield from         $this->loadTemplate("elements/edit_socials.html.twig", "pages/preferences.html.twig", 197)->unwrap()->yield(CoreExtension::merge($context, ["tabbed" => true]));
        // line 198
        yield "        <div class=\"ui";
        yield (((($context["tab"] ?? null) == "parameters")) ? (" active") : (""));
        yield " tab segment\" data-tab=\"parameters\">
            <div class=\"ui stackable two column grid\">
                <div class=\"column\">
                    <div class=\"";
        // line 201
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["required"] ?? null), "pref_lang", [], "any", true, true, false, 201) && (CoreExtension::getAttribute($this->env, $this->source, ($context["required"] ?? null), "pref_lang", [], "any", false, false, false, 201) == 1))) {
            yield "required ";
        }
        yield "field\">
                        <label for=\"pref_lang\" >";
        // line 202
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("Default language:"), "html", null, true);
        yield "</label>
                        <select name=\"pref_lang\" id=\"pref_lang\" class=\"lang ui search dropdown\"";
        // line 203
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["required"] ?? null), "pref_lang", [], "any", true, true, false, 203) && (CoreExtension::getAttribute($this->env, $this->source, ($context["required"] ?? null), "pref_lang", [], "any", false, false, false, 203) == 1))) {
            yield " required=\"required\"";
        }
        yield ">
        ";
        // line 204
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["languages"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["langue"]) {
            // line 205
            yield "                            <option value=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["langue"], "getID", [], "method", false, false, false, 205), "html", null, true);
            yield "\" ";
            if ((CoreExtension::getAttribute($this->env, $this->source, ($context["pref"] ?? null), "pref_lang", [], "any", false, false, false, 205) == CoreExtension::getAttribute($this->env, $this->source, $context["langue"], "getID", [], "method", false, false, false, 205))) {
                yield "selected=\"selected\"";
            }
            yield ">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::capitalize($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["langue"], "getName", [], "method", false, false, false, 205)), "html", null, true);
            yield "</option>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['langue'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 207
        yield "                        </select>
                    </div>
                    ";
        // line 217
        yield "                    <div class=\"";
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["required"] ?? null), "pref_numrows", [], "any", true, true, false, 217) && (CoreExtension::getAttribute($this->env, $this->source, ($context["required"] ?? null), "pref_numrows", [], "any", false, false, false, 217) == 1))) {
            yield "required ";
        }
        yield "field\">
                        <label for=\"pref_numrows\">";
        // line 218
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("Lines / Page:"), "html", null, true);
        yield "</label>
                        <select name=\"pref_numrows\" id=\"pref_numrows\" class=\"ui search dropdown\"";
        // line 219
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["required"] ?? null), "pref_numrows", [], "any", true, true, false, 219) && (CoreExtension::getAttribute($this->env, $this->source, ($context["required"] ?? null), "pref_numrows", [], "any", false, false, false, 219) == 1))) {
            yield " required=\"required\"";
        }
        yield ">
                            ";
        // line 220
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["pref_numrows_options"] ?? null));
        foreach ($context['_seq'] as $context["key"] => $context["value"]) {
            // line 221
            yield "                                <option value=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["key"], "html", null, true);
            yield "\"";
            if (($context["key"] == CoreExtension::getAttribute($this->env, $this->source, ($context["pref"] ?? null), "pref_numrows", [], "any", false, false, false, 221))) {
                yield " selected=\"selected\"";
            }
            yield ">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["value"], "html", null, true);
            yield "</option>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['value'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 223
        yield "                        </select>
                    </div>
                    <div class=\"field\">
                        <label for=\"pref_redirect_on_create\">";
        // line 226
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("After member creation:"), "html", null, true);
        yield "</label>
                        <select name=\"pref_redirect_on_create\" id=\"pref_redirect_on_create\" class=\"ui search dropdown\">
                            <option value=\"";
        // line 228
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::constant("Galette\\Entity\\Adherent::AFTER_ADD_DEFAULT"), "html", null, true);
        yield "\"";
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["pref"] ?? null), "pref_redirect_on_create", [], "any", false, false, false, 228) == Twig\Extension\CoreExtension::constant("Galette\\Entity\\Adherent::AFTER_ADD_DEFAULT"))) {
            yield " selected=\"selected\"";
        }
        yield ">";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("create a new contribution (default action)"), "html", null, true);
        yield "</option>
                            <option value=\"";
        // line 229
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::constant("Galette\\Entity\\Adherent::AFTER_ADD_TRANS"), "html", null, true);
        yield "\"";
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["pref"] ?? null), "pref_redirect_on_create", [], "any", false, false, false, 229) == Twig\Extension\CoreExtension::constant("Galette\\Entity\\Adherent::AFTER_ADD_TRANS"))) {
            yield " selected=\"selected\"";
        }
        yield ">";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("create a new transaction"), "html", null, true);
        yield "</option>
                            <option value=\"";
        // line 230
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::constant("Galette\\Entity\\Adherent::AFTER_ADD_NEW"), "html", null, true);
        yield "\"";
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["pref"] ?? null), "pref_redirect_on_create", [], "any", false, false, false, 230) == Twig\Extension\CoreExtension::constant("Galette\\Entity\\Adherent::AFTER_ADD_NEW"))) {
            yield " selected=\"selected\"";
        }
        yield ">";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("create another new member"), "html", null, true);
        yield "</option>
                            <option value=\"";
        // line 231
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::constant("Galette\\Entity\\Adherent::AFTER_ADD_SHOW"), "html", null, true);
        yield "\"";
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["pref"] ?? null), "pref_redirect_on_create", [], "any", false, false, false, 231) == Twig\Extension\CoreExtension::constant("Galette\\Entity\\Adherent::AFTER_ADD_SHOW"))) {
            yield " selected=\"selected\"";
        }
        yield ">";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("show member"), "html", null, true);
        yield "</option>
                            <option value=\"";
        // line 232
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::constant("Galette\\Entity\\Adherent::AFTER_ADD_LIST"), "html", null, true);
        yield "\"";
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["pref"] ?? null), "pref_redirect_on_create", [], "any", false, false, false, 232) == Twig\Extension\CoreExtension::constant("Galette\\Entity\\Adherent::AFTER_ADD_LIST"))) {
            yield " selected=\"selected\"";
        }
        yield ">";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("go to members list"), "html", null, true);
        yield "</option>
                            <option value=\"";
        // line 233
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::constant("Galette\\Entity\\Adherent::AFTER_ADD_HOME"), "html", null, true);
        yield "\"";
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["pref"] ?? null), "pref_redirect_on_create", [], "any", false, false, false, 233) == Twig\Extension\CoreExtension::constant("Galette\\Entity\\Adherent::AFTER_ADD_HOME"))) {
            yield " selected=\"selected\"";
        }
        yield ">";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("go to main page"), "html", null, true);
        yield "</option>
                        </select>
                    </div>
                    <div class=\"";
        // line 236
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["required"] ?? null), "pref_log", [], "any", true, true, false, 236) && (CoreExtension::getAttribute($this->env, $this->source, ($context["required"] ?? null), "pref_log", [], "any", false, false, false, 236) == 1))) {
            yield "required ";
        }
        yield "field\">
                        <label for=\"pref_log\">";
        // line 237
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("Logging level:"), "html", null, true);
        yield "</label>
                        <select name=\"pref_log\" id=\"pref_log\" class=\"ui search dropdown\"";
        // line 238
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["required"] ?? null), "pref_log", [], "any", true, true, false, 238) && (CoreExtension::getAttribute($this->env, $this->source, ($context["required"] ?? null), "pref_log", [], "any", false, false, false, 238) == 1))) {
            yield " required=\"required\"";
        }
        yield ">
                            <option value=\"";
        // line 239
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::constant("Galette\\Core\\Preferences::LOG_DISABLED"), "html", null, true);
        yield "\" ";
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["pref"] ?? null), "pref_log", [], "any", false, false, false, 239) == Twig\Extension\CoreExtension::constant("Galette\\Core\\Preferences::LOG_DISABLED"))) {
            yield "selected=\"selected\"";
        }
        yield ">";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("Disabled"), "html", null, true);
        yield "</option>
                            <option value=\"";
        // line 240
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::constant("Galette\\Core\\Preferences::LOG_ENABLED"), "html", null, true);
        yield "\" ";
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["pref"] ?? null), "pref_log", [], "any", false, false, false, 240) == Twig\Extension\CoreExtension::constant("Galette\\Core\\Preferences::LOG_ENABLED"))) {
            yield "selected=\"selected\"";
        }
        yield ">";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("Enabled"), "html", null, true);
        yield "</option>
                        </select>
                    </div>
                    <div class=\"field\">
                        <label for=\"pref_filter_account\">";
        // line 244
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("Default account filter:"), "html", null, true);
        yield "</label>
                        <select name=\"pref_filter_account\" id=\"pref_filter_account\" class=\"ui search dropdown\">
                            ";
        // line 246
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["accounts_options"] ?? null));
        foreach ($context['_seq'] as $context["key"] => $context["value"]) {
            // line 247
            yield "                                <option value=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["key"], "html", null, true);
            yield "\"";
            if (($context["key"] == CoreExtension::getAttribute($this->env, $this->source, ($context["pref"] ?? null), "pref_filter_account", [], "any", false, false, false, 247))) {
                yield " selected=\"selected\"";
            }
            yield ">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["value"], "html", null, true);
            yield "</option>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['value'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 249
        yield "                        </select>
                    </div>
                    <div class=\"field\">
                        <label for=\"pref_default_paymenttype\">";
        // line 252
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("Default payment type:"), "html", null, true);
        yield "</label>
                        <select name=\"pref_default_paymenttype\" id=\"pref_default_paymenttype\" class=\"ui search dropdown\">
                            ";
        // line 254
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["paymenttypes"] ?? null));
        foreach ($context['_seq'] as $context["key"] => $context["value"]) {
            // line 255
            yield "                                <option value=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["key"], "html", null, true);
            yield "\"";
            if (($context["key"] == CoreExtension::getAttribute($this->env, $this->source, ($context["pref"] ?? null), "pref_default_paymenttype", [], "any", false, false, false, 255))) {
                yield " selected=\"selected\"";
            }
            yield ">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["value"], "html", null, true);
            yield "</option>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['value'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 257
        yield "                        </select>
                    </div>
                </div>";
        // line 260
        yield "                <div class=\"column\">
                    <div class=\"field inline\">
                        <div class=\"ui right aligned toggle checkbox\">
                            <input type=\"checkbox\" name=\"pref_bool_publicpages\" id=\"pref_bool_publicpages\" value=\"1\" ";
        // line 263
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["pref"] ?? null), "pref_bool_publicpages", [], "any", false, false, false, 263)) {
            yield " checked=\"checked\"";
        }
        yield "/>
                            <label for=\"pref_bool_publicpages\">";
        // line 264
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("Public pages enabled?"), "html", null, true);
        yield "</label>
                        </div>
                    </div>
                    <div id=\"publicpages_visibility\" class=\"field";
        // line 267
        if ( !CoreExtension::getAttribute($this->env, $this->source, ($context["pref"] ?? null), "pref_bool_publicpages", [], "any", false, false, false, 267)) {
            yield " displaynone";
        }
        yield "\">
                        <label for=\"pref_publicpages_visibility\">";
        // line 268
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("Show public pages for"), "html", null, true);
        yield "</label>
                        <select name=\"pref_publicpages_visibility\" id=\"pref_publicpages_visibility\" class=\"ui search dropdown\">
                            <option value=\"";
        // line 270
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::constant("Galette\\Core\\Preferences::PUBLIC_PAGES_VISIBILITY_PUBLIC"), "html", null, true);
        yield "\"";
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["pref"] ?? null), "pref_publicpages_visibility", [], "any", false, false, false, 270) == Twig\Extension\CoreExtension::constant("Galette\\Core\\Preferences::PUBLIC_PAGES_VISIBILITY_PUBLIC"))) {
            yield " selected=\"selected\"";
        }
        yield ">";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("Everyone"), "html", null, true);
        yield "</option>
                            <option value=\"";
        // line 271
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::constant("Galette\\Core\\Preferences::PUBLIC_PAGES_VISIBILITY_RESTRICTED"), "html", null, true);
        yield "\"";
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["pref"] ?? null), "pref_publicpages_visibility", [], "any", false, false, false, 271) == Twig\Extension\CoreExtension::constant("Galette\\Core\\Preferences::PUBLIC_PAGES_VISIBILITY_RESTRICTED"))) {
            yield " selected=\"selected\"";
        }
        yield ">";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("Up to date members"), "html", null, true);
        yield "</option>
                            <option value=\"";
        // line 272
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::constant("Galette\\Core\\Preferences::PUBLIC_PAGES_VISIBILITY_PRIVATE"), "html", null, true);
        yield "\"";
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["pref"] ?? null), "pref_publicpages_visibility", [], "any", false, false, false, 272) == Twig\Extension\CoreExtension::constant("Galette\\Core\\Preferences::PUBLIC_PAGES_VISIBILITY_PRIVATE"))) {
            yield " selected=\"selected\"";
        }
        yield ">";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("Admin and staff only"), "html", null, true);
        yield "</option>
                        </select>
                    </div>
                    <div class=\"field inline\">
                        <div class=\"ui right aligned toggle checkbox\">
                            <input type=\"checkbox\" name=\"pref_force_picture_ratio\" id=\"pref_force_picture_ratio\" value=\"1\" ";
        // line 277
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["pref"] ?? null), "pref_force_picture_ratio", [], "any", false, false, false, 277) == 1)) {
            yield "checked=\"checked\"";
        }
        yield "/>
                            <label for=\"pref_force_picture_ratio\">";
        // line 278
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("Force member picture ratio"), "html", null, true);
        yield "</label>
                        </div>
                        <i class=\"tooltip circular inverted primary small icon info\" data-html=\"";
        // line 280
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("If checked, the members's picture will be resized and cropped to the ratio selected below."), "html", null, true);
        yield "\" data-variation=\"inverted wide\" aria-hidden=\"true\"></i>
                    </div>
                    <div id=\"pref_member_picture_ratio_field\" class=\"inline field";
        // line 282
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["pref"] ?? null), "pref_force_picture_ratio", [], "any", false, false, false, 282) != 1)) {
            yield " displaynone";
        }
        yield "\">
                        <label for=\"pref_member_picture_ratio\">";
        // line 283
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("Select a ratio"), "html", null, true);
        yield "</label>
                        <select name=\"pref_member_picture_ratio\" id=\"pref_member_picture_ratio\" class=\"ui dropdown\">
                            <option value=\"square_ratio\"";
        // line 285
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["pref"] ?? null), "pref_member_picture_ratio", [], "any", false, false, false, 285) == "square_ratio")) {
            yield " selected=\"selected\"";
        }
        yield ">";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("Square (1:1)"), "html", null, true);
        yield "</option>
                            <option value=\"portrait_ratio\"";
        // line 286
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["pref"] ?? null), "pref_member_picture_ratio", [], "any", false, false, false, 286) == "portrait_ratio")) {
            yield " selected=\"selected\"";
        }
        yield ">";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("Portrait (3:4)"), "html", null, true);
        yield "</option>
                            <option value=\"landscape_ratio\"";
        // line 287
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["pref"] ?? null), "pref_member_picture_ratio", [], "any", false, false, false, 287) == "landscape_ratio")) {
            yield " selected=\"selected\"";
        }
        yield ">";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("Landscape (4:3)"), "html", null, true);
        yield "</option>
                        </select>
                    </div>
                    <div class=\"field inline\">
                        <div class=\"ui right aligned toggle checkbox\">
                            <input type=\"checkbox\" name=\"pref_bool_selfsubscribe\" id=\"pref_bool_selfsubscribe\" value=\"1\"";
        // line 292
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["pref"] ?? null), "pref_bool_selfsubscribe", [], "any", false, false, false, 292)) {
            yield " checked=\"checked\"";
        }
        yield "/>
                            <label for=\"pref_bool_selfsubscribe\">";
        // line 293
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("Self subscription enabled?"), "html", null, true);
        yield "</label>
                        </div>
                    </div>
                    <div id=\"pref_member_form_grid_field\" class=\"inline field\">
                        <label for=\"pref_member_form_grid\">";
        // line 297
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("Number of columns on the member form"), "html", null, true);
        yield "</label>
                        <select name=\"pref_member_form_grid\" id=\"pref_member_form_grid\" class=\"ui dropdown\">
                            <option value=\"one\"";
        // line 299
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["pref"] ?? null), "pref_member_form_grid", [], "any", false, false, false, 299) == "one")) {
            yield " selected=\"selected\"";
        }
        yield ">1</option>
                            <option value=\"two\"";
        // line 300
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["pref"] ?? null), "pref_member_form_grid", [], "any", false, false, false, 300) == "two")) {
            yield " selected=\"selected\"";
        }
        yield ">2</option>
                            <option value=\"three\"";
        // line 301
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["pref"] ?? null), "pref_member_form_grid", [], "any", false, false, false, 301) == "three")) {
            yield " selected=\"selected\"";
        }
        yield ">3</option>
                        </select>
                    </div>
                    <div class=\"field\">
                        <label for=\"pref_new_contrib_script\">";
        // line 305
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("Post new contribution script URI"), "html", null, true);
        yield "</label>
                        <div class=\"ui right corner labeled input\">
                            <div class=\"ui corner label\">
                                <i class=\"circular inverted primary icon info tooltip\" data-html=\"";
        // line 308
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("Enter a script URI that would be called after adding a new contribution.<br/>Script URI must be prefixed by one of '<em>galette://</em>' for Galette internal call. '<em>file://</em>' for a direct file call, '<em>get://</em>' or '<em>post://</em>' for HTTP calls (prefix will be replaced by http:// in those cases)."), "html", null, true);
        yield "\" aria-hidden=\"true\"></i>
                            </div>
                            <input type=\"text\" name=\"pref_new_contrib_script\" id=\"pref_new_contrib_script\" value=\"";
        // line 310
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["pref"] ?? null), "pref_new_contrib_script", [], "any", false, false, false, 310), "html", null, true);
        yield "\"/>
                        </div>
                    </div>
                    <div class=\"field\">
                        <label for=\"pref_rss_url\">";
        // line 314
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("RSS feed URL"), "html", null, true);
        yield "</label>
                        <div class=\"ui right corner labeled input\">
                            <div class=\"ui corner label\">
                                <i class=\"circular inverted primary icon info tooltip\" title=\"";
        // line 317
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("Enter the full URL to the RSS feed. It will be displayed on Galette desktop."), "html", null, true);
        yield "\" aria-hidden=\"true\"></i>
                            </div>
                            <input type=\"text\" name=\"pref_rss_url\" id=\"pref_rss_url\" value=\"";
        // line 319
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["pref"] ?? null), "pref_rss_url", [], "any", false, false, false, 319), "html", null, true);
        yield "\"/>
                        </div>
                    </div>
                    <div class=\"field\">
                        <label for=\"pref_galette_url\">";
        // line 323
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("Galette base URL"), "html", null, true);
        yield "</label>
                        <div class=\"ui right corner labeled input\">
                            <div class=\"ui corner label\">
                                <i class=\"circular inverted primary icon info tooltip\" data-html=\"";
        // line 326
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::replace($this->env->getFunction('_T')->getCallable()("Enter the base URL to your Galette instance. You should only change this parameter if the current page URL is not:<br/>%galette_url"), ["%galette_url" => (CoreExtension::getAttribute($this->env, $this->source, ($context["preferences"] ?? null), "getDefaultURL", [], "method", false, false, false, 326) . $this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("preferences"))]), "html", null, true);
        yield "\" aria-hidden=\"true\"></i>
                            </div>
                            <input type=\"text\" name=\"pref_galette_url\" id=\"pref_galette_url\" placeholder=\"";
        // line 328
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["preferences"] ?? null), "getDefaultURL", [], "method", false, false, false, 328), "html", null, true);
        yield "\" value=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["pref"] ?? null), "pref_galette_url", [], "any", false, false, false, 328), "html", null, true);
        yield "\"/>
                        </div>
                    </div>
                    <div class=\"field inline\">
                        <div class=\"ui right aligned toggle checkbox\">
                            <input type=\"checkbox\" name=\"pref_show_id\" id=\"pref_show_id\" value=\"1\" ";
        // line 333
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["pref"] ?? null), "pref_show_id", [], "any", false, false, false, 333)) {
            yield " checked=\"checked\"";
        }
        yield "/>
                            <label for=\"pref_show_id\">";
        // line 334
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("Show identifiers"), "html", null, true);
        yield "</label>
                        </div>
                        <i class=\"circular small inverted primary icon info tooltip\" title=\"";
        // line 336
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("Display database identifiers in related windows"), "html", null, true);
        yield "\" aria-hidden=\"true\"></i>
                    </div>
                </div>";
        // line 339
        yield "            </div>";
        // line 340
        yield "            <div class=\"ui stackable two column grid\">
                <div class=\"column\">
                    <div class=\"field";
        // line 342
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["required"] ?? null), "pref_statut", [], "any", true, true, false, 342) && (CoreExtension::getAttribute($this->env, $this->source, ($context["required"] ?? null), "pref_statut", [], "any", false, false, false, 342) == 1))) {
            yield " required";
        }
        yield "\">
                        <label for=\"pref_statut\">";
        // line 343
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("Default membership status:"), "html", null, true);
        yield "</label>
                        <select name=\"pref_statut\" id=\"pref_statut\" class=\"ui search dropdown\"";
        // line 344
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["required"] ?? null), "pref_statut", [], "any", true, true, false, 344) && (CoreExtension::getAttribute($this->env, $this->source, ($context["required"] ?? null), "pref_statut", [], "any", false, false, false, 344) == 1))) {
            yield " required=\"required\"";
        }
        yield ">
                            ";
        // line 345
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["statuts"] ?? null));
        foreach ($context['_seq'] as $context["key"] => $context["value"]) {
            // line 346
            yield "                                <option value=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["key"], "html", null, true);
            yield "\"";
            if (($context["key"] == CoreExtension::getAttribute($this->env, $this->source, ($context["pref"] ?? null), "pref_statut", [], "any", false, false, false, 346))) {
                yield " selected=\"selected\"";
            }
            yield ">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["value"], "html", null, true);
            yield "</option>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['value'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 348
        yield "                        </select>
                    </div>
                    <div class=\"field\">
                        <label for=\"pref_membership_ext\">";
        // line 351
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("Default membership extension:"), "html", null, true);
        yield "</label>
                        <div class=\"ui right labeled input\">
                            <input type=\"text\" name=\"pref_membership_ext\" id=\"pref_membership_ext\" value=\"";
        // line 353
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["pref"] ?? null), "pref_membership_ext", [], "any", false, false, false, 353), "html", null, true);
        yield "\" maxlength=\"2\"/>
                            <div class=\"ui basic label\">
                                ";
        // line 355
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("(Months)"), "html", null, true);
        yield "
                            </div>
                        </div>
                    </div>
                </div>";
        // line 360
        yield "                <div class=\"column\">
                    <div class=\"field\">
                        <label for=\"pref_beg_membership\">";
        // line 362
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("Beginning of membership:"), "html", null, true);
        yield "</label>
                        <input type=\"text\" name=\"pref_beg_membership\" id=\"pref_beg_membership\" value=\"";
        // line 363
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["pref"] ?? null), "pref_beg_membership", [], "any", false, false, false, 363), "html", null, true);
        yield "\" maxlength=\"5\"/>
                        <span class=\"exemple\">";
        // line 364
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("(dd/mm)"), "html", null, true);
        yield "</span>
                    </div>
                    <div class=\"field\">
                        <label for=\"pref_membership_offermonths\">";
        // line 367
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("Number of months offered:"), "html", null, true);
        yield "</label>
                        <div class=\"ui right corner labeled input\">
                            <div class=\"ui corner label\">
                                <i class=\"circular inverted primary icon info tooltip\" data-html=\"";
        // line 370
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("When using the beginning of membership option; you can offer the last months of the year."), "html", null, true);
        yield "<br/>";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("Let's say you offer last 2 months, and have a renewal on 31th of December. All created contributions in current year will be valid until this date, but as of October, they will be valid for the entire next year."), "html", null, true);
        yield "\" aria-hidden=\"true\"></i>
                            </div>
                            <input type=\"number\" name=\"pref_membership_offermonths\" min=\"0\" id=\"pref_membership_offermonths\" value=\"";
        // line 372
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["pref"] ?? null), "pref_membership_offermonths", [], "any", false, false, false, 372), "html", null, true);
        yield "\" maxlength=\"5\"/>
                        </div>
                    </div>
                </div>";
        // line 376
        yield "            </div>";
        // line 377
        yield "        </div>";
        // line 378
        yield "        <div class=\"ui";
        yield (((($context["tab"] ?? null) == "rights")) ? (" active") : (""));
        yield " tab segment\" data-tab=\"rights\">
            <div class=\"ui stackable two column grid\">
                <div class=\"column\">
                    <div class=\"field inline\">
                        <div class=\"ui right aligned toggle checkbox\">
                            <input type=\"checkbox\" name=\"pref_bool_create_member\" id=\"pref_bool_create_member\" value=\"1\" ";
        // line 383
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["pref"] ?? null), "pref_bool_create_member", [], "any", false, false, false, 383) == 1)) {
            yield "checked=\"checked\"";
        }
        yield "/>
                            <label for=\"pref_bool_create_member\">";
        // line 384
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("Can members create child?"), "html", null, true);
        yield "</label>
                        </div>
                    </div>
                    <div class=\"field inline\">
                        <div class=\"ui right aligned toggle checkbox\">
                            <input type=\"checkbox\" name=\"pref_bool_groupsmanagers_edit_groups\" id=\"pref_bool_groupsmanagers_edit_groups\" value=\"1\" ";
        // line 389
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["pref"] ?? null), "pref_bool_groupsmanagers_edit_groups", [], "any", false, false, false, 389) == 1)) {
            yield "checked=\"checked\"";
        }
        yield "/>
                            <label for=\"pref_bool_groupsmanagers_edit_groups\">";
        // line 390
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("Can group managers edit their groups?"), "html", null, true);
        yield "</label>
                        </div>
                    </div>
                    <div class=\"field inline\">
                        <div class=\"ui right aligned toggle checkbox\">
                            <input type=\"checkbox\" name=\"pref_bool_groupsmanagers_create_member\" id=\"pref_bool_groupsmanagers_create_member\" value=\"1\" ";
        // line 395
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["pref"] ?? null), "pref_bool_groupsmanagers_create_member", [], "any", false, false, false, 395) == 1)) {
            yield "checked=\"checked\"";
        }
        yield "/>
                            <label for=\"pref_bool_groupsmanagers_create_member\">";
        // line 396
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("Can group managers create members?"), "html", null, true);
        yield "</label>
                        </div>
                    </div>
                    <div class=\"field inline\">
                        <div class=\"ui right aligned toggle checkbox\">
                            <input type=\"checkbox\" name=\"pref_bool_groupsmanagers_edit_member\" id=\"pref_bool_groupsmanagers_edit_member\" value=\"1\" ";
        // line 401
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["pref"] ?? null), "pref_bool_groupsmanagers_edit_member", [], "any", false, false, false, 401) == 1)) {
            yield "checked=\"checked\"";
        }
        yield "/>
                            <label for=\"pref_bool_groupsmanagers_edit_member\">";
        // line 402
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("Can group managers edit members?"), "html", null, true);
        yield "</label>
                        </div>
                    </div>
                    <div class=\"field inline\">
                        <div class=\"ui right aligned toggle checkbox\">
                            <input type=\"checkbox\" name=\"pref_bool_groupsmanagers_mailings\" id=\"pref_bool_groupsmanagers_mailings\" value=\"1\" ";
        // line 407
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["pref"] ?? null), "pref_bool_groupsmanagers_mailings", [], "any", false, false, false, 407) == 1)) {
            yield "checked=\"checked\"";
        }
        yield "/>
                            <label for=\"pref_bool_groupsmanagers_mailings\">";
        // line 408
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("Can group managers send mailings?"), "html", null, true);
        yield "</label>
                        </div>
                    </div>
                    <div class=\"field inline\">
                        <div class=\"ui right aligned toggle checkbox\">
                            <input type=\"checkbox\" name=\"pref_bool_groupsmanagers_exports\" id=\"pref_bool_groupsmanagers_exports\" value=\"1\" ";
        // line 413
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["pref"] ?? null), "pref_bool_groupsmanagers_exports", [], "any", false, false, false, 413) == 1)) {
            yield "checked=\"checked\"";
        }
        yield "/>
                            <label for=\"pref_bool_groupsmanagers_exports\">";
        // line 414
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("Can group managers do exports?"), "html", null, true);
        yield "</label>
                        </div>
                        <i class=\"circular small inverted primary icon info tooltip\" title=\"";
        // line 416
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("Groups managers will be allowed to export members as csv, pdf cards, attendence sheetss and groups pdf"), "html", null, true);
        yield "\" aria-hidden=\"true\"></i>
                    </div>
                </div>
            </div>
        </div>";
        // line 421
        yield "        <div class=\"ui";
        yield (((($context["tab"] ?? null) == "mail")) ? (" active") : (""));
        yield " tab segment\" data-tab=\"mail\">
    ";
        // line 422
        if ($this->env->getFunction('callstatic')->getCallable()("\\Galette\\Core\\Galette", "isDemo")) {
            // line 423
            yield "            <div class=\"ui icon negative message\">
                <i class=\"ban icon\" aria-hidden=\"true\"></i>
                <div class=\"content\">
                    ";
            // line 426
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("Application runs under demo mode. This functionnality is not enabled, sorry."), "html", null, true);
            yield "
                </div>
            </div>
    ";
        } else {
            // line 430
            yield "            <div class=\"ui stackable two column grid\">
                <div class=\"column\">
                    <div class=\"field\">
                        <label for=\"pref_email_nom\">";
            // line 433
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("Sender name:"), "html", null, true);
            yield "</label>
                        <input type=\"text\" name=\"pref_email_nom\" id=\"pref_email_nom\" value=\"";
            // line 434
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["pref"] ?? null), "pref_email_nom", [], "any", false, false, false, 434), "html", null, true);
            yield "\" maxlength=\"50\"/>
                    </div>
                    <div class=\"field\">
                        <label for=\"pref_email\">";
            // line 437
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("Sender Email:"), "html", null, true);
            yield "</label>
                        <input type=\"text\" name=\"pref_email\" id=\"pref_email\" value=\"";
            // line 438
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["pref"] ?? null), "pref_email", [], "any", false, false, false, 438), "html", null, true);
            yield "\" maxlength=\"100\" size=\"30\"/>
                    </div>
                    <div class=\"field\">
                        <label for=\"pref_email_reply_to\">";
            // line 441
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("Reply-To Email:"), "html", null, true);
            yield "</label>
                        <div class=\"ui right corner labeled input\">
                            <div class=\"ui corner label\">
                                <i class=\"circular inverted primary icon info tooltip\" title=\"";
            // line 444
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("Leave empty to use Sender Email as reply address"), "html", null, true);
            yield "\" aria-hidden=\"true\"></i>
                            </div>
                            <input type=\"text\" name=\"pref_email_reply_to\" id=\"pref_email_reply_to\" value=\"";
            // line 446
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["pref"] ?? null), "pref_email_reply_to", [], "any", false, false, false, 446), "html", null, true);
            yield "\" maxlength=\"100\" size=\"30\"/>
                        </div>
                    </div>
                    <div class=\"field\">
        ";
            // line 450
            $context["pref_email_newadh"] = Twig\Extension\CoreExtension::join(CoreExtension::getAttribute($this->env, $this->source, ($context["preferences"] ?? null), "vpref_email_newadh", [], "any", false, false, false, 450), ",");
            // line 451
            yield "                        <label for=\"pref_email_newadh\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("Members administrator's Email:"), "html", null, true);
            yield "</label>
                        <div class=\"ui right corner labeled input\">
                            <div class=\"ui corner label\">
                                <i class=\"circular inverted primary icon info tooltip\" title=\"";
            // line 454
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("Recipient of new online registation and edition emails"), "html", null, true);
            yield "\" aria-hidden=\"true\"></i>
                            </div>
                            <input type=\"text\" name=\"pref_email_newadh\" id=\"pref_email_newadh\" value=\"";
            // line 456
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["pref_email_newadh"] ?? null), "html", null, true);
            yield "\" maxlength=\"100\" size=\"30\"/>
                        </div>
                        <span class=\"exemple\">";
            // line 458
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("(You can enter several emails separated with a comma. First address will be the default one.)"), "html", null, true);
            yield "</span>
                    </div>
                    <div class=\"field inline\">
                        <div class=\"ui right aligned toggle checkbox\">
                            <input type=\"checkbox\" name=\"pref_bool_mailadh\" id=\"pref_bool_mailadh\" value=\"1\" ";
            // line 462
            if ((CoreExtension::getAttribute($this->env, $this->source, ($context["pref"] ?? null), "pref_bool_mailadh", [], "any", false, false, false, 462) == 1)) {
                yield "checked=\"checked\"";
            }
            yield "/>
                            <label for=\"pref_bool_mailadh\">";
            // line 463
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("Send email to administrators?"), "html", null, true);
            yield "</label>
                        </div>
                        <i class=\"circular small inverted primary icon info tooltip\" title=\"";
            // line 465
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("Sends an email each time a new member registers online or edit his/her account"), "html", null, true);
            yield "\" aria-hidden=\"true\"></i>
                    </div>
                    <div class=\"field inline\">
                        <div class=\"ui right aligned toggle checkbox\">
                            <input type=\"checkbox\" name=\"pref_bool_wrap_mails\" id=\"pref_bool_wrap_mails\" value=\"1\" ";
            // line 469
            if ((CoreExtension::getAttribute($this->env, $this->source, ($context["pref"] ?? null), "pref_bool_wrap_mails", [], "any", false, false, false, 469) == 1)) {
                yield "checked=\"checked\"";
            }
            yield "/>
                            <label for=\"pref_bool_wrap_mails\">";
            // line 470
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("Wrap emails text?"), "html", null, true);
            yield "</label>
                        </div>
                        <i class=\"circular small inverted primary icon info tooltip\" title=\"";
            // line 472
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("Automatically wrap emails texts before sending. Make sure to wrap yourself if you disable that. Please note that current editing mailing will not be affected by a change."), "html", null, true);
            yield "\" aria-hidden=\"true\"></i>
                    </div>
                    <div class=\"field inline\">
                        <div class=\"ui right aligned toggle checkbox\">
                            <input type=\"checkbox\" name=\"pref_bool_mailowner\" id=\"pref_bool_mailowner\" value=\"1\" ";
            // line 476
            if ((CoreExtension::getAttribute($this->env, $this->source, ($context["pref"] ?? null), "pref_bool_mailowner", [], "any", false, false, false, 476) == 1)) {
                yield "checked=\"checked\"";
            }
            yield "/>
                            <label for=\"pref_bool_mailowner\">";
            // line 477
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("Send email to members?"), "html", null, true);
            yield "</label>
                        </div>
                        <i class=\"circular small inverted primary icon info tooltip\" title=\"";
            // line 479
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("Sends an email each time a member card or a contribution has been added or edited. This can be disabled for each case."), "html", null, true);
            yield "\" aria-hidden=\"true\"></i>
                    </div>
                    <div class=\"field inline\">
                        <div class=\"ui right aligned toggle checkbox\">
                            <input type=\"checkbox\" name=\"pref_editor_enabled\" id=\"pref_editor_enabled\" value=\"1\" ";
            // line 483
            if ((CoreExtension::getAttribute($this->env, $this->source, ($context["pref"] ?? null), "pref_editor_enabled", [], "any", false, false, false, 483) == 1)) {
                yield "checked=\"checked\"";
            }
            yield "/>
                            <label for=\"pref_editor_enabled\">";
            // line 484
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("Activate HTML editor?"), "html", null, true);
            yield "</label>
                        </div>
                        <i class=\"circular small inverted primary icon info tooltip\" title=\"";
            // line 486
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("Should HTML editor be activated on page load ?"), "html", null, true);
            yield "\" aria-hidden=\"true\"></i>
                    </div>
                    <div class=\"field mail_sign\">
                        <label for=\"pref_mail_sign\">";
            // line 489
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("Mail signature"), "html", null, true);
            yield "</label>
                        <div class=\"ui right corner labeled input\">
                            <div class=\"ui corner label\" id=\"mail_sign\">
                            </div>
                            <textarea name=\"pref_mail_sign\" id=\"pref_mail_sign\" rows=\"5\">";
            // line 493
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["pref"] ?? null), "pref_mail_sign", [], "any", false, false, false, 493), "html", null, true);
            yield "</textarea>
                        </div>
                    </div>
                </div>";
            // line 497
            yield "                <div class=\"column\">
                    <div class=\"grouped fields\">
                        <label>";
            // line 499
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("Emailing method:"), "html", null, true);
            yield "</label>
                        <div class=\"field\">
                            <div class=\"ui radio checkbox\">
                                <input type=\"radio\" name=\"pref_mail_method\" id=\"no\" value=\"";
            // line 502
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::constant("Galette\\Core\\GaletteMail::METHOD_DISABLED"), "html", null, true);
            yield "\" ";
            if ((CoreExtension::getAttribute($this->env, $this->source, ($context["pref"] ?? null), "pref_mail_method", [], "any", false, false, false, 502) == Twig\Extension\CoreExtension::constant("Galette\\Core\\GaletteMail::METHOD_DISABLED"))) {
                yield "checked=\"checked\"";
            }
            yield "/><label for=\"no\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("Emailing disabled"), "html", null, true);
            yield "</label>
                            </div>
                        </div>
        ";
            // line 505
            if ( !$this->env->getFunction('callstatic')->getCallable()("\\Galette\\Core\\Galette", "isHosted")) {
                // line 506
                yield "                        <div class=\"field\">
                            <div class=\"ui radio checkbox\">
                                <input type=\"radio\" name=\"pref_mail_method\" id=\"php\" value=\"";
                // line 508
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::constant("Galette\\Core\\GaletteMail::METHOD_PHPMAIL"), "html", null, true);
                yield "\" ";
                if ((CoreExtension::getAttribute($this->env, $this->source, ($context["pref"] ?? null), "pref_mail_method", [], "any", false, false, false, 508) == Twig\Extension\CoreExtension::constant("Galette\\Core\\GaletteMail::METHOD_PHPMAIL"))) {
                    yield "checked=\"checked\"";
                }
                yield "/><label for=\"php\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("PHP mail() function"), "html", null, true);
                yield "</label>
                            </div>
                        </div>
        ";
            }
            // line 512
            yield "                        <div class=\"field\">
                            <div class=\"ui radio checkbox\">
                                <input type=\"radio\" name=\"pref_mail_method\" id=\"smtp\" value=\"";
            // line 514
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::constant("Galette\\Core\\GaletteMail::METHOD_SMTP"), "html", null, true);
            yield "\" ";
            if ((CoreExtension::getAttribute($this->env, $this->source, ($context["pref"] ?? null), "pref_mail_method", [], "any", false, false, false, 514) == Twig\Extension\CoreExtension::constant("Galette\\Core\\GaletteMail::METHOD_SMTP"))) {
                yield "checked=\"checked\"";
            }
            yield "/><label for=\"smtp\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("Using a SMTP server (slower)"), "html", null, true);
            yield "</label>
                            </div>
                        </div>
                        <div class=\"field\">
                            <div class=\"ui radio checkbox\">
                                <input type=\"radio\" name=\"pref_mail_method\" id=\"gmail\" value=\"";
            // line 519
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::constant("Galette\\Core\\GaletteMail::METHOD_GMAIL"), "html", null, true);
            yield "\" ";
            if ((CoreExtension::getAttribute($this->env, $this->source, ($context["pref"] ?? null), "pref_mail_method", [], "any", false, false, false, 519) == Twig\Extension\CoreExtension::constant("Galette\\Core\\GaletteMail::METHOD_GMAIL"))) {
                yield "checked=\"checked\"";
            }
            yield "/><label for=\"gmail\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("Using GMAIL as SMTP server (slower)"), "html", null, true);
            yield "</label>
                            </div>
                        </div>
        ";
            // line 522
            if ( !$this->env->getFunction('callstatic')->getCallable()("\\Galette\\Core\\Galette", "isHosted")) {
                // line 523
                yield "                        <div class=\"field\">
                            <div class=\"ui radio checkbox\">
                                <input type=\"radio\" name=\"pref_mail_method\" id=\"sendmail\" value=\"";
                // line 525
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::constant("Galette\\Core\\GaletteMail::METHOD_SENDMAIL"), "html", null, true);
                yield "\" ";
                if ((CoreExtension::getAttribute($this->env, $this->source, ($context["pref"] ?? null), "pref_mail_method", [], "any", false, false, false, 525) == Twig\Extension\CoreExtension::constant("Galette\\Core\\GaletteMail::METHOD_SENDMAIL"))) {
                    yield "checked=\"checked\"";
                }
                yield "/><label for=\"sendmail\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("Using Sendmail server"), "html", null, true);
                yield "</label>
                            </div>
                        </div>
                        <div class=\"field\">
                            <div class=\"ui radio checkbox\">
                                <input type=\"radio\" name=\"pref_mail_method\" id=\"qmail\" value=\"";
                // line 530
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::constant("Galette\\Core\\GaletteMail::METHOD_QMAIL"), "html", null, true);
                yield "\" ";
                if ((CoreExtension::getAttribute($this->env, $this->source, ($context["pref"] ?? null), "pref_mail_method", [], "any", false, false, false, 530) == Twig\Extension\CoreExtension::constant("Galette\\Core\\GaletteMail::METHOD_QMAIL"))) {
                    yield "checked=\"checked\"";
                }
                yield "/><label for=\"qmail\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("Using QMAIL server"), "html", null, true);
                yield "</label>
                            </div>
                        </div>
        ";
            }
            // line 534
            yield "                        <br/>
                        <a
                            href=\"";
            // line 536
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("testEmail"), "html", null, true);
            yield "\"
                            id=\"btnmail\"
                            class=\"ui labeled icon button\"
                        >
                            <i class=\"rocket icon\" aria-hidden=\"true\"></i>
                            ";
            // line 541
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("Test email settings"), "html", null, true);
            yield "
                        </a>
                    </div>
                    <div id=\"smtp_parameters\" class=\"field\">
                        <div class=\"field\">
                            <label for=\"pref_mail_smtp_host\">";
            // line 546
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("SMTP server:"), "html", null, true);
            yield "</label>
                            <input type=\"text\" name=\"pref_mail_smtp_host\" id=\"pref_mail_smtp_host\" value=\"";
            // line 547
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["pref"] ?? null), "pref_mail_smtp_host", [], "any", false, false, false, 547), "html", null, true);
            yield "\" maxlength=\"100\" size=\"30\"/>
                        </div>
                        <div class=\"field\">
                            <label for=\"pref_mail_smtp_port\">";
            // line 550
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("SMTP port:"), "html", null, true);
            yield "</label>
                            <input type=\"text\" name=\"pref_mail_smtp_port\" id=\"pref_mail_smtp_port\" value=\"";
            // line 551
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["pref"] ?? null), "pref_mail_smtp_port", [], "any", false, false, false, 551), "html", null, true);
            yield "\" size=\"10\"/>
                        </div>
                        <div class=\"grouped fields\">
                            <div class=\"field inline\">
                                <div class=\"ui right aligned toggle checkbox\">
                                    <input type=\"checkbox\" name=\"pref_mail_smtp_auth\" id=\"pref_mail_smtp_auth\" value=\"1\" ";
            // line 556
            if ((CoreExtension::getAttribute($this->env, $this->source, ($context["pref"] ?? null), "pref_mail_smtp_auth", [], "any", false, false, false, 556) == 1)) {
                yield "checked=\"checked\"";
            }
            yield "/>
                                    <label for=\"pref_mail_smtp_auth\">";
            // line 557
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("Use SMTP authentication?"), "html", null, true);
            yield "</label>
                                </div>
                                <i class=\"circular small inverted primary icon info tooltip\" title=\"";
            // line 559
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("Would emailing use any SMTP authentication? You'll have to provide username and password below. For GMail, authentication will always be on."), "html", null, true);
            yield "\" aria-hidden=\"true\"></i>
                            </div>
                            <div class=\"field inline\">
                                <div class=\"ui right aligned toggle checkbox\">
                                    <input type=\"checkbox\" name=\"pref_mail_smtp_secure\" id=\"pref_mail_smtp_secure\" value=\"1\" ";
            // line 563
            if ((CoreExtension::getAttribute($this->env, $this->source, ($context["pref"] ?? null), "pref_mail_smtp_secure", [], "any", false, false, false, 563) == 1)) {
                yield "checked=\"checked\"";
            }
            yield "/>
                                    <label for=\"pref_mail_smtp_secure\">";
            // line 564
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("Use TLS for SMTP?"), "html", null, true);
            yield "</label>
                                </div>
                                <i class=\"circular small inverted primary icon info tooltip\" data-html=\"";
            // line 566
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("Do you want to use server's TLS capabilities?<br/>For GMail, this will always be on."), "html", null, true);
            yield "\" aria-hidden=\"true\"></i>
                            </div>
                            <div class=\"field inline\">
                                <div class=\"ui right aligned toggle checkbox\">
                                    <input type=\"checkbox\" name=\"pref_mail_allow_unsecure\" id=\"pref_mail_allow_unsecure\" value=\"1\" ";
            // line 570
            if ((CoreExtension::getAttribute($this->env, $this->source, ($context["pref"] ?? null), "pref_mail_allow_unsecure", [], "any", false, false, false, 570) == 1)) {
                yield "checked=\"checked\"";
            }
            yield "/>
                                    <label for=\"pref_mail_allow_unsecure\">";
            // line 571
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("Allow unsecure TLS?"), "html", null, true);
            yield "</label>
                                </div>
                                <i class=\"circular small inverted primary icon info tooltip\" title=\"";
            // line 573
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("Do you want to allow 'unsecure' connections? This may be usefull if you server uses a self-signed certificate, and on some other cases."), "html", null, true);
            yield "\" aria-hidden=\"true\"></i>
                            </div>
                        </div>
                    </div>
                    <div id=\"smtp_auth\" class=\"field\">
                        <div class=\"field\">
                            <label for=\"pref_mail_smtp_user\">";
            // line 579
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("SMTP (or GMail) user:"), "html", null, true);
            yield "</label>
                            <input type=\"text\" name=\"pref_mail_smtp_user\" id=\"pref_mail_smtp_user\" value=\"";
            // line 580
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["pref"] ?? null), "pref_mail_smtp_user", [], "any", false, false, false, 580), "html", null, true);
            yield "\" maxlength=\"100\" size=\"30\"/>
                        </div>
                        <div class=\"field\">
                            <label for=\"pref_mail_smtp_password\">";
            // line 583
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("SMTP (or GMail) password:"), "html", null, true);
            yield "</label>
                            <input type=\"password\" name=\"pref_mail_smtp_password\" id=\"pref_mail_smtp_password\" value=\"";
            // line 584
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["pref"] ?? null), "pref_mail_smtp_password", [], "any", false, false, false, 584), "html", null, true);
            yield "\" autocomplete=\"off\" maxlength=\"100\" size=\"30\"/>
                        </div>
                    </div>
                </div>";
            // line 588
            yield "            </div>";
            // line 589
            yield "    ";
        }
        // line 590
        yield "        </div>";
        // line 591
        yield "        <div class=\"ui";
        yield (((($context["tab"] ?? null) == "labels")) ? (" active") : (""));
        yield " tab segment\" data-tab=\"labels\">
            <div class=\"ui stackable two column grid\">
                <div class=\"column\">
                    <div class=\"";
        // line 594
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["required"] ?? null), "pref_etiq_marges_v", [], "any", true, true, false, 594) && (CoreExtension::getAttribute($this->env, $this->source, ($context["required"] ?? null), "pref_etiq_marges_v", [], "any", false, false, false, 594) == 1))) {
            yield "required ";
        }
        yield "field\">
                        <label for=\"pref_etiq_marges_v\">";
        // line 595
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("Vertical margins:"), "html", null, true);
        yield "</label>
                        <div class=\"ui right labeled input\">
                            <input type=\"number\" name=\"pref_etiq_marges_v\" id=\"pref_etiq_marges_v\" value=\"";
        // line 597
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["pref"] ?? null), "pref_etiq_marges_v", [], "any", false, false, false, 597), "html", null, true);
        yield "\" maxlength=\"4\"";
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["required"] ?? null), "pref_etiq_marges_v", [], "any", true, true, false, 597) && (CoreExtension::getAttribute($this->env, $this->source, ($context["required"] ?? null), "pref_etiq_marges_v", [], "any", false, false, false, 597) == 1))) {
            yield " required=\"required\"";
        }
        yield "/>
                            <div class=\"ui basic label\">mm</div>
                        </div>
                    </div>
                    <div class=\"";
        // line 601
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["required"] ?? null), "pref_etiq_marges_h", [], "any", true, true, false, 601) && (CoreExtension::getAttribute($this->env, $this->source, ($context["required"] ?? null), "pref_etiq_marges_h", [], "any", false, false, false, 601) == 1))) {
            yield "required ";
        }
        yield "field\">
                        <label for=\"pref_etiq_marges_h\">";
        // line 602
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("Horizontal margins:"), "html", null, true);
        yield "</label>
                        <div class=\"ui right labeled input\">
                            <input type=\"number\" name=\"pref_etiq_marges_h\" id=\"pref_etiq_marges_h\" value=\"";
        // line 604
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["pref"] ?? null), "pref_etiq_marges_h", [], "any", false, false, false, 604), "html", null, true);
        yield "\" maxlength=\"4\"";
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["required"] ?? null), "pref_etiq_marges_h", [], "any", true, true, false, 604) && (CoreExtension::getAttribute($this->env, $this->source, ($context["required"] ?? null), "pref_etiq_marges_h", [], "any", false, false, false, 604) == 1))) {
            yield " required=\"required\"";
        }
        yield "/>
                            <div class=\"ui basic label\">mm</div>
                        </div>
                    </div>
                    <div class=\"";
        // line 608
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["required"] ?? null), "pref_etiq_hspace", [], "any", true, true, false, 608) && (CoreExtension::getAttribute($this->env, $this->source, ($context["required"] ?? null), "pref_etiq_hspace", [], "any", false, false, false, 608) == 1))) {
            yield "required ";
        }
        yield "field\">
                        <label for=\"pref_etiq_hspace\">";
        // line 609
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("Horizontal spacing:"), "html", null, true);
        yield "</label>
                        <div class=\"ui right labeled input\">
                            <input type=\"number\" name=\"pref_etiq_hspace\" id=\"pref_etiq_hspace\" value=\"";
        // line 611
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["pref"] ?? null), "pref_etiq_hspace", [], "any", false, false, false, 611), "html", null, true);
        yield "\" maxlength=\"4\"";
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["required"] ?? null), "pref_etiq_hspace", [], "any", true, true, false, 611) && (CoreExtension::getAttribute($this->env, $this->source, ($context["required"] ?? null), "pref_etiq_hspace", [], "any", false, false, false, 611) == 1))) {
            yield " required=\"required\"";
        }
        yield "/>
                            <div class=\"ui basic label\">mm</div>
                        </div>
                    </div>
                    <div class=\"";
        // line 615
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["required"] ?? null), "pref_etiq_vspace", [], "any", true, true, false, 615) && (CoreExtension::getAttribute($this->env, $this->source, ($context["required"] ?? null), "pref_etiq_vspace", [], "any", false, false, false, 615) == 1))) {
            yield "required ";
        }
        yield "field\">
                        <label for=\"pref_etiq_vspace\">";
        // line 616
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("Vertical spacing:"), "html", null, true);
        yield "</label>
                        <div class=\"ui right labeled input\">
                            <input type=\"number\" name=\"pref_etiq_vspace\" id=\"pref_etiq_vspace\" value=\"";
        // line 618
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["pref"] ?? null), "pref_etiq_vspace", [], "any", false, false, false, 618), "html", null, true);
        yield "\" maxlength=\"4\"";
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["required"] ?? null), "pref_etiq_vspace", [], "any", true, true, false, 618) && (CoreExtension::getAttribute($this->env, $this->source, ($context["required"] ?? null), "pref_etiq_vspace", [], "any", false, false, false, 618) == 1))) {
            yield " required=\"required\"";
        }
        yield "/>
                            <div class=\"ui basic label\">mm</div>
                        </div>
                    </div>
                    <div class=\"field inline\">
                        <div class=\"ui right aligned toggle checkbox\">
                            <input type=\"checkbox\" name=\"pref_etiq_border\" id=\"pref_etiq_border\" value=\"1\" ";
        // line 624
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["pref"] ?? null), "pref_etiq_border", [], "any", false, false, false, 624) == 1)) {
            yield "checked=\"checked\"";
        }
        yield "/>
                            <label for=\"pref_etiq_border\">";
        // line 625
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("Print border"), "html", null, true);
        yield "</label>
                        </div>
                        <i class=\"circular small inverted primary icon info tooltip\" title=\"";
        // line 627
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("Check this box to print a grey border around each label."), "html", null, true);
        yield "\" aria-hidden=\"true\"></i>
                    </div>
                </div>";
        // line 630
        yield "                <div class=\"column\">
                    <div class=\"";
        // line 631
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["required"] ?? null), "pref_etiq_hsize", [], "any", true, true, false, 631) && (CoreExtension::getAttribute($this->env, $this->source, ($context["required"] ?? null), "pref_etiq_hsize", [], "any", false, false, false, 631) == 1))) {
            yield "required ";
        }
        yield "field\">
                        <label for=\"pref_etiq_hsize\">";
        // line 632
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("Label width:"), "html", null, true);
        yield "</label>
                        <div class=\"ui right labeled input\">
                            <input type=\"number\" name=\"pref_etiq_hsize\" id=\"pref_etiq_hsize\" value=\"";
        // line 634
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["pref"] ?? null), "pref_etiq_hsize", [], "any", false, false, false, 634), "html", null, true);
        yield "\" maxlength=\"4\"";
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["required"] ?? null), "pref_etiq_hsize", [], "any", true, true, false, 634) && (CoreExtension::getAttribute($this->env, $this->source, ($context["required"] ?? null), "pref_etiq_hsize", [], "any", false, false, false, 634) == 1))) {
            yield " required=\"required\"";
        }
        yield "/>
                            <div class=\"ui basic label\">mm</div>
                        </div>
                    </div>
                    <div class=\"";
        // line 638
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["required"] ?? null), "pref_etiq_vsize", [], "any", true, true, false, 638) && (CoreExtension::getAttribute($this->env, $this->source, ($context["required"] ?? null), "pref_etiq_vsize", [], "any", false, false, false, 638) == 1))) {
            yield "required ";
        }
        yield "field\">
                        <label for=\"pref_etiq_vsize\">";
        // line 639
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("Label height:"), "html", null, true);
        yield "</label>
                        <div class=\"ui right labeled input\">
                            <input type=\"number\" name=\"pref_etiq_vsize\" id=\"pref_etiq_vsize\" value=\"";
        // line 641
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["pref"] ?? null), "pref_etiq_vsize", [], "any", false, false, false, 641), "html", null, true);
        yield "\" maxlength=\"4\"";
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["required"] ?? null), "pref_etiq_vsize", [], "any", true, true, false, 641) && (CoreExtension::getAttribute($this->env, $this->source, ($context["required"] ?? null), "pref_etiq_vsize", [], "any", false, false, false, 641) == 1))) {
            yield " required=\"required\"";
        }
        yield "/>
                            <div class=\"ui basic label\">mm</div>
                        </div>
                    </div>
                    <div class=\"";
        // line 645
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["required"] ?? null), "pref_etiq_cols", [], "any", true, true, false, 645) && (CoreExtension::getAttribute($this->env, $this->source, ($context["required"] ?? null), "pref_etiq_cols", [], "any", false, false, false, 645) == 1))) {
            yield "required ";
        }
        yield "field\">
                        <label for=\"pref_etiq_cols\">";
        // line 646
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("Number of label columns:"), "html", null, true);
        yield "</label>
                        <input type=\"number\" name=\"pref_etiq_cols\" id=\"pref_etiq_cols\" value=\"";
        // line 647
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["pref"] ?? null), "pref_etiq_cols", [], "any", false, false, false, 647), "html", null, true);
        yield "\" maxlength=\"4\"";
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["required"] ?? null), "pref_etiq_cols", [], "any", true, true, false, 647) && (CoreExtension::getAttribute($this->env, $this->source, ($context["required"] ?? null), "pref_etiq_cols", [], "any", false, false, false, 647) == 1))) {
            yield " required=\"required\"";
        }
        yield "/>
                    </div>
                    <div class=\"";
        // line 649
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["required"] ?? null), "pref_etiq_rows", [], "any", true, true, false, 649) && (CoreExtension::getAttribute($this->env, $this->source, ($context["required"] ?? null), "pref_etiq_rows", [], "any", false, false, false, 649) == 1))) {
            yield "required ";
        }
        yield "field\">
                        <label for=\"pref_etiq_rows\">";
        // line 650
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("Number of label lines:"), "html", null, true);
        yield "</label>
                        <input type=\"number\" name=\"pref_etiq_rows\" id=\"pref_etiq_rows\" value=\"";
        // line 651
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["pref"] ?? null), "pref_etiq_rows", [], "any", false, false, false, 651), "html", null, true);
        yield "\" maxlength=\"4\"";
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["required"] ?? null), "pref_etiq_rows", [], "any", true, true, false, 651) && (CoreExtension::getAttribute($this->env, $this->source, ($context["required"] ?? null), "pref_etiq_rows", [], "any", false, false, false, 651) == 1))) {
            yield " required=\"required\"";
        }
        yield "/>
                    </div>
                    <div class=\"";
        // line 653
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["required"] ?? null), "pref_etiq_corps", [], "any", true, true, false, 653) && (CoreExtension::getAttribute($this->env, $this->source, ($context["required"] ?? null), "pref_etiq_corps", [], "any", false, false, false, 653) == 1))) {
            yield "required ";
        }
        yield "field\">
                        <label for=\"pref_etiq_corps\">";
        // line 654
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("Font size:"), "html", null, true);
        yield "</label>
                        <input type=\"number\" name=\"pref_etiq_corps\" id=\"pref_etiq_corps\" value=\"";
        // line 655
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["pref"] ?? null), "pref_etiq_corps", [], "any", false, false, false, 655), "html", null, true);
        yield "\" maxlength=\"4\"";
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["required"] ?? null), "pref_etiq_corps", [], "any", true, true, false, 655) && (CoreExtension::getAttribute($this->env, $this->source, ($context["required"] ?? null), "pref_etiq_corps", [], "any", false, false, false, 655) == 1))) {
            yield " required=\"required\"";
        }
        yield "/>
                    </div>
                </div>";
        // line 658
        yield "            </div>";
        // line 659
        yield "        </div>";
        // line 660
        yield "        <div class=\"ui";
        yield (((($context["tab"] ?? null) == "cards")) ? (" active") : (""));
        yield " tab segment\" data-tab=\"cards\">
            <div class=\"ui icon info visible message\">
                <i class=\"info circle blue icon\" aria-hidden=\"true\"></i>
                <div class=\"content\">
                    ";
        // line 664
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::replace($this->env->getFunction('_T')->getCallable()("Each page contains %1\$s columns and  %2\$s rows."), ["%1\$s" => CoreExtension::getAttribute($this->env, $this->source, ($context["pref"] ?? null), "pref_card_cols", [], "any", false, false, false, 664), "%2\$s" => CoreExtension::getAttribute($this->env, $this->source, ($context["pref"] ?? null), "pref_card_rows", [], "any", false, false, false, 664)]), "html", null, true);
        yield "
                </div>
            </div>
            <div class=\"ui stackable two column grid\">
                <div class=\"column\">
                    <div class=\"field\">
                        <label for=\"pref_card_abrev\">";
        // line 670
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("Short Text (Card Center):"), "html", null, true);
        yield "</label>
                        <div class=\"ui action input\">
                            <input type=\"text\" name=\"pref_card_abrev\" id=\"pref_card_abrev\" value=\"";
        // line 672
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["pref"] ?? null), "pref_card_abrev", [], "any", false, false, false, 672), "html", null, true);
        yield "\" maxlength=\"10\"/>
                            <a
                                href=\"";
        // line 674
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("dynamicTranslations", ["text_orig" => $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["pref"] ?? null), "pref_card_abrev", [], "any", false, false, false, 674))]), "html", null, true);
        yield "\"
                                class=\"tooltip ui icon button";
        // line 675
        if (Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, ($context["pref"] ?? null), "pref_card_abrev", [], "any", false, false, false, 675))) {
            yield " disabled";
        }
        yield "\"
                                title=\"";
        // line 676
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::replace($this->env->getFunction('_T')->getCallable()("Translate '%s'"), ["%s" => CoreExtension::getAttribute($this->env, $this->source, ($context["pref"] ?? null), "pref_card_abrev", [], "any", false, false, false, 676)]), "html", null, true);
        yield "\"
                            >
                                <i class=\"language icon\" aria-hidden=\"true\"></i>
                                <span class=\"visually-hidden\">";
        // line 679
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::replace($this->env->getFunction('_T')->getCallable()("Translate '%s'"), ["%s" => CoreExtension::getAttribute($this->env, $this->source, ($context["pref"] ?? null), "pref_card_abrev", [], "any", false, false, false, 679)]), "html", null, true);
        yield "</span>
                            </a>
                        </div>
                        <span class=\"exemple\">";
        // line 682
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("(10 characters max)"), "html", null, true);
        yield "</span>
                    </div>
                    <div class=\"field\">
                        <label for=\"pref_card_strip\">";
        // line 685
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("Long Text (Bottom Line):"), "html", null, true);
        yield "</label>
                        <div class=\"ui action input\">
                            <input type=\"text\" name=\"pref_card_strip\" id=\"pref_card_strip\" value=\"";
        // line 687
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["pref"] ?? null), "pref_card_strip", [], "any", false, false, false, 687), "html", null, true);
        yield "\" maxlength=\"65\"/>
                            <a
                                href=\"";
        // line 689
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("dynamicTranslations", ["text_orig" => $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["pref"] ?? null), "pref_card_strip", [], "any", false, false, false, 689))]), "html", null, true);
        yield "\"
                                class=\"tooltip ui icon button";
        // line 690
        if (Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, ($context["pref"] ?? null), "pref_card_strip", [], "any", false, false, false, 690))) {
            yield " disabled";
        }
        yield "\"
                                title=\"";
        // line 691
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::replace($this->env->getFunction('_T')->getCallable()("Translate '%s'"), ["%s" => CoreExtension::getAttribute($this->env, $this->source, ($context["pref"] ?? null), "pref_card_strip", [], "any", false, false, false, 691)]), "html", null, true);
        yield "\"
                            >
                                <i class=\"language icon\" aria-hidden=\"true\"></i>
                                <span class=\"visually-hidden\">";
        // line 694
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::replace($this->env->getFunction('_T')->getCallable()("Translate '%s'"), ["%s" => CoreExtension::getAttribute($this->env, $this->source, ($context["pref"] ?? null), "pref_card_strip", [], "any", false, false, false, 694)]), "html", null, true);
        yield "</span>
                            </a>
                        </div>
                        <span class=\"exemple\">";
        // line 697
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("(65 characters max)"), "html", null, true);
        yield "</span>
                    </div>
                    <div class=\"grouped fields\">
                        <div class=\"inline field\">
                            <label for=\"pref_card_tcol\">";
        // line 701
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("Strip Text Color:"), "html", null, true);
        yield "</label>
                            <input type=\"color\" name=\"pref_card_tcol\" id=\"pref_card_tcol\" value=\"";
        // line 702
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["pref"] ?? null), "pref_card_tcol", [], "any", false, false, false, 702), "html", null, true);
        yield "\" size=\"7\" maxlength=\"7\"/>
                            <i class=\"circular small inverted primary icon info tooltip\" title=\"";
        // line 703
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("Hexadecimal color notation: #RRGGBB"), "html", null, true);
        yield "\" aria-hidden=\"true\"></i>
                        </div>
                        <div class=\"inline field\">
                            <label for=\"pref_card_scol\">";
        // line 706
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("Active Member Color:"), "html", null, true);
        yield "</label>
                            <input type=\"color\" name=\"pref_card_scol\" id=\"pref_card_scol\" value=\"";
        // line 707
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["pref"] ?? null), "pref_card_scol", [], "any", false, false, false, 707), "html", null, true);
        yield "\" size=\"7\" maxlength=\"7\"/>
                            <i class=\"circular small inverted primary icon info tooltip\" title=\"";
        // line 708
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("Hexadecimal color notation: #RRGGBB"), "html", null, true);
        yield "\" aria-hidden=\"true\"></i>
                        </div>
                        <div class=\"inline field\">
                            <label for=\"pref_card_bcol\">";
        // line 711
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("Board Members Color:"), "html", null, true);
        yield "</label>
                            <input type=\"color\" name=\"pref_card_bcol\" id=\"pref_card_bcol\" value=\"";
        // line 712
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["pref"] ?? null), "pref_card_bcol", [], "any", false, false, false, 712), "html", null, true);
        yield "\" size=\"7\" maxlength=\"7\"/>
                            <i class=\"circular small inverted primary icon info tooltip\" title=\"";
        // line 713
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("Hexadecimal color notation: #RRGGBB"), "html", null, true);
        yield "\" aria-hidden=\"true\"></i>
                        </div>
                        <div class=\"inline field\">
                            <label for=\"pref_card_hcol\">";
        // line 716
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("Honor Members Color:"), "html", null, true);
        yield "</label>
                            <input type=\"color\" name=\"pref_card_hcol\" id=\"pref_card_hcol\" value=\"";
        // line 717
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["pref"] ?? null), "pref_card_hcol", [], "any", false, false, false, 717), "html", null, true);
        yield "\" size=\"7\" maxlength=\"7\"/>
                            <i class=\"circular small inverted primary icon info tooltip\" title=\"";
        // line 718
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("Hexadecimal color notation: #RRGGBB"), "html", null, true);
        yield "\" aria-hidden=\"true\"></i>
                        </div>
                    </div>";
        // line 721
        yield "                    <div class=\"field wide ui items\">
                        <label>";
        // line 722
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("Logo:"), "html", null, true);
        yield "</label>
                        <div class=\"item\">
    ";
        // line 724
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["print_logo"] ?? null), "isCustom", [], "method", false, false, false, 724)) {
            // line 725
            yield "                            <div class=\"image\">
                                <img src=\"";
            // line 726
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("printLogo"), "html", null, true);
            yield "\" class=\"picture\" width=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["print_logo"] ?? null), "getOptimalWidth", [], "method", false, false, false, 726), "html", null, true);
            yield "\" height=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["print_logo"] ?? null), "getOptimalHeight", [], "method", false, false, false, 726), "html", null, true);
            yield "\" alt=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("Current logo for printing"), "html", null, true);
            yield "\"/><br/>
                            </div>
    ";
        }
        // line 729
        yield "                            <div class=\"content\">
                                <div class=\"description\">
                                    <div class=\"ui file action input\">
                                        <input type=\"file\" name=\"card_logo\" id=\"card_logo\"";
        // line 732
        if ($this->env->getFunction('callstatic')->getCallable()("\\Galette\\Core\\Galette", "isDemo")) {
            yield " disabled=\"disabled\"";
        }
        yield "/>
                                        <label for=\"card_logo\" class=\"ui button";
        // line 733
        if ($this->env->getFunction('callstatic')->getCallable()("\\Galette\\Core\\Galette", "isDemo")) {
            yield " disabled";
        }
        yield "\">
                                            <i class=\"blue upload icon\" aria-hidden=\"true\"></i>
                                            ";
        // line 735
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["print_logo"] ?? null), "isCustom", [], "method", false, false, false, 735)) {
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("Choose another file"), "html", null, true);
        } else {
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("Choose a file"), "html", null, true);
        }
        // line 736
        yield "                                        </label>
                                    </div>
                                </div>
                                <div class=\"extra ui basic fitted segment\">
    ";
        // line 740
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["print_logo"] ?? null), "isCustom", [], "method", false, false, false, 740)) {
            // line 741
            yield "                                    <div class=\"ui toggle checkbox\">
                                        <input type=\"checkbox\" name=\"del_card_logo\" id=\"del_card_logo\" value=\"1\" />
                                        <label for=\"del_card_logo\">";
            // line 743
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("Delete image"), "html", null, true);
            yield "</label>
                                    </div>
    ";
        }
        // line 746
        yield "                                </div>
                            </div>
                        </div>
                    </div>
                </div>";
        // line 751
        yield "                <div class=\"column\">
                    <div class=\"field inline\">
                        <div class=\"ui right aligned toggle checkbox\">
                            <input type=\"checkbox\" name=\"pref_card_self\" id=\"pref_card_self\" value=\"1\" ";
        // line 754
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["pref"] ?? null), "pref_card_self", [], "any", false, false, false, 754) == 1)) {
            yield "checked=\"checked\"";
        }
        yield "/>
                            <label for=\"pref_card_self\">";
        // line 755
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("Allow members to print card ?"), "html", null, true);
        yield "</label>
                        </div>
                    </div>
                    <div class=\"field inline\">
                        <div class=\"ui right aligned toggle checkbox\">
                            <input type=\"checkbox\" name=\"pref_bool_display_title\" id=\"pref_bool_display_title\" value=\"1\" ";
        // line 760
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["pref"] ?? null), "pref_bool_display_title", [], "any", false, false, false, 760) == 1)) {
            yield "checked=\"checked\"";
        }
        yield "/>
                            <label for=\"pref_bool_display_title\">";
        // line 761
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("Show title ?"), "html", null, true);
        yield "</label>
                        </div>
                        <i class=\"circular small inverted primary icon info tooltip\" title=\"";
        // line 763
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("(Show or not title in front of name)"), "html", null, true);
        yield "\" aria-hidden=\"true\"></i>
                    </div>
                    <div class=\"field\">
                        <label for=\"pref_card_address\">";
        // line 766
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("Address type:"), "html", null, true);
        yield "</label>
                        <select name=\"pref_card_address\" id=\"pref_card_address\" class=\"ui search dropdown\">
                            <option value=\"0\" ";
        // line 768
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["pref"] ?? null), "pref_card_address", [], "any", false, false, false, 768) == 0)) {
            yield "selected=\"selected\"";
        }
        yield ">";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("Email"), "html", null, true);
        yield "</option>
                            <option value=\"5\" ";
        // line 769
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["pref"] ?? null), "pref_card_address", [], "any", false, false, false, 769) == 5)) {
            yield "selected=\"selected\"";
        }
        yield ">";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("Zip - Town"), "html", null, true);
        yield "</option>
                            <option value=\"6\" ";
        // line 770
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["pref"] ?? null), "pref_card_address", [], "any", false, false, false, 770) == 6)) {
            yield "selected=\"selected\"";
        }
        yield ">";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("Nickname"), "html", null, true);
        yield "</option>
                            <option value=\"7\" ";
        // line 771
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["pref"] ?? null), "pref_card_address", [], "any", false, false, false, 771) == 7)) {
            yield "selected=\"selected\"";
        }
        yield ">";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("Profession"), "html", null, true);
        yield "</option>
                            <option value=\"8\" ";
        // line 772
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["pref"] ?? null), "pref_card_address", [], "any", false, false, false, 772) == 8)) {
            yield "selected=\"selected\"";
        }
        yield ">";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("Member number"), "html", null, true);
        yield "</option>
                        </select>
                        <span class=\"exemple\">";
        // line 774
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("(Choose address printed below name)"), "html", null, true);
        yield "</span>
                    </div>
                    <div class=\"field\">
                        <label for=\"pref_card_year\">";
        // line 777
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("Year:"), "html", null, true);
        yield "</label>
                        <div class=\"ui right corner labeled input\">
                            <div class=\"ui corner label\">
                                <i class=\"circular inverted primary icon info tooltip\" data-html=\"";
        // line 780
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("You can enter either:<br/>- a year,<br/>- two years with a slash as separator,<br/>- the string 'DEADLINE' to use member deadline"), "html", null, true);
        yield "\" aria-hidden=\"true\"></i>
                            </div>
                            <input type=\"text\" name=\"pref_card_year\" id=\"pref_card_year\" value=\"";
        // line 782
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["pref"] ?? null), "pref_card_year", [], "any", false, false, false, 782), "html", null, true);
        yield "\" maxlength=\"9\"/>
                        </div>
                    </div>
                    <div class=\"";
        // line 785
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["required"] ?? null), "pref_card_marges_v", [], "any", true, true, false, 785) && (CoreExtension::getAttribute($this->env, $this->source, ($context["required"] ?? null), "pref_card_marges_v", [], "any", false, false, false, 785) == 1))) {
            yield "required ";
        }
        yield "field\">
                        <label for=\"pref_card_marges_v\">";
        // line 786
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("Vertical margins:"), "html", null, true);
        yield "</label>
                        <div class=\"ui right labeled input\">
                            <input type=\"number\" name=\"pref_card_marges_v\" id=\"pref_card_marges_v\" value=\"";
        // line 788
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["pref"] ?? null), "pref_card_marges_v", [], "any", false, false, false, 788), "html", null, true);
        yield "\" maxlength=\"4\"";
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["required"] ?? null), "pref_card_marges_v", [], "any", true, true, false, 788) && (CoreExtension::getAttribute($this->env, $this->source, ($context["required"] ?? null), "pref_card_marges_v", [], "any", false, false, false, 788) == 1))) {
            yield " required=\"required\"";
        }
        yield "/>
                            <div class=\"ui basic label\">mm</div>
                        </div>
                    </div>
                    <div class=\"";
        // line 792
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["required"] ?? null), "pref_card_marges_h", [], "any", true, true, false, 792) && (CoreExtension::getAttribute($this->env, $this->source, ($context["required"] ?? null), "pref_card_marges_h", [], "any", false, false, false, 792) == 1))) {
            yield "required ";
        }
        yield "field\">
                        <label for=\"pref_card_marges_h\">";
        // line 793
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("Horizontal margins:"), "html", null, true);
        yield "</label>
                        <div class=\"ui right labeled input\">
                            <input type=\"number\" name=\"pref_card_marges_h\" id=\"pref_card_marges_h\" value=\"";
        // line 795
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["pref"] ?? null), "pref_card_marges_h", [], "any", false, false, false, 795), "html", null, true);
        yield "\" maxlength=\"4\"";
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["required"] ?? null), "pref_card_marges_h", [], "any", true, true, false, 795) && (CoreExtension::getAttribute($this->env, $this->source, ($context["required"] ?? null), "pref_card_marges_h", [], "any", false, false, false, 795) == 1))) {
            yield " required=\"required\"";
        }
        yield "/>
                            <div class=\"ui basic label\">mm</div>
                        </div>
                    </div>
                    <div class=\"";
        // line 799
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["required"] ?? null), "pref_card_vspace", [], "any", true, true, false, 799) && (CoreExtension::getAttribute($this->env, $this->source, ($context["required"] ?? null), "pref_card_vspace", [], "any", false, false, false, 799) == 1))) {
            yield "required ";
        }
        yield "field\">
                        <label for=\"pref_card_vspace\">";
        // line 800
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("Vertical spacing:"), "html", null, true);
        yield "</label>
                        <div class=\"ui right labeled input\">
                            <input type=\"number\" name=\"pref_card_vspace\" id=\"pref_card_vspace\" value=\"";
        // line 802
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["pref"] ?? null), "pref_card_vspace", [], "any", false, false, false, 802), "html", null, true);
        yield "\" maxlength=\"4\"";
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["required"] ?? null), "pref_card_vspace", [], "any", true, true, false, 802) && (CoreExtension::getAttribute($this->env, $this->source, ($context["required"] ?? null), "pref_card_vspace", [], "any", false, false, false, 802) == 1))) {
            yield " required=\"required\"";
        }
        yield "/>
                            <div class=\"ui basic label\">mm</div>
                        </div>
                    </div>
                    <div class=\"";
        // line 806
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["required"] ?? null), "pref_card_hspace", [], "any", true, true, false, 806) && (CoreExtension::getAttribute($this->env, $this->source, ($context["required"] ?? null), "pref_card_hspace", [], "any", false, false, false, 806) == 1))) {
            yield "required ";
        }
        yield "field\">
                        <label for=\"pref_card_hspace\">";
        // line 807
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("Horizontal spacing:"), "html", null, true);
        yield "</label>
                        <div class=\"ui right labeled input\">
                            <input type=\"number\" name=\"pref_card_hspace\" id=\"pref_card_hspace\" value=\"";
        // line 809
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["pref"] ?? null), "pref_card_hspace", [], "any", false, false, false, 809), "html", null, true);
        yield "\" maxlength=\"4\"";
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["required"] ?? null), "pref_card_hspace", [], "any", true, true, false, 809) && (CoreExtension::getAttribute($this->env, $this->source, ($context["required"] ?? null), "pref_card_hspace", [], "any", false, false, false, 809) == 1))) {
            yield " required=\"required\"";
        }
        yield "/>
                            <div class=\"ui basic label\">mm</div>
                        </div>
                    </div>
                    <div class=\"";
        // line 813
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["required"] ?? null), "pref_card_hsize", [], "any", true, true, false, 813) && (CoreExtension::getAttribute($this->env, $this->source, ($context["required"] ?? null), "pref_card_hsize", [], "any", false, false, false, 813) == 1))) {
            yield "required ";
        }
        yield "field\">
                        <label for=\"pref_card_hsize\">";
        // line 814
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("Card width from 70 to 95mm:"), "html", null, true);
        yield "</label>
                        <div class=\"ui right labeled input\">
                            <input type=\"number\" name=\"pref_card_hsize\" id=\"pref_card_hsize\" value=\"";
        // line 816
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["pref"] ?? null), "pref_card_hsize", [], "any", false, false, false, 816), "html", null, true);
        yield "\" maxlength=\"4\"";
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["required"] ?? null), "pref_card_hsize", [], "any", true, true, false, 816) && (CoreExtension::getAttribute($this->env, $this->source, ($context["required"] ?? null), "pref_card_hsize", [], "any", false, false, false, 816) == 1))) {
            yield " required=\"required\"";
        }
        yield "/>
                            <div class=\"ui basic label\">mm</div>
                        </div>
                    </div>
                    <div class=\"";
        // line 820
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["required"] ?? null), "pref_card_vsize", [], "any", true, true, false, 820) && (CoreExtension::getAttribute($this->env, $this->source, ($context["required"] ?? null), "pref_card_vsize", [], "any", false, false, false, 820) == 1))) {
            yield "required ";
        }
        yield "field\">
                        <label for=\"pref_card_vsize\">";
        // line 821
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("Card height from 40 to 55mm:"), "html", null, true);
        yield "</label>
                        <div class=\"ui right labeled input\">
                            <input type=\"number\" name=\"pref_card_vsize\" id=\"pref_card_vsize\" value=\"";
        // line 823
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["pref"] ?? null), "pref_card_vsize", [], "any", false, false, false, 823), "html", null, true);
        yield "\" maxlength=\"4\"";
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["required"] ?? null), "pref_card_vsize", [], "any", true, true, false, 823) && (CoreExtension::getAttribute($this->env, $this->source, ($context["required"] ?? null), "pref_card_vsize", [], "any", false, false, false, 823) == 1))) {
            yield " required=\"required\"";
        }
        yield "/>
                            <div class=\"ui basic label\">mm</div>
                        </div>
                    </div>
                </div>";
        // line 828
        yield "            </div>";
        // line 829
        yield "        </div>";
        // line 830
        yield "
";
        // line 831
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["login"] ?? null), "isAdmin", [], "method", false, false, false, 831)) {
            // line 832
            yield "        <div class=\"ui";
            yield (((($context["tab"] ?? null) == "security")) ? (" active") : (""));
            yield " tab segment\" data-tab=\"security\">
                <div class=\"inline field required\">
                    <label for=\"pref_password_length\">";
            // line 834
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("Password length:"), "html", null, true);
            yield "</label>
                    <div class=\"ui right corner labeled input\">
                        <div class=\"ui corner label\">
                            <i class=\"circular inverted primary icon info tooltip\" title=\"";
            // line 837
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("Minimum password length required for all accounts. Minimal size is 6."), "html", null, true);
            yield "\" aria-hidden=\"true\"></i>
                        </div>
                        <input type=\"number\" name=\"pref_password_length\" id=\"pref_password_length\" value=\"";
            // line 839
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["pref"] ?? null), "pref_password_length", [], "any", false, false, false, 839), "html", null, true);
            yield "\" min=\"6\" size=\"7\" required=\"required\"/>
                    </div>
                </div>
                <div class=\"inline field\">
                    <div class=\"ui right aligned toggle checkbox\">
                        <input type=\"checkbox\" name=\"pref_password_blacklist\" id=\"pref_password_blacklist\" value=\"1\"";
            // line 844
            if ((CoreExtension::getAttribute($this->env, $this->source, ($context["pref"] ?? null), "pref_password_blacklist", [], "any", false, false, false, 844) == 1)) {
                yield " checked=\"checked\"";
            }
            yield "/>
                        <label for=\"pref_password_blacklist\" title=\"";
            // line 845
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("Enable password blacklists"), "html", null, true);
            yield "\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("Enable blacklists:"), "html", null, true);
            yield "</label>
                    </div>
                    <i class=\"circular small inverted primary icon info tooltip\" title=\"";
            // line 847
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("If you enable blacklists; it will not be possible to use any of blacklisted passwords. A list is provided along with Galette, but you can add you owns."), "html", null, true);
            yield "\" aria-hidden=\"true\"></i>
                </div>
                <div class=\"inline field\">
                    <label for=\"pref_password_strength\" title=\"";
            // line 850
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("Enforce password strength"), "html", null, true);
            yield "\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("Password strength:"), "html", null, true);
            yield "</label>
                    <select name=\"pref_password_strength\" id=\"pref_password_strength\" class=\"ui dropdown\">
                        <option value=\"";
            // line 852
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::constant("Galette\\Core\\Preferences::PWD_NONE"), "html", null, true);
            yield "\"";
            if ((CoreExtension::getAttribute($this->env, $this->source, ($context["pref"] ?? null), "pref_password_strength", [], "any", false, false, false, 852) == Twig\Extension\CoreExtension::constant("Galette\\Core\\Preferences::PWD_NONE"))) {
                yield " selected=\"selected\"";
            }
            yield ">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("None (default)"), "html", null, true);
            yield "</option>
                        <option value=\"";
            // line 853
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::constant("Galette\\Core\\Preferences::PWD_WEAK"), "html", null, true);
            yield "\"";
            if ((CoreExtension::getAttribute($this->env, $this->source, ($context["pref"] ?? null), "pref_password_strength", [], "any", false, false, false, 853) == Twig\Extension\CoreExtension::constant("Galette\\Core\\Preferences::PWD_WEAK"))) {
                yield " selected=\"selected\"";
            }
            yield ">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("Weak"), "html", null, true);
            yield "</option>
                        <option value=\"";
            // line 854
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::constant("Galette\\Core\\Preferences::PWD_MEDIUM"), "html", null, true);
            yield "\"";
            if ((CoreExtension::getAttribute($this->env, $this->source, ($context["pref"] ?? null), "pref_password_strength", [], "any", false, false, false, 854) == Twig\Extension\CoreExtension::constant("Galette\\Core\\Preferences::PWD_MEDIUM"))) {
                yield " selected=\"selected\"";
            }
            yield ">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("Medium"), "html", null, true);
            yield "</option>
                        <option value=\"";
            // line 855
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::constant("Galette\\Core\\Preferences::PWD_STRONG"), "html", null, true);
            yield "\"";
            if ((CoreExtension::getAttribute($this->env, $this->source, ($context["pref"] ?? null), "pref_password_strength", [], "any", false, false, false, 855) == Twig\Extension\CoreExtension::constant("Galette\\Core\\Preferences::PWD_STRONG"))) {
                yield " selected=\"selected\"";
            }
            yield ">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("Strong"), "html", null, true);
            yield "</option>
                        <option value=\"";
            // line 856
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::constant("Galette\\Core\\Preferences::PWD_VERY_STRONG"), "html", null, true);
            yield "\"";
            if ((CoreExtension::getAttribute($this->env, $this->source, ($context["pref"] ?? null), "pref_password_strength", [], "any", false, false, false, 856) == Twig\Extension\CoreExtension::constant("Galette\\Core\\Preferences::PWD_VERY_STRONG"))) {
                yield " selected=\"selected\"";
            }
            yield ">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("Very strong"), "html", null, true);
            yield "</option>
                    </select>
                    <i class=\"tooltip circular inverted primary small icon info\" data-html=\"
                        <p>";
            // line 859
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("Enforce minimal password strength for all password."), "html", null, true);
            yield "<br/>
                        ";
            // line 860
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("Levels are:"), "html", null, true);
            yield "</p>
                        <ul>
                            <li><em>* ";
            // line 862
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("None"), "html", null, true);
            yield "</em> ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("for no strength enforcement"), "html", null, true);
            yield "</li>
                            <li><em>* ";
            // line 863
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("Weak"), "html", null, true);
            yield "</em> ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("require at least one matched rule"), "html", null, true);
            yield "</li>
                            <li><em>* ";
            // line 864
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("Medium"), "html", null, true);
            yield "</em> ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("require at least two matched rules"), "html", null, true);
            yield "</li>
                            <li><em>* ";
            // line 865
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("Strong"), "html", null, true);
            yield "</em> ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("require at least three matched rules (recommended for most usages)"), "html", null, true);
            yield "</li>
                            <li><em>* ";
            // line 866
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("Very strong"), "html", null, true);
            yield "</em> ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("requires all rules."), "html", null, true);
            yield "</li>
                        </ul>
                        <p>";
            // line 868
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("Rules include lower case characters, upper case characters, numbers, and special characters."), "html", null, true);
            yield "<br/>
                        ";
            // line 869
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("Note that with any enforcement level, user cannot use his personal information (name, login, ...) as password."), "html", null, true);
            yield "</p>
                    \" data-variation=\"inverted very wide\">
                    </i>
                </div>
                <div id=\"test_password_strength_field\" class=\"inline field\">
                    <label for=\"test_password_strength\">";
            // line 874
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("Test a password:"), "html", null, true);
            yield "</label>
                    <div class=\"ui right corner labeled input\">
                        <div class=\"ui corner label\">
                            <i class=\"circular inverted primary icon info tooltip\" data-html=\"";
            // line 877
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("Test a password with current selected values."), "html", null, true);
            yield "<br/>";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("Do not forget to save your preferences if you're happy with the result ;)"), "html", null, true);
            yield "\" aria-hidden=\"true\"></i>
                        </div>
                        <input type=\"text\" id=\"test_password_strength\"/>
                    </div>

                </div>
        </div>";
        }
        // line 885
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["login"] ?? null), "isSuperAdmin", [], "method", false, false, false, 885)) {
            // line 886
            yield "        <div class=\"ui";
            yield (((($context["tab"] ?? null) == "admin")) ? (" active") : (""));
            yield " tab red segment\" data-tab=\"admin\">
    ";
            // line 887
            if ($this->env->getFunction('callstatic')->getCallable()("\\Galette\\Core\\Galette", "isDemo")) {
                // line 888
                yield "                <div class=\"ui icon negative message\">
                    <i class=\"ban icon\" aria-hidden=\"true\"></i>
                    <div class=\"content\">
                        ";
                // line 891
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("Application runs under demo mode. This functionnality is not enabled, sorry."), "html", null, true);
                yield "
                    </div>
                </div>
    ";
            } else {
                // line 895
                yield "                <div class=\"inline field";
                if ((CoreExtension::getAttribute($this->env, $this->source, ($context["required"] ?? null), "pref_admin_login", [], "any", true, true, false, 895) && (CoreExtension::getAttribute($this->env, $this->source, ($context["required"] ?? null), "pref_admin_login", [], "any", false, false, false, 895) == 1))) {
                    yield " required";
                }
                yield "\">
                    <label for=\"pref_admin_login\">";
                // line 896
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("Username:"), "html", null, true);
                yield "</label>
                    <input type=\"text\" name=\"pref_admin_login\" id=\"pref_admin_login\" value=\"";
                // line 897
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["pref"] ?? null), "pref_admin_login", [], "any", false, false, false, 897), "html", null, true);
                yield "\" maxlength=\"20\"";
                if ((CoreExtension::getAttribute($this->env, $this->source, ($context["required"] ?? null), "pref_admin_login", [], "any", true, true, false, 897) && (CoreExtension::getAttribute($this->env, $this->source, ($context["required"] ?? null), "pref_admin_login", [], "any", false, false, false, 897) == 1))) {
                    yield " required=\"required\"";
                }
                yield "/>
                </div>
                <div id=\"pref_admin_pass_field\" class=\"inline field\">
                    <label for=\"pref_admin_pass\">";
                // line 900
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("Password:"), "html", null, true);
                yield "</label>
                    <div class=\"ui input\">
                        <input type=\"password\" name=\"pref_admin_pass\" id=\"pref_admin_pass\" value=\"\" maxlength=\"20\" autocomplete=\"off\"/>
                    </div>
                </div>
                <div class=\"inline field\">
                    <label for=\"pref_admin_pass_check\">";
                // line 906
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("Retype password:"), "html", null, true);
                yield "</label>
                    <input type=\"password\" name=\"pref_admin_pass_check\" id=\"pref_admin_pass_check\" value=\"\" maxlength=\"20\"/>
                </div>
    ";
            }
            // line 910
            yield "        </div>";
        }
        // line 912
        yield "        <div class=\"ui basic center aligned segment\">
            <input type=\"hidden\" name=\"valid\" value=\"1\"/>
            <input type=\"hidden\" name=\"pref_theme\" value=\"default\"/>
            <input type=\"hidden\" name=\"pref_telemetry_date\" value=\"";
        // line 915
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["pref"] ?? null), "pref_telemetry_date", [], "any", false, false, false, 915), "html", null, true);
        yield "\"/>
            <input type=\"hidden\" name=\"pref_instance_uuid\" value=\"";
        // line 916
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["pref"] ?? null), "pref_instance_uuid", [], "any", false, false, false, 916), "html", null, true);
        yield "\"/>
            <input type=\"hidden\" name=\"pref_registration_date\" value=\"";
        // line 917
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["pref"] ?? null), "pref_registration_date", [], "any", false, false, false, 917), "html", null, true);
        yield "\"/>
            <input type=\"hidden\" name=\"pref_registration_uuid\" value=\"";
        // line 918
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["pref"] ?? null), "pref_registration_uuid", [], "any", false, false, false, 918), "html", null, true);
        yield "\"/>
            <input type=\"hidden\" name=\"tab\" id=\"tab\" value=\"";
        // line 919
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["tab"] ?? null), "html", null, true);
        yield "\"/>
            <button type=\"submit\" class=\"ui labeled icon primary button action\">
                <i class=\"save icon\" aria-hidden=\"true\"></i> ";
        // line 921
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("Save"), "html", null, true);
        yield "
            </button>
        </div>
        ";
        // line 924
        yield from         $this->loadTemplate("components/forms/csrf.html.twig", "pages/preferences.html.twig", 924)->unwrap()->yield($context);
        // line 925
        yield "        </form>

        ";
        // line 927
        yield from         $this->loadTemplate("modals/telemetry.html.twig", "pages/preferences.html.twig", 927)->unwrap()->yield(CoreExtension::merge($context, ["part" => "dialog"]));
        // line 928
        yield "        ";
        yield from         $this->loadTemplate("modals/replacements_legend.html.twig", "pages/preferences.html.twig", 928)->unwrap()->yield(CoreExtension::merge($context, ["legends" => CoreExtension::getAttribute($this->env, $this->source, ($context["preferences"] ?? null), "getLegend", [], "method", false, false, false, 928), "cur_ref" => "prefs"]));
        return; yield '';
    }

    // line 931
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 932
        yield "        <script type=\"text/javascript\">
            ";
        // line 933
        yield from         $this->loadTemplate("elements/js/choose_social.js.twig", "pages/preferences.html.twig", 933)->unwrap()->yield($context);
        // line 934
        yield "
            \$(function(){
    ";
        // line 936
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["pref"] ?? null), "pref_mail_method", [], "any", false, false, false, 936) != Twig\Extension\CoreExtension::constant("Galette\\Core\\GaletteMail::METHOD_SMTP"))) {
            // line 937
            yield "                \$('#smtp_parameters').addClass('displaynone');
    ";
        }
        // line 939
        yield "    ";
        if (((CoreExtension::getAttribute($this->env, $this->source, ($context["pref"] ?? null), "pref_mail_method", [], "any", false, false, false, 939) != Twig\Extension\CoreExtension::constant("Galette\\Core\\GaletteMail::METHOD_SMTP")) && (CoreExtension::getAttribute($this->env, $this->source, ($context["pref"] ?? null), "pref_mail_method", [], "any", false, false, false, 939) != Twig\Extension\CoreExtension::constant("Galette\\Core\\GaletteMail::METHOD_GMAIL")))) {
            // line 940
            yield "                \$('#smtp_auth').addClass('displaynone');
    ";
        }
        // line 942
        yield "                \$('.ui.radio.checkbox').checkbox({
                    onChange: function() {
                        var _checked = \$(this).closest('input').attr('id');
                        var _smtp_parameters = \$(this).closest('.checkbox').parent().parent().siblings('#smtp_parameters');
                        var _smtp_auth = \$(this).closest('.checkbox').parent().parent().siblings('#smtp_auth');
                        if ( _checked == 'smtp' ) {
                            _smtp_parameters.removeClass('displaynone');
                            _smtp_auth.removeClass('displaynone');
                        } else if ( _checked == 'gmail' ) {
                            _smtp_parameters.addClass('displaynone');
                            _smtp_auth.removeClass('displaynone');
                        } else {
                            _smtp_parameters.addClass('displaynone');
                            _smtp_auth.addClass('displaynone');
                        }
                    }
                });

                \$('.pointing.menu .item').tab({
                    onVisible: function(tabPath) {
                        document.getElementById('tab').value = tabPath;
                    }
                });

                let _publicpages_status = document.getElementById('pref_bool_publicpages');
                let _publicpages_visibility = document.getElementById('publicpages_visibility');
                _publicpages_status.addEventListener('change', function () {
                    _publicpages_visibility.classList.toggle('displaynone');
                    return;
                });

                let _crop_status = document.getElementById('pref_force_picture_ratio');
                let _crop_ratio = document.getElementById('pref_member_picture_ratio_field');
                _crop_status.addEventListener('change', function () {
                    _crop_ratio.classList.toggle('displaynone');
                    return;
                });

                \$('#btnmail').on('click', function(e) {
                    e.preventDefault();
                    var _this = \$(this);
                    var _input = '<div class=\"ui input\"><input type=\"text\" name=\"email_adress\" id=\"email_adress\" value=\"\"/></div>';
                    \$('body').modal({
                        title: '";
        // line 985
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("Enter the email adress"), "js"), "html", null, true);
        yield "',
                        class: 'tiny',
                        content: _input,
                        onApprove: function() {
                            \$.ajax({
                                url: _this.attr('href'),
                                type: 'GET',
                                data: {
                                    adress: \$('#email_adress').val()
                                },
                                ";
        // line 995
        yield from         $this->loadTemplate("elements/js/loader.js.twig", "pages/preferences.html.twig", 995)->unwrap()->yield(CoreExtension::merge($context, ["selector" => "#btnmail", "loader" => "button"]));
        // line 998
        yield ",
                                success: function(res) {
                                    //display message
                                    \$.ajax({
                                        url: '";
        // line 1002
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("ajaxMessages"), "html", null, true);
        yield "',
                                        method: \"GET\",
                                        success: function (values) {
                                            for (var type in values) {
                                                var dtime = 0;
                                                if (type == 'success') {
                                                    dtime = 'auto';
                                                }
                                                \$('body')
                                                    .toast({
                                                        displayTime: dtime,
                                                        minDisplayTime: 5000,
                                                        wordsPerMinute: 80,
                                                        showProgress: 'bottom',
                                                        closeIcon: true,
                                                        position: 'top attached',
                                                        title: values[type]['title'],
                                                        message: values[type]['messages'].join('<br/>'),
                                                        showIcon: values[type]['icon'],
                                                        class: type
                                                    })
                                                ;
                                            }
                                        }
                                    });
                                },
                                error: function () {
                                    ";
        // line 1029
        yield from         $this->loadTemplate("elements/js/modal.js.twig", "pages/preferences.html.twig", 1029)->unwrap()->yield(CoreExtension::merge($context, ["modal_title_twig" => $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("An error occurred sending test email :("), "js"), "modal_without_content" => true, "modal_class" => "mini", "modal_deny_only" => true, "modal_cancel_text" => $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("Close"), "js"), "modal_classname" => "redalert"]));
        // line 1037
        yield "                                }
                            });
                        },
                        actions: [{
                            text    : '";
        // line 1041
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("Send"), "js"), "html", null, true);
        yield "',
                            icon    : 'rocket',
                            class   : 'icon labeled green approve'
                        }, {
                            text    : '";
        // line 1045
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("Cancel"), "js"), "html", null, true);
        yield "',
                            icon    : 'times',
                            class   : 'icon labeled cancel'
                        }]
                    }).modal('show');
                });

                _addLegendButton('#mail_sign');
                _handleLegend();

                ";
        // line 1055
        yield from         $this->loadTemplate("elements/js/pwdcheck.js.twig", "pages/preferences.html.twig", 1055)->unwrap()->yield(CoreExtension::merge($context, ["selector" => "#pref_admin_pass", "loader" => "inline mini"]));
        // line 1059
        yield "                ";
        yield from         $this->loadTemplate("elements/js/pwdcheck.js.twig", "pages/preferences.html.twig", 1059)->unwrap()->yield(CoreExtension::merge($context, ["selector" => "#test_password_strength", "loader" => "inline mini", "extra_data" => "pref_password_length: \$('#pref_password_length').val(),pref_password_blacklist: \$('#pref_password_blacklist').is(':checked'),pref_password_strength: \$('#pref_password_strength').val(),"]));
        // line 1064
        yield "
                ";
        // line 1065
        yield from         $this->loadTemplate("modals/telemetry.html.twig", "pages/preferences.html.twig", 1065)->unwrap()->yield(CoreExtension::merge($context, ["part" => "jsdialog"]));
        // line 1066
        yield "                ";
        yield from         $this->loadTemplate("modals/telemetry.html.twig", "pages/preferences.html.twig", 1066)->unwrap()->yield(CoreExtension::merge($context, ["part" => "jsregister"]));
        // line 1067
        yield "
            });
        </script>
";
        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "pages/preferences.html.twig";
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
        return array (  2748 => 1067,  2745 => 1066,  2743 => 1065,  2740 => 1064,  2737 => 1059,  2735 => 1055,  2722 => 1045,  2715 => 1041,  2709 => 1037,  2707 => 1029,  2677 => 1002,  2671 => 998,  2669 => 995,  2656 => 985,  2611 => 942,  2607 => 940,  2604 => 939,  2600 => 937,  2598 => 936,  2594 => 934,  2592 => 933,  2589 => 932,  2585 => 931,  2579 => 928,  2577 => 927,  2573 => 925,  2571 => 924,  2565 => 921,  2560 => 919,  2556 => 918,  2552 => 917,  2548 => 916,  2544 => 915,  2539 => 912,  2536 => 910,  2529 => 906,  2520 => 900,  2510 => 897,  2506 => 896,  2499 => 895,  2492 => 891,  2487 => 888,  2485 => 887,  2480 => 886,  2478 => 885,  2466 => 877,  2460 => 874,  2452 => 869,  2448 => 868,  2441 => 866,  2435 => 865,  2429 => 864,  2423 => 863,  2417 => 862,  2412 => 860,  2408 => 859,  2396 => 856,  2386 => 855,  2376 => 854,  2366 => 853,  2356 => 852,  2349 => 850,  2343 => 847,  2336 => 845,  2330 => 844,  2322 => 839,  2317 => 837,  2311 => 834,  2305 => 832,  2303 => 831,  2300 => 830,  2298 => 829,  2296 => 828,  2285 => 823,  2280 => 821,  2274 => 820,  2263 => 816,  2258 => 814,  2252 => 813,  2241 => 809,  2236 => 807,  2230 => 806,  2219 => 802,  2214 => 800,  2208 => 799,  2197 => 795,  2192 => 793,  2186 => 792,  2175 => 788,  2170 => 786,  2164 => 785,  2158 => 782,  2153 => 780,  2147 => 777,  2141 => 774,  2132 => 772,  2124 => 771,  2116 => 770,  2108 => 769,  2100 => 768,  2095 => 766,  2089 => 763,  2084 => 761,  2078 => 760,  2070 => 755,  2064 => 754,  2059 => 751,  2053 => 746,  2047 => 743,  2043 => 741,  2041 => 740,  2035 => 736,  2029 => 735,  2022 => 733,  2016 => 732,  2011 => 729,  1999 => 726,  1996 => 725,  1994 => 724,  1989 => 722,  1986 => 721,  1981 => 718,  1977 => 717,  1973 => 716,  1967 => 713,  1963 => 712,  1959 => 711,  1953 => 708,  1949 => 707,  1945 => 706,  1939 => 703,  1935 => 702,  1931 => 701,  1924 => 697,  1918 => 694,  1912 => 691,  1906 => 690,  1902 => 689,  1897 => 687,  1892 => 685,  1886 => 682,  1880 => 679,  1874 => 676,  1868 => 675,  1864 => 674,  1859 => 672,  1854 => 670,  1845 => 664,  1837 => 660,  1835 => 659,  1833 => 658,  1824 => 655,  1820 => 654,  1814 => 653,  1805 => 651,  1801 => 650,  1795 => 649,  1786 => 647,  1782 => 646,  1776 => 645,  1765 => 641,  1760 => 639,  1754 => 638,  1743 => 634,  1738 => 632,  1732 => 631,  1729 => 630,  1724 => 627,  1719 => 625,  1713 => 624,  1700 => 618,  1695 => 616,  1689 => 615,  1678 => 611,  1673 => 609,  1667 => 608,  1656 => 604,  1651 => 602,  1645 => 601,  1634 => 597,  1629 => 595,  1623 => 594,  1616 => 591,  1614 => 590,  1611 => 589,  1609 => 588,  1603 => 584,  1599 => 583,  1593 => 580,  1589 => 579,  1580 => 573,  1575 => 571,  1569 => 570,  1562 => 566,  1557 => 564,  1551 => 563,  1544 => 559,  1539 => 557,  1533 => 556,  1525 => 551,  1521 => 550,  1515 => 547,  1511 => 546,  1503 => 541,  1495 => 536,  1491 => 534,  1478 => 530,  1464 => 525,  1460 => 523,  1458 => 522,  1446 => 519,  1432 => 514,  1428 => 512,  1415 => 508,  1411 => 506,  1409 => 505,  1397 => 502,  1391 => 499,  1387 => 497,  1381 => 493,  1374 => 489,  1368 => 486,  1363 => 484,  1357 => 483,  1350 => 479,  1345 => 477,  1339 => 476,  1332 => 472,  1327 => 470,  1321 => 469,  1314 => 465,  1309 => 463,  1303 => 462,  1296 => 458,  1291 => 456,  1286 => 454,  1279 => 451,  1277 => 450,  1270 => 446,  1265 => 444,  1259 => 441,  1253 => 438,  1249 => 437,  1243 => 434,  1239 => 433,  1234 => 430,  1227 => 426,  1222 => 423,  1220 => 422,  1215 => 421,  1208 => 416,  1203 => 414,  1197 => 413,  1189 => 408,  1183 => 407,  1175 => 402,  1169 => 401,  1161 => 396,  1155 => 395,  1147 => 390,  1141 => 389,  1133 => 384,  1127 => 383,  1118 => 378,  1116 => 377,  1114 => 376,  1108 => 372,  1101 => 370,  1095 => 367,  1089 => 364,  1085 => 363,  1081 => 362,  1077 => 360,  1070 => 355,  1065 => 353,  1060 => 351,  1055 => 348,  1040 => 346,  1036 => 345,  1030 => 344,  1026 => 343,  1020 => 342,  1016 => 340,  1014 => 339,  1009 => 336,  1004 => 334,  998 => 333,  988 => 328,  983 => 326,  977 => 323,  970 => 319,  965 => 317,  959 => 314,  952 => 310,  947 => 308,  941 => 305,  932 => 301,  926 => 300,  920 => 299,  915 => 297,  908 => 293,  902 => 292,  890 => 287,  882 => 286,  874 => 285,  869 => 283,  863 => 282,  858 => 280,  853 => 278,  847 => 277,  833 => 272,  823 => 271,  813 => 270,  808 => 268,  802 => 267,  796 => 264,  790 => 263,  785 => 260,  781 => 257,  766 => 255,  762 => 254,  757 => 252,  752 => 249,  737 => 247,  733 => 246,  728 => 244,  715 => 240,  705 => 239,  699 => 238,  695 => 237,  689 => 236,  677 => 233,  667 => 232,  657 => 231,  647 => 230,  637 => 229,  627 => 228,  622 => 226,  617 => 223,  602 => 221,  598 => 220,  592 => 219,  588 => 218,  581 => 217,  577 => 207,  562 => 205,  558 => 204,  552 => 203,  548 => 202,  542 => 201,  535 => 198,  532 => 197,  529 => 196,  527 => 195,  525 => 194,  518 => 189,  512 => 188,  499 => 183,  493 => 181,  490 => 180,  484 => 178,  481 => 177,  479 => 176,  473 => 173,  469 => 172,  461 => 167,  457 => 166,  451 => 163,  447 => 162,  439 => 157,  434 => 155,  428 => 152,  423 => 149,  406 => 147,  402 => 146,  398 => 145,  393 => 143,  383 => 140,  379 => 139,  369 => 136,  365 => 135,  358 => 131,  354 => 130,  349 => 127,  344 => 124,  340 => 123,  334 => 120,  330 => 119,  324 => 116,  320 => 115,  314 => 112,  310 => 111,  304 => 108,  300 => 107,  294 => 104,  288 => 103,  282 => 100,  278 => 99,  267 => 90,  261 => 87,  257 => 85,  255 => 84,  249 => 80,  243 => 79,  236 => 77,  230 => 76,  225 => 73,  213 => 70,  210 => 69,  208 => 68,  203 => 66,  193 => 59,  187 => 56,  182 => 54,  177 => 52,  171 => 49,  167 => 48,  157 => 45,  153 => 44,  147 => 43,  141 => 40,  138 => 39,  128 => 37,  126 => 36,  116 => 34,  114 => 33,  106 => 32,  98 => 31,  90 => 30,  82 => 29,  74 => 28,  66 => 27,  58 => 26,  52 => 24,  48 => 23,  37 => 21,);
    }

    public function getSourceContext()
    {
        return new Source("", "pages/preferences.html.twig", "/var/www/galette/templates/default/pages/preferences.html.twig");
    }
}
