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

/* modals/confirm_removal.html.twig */
class __TwigTemplate_563dbf48dc9b7439722beb73bc87eb15 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'content' => [$this, 'block_content'],
            'javascripts' => [$this, 'block_javascripts'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 21
        return $this->loadTemplate((((($context["mode"] ?? null) == "ajax")) ? ("ajax.html.twig") : ("page.html.twig")), "modals/confirm_removal.html.twig", 21);
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        yield from $this->getParent($context)->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 23
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 24
        yield "    <div id=\"confirm_removal\"";
        if ((($context["mode"] ?? null) == "ajax")) {
            yield " class=\"center\"";
        } else {
            yield " title=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["page_title"] ?? null), "html", null, true);
            yield "\"";
        }
        yield ">
    ";
        // line 25
        if ((($context["mode"] ?? null) == "ajax")) {
            yield "<div class=\"header\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["page_title"] ?? null), "html", null, true);
            yield "</div>";
        }
        // line 26
        yield "    <form action=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["form_url"] ?? null), "html", null, true);
        yield "\" method=\"post\" class=\"ui form\">
    ";
        // line 27
        if ((($context["mode"] ?? null) != "ajax")) {
            // line 28
            yield "        <div class=\"ui segment\">
            <div class=\"content\">
    ";
        }
        // line 31
        yield "    ";
        if (array_key_exists("with_cascade", $context)) {
            // line 32
            yield "                <div class=\"field\">
                    <div class=\"ui toggle checkbox\">
                        <input type=\"checkbox\" name=\"cascade\" id=\"cascade\" value=\"true\" title=\"";
            // line 34
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("Delete all associated data"), "html", null, true);
            yield "\"/>
                        <label for=\"cascade\">";
            // line 35
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("Cascade delete"), "html", null, true);
            yield "</label>
                    </div>
                </div>
    ";
        }
        // line 39
        yield "    ";
        if ((($context["mode"] ?? null) != "ajax")) {
            // line 40
            yield "        ";
            if (array_key_exists("message", $context)) {
                // line 41
                yield "                <div class=\"ui warning message\">
        ";
            }
            // line 43
            yield "    ";
        }
        // line 44
        yield "    ";
        if (array_key_exists("message", $context)) {
            // line 45
            yield "                    <p>";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["message"] ?? null), "html", null, true);
            yield "</p>
    ";
        }
        // line 47
        yield "    ";
        if ((($context["mode"] ?? null) != "ajax")) {
            // line 48
            yield "        ";
            if (array_key_exists("message", $context)) {
                // line 49
                yield "                </div>
        ";
            }
            // line 51
            yield "                <div class=\"ui red message\">
    ";
        }
        // line 53
        yield "                    <p>";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("Are you sure you want to proceed?"), "html", null, true);
        yield "<br/>";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("This can't be undone."), "html", null, true);
        yield "</p>
    ";
        // line 54
        if ((($context["mode"] ?? null) != "ajax")) {
            // line 55
            yield "                </div>
            </div>
        </div>
    ";
        }
        // line 59
        yield "    ";
        if ((($context["mode"] ?? null) != "ajax")) {
            // line 60
            yield "        <div class=\"ui basic center aligned segment\">
                <input type=\"submit\" id=\"delete\" value=\"";
            // line 61
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("Remove"), "html", null, true);
            yield "\" class=\"ui primary button action\"/>
                <a href=\"";
            // line 62
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["cancel_uri"] ?? null), "html", null, true);
            yield "\" class=\"ui button\" id=\"btncancel\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("Cancel"), "html", null, true);
            yield "</a>
    ";
        }
        // line 64
        yield "            <input type=\"hidden\" name=\"confirm\" value=\"1\"/>
    ";
        // line 65
        if ((($context["mode"] ?? null) == "ajax")) {
            // line 66
            yield "                <input type=\"hidden\" name=\"ajax\" value=\"true\"/>
    ";
        }
        // line 68
        yield "            ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["data"] ?? null));
        foreach ($context['_seq'] as $context["key"] => $context["value"]) {
            // line 69
            yield "                ";
            if (is_iterable($context["value"])) {
                // line 70
                yield "                    ";
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable($context["value"]);
                foreach ($context['_seq'] as $context["_key"] => $context["val"]) {
                    // line 71
                    yield "                <input type=\"hidden\" name=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["key"], "html", null, true);
                    yield "[]\" value=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["val"], "html", null, true);
                    yield "\"/>
                    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['val'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 73
                yield "                ";
            } else {
                // line 74
                yield "                <input type=\"hidden\" name=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["key"], "html", null, true);
                yield "\" value=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["value"], "html", null, true);
                yield "\"/>
                ";
            }
            // line 76
            yield "            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['value'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 77
        yield "            ";
        yield from         $this->loadTemplate("components/forms/csrf.html.twig", "modals/confirm_removal.html.twig", 77)->unwrap()->yield($context);
        // line 78
        yield "    ";
        if ((($context["mode"] ?? null) != "ajax")) {
            // line 79
            yield "        </div>
    ";
        }
        // line 81
        yield "    </form>
    </div>
";
        return; yield '';
    }

    // line 85
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "modals/confirm_removal.html.twig";
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
        return array (  233 => 85,  226 => 81,  222 => 79,  219 => 78,  216 => 77,  210 => 76,  202 => 74,  199 => 73,  188 => 71,  183 => 70,  180 => 69,  175 => 68,  171 => 66,  169 => 65,  166 => 64,  159 => 62,  155 => 61,  152 => 60,  149 => 59,  143 => 55,  141 => 54,  134 => 53,  130 => 51,  126 => 49,  123 => 48,  120 => 47,  114 => 45,  111 => 44,  108 => 43,  104 => 41,  101 => 40,  98 => 39,  91 => 35,  87 => 34,  83 => 32,  80 => 31,  75 => 28,  73 => 27,  68 => 26,  62 => 25,  51 => 24,  47 => 23,  37 => 21,);
    }

    public function getSourceContext()
    {
        return new Source("", "modals/confirm_removal.html.twig", "/var/www/galette/templates/default/modals/confirm_removal.html.twig");
    }
}
