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

/* pages/mailing_form.html.twig */
class __TwigTemplate_10c46e10f8d86e61045fe113c23c488b extends Template
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
        $this->parent = $this->loadTemplate("page.html.twig", "pages/mailing_form.html.twig", 21);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 23
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 24
        if (((CoreExtension::getAttribute($this->env, $this->source, ($context["preferences"] ?? null), "pref_mail_method", [], "any", false, false, false, 24) == Twig\Extension\CoreExtension::constant("Galette\\Core\\Mailing::METHOD_DISABLED")) &&  !$this->env->getFunction('callstatic')->getCallable()("\\Galette\\Core\\Galette", "isDemo"))) {
            // line 25
            yield "        <div id=\"errorbox\" class=\"ui negative icon message\">
            <i class=\"ban icon\" aria-hidden=\"true\"></i>
            <div class=\"content\">
                <p>";
            // line 28
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("Email sent is disabled in the preferences. Ask galette admin"), "html", null, true);
            yield "</p>
            </div>
        </div>
";
        } elseif ( !        // line 31
array_key_exists("mailing_saved", $context)) {
            // line 32
            yield "        <form action=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("doMailing"), "html", null, true);
            yield "\" id=\"listform\" method=\"post\" enctype=\"multipart/form-data\" class=\"ui form\">
            <div class=\"ui basic fitted segment\">
                <div class=\"ui styled fluid accordion row\">
                    <div class=\"active title\">
                        <i class=\"jsonly displaynone icon dropdown\" aria-hidden=\"true\"></i>
                        ";
            // line 37
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("Mailing information"), "html", null, true);
            yield "
                    </div>
                    <div class=\"active content field\">
                        <div class=\"three fields\">
                            <div class=\"field\">
                                <label for=\"sender\">";
            // line 42
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("Sender"), "html", null, true);
            yield "</label>
                                <select name=\"sender\" id=\"sender\" class=\"ui dropdown\">
                                    <option value=\"";
            // line 44
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::constant("Galette\\Core\\GaletteMail::SENDER_PREFS"), "html", null, true);
            yield "\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("from preferences"), "html", null, true);
            yield "</option>
                                ";
            // line 45
            if ( !CoreExtension::getAttribute($this->env, $this->source, ($context["login"] ?? null), "isSuperAdmin", [], "method", false, false, false, 45)) {
                // line 46
                yield "                                    <option value=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::constant("Galette\\Core\\GaletteMail::SENDER_CURRENT"), "html", null, true);
                yield "\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("current logged in user"), "html", null, true);
                yield "</option>
                                ";
            }
            // line 48
            yield "                                    <option value=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::constant("Galette\\Core\\GaletteMail::SENDER_OTHER"), "html", null, true);
            yield "\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("other"), "html", null, true);
            yield "</option>
                                </select>
                            </div>
                            <div class=\"field required\">
                                <label for=\"sender_name\">";
            // line 52
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("Name"), "html", null, true);
            yield "</label>
                                <input type=\"text\" name=\"sender_name\" id=\"sender_name\" value=\"";
            // line 53
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["preferences"] ?? null), "pref_email_nom", [], "any", false, false, false, 53), "html", null, true);
            yield "\" disabled=\"disabled\"/>
                            </div>
                            <div class=\"field required\">
                                <label for=\"sender_address\">";
            // line 56
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("Address"), "html", null, true);
            yield "</label>
                                <input type=\"text\" name=\"sender_address\" id=\"sender_address\" value=\"";
            // line 57
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["preferences"] ?? null), "pref_email", [], "any", false, false, false, 57), "html", null, true);
            yield "\" disabled=\"disabled\"/>
                            </div>
                        </div>
                        <div class=\"ui section divider\"></div>
                        <div class=\"two fields\">
                            <div class=\"field\">
                                <label>";
            // line 63
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("Recipients"), "html", null, true);
            yield "</label>
                                ";
            // line 64
            yield from             $this->loadTemplate("elements/mailing_recipients.html.twig", "pages/mailing_form.html.twig", 64)->unwrap()->yield($context);
            // line 65
            yield "                                ";
            if ((CoreExtension::getAttribute($this->env, $this->source, ($context["mailing"] ?? null), "current_step", [], "any", false, false, false, 65) == Twig\Extension\CoreExtension::constant("Galette\\Core\\Mailing::STEP_SENT"))) {
                // line 66
                yield "                                    ";
                $context["path"] = $this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("members");
                // line 67
                yield "                                    ";
                $context["text"] = $this->env->getFunction('_T')->getCallable()("Go back to members list");
                // line 68
                yield "                                ";
            } else {
                // line 69
                yield "                                    ";
                $context["path"] = "#";
                // line 70
                yield "                                    ";
                $context["text"] = $this->env->getFunction('_T')->getCallable()("Manage selected members");
                // line 71
                yield "                                ";
            }
            // line 72
            yield "                                <a
                                    id=\"btnusers\"
                                    href=\"";
            // line 74
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["path"] ?? null), "html", null, true);
            yield "\"
                                    class=\"jsonly disabled ui labeled icon button\"
                                >
                                    <i class=\"blue users icon\" aria-hidden=\"true\"></i>
                                    ";
            // line 78
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["text"] ?? null), "html", null, true);
            yield "
                                </a>
                                <noscript>
                                    <div class=\"ui compact message\">";
            // line 81
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("This feature requires javascript."), "html", null, true);
            yield "</div>
                                </noscript>
                            </div>
    ";
            // line 84
            if ((CoreExtension::getAttribute($this->env, $this->source, ($context["mailing"] ?? null), "current_step", [], "any", false, false, false, 84) == Twig\Extension\CoreExtension::constant("Galette\\Core\\Mailing::STEP_START"))) {
                // line 85
                yield "                            <div class=\"field\">
                            ";
                // line 86
                if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), ($context["attachments"] ?? null)) > 0)) {
                    // line 87
                    yield "                                <div class=\"ui tiny header\">
                                    <i class=\"paperclip icon\" aria-hidden=\"true\"></i>
                                    <div class=\"content\">";
                    // line 89
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("Existing attachments:"), "html", null, true);
                    yield "</div>
                                </div>
                                <div id=\"existing_attachments\" class=\"ui middle aligned divided selection list\">
                                ";
                    // line 92
                    $context['_parent'] = $context;
                    $context['_seq'] = CoreExtension::ensureTraversable(($context["attachments"] ?? null));
                    foreach ($context['_seq'] as $context["_key"] => $context["attachment"]) {
                        // line 93
                        yield "                                    <div class=\"item\">
                                        <div class=\"content\">
                                            <a
                                                href=\"?remove_attachment=";
                        // line 96
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["attachment"], "getFileName", [], "method", false, false, false, 96), "html", null, true);
                        yield "\"
                                                class=\"rm_attachement delete\"
                                            >
                                                <i class=\"ui trash alt red icon tooltip\" aria-hidden=\"true\"></i>
                                                <span class=\"ui special popup\">";
                        // line 100
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("Remove attachment"), "html", null, true);
                        yield "</span>
                                            </a>
                                            ";
                        // line 102
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["attachment"], "getFileName", [], "method", false, false, false, 102), "html", null, true);
                        yield "
                                        </div>
                                    </div>
                                ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['attachment'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 106
                    yield "                                </div>
                            ";
                } else {
                    // line 108
                    yield "                                <div class=\"ui tiny header\">
                                    <i class=\"paperclip icon\" aria-hidden=\"true\"></i>
                                    <div class=\"content\">";
                    // line 110
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("Attachments"), "html", null, true);
                    yield "</div>
                                </div>
                            ";
                }
                // line 113
                yield "                                <div class=\"ui file action input\">
                                    <div class=\"ui corner labeled input\">
                                        <input type=\"file\" name=\"attachment[]\" id=\"attachment\" multiple=\"multiple\"/>
                                        <div class=\"ui corner label\">
                                            <i class=\"circular inverted primary icon info tooltip\" data-html=\"";
                // line 117
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("Select files to add as attachments.<br/>Multiple file selection using 'ctrl' or 'shift' keys are only available on compatible browsers."), "html", null, true);
                yield "\" aria-hidden=\"true\"></i>
                                        </div>
                                    </div>
                                    <label for=\"attachment\" class=\"ui button\">
                                        <i class=\"blue upload icon\" aria-hidden=\"true\"></i>
                                        ";
                // line 122
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("Add attachment"), "html", null, true);
                yield "
                                    </label>
                                </div>
                            </div>
    ";
            }
            // line 127
            yield "                        </div>
                    </div>
                </div>
            </div>
        ";
            // line 131
            if ((CoreExtension::getAttribute($this->env, $this->source, ($context["mailing"] ?? null), "current_step", [], "any", false, false, false, 131) == Twig\Extension\CoreExtension::constant("Galette\\Core\\Mailing::STEP_START"))) {
                // line 132
                yield "
            <div class=\"ui basic fitted segment\">
                <div class=\"ui styled fluid accordion row\">
                    <div class=\"active title\">
                        <i class=\"jsonly displaynone icon dropdown\" aria-hidden=\"true\"></i>
                        ";
                // line 137
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("Write your mailing"), "html", null, true);
                yield "
                    </div>
                    <div class=\"active content field\">
                        <div class=\"field required\">
                            <label for=\"mailing_objet\">";
                // line 141
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("Object:"), "html", null, true);
                yield "</label>
                            <input type=\"text\" name=\"mailing_objet\" id=\"mailing_objet\" value=\"";
                // line 142
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["mailing"] ?? null), "subject", [], "any", false, false, false, 142), "html", null, true);
                yield "\" size=\"80\" required/>
                        </div>
                        <div class=\"field required\">
                            <label for=\"mailing_corps\">";
                // line 145
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("Message:"), "html", null, true);
                yield "</label>
                            <textarea name=\"mailing_corps\" id=\"mailing_corps\" cols=\"80\" rows=\"15\" required>";
                // line 146
                if (CoreExtension::getAttribute($this->env, $this->source, ($context["mailing"] ?? null), "message", [], "any", false, false, false, 146)) {
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["mailing"] ?? null), "message", [], "any", false, false, false, 146));
                }
                yield "</textarea>
                            <input type=\"hidden\" name=\"html_editor_active\" id=\"html_editor_active\" value=\"";
                // line 147
                if (($context["html_editor_active"] ?? null)) {
                    yield "1";
                } else {
                    yield "0";
                }
                yield "\"/>
                        </div>
                        <div class=\"ui basic horizontal equal width segments\">
                            <div class=\"ui basic fitted segment\">
                                <div class=\"ui toggle checkbox\">
                                    <input type=\"checkbox\" name=\"mailing_html\" id=\"mailing_html\" value=\"1\" ";
                // line 152
                if (((CoreExtension::getAttribute($this->env, $this->source, ($context["mailing"] ?? null), "html", [], "any", false, false, false, 152) == 1) || (CoreExtension::getAttribute($this->env, $this->source, ($context["preferences"] ?? null), "pref_editor_enabled", [], "any", false, false, false, 152) == 1))) {
                    yield "checked=\"checked\"";
                }
                yield "/>
                                    <label for=\"mailing_html\">";
                // line 153
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("Interpret HTML"), "html", null, true);
                yield "</label>
                                </div>
                            </div>
                            <div id=\"summernote_toggler\" class=\"jsonly hidden ui basic fitted right aligned segment\">
                                <a class=\"ui blue tertiary button\" href=\"javascript:activateMailingEditor('mailing_corps');\" id=\"activate_editor\">";
                // line 157
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("Activate HTML editor"), "html", null, true);
                yield "</a>
                            </div>
                        </div>
                        <div class=\"inline field\">
                        </div>
                    </div>
                </div>
            </div>

            <div class=\"ui basic center aligned segment\">
                <div class=\"ui wrapping spaced buttons\">
                    <button type=\"submit\" name=\"mailing_go\" id=\"btnpreview\" class=\"ui labeled icon button\">
                        <i class=\"eye blue icon\" aria-hidden=\"true\"></i>
                        ";
                // line 170
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("Preview"), "html", null, true);
                yield "
                    </button>
                    <button type=\"submit\" name=\"mailing_save\" class=\"ui labeled icon button action\">
                        <i class=\"save green icon\" aria-hidden=\"true\"></i>
                        ";
                // line 174
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("Save"), "html", null, true);
                yield "
                    </button>
                    <button type=\"submit\" name=\"mailing_confirm\" class=\"ui labeled icon button ";
                // line 176
                if ($this->env->getFunction('callstatic')->getCallable()("\\Galette\\Core\\Galette", "isDemo")) {
                    yield " disabled\" disabled=\"disabled";
                }
                yield "\">
                        <i class=\"rocket red icon\" aria-hidden=\"true\"></i>
                        ";
                // line 178
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("Send"), "html", null, true);
                yield "
                    </button>
                    <button type=\"submit\" name=\"mailing_cancel\" formnovalidate class=\"ui labeled icon button\">
                        <i class=\"times icon\" aria-hidden=\"true\"></i>
                        ";
                // line 182
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("Cancel mailing"), "html", null, true);
                yield "
                    </button>
                </div>
            </div>
        ";
            }
            // line 187
            yield "        ";
            if ((CoreExtension::getAttribute($this->env, $this->source, ($context["mailing"] ?? null), "current_step", [], "any", false, false, false, 187) == Twig\Extension\CoreExtension::constant("Galette\\Core\\Mailing::STEP_PREVIEW"))) {
                // line 188
                yield "            <div class=\"ui basic fitted segment\">
                <div class=\"ui styled fluid accordion row\">
                    <div class=\"active title\">
                        <i class=\"jsonly hidden icon dropdown\" aria-hidden=\"true\"></i>
                        ";
                // line 192
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("Preview your mailing"), "html", null, true);
                yield "
                    </div>
                    <div class=\"active content field\">
                        <table class=\"ui very basic striped unstackable table\">
                            <tbody>
                                <tr>
                                    <th class=\"two wide\">";
                // line 198
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("Subject:"), "html", null, true);
                yield "</th>
                                    <td>";
                // line 199
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["mailing"] ?? null), "subject", [], "any", false, false, false, 199), "html", null, true);
                yield "</td>
                                </tr>
                                <tr>
                                    <th class=\"two wide\">";
                // line 202
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("Message:"), "html", null, true);
                yield "</th>
                                    <td>
            ";
                // line 204
                if (CoreExtension::getAttribute($this->env, $this->source, ($context["mailing"] ?? null), "html", [], "any", false, false, false, 204)) {
                    // line 205
                    yield "                                        ";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["mailing"] ?? null), "message", [], "any", false, false, false, 205), "html", null, true);
                    yield "
            ";
                } else {
                    // line 207
                    yield "                                        <pre>";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["mailing"] ?? null), "wrapped_message", [], "any", false, false, false, 207), "html", null, true);
                    yield "</pre>
            ";
                }
                // line 209
                yield "                                    </td>
                                </tr>
                            </tbody>
                        </table>

                    </div>
                </div>
            </div>

            <div class=\"ui basic center aligned segment\">
                <div class=\"ui wrapped wrapping spaced buttons\">
                    <button type=\"submit\" name=\"mailing_reset\" class=\"ui labeled icon button\">
                        <i class=\"backward icon\" aria-hidden=\"true\"></i>
                        ";
                // line 222
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("Modifiy mailing"), "html", null, true);
                yield "
                    </button>
                    <button type=\"submit\" name=\"mailing_confirm\"";
                // line 224
                if ($this->env->getFunction('callstatic')->getCallable()("\\Galette\\Core\\Galette", "isDemo")) {
                    yield " class=\"ui labeled icon button disabled\" disabled=\"disabled\"";
                } else {
                    yield " class=\"ui labeled icon button\"";
                }
                yield ">
                        <i class=\"rocket icon\" aria-hidden=\"true\"></i>
                        ";
                // line 226
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("Send"), "html", null, true);
                yield "
                    </button>
                    <button type=\"submit\" name=\"mailing_cancel\" formnovalidate class=\"ui labeled icon button\">
                        <i class=\"trash red icon\" aria-hidden=\"true\"></i>
                        ";
                // line 230
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("Cancel mailing"), "html", null, true);
                yield "
                    </button>

                    <input type=\"hidden\" name=\"mailing_objet\" value=\"";
                // line 233
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["mailing"] ?? null), "subject", [], "any", false, false, false, 233), "html", null, true);
                yield "\"/>
                    <input type=\"hidden\" name=\"mailing_corps\" value=\"";
                // line 234
                if (CoreExtension::getAttribute($this->env, $this->source, ($context["mailing"] ?? null), "message", [], "any", false, false, false, 234)) {
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["mailing"] ?? null), "message", [], "any", false, false, false, 234));
                }
                yield "\"/>
                </div>
            </div>
        ";
            }
            // line 238
            yield "            ";
            yield from             $this->loadTemplate("components/forms/csrf.html.twig", "pages/mailing_form.html.twig", 238)->unwrap()->yield($context);
            // line 239
            yield "        </form>
