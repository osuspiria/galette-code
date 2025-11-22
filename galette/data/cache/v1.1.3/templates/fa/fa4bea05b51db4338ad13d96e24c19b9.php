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

/* pages/admintools.html.twig */
class __TwigTemplate_9ca856a1d0589f12470a47f059e6472d extends Template
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
        return "page.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("page.html.twig", "pages/admintools.html.twig", 21);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 23
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 24
        yield "    <form action=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("doAdminTools"), "html", null, true);
        yield "\" method=\"post\" class=\"ui form\">
        <div class=\"ui icon yellow icon message with-transition\">
            <i class=\"exclamation triangle icon\" aria-hidden=\"true\"></i>
            <div class=\"content\">
                ";
        // line 28
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("Make sure you've done a backup of the database before using any of the following tools!"), "html", null, true);
        yield "
            </div>
        </div>
        <div class=\"ui top attached accordion-styled header\">
            ";
        // line 32
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("Select actions(s)"), "html", null, true);
        yield "
        </div>
        <div class=\"ui bottom attached accordion-styled segment\">
            <div class=\"active content field\">
                <div class=\"field inline\">
                    <div class=\"ui toggle checkbox\">
                        <input type=\"checkbox\" name=\"inittexts\" id=\"inittexts\"/>
                        <label for=\"inittexts\" title=\"";
        // line 39
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("Reset all emails contents to their default values"), "html", null, true);
        yield "\">
                            ";
        // line 40
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("Reset emails contents"), "html", null, true);
        yield "
                            <i class=\"circular inverted primary small icon info tooltip\" title=\"";
        // line 41
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("Reset all emails contents to their default values"), "html", null, true);
        yield "\" aria-hidden=\"true\"></i>
                            <span class=\"exemple\">";
        // line 42
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("(all existing values will be removed)"), "html", null, true);
        yield "</span>
                        </label>
                    </div>
                </div>
                <div class=\"field inline\">
                    <div class=\"ui toggle checkbox\">
                        <input type=\"checkbox\" name=\"initfields\" id=\"initfields\"/>
                        <label for=\"initfields\" title=\"";
        // line 49
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("Reset all emails contents to their default values"), "html", null, true);
        yield "\">
                            ";
        // line 50
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("Reset fields configuration"), "html", null, true);
        yield "
                            <i class=\"circular inverted primary small icon info tooltip\" data-html=\"";
        // line 51
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("Reset all emails contents to their default values"), "html", null, true);
        yield "<br/>";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("This includes fields positions, order, visibility, access levels and mandatory marks."), "html", null, true);
        yield "\" aria-hidden=\"true\"></i>
                            <span class=\"exemple\">";
        // line 52
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("(all existing values will be removed)"), "html", null, true);
        yield "</span>
                        </label>
                    </div>
                </div>
                <div class=\"field inline\">
                    <div class=\"ui toggle checkbox\">
                        <input type=\"checkbox\" name=\"initpdfmodels\" id=\"initpdfmodels\"/>
                        <label for=\"initpdfmodels\" title=\"";
        // line 59
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("Reset all PDF models to their default values"), "html", null, true);
        yield "\">
                            ";
        // line 60
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("Reinitialize PDF models"), "html", null, true);
        yield "
                            <i class=\"circular inverted primary small icon info tooltip\" title=\"";
        // line 61
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("Reset all PDF models to their default values"), "html", null, true);
        yield "\" aria-hidden=\"true\"></i>
                            <span class=\"exemple\">";
        // line 62
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("(all existing values will be removed)"), "html", null, true);
        yield "</span>
                        </label>
                    </div>
                </div>
                <div class=\"field inline\">
                    <div class=\"ui toggle checkbox\">
                        <input type=\"checkbox\" name=\"emptylogins\" id=\"emptylogins\"/>
                        <label for=\"emptylogins\" title=\"";
        // line 69
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("Fill all empty login and passwords"), "html", null, true);
        yield "\">
                            ";
        // line 70
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("Generate empty logins and passwords"), "html", null, true);
        yield "
                            <i class=\"circular inverted primary small icon info tooltip\" title=\"";
        // line 71
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("Fill all empty login and passwords"), "html", null, true);
        yield "\" aria-hidden=\"true\"></i>
                        </label>
                    </div>
                </div>
            </div>
        </div>
        <div class=\"ui basic center aligned segment\">
            <button type=\"submit\" class=\"ui labeled icon primary button action\">
                <i class=\"database icon\" aria-hidden=\"true\"></i>
                ";
        // line 80
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("Go"), "html", null, true);
        yield "
            </button>
            ";
        // line 82
        yield from         $this->loadTemplate("components/forms/csrf.html.twig", "pages/admintools.html.twig", 82)->unwrap()->yield($context);
        // line 83
        yield "        </div>
    </form>
";
        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "pages/admintools.html.twig";
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
        return array (  171 => 83,  169 => 82,  164 => 80,  152 => 71,  148 => 70,  144 => 69,  134 => 62,  130 => 61,  126 => 60,  122 => 59,  112 => 52,  106 => 51,  102 => 50,  98 => 49,  88 => 42,  84 => 41,  80 => 40,  76 => 39,  66 => 32,  59 => 28,  51 => 24,  47 => 23,  36 => 21,);
    }

    public function getSourceContext()
    {
        return new Source("", "pages/admintools.html.twig", "/var/www/galette/templates/default/pages/admintools.html.twig");
    }
}
