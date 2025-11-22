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

/* pages/mailings_list.html.twig */
class __TwigTemplate_f7a77bd6cf9ed6703cb57fb838552a4a extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'infoline' => [$this, 'block_infoline'],
            'infoline_actions' => [$this, 'block_infoline_actions'],
            'header' => [$this, 'block_header'],
            'search' => [$this, 'block_search'],
            'body' => [$this, 'block_body'],
            'javascripts' => [$this, 'block_javascripts'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 21
        return "elements/list.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 23
        $context["nb"] = CoreExtension::getAttribute($this->env, $this->source, ($context["history"] ?? null), "getCount", [], "method", false, false, false, 23);
        // line 25
        $context["form"] = ["order" => ["name" => "mailings"]];
        // line 21
        $this->parent = $this->loadTemplate("elements/list.html.twig", "pages/mailings_list.html.twig", 21);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 31
    public function block_infoline($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 32
        yield "    ";
        $context["infoline"] = ["label" => Twig\Extension\CoreExtension::replace($this->env->getFunction('_Tn')->getCallable()("%count entry", "%count entries", CoreExtension::getAttribute($this->env, $this->source,         // line 33
($context["history"] ?? null), "getCount", [], "method", false, false, false, 33)), ["%count" => CoreExtension::getAttribute($this->env, $this->source, ($context["history"] ?? null), "getCount", [], "method", false, false, false, 33)]), "route" => ["name" => "mailings_filter"]];
        // line 38
        yield "    ";
        yield from $this->yieldParentBlock("infoline", $context, $blocks);
        yield "
";
        return; yield '';
    }

    // line 41
    public function block_infoline_actions($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 42
        yield "    ";
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["preferences"] ?? null), "pref_mail_method", [], "any", false, false, false, 42) != Twig\Extension\CoreExtension::constant("Galette\\Core\\GaletteMail::METHOD_DISABLED"))) {
            // line 43
            yield "    <a
        class=\"action ui tiny labeled icon button\"
        href=\"";
            // line 45
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("mailing"), "html", null, true);
            yield "?mailing_new=true\"
    >
        <i class=\"plus circle green icon\" aria-hidden=\"true\"></i>
        ";
            // line 48
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("Create new mailing"), "html", null, true);
            yield "
    </a>
        ";
            // line 50
            if ((CoreExtension::getAttribute($this->env, $this->source, ($context["login"] ?? null), "isLogged", [], "method", false, false, false, 50) && ((($context["cur_route"] ?? null) != "mailing") && (($context["existing_mailing"] ?? null) == true)))) {
                // line 51
                yield "    <a
        href=\"";
                // line 52
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("mailing"), "html", null, true);
                yield "\"
        class=\"action ui tiny labeled icon button tooltip\"
        title=\"";
                // line 54
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("A mailing exists in the current session. Click here if you want to resume or cancel it."), "html", null, true);
                yield "\"
    >
        <i class=\"paper plane outline blue icon\" aria-hidden=\"true\"></i>
        ";
                // line 57
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("Existing mailing"), "html", null, true);
                yield "
    </a>
        ";
            }
            // line 60
            yield "    ";
        }
        return; yield '';
    }

    // line 63
    public function block_header($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 64
        yield "    ";
        $context["columns"] = [["label" => "#"], ["label" => $this->env->getFunction('_T')->getCallable()("Date"), "order" => Twig\Extension\CoreExtension::constant("Galette\\Filters\\MailingsList::ORDERBY_DATE")], ["label" => $this->env->getFunction('_T')->getCallable()("Sender"), "order" => Twig\Extension\CoreExtension::constant("Galette\\Filters\\MailingsList::ORDERBY_SENDER")], ["label" => $this->env->getFunction('_T')->getCallable()("Recipients")], ["label" => $this->env->getFunction('_T')->getCallable()("Subject"), "order" => Twig\Extension\CoreExtension::constant("Galette\\Filters\\MailingsList::ORDERBY_SUBJECT")], ["label" => $this->env->getFunction('_T')->getCallable()("Att.")], ["label" => $this->env->getFunction('_T')->getCallable()("Sent"), "order" => Twig\Extension\CoreExtension::constant("Galette\\Filters\\MailingsList::ORDERBY_SENT")]];
        // line 73
        yield "    ";
        yield from $this->yieldParentBlock("header", $context, $blocks);
        yield "
";
        return; yield '';
    }

    // line 76
    public function block_search($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 77
        yield "    <form action=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("mailings_filter"), "html", null, true);
        yield "\" method=\"post\" class=\"ui form filters\">
        <div class=\"ui secondary yellow segment\">
            <div class=\"three fields\">
                <div class=\"two fields\">
                    <div class=\"field\">
                        <label for=\"start_date_filter\">";
        // line 82
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("since"), "html", null, true);
        yield "</label>
                        <div class=\"ui calendar\" id=\"mailings-rangestart\">
                            <div class=\"ui input left icon\">
                                <i class=\"calendar icon\" aria-hidden=\"true\"></i>
                                <input placeholder=\"";
        // line 86
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("yyyy-mm-dd format"), "html", null, true);
        yield "\" type=\"text\" name=\"start_date_filter\" id=\"start_date_filter\" maxlength=\"10\" size=\"10\" value=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["history"] ?? null), "filters", [], "any", false, false, false, 86), "start_date_filter", [], "any", false, false, false, 86), "html", null, true);
        yield "\"/>
                            </div>
                        </div>
                    </div>
                    <div class=\"field\">
                        <label for=\"end_date_filter\">";
        // line 91
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("until"), "html", null, true);
        yield "</label>
                        <div class=\"ui calendar\" id=\"mailings-rangeend\">
                            <div class=\"ui input left icon\">
                                <i class=\"calendar icon\" aria-hidden=\"true\"></i>
                                <input placeholder=\"";
        // line 95
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("yyyy-mm-dd format"), "html", null, true);
        yield "\" type=\"text\" name=\"end_date_filter\" id=\"end_date_filter\" maxlength=\"10\" size=\"10\" value=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["history"] ?? null), "filters", [], "any", false, false, false, 95), "end_date_filter", [], "any", false, false, false, 95), "html", null, true);
        yield "\"/>
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"field\">
                    <label for=\"subject_filter\">";
        // line 101
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("Subject"), "html", null, true);
        yield "</label>
                    <input type=\"text\" name=\"subject_filter\" id=\"subject_filter\" value=\"";
        // line 102
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["history"] ?? null), "filters", [], "any", false, false, false, 102), "subject_filter", [], "any", false, false, false, 102), "html", null, true);
        yield "\"/>
                </div>
                <div class=\"field\">
                        <label for=\"sent_filter\">";
        // line 105
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("Sent mailings:"), "html", null, true);
        yield "</label>
                    <div class=\"inline fields\">
                        <div class=\"field\">
                            <div class=\"ui radio checkbox\">
                                <input type=\"radio\" name=\"sent_filter\" id=\"filter_dc_sent\" value=\"";
        // line 109
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::constant("Galette\\Core\\MailingHistory::FILTER_DC_SENT"), "html", null, true);
        yield "\"";
        if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["history"] ?? null), "filters", [], "any", false, false, false, 109), "sent_filter", [], "any", false, false, false, 109) == Twig\Extension\CoreExtension::constant("Galette\\Core\\MailingHistory::FILTER_DC_SENT"))) {
            yield " checked=\"checked\"";
        }
        yield ">
                                <label for=\"filter_dc_sent\" >";
        // line 110
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("Don't care"), "html", null, true);
        yield "</label>
                            </div>
                        </div>
                        <div class=\"field\">
                            <div class=\"ui radio checkbox\">
                                <input type=\"radio\" name=\"sent_filter\" id=\"filter_sent\" value=\"";
        // line 115
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::constant("Galette\\Core\\MailingHistory::FILTER_SENT"), "html", null, true);
        yield "\"";
        if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["history"] ?? null), "filters", [], "any", false, false, false, 115), "sent_filter", [], "any", false, false, false, 115) == Twig\Extension\CoreExtension::constant("Galette\\Core\\MailingHistory::FILTER_SENT"))) {
            yield " checked=\"checked\"";
        }
        yield ">
                                <label for=\"filter_sent\" >";
        // line 116
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("Yes"), "html", null, true);
        yield "</label>
                            </div>
                        </div>
                        <div class=\"field\">
                            <div class=\"ui radio checkbox\">
                                <input type=\"radio\" name=\"sent_filter\" id=\"filter_not_sent\" value=\"";
        // line 121
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::constant("Galette\\Core\\MailingHistory::FILTER_NOT_SENT"), "html", null, true);
        yield "\"";
        if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["history"] ?? null), "filters", [], "any", false, false, false, 121), "sent_filter", [], "any", false, false, false, 121) == Twig\Extension\CoreExtension::constant("Galette\\Core\\MailingHistory::FILTER_NOT_SENT"))) {
            yield " checked=\"checked\"";
        }
        yield ">
                                <label for=\"filter_not_sent\" >";
        // line 122
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("No"), "html", null, true);
        yield "</label>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class=\"ui right aligned basic fitted segment field\">
                <button type=\"submit\"  class=\"tooltip action ui labeled icon primary button\" title=\"";
        // line 129
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("Apply filters"), "html", null, true);
        yield "\" name=\"filter\">
                    <i class=\"search icon\" aria-hidden=\"true\"></i>
                    ";
        // line 131
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("Filter"), "html", null, true);
        yield "
                </button>
                <button type=\"submit\" name=\"clear_filter\" class=\"tooltip ui labeled icon button\" title=\"";
        // line 133
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("Reset all filters to defaults"), "html", null, true);
        yield "\">
                    <i class=\"trash alt red icon\" aria-hidden=\"true\"></i>
                    ";
        // line 135
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("Clear filter"), "html", null, true);
        yield "
                </button>
            </div>
        </div>
        ";
        // line 139
        yield from         $this->loadTemplate("components/forms/csrf.html.twig", "pages/mailings_list.html.twig", 139)->unwrap()->yield($context);
        // line 140
        yield "    </form>
