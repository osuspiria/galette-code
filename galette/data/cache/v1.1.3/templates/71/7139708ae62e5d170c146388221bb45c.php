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

/* elements/js/photo_dnd.js.twig */
class __TwigTemplate_92e4b2b9ce43b5718a5812177a59e976 extends Template
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
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["member"] ?? null), "id", [], "any", false, false, false, 21)) {
            // line 22
            yield "    //Photo dnd
    // Check if window.FileReader exists to make
    // sure the browser supports file uploads
    if ( typeof(window.FileReader) ) {
        var _dz = \$('#photo_adh');

        if (_dz[0]) {
            // Add a nice drag effect
            _dz[0].ondragover = function() {
                _dz.css({ opacity: 0.4 });
                _dz.transition('pulsating');
                return false;
            };

            // Remove the drag effect when leaving the dropping zone
            _dz[0].ondragleave = function() {
                _dz.css({ opacity: 1 });
                _dz.transition('stop all');
                return false;
            };

            // The drop event handles the file sending
            _dz[0].ondrop = function(event) {
                // Stop the browser from opening the file in the window
                event.preventDefault();
                _dz.css({ opacity: 1 });
                _dz.transition('stop all');
                \$('.message').remove();

                var file = event.dataTransfer.files[0];

    ";
            // line 53
            if ((CoreExtension::getAttribute($this->env, $this->source, ($context["preferences"] ?? null), "pref_force_picture_ratio", [], "any", false, false, false, 53) == 1)) {
                // line 54
                yield "                ";
                $context["system_ratio"] = (((CoreExtension::getAttribute($this->env, $this->source, ($context["preferences"] ?? null), "pref_member_picture_ratio", [], "any", false, false, false, 54) == "square_ratio")) ? ($this->env->getFunction('_T')->getCallable()("Square (1:1)")) : ((((CoreExtension::getAttribute($this->env, $this->source, ($context["preferences"] ?? null), "pref_member_picture_ratio", [], "any", false, false, false, 54) == "portrait_ratio")) ? ($this->env->getFunction('_T')->getCallable()("Portrait (3:4)")) : ((((CoreExtension::getAttribute($this->env, $this->source, ($context["preferences"] ?? null), "pref_member_picture_ratio", [], "any", false, false, false, 54) == "landscape_ratio")) ? ($this->env->getFunction('_T')->getCallable()("Landscape (4:3)")) : (""))))));
                // line 55
                yield "
                var cropping = { ratio: '";
                // line 56
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["preferences"] ?? null), "pref_member_picture_ratio", [], "any", false, false, false, 56), "html", null, true);
                yield "' };
                var focus_select = '<div class=\"ui basic horizontally fitted segment form\"><div class=\"field\">';
                    focus_select += '<select name=\"crop_focus_ajax\" id=\"crop_focus_ajax\" class=\"ui dropdown\">';
                    focus_select += '<option value=\"center\">";
                // line 59
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("Center"), "html", null, true);
                yield "</option>';
                    focus_select += '<option value=\"top\">";
                // line 60
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("Top"), "html", null, true);
                yield "</option>';
                    focus_select += '<option value=\"bottom\">";
                // line 61
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("Bottom"), "html", null, true);
                yield "</option>';
                    focus_select += '<option value=\"left\">";
                // line 62
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("Left"), "html", null, true);
                yield "</option>';
                    focus_select += '<option value=\"right\">";
                // line 63
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("Right"), "html", null, true);
                yield "</option>';
                    focus_select += '</select>';
                    focus_select += '</div></div>';

                ";
                // line 67
                yield from                 $this->loadTemplate("elements/js/modal.js.twig", "elements/js/photo_dnd.js.twig", 67)->unwrap()->yield(CoreExtension::merge($context, ["modal_title_twig" => $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("Cropping focus"), "js"), "modal_content_twig" => $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::replace($this->env->getFunction('_T')->getCallable()("Choose the area of the original image to preserve after cropping to the final ratio defined in the settings : %ratio"), ["%ratio" =>                 // line 69
($context["system_ratio"] ?? null)]), "js"), "modal_class" => "tiny", "modal_other_options" => ["closable" => false], "modal_onshow" => "\$(this).find('.content').append(focus_select);\$('#crop_focus_ajax').dropdown();", "modal_onapprove" => "cropping.focus=\$(this).find('#crop_focus_ajax').val();_fileLoad(file, cropping);"]));
                // line 77
                yield "    ";
            } else {
                // line 78
                yield "                _fileLoad(file);
    ";
            }
            // line 80
            yield "            }

            var _fileLoad = function(file, cropping_settings) {
                var reader = new FileReader();
                reader.readAsDataURL(file);

                var cropping = false;
                if (cropping_settings) {
                    var cropping = cropping_settings;
                }

                reader.onload = function(evt) {
                    \$.ajax({
                            type: 'POST',
                            dataType: 'json',
                            url : '";
            // line 95
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("photoDnd"), "html", null, true);
            yield "',
                            data: {
                                member_id: ";
            // line 97
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["member"] ?? null), "id", [], "any", false, false, false, 97), "html", null, true);
            yield ",
                                filename: file.name,
                                filesize: file.size,
                                file: evt.target.result,
                                cropping: cropping
                            },
                            ";
            // line 103
            yield from             $this->loadTemplate("elements/js/loader.js.twig", "elements/js/photo_dnd.js.twig", 103)->unwrap()->yield(CoreExtension::merge($context, ["selector" => "#member_card"]));
            // line 105
            yield ",
                            success: function(res){
                                window.location.reload(true);
                            },
                        error: function() {
                            ";
            // line 110
            yield from             $this->loadTemplate("elements/js/modal.js.twig", "elements/js/photo_dnd.js.twig", 110)->unwrap()->yield(CoreExtension::merge($context, ["modal_title_twig" => $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("An error occurred sending photo :("), "js"), "modal_without_content" => true, "modal_class" => "tiny", "modal_deny_only" => true, "modal_cancel_text" => $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("Close"), "js"), "modal_classname" => "redalert"]));
            // line 118
            yield "                        }
                    });
                }
            }
        }
    }
";
        }
        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "elements/js/photo_dnd.js.twig";
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
        return array (  162 => 118,  160 => 110,  153 => 105,  151 => 103,  142 => 97,  137 => 95,  120 => 80,  116 => 78,  113 => 77,  111 => 69,  110 => 67,  103 => 63,  99 => 62,  95 => 61,  91 => 60,  87 => 59,  81 => 56,  78 => 55,  75 => 54,  73 => 53,  40 => 22,  38 => 21,);
    }

    public function getSourceContext()
    {
        return new Source("", "elements/js/photo_dnd.js.twig", "/var/www/galette/templates/default/elements/js/photo_dnd.js.twig");
    }
}
