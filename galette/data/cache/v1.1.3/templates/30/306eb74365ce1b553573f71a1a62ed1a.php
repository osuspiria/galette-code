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

/* @PluginGaletteObjectslend/list_lent_object.html.twig */
class __TwigTemplate_7b33f3e937555383fd0d9020a0e8b9c7 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'infoline' => [$this, 'block_infoline'],
            'header' => [$this, 'block_header'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 21
        return "elements/list.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 23
        $context["nb"] = Twig\Extension\CoreExtension::length($this->env->getCharset(), ($context["rents"] ?? null));
        // line 24
        $context["no_action"] = true;
        // line 25
        $context["is_paginated"] = false;
        // line 21
        $this->parent = $this->loadTemplate("elements/list.html.twig", "@PluginGaletteObjectslend/list_lent_object.html.twig", 21);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 27
    public function block_infoline($context, array $blocks = [])
    {
        $macros = $this->macros;
        return; yield '';
    }

    // line 30
    public function block_header($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 31
        yield "    ";
        $context["columns"] = [["label" => $this->env->getFunction('_T')->getCallable()("Id", "objectslend")], ["label" => $this->env->getFunction('_T')->getCallable()("Status", "objectslend")], ["label" => $this->env->getFunction('_T')->getCallable()("Begin date", "objectslend")], ["label" => $this->env->getFunction('_T')->getCallable()("End date", "objectslend")], ["label" => $this->env->getFunction('_T')->getCallable()("Return", "objectslend")], ["label" => $this->env->getFunction('_T')->getCallable()("Name", "objectslend")], ["label" => $this->env->getFunction('_T')->getCallable()("Comments", "objectslend")]];
        // line 40
        yield "
    ";
        // line 41
        yield from $this->yieldParentBlock("header", $context, $blocks);
        yield "
";
        return; yield '';
    }

    // line 44
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 45
        yield "    ";
        $context["dformat"] = $this->env->getFunction('_T')->getCallable()("Y-m-d");
        // line 46
        yield "    ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["rents"] ?? null));
        $context['_iterated'] = false;
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
        foreach ($context['_seq'] as $context["_key"] => $context["rent"]) {
            // line 47
            yield "        <tr class=\"";
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 47) % 2 != 0)) {
                yield "even";
            } else {
                yield "odd";
            }
            yield "\">
            <td>";
            // line 48
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["rent"], "rent_id", [], "any", false, false, false, 48), "html", null, true);
            yield "</td>
            <td>";
            // line 49
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["rent"], "status_text", [], "any", false, false, false, 49), "html", null, true);
            if (CoreExtension::getAttribute($this->env, $this->source, $context["rent"], "in_stock", [], "any", false, false, false, 49)) {
                yield " (";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("In stock", "objectslend"), "html", null, true);
                yield ")";
            }
            yield "</td>
            <td>";
            // line 50
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["rent"], "date_begin", [], "any", false, false, false, 50), "html", null, true);
            yield "</td>
            <td>";
            // line 51
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["rent"], "date_forecast", [], "any", false, false, false, 51), "html", null, true);
            yield "</td>
            <td>";
            // line 52
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["rent"], "date_end", [], "any", false, false, false, 52), "html", null, true);
            yield "</td>
            <td>
                ";
            // line 54
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["rent"], "nom_adh", [], "any", false, false, false, 54), "html", null, true);
            yield " ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["rent"], "prenom_adh", [], "any", false, false, false, 54), "html", null, true);
            yield "
            </td>
            <td>";
            // line 56
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["rent"], "comments", [], "any", false, false, false, 56), "html", null, true);
            yield "</td>
        </tr>
    ";
            $context['_iterated'] = true;
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        if (!$context['_iterated']) {
            // line 59
            yield "        <tr>
            <td colspan=\"7\" class=\"center\">";
            // line 60
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("No lend found", "objectslend"), "html", null, true);
            yield "</td>
        </tr>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['rent'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@PluginGaletteObjectslend/list_lent_object.html.twig";
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
        return array (  167 => 60,  164 => 59,  148 => 56,  141 => 54,  136 => 52,  132 => 51,  128 => 50,  119 => 49,  115 => 48,  106 => 47,  87 => 46,  84 => 45,  80 => 44,  73 => 41,  70 => 40,  67 => 31,  63 => 30,  56 => 27,  51 => 21,  49 => 25,  47 => 24,  45 => 23,  38 => 21,);
    }

    public function getSourceContext()
    {
        return new Source("", "@PluginGaletteObjectslend/list_lent_object.html.twig", "/var/www/galette/plugins/plugin-objectslend/templates/default/list_lent_object.html.twig");
    }
}
