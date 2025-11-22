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

/* elements/js/messages.js.twig */
class __TwigTemplate_8b5c81e435ad59569e9eba58ab156bd2 extends Template
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
        // line 22
        yield "\$('.message .close')
  .on('click', function() {
    \$(this)
      .closest('.message')
      .transition('fade')
    ;
  })
;

";
        // line 32
        yield "\$('.message.with-transition')
  .transition('flash')
;

";
        // line 37
        $context["success"] = (((CoreExtension::getAttribute($this->env, $this->source, ($context["flash"] ?? null), "getMessage", ["success_detected"], "method", true, true, false, 37) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, ($context["flash"] ?? null), "getMessage", ["success_detected"], "method", false, false, false, 37)))) ? (CoreExtension::getAttribute($this->env, $this->source, ($context["flash"] ?? null), "getMessage", ["success_detected"], "method", false, false, false, 37)) : ([]));
        // line 38
        $context["success"] = Twig\Extension\CoreExtension::merge(($context["success"] ?? null), (((CoreExtension::getAttribute($this->env, $this->source, ($context["flash"] ?? null), "getMessage", ["success"], "method", true, true, false, 38) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, ($context["flash"] ?? null), "getMessage", ["success"], "method", false, false, false, 38)))) ? (CoreExtension::getAttribute($this->env, $this->source, ($context["flash"] ?? null), "getMessage", ["success"], "method", false, false, false, 38)) : ([])));
        // line 39
        if ((array_key_exists("success_detected", $context) && is_iterable(($context["success_detected"] ?? null)))) {
            // line 40
            yield "    ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["success_detected"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["entry"]) {
                // line 41
                yield "        ";
                $context["success"] = Twig\Extension\CoreExtension::merge(($context["success"] ?? null), [$context["entry"]]);
                // line 42
                yield "    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entry'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
        // line 44
        if ((is_iterable(($context["success"] ?? null)) && (Twig\Extension\CoreExtension::length($this->env->getCharset(), ($context["success"] ?? null)) > 0))) {
            // line 45
            yield "    ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["success"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["entry"]) {
                // line 46
                yield "        \$('body')
          .toast({
            displayTime: 'auto',
            minDisplayTime: 5000,
            wordsPerMinute: 80,
            showProgress: 'bottom',
            closeIcon: true,
            position: 'top attached',
            message: '";
                // line 54
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["entry"], "js"), "html", null, true);
                yield "',
            showIcon: 'check circle outline',
            class: 'success'
          })
        ;
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entry'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
        // line 61
        yield "
";
        // line 63
        $context["info"] = (((CoreExtension::getAttribute($this->env, $this->source, ($context["flash"] ?? null), "getMessage", ["info_detected"], "method", true, true, false, 63) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, ($context["flash"] ?? null), "getMessage", ["info_detected"], "method", false, false, false, 63)))) ? (CoreExtension::getAttribute($this->env, $this->source, ($context["flash"] ?? null), "getMessage", ["info_detected"], "method", false, false, false, 63)) : ([]));
        // line 64
        $context["info"] = Twig\Extension\CoreExtension::merge(($context["info"] ?? null), (((CoreExtension::getAttribute($this->env, $this->source, ($context["flash"] ?? null), "getMessage", ["info"], "method", true, true, false, 64) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, ($context["flash"] ?? null), "getMessage", ["info"], "method", false, false, false, 64)))) ? (CoreExtension::getAttribute($this->env, $this->source, ($context["flash"] ?? null), "getMessage", ["info"], "method", false, false, false, 64)) : ([])));
        // line 65
        if ((array_key_exists("info_detected", $context) && is_iterable(($context["info_detected"] ?? null)))) {
            // line 66
            yield "    ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["info_detected"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["entry"]) {
                // line 67
                yield "        ";
                $context["info"] = Twig\Extension\CoreExtension::merge(($context["info"] ?? null), [$context["entry"]]);
                // line 68
                yield "    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entry'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
        // line 70
        if ((is_iterable(($context["info"] ?? null)) && (Twig\Extension\CoreExtension::length($this->env->getCharset(), ($context["info"] ?? null)) > 0))) {
            // line 71
            yield "    ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["info"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["entry"]) {
                // line 72
                yield "        ";
                $context["info_title"] = "";
                // line 73
                yield "        ";
                $context["info_message"] = $context["entry"];
                // line 74
                yield "        ";
                if (is_iterable($context["entry"])) {
                    // line 75
                    yield "            ";
                    $context["info_title"] = CoreExtension::getAttribute($this->env, $this->source, $context["entry"], "title", [], "any", false, false, false, 75);
                    // line 76
                    yield "            ";
                    $context["info_message"] = CoreExtension::getAttribute($this->env, $this->source, $context["entry"], "message", [], "any", false, false, false, 76);
                    // line 77
                    yield "        ";
                }
                // line 78
                yield "        \$('body')
          .toast({
            displayTime: 'auto',
            minDisplayTime: 5000,
            wordsPerMinute: 80,
            showProgress: 'bottom',
            closeIcon: true,
            position: 'top attached',
            title: '";
                // line 86
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["info_title"] ?? null), "js"), "html", null, true);
                yield "',
            message: '";
                // line 87
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["info_message"] ?? null), "js"), "html", null, true);
                yield "',
            showIcon: 'info',
            class: 'info'
          })
        ;
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entry'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
        // line 94
        yield "
