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

/* elements/scripts.html.twig */
class __TwigTemplate_73ebe30625ab065b4db97321bf785376 extends Template
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
        yield "        <script type=\"text/javascript\" src=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->getBasePath(), "html", null, true);
        yield "/";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::constant("GALETTE_THEME"), "html", null, true);
        yield "ui/semantic.min.js\"></script>
        <script type=\"text/javascript\" src=\"";
        // line 22
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->getBasePath(), "html", null, true);
        yield "/assets/js/galette-main.bundle.min.js\"></script>
    ";
        // line 23
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["login"] ?? null), "isDarkModeEnabled", [], "method", false, false, false, 23)) {
            // line 24
            yield "        <script type=\"text/javascript\" src=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->getBasePath(), "html", null, true);
            yield "/assets/js/darkreader.min.js\"></script>
    ";
        }
        // line 26
        yield "
        <script type=\"text/javascript\">
            function csrfSafeMethod(method) {
                // these HTTP methods do not require CSRF protection
                return (/^(GET|HEAD|OPTIONS|TRACE)\$/.test(method));
            }

            \$(function(){
                function _darkMode() {
                    var _dark_enabled = Cookies.get('galette_dark_mode');
                    var _cookie_value = 1;
                    if (_dark_enabled && _dark_enabled == 1) {
                        var _cookie_value = 0;
    ";
        // line 39
        $context["darkcssfile"] = (Twig\Extension\CoreExtension::constant("GALETTE_CACHE_DIR") . "dark.css");
        // line 40
        yield "    ";
        if ( !$this->env->getFunction('file_exists')->getCallable()(($context["darkcssfile"] ?? null))) {
            // line 41
            yield "                        function writeDarkTheme() {
                            DarkReader.enable({
                                brightness: 100,
                                contrast: 90,
                                sepia: 10
                            });
                            return DarkReader.exportGeneratedCSS();
                        }
                        writeDarkTheme().then(function(cssdata) {
                            \$.ajax({
                                url: '";
            // line 51
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("writeDarkCSS"), "html", null, true);
            yield "',
                                method: 'post',
                                data: cssdata.replaceAll('themes/galette/assets', 'themes/default/ui/themes/galette/assets'),
                                success: function(res) {
                                    console.log('Dark theme CSS stored');
                                },
                                error: function() {
                                    console.log('Error storing dark theme CSS');
                                }
                            });
                        });
    ";
        }
        // line 63
        yield "                    }
                    \$('.darkmode').on('click', function(e) {
                        e.preventDefault();
                        Cookies.set(
                            'galette_dark_mode',
                            _cookie_value,
                            {
                                expires: 365,
                                path: '/'
                            }
                        );
                        window.location.reload();
                    });
                    if (window.matchMedia) {
                        window.matchMedia('(prefers-color-scheme: dark)').addEventListener('change', event => {
                            if (event.matches) {
                                _cookie_value = 1;
                            }
                            Cookies.set(
                                'galette_dark_mode',
                                _cookie_value,
                                {
                                    expires: 365,
                                    path: '/'
                                }
                            );
                            window.location.reload();
                        });
                    }
                }
                _darkMode();

                \$.ajaxPrefilter(function(options, originalOptions, jqXHR){
                    if (options.type.toLowerCase() === \"post\") {
                        // initialize `data` to empty string if it does not exist
                        options.data = options.data || \"\";

                        // add leading ampersand if `data` is non-empty
                        options.data += options.data?\"&\":\"\";

                        // add csrf
                        options.data += encodeURIComponent(\"";
        // line 104
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["csrf_name_key"] ?? null), "html", null, true);
        yield "\") + \"=\" + encodeURIComponent(\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["csrf_name"] ?? null), "html", null, true);
        yield "\") + \"&\" + encodeURIComponent(\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["csrf_value_key"] ?? null), "html", null, true);
        yield "\") + \"=\" + encodeURIComponent(\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["csrf_value"] ?? null), "html", null, true);
        yield "\")
                    }
                });

    ";
        // line 108
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["login"] ?? null), "isLogged", [], "method", false, false, false, 108) &&  !array_key_exists("ext_auth", $context))) {
            // line 109
            yield "                // Display user menu in compact mode
                var _compactMenu = function() {
                    var _hidden = Cookies.get('galette_compact_menu');
                    var _menu = document.getElementById('sidemenu');
                    var _content = _menu.nextElementSibling;
                    var _trigger = document.getElementById('compactmenu');
                    if (_hidden & _hidden == 1) {
                        _trigger.checked = true;
                        _menu.classList.add('compact_menu');
                        _content.classList.add('extended');
                    }
                    _trigger.addEventListener('change', function() {
                        var _checked = \$(this).is(':checked');
                        Cookies.set(
                            'galette_compact_menu',
                            (_checked ? 1 : 0),
                                {
                                    expires: 365,
                                    path: '/'
                                }
                        );
                        window.location.reload();
                    });
                }

                _compactMenu();
    ";
        }
        // line 136
        yield "
    ";
        // line 137
        if (($context["autocomplete"] ?? null)) {
            // line 138
            yield "                \$('#ville_adh_field, #lieu_naissance_field').search({
                    apiSettings: {
                        url: '";
            // line 140
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("suggestTown", ["term" => "{query}"]), "html", null, true);
            yield "',
                        method: 'post',
                        onFailure: function(response, element, xhr) {
                            console.log(response);
                        },
                        onError: function(errorMessage, element, xhr) {
                            ";
            // line 146
            yield from             $this->loadTemplate("elements/js/modal.js.twig", "elements/scripts.html.twig", 146)->unwrap()->yield(CoreExtension::merge($context, ["modal_title_twig" => $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("An error occurred :("), "js"), "modal_content" => "errorMessage", "modal_class" => "tiny", "modal_content_class" => "scrolling", "modal_deny_only" => true, "modal_cancel_text" => $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("Close"), "js"), "modal_classname" => "redalert"]));
            // line 155
            yield "                            console.log(xhr);
                        }
                    },
                    minCharacters : 2
                });
                \$('#pays_adh_field').search({
                    apiSettings: {
                        url: '";
            // line 162
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("suggestCountry", ["term" => "{query}"]), "html", null, true);
            yield "',
                        method: 'post',
                        onFailure: function(response, element, xhr) {
                            console.log(response);
                        },
                        onError: function(errorMessage, element, xhr) {
                            ";
            // line 168
            yield from             $this->loadTemplate("elements/js/modal.js.twig", "elements/scripts.html.twig", 168)->unwrap()->yield(CoreExtension::merge($context, ["modal_title_twig" => $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("An error occurred :("), "js"), "modal_content" => "errorMessage", "modal_class" => "tiny", "modal_content_class" => "scrolling", "modal_deny_only" => true, "modal_cancel_text" => $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("Close"), "js"), "modal_classname" => "redalert"]));
            // line 177
            yield "                            console.log(xhr);
                        }
                    },
                    minCharacters : 2
                });
                \$('#region_adh_field').search({
                    apiSettings: {
                        url: '";
            // line 184
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("suggestRegion", ["term" => "{query}"]), "html", null, true);
            yield "',
                        method: 'post',
                        onFailure: function(response, element, xhr) {
                            console.log(response);
                        },
                        onError: function(errorMessage, element, xhr) {
                            ";
            // line 190
            yield from             $this->loadTemplate("elements/js/modal.js.twig", "elements/scripts.html.twig", 190)->unwrap()->yield(CoreExtension::merge($context, ["modal_title_twig" => $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("An error occurred :("), "js"), "modal_content" => "errorMessage", "modal_class" => "tiny", "modal_content_class" => "scrolling", "modal_deny_only" => true, "modal_cancel_text" => $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("Close"), "js"), "modal_classname" => "redalert"]));
            // line 199
            yield "                            console.log(xhr);
                        }
                    },
                    minCharacters : 2
                });
    ";
        }
        // line 205
        yield "
            ";
        // line 206
        yield from         $this->loadTemplate("elements/js/calendar.js.twig", "elements/scripts.html.twig", 206)->unwrap()->yield($context);
        // line 207
        yield "
    ";
        // line 208
        if (array_key_exists("renew_telemetry", $context)) {
            // line 209
            yield "            ";
            yield from             $this->loadTemplate("modals/telemetry.html.twig", "elements/scripts.html.twig", 209)->unwrap()->yield(CoreExtension::merge($context, ["part" => "jsdialog"]));
            // line 210
            yield "    ";
        }
        // line 211
        yield "
            ";
        // line 212
        yield from         $this->loadTemplate("elements/js/messages.js.twig", "elements/scripts.html.twig", 212)->unwrap()->yield($context);
        // line 213
        yield "
            });
        </script>
    ";
        // line 216
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["login"] ?? null), "isLogged", [], "method", false, false, false, 216) &&  !array_key_exists("ext_aut", $context))) {
            // line 217
            yield "        <script type=\"module\" src=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->getBasePath(), "html", null, true);
            yield "/assets/js/sortable.min.js\"></script>
    ";
        }
        // line 219
        yield "    ";
        if (($context["require_charts"] ?? null)) {
            // line 220
            yield "        <script type=\"module\" src=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->getBasePath(), "html", null, true);
            yield "/assets/js/chartjs.min.js\"></script>
    ";
        }
        // line 222
        yield "    ";
        if (($context["require_mass"] ?? null)) {
            // line 223
            yield "        <script type=\"text/javascript\" src=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->getBasePath(), "html", null, true);
            yield "/assets/js/masschanges.min.js\"></script>
    ";
        }
        // line 225
        yield "    ";
        if (($context["html_editor"] ?? null)) {
            // line 226
            yield "        <script type=\"text/javascript\" src=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->getBasePath(), "html", null, true);
            yield "/assets/js/codemirror.js\"></script>
        <script type=\"text/javascript\" src=\"";
            // line 227
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->getBasePath(), "html", null, true);
            yield "/assets/js/xml.js\"></script>
        <script type=\"text/javascript\" src=\"";
            // line 228
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->getBasePath(), "html", null, true);
            yield "/assets/js/formatting.js\"></script>
        <script type=\"text/javascript\" src=\"";
            // line 229
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->getBasePath(), "html", null, true);
            yield "/assets/js/summernote.min.js\"></script>
        <script type=\"text/javascript\" src=\"";
            // line 230
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->getBasePath(), "html", null, true);
            yield "/assets/js/lang/summernote-";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::replace(CoreExtension::getAttribute($this->env, $this->source, ($context["i18n"] ?? null), "getID", [], "method", false, false, false, 230), ["_" => "-"]), "html", null, true);
            yield ".min.js\"></script>
        <script type=\"text/javascript\">
            function activateHtmlEditor(elt, basic) {
                if (basic === true) {
                    var _toolbar = [
                        ['font', ['bold', 'italic', 'strikethrough', 'clear']],
                        ['para', ['ul', 'ol']],
                        ['insert', ['link']],
                        ['view', ['codeview']]
                    ];
                } else {
                    var _toolbar = [
                        ['style', ['style']],
                        ['font', ['bold', 'italic', 'strikethrough', 'clear']],
                        ['para', ['ul', 'ol', 'paragraph']],
                        ['insert', ['link', 'picture']],
                        ['view', ['codeview']]
                    ];
                }
                elt.summernote({
                    lang: '";
            // line 250
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::replace(CoreExtension::getAttribute($this->env, $this->source, ($context["i18n"] ?? null), "getID", [], "method", false, false, false, 250), ["_" => "-"]), "html", null, true);
            yield "',
                    disableDragAndDrop: true,
                    height: 240,
                    toolbar: _toolbar,
                    styleTags: [
                        'p', 'h1', 'h2', 'h3', 'h4', 'h5', 'h6'
                    ],
                    callbacks: {
                        onImageUpload: function (data) {
                            //prevent image copypaste
                            data.pop();
                        }
                    }
                });
                elt.summernote('focus');
            }

            function deactivateHtmlEditor(elt) {
                elt.summernote('destroy');
            }

            function activateMailingEditor() {
                if(!\$('#mailing_html').attr('checked')){
                    \$('#mailing_html').attr('checked', true);
                }

                \$('input#html_editor_active').attr('value', '1');
                \$('#activate_editor').remove();
                \$('#summernote_toggler').html('<a class=\"ui blue tertiary button\" href=\"javascript:deactivateMailingEditor();\" id=\"deactivate_editor\">";
            // line 278
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("Deactivate HTML editor"), "html", null, true);
            yield "</a>');

                activateHtmlEditor(\$('#mailing_corps'));
            }
            function deactivateMailingEditor() {
                deactivateHtmlEditor(\$('#mailing_corps'));
                \$('#deactivate_editor').remove();
                \$('#summernote_toggler').html('<a class=\"ui blue tertiary button\" href=\"javascript:activateMailingEditor();\" id=\"activate_editor\">";
            // line 285
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("Activate HTML editor"), "html", null, true);
            yield "</a>');
            }
        ";
            // line 287
            if ((array_key_exists("html_editor_active", $context) && (($context["html_editor_active"] ?? null) == 1))) {
                // line 288
                yield "            \$(function(){
                activateMailingEditor();
            });
        ";
            }
            // line 292
            yield "        </script>
    ";
        }
        // line 294
        yield "    ";
        $context["localjstracking"] = (Twig\Extension\CoreExtension::constant("_CURRENT_THEME_PATH") . "tracking.js");
        // line 295
        yield "    ";
        if ($this->env->getFunction('file_exists')->getCallable()(($context["localjstracking"] ?? null))) {
            // line 296
            yield "        <script type=\"text/javascript\" src=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->getBasePath(), "html", null, true);
            yield "/";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::constant("GALETTE_THEME"), "html", null, true);
            yield "tracking.js\"></script>
    ";
        }
        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "elements/scripts.html.twig";
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
        return array (  420 => 296,  417 => 295,  414 => 294,  410 => 292,  404 => 288,  402 => 287,  397 => 285,  387 => 278,  356 => 250,  331 => 230,  327 => 229,  323 => 228,  319 => 227,  314 => 226,  311 => 225,  305 => 223,  302 => 222,  296 => 220,  293 => 219,  287 => 217,  285 => 216,  280 => 213,  278 => 212,  275 => 211,  272 => 210,  269 => 209,  267 => 208,  264 => 207,  262 => 206,  259 => 205,  251 => 199,  249 => 190,  240 => 184,  231 => 177,  229 => 168,  220 => 162,  211 => 155,  209 => 146,  200 => 140,  196 => 138,  194 => 137,  191 => 136,  162 => 109,  160 => 108,  147 => 104,  104 => 63,  89 => 51,  77 => 41,  74 => 40,  72 => 39,  57 => 26,  51 => 24,  49 => 23,  45 => 22,  38 => 21,);
    }

    public function getSourceContext()
    {
        return new Source("", "elements/scripts.html.twig", "/var/www/galette/templates/default/elements/scripts.html.twig");
    }
}
