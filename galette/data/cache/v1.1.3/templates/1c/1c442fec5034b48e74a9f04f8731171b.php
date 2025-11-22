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

/* pages/documents_list.html.twig */
class __TwigTemplate_a4350407979d1f4a61d3da5907e3f896 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'infoline' => [$this, 'block_infoline'],
            'infoline_actions' => [$this, 'block_infoline_actions'],
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
        $context["form"] = ["order" => ["name" => "documentsList"]];
        // line 21
        $this->parent = $this->loadTemplate("elements/list.html.twig", "pages/documents_list.html.twig", 21);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 29
    public function block_infoline($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 30
        yield "    ";
        $context["infoline"] = ["label" => Twig\Extension\CoreExtension::replace($this->env->getFunction('_Tn')->getCallable()("%count document", "%count documents",         // line 31
($context["nb"] ?? null)), ["%count" => ($context["nb"] ?? null)])];
        // line 33
        yield "    ";
        yield from $this->yieldParentBlock("infoline", $context, $blocks);
        yield "
";
        return; yield '';
    }

    // line 36
    public function block_infoline_actions($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 37
        yield "    ";
        if (( !($context["is_public"] ?? null) && (CoreExtension::getAttribute($this->env, $this->source, ($context["login"] ?? null), "isAdmin", [], "method", false, false, false, 37) || CoreExtension::getAttribute($this->env, $this->source, ($context["login"] ?? null), "isStaff", [], "method", false, false, false, 37)))) {
            // line 38
            yield "        <a
            class=\"ui tiny labeled icon button\"
            href=\"";
            // line 40
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("addDocument"), "html", null, true);
            yield "\"
        >
            <i class=\"ui user check green icon\" aria-hidden=\"true\"></i>
            ";
            // line 43
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("Add a document"), "html", null, true);
            yield "
        </a>
    ";
        }
        return; yield '';
    }

    // line 48
    public function block_header($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 49
        yield "    ";
        $context["columns"] = [["label" => "#"], ["label" => $this->env->getFunction('_T')->getCallable()("Filename")], ["label" => $this->env->getFunction('_T')->getCallable()("Type")], ["label" => $this->env->getFunction('_T')->getCallable()("Visibility")], ["label" => $this->env->getFunction('_T')->getCallable()("Creation date")]];
        // line 56
        yield "
    ";
        // line 57
        yield from $this->yieldParentBlock("header", $context, $blocks);
        yield "
";
        return; yield '';
    }

    // line 60
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 61
        yield "    ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["documents"] ?? null));
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
        foreach ($context['_seq'] as $context["_key"] => $context["document"]) {
            // line 62
            yield "        <tr class=\"\" id=\"row_";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["document"], "id", [], "any", false, false, false, 62), "html", null, true);
            yield "\">
            <td data-scope=\"id\" class=\"collapsing\">
                ";
            // line 64
            if (CoreExtension::getAttribute($this->env, $this->source, ($context["preferences"] ?? null), "pref_show_id", [], "any", false, false, false, 64)) {
                // line 65
                yield "                    ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["document"], "id", [], "any", false, false, false, 65), "html", null, true);
                yield "
                ";
            } else {
                // line 67
                yield "                    ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 67), "html", null, true);
                yield "
                ";
            }
            // line 69
            yield "            </td>
            <td data-col-label=\"";
            // line 70
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("Filename"), "html", null, true);
            yield "\">
                <a href=\"";
            // line 71
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("getDocumentFile", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["document"], "getID", [], "method", false, false, false, 71)]), "html", null, true);
            yield "\">
                    ";
            // line 72
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["document"], "getDocumentFilename", [], "method", false, false, false, 72), "html", null, true);
            yield "
                </a>
            </td>
            <td data-col-label=\"";
            // line 75
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("Type"), "html", null, true);
            yield "\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["document"], "getType", [], "method", false, false, false, 75), "html", null, true);
            yield "</td>
            <td data-col-label=\"";
            // line 76
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("Visibility"), "html", null, true);
            yield "\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["document"], "getPermissionName", [], "method", false, false, false, 76), "html", null, true);
            yield "</td>
            <td data-col-label=\"";
            // line 77
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("Creation date"), "html", null, true);
            yield "\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["document"], "getCreationDate", [], "method", false, false, false, 77), "html", null, true);
            yield "</td>
            ";
            // line 78
            if ((($context["mode"] ?? null) != "ajax")) {
                // line 79
                yield "                <td class=\"actions_row center\">
                    ";
                // line 80
                if ((CoreExtension::getAttribute($this->env, $this->source, ($context["login"] ?? null), "isAdmin", [], "method", false, false, false, 80) || CoreExtension::getAttribute($this->env, $this->source, ($context["login"] ?? null), "isStaff", [], "method", false, false, false, 80))) {
                    // line 81
                    yield "                        <a
                                href=\"";
                    // line 82
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("editDocument", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["document"], "getID", [], "method", false, false, false, 82)]), "html", null, true);
                    yield "\"
                                class=\"action\"
                        >
                            <i class=\"ui edit icon tooltip\" aria-hidden=\"true\"></i>
                            <span class=\"ui special popup\">";
                    // line 86
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("Edit document"), "html", null, true);
                    yield "</span>
                        </a>
                        <a
                                href=\"";
                    // line 89
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("removeDocument", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["document"], "getID", [], "method", false, false, false, 89)]), "html", null, true);
                    yield "\"
                                class=\"delete\"
                        >
                            <i class=\"ui trash red icon tooltip\" aria-hidden=\"true\"></i>
                            <span class=\"ui special popup\">";
                    // line 93
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("Delete document"), "html", null, true);
                    yield "</span>
                        </a>
                    ";
                }
                // line 96
                yield "                </td>
            ";
            }
            // line 98
            yield "        </tr>
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
            // line 100
            yield "        <tr><td colspan=\"";
            if ((CoreExtension::getAttribute($this->env, $this->source, ($context["login"] ?? null), "isAdmin", [], "method", false, false, false, 100) || CoreExtension::getAttribute($this->env, $this->source, ($context["login"] ?? null), "isStaff", [], "method", false, false, false, 100))) {
                yield "6";
            } else {
                yield "5";
            }
            yield "\" class=\"emptylist\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("No document"), "html", null, true);
            yield "</td></tr>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['document'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "pages/documents_list.html.twig";
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
        return array (  244 => 100,  230 => 98,  226 => 96,  220 => 93,  213 => 89,  207 => 86,  200 => 82,  197 => 81,  195 => 80,  192 => 79,  190 => 78,  184 => 77,  178 => 76,  172 => 75,  166 => 72,  162 => 71,  158 => 70,  155 => 69,  149 => 67,  143 => 65,  141 => 64,  135 => 62,  116 => 61,  112 => 60,  105 => 57,  102 => 56,  99 => 49,  95 => 48,  86 => 43,  80 => 40,  76 => 38,  73 => 37,  69 => 36,  61 => 33,  59 => 31,  57 => 30,  53 => 29,  48 => 21,  46 => 23,  39 => 21,);
    }

    public function getSourceContext()
    {
        return new Source("", "pages/documents_list.html.twig", "/var/www/galette/templates/default/pages/documents_list.html.twig");
    }
}