";
        // line 96
        $context["loginfaults"] = CoreExtension::getAttribute($this->env, $this->source, ($context["flash"] ?? null), "getMessage", ["loginfault"], "method", false, false, false, 96);
        // line 97
        if ((array_key_exists("loginfault_detected", $context) && is_iterable(($context["loginfault_detected"] ?? null)))) {
            // line 98
            yield "    ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["loginfault_detected"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["l"]) {
                // line 99
                yield "        ";
                $context["loginfaults"] = Twig\Extension\CoreExtension::merge(($context["loginfaults"] ?? null), [$context["l"]]);
                // line 100
                yield "    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['l'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
        // line 102
        yield "
";
        // line 104
        $context["errors"] = (((CoreExtension::getAttribute($this->env, $this->source, ($context["flash"] ?? null), "getMessage", ["error_detected"], "method", true, true, false, 104) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, ($context["flash"] ?? null), "getMessage", ["error_detected"], "method", false, false, false, 104)))) ? (CoreExtension::getAttribute($this->env, $this->source, ($context["flash"] ?? null), "getMessage", ["error_detected"], "method", false, false, false, 104)) : ([]));
        // line 105
        $context["errors"] = Twig\Extension\CoreExtension::merge(($context["errors"] ?? null), (((CoreExtension::getAttribute($this->env, $this->source, ($context["flash"] ?? null), "getMessage", ["error"], "method", true, true, false, 105) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, ($context["flash"] ?? null), "getMessage", ["error"], "method", false, false, false, 105)))) ? (CoreExtension::getAttribute($this->env, $this->source, ($context["flash"] ?? null), "getMessage", ["error"], "method", false, false, false, 105)) : ([])));
        // line 106
        $context["errors"] = Twig\Extension\CoreExtension::merge(($context["errors"] ?? null), (($context["loginfaults"]) ?? ([])));
        // line 107
        if ((array_key_exists("error_detected", $context) && is_iterable(($context["error_detected"] ?? null)))) {
            // line 108
            yield "    ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["error_detected"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["e"]) {
                // line 109
                yield "        ";
                $context["errors"] = Twig\Extension\CoreExtension::merge(($context["errors"] ?? null), [$context["e"]]);
                // line 110
                yield "    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['e'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
        // line 112
        if ((is_iterable(($context["errors"] ?? null)) && (Twig\Extension\CoreExtension::length($this->env->getCharset(), ($context["errors"] ?? null)) > 0))) {
            // line 113
            yield "    ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["errors"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                // line 114
                yield "        \$('body')
          .toast({
            displayTime: 0,
            closeIcon: true,
            position: 'top attached',
            message: '";
                // line 119
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["error"], "js"), "html", null, true);
                yield "',
            showIcon: 'exclamation circle',
            class: 'error'
          })
        ;
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
        // line 126
        yield "