";
        return; yield '';
    }

    // line 143
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 144
        yield "    ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["logs"] ?? null));
        $context['_iterated'] = false;
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
        foreach ($context['_seq'] as $context["_key"] => $context["log"]) {
            // line 145
            yield "        ";
            $context["date_format"] = $this->env->getFunction('_T')->getCallable()("Y-m-d H:i:s");
            // line 146
            yield "        <tr>
            <td data-scope=\"row\">
                ";
            // line 148
            if (CoreExtension::getAttribute($this->env, $this->source, ($context["preferences"] ?? null), "pref_show_id", [], "any", false, false, false, 148)) {
                // line 149
                yield "                    ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["log"], "mailing_id", [], "any", false, false, false, 149), "html", null, true);
                yield "
                ";
            } else {
                // line 151
                yield "                    ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 151), "html", null, true);
                yield "
                ";
            }
            // line 153
            yield "                <span class=\"visually-hidden\">
                            ";
            // line 154
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::replace($this->env->getFunction('_T')->getCallable()("Mailing entry %id"), ["%id" => CoreExtension::getAttribute($this->env, $this->source, $context["log"], "mailing_id", [], "any", false, false, false, 154)]), "html", null, true);
            yield "
                        </span>
            </td>
            <td data-col-label=\"";
            // line 157
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("Date"), "html", null, true);
            yield "\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["log"], "mailing_date", [], "any", false, false, false, 157), ($context["date_format"] ?? null)), "html", null, true);
            yield "</td>
            <td data-col-label=\"";
            // line 158
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("Sender"), "html", null, true);
            yield "\">";
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["log"], "mailing_sender", [], "any", false, false, false, 158) == 0)) {
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("Superadmin"), "html", null, true);
            } else {
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["log"], "mailing_sender_name", [], "any", false, false, false, 158), "html", null, true);
            }
            yield "</td>
            <td data-col-label=\"";
            // line 159
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("Recipients"), "html", null, true);
            yield "\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["log"], "mailing_recipients", [], "any", false, false, false, 159)), "html", null, true);
            yield "</td>
            <td data-col-label=\"";
            // line 160
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("Subject"), "html", null, true);
            yield "\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["log"], "mailing_subject", [], "any", false, false, false, 160), "html", null, true);
            yield "</td>
            <td class=\"center\" data-col-label=\"";
            // line 161
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("Attachments"), "html", null, true);
            yield "\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["log"], "attachments", [], "any", false, false, false, 161), "html", null, true);
            yield "</td>
            <td class=\"center";
            // line 162
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["log"], "mailing_sent", [], "any", false, false, false, 162) == 1)) {
                yield " use";
            }
            yield "\" data-col-label=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("Sent"), "html", null, true);
            yield "\">
                ";
            // line 163
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["log"], "mailing_sent", [], "any", false, false, false, 163) == 1)) {
                // line 164
                yield "                    <i class=\"ui thumbs up green icon\" aria-hidden=\"true\"></i>
                ";
            } else {
                // line 166
                yield "                    <i class=\"ui thumbs down red icon\" aria-hidden=\"true\"></i>
                ";
            }
            // line 168
            yield "            </td>
            <td class=\"center actions_row\">
                <a
                        href=\"";
            // line 171
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("mailingPreview", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["log"], "mailing_id", [], "any", false, false, false, 171)]), "html", null, true);
            yield "\"
                        class=\"showdetails\"
                >
                    <i class=\"ui eye green icon tooltip\" aria-hidden=\"true\"></i>
                    <span class=\"ui special popup\">";
            // line 175
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::replace($this->env->getFunction('_T')->getCallable()("Display mailing '%subject' details in preview window"), ["%subject" => CoreExtension::getAttribute($this->env, $this->source, $context["log"], "mailing_subject", [], "any", false, false, false, 175)]), "html", null, true);
            yield "</span>
                </a>
                <a
                        href=\"";
            // line 178
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("mailing"), "html", null, true);
            yield "?from=";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["log"], "mailing_id", [], "any", false, false, false, 178), "html", null, true);
            yield "\"
                >
                    <i class=\"ui clone blue icon tooltip\" aria-hidden=\"true\"></i>
                    <span class=\"ui special popup\">";
            // line 181
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::replace($this->env->getFunction('_T')->getCallable()("Use mailing '%subject' as a template for a new one"), ["%subject" => CoreExtension::getAttribute($this->env, $this->source, $context["log"], "mailing_subject", [], "any", false, false, false, 181)]), "html", null, true);
            yield "</span>
                </a>
                <a
                        href=\"";
            // line 184
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("removeMailing", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["log"], "mailing_id", [], "any", false, false, false, 184)]), "html", null, true);
            yield "\"
                        class=\"delete\"
                >
                    <i class=\"ui trash red icon tooltip\" aria-hidden=\"true\"></i>
                    <span class=\"ui special popup\">";
            // line 188
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::replace($this->env->getFunction('_T')->getCallable()("Delete mailing '%subject'"), ["%subject" => CoreExtension::getAttribute($this->env, $this->source, $context["log"], "mailing_subject", [], "any", false, false, false, 188)]), "html", null, true);
            yield "</span>
                </a>
            </td>
        </tr>
    ";
            $context['_iterated'] = true;
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        if (!$context['_iterated']) {
            // line 193
            yield "        <tr><td colspan=\"8\" class=\"emptylist\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("No sent mailing has been stored in the database yet."), "html", null, true);
            yield "</td></tr>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['log'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        return; yield '';
    }

    // line 197
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 198
        yield "    <script type=\"text/javascript\">
        ";
        // line 199
        yield from         $this->loadTemplate("elements/js/removal.js.twig", "pages/mailings_list.html.twig", 199)->unwrap()->yield(CoreExtension::merge($context, ["single_action" => "true"]));
        // line 202
        yield "
        ";
        // line 204
        yield "        \$('.showdetails').click(function(){
            \$.ajax({
                url: \$(this).attr('href'),
                type: \"POST\",
                data: {
                    ajax: true,
                },
                ";
        // line 211
        yield from         $this->loadTemplate("elements/js/loader.js.twig", "pages/mailings_list.html.twig", 211)->unwrap()->yield(CoreExtension::merge($context, ["loader" => "action", "selector" => ".loader_selector"]));
        // line 214
        yield ",
                success: function(res){
                    _preview_dialog(res);
                },
                error: function() {
                    ";
        // line 219
        yield from         $this->loadTemplate("elements/js/modal.js.twig", "pages/mailings_list.html.twig", 219)->unwrap()->yield(CoreExtension::merge($context, ["modal_title_twig" => $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("An error occurred displaying preview :("), "js"), "modal_without_content" => true, "modal_class" => "mini", "modal_deny_only" => true, "modal_cancel_text" => $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("Close"), "js"), "modal_classname" => "redalert"]));
        // line 227
        yield "                }
            });
            return false;
        });

        var _preview_dialog = function(res){
            ";
        // line 233
        yield from         $this->loadTemplate("elements/js/modal.js.twig", "pages/mailings_list.html.twig", 233)->unwrap()->yield(CoreExtension::merge($context, ["modal_title_twig" => $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("Mailing preview"), "js"), "modal_content" => "res", "modal_class" => "scrolling", "modal_deny_only" => true, "modal_cancel_text" => $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("Close"), "js")]));
        // line 240
        yield "        }
    </script>
