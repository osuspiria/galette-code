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

/* pages/advanced_search.html.twig */
class __TwigTemplate_242d77ff7ebfbbcf101fd4b4bc3acfa3 extends Template
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
        $this->parent = $this->loadTemplate("page.html.twig", "pages/advanced_search.html.twig", 21);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 23
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 24
        yield "        <form action=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("filter-memberslist"), "html", null, true);
        yield "\" method=\"post\" class=\"ui form advanced-search\">
            <div class=\"galetteform ui styled fluid accordion field\">
                <div class=\"active ui title\">
                    <i class=\"jsonly displaynone dropdown icon\" aria-hidden=\"true\"></i>
                    ";
        // line 28
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("Simple search"), "html", null, true);
        yield "
                </div>
                <div class=\"active content\">
                    <div class=\"four fields\">
                        <div class=\"field\">
                            <label for=\"filter_str\">";
        // line 33
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("Search:"), "html", null, true);
        yield "</label>
                            <input type=\"text\" name=\"filter_str\" id=\"filter_str\" value=\"";
        // line 34
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["filters"] ?? null), "filter_str", [], "any", false, false, false, 34), "html", null, true);
        yield "\" type=\"search\" placeholder=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("Enter a value"), "html", null, true);
        yield "\"/>
                        </div>
                        <div class=\"field\">
                            <label for=\"field_filter\">";
        // line 37
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("in:"), "html", null, true);
        yield "</label>
                            <select name=\"field_filter\" class=\"ui search dropdown\">
    ";
        // line 39
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["field_filter_options"] ?? null));
        foreach ($context['_seq'] as $context["key"] => $context["value"]) {
            // line 40
            yield "                                <option value=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["key"], "html", null, true);
            yield "\"";
            if (($context["key"] == CoreExtension::getAttribute($this->env, $this->source, ($context["filters"] ?? null), "field_filter", [], "any", false, false, false, 40))) {
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
        // line 42
        yield "                            </select>
                        </div>
                        <div class=\"field\">
                            <label for=\"membership_filter\">";
        // line 45
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("Membership status"), "html", null, true);
        yield "</label>
                            <select id=\"membership_filter\" name=\"membership_filter\" class=\"ui search dropdown\">
    ";
        // line 47
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["membership_filter_options"] ?? null));
        foreach ($context['_seq'] as $context["key"] => $context["value"]) {
            // line 48
            yield "                                    <option value=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["key"], "html", null, true);
            yield "\"";
            if (($context["key"] == CoreExtension::getAttribute($this->env, $this->source, ($context["filters"] ?? null), "membership_filter", [], "any", false, false, false, 48))) {
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
        // line 50
        yield "                            </select>
                        </div>
                        <div class=\"field\">
                            <label for=\"filter_account\">";
        // line 53
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("Account activity"), "html", null, true);
        yield "</label>
                            <select id=\"filter_account\" name=\"filter_account\" class=\"ui search dropdown\">
    ";
        // line 55
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["filter_accounts_options"] ?? null));
        foreach ($context['_seq'] as $context["key"] => $context["value"]) {
            // line 56
            yield "                                    <option value=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["key"], "html", null, true);
            yield "\"";
            if (($context["key"] == CoreExtension::getAttribute($this->env, $this->source, ($context["filters"] ?? null), "filter_account", [], "any", false, false, false, 56))) {
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
        // line 58
        yield "                            </select>
                        </div>
                        <div class=\"field\">
                            <label for=\"group_filter\">";
        // line 61
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("Member of group"), "html", null, true);
        yield "</label>
                            <select name=\"group_filter\" id=\"group_filter\" class=\"ui search dropdown\">
                                <option value=\"0\">";
        // line 63
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("Select a group"), "html", null, true);
        yield "</option>
