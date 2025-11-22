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

/* pages/password_lost.html.twig */
class __TwigTemplate_7d209a4718d4b52b29073c650e5ebeee extends Template
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
        $this->parent = $this->loadTemplate("public_page.html.twig", "pages/password_lost.html.twig", 21);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 25
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 26
        yield "                <form action=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("retrieve-pass"), "html", null, true);
        yield "\" method=\"post\" enctype=\"multipart/form-data\" class=\"ui form\">
                    <div class=\"ui segment\">
                        <div class=\"field\">
                            <div class=\"ui left icon input\">
                                <i class=\"user icon\" aria-hidden=\"true\"></i><label for=\"login\" class=\"visually-hidden\">";
        // line 30
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("Username or email:"), "html", null, true);
        yield "</label>
                                <input type=\"text\" name=\"login\" id=\"login\" autofocus placeholder=\"";
        // line 31
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("Username or email:"), "html", null, true);
        yield "\"/>
                            </div>
                        </div>
                        <input type=\"submit\" class=\"ui fluid large primary submit button\" name=\"lostpasswd\" value=\"";
        // line 34
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("Recover password"), "html", null, true);
        yield "\" />
                        <input type=\"hidden\" name=\"valid\" value=\"1\"/>
                        ";
        // line 36
        yield from         $this->loadTemplate("components/forms/csrf.html.twig", "pages/password_lost.html.twig", 36)->unwrap()->yield($context);
        // line 37
        yield "                    </div>
                </form>
";
        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "pages/password_lost.html.twig";
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
        return array (  79 => 37,  77 => 36,  72 => 34,  66 => 31,  62 => 30,  54 => 26,  50 => 25,  45 => 21,  43 => 23,  36 => 21,);
    }

    public function getSourceContext()
    {
        return new Source("", "pages/password_lost.html.twig", "/var/www/galette/templates/default/pages/password_lost.html.twig");
    }
}
