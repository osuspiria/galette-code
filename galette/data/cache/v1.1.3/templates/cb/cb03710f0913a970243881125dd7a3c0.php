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

/* elements/js/pwdcheck.js.twig */
class __TwigTemplate_74a0c2f323f957bf0ab6ac9822c52a01 extends Template
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
        $context["selector"] = ((array_key_exists("selector", $context)) ? (($context["selector"] ?? null)) : (""));
        // line 22
        $context["loader"] = ((array_key_exists("loader", $context)) ? (($context["loader"] ?? null)) : (""));
        // line 23
        $context["extra_data"] = ((array_key_exists("extra_data", $context)) ? (($context["extra_data"] ?? null)) : (""));
        // line 24
        yield "

\$('";
        // line 26
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["selector"] ?? null), "html", null, true);
        yield "').parent('.input').parent('";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((($context["selector"] ?? null) . $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape("_field", "js")), "html", null, true);
        yield "').append(\$('<meter max=\"4\" class=\"password-strength-meter\"></meter><span class=\"password-strength-text\"></span>'));
\$('";
        // line 27
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["selector"] ?? null), "html", null, true);
        yield "').on('keyup', function() {
    var _this = \$(this);
    \$.ajax({
        url: '";
        // line 30
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("checkPassword"), "html", null, true);
        yield "',
        type: 'POST',
        data: {
            value: \$('";
        // line 33
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["selector"] ?? null), "html", null, true);
        yield "').val(),
            ";
        // line 34
        yield ($context["extra_data"] ?? null);
        yield "
        },
        ";
        // line 36
        yield from         $this->loadTemplate("elements/js/loader.js.twig", "elements/js/pwdcheck.js.twig", 36)->unwrap()->yield(CoreExtension::merge($context, ["selector" => (        // line 37
($context["selector"] ?? null) . "_field"), "loader" =>         // line 38
($context["loader"] ?? null)]));
        // line 39
        yield ",
        success: function(res) {
            var _field = _this.parent('.input').parent('";
        // line 41
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((($context["selector"] ?? null) . $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape("_field", "js")), "html", null, true);
        yield "');
            var _meter = _field.find('.password-strength-meter');

            _meter.val(res.score);
            var _txt = _field.find('span.password-strength-text');

            //reset
            _field.find('.passtips').remove();
            _txt.attr('class', 'password-strength-text');
            _txt.html('');
            _meter.attr('class', 'password-strength-meter');
            _meter.attr('title', '');

            if (res.valid) {
                _txt.append(\$('<i class=\"ui check circle green icon\" aria-hidden=\"true\"></i> <span>";
        // line 55
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("Password is valid :)"), "js"), "html", null, true);
        yield "</span>'));
                _txt.addClass('use');
            } else {
                _txt.append(\$('<i class=\"ui times circle red icon\" aria-hidden=\"true\"></i> <span>";
        // line 58
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("Password is not valid!"), "js"), "html", null, true);
        yield "</span>'));

                _txt.append(' (');
                for (i = 0; i < res.errors.length; i++) {
                    if (i > 0) {
                        _txt.append(', ');
                    }
                    _txt.append(res.errors[i]);
                }
                _txt.append(')');
                _txt.addClass('delete');
            }

            if (res.warnings) {
                _meter.addClass('tooltip');
                var _tip = \$('<span class=\"passtips tip\"></span>');
                _tip.hide();
                for (i = 0; i < res.warnings.length; i++) {
                    if (i > 0) {
                        _tip.append('<br/>');
                    }
                    _tip.append(res.warnings[i]);
                }
                _meter.after(_tip);
            }
        },
        error: function () {
            ";
        // line 85
        yield from         $this->loadTemplate("elements/js/modal.js.twig", "elements/js/pwdcheck.js.twig", 85)->unwrap()->yield(CoreExtension::merge($context, ["modal_title_twig" => $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("An error occured checking password :("), "js"), "modal_without_content" => true, "modal_class" => "mini", "modal_deny_only" => true, "modal_cancel_text" => $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("Close"), "js"), "modal_classname" => "redalert"]));
        // line 93
        yield "        }
    });

});

";
        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "elements/js/pwdcheck.js.twig";
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
        return array (  138 => 93,  136 => 85,  106 => 58,  100 => 55,  83 => 41,  79 => 39,  77 => 38,  76 => 37,  75 => 36,  70 => 34,  66 => 33,  60 => 30,  54 => 27,  48 => 26,  44 => 24,  42 => 23,  40 => 22,  38 => 21,);
    }

    public function getSourceContext()
    {
        return new Source("", "elements/js/pwdcheck.js.twig", "/var/www/galette/templates/default/elements/js/pwdcheck.js.twig");
    }
}