";
        // line 128
        $context["warnings"] = (((CoreExtension::getAttribute($this->env, $this->source, ($context["flash"] ?? null), "getMessage", ["warning_detected"], "method", true, true, false, 128) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, ($context["flash"] ?? null), "getMessage", ["warning_detected"], "method", false, false, false, 128)))) ? (CoreExtension::getAttribute($this->env, $this->source, ($context["flash"] ?? null), "getMessage", ["warning_detected"], "method", false, false, false, 128)) : ([]));
        // line 129
        $context["warnings"] = Twig\Extension\CoreExtension::merge(($context["warnings"] ?? null), (((CoreExtension::getAttribute($this->env, $this->source, ($context["flash"] ?? null), "getMessage", ["warning"], "method", true, true, false, 129) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, ($context["flash"] ?? null), "getMessage", ["warning"], "method", false, false, false, 129)))) ? (CoreExtension::getAttribute($this->env, $this->source, ($context["flash"] ?? null), "getMessage", ["warning"], "method", false, false, false, 129)) : ([])));
        // line 130
        if ((array_key_exists("warning_detected", $context) && is_iterable(($context["warning_detected"] ?? null)))) {
            // line 131
            yield "    ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["warning_detected"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["w"]) {
                // line 132
                yield "        ";
                $context["warnings"] = Twig\Extension\CoreExtension::merge(($context["warnings"] ?? null), [$context["w"]]);
                // line 133
                yield "    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['w'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
        // line 135
        if ((is_iterable(($context["warnings"] ?? null)) && (Twig\Extension\CoreExtension::length($this->env->getCharset(), ($context["warnings"] ?? null)) > 0))) {
            // line 136
            yield "    ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["warnings"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["warning"]) {
                // line 137
                yield "        \$('body')
          .toast({
            displayTime: 0,
            closeIcon: true,
            position: 'top attached',
            message: '";
                // line 142
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["warning"], "js"), "html", null, true);
                yield "',
            showIcon: 'exclamation triangle',
            class: 'warning'
          })
        ;
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['warning'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
        // line 149
        yield "
";
        // line 151
        if ((array_key_exists("renew_telemetry", $context) && ($context["renew_telemetry"] ?? null))) {
            // line 152
            yield "    \$('body')
      .toast({
        displayTime: 0,
        position: 'bottom right',
        message: \"";
            // line 156
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("Your telemetry data are more than one year old."), "js"), "html", null, true);
            yield " ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("Do you want to send it again?"), "js"), "html", null, true);
            yield "\",
        classActions: 'bottom attached',
        actions:    [{
          text: \"";
            // line 159
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("Yes"), "js"), "html", null, true);
            yield "\",
          class: 'green',
          click: function() {
              \$.ajax({
                  url:  '";
            // line 163
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("telemetryInfos"), "html", null, true);
            yield "',
                  success: function(data) {
                      \$('#telemetry_panel .tdata').append(data);
                      \$('#telemetry_panel').modal('show');
                  }
              });
          }
        },{
          text: \"";
            // line 171
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("No"), "html", null, true);
            yield "\",
          class: 'red',
          click: function() {
              Cookies.set(
                  'renew_telemetry',
                  1,
                  {
                      expires: 365,
                      path: '/'
                  }
              );
              \$(this).toast('close');
          }
        },{
          text: \"";
            // line 185
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("Later"), "html", null, true);
            yield "\",
          class: 'blue',
          click: function() {
              Cookies.set(
                  'renew_telemetry',
                  1,
                  {
                      expires: 182,
                      path: '/'
                  }
              );
              \$(this).toast('close');
          }
        }]
      })
    ;
";
        }
        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "elements/js/messages.js.twig";
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
        return array (  362 => 185,  345 => 171,  334 => 163,  327 => 159,  319 => 156,  313 => 152,  311 => 151,  308 => 149,  295 => 142,  288 => 137,  283 => 136,  281 => 135,  274 => 133,  271 => 132,  266 => 131,  264 => 130,  262 => 129,  260 => 128,  257 => 126,  244 => 119,  237 => 114,  232 => 113,  230 => 112,  223 => 110,  220 => 109,  215 => 108,  213 => 107,  211 => 106,  209 => 105,  207 => 104,  204 => 102,  197 => 100,  194 => 99,  189 => 98,  187 => 97,  185 => 96,  182 => 94,  169 => 87,  165 => 86,  155 => 78,  152 => 77,  149 => 76,  146 => 75,  143 => 74,  140 => 73,  137 => 72,  132 => 71,  130 => 70,  123 => 68,  120 => 67,  115 => 66,  113 => 65,  111 => 64,  109 => 63,  106 => 61,  93 => 54,  83 => 46,  78 => 45,  76 => 44,  69 => 42,  66 => 41,  61 => 40,  59 => 39,  57 => 38,  55 => 37,  49 => 32,  38 => 22,);
    }

    public function getSourceContext()
    {
        return new Source("", "elements/js/messages.js.twig", "/var/www/galette/templates/default/elements/js/messages.js.twig");
    }
}