";
        // line 64
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["filter_groups_options"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["group"]) {
            // line 65
            yield "                                <option value=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["group"], "getId", [], "method", false, false, false, 65), "html", null, true);
            yield "\"";
            if ((CoreExtension::getAttribute($this->env, $this->source, ($context["filters"] ?? null), "group_filter", [], "any", false, false, false, 65) == CoreExtension::getAttribute($this->env, $this->source, $context["group"], "getId", [], "method", false, false, false, 65))) {
                yield " selected=\"selected\"";
            }
            yield ">";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["group"], "getIndentName", [], "method", false, false, false, 65);
            yield "</option>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['group'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 67
        yield "                            </select>
                        </div>
                    </div>
                    <div class=\"inline fields\">
                        <label for=\"email_filter\">";
        // line 71
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("With email:"), "html", null, true);
        yield "</label>
                        <div class=\"field\">
                            <div class=\"ui radio checkbox\">
                                <input type=\"radio\" name=\"email_filter\" id=\"filter_dc_email\" value=\"";
        // line 74
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::constant("Galette\\Repository\\Members::FILTER_DC_EMAIL"), "html", null, true);
        yield "\"";
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["filters"] ?? null), "email_filter", [], "any", false, false, false, 74) == Twig\Extension\CoreExtension::constant("Galette\\Repository\\Members::FILTER_DC_EMAIL"))) {
            yield " checked=\"checked\"";
        }
        yield ">
                                <label for=\"filter_dc_email\">";
        // line 75
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("Don't care"), "html", null, true);
        yield "</label>
                            </div>
                        </div>
                        <div class=\"field\">
                            <div class=\"ui radio checkbox\">
                                <input type=\"radio\" name=\"email_filter\" id=\"filter_with_email\" value=\"";
        // line 80
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::constant("Galette\\Repository\\Members::FILTER_W_EMAIL"), "html", null, true);
        yield "\"";
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["filters"] ?? null), "email_filter", [], "any", false, false, false, 80) == Twig\Extension\CoreExtension::constant("Galette\\Repository\\Members::FILTER_W_EMAIL"))) {
            yield " checked=\"checked\"";
        }
        yield ">
                                <label for=\"filter_with_email\">";
        // line 81
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("With"), "html", null, true);
        yield "</label>
                            </div>
                        </div>
                        <div class=\"field\">
                            <div class=\"ui radio checkbox\">
                                <input type=\"radio\" name=\"email_filter\" id=\"filter_without_email\" value=\"";
        // line 86
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::constant("Galette\\Repository\\Members::FILTER_WO_EMAIL"), "html", null, true);
        yield "\"";
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["filters"] ?? null), "email_filter", [], "any", false, false, false, 86) == Twig\Extension\CoreExtension::constant("Galette\\Repository\\Members::FILTER_WO_EMAIL"))) {
            yield " checked=\"checked\"";
        }
        yield ">
                                <label for=\"filter_without_email\">";
        // line 87
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("Without"), "html", null, true);
        yield "</label>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class=\"galetteform ui styled fluid accordion field\">
                <div class=\"active ui title\">
                    <i class=\"jsonly displaynone dropdown icon\" aria-hidden=\"true\"></i>
                    ";
        // line 96
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("Advanced search"), "html", null, true);
        yield "
                </div>
                <div class=\"active content\">
                    <div class=\"two fields\">
                        <div class=\"field\">
                            <label>";
        // line 101
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("Birth date"), "html", null, true);
        yield "</label>
                            <div class=\"two fields\">
                                <div class=\"field\">
                                    <label for=\"birth_date_begin\">";
        // line 104
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("beetween"), "html", null, true);
        yield "</label>
                                    <div class=\"ui calendar\" id=\"birth-rangestart\">
                                        <div class=\"ui input left icon\">
                                            <i class=\"calendar icon\" aria-hidden=\"true\"></i>
                                                <input id=\"birth_date_begin\" name=\"birth_date_begin\" type=\"text\" class=\"birth_date\" maxlength=\"10\" size=\"10\" value=\"";
        // line 108
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["filters"] ?? null), "birth_date_begin", [], "any", false, false, false, 108), "html", null, true);
        yield "\" placeholder=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("yyyy-mm-dd format"), "html", null, true);
        yield "\" />
                                        </div>
                                    </div>
                                </div>
                                <div class=\"field\">
                                    <label for=\"birth_date_end\">";
        // line 113
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("and"), "html", null, true);
        yield "</label>
                                    <div class=\"ui calendar\" id=\"birth-rangeend\">
                                        <div class=\"ui input left icon\">
                                            <i class=\"calendar icon\" aria-hidden=\"true\"></i>
                                                <input id=\"birth_date_end\" name=\"birth_date_end\" type=\"text\" class=\"birth_date\" maxlength=\"10\" size=\"10\" value=\"";
        // line 117
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["filters"] ?? null), "birth_date_end", [], "any", false, false, false, 117), "html", null, true);
        yield "\" placeholder=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("yyyy-mm-dd format"), "html", null, true);
        yield "\"/>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class=\"field\">
                            <label>";
        // line 124
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("Creation date"), "html", null, true);
        yield "</label>
                            <div class=\"two fields\">
                                <div class=\"field\">
                                    <label for=\"creation_date_begin\">";
        // line 127
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("beetween"), "html", null, true);
        yield "</label>
                                    <div class=\"ui calendar\" id=\"creation-rangestart\">
                                        <div class=\"ui input left icon\">
                                            <i class=\"calendar icon\" aria-hidden=\"true\"></i>
                                                <input id=\"creation_date_begin\" name=\"creation_date_begin\" type=\"text\" class=\"modif_date\" maxlength=\"10\" size=\"10\" value=\"";
        // line 131
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["filters"] ?? null), "creation_date_begin", [], "any", false, false, false, 131), "html", null, true);
        yield "\" placeholder=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("yyyy-mm-dd format"), "html", null, true);
        yield "\"/>
                                        </div>
                                    </div>
                                </div>
                                <div class=\"field\">
                                    <label for=\"creation_date_end\">";
        // line 136
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("and"), "html", null, true);
        yield "</label>
                                    <div class=\"ui calendar\" id=\"creation-rangeend\">
                                        <div class=\"ui input left icon\">
                                            <i class=\"calendar icon\" aria-hidden=\"true\"></i>
                                                <input id=\"creation_date_end\" name=\"creation_date_end\" type=\"text\" class=\"modif_date\" maxlength=\"10\" size=\"10\" value=\"";
        // line 140
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["filters"] ?? null), "creation_date_end", [], "any", false, false, false, 140), "html", null, true);
        yield "\" placeholder=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("yyyy-mm-dd format"), "html", null, true);
        yield "\"/>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"two fields\">
                        <div class=\"field\">
                            <label>";
        // line 149
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("Modification date"), "html", null, true);
        yield "</label>
                            <div class=\"two fields\">
                                <div class=\"field\">
                                    <label for=\"modif_date_begin\">";
        // line 152
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("beetween"), "html", null, true);
        yield "</label>
                                    <div class=\"ui calendar\" id=\"modification-rangestart\">
                                        <div class=\"ui input left icon\">
                                            <i class=\"calendar icon\" aria-hidden=\"true\"></i>
                                                <input id=\"modif_date_begin\" name=\"modif_date_begin\" type=\"text\" class=\"modif_date\" maxlength=\"10\" size=\"10\" value=\"";
        // line 156
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["filters"] ?? null), "modif_date_begin", [], "any", false, false, false, 156), "html", null, true);
        yield "\" placeholder=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("yyyy-mm-dd format"), "html", null, true);
        yield "\"/>
                                        </div>
                                    </div>
                                </div>
                                <div class=\"field\">
                                    <label for=\"modif_date_end\">";
        // line 161
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("and"), "html", null, true);
        yield "</label>
                                    <div class=\"ui calendar\" id=\"modification-rangeend\">
                                        <div class=\"ui input left icon\">
                                            <i class=\"calendar icon\" aria-hidden=\"true\"></i>
                                                <input id=\"modif_date_end\" name=\"modif_date_end\" type=\"text\" class=\"modif_date\" maxlength=\"10\" size=\"10\" value=\"";
        // line 165
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["filters"] ?? null), "modif_date_end", [], "any", false, false, false, 165), "html", null, true);
        yield "\" placeholder=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("yyyy-mm-dd format"), "html", null, true);
        yield "\"/>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class=\"field\">
                            <label>";
        // line 172
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("Due date"), "html", null, true);
        yield "</label>
                            <div class=\"two fields\">
                                <div class=\"field\">
                                    <label for=\"due_date_begin\">";
        // line 175
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("beetween"), "html", null, true);
        yield "</label>
                                    <div class=\"ui calendar\" id=\"due-rangestart\">
                                        <div class=\"ui input left icon\">
                                            <i class=\"calendar icon\" aria-hidden=\"true\"></i>
                                                <input id=\"due_date_begin\" name=\"due_date_begin\" type=\"text\" class=\"due_date\" maxlength=\"10\" size=\"10\" value=\"";
        // line 179
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["filters"] ?? null), "due_date_begin", [], "any", false, false, false, 179), "html", null, true);
        yield "\" placeholder=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("yyyy-mm-dd format"), "html", null, true);
        yield "\"/>
                                        </div>
                                    </div>
                                </div>
                                <div class=\"field\">
                                    <label for=\"due_date_end\">";
        // line 184
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("and"), "html", null, true);
        yield "</label>
                                    <div class=\"ui calendar\" id=\"due-rangeend\">
                                        <div class=\"ui input left icon\">
                                            <i class=\"calendar icon\" aria-hidden=\"true\"></i>
                                                <input id=\"due_date_end\" name=\"due_date_end\" type=\"text\" class=\"due_date\" maxlength=\"10\" size=\"10\" value=\"";
        // line 188
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["filters"] ?? null), "due_date_end", [], "any", false, false, false, 188), "html", null, true);
        yield "\" placeholder=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("yyyy-mm-dd format"), "html", null, true);
        yield "\"/>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"two fields\">
                        <div class=\"field\">
                            <div class=\"grouped fields\">
                                <label for=\"show_public_infos\">";
        // line 198
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("Show public infos"), "html", null, true);
        yield "</label>
                                <div class=\"field\">
                                    <div class=\"ui radio checkbox\">
                                        <input type=\"radio\" name=\"show_public_infos\" id=\"show_public_infos_dc\" value=\"";
        // line 201
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::constant("Galette\\Repository\\Members::FILTER_DC_PUBINFOS"), "html", null, true);
        yield "\"";
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["filters"] ?? null), "show_public_infos", [], "any", false, false, false, 201) == Twig\Extension\CoreExtension::constant("Galette\\Repository\\Members::FILTER_DC_PUBINFOS"))) {
            yield " checked=\"checked\"";
        }
        yield ">
                                        <label for=\"show_public_infos_dc\" >";
        // line 202
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("Don't care"), "html", null, true);
        yield "</label>
                                    </div>
                                </div>
                                <div class=\"field\">
                                    <div class=\"ui radio checkbox\">
                                        <input type=\"radio\" name=\"show_public_infos\" id=\"show_public_infos_yes\" value=\"";
        // line 207
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::constant("Galette\\Repository\\Members::FILTER_W_PUBINFOS"), "html", null, true);
        yield "\"";
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["filters"] ?? null), "show_public_infos", [], "any", false, false, false, 207) == Twig\Extension\CoreExtension::constant("Galette\\Repository\\Members::FILTER_W_PUBINFOS"))) {
            yield " checked=\"checked\"";
        }
        yield ">
                                        <label for=\"show_public_infos_yes\" >";
        // line 208
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("Yes"), "html", null, true);
        yield "</label>
                                    </div>
                                </div>
                                <div class=\"field\">
                                    <div class=\"ui radio checkbox\">
                                        <input type=\"radio\" name=\"show_public_infos\" id=\"show_public_infos_no\" value=\"";
        // line 213
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::constant("Galette\\Repository\\Members::FILTER_WO_PUBINFOS"), "html", null, true);
        yield "\"";
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["filters"] ?? null), "show_public_infos", [], "any", false, false, false, 213) == Twig\Extension\CoreExtension::constant("Galette\\Repository\\Members::FILTER_WO_PUBINFOS"))) {
            yield " checked=\"checked\"";
        }
        yield ">
                                        <label for=\"show_public_infos_no\" >";
        // line 214
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("No"), "html", null, true);
        yield "</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class=\"field\">
                            <label for=\"status\">";
        // line 220
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("Status"), "html", null, true);
        yield "</label>
                            <select name=\"status[]\" id=\"status\" multiple=\"\" class=\"ui dropdown\">
                                <option value=\"\">";
        // line 222
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("Status"), "html", null, true);
        yield "</option>
    ";
        // line 223
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["statuts"] ?? null));
        foreach ($context['_seq'] as $context["key"] => $context["value"]) {
            // line 224
            yield "                                    <option value=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["key"], "html", null, true);
            yield "\"";
            if (CoreExtension::inFilter($context["key"], CoreExtension::getAttribute($this->env, $this->source, ($context["filters"] ?? null), "status", [], "any", false, false, false, 224))) {
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
        // line 226
        yield "                            </select>
                        </div>
                    </div>
                </div>
            </div>
            <noscript><div class=\"ui message\">";
        // line 231
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("This feature requires javascript."), "html", null, true);
        yield "</div></noscript>
            <div class=\"jsonly disabled galetteform ui styled fluid accordion field\">
                <div class=\"active ui title\">
                    <i class=\"jsonly displaynone dropdown icon\" aria-hidden=\"true\"></i>
                    ";
        // line 235
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("Advanced groups search"), "html", null, true);
        yield " (";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("Experimental"), "html", null, true);
        yield ")
                    <a
                        href=\"#\"
                        id=\"addbutton_g\"
                        class=\"ui tiny compact icon green button tooltip\"
                        title=\"";
        // line 240
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("Add new group search criteria"), "html", null, true);
        yield "\"
                    >
                        <i class=\"plus icon\" aria-hidden=\"true\"></i>
                        <span class=\"visually-hidden\">";
        // line 243
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("Add new group search criteria"), "html", null, true);
        yield "</span>
                    </a>
                </div>
                <div class=\"active content\">
                    <div class=\"field\">
                        <select name=\"groups_logical_operator\" class=\"operator_selector ui search dropdown\">
                          <option value=\"";
        // line 249
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::constant("Galette\\Filters\\AdvancedMembersList::OP_AND"), "html", null, true);
        yield "\"";
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["filters"] ?? null), "groups_search_log_op", [], "any", false, false, false, 249) == Twig\Extension\CoreExtension::constant("Galette\\Filters\\AdvancedMembersList::OP_AND"))) {
            yield " selected=\"selected\"";
        }
        yield ">";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("In all selected groups"), "html", null, true);
        yield "</option>
                          <option value=\"";
        // line 250
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::constant("Galette\\Filters\\AdvancedMembersList::OP_OR"), "html", null, true);
        yield "\"";
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["filters"] ?? null), "groups_search_log_op", [], "any", false, false, false, 250) == Twig\Extension\CoreExtension::constant("Galette\\Filters\\AdvancedMembersList::OP_OR"))) {
            yield " selected=\"selected\"";
        }
        yield ">";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("In any of selected groups"), "html", null, true);
        yield "</option>
                        </select>
                    </div>
                    <ul id=\"gs_sortable\" class=\"sortable-items\">
                    ";
        // line 254
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, ($context["filters"] ?? null), "groups_search", [], "any", false, false, false, 254));
        foreach ($context['_seq'] as $context["_key"] => $context["gs"]) {
            // line 255
            yield "                        <li class=\"even ui segment unstackable items\">
                            <div class=\"ui item\">
                                <div class=\"ui image\">
                                    <i class=\"arrows alternate icon\" aria-hidden=\"true\"></i>
                                </div>
                                <div>
                                    <select name=\"groups_search[]\" class=\"group_selector ui search dropdown\">
                                        <option value=\"\">";
            // line 262
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("Select a group"), "html", null, true);
            yield "</option>
                        ";
            // line 263
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["filter_groups_options"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["group"]) {
                // line 264
                yield "                                        <option value=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["group"], "getId", [], "method", false, false, false, 264), "html", null, true);
                yield "\"";
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["gs"], "group", [], "any", false, false, false, 264) == CoreExtension::getAttribute($this->env, $this->source, $context["group"], "getId", [], "method", false, false, false, 264))) {
                    yield " selected=\"selected\"";
                }
                yield ">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["group"], "getName", [], "method", false, false, false, 264), "html", null, true);
                yield "</option>
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['group'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 266
            yield "                                    </select>
                                    <a
                                        href=\"#\"
                                        class=\"ui small compact red icon button filtered fright tooltip delete delcriteria\"
                                        title=\"";
            // line 270
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("Remove criteria"), "html", null, true);
            yield "\"
                                    >
                                        <i class=\"trash alt icon\" aria-hidden=\"true\"></i>
                                        <span class=\"visually-hidden\">";
            // line 273
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("Remove criteria"), "html", null, true);
            yield "</span>
                                    </a>
                                </div>
                            </div>
                        </li>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['gs'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 279
        yield "                     </ul>
                </div>
            </div>

            <div class=\"galetteform ui styled fluid accordion field\">
                <div class=\"active ui title\">
                    <i class=\"jsonly displaynone dropdown icon\" aria-hidden=\"true\"></i>
                    ";
        // line 286
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("Within contributions"), "html", null, true);
        yield "
                </div>
                <div class=\"active content\">
                    <div class=\"two fields\">
                        <div class=\"field\">
                            <label>";
        // line 291
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("Creation date"), "html", null, true);
        yield "</label>
                            <div class=\"two fields\">
                                <div class=\"field\">
                                    <label for=\"contrib_creation_date_begin\">";
        // line 294
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("beetween"), "html", null, true);
        yield "</label>
                                    <div class=\"ui calendar\" id=\"contrib-creation-rangestart\">
                                        <div class=\"ui input left icon\">
                                            <i class=\"calendar icon\" aria-hidden=\"true\"></i>
                                            <input id=\"contrib_creation_date_begin\" name=\"contrib_creation_date_begin\" type=\"text\" class=\"modif_date\" maxlength=\"10\" size=\"10\" value=\"";
        // line 298
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["filters"] ?? null), "contrib_creation_date_begin", [], "any", false, false, false, 298), "html", null, true);
        yield "\" placeholder=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("yyyy-mm-dd format"), "html", null, true);
        yield "\"/>
                                        </div>
                                    </div>
                                </div>
                                <div class=\"field\">
                                    <label for=\"contrib_creation_date_end\">";
        // line 303
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("and"), "html", null, true);
        yield "</label>
                                    <div class=\"ui calendar\" id=\"contrib-creation-rangeend\">
                                        <div class=\"ui input left icon\">
                                            <i class=\"calendar icon\" aria-hidden=\"true\"></i>
                                            <input id=\"contrib_creation_date_end\" name=\"contrib_creation_date_end\" type=\"text\" class=\"modif_date\" maxlength=\"10\" size=\"10\" value=\"";
        // line 307
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["filters"] ?? null), "contrib_creation_date_end", [], "any", false, false, false, 307), "html", null, true);
        yield "\" placeholder=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("yyyy-mm-dd format"), "html", null, true);
        yield "\"/>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class=\"field\">
                            <label>";
        // line 314
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("Begin date"), "html", null, true);
        yield "</label>
                            <div class=\"two fields\">
                                <div class=\"field\">
                                    <label for=\"contrib_begin_date_begin\">";
        // line 317
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("beetween"), "html", null, true);
        yield "</label>
                                    <div class=\"ui calendar\" id=\"contrib-begin-rangestart\">
                                        <div class=\"ui input left icon\">
                                            <i class=\"calendar icon\" aria-hidden=\"true\"></i>
                                            <input id=\"contrib_begin_date_begin\" name=\"contrib_begin_date_begin\" type=\"text\" class=\"modif_date\" maxlength=\"10\" size=\"10\" value=\"";
        // line 321
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["filters"] ?? null), "contrib_begin_date_begin", [], "any", false, false, false, 321), "html", null, true);
        yield "\" placeholder=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("yyyy-mm-dd format"), "html", null, true);
        yield "\"/>
                                        </div>
                                    </div>
                                </div>
                                <div class=\"field\">
                                    <label for=\"contrib_begin_date_end\">";
        // line 326
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("and"), "html", null, true);
        yield "</label>
                                    <div class=\"ui calendar\" id=\"contrib-begin-rangeend\">
                                        <div class=\"ui input left icon\">
                                            <i class=\"calendar icon\" aria-hidden=\"true\"></i>
                                            <input id=\"contrib_begin_date_end\" name=\"contrib_begin_date_end\" type=\"text\" class=\"modif_date\" maxlength=\"10\" size=\"10\" value=\"";
        // line 330
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["filters"] ?? null), "contrib_begin_date_end", [], "any", false, false, false, 330), "html", null, true);
        yield "\" placeholder=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("yyyy-mm-dd format"), "html", null, true);
        yield "\"/>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"two fields\">
                        <div class=\"field\">
                            <label>";
        // line 339
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("End date"), "html", null, true);
        yield "</label>
                            <div class=\"two fields\">
                                <div class=\"field\">
                                    <label for=\"contrib_end_date_begin\">";
        // line 342
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("beetween"), "html", null, true);
        yield "</label>
                                    <div class=\"ui calendar\" id=\"contrib-end-rangestart\">
                                        <div class=\"ui input left icon\">
                                            <i class=\"calendar icon\" aria-hidden=\"true\"></i>
                                            <input id=\"contrib_end_date_begin\" name=\"contrib_end_date_begin\" type=\"text\" class=\"due_date\" maxlength=\"10\" size=\"10\" value=\"";
        // line 346
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["filters"] ?? null), "contrib_end_date_begin", [], "any", false, false, false, 346), "html", null, true);
        yield "\" placeholder=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("yyyy-mm-dd format"), "html", null, true);
        yield "\"/>
                                        </div>
                                    </div>
                                </div>
                                <div class=\"field\">
                                    <label for=\"contrib_end_date_end\">";
        // line 351
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("and"), "html", null, true);
        yield "</label>
                                    <div class=\"ui calendar\" id=\"contrib-end-rangeend\">
                                        <div class=\"ui input left icon\">
                                            <i class=\"calendar icon\" aria-hidden=\"true\"></i>
                                                <input id=\"contrib_end_date_end\" name=\"contrib_end_date_end\" type=\"text\" class=\"due_date\" maxlength=\"10\" size=\"10\" value=\"";
        // line 355
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["filters"] ?? null), "contrib_end_date_end", [], "any", false, false, false, 355), "html", null, true);
        yield "\" placeholder=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("yyyy-mm-dd format"), "html", null, true);
        yield "\"/>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class=\"field\">
                            <label>";
        // line 362
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("Amount"), "html", null, true);
        yield "</label>
                            <div class=\"two fields\">
                                <div class=\"field\">
                                    <label for=\"contrib_min_amount\">";
        // line 365
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("beetween"), "html", null, true);
        yield "</label>
                                    <input id=\"contrib_min_amount\" name=\"contrib_min_amount\" type=\"text\" maxlength=\"10\" size=\"10\" value=\"";
        // line 366
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["filters"] ?? null), "contrib_min_amount", [], "any", false, false, false, 366), "html", null, true);
        yield "\"/>
                                </div>
                                <div class=\"field\">
                                    <label for=\"contrib_max_amount\">";
        // line 369
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("and"), "html", null, true);
        yield "</label>
                                    <input id=\"contrib_max_amount\" name=\"contrib_max_amount\" type=\"text\" maxlength=\"10\" size=\"10\" value=\"";
        // line 370
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["filters"] ?? null), "contrib_max_amount", [], "any", false, false, false, 370), "html", null, true);
        yield "\"/>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"two fields\">
                        <div class=\"field\">
                            <label for=\"contributions_types\">";
        // line 377
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("Type"), "html", null, true);
        yield "</label>
                            <select name=\"contributions_types[]\" id=\"contributions_types\" multiple=\"\" class=\"ui dropdown\">
                                <option value=\"\">";
        // line 379
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("Type"), "html", null, true);
        yield "</option>
                            ";
        // line 380
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["contributions_types"] ?? null));
        foreach ($context['_seq'] as $context["key"] => $context["value"]) {
            // line 381
            yield "                                <option value=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["key"], "html", null, true);
            yield "\"";
            if (CoreExtension::inFilter($context["key"], CoreExtension::getAttribute($this->env, $this->source, ($context["filters"] ?? null), "contributions_types", [], "any", false, false, false, 381))) {
                yield " selected=\"selected\"";
            }
            yield ">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["value"], "label", [], "any", false, false, false, 381), "html", null, true);
            yield "</option>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['value'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 383
        yield "                            </select>
                        </div>
                        <div class=\"field\">
                            <label for=\"payments_types\">";
        // line 386
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("Payment type"), "html", null, true);
        yield "</label>
                            <select name=\"payments_types[]\" id=\"payments_types\" multiple=\"\" class=\"ui dropdown\">
                                <option value=\"\">";
        // line 388
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("Payment type"), "html", null, true);
        yield "</option>
                            ";
        // line 389
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["payments_types"] ?? null));
        foreach ($context['_seq'] as $context["key"] => $context["value"]) {
            // line 390
            yield "                                <option value=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["key"], "html", null, true);
            yield "\"";
            if (CoreExtension::inFilter($context["key"], CoreExtension::getAttribute($this->env, $this->source, ($context["filters"] ?? null), "payments_types", [], "any", false, false, false, 390))) {
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
        // line 392
        yield "                            </select>
                        </div>
                    </div>
";
        // line 395
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["contrib_dynamics"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["field"]) {
            // line 396
            yield "                    <div class=\"field\">
    ";
            // line 397
            $context["fid"] = CoreExtension::getAttribute($this->env, $this->source, $context["field"], "getId", [], "method", false, false, false, 397);
            // line 398
            yield "    ";
            if (($this->env->getFunction('get_class')->getCallable()($context["field"]) == "Galette\\DynamicFields\\Choice")) {
                // line 399
                yield "        ";
                $context["rid"] = ("cdsc_" . ($context["fid"] ?? null));
                // line 400
                yield "    ";
            } else {
                // line 401
                yield "        ";
                $context["rid"] = ("cds_" . ($context["fid"] ?? null));
                // line 402
                yield "    ";
            }
            // line 403
            yield "    ";
            if (($this->env->getFunction('get_class')->getCallable()($context["field"]) != "Galette\\DynamicFields\\Boolean")) {
                // line 404
                yield "                        <label for=\"cds";
                if (($this->env->getFunction('get_class')->getCallable()($context["field"]) == "Galette\\DynamicFields\\Choice")) {
                    yield "c";
                }
                yield "_";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["field"], "getId", [], "method", false, false, false, 404), "html", null, true);
                yield "\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["field"], "getName", [], "method", false, false, false, 404), "html", null, true);
                yield "</label>
    ";
            }
            // line 406
            yield "    ";
            if (($this->env->getFunction('get_class')->getCallable()($context["field"]) == "Galette\\DynamicFields\\Line")) {
                // line 407
                yield "                        <input type=\"text\" name=\"cds_";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["field"], "getId", [], "method", false, false, false, 407), "html", null, true);
                yield "\" id=\"cds_";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["field"], "getId", [], "method", false, false, false, 407), "html", null, true);
                yield "\" value=\"";
                if (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["filters"] ?? null), "contrib_dynamic", [], "any", false, true, false, 407), ($context["fid"] ?? null), [], "any", true, true, false, 407)) {
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["filters"] ?? null), "contrib_dynamic", [], "any", false, false, false, 407), ($context["fid"] ?? null), [], "any", false, false, false, 407), "html", null, true);
                }
                yield "\" />
    ";
            } elseif (($this->env->getFunction('get_class')->getCallable()(            // line 408
$context["field"]) == "Galette\\DynamicFields\\Text")) {
                // line 409
                yield "                        <textarea name=\"cds_";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["field"], "getId", [], "method", false, false, false, 409), "html", null, true);
                yield "\" id=\"cds_";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["field"], "getId", [], "method", false, false, false, 409), "html", null, true);
                yield "\">";
                if (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["filters"] ?? null), "contrib_dynamic", [], "any", false, true, false, 409), ($context["fid"] ?? null), [], "any", true, true, false, 409)) {
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["filters"] ?? null), "contrib_dynamic", [], "any", false, false, false, 409), ($context["fid"] ?? null), [], "any", false, false, false, 409), "html", null, true);
                }
                yield "</textarea>
    ";
            } elseif (($this->env->getFunction('get_class')->getCallable()(            // line 410
$context["field"]) == "Galette\\DynamicFields\\Choice")) {
                // line 411
                yield "                        <select name=\"cdsc_";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["field"], "getId", [], "method", false, false, false, 411), "html", null, true);
                yield "[]\" id=\"cdsc_";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["field"], "getId", [], "method", false, false, false, 411), "html", null, true);
                yield "\" multiple=\"multiple\" class=\"ui dropdown\">
                            <option value=\"\">";
                // line 412
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("Select"), "html", null, true);
                yield "</option>
        ";
                // line 413
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["field"], "getValues", [], "method", false, false, false, 413));
                foreach ($context['_seq'] as $context["k"] => $context["choice"]) {
                    // line 414
                    yield "                            <option value=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["k"], "html", null, true);
                    yield "\"";
                    if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["filters"] ?? null), "contrib_dynamic", [], "any", false, true, false, 414), ($context["fid"] ?? null), [], "any", true, true, false, 414) && CoreExtension::inFilter($context["k"], CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["filters"] ?? null), "contrib_dynamic", [], "any", false, false, false, 414), ($context["fid"] ?? null), [], "any", false, false, false, 414)))) {
                        yield " selected=\"selected\"";
                    }
                    yield ">";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["choice"], "html", null, true);
                    yield "</option>
        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['k'], $context['choice'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 416
                yield "                        </select>
    ";
            } elseif (($this->env->getFunction('get_class')->getCallable()(            // line 417
$context["field"]) == "Galette\\DynamicFields\\Boolean")) {
                // line 418
                yield "        <div class=\"ui right aligned toggle checkbox\">
            <input type=\"checkbox\" name=\"cds_";
                // line 419
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["field"], "getId", [], "method", false, false, false, 419), "html", null, true);
                yield "\" id=\"cds_";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["field"], "getId", [], "method", false, false, false, 419), "html", null, true);
                yield "\" value=\"1\" ";
                if (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["filters"] ?? null), "contrib_dynamic", [], "any", false, true, false, 419), ($context["fid"] ?? null), [], "any", true, true, false, 419)) {
                    yield " checked=\"checked\"";
                }
                yield "/>
            <label for=\"cds_";
                // line 420
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["field"], "getId", [], "method", false, false, false, 420), "html", null, true);
                yield "\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["field"], "getName", [], "method", false, false, false, 420), "html", null, true);
                yield "</label>
        </div>
    ";
            } elseif (($this->env->getFunction('get_class')->getCallable()(            // line 422
$context["field"]) == "Galette\\DynamicFields\\Date")) {
                // line 423
                yield "                    <div class=\"ui calendar\" id=\"cds_";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["field"], "getId", [], "method", false, false, false, 423), "html", null, true);
                yield "-rangeend\">
                        <div class=\"ui input left icon\">
                            <i class=\"calendar icon\" aria-hidden=\"true\"></i>
                            <input id=\"cds_";
                // line 426
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["field"], "getId", [], "method", false, false, false, 426), "html", null, true);
                yield "\" name=\"cds_";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["field"], "getId", [], "method", false, false, false, 426), "html", null, true);
                yield "\" type=\"text\" class=\"due_date\" maxlength=\"10\" size=\"10\" value=\"";
                if (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["filters"] ?? null), "contrib_dynamic", [], "any", false, true, false, 426), ($context["fid"] ?? null), [], "any", true, true, false, 426)) {
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["filters"] ?? null), "contrib_dynamic", [], "any", false, false, false, 426), ($context["fid"] ?? null), [], "any", false, false, false, 426), "html", null, true);
                }
                yield "\" placeholder=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("yyyy-mm-dd format"), "html", null, true);
                yield "\"/>
                        </div>
                    </div>
    ";
            }
            // line 430
            yield "                    </div>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['field'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 432
        yield "                </div>
            </div>
                <noscript><div class=\"ui message\">";
        // line 434
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("This feature requires javascript."), "html", null, true);
        yield "</div></noscript>
                <div class=\"jsonly disabled galetteform ui styled fluid accordion field\">
                    <div class=\"active ui title\">
                        <i class=\"jsonly displaynone dropdown icon\" aria-hidden=\"true\"></i>
                        ";
        // line 438
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("Free search"), "html", null, true);
        yield " (";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("Experimental"), "html", null, true);
        yield ")
                        <a
                            href=\"#\"
                            id=\"addbutton\"
                            class=\"ui tiny compact icon green button tooltip\"
                            title=\"";
        // line 443
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("Add new free search criteria"), "html", null, true);
        yield "\"
                        >
                            <i class=\"plus icon\" aria-hidden=\"true\"></i>
                            <span class=\"visually-hidden\">";
        // line 446
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("Add new free search criteria"), "html", null, true);
        yield "</span>
                        </a>
                    </div>
                    <div class=\"active content\">
                        <ul id=\"fs_sortable\" class=\"sortable-items\">
