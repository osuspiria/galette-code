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

/* elements/mailing_recipients.html.twig */
class __TwigTemplate_f69b7ac4016896d0d1a0c7e5c729af2b extends Template
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
        yield "    ";
        $context["count"] = Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, ($context["mailing"] ?? null), "recipients", [], "any", false, false, false, 21));
        // line 22
        yield "    ";
        $context["count_unreachables"] = Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, ($context["mailing"] ?? null), "unreachables", [], "any", false, false, false, 22));
        // line 23
        yield "    ";
        if ((($context["count"] ?? null) > 0)) {
            // line 24
            yield "        ";
            if ((CoreExtension::getAttribute($this->env, $this->source, ($context["mailing"] ?? null), "current_step", [], "any", false, false, false, 24) == Twig\Extension\CoreExtension::constant("Galette\\Core\\Mailing::STEP_SENT"))) {
                // line 25
                yield "                <p>";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::replace($this->env->getFunction('_T')->getCallable()("Your message has been sent to <strong>%s members</strong>"), ["%s" => ($context["count"] ?? null)]), "html", null, true);
                yield "</p>
        ";
            } else {
                // line 27
                yield "                <p id=\"recipients_count\">";
                yield Twig\Extension\CoreExtension::replace($this->env->getFunction('_T')->getCallable()("You are about to send an e-mail to <strong>%s members</strong>"), ["%s" => ($context["count"] ?? null)]);
                yield "</p>
        ";
            }
            // line 29
            yield "    ";
        } else {
            // line 30
            yield "        ";
            if ((($context["count_unreachables"] ?? null) > 0)) {
                // line 31
                yield "                <p id=\"recipients_count\"><em>";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("None of the selected members has an email address."), "html", null, true);
                yield "</em></p>
         ";
            } else {
                // line 33
                yield "                <p id=\"recipients_count\"><em>";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("No member selected (yet)."), "html", null, true);
                yield "</em></p>
         ";
            }
            // line 35
            yield "    ";
        }
        // line 36
        yield "    ";
        if ((($context["count_unreachables"] ?? null) > 0)) {
            // line 37
            yield "                <div id=\"unreachables_count\" class=\"ui message\">
                    <div class=\"header\">
                        ";
            // line 39
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["count_unreachables"] ?? null), "html", null, true);
            yield " ";
            if ((($context["count_unreachables"] ?? null) != 1)) {
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("unreachable members:"), "html", null, true);
            } else {
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("unreachable member:"), "html", null, true);
            }
            // line 40
            yield "                    </div>
                    <p>";
            // line 41
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("Some members you have selected have no e-mail address. However, you can generate envelope labels to contact them by snail mail."), "html", null, true);
            yield "</p>
                    <a class=\"ui basic labeled icon button\" href=\"";
            // line 42
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("pdf-members-labels"), "html", null, true);
            yield "?from=mailing\"><i class=\"th icon\" aria-hidden=\"true\"></i> ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("Generate labels"), "html", null, true);
            yield "</a>
                </div>
    ";
        }
        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "elements/mailing_recipients.html.twig";
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
        return array (  105 => 42,  101 => 41,  98 => 40,  90 => 39,  86 => 37,  83 => 36,  80 => 35,  74 => 33,  68 => 31,  65 => 30,  62 => 29,  56 => 27,  50 => 25,  47 => 24,  44 => 23,  41 => 22,  38 => 21,);
    }

    public function getSourceContext()
    {
        return new Source("", "elements/mailing_recipients.html.twig", "/var/www/galette/templates/default/elements/mailing_recipients.html.twig");
    }
}
