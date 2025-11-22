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

/* pages/index.html.twig */
class __TwigTemplate_3cae98e85d19a804dd68830ed44e252c extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'form_url' => [$this, 'block_form_url'],
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 21
        return "public_page.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 23
        $context["body_class"] = "front_page";
        // line 21
        $this->parent = $this->loadTemplate("public_page.html.twig", "pages/index.html.twig", 21);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 25
    public function block_form_url($context, array $blocks = [])
    {
        $macros = $this->macros;
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("dologin"), "html", null, true);
        return; yield '';
    }

    // line 27
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 28
        yield "                <form action=\"";
        yield from         $this->unwrap()->yieldBlock("form_url", $context, $blocks);
        yield "\" method=\"post\" class=\"ui form\">
    ";
        // line 29
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["preferences"] ?? null), "pref_mail_method", [], "any", false, false, false, 29) != Twig\Extension\CoreExtension::constant("\\Galette\\Core\\GaletteMail::METHOD_DISABLED"))) {
            // line 30
            yield "                    <div class=\"ui segments\">
    ";
        }
        // line 32
        yield "                        <div class=\"ui segment\">
                            <div class=\"field\">
                                <div class=\"ui left icon input\">
                                    <i class=\"user icon\" aria-hidden=\"true\"></i><label for=\"login\" class=\"visually-hidden\">";
        // line 35
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("Username:"), "html", null, true);
        yield "</label>
                                    <input type=\"text\" name=\"login\" id=\"login\" autofocus placeholder=\"";
        // line 36
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("Username:"), "html", null, true);
        yield "\"/>
                                </div>
                            </div>
                            <div class=\"field\">
                                <div class=\"ui left icon input\">
                                    <i class=\"lock icon\" aria-hidden=\"true\"></i><label for=\"password\" class=\"visually-hidden\">";
        // line 41
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("Password:"), "html", null, true);
        yield "</label>
                                    <input type=\"password\" name=\"password\" id=\"password\" placeholder=\"";
        // line 42
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("Password:"), "html", null, true);
        yield "\"/>
                                </div>
                            </div>
                            <input type=\"submit\" class=\"ui fluid large primary submit button\" value=\"";
        // line 45
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("Login"), "html", null, true);
        yield "\"/>
                            <input type=\"hidden\" name=\"ident\" value=\"1\" />
                            ";
        // line 47
        yield from         $this->loadTemplate("components/forms/csrf.html.twig", "pages/index.html.twig", 47)->unwrap()->yield($context);
        // line 48
        yield "                        </div>
    ";
        // line 49
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["preferences"] ?? null), "pref_mail_method", [], "any", false, false, false, 49) != Twig\Extension\CoreExtension::constant("\\Galette\\Core\\GaletteMail::METHOD_DISABLED"))) {
            // line 50
            yield "                        <div class=\"ui center aligned secondary segment\">
                            <a
                                href=\"";
            // line 52
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("password-lost"), "html", null, true);
            yield "\"
                                class=\"password-lost\"
                            >
                                <i class=\"icon unlock alt\" aria-hidden=\"true\"></i>
                                ";
            // line 56
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("Lost your password?"), "html", null, true);
            yield "
                            </a>
                        </div>
                    </div>
    ";
        }
        // line 61
        yield "                </form>
";
        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "pages/index.html.twig";
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
        return array (  132 => 61,  124 => 56,  117 => 52,  113 => 50,  111 => 49,  108 => 48,  106 => 47,  101 => 45,  95 => 42,  91 => 41,  83 => 36,  79 => 35,  74 => 32,  70 => 30,  68 => 29,  63 => 28,  59 => 27,  51 => 25,  46 => 21,  44 => 23,  37 => 21,);
    }

    public function getSourceContext()
    {
        return new Source("", "pages/index.html.twig", "/var/www/galette/templates/default/pages/index.html.twig");
    }
}