";
        // line 451
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, ($context["filters"] ?? null), "free_search", [], "any", false, false, false, 451));
        foreach ($context['_seq'] as $context["_key"] => $context["fs"]) {
            // line 452
            yield "                            <li class=\"even ui segment unstackable items\">
                                <div class=\"ui item\">
                                    <div class=\"ui image\">
                                        <i class=\"arrows alternate icon\" aria-hidden=\"true\"></i>
                                    </div>
                                    <div class=\"inline fields\">
                                        <select name=\"free_logical_operator[]\" class=\"operator_selector ui selection dropdown\">
                                            <option value=\"";
            // line 459
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::constant("Galette\\Filters\\AdvancedMembersList::OP_AND"), "html", null, true);
            yield "\"";
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["fs"], "log_op", [], "any", false, false, false, 459) == Twig\Extension\CoreExtension::constant("Galette\\Filters\\AdvancedMembersList::OP_AND"))) {
                yield " selected=\"selected\"";
            }
            yield ">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("and"), "html", null, true);
            yield "</option>
                                            <option value=\"";
            // line 460
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::constant("Galette\\Filters\\AdvancedMembersList::OP_OR"), "html", null, true);
            yield "\"";
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["fs"], "log_op", [], "any", false, false, false, 460) == Twig\Extension\CoreExtension::constant("Galette\\Filters\\AdvancedMembersList::OP_OR"))) {
                yield " selected=\"selected\"";
            }
            yield ">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("or"), "html", null, true);
            yield "</option>
                                        </select>
                                        <div class=\"field_selector ui search selection dropdown origselect\">
                                            <input type=\"hidden\" name=\"free_field[]\" value=\"";
            // line 463
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["fs"], "field", [], "any", false, false, false, 463), "html", null, true);
            yield "\">
                                            <i class=\"dropdown icon\"></i>
                                            <div class=\"text\">";
            // line 465
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("Select a field"), "html", null, true);
            yield "</div>
                                            <div class=\"menu\">
    ";
            // line 467
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["search_fields"] ?? null));
            foreach ($context['_seq'] as $context["key"] => $context["field"]) {
                // line 468
                yield "        ";
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["fs"], "field", [], "any", false, false, false, 468) == $context["key"])) {
                    // line 469
                    yield "            ";
                    if (((is_string($__internal_compile_0 = $context["key"]) && is_string($__internal_compile_1 = "date_") && str_starts_with($__internal_compile_0, $__internal_compile_1)) || ($context["key"] == "ddn_adh"))) {
                        // line 470
                        yield "                ";
                        $context["type"] = Twig\Extension\CoreExtension::constant("Galette\\DynamicFields\\DynamicField::DATE");
                        // line 471
                        yield "            ";
                    } elseif (($context["key"] == Twig\Extension\CoreExtension::constant("Galette\\Entity\\Status::PK"))) {
                        // line 472
                        yield "                ";
                        $context["type"] = Twig\Extension\CoreExtension::constant("Galette\\DynamicFields\\DynamicField::CHOICE");
                        // line 473
                        yield "                ";
                        $context["fvalues"] = ($context["statuts"] ?? null);
                        // line 474
                        yield "            ";
                    } elseif (($context["key"] == "sexe_adh")) {
                        // line 475
                        yield "                ";
                        $context["type"] = Twig\Extension\CoreExtension::constant("Galette\\DynamicFields\\DynamicField::CHOICE");
                        // line 476
                        yield "                ";
                        $context["fvalues"] = [Twig\Extension\CoreExtension::constant("Galette\\Entity\\Adherent::NC") => $this->env->getFunction('_T')->getCallable()("Unspecified"), Twig\Extension\CoreExtension::constant("Galette\\Entity\\Adherent::MAN") => $this->env->getFunction('_T')->getCallable()("Man"), Twig\Extension\CoreExtension::constant("Galette\\Entity\\Adherent::WOMAN") => $this->env->getFunction('_T')->getCallable()("Woman")];
                        // line 481
                        yield "            ";
                    } else {
                        // line 482
                        yield "                ";
                        $context["type"] = Twig\Extension\CoreExtension::constant("Galette\\DynamicFields\\DynamicField::LINE");
                        // line 483
                        yield "            ";
                    }
                    // line 484
                    yield "        ";
                }
                // line 485
                yield "                                                <div class=\"item";
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["fs"], "field", [], "any", false, false, false, 485) == $context["key"])) {
                    yield " active selected";
                }
                yield "\" data-value=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["key"], "html", null, true);
                yield "\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["field"], "label", [], "any", false, false, false, 485), "html", null, true);
                yield "</div>
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['key'], $context['field'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 487
            yield "    ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["adh_dynamics"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["field"]) {
                // line 488
                yield "        ";
                if (($this->env->getFunction('get_class')->getCallable()($context["field"]) != "Galette\\DynamicFields\\Separator")) {
                    // line 489
                    yield "            ";
                    $context["fid"] = CoreExtension::getAttribute($this->env, $this->source, $context["field"], "getId", [], "method", false, false, false, 489);
                    // line 490
                    yield "            ";
                    $context["rid"] = ("dyn_" . ($context["fid"] ?? null));
                    // line 491
                    yield "            ";
                    if ((CoreExtension::getAttribute($this->env, $this->source, $context["fs"], "field", [], "any", false, false, false, 491) == ($context["rid"] ?? null))) {
                        // line 492
                        yield "                ";
                        $context["cur_field"] = $context["field"];
                        // line 493
                        yield "            ";
                    }
                    // line 494
                    yield "        ";
                }
                // line 495
                yield "                                                <div class=\"item";
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["fs"], "field", [], "any", false, false, false, 495) == ($context["rid"] ?? null))) {
                    yield " active selected";
                }
                yield "\" data-value=\"dyn_";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["field"], "getId", [], "method", false, false, false, 495), "html", null, true);
                yield "\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["field"], "getName", [], "method", false, false, false, 495), "html", null, true);
                yield "</div>
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['field'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 497
            yield "    ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["adh_socials"] ?? null));
            foreach ($context['_seq'] as $context["type"] => $context["label"]) {
                // line 498
                yield "        ";
                $context["rid"] = ("socials_" . $context["type"]);
                // line 499
                yield "        ";
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["fs"], "field", [], "any", false, false, false, 499) == ($context["rid"] ?? null))) {
                    // line 500
                    yield "            ";
                    $context["cur_field"] = $context["type"];
                    // line 501
                    yield "        ";
                }
                // line 502
                yield "                                                <div class=\"item";
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["fs"], "field", [], "any", false, false, false, 502) == ($context["rid"] ?? null))) {
                    yield " active selected";
                }
                yield "\" data-value=\"socials_";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["type"], "html", null, true);
                yield "\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["label"], "html", null, true);
                yield "</div>
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['type'], $context['label'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 504
            yield "                                            </div>
                                        </div>
    ";
            // line 507
            yield "    ";
            // line 508
            yield "    ";
            if ( !array_key_exists("type", $context)) {
                $context["type"] = null;
            }
            // line 509
            yield "                                        <div class=\"data inline fields\">
                                            <input type=\"hidden\" name=\"free_type[]\" value=\"";
            // line 510
            if (array_key_exists("cur_field", $context)) {
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["cur_field"] ?? null), "getType", [], "method", false, false, false, 510), "html", null, true);
            }
            yield "\"/>
    ";
            // line 511
            if ((array_key_exists("cur_field", $context) && (($this->env->getFunction('get_class')->getCallable()(($context["cur_field"] ?? null)) == "Galette\\DynamicFields\\Choice") || (($context["type"] ?? null) == Twig\Extension\CoreExtension::constant("Galette\\DynamicFields\\DynamicField::CHOICE"))))) {
                // line 512
                yield "                                            <select name=\"free_query_operator[]\" class=\"free_operator ui selection dropdown\">
                                                <option value=\"";
                // line 513
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::constant("Galette\\Filters\\AdvancedMembersList::OP_EQUALS"), "html", null, true);
                yield "\"";
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["fs"], "qry_op", [], "any", false, false, false, 513) == Twig\Extension\CoreExtension::constant("Galette\\Filters\\AdvancedMembersList::OP_EQUALS"))) {
                    yield " selected=\"selected\"";
                }
                yield ">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("is"), "html", null, true);
                yield "</option>
                                                <option value=\"";
                // line 514
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::constant("Galette\\Filters\\AdvancedMembersList::OP_NOT_EQUALS"), "html", null, true);
                yield "\"";
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["fs"], "qry_op", [], "any", false, false, false, 514) == Twig\Extension\CoreExtension::constant("Galette\\Filters\\AdvancedMembersList::OP_NOT_EQUALS"))) {
                    yield " selected=\"selected\"";
                }
                yield ">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("is not"), "html", null, true);
                yield "</option>
                                            </select>
                                            <select name=\"free_text[]\" class=\"free_text ui search dropdown\">
        ";
                // line 517
                if ((array_key_exists("cur_field", $context) && ($this->env->getFunction('get_class')->getCallable()(($context["cur_field"] ?? null)) == "Galette\\DynamicFields\\Choice"))) {
                    // line 518
                    yield "            ";
                    $context['_parent'] = $context;
                    $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, ($context["cur_field"] ?? null), "getValues", [], "method", false, false, false, 518));
                    foreach ($context['_seq'] as $context["key"] => $context["value"]) {
                        // line 519
                        yield "                                                <option value=\"";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["key"], "html", null, true);
                        yield "\"";
                        if (($context["key"] == CoreExtension::getAttribute($this->env, $this->source, $context["fs"], "search", [], "any", false, false, false, 519))) {
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
                    // line 521
                    yield "        ";
                } else {
                    // line 522
                    yield "            ";
                    $context['_parent'] = $context;
                    $context['_seq'] = CoreExtension::ensureTraversable(($context["fvalues"] ?? null));
                    foreach ($context['_seq'] as $context["key"] => $context["value"]) {
                        // line 523
                        yield "                                                <option value=\"";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["key"], "html", null, true);
                        yield "\"";
                        if (($context["key"] == CoreExtension::getAttribute($this->env, $this->source, $context["fs"], "search", [], "any", false, false, false, 523))) {
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
                    // line 525
                    yield "        ";
                }
                // line 526
                yield "                                            </select>
    ";
            } elseif ((            // line 527
array_key_exists("cur_field", $context) && (($this->env->getFunction('get_class')->getCallable()(($context["cur_field"] ?? null)) == "Galette\\DynamicFields\\Date") || (($context["type"] ?? null) == Twig\Extension\CoreExtension::constant("Galette\\DynamicFields\\DynamicField::DATE"))))) {
                // line 528
                yield "                                            <select name=\"free_query_operator[]\" class=\"free_operator ui selection dropdown\">
                                                <option value=\"";
                // line 529
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::constant("Galette\\Filters\\AdvancedMembersList::OP_EQUALS"), "html", null, true);
                yield "\"";
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["fs"], "qry_op", [], "any", false, false, false, 529) == Twig\Extension\CoreExtension::constant("Galette\\Filters\\AdvancedMembersList::OP_EQUALS"))) {
                    yield " selected=\"selected\"";
                }
                yield ">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("is"), "html", null, true);
                yield "</option>
                                                <option value=\"";
                // line 530
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::constant("Galette\\Filters\\AdvancedMembersList::OP_BEFORE"), "html", null, true);
                yield "\"";
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["fs"], "qry_op", [], "any", false, false, false, 530) == Twig\Extension\CoreExtension::constant("Galette\\Filters\\AdvancedMembersList::OP_BEFORE"))) {
                    yield " selected=\"selected\"";
                }
                yield ">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("before"), "html", null, true);
                yield "</option>
                                                <option value=\"";
                // line 531
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::constant("Galette\\Filters\\AdvancedMembersList::OP_AFTER"), "html", null, true);
                yield "\"";
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["fs"], "qry_op", [], "any", false, false, false, 531) == Twig\Extension\CoreExtension::constant("Galette\\Filters\\AdvancedMembersList::OP_AFTER"))) {
                    yield " selected=\"selected\"";
                }
                yield ">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("after"), "html", null, true);
                yield "</option>
                                            </select>
                                            <input type=\"text\" name=\"free_text[]\" value=\"";
                // line 533
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["fs"], "search", [], "any", false, false, false, 533), $this->env->getFunction('_T')->getCallable()("Y-m-d")), "html", null, true);
                yield "\" class=\"modif_date\" maxlength=\"10\" size=\"10\" placeholder=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("yyyy-mm-dd format"), "html", null, true);
                yield "\"/>
    ";
            } elseif ((            // line 534
array_key_exists("cur_field", $context) && (($this->env->getFunction('get_class')->getCallable()(($context["cur_field"] ?? null)) == "Galette\\DynamicFields\\Boolean") || (($context["type"] ?? null) == Twig\Extension\CoreExtension::constant("Galette\\DynamicFields\\DynamicField::BOOLEAN"))))) {
                // line 535
                yield "                                            <select name=\"free_query_operator[]\" class=\"free_operator ui selection dropdown\">
                                                <option value=\"";
                // line 536
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::constant("Galette\\Filters\\AdvancedMembersList::OP_EQUALS"), "html", null, true);
                yield "\"";
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["fs"], "qry_op", [], "any", false, false, false, 536) == Twig\Extension\CoreExtension::constant("Galette\\Filters\\AdvancedMembersList::OP_EQUALS"))) {
                    yield " selected=\"selected\"";
                }
                yield ">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("is"), "html", null, true);
                yield "</option>
                                            </select>
                                            <input type=\"radio\" name=\"free_text[]\" id=\"free_text_yes\" value=\"1\"";
                // line 538
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["fs"], "search", [], "any", false, false, false, 538) == 1)) {
                    yield " checked=\"checked\"";
                }
                yield "/><label for=\"free_text_yes\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("Yes"), "html", null, true);
                yield "</label>
                                            <input type=\"radio\" name=\"free_text[]\" id=\"free_text_no\" value=\"0\"";
                // line 539
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["fs"], "search", [], "any", false, false, false, 539) == 0)) {
                    yield " checked=\"checked\"";
                }
                yield "/><label for=\"free_text_no\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("No"), "html", null, true);
                yield "</label>
    ";
            } else {
                // line 541
                yield "                                            <select name=\"free_query_operator[]\" class=\"free_operator ui selection dropdown\">
                                                <option value=\"";
                // line 542
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::constant("Galette\\Filters\\AdvancedMembersList::OP_EQUALS"), "html", null, true);
                yield "\"";
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["fs"], "qry_op", [], "any", false, false, false, 542) == Twig\Extension\CoreExtension::constant("Galette\\Filters\\AdvancedMembersList::OP_EQUALS"))) {
                    yield " selected=\"selected\"";
                }
                yield ">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("is"), "html", null, true);
                yield "</option>
                                                <option value=\"";
                // line 543
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::constant("Galette\\Filters\\AdvancedMembersList::OP_CONTAINS"), "html", null, true);
                yield "\"";
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["fs"], "qry_op", [], "any", false, false, false, 543) == Twig\Extension\CoreExtension::constant("Galette\\Filters\\AdvancedMembersList::OP_CONTAINS"))) {
                    yield " selected=\"selected\"";
                }
                yield ">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("contains"), "html", null, true);
                yield "</option>
                                                <option value=\"";
                // line 544
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::constant("Galette\\Filters\\AdvancedMembersList::OP_NOT_EQUALS"), "html", null, true);
                yield "\"";
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["fs"], "qry_op", [], "any", false, false, false, 544) == Twig\Extension\CoreExtension::constant("Galette\\Filters\\AdvancedMembersList::OP_NOT_EQUALS"))) {
                    yield " selected=\"selected\"";
                }
                yield ">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("is not"), "html", null, true);
                yield "</option>
                                                <option value=\"";
                // line 545
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::constant("Galette\\Filters\\AdvancedMembersList::OP_NOT_CONTAINS"), "html", null, true);
                yield "\"";
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["fs"], "qry_op", [], "any", false, false, false, 545) == Twig\Extension\CoreExtension::constant("Galette\\Filters\\AdvancedMembersList::OP_NOT_CONTAINS"))) {
                    yield " selected=\"selected\"";
                }
                yield ">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("do not contains"), "html", null, true);
                yield "</option>
                                                <option value=\"";
                // line 546
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::constant("Galette\\Filters\\AdvancedMembersList::OP_STARTS_WITH"), "html", null, true);
                yield "\"";
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["fs"], "qry_op", [], "any", false, false, false, 546) == Twig\Extension\CoreExtension::constant("Galette\\Filters\\AdvancedMembersList::OP_STARTS_WITH"))) {
                    yield " selected=\"selected\"";
                }
                yield ">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("starts with"), "html", null, true);
                yield "</option>
                                                <option value=\"";
                // line 547
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::constant("Galette\\Filters\\AdvancedMembersList::OP_ENDS_WITH"), "html", null, true);
                yield "\"";
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["fs"], "qry_op", [], "any", false, false, false, 547) == Twig\Extension\CoreExtension::constant("Galette\\Filters\\AdvancedMembersList::OP_ENDS_WITH"))) {
                    yield " selected=\"selected\"";
                }
                yield ">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("ends with"), "html", null, true);
                yield "</option>
                                            </select>
                                            <input type=\"text\" name=\"free_text[]\" value=\"";
                // line 549
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["fs"], "search", [], "any", false, false, false, 549), "html", null, true);
                yield "\"";
                if ((array_key_exists("cur_field", $context) && ($this->env->getFunction('get_class')->getCallable()(($context["cur_field"] ?? null)) == "Galette\\DynamicFields\\Text"))) {
                    yield " class=\"large\"";
                }
                yield "/>
    ";
            }
            // line 551
            yield "                                        </div>
                                        <a
                                            href=\"#\"
                                            class=\"ui small compact red icon button filtered fright tooltip delete delcriteria\"
                                            title=\"";
            // line 555
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("Remove criteria"), "html", null, true);
            yield "\"
                                        >
                                            <i class=\"trash alt icon\" aria-hidden=\"true\"></i>
                                            <span class=\"visually-hidden\">";
            // line 558
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("Remove criteria"), "html", null, true);
            yield "</span>
                                        </a>

                                    </div>
                                </div>
                            </li>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['fs'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 565
        yield "                        </ul>
                    </div>
                </div>
            <div class=\"ui basic center aligned segment\">
                <button type=\"submit\" class=\"ui labeled icon primary button action\">
                    <i class=\"search icon\" aria-hidden=\"true\"></i>
                    ";
        // line 571
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("Filter"), "html", null, true);
        yield "
                </button>
                <input type=\"hidden\" name=\"advanced_filtering\" value=\"true\" />
                <button type=\"submit\" name=\"clear_adv_filter\" class=\"ui labeled icon button delete\">
                    <i class=\"trash alt red icon\" aria-hidden=\"true\"></i>
                    ";
        // line 576
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("Clear filter"), "html", null, true);
        yield "
                </button>
                ";
        // line 578
        yield from         $this->loadTemplate("components/forms/csrf.html.twig", "pages/advanced_search.html.twig", 578)->unwrap()->yield($context);
        // line 579
        yield "            </div>
        </form>