";
        }
        return; yield '';
    }

    // line 243
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 244
        if ((((CoreExtension::getAttribute($this->env, $this->source, ($context["preferences"] ?? null), "pref_mail_method", [], "any", false, false, false, 244) != Twig\Extension\CoreExtension::constant("Galette\\Core\\Mailing::METHOD_DISABLED")) ||  !$this->env->getFunction('callstatic')->getCallable()("\\Galette\\Core\\Galette", "isDemo")) &&  !array_key_exists("mailing_saved", $context))) {
            // line 245
            yield "    ";
            if ((CoreExtension::getAttribute($this->env, $this->source, ($context["mailing"] ?? null), "current_step", [], "any", false, false, false, 245) != Twig\Extension\CoreExtension::constant("Galette\\Core\\Mailing::STEP_SENT"))) {
                // line 246
                yield "<script type=\"text/javascript\">
    \$(function() {
        ";
                // line 249
                yield "        \$('#btnpreview').click(function(){
            var _sender = \$('#sender').val();
            var _sender_name = \$('#sender_name').val();
            var _sender_address = \$('#sender_address').val();
            var _subject = \$('#mailing_objet').val();
            var _body = \$('#mailing_corps').val();
            var _html = \$('#mailing_html').is(':checked');
            var _attachments = [];
            \$('#existing_attachments .item').each(function(){
                _attachments[_attachments.length] = \$(this).text();
            });
            \$.ajax({
                url: '";
                // line 261
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("mailingPreview"), "html", null, true);
                yield "',
                type: \"POST\",
                data: {
                    sender: _sender,
                    sender_name: _sender_name,
                    sender_address: _sender_address,
                    subject: _subject,
                    body: _body,
                    html: _html,
                    attachments: _attachments
                },
                ";
                // line 272
                yield from                 $this->loadTemplate("elements/js/loader.js.twig", "pages/mailing_form.html.twig", 272)->unwrap()->yield(CoreExtension::merge($context, ["selector" => "#btnpreview", "loader" => "button"]));
                // line 275
                yield ",
                success: function(res){
                    _preview_dialog(res);
                },
                error: function() {
                    ";
                // line 280
                yield from                 $this->loadTemplate("elements/js/modal.js.twig", "pages/mailing_form.html.twig", 280)->unwrap()->yield(CoreExtension::merge($context, ["modal_title_twig" => $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("An error occurred displaying preview :("), "js"), "modal_without_content" => true, "modal_class" => "mini", "modal_deny_only" => true, "modal_cancel_text" => $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("Close"), "js"), "modal_classname" => "redalert"]));
                // line 288
                yield "                }
            });
            return false;
        });

        var _preview_dialog = function(res){
            ";
                // line 294
                yield from                 $this->loadTemplate("elements/js/modal.js.twig", "pages/mailing_form.html.twig", 294)->unwrap()->yield(CoreExtension::merge($context, ["modal_title_twig" => $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("Mailing preview"), "js"), "modal_content" => "res", "modal_class" => "scrolling", "modal_deny_only" => true, "modal_cancel_text" => $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("Close"), "js")]));
                // line 301
                yield "        }

        ";
                // line 304
                yield "        \$('#btnusers').click(function(){
            \$.ajax({
                url: '";
                // line 306
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("ajaxMembers"), "html", null, true);
                yield "',
                type: \"POST\",
                data: {
                    multiple: true
                },
                ";
                // line 311
                yield from                 $this->loadTemplate("elements/js/loader.js.twig", "pages/mailing_form.html.twig", 311)->unwrap()->yield(CoreExtension::merge($context, ["selector" => "#btnusers", "loader" => "button"]));
                // line 314
                yield ",
                success: function(res){
                    _members_dialog(res);
                },
                error: function() {
                    ";
                // line 319
                yield from                 $this->loadTemplate("elements/js/modal.js.twig", "pages/mailing_form.html.twig", 319)->unwrap()->yield(CoreExtension::merge($context, ["modal_title_twig" => $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("An error occurred displaying members interface :("), "js"), "modal_without_content" => true, "modal_class" => "mini", "modal_deny_only" => true, "modal_cancel_text" => $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("Close"), "js"), "modal_classname" => "redalert"]));
                // line 327
                yield "                }
            });
            return false;
        });

        var _members_dialog = function(res){
            ";
                // line 333
                yield from                 $this->loadTemplate("elements/js/modal.js.twig", "pages/mailing_form.html.twig", 333)->unwrap()->yield(CoreExtension::merge($context, ["modal_title_twig" => $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("Members selection"), "js"), "modal_content" => "res", "modal_class" => "members-selection fullscreen", "modal_content_class" => "scrolling", "modal_deny_only" => true, "modal_cancel_text" => $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("Close"), "js")]));
                // line 341
                yield "            _members_ajax_mapper(res);
        }

        var _members_ajax_mapper = function(res){
            \$('#btnvalid').click(function(){
                //first, let's store new recipients in mailing object
                var _recipients = new Array();
                \$('li[id^=\"member_\"]').each(function(){
                    _recipients[_recipients.length] = this.id.substring(7, this.id.length);
                });
                \$.ajax({
                    url: '";
                // line 352
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("mailingRecipients"), "html", null, true);
                yield "',
                    type: \"POST\",
                    data: {
                        recipients: _recipients
                    },
                    ";
                // line 357
                yield from                 $this->loadTemplate("elements/js/loader.js.twig", "pages/mailing_form.html.twig", 357)->unwrap()->yield(CoreExtension::merge($context, ["selector" => "#btnvalid", "loader" => "button"]));
                // line 360
                yield ",
                    success: function(res){
                        \$('#unreachables_count').remove();
                        \$('#recipients_count').replaceWith(res);
                        \$('.members-selection').modal('hide');
                    },
                    error: function() {
                        ";
                // line 367
                yield from                 $this->loadTemplate("elements/js/modal.js.twig", "pages/mailing_form.html.twig", 367)->unwrap()->yield(CoreExtension::merge($context, ["modal_title_twig" => $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("An error occurred displaying members interface :("), "js"), "modal_without_content" => true, "modal_class" => "mini", "modal_deny_only" => true, "modal_cancel_text" => $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("Close"), "js"), "modal_classname" => "redalert"]));
                // line 375
                yield "                    }
                });
            });
            //Remap links
            var _none = \$('#none_selected').clone();
            \$('li[id^=\"member_\"]').click(function(){
                \$(this).remove();
                if ( \$('#selected_members ul li').length == 0 ) {
                    \$('#selected_members ul').append(_none);
                }
            });
            \$('#listing tbody tr').click(function(event){
                event.preventDefault();
                var _mlink = \$(this).find('.username_row a');
                var _mid = _mlink[0].href.match(/.*\\/(\\d+)\$/)[1];
                var _mname = _mlink.text();
                \$('#none_selected').remove()
                if ( \$('#member_' + _mid).length == 0 ) {
                    var _li = '<li id=\"member_' + _mid + '\" class=\"item\"><i class=\"ui user minus icon\" aria-hidden=\"true\"></i><span class=\"ui content\">' + _mname + '</span></li>';
                    \$('#selected_members ul').append(_li);
                    \$('#member_' + _mid).click(function(){
                        \$(this).remove();
                        if ( \$('#selected_members ul li').length == 0 ) {
                            \$('#selected_members ul').append(_none);
                        }
                    });
                }
                return false;
            }).css('cursor', 'pointer').attr('title', '";
                // line 403
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("Click on a row to select a member"), "js"), "html", null, true);
                yield "');

            \$('.members-selection .pagination a').click(function(){
                var _members = new Array();
                var _unreach = new Array();
                \$('li[id^=\"member_\"]').each(function(){
                    var _mid = this.id.substring(7, this.id.length);
                    if (\$(this).hasClass('unreachables')) {
                        _unreach[_unreach.length] = _mid;
                    } else {
                        _members[_members.length] = _mid;
                    }
                });

                \$.ajax({
                    url: this.href,
                    type: \"POST\",
                    data: {
                        multiple: true,
                        members: _members,
                        unreachables: _unreach
                    },
                    ";
                // line 425
                yield from                 $this->loadTemplate("elements/js/loader.js.twig", "pages/mailing_form.html.twig", 425)->unwrap()->yield(CoreExtension::merge($context, ["loader" => "#listing"]));
                // line 427
                yield ",
                    success: function(res){
                        \$('#listing').remove();
                        var _listing = \$(\$.parseHTML(res)).find('#listing');
                        \$('.members-selection .eleven.wide.column').append(_listing);
                        _members_ajax_mapper(res);
                    },
                    error: function() {
                        ";
                // line 435
                yield from                 $this->loadTemplate("elements/js/modal.js.twig", "pages/mailing_form.html.twig", 435)->unwrap()->yield(CoreExtension::merge($context, ["modal_title_twig" => $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("An error occurred displaying members interface :("), "js"), "modal_without_content" => true, "modal_class" => "mini", "modal_deny_only" => true, "modal_cancel_text" => $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("Close"), "js"), "modal_classname" => "redalert"]));
                // line 443
                yield "                    }
                });
                return false;
            });
        }

        ";
                // line 449
                $context["modal_onapprove"] = (("window.location.href = '" . $this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("mailing")) . "' + _link.attr('href');");
                // line 450
                yield "        \$('.rm_attachement').click(function(event){
            event.preventDefault();
            var _link = \$(this);
            ";
                // line 453
                $context["modal_content"] = (($this->env->getFunction('_T')->getCallable()("Are you sure you want to remove this attachment?") . "<br/>") . $this->env->getFunction('_T')->getCallable()("This will immediately remove attachment from disk and cannot be undone."));
                // line 454
                yield "            ";
                yield from                 $this->loadTemplate("elements/js/modal.js.twig", "pages/mailing_form.html.twig", 454)->unwrap()->yield(CoreExtension::merge($context, ["modal_title_twig" => $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("Remove attachment"), "js"), "modal_content_twig" => $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(                // line 456
($context["modal_content"] ?? null), "js"), "modal_class" => "tiny", "modal_onapprove" =>                 // line 458
($context["modal_onapprove"] ?? null), "modal_approve_text" => $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("Remove"), "js"), "modal_approve_icon" => "trash", "modal_approve_color" => "red", "modal_cancel_text" => $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("Cancel"), "js"), "modal_classname" => "redalert"]));
                // line 465
                yield "        });

        \$('#sender').on('change', function() {
            var _this = \$(this);
            var _sender_name = \$('#sender_name');
            var _sender_address = \$('#sender_address');
            var _editable = false;
            var _val = _this.val();
            switch (_val) {
                case '";
                // line 474
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::constant("Galette\\Core\\GaletteMail::SENDER_PREFS"), "html", null, true);
                yield "':
                    _sender_name.val('";
                // line 475
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["preferences"] ?? null), "pref_email_nom", [], "any", false, false, false, 475), "js"), "html", null, true);
                yield "');
                    _sender_address.val('";
                // line 476
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["preferences"] ?? null), "pref_email", [], "any", false, false, false, 476), "js"), "html", null, true);
                yield "');
                    break;

        ";
                // line 479
                if ( !CoreExtension::getAttribute($this->env, $this->source, ($context["login"] ?? null), "isSuperAdmin", [], "method", false, false, false, 479)) {
                    // line 480
                    yield "                case '";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::constant("Galette\\Core\\GaletteMail::SENDER_CURRENT"), "html", null, true);
                    yield "':
                    _sender_name.val('";
                    // line 481
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((($__internal_compile_0 = ($context["sender_current"] ?? null)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0["name"] ?? null) : null), "js"), "html", null, true);
                    yield "');
                    _sender_address.val('";
                    // line 482
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((($__internal_compile_1 = ($context["sender_current"] ?? null)) && is_array($__internal_compile_1) || $__internal_compile_1 instanceof ArrayAccess ? ($__internal_compile_1["email"] ?? null) : null), "js"), "html", null, true);
                    yield "');
                    break;
        ";
                }
                // line 485
                yield "                case '";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::constant("Galette\\Core\\GaletteMail::SENDER_OTHER"), "html", null, true);
                yield "':
                    _sender_name.val('');
                    _sender_address.val('');
                    _editable = true;
                    break;
            }

            if (_editable) {
                _sender_name.removeAttr('disabled');
                _sender_address.removeAttr('disabled');
                \$('#sender + span').removeClass('disabled');
            } else {
                _sender_name.attr('disabled', 'disabled');
                _sender_address.attr('disabled', 'disabled');
                \$('#sender + span').addClass('disabled');
            }
        });
    });