";
        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "pages/mailings_list.html.twig";
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
        return array (  499 => 240,  497 => 233,  489 => 227,  487 => 219,  480 => 214,  478 => 211,  469 => 204,  466 => 202,  464 => 199,  461 => 198,  457 => 197,  445 => 193,  427 => 188,  420 => 184,  414 => 181,  406 => 178,  400 => 175,  393 => 171,  388 => 168,  384 => 166,  380 => 164,  378 => 163,  370 => 162,  364 => 161,  358 => 160,  352 => 159,  342 => 158,  336 => 157,  330 => 154,  327 => 153,  321 => 151,  315 => 149,  313 => 148,  309 => 146,  306 => 145,  287 => 144,  283 => 143,  277 => 140,  275 => 139,  268 => 135,  263 => 133,  258 => 131,  253 => 129,  243 => 122,  235 => 121,  227 => 116,  219 => 115,  211 => 110,  203 => 109,  196 => 105,  190 => 102,  186 => 101,  175 => 95,  168 => 91,  158 => 86,  151 => 82,  142 => 77,  138 => 76,  130 => 73,  127 => 64,  123 => 63,  117 => 60,  111 => 57,  105 => 54,  100 => 52,  97 => 51,  95 => 50,  90 => 48,  84 => 45,  80 => 43,  77 => 42,  73 => 41,  65 => 38,  63 => 33,  61 => 32,  57 => 31,  52 => 21,  50 => 25,  48 => 23,  41 => 21,);
    }

    public function getSourceContext()
    {
        return new Source("", "pages/mailings_list.html.twig", "/var/www/galette/templates/default/pages/mailings_list.html.twig");
    }
}