";
        return; yield '';
    }

    // line 583
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 584
        yield "        <script type=\"text/javascript\">
            var _operators = {
                op_equals: {
                    id: ";
        // line 587
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::constant("Galette\\Filters\\AdvancedMembersList::OP_EQUALS"), "html", null, true);
        yield ",
                    name: \"";
        // line 588
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("is"), "html", null, true);
        yield "\"
                },
                op_contains: {
                    id: ";
        // line 591
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::constant("Galette\\Filters\\AdvancedMembersList::OP_CONTAINS"), "html", null, true);
        yield ",
                    name: \"";
        // line 592
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("contains"), "html", null, true);
        yield "\"
                },
                op_not_equals: {
                    id: ";
        // line 595
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::constant("Galette\\Filters\\AdvancedMembersList::OP_NOT_EQUALS"), "html", null, true);
        yield ",
                    name: \"";
        // line 596
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("is not"), "html", null, true);
        yield "\"
                },
                op_not_contains: {
                    id: ";
        // line 599
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::constant("Galette\\Filters\\AdvancedMembersList::OP_NOT_CONTAINS"), "html", null, true);
        yield ",
                    name: \"";
        // line 600
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("do not contains"), "html", null, true);
        yield "\"
                },
                op_starts_with: {
                    id: ";
        // line 603
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::constant("Galette\\Filters\\AdvancedMembersList::OP_STARTS_WITH"), "html", null, true);
        yield ",
                    name: \"";
        // line 604
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("starts with"), "html", null, true);
        yield "\"
                },
                op_ends_with: {
                    id: ";
        // line 607
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::constant("Galette\\Filters\\AdvancedMembersList::OP_ENDS_WITH"), "html", null, true);
        yield ",
                    name: \"";
        // line 608
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("ends with"), "html", null, true);
        yield "\"
                },
                op_before: {
                    id: ";
        // line 611
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::constant("Galette\\Filters\\AdvancedMembersList::OP_BEFORE"), "html", null, true);
        yield ",
                    name: \"";
        // line 612
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("before"), "html", null, true);
        yield "\"
                },
                op_after: {
                    id: ";
        // line 615
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::constant("Galette\\Filters\\AdvancedMembersList::OP_AFTER"), "html", null, true);
        yield ",
                    name: \"";
        // line 616
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("after"), "html", null, true);
        yield "\"
                },
            };

            var _fields = {
";
        // line 621
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["search_fields"] ?? null));
        foreach ($context['_seq'] as $context["key"] => $context["field"]) {
            // line 622
            yield "    ";
            if (((is_string($__internal_compile_2 = $context["key"]) && is_string($__internal_compile_3 = "date_") && str_starts_with($__internal_compile_2, $__internal_compile_3)) || ($context["key"] == "ddn_adh"))) {
                // line 623
                yield "        ";
                $context["type"] = Twig\Extension\CoreExtension::constant("Galette\\DynamicFields\\DynamicField::DATE");
                // line 624
                yield "    ";
            } elseif (($context["key"] == Twig\Extension\CoreExtension::constant("Galette\\Entity\\Status::PK"))) {
                // line 625
                yield "        ";
                $context["type"] = Twig\Extension\CoreExtension::constant("Galette\\DynamicFields\\DynamicField::CHOICE");
                // line 626
                yield "        ";
                $context["fvalues"] = ($context["statuts"] ?? null);
                // line 627
                yield "    ";
            } elseif (($context["key"] == "sexe_adh")) {
                // line 628
                yield "        ";
                $context["type"] = Twig\Extension\CoreExtension::constant("Galette\\DynamicFields\\DynamicField::CHOICE");
                // line 629
                yield "        ";
                $context["fvalues"] = [Twig\Extension\CoreExtension::constant("Galette\\Entity\\Adherent::NC") => $this->env->getFunction('_T')->getCallable()("Unspecified"), Twig\Extension\CoreExtension::constant("Galette\\Entity\\Adherent::MAN") => $this->env->getFunction('_T')->getCallable()("Man"), Twig\Extension\CoreExtension::constant("Galette\\Entity\\Adherent::WOMAN") => $this->env->getFunction('_T')->getCallable()("Woman")];
                // line 634
                yield "    ";
            } else {
                // line 635
                yield "        ";
                $context["type"] = Twig\Extension\CoreExtension::constant("Galette\\DynamicFields\\DynamicField::LINE");
                // line 636
                yield "    ";
            }
            // line 637
            yield "                ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["key"], "html", null, true);
            yield ": { type:'";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["type"] ?? null), "html", null, true);
            yield "'";
            if (array_key_exists("fvalues", $context)) {
                yield ", values: ";
                yield json_encode(($context["fvalues"] ?? null));
            }
            yield " },
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['field'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 639
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["adh_dynamics"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["field"]) {
            // line 640
            yield "    ";
            if (($this->env->getFunction('get_class')->getCallable()($context["field"]) == "Galette\\DynamicFields\\Separator")) {
                // line 641
                yield "                ";
            } elseif (($this->env->getFunction('get_class')->getCallable()(            // line 642
$context["field"]) == "Galette\\DynamicFields\\Choice")) {
                // line 643
                yield "                dyn_";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["field"], "getId", [], "method", false, false, false, 643), "html", null, true);
                yield ": { type:'";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["field"], "getType", [], "method", false, false, false, 643), "html", null, true);
                yield "', values: ";
                yield json_encode(CoreExtension::getAttribute($this->env, $this->source, $context["field"], "getValues", [], "method", false, false, false, 643));
                yield " },
    ";
            } else {
                // line 645
                yield "                dyn_";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["field"], "getId", [], "method", false, false, false, 645), "html", null, true);
                yield ": { type:'";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["field"], "getType", [], "method", false, false, false, 645), "html", null, true);
                yield "' },
    ";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['field'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 648
        yield "            };

            ";
        // line 650
        yield from         $this->loadTemplate("elements/js/calendar.js.twig", "pages/advanced_search.html.twig", 650)->unwrap()->yield(CoreExtension::merge($context, ["selector" => ".fs-calendar"]));
        // line 651
        yield "
            var _fs_dropdown = function(selector) {
                if ( !selector ) {
                    selector = '.origselect';
                }

                \$(selector).dropdown({
                    action: function(text, value, element) {
                        var element = element.parentElement !== undefined ? element : element[0];
                        var dropdown = element.parentElement.parentElement;
                        \$(dropdown).find('div.text').html(text);
                        \$(dropdown).dropdown('set selected', value);
                        \$(dropdown).dropdown('hide');

                        var _field = _fields[value];
                        var _type = _field.type;
                        var _html;
                        switch(_type) {
                            /* FIXME */
                            case '";
        // line 670
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::constant("Galette\\DynamicFields\\DynamicField::BOOLEAN"), "html", null, true);
        yield "':
                                _html  = _getOperatorSelector(['op_equals']);
                                _html += '<input type=\"radio\" name=\"free_text[]\" id=\"free_text_yes\" value=\"1\"/><label for=\"free_text_yes\">";
        // line 672
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("Yes"), "html", null, true);
        yield "</label><input type=\"radio\" name=\"free_text[]\" id=\"free_text_no\" value=\"0\"/><label for=\"free_text_no\">";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("No"), "html", null, true);
        yield "</label>';
                                break;
                            case '";
        // line 674
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::constant("Galette\\DynamicFields\\DynamicField::CHOICE"), "html", null, true);
        yield "':
                                _html = _getOperatorSelector(['op_equals', 'op_not_equals']);
                                var _options = '';
                                if (Array.isArray(_field.values)) {
                                    for (var i = 0; i < _field.values.length; i++) {
                                        _options += '<option value=\"' + i + '\">' + _field.values[i] + '</option>';
                                    }
                                } else {
                                    for (key in _field.values) {
                                        _options += '<option value=\"' + key + '\">' + _field.values[key] + '</option>';
                                    }
                                }
                                _html += '<select name=\"free_text[]\" class=\"ui search selection dropdown\">' + _options + '</select>';
                                break;
                            case '";
        // line 688
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::constant("Galette\\DynamicFields\\DynamicField::DATE"), "html", null, true);
        yield "':
                                _html  = _getOperatorSelector(['op_equals', 'op_before', 'op_after']);
                                _html += '<div class=\"ui calendar fs-calendar\">'
                                _html += '<div class=\"ui input left icon\">'
                                _html += '<i class=\"calendar icon\" aria-hidden=\"true\"></i>'
                                _html += '<input type=\"text\" name=\"free_text[]\" class=\"modif_date\" placeholder=\"";
        // line 693
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("yyyy-mm-dd format"), "html", null, true);
        yield "\"/>';
                                _html += '</div>'
                                _html += '</div>'
                                break;
                            default:
                                _html  = _getOperatorSelector(['op_equals', 'op_contains', 'op_not_equals', 'op_not_contains', 'op_starts_with', 'op_ends_with']);
                                _html += '<input type=\"text\" name=\"free_text[]\"/>';
                                break;

                        }
                        _html += '<input type=\"hidden\" name=\"free_type[]\" value=\"' + _type + '\"/>';
                        _current_fields = element.parentElement.parentElement.parentElement;
                        \$(_current_fields).find('div.data').html(_html);
                        \$(_current_fields).find('div.data .ui.dropdown').dropdown('refresh');
                        _calendarWidget('.fs-calendar');
                    }
                });
            }

            var _newFilter = function(elt) {
                elt.find('div.data').html('');
                elt.find('.item.selected').removeClass('active').removeClass('selected');
                elt.find('.origselect').dropdown('set value', '');
                elt.find('.origselect').find('div.text').html('";
        // line 716
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("Select a field"), "html", null, true);
        yield "');
            }
            var _rmFilter = function(elt) {
                if ( !elt ) {
                    elt = \$('li');
                }
                elt.find('.delcriteria').click(function(){
                    var _this = \$(this);
                    if ( _this.parents('ul').find('li').length > 1 ) {
                        _this.parent('div').parent('.item').parent('li').remove();
                    } else {
                        _newFilter(_this.parent('div').parent('.item').parent('li'));
                    }
                    return false;
                });
            }
            var _getOperatorSelector = function(list) {
                var _options = '';
                for (var i = 0; i < list.length; i++) {
                    var _operator = _operators[list[i]];
                    _options += '<option value=\"' + _operator.id + '\">' + _operator.name + '</option>';
                }
                return '<select name=\"free_query_operator[]\" class=\"free_operator ui selection dropdown\">' + _options + '</select>';
            }

            var _initSortable = function(){
                var _freesearch = document.getElementById('fs_sortable');
                var _groupsearch = document.getElementById('gs_sortable');

                new Sortable(_freesearch, {
                    animation: 150,
                    ghostClass: 'yellow',
                    filter: '.filtered',
                    onUpdate: function (evt) {
                        var _item = evt.item;
                        _item.classList.add('yellow');
                    }
                });

                new Sortable(_groupsearch, {
                    animation: 150,
                    ghostClass: 'yellow',
                    filter: '.filtered',
                    onAdd: function (evt) {
                        var _item = evt.item;
                        _item.classList.add('yellow');
                    }
                });
            }

            \$(function(){
                _initSortable();
                _fs_dropdown();
                _rmFilter();

               \$('#addbutton_g').click(function(){
                    \$('#gs_sortable li:first')
                            .clone() // copy
                            .insertAfter('#gs_sortable li:last'); // where
                    \$('#gs_sortable li:last .ui.dropdown').dropdown('refresh');
                    _fs_dropdown();
                    _rmFilter();
                    return false;
                });

                \$('#addbutton').click(function(){
                    \$('#fs_sortable li:first')
                            .clone() // copy
                            .insertAfter('#fs_sortable li:last'); // where
                    \$('#fs_sortable li:last .ui.dropdown:not(.origselect)').dropdown('refresh');
                    _fs_dropdown();
                    _rmFilter();
                    return false;
                });
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
        return "pages/advanced_search.html.twig";
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
        return array (  1819 => 716,  1793 => 693,  1785 => 688,  1768 => 674,  1761 => 672,  1756 => 670,  1735 => 651,  1733 => 650,  1729 => 648,  1717 => 645,  1707 => 643,  1705 => 642,  1703 => 641,  1700 => 640,  1696 => 639,  1680 => 637,  1677 => 636,  1674 => 635,  1671 => 634,  1668 => 629,  1665 => 628,  1662 => 627,  1659 => 626,  1656 => 625,  1653 => 624,  1650 => 623,  1647 => 622,  1643 => 621,  1635 => 616,  1631 => 615,  1625 => 612,  1621 => 611,  1615 => 608,  1611 => 607,  1605 => 604,  1601 => 603,  1595 => 600,  1591 => 599,  1585 => 596,  1581 => 595,  1575 => 592,  1571 => 591,  1565 => 588,  1561 => 587,  1556 => 584,  1552 => 583,  1545 => 579,  1543 => 578,  1538 => 576,  1530 => 571,  1522 => 565,  1509 => 558,  1503 => 555,  1497 => 551,  1488 => 549,  1477 => 547,  1467 => 546,  1457 => 545,  1447 => 544,  1437 => 543,  1427 => 542,  1424 => 541,  1415 => 539,  1407 => 538,  1396 => 536,  1393 => 535,  1391 => 534,  1385 => 533,  1374 => 531,  1364 => 530,  1354 => 529,  1351 => 528,  1349 => 527,  1346 => 526,  1343 => 525,  1328 => 523,  1323 => 522,  1320 => 521,  1305 => 519,  1300 => 518,  1298 => 517,  1286 => 514,  1276 => 513,  1273 => 512,  1271 => 511,  1265 => 510,  1262 => 509,  1257 => 508,  1255 => 507,  1251 => 504,  1236 => 502,  1233 => 501,  1230 => 500,  1227 => 499,  1224 => 498,  1219 => 497,  1204 => 495,  1201 => 494,  1198 => 493,  1195 => 492,  1192 => 491,  1189 => 490,  1186 => 489,  1183 => 488,  1178 => 487,  1163 => 485,  1160 => 484,  1157 => 483,  1154 => 482,  1151 => 481,  1148 => 476,  1145 => 475,  1142 => 474,  1139 => 473,  1136 => 472,  1133 => 471,  1130 => 470,  1127 => 469,  1124 => 468,  1120 => 467,  1115 => 465,  1110 => 463,  1098 => 460,  1088 => 459,  1079 => 452,  1075 => 451,  1067 => 446,  1061 => 443,  1051 => 438,  1044 => 434,  1040 => 432,  1033 => 430,  1018 => 426,  1011 => 423,  1009 => 422,  1002 => 420,  992 => 419,  989 => 418,  987 => 417,  984 => 416,  969 => 414,  965 => 413,  961 => 412,  954 => 411,  952 => 410,  941 => 409,  939 => 408,  928 => 407,  925 => 406,  913 => 404,  910 => 403,  907 => 402,  904 => 401,  901 => 400,  898 => 399,  895 => 398,  893 => 397,  890 => 396,  886 => 395,  881 => 392,  866 => 390,  862 => 389,  858 => 388,  853 => 386,  848 => 383,  833 => 381,  829 => 380,  825 => 379,  820 => 377,  810 => 370,  806 => 369,  800 => 366,  796 => 365,  790 => 362,  778 => 355,  771 => 351,  761 => 346,  754 => 342,  748 => 339,  734 => 330,  727 => 326,  717 => 321,  710 => 317,  704 => 314,  692 => 307,  685 => 303,  675 => 298,  668 => 294,  662 => 291,  654 => 286,  645 => 279,  633 => 273,  627 => 270,  621 => 266,  606 => 264,  602 => 263,  598 => 262,  589 => 255,  585 => 254,  572 => 250,  562 => 249,  553 => 243,  547 => 240,  537 => 235,  530 => 231,  523 => 226,  508 => 224,  504 => 223,  500 => 222,  495 => 220,  486 => 214,  478 => 213,  470 => 208,  462 => 207,  454 => 202,  446 => 201,  440 => 198,  425 => 188,  418 => 184,  408 => 179,  401 => 175,  395 => 172,  383 => 165,  376 => 161,  366 => 156,  359 => 152,  353 => 149,  339 => 140,  332 => 136,  322 => 131,  315 => 127,  309 => 124,  297 => 117,  290 => 113,  280 => 108,  273 => 104,  267 => 101,  259 => 96,  247 => 87,  239 => 86,  231 => 81,  223 => 80,  215 => 75,  207 => 74,  201 => 71,  195 => 67,  180 => 65,  176 => 64,  172 => 63,  167 => 61,  162 => 58,  147 => 56,  143 => 55,  138 => 53,  133 => 50,  118 => 48,  114 => 47,  109 => 45,  104 => 42,  89 => 40,  85 => 39,  80 => 37,  72 => 34,  68 => 33,  60 => 28,  52 => 24,  48 => 23,  37 => 21,);
    }

    public function getSourceContext()
    {
        return new Source("", "pages/advanced_search.html.twig", "/var/www/galette/templates/default/pages/advanced_search.html.twig");
    }
}