</script>
    ";
            }
        }
        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "pages/mailing_form.html.twig";
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
        return array (  767 => 485,  761 => 482,  757 => 481,  752 => 480,  750 => 479,  744 => 476,  740 => 475,  736 => 474,  725 => 465,  723 => 458,  722 => 456,  720 => 454,  718 => 453,  713 => 450,  711 => 449,  703 => 443,  701 => 435,  691 => 427,  689 => 425,  664 => 403,  634 => 375,  632 => 367,  623 => 360,  621 => 357,  613 => 352,  600 => 341,  598 => 333,  590 => 327,  588 => 319,  581 => 314,  579 => 311,  571 => 306,  567 => 304,  563 => 301,  561 => 294,  553 => 288,  551 => 280,  544 => 275,  542 => 272,  528 => 261,  514 => 249,  510 => 246,  507 => 245,  505 => 244,  501 => 243,  494 => 239,  491 => 238,  482 => 234,  478 => 233,  472 => 230,  465 => 226,  456 => 224,  451 => 222,  436 => 209,  430 => 207,  424 => 205,  422 => 204,  417 => 202,  411 => 199,  407 => 198,  398 => 192,  392 => 188,  389 => 187,  381 => 182,  374 => 178,  367 => 176,  362 => 174,  355 => 170,  339 => 157,  332 => 153,  326 => 152,  314 => 147,  308 => 146,  304 => 145,  298 => 142,  294 => 141,  287 => 137,  280 => 132,  278 => 131,  272 => 127,  264 => 122,  256 => 117,  250 => 113,  244 => 110,  240 => 108,  236 => 106,  226 => 102,  221 => 100,  214 => 96,  209 => 93,  205 => 92,  199 => 89,  195 => 87,  193 => 86,  190 => 85,  188 => 84,  182 => 81,  176 => 78,  169 => 74,  165 => 72,  162 => 71,  159 => 70,  156 => 69,  153 => 68,  150 => 67,  147 => 66,  144 => 65,  142 => 64,  138 => 63,  129 => 57,  125 => 56,  119 => 53,  115 => 52,  105 => 48,  97 => 46,  95 => 45,  89 => 44,  84 => 42,  76 => 37,  67 => 32,  65 => 31,  59 => 28,  54 => 25,  52 => 24,  48 => 23,  37 => 21,);
    }

    public function getSourceContext()
    {
        return new Source("", "pages/mailing_form.html.twig", "/var/www/galette/templates/default/pages/mailing_form.html.twig");
    }
}
