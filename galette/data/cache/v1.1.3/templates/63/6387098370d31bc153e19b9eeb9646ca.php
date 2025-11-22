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

/* pages/500.html.twig */
class __TwigTemplate_203cb39901955718849558bc511f44c0 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'content' => [$this, 'block_content'],
        ];
        $macros["_self"] = $this->macros["_self"] = $this;
    }

    protected function doGetParent(array $context)
    {
        // line 21
        return "public_page.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("public_page.html.twig", "pages/500.html.twig", 21);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 56
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 57
        yield "    <div class=\"ui red message\">
        <h2 class=\"ui center aligned header\">";
        // line 58
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("Application error"), "html", null, true);
        yield "</h2>
    </div>

    ";
        // line 61
        if (((CoreExtension::getAttribute($this->env, $this->source, ($context["login"] ?? null), "isLogged", [], "method", false, false, false, 61) && CoreExtension::getAttribute($this->env, $this->source, ($context["login"] ?? null), "isAdmin", [], "method", false, false, false, 61)) || $this->env->getFunction('callstatic')->getCallable()("\\Galette\\Core\\Galette", "isDebugEnabled"))) {
            // line 62
            yield "        ";
            yield CoreExtension::callMacro($macros["_self"], "macro_render_ex", [($context["exception"] ?? null)], 62, $context, $this->getSourceContext());
            yield "
    ";
        }
        return; yield '';
    }

    // line 23
    public function macro_render_ex($__exception__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "exception" => $__exception__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        return ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            // line 24
            yield "    <div class=\"ui segment\">
        <h3>";
            // line 25
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("Details"), "html", null, true);
            yield "</h3>
        <p>
            <strong>";
            // line 27
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("Type:"), "html", null, true);
            yield "</strong>
            ";
            // line 28
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('get_class')->getCallable()(($context["exception"] ?? null)), "html", null, true);
            yield "
        </p>
        <p>
            <strong>";
            // line 31
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("Code:"), "html", null, true);
            yield "</strong>
            ";
            // line 32
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["exception"] ?? null), "getCode", [], "method", false, false, false, 32), "html", null, true);
            yield "
        </p>
        <p>
            <strong>";
            // line 35
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("Message:"), "html", null, true);
            yield "</strong>
            ";
            // line 36
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["exception"] ?? null), "getMessage", [], "method", false, false, false, 36), "html", null, true);
            yield "
        </p>
        <p>
            <strong>";
            // line 39
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("File:"), "html", null, true);
            yield "</strong>
            ";
            // line 40
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["exception"] ?? null), "getFile", [], "method", false, false, false, 40), "html", null, true);
            yield "
        </p>
        <p>
            <strong>";
            // line 43
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("Line:"), "html", null, true);
            yield "</strong>
            ";
            // line 44
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["exception"] ?? null), "getLine", [], "method", false, false, false, 44), "html", null, true);
            yield "
        </p>
    </div>
    <div class=\"ui segment error-trace\">
        <h3>";
            // line 48
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("Trace"), "html", null, true);
            yield "</h3>
        <pre>";
            // line 49
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["exception"] ?? null), "getTraceAsString", [], "method", false, false, false, 49), "html", null, true);
            yield "</pre>
    </div>
    ";
            // line 51
            if (CoreExtension::getAttribute($this->env, $this->source, ($context["exception"] ?? null), "getPrevious", [], "method", false, false, false, 51)) {
                // line 52
                yield "        ";
                yield CoreExtension::callMacro($macros["_self"], "macro_render_ex", [CoreExtension::getAttribute($this->env, $this->source, ($context["exception"] ?? null), "getPrevious", [], "method", false, false, false, 52)], 52, $context, $this->getSourceContext());
                yield "
    ";
            }
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "pages/500.html.twig";
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
        return array (  154 => 52,  152 => 51,  147 => 49,  143 => 48,  136 => 44,  132 => 43,  126 => 40,  122 => 39,  116 => 36,  112 => 35,  106 => 32,  102 => 31,  96 => 28,  92 => 27,  87 => 25,  84 => 24,  72 => 23,  63 => 62,  61 => 61,  55 => 58,  52 => 57,  48 => 56,  37 => 21,);
    }

    public function getSourceContext()
    {
        return new Source("", "pages/500.html.twig", "/var/www/galette/templates/default/pages/500.html.twig");
    }
}
