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

/* modals/replacements_legend.html.twig */
class __TwigTemplate_d7d90fb1d82a8988257046efc454d9e6 extends Template
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
        yield "<div id=\"legende";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["cur_ref"] ?? null), "html", null, true);
        yield "\" class=\"texts_legend ui large modal\" title=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("Existing variables"), "html", null, true);
        yield "\">
    <div class=\"header\">";
        // line 22
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("Existing variables"), "html", null, true);
        yield "</div>
    <div class=\"scrolling content\">
        <table class=\"ui very basic table\">
    ";
        // line 25
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["legends"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["legend"]) {
            // line 26
            yield "        <tr>
            <th colspan=\"4\">
                ";
            // line 28
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["legend"], "title", [], "any", false, false, false, 28), "html", null, true);
            yield "
            </th>
        </tr>
        ";
            // line 31
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["legend"], "patterns", [], "any", false, false, false, 31));
            $context['loop'] = [
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            ];
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["_key"] => $context["pattern"]) {
                // line 32
                yield "            ";
                if (((CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index0", [], "any", false, false, false, 32) % 2) == 0)) {
                    // line 33
                    yield "                <tr>
            ";
                }
                // line 35
                yield "            <th><tt>";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::trim(CoreExtension::getAttribute($this->env, $this->source, $context["pattern"], "pattern", [], "any", false, false, false, 35), "/"), "html", null, true);
                yield "</tt></th>
            <td class=\"back\">
                ";
                // line 37
                if (CoreExtension::getAttribute($this->env, $this->source, $context["pattern"], "title", [], "any", true, true, false, 37)) {
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["pattern"], "title", [], "any", false, false, false, 37), "html", null, true);
                }
                // line 38
                yield "            </td>
            ";
                // line 39
                if (((CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index0", [], "any", false, false, false, 39) % 2) != 0)) {
                    // line 40
                    yield "                </tr>
            ";
                }
                // line 42
                yield "        ";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['pattern'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 43
            yield "    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['legend'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 44
        yield "        </table>
    </div>
    <div class=\"actions\"><div class=\"ui labeled icon deny button\"><i class=\"times icon\" aria-hidden=\"true\"></i> ";
        // line 46
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("Close"), "html", null, true);
        yield "</div></div>
</div>
<script type=\"text/javascript\">

    var _addLegendButton = function(selector) {
        \$(selector).append('<i class=\"btnlegend circular inverted primary link icon info tooltip\" aria-hidden=\"true\"></i> <span class=\"ui special popup\">";
        // line 51
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("Show existing variables"), "js"), "html", null, true);
        yield "</span>');
    };

    var _handleLegend = function(selector) {
        if (typeof selector == 'undefined') {
            selector = '";
        // line 56
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["cur_ref"] ?? null), "html", null, true);
        yield "';
        }
        \$('#legende' + selector).modal().modal('hide');

        \$('.btnlegend').unbind('click').click(function(){
            \$('#legende' + selector).modal('show');
            return false;
        });
    };
</script>
";
        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "modals/replacements_legend.html.twig";
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
        return array (  148 => 56,  140 => 51,  132 => 46,  128 => 44,  122 => 43,  108 => 42,  104 => 40,  102 => 39,  99 => 38,  95 => 37,  89 => 35,  85 => 33,  82 => 32,  65 => 31,  59 => 28,  55 => 26,  51 => 25,  45 => 22,  38 => 21,);
    }

    public function getSourceContext()
    {
        return new Source("", "modals/replacements_legend.html.twig", "/var/www/galette/templates/default/modals/replacements_legend.html.twig");
    }
}
