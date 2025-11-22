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

/* elements/display_socials.html.twig */
class __TwigTemplate_dff4a44c53507ae5b1e09dfa33144a93 extends Template
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
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), ($context["socials"] ?? null)) > 0)) {
            // line 22
            yield "<div class=\"ui basic fitted segment\">
    <div class=\"ui styled fluid accordion row\">
        <div class=\"active title\">
            <i class=\"jsonly displaynone icon dropdown\" aria-hidden=\"true\"></i>
            ";
            // line 26
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("Social networks"), "html", null, true);
            yield "
        </div>
        <div class=\"active content field\">
            <table class=\"ui very basic striped collapsing stackable padded table\">
    ";
            // line 30
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["socials"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["social"]) {
                // line 31
                yield "            <tr>
                <th>";
                // line 32
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["social"], "getSystemType", [CoreExtension::getAttribute($this->env, $this->source, $context["social"], "type", [], "any", false, false, false, 32)], "method", false, false, false, 32), "html", null, true);
                yield "</th>
                <td>";
                // line 33
                yield CoreExtension::getAttribute($this->env, $this->source, $context["social"], "displayUrl", [], "method", false, false, false, 33);
                yield "</td>
            </tr>
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['social'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 36
            yield "        </table>
        </div>
    </div>
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
        return "elements/display_socials.html.twig";
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
        return array (  73 => 36,  64 => 33,  60 => 32,  57 => 31,  53 => 30,  46 => 26,  40 => 22,  38 => 21,);
    }

    public function getSourceContext()
    {
        return new Source("", "elements/display_socials.html.twig", "/var/www/galette/templates/default/elements/display_socials.html.twig");
    }
}
