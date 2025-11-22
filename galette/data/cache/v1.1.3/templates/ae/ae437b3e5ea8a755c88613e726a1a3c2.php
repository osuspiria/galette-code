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

/* elements/footer.html.twig */
class __TwigTemplate_07b1310c54921214dc88c74830a8c49c extends Template
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
        $context["new_release"] = $this->env->getFunction('callstatic')->getCallable()("\\Galette\\Core\\Galette", "getNewRelease");
        // line 22
        yield "    <footer class=\"page-footer";
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["login"] ?? null), "getCompactMenu", [], "method", false, false, false, 22)) {
            yield " extended\"";
        }
        yield "\">
        <div class=\"ui center aligned basic padded segment footer-wrapper\">
            <div class=\"row\">
                <div class=\"ui horizontal bulleted link list\">
                    <a href=\"https://galette.eu\" class=\"item\">
                        <i class=\"icon globe europe\" aria-hidden=\"true\"></i>
                        ";
        // line 28
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("Website"), "html", null, true);
        yield "
                    </a>
                    <a href=\"https://doc.galette.eu\" class=\"item\">
                        <i class=\"icon book\" aria-hidden=\"true\"></i>
                       ";
        // line 32
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("Documentation"), "html", null, true);
        yield "
                    </a>
                    <a href=\"https://framapiaf.org/@galette\" class=\"item\">
                        <i class=\"icon mastodon\" aria-hidden=\"true\"></i>
                        @galette
                    </a>
                </div>
            </div>
            <div class=\"row\">
                <div class=\"ui horizontal bulleted link list\">
                    <a id=\"copyright\" href=\"https://galette.eu/\" class=\"item";
        // line 42
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["new_release"] ?? null), "new", [], "any", false, false, false, 42)) {
            yield " tooltip\" data-title=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("A new Galette release is available."), "html", null, true);
            yield "\" data-content=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::replace($this->env->getFunction('_T')->getCallable()("You currently use Galette %1\$s, and %2\$s is available."), ["%1\$s" => Twig\Extension\CoreExtension::constant("GALETTE_DISPLAY_VERSION"), "%2\$s" => CoreExtension::getAttribute($this->env, $this->source, ($context["new_release"] ?? null), "version", [], "any", false, false, false, 42)]), "html", null, true);
            yield "\"";
        } else {
            yield "\"";
        }
        yield ">
";
        // line 43
        if (((CoreExtension::getAttribute($this->env, $this->source, ($context["new_release"] ?? null), "new", [], "any", false, false, false, 43) && CoreExtension::getAttribute($this->env, $this->source, ($context["login"] ?? null), "isLogged", [], "method", false, false, false, 43)) && (CoreExtension::getAttribute($this->env, $this->source, ($context["login"] ?? null), "isAdmin", [], "method", false, false, false, 43) || CoreExtension::getAttribute($this->env, $this->source, ($context["login"] ?? null), "isStaff", [], "method", false, false, false, 43)))) {
            // line 44
            yield "                        <div class=\"ui transition looping pulsating blue circular horizontal icon label\">
                            <i class=\"arrow alternate circle up icon\" aria-hidden=\"true\"></i>
                            <span class=\"visually-hidden\">";
            // line 46
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("A new Galette release is available."), "html", null, true);
            yield "</span>
                        </div>
";
        } else {
            // line 49
            yield "                        <i class=\"icon cookie bite\" aria-hidden=\"true\"></i>
";
        }
        // line 51
        yield "                        Galette ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::constant("GALETTE_DISPLAY_VERSION"), "html", null, true);
        yield "
                    </a>
";
        // line 53
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["login"] ?? null), "isLogged", [], "method", false, false, false, 53) && (CoreExtension::getAttribute($this->env, $this->source, ($context["login"] ?? null), "isAdmin", [], "method", false, false, false, 53) || CoreExtension::getAttribute($this->env, $this->source, ($context["login"] ?? null), "isStaff", [], "method", false, false, false, 53)))) {
            // line 54
            yield "                    <a id=\"sysinfos\" href=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("sysinfos"), "html", null, true);
            yield "\" class=\"item\">
                        <i class=\"icon cogs\" aria-hidden=\"true\"></i>
                        ";
            // line 56
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("System information"), "html", null, true);
            yield "
                    </a>
";
        }
        // line 59
        yield "                </div>
";
        // line 60
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["login"] ?? null), "isLogged", [], "method", false, false, false, 60) && (($context["cur_route"] ?? null) == "dashboard"))) {
            // line 61
            yield "                                <!--
                    Emojis used by Galette's core and its official plugins on the dashboard
                    are licensed under CC-BY 4.0 <https://creativecommons.org/licenses/by/4.0/>
                    by Twemoji <https://twemoji.twitter.com/>
                -->
";
        }
        // line 68
        yield "            </div>
";
        // line 70
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["preferences"] ?? null), "pref_footer", [], "any", false, false, false, 70) != "")) {
            // line 71
            yield "            <div class=\"row\">
                <div class=\"ui padded grid\">
                    <div class=\"ui sixteen wide column\">
                        ";
            // line 74
            yield CoreExtension::getAttribute($this->env, $this->source, ($context["preferences"] ?? null), "pref_footer", [], "any", false, false, false, 74);
            yield "
                    </div>
                </div>
            </div>
";
        }
        // line 79
        yield "        </div>
    </footer>
";
        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "elements/footer.html.twig";
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
        return array (  151 => 79,  143 => 74,  138 => 71,  136 => 70,  133 => 68,  125 => 61,  123 => 60,  120 => 59,  114 => 56,  108 => 54,  106 => 53,  100 => 51,  96 => 49,  90 => 46,  86 => 44,  84 => 43,  72 => 42,  59 => 32,  52 => 28,  40 => 22,  38 => 21,);
    }

    public function getSourceContext()
    {
        return new Source("", "elements/footer.html.twig", "/var/www/galette/templates/default/elements/footer.html.twig");
    }
}
