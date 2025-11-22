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

/* pages/documents_public_list.html.twig */
class __TwigTemplate_915e03860bd29be9d756bf255bc66885 extends Template
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
        $macros["_self"] = $this->macros["_self"] = $this;
    }

    protected function doGetParent(array $context)
    {
        // line 22
        return $this->loadTemplate(((($context["is_public"] ?? null)) ? ("public_page.html.twig") : ("page.html.twig")), "pages/documents_public_list.html.twig", 22);
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 21
        $context["is_public"] =  !CoreExtension::getAttribute($this->env, $this->source, ($context["login"] ?? null), "isLogged", [], "method", false, false, false, 21);
        // line 22
        yield from $this->getParent($context)->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 28
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 29
        yield "    ";
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), ($context["typed_documents"] ?? null)) == 0)) {
            // line 30
            yield "        <div class=\"ui small message\">
            <div class=\"content\">
                <em>";
            // line 32
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("No document"), "html", null, true);
            yield "</em>
            </div>
        </div>
    ";
        } else {
            // line 36
            yield "        <div class=\"ui stackable grid\">
            <div class=\"four wide column\">
                <div class=\"ui vertical inverted pointing fluid menu tabbed\">
        ";
            // line 39
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["typed_documents"] ?? null));
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
            foreach ($context['_seq'] as $context["type"] => $context["documents"]) {
                // line 40
                yield "                    <a class=\"";
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 40) == 1)) {
                    yield "active ";
                }
                yield "item\" data-tab=\"";
                yield CoreExtension::callMacro($macros["_self"], "macro_getSlug", [$context["type"]], 40, $context, $this->getSourceContext());
                yield "\">
                        ";
                // line 41
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()($context["type"]), "html", null, true);
                yield "
                        <p class=\"ui small disabled text\">(";
                // line 42
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::replace($this->env->getFunction('_Tn')->getCallable()("%count document", "%count documents", Twig\Extension\CoreExtension::length($this->env->getCharset(), $context["documents"])), ["%count" => Twig\Extension\CoreExtension::length($this->env->getCharset(), $context["documents"])]), "html", null, true);
                yield ")</p>
                    </a>
        ";
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
            unset($context['_seq'], $context['_iterated'], $context['type'], $context['documents'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 45
            yield "                </div>
            </div>
            <div class=\"twelve wide column\">
        ";
            // line 48
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["typed_documents"] ?? null));
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
            foreach ($context['_seq'] as $context["type"] => $context["documents"]) {
                // line 49
                yield "                <div class=\"ui tab";
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 49) == 1)) {
                    yield " active";
                }
                yield "\" data-tab=\"";
                yield CoreExtension::callMacro($macros["_self"], "macro_getSlug", [$context["type"]], 49, $context, $this->getSourceContext());
                yield "\">
                    <div class=\"ui segment\">
                        <div class=\"ui divided relaxed list\">
            ";
                // line 52
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable($context["documents"]);
                foreach ($context['_seq'] as $context["_key"] => $context["document"]) {
                    // line 53
                    yield "                            <div class=\"item\">
                                <div class=\"ui tiny image\">
                                    <i class=\"large file middle aligned icon\"></i>
                                </div>
                                <div class=\"content\">
                                    <a class=\"ui small header\" href=\"";
                    // line 58
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("getDocumentFile", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["document"], "getID", [], "method", false, false, false, 58)]), "html", null, true);
                    yield "\">
                                        ";
                    // line 59
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["document"], "getDocumentFilename", [], "method", false, false, false, 59), "html", null, true);
                    yield "
                                    </a>
                                    <div class=\"description\">
                                        ";
                    // line 62
                    if (CoreExtension::getAttribute($this->env, $this->source, $context["document"], "getComment", [], "any", false, false, false, 62)) {
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["document"], "getComment", [], "method", false, false, false, 62);
                    }
                    // line 63
                    yield "                                    </div>
                                    <div class=\"extra\">
                                        <div class=\"ui right floated meta\">
                                            <span class=\"date ui small text\">
                                                <i class=\"clock outline icon\"></i>
                                                ";
                    // line 68
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["document"], "getCreationDate", [], "method", false, false, false, 68), "html", null, true);
                    yield "
                                            </span>
                                            <div class=\"ui label\">";
                    // line 70
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["document"], "getPermissionName", [], "method", false, false, false, 70), "html", null, true);
                    yield "</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['document'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 76
                yield "                        </div>
                    </div>
                </div>
        ";
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
            unset($context['_seq'], $context['_iterated'], $context['type'], $context['documents'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 80
            yield "            </div>
        </div>
    ";
        }
        return; yield '';
    }

    // line 24
    public function macro_getSlug($__value__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "value" => $__value__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        return ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            // line 25
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extra\String\StringExtension']->createSlug(Twig\Extension\CoreExtension::spaceless(Twig\Extension\CoreExtension::lower($this->env->getCharset(), ($context["value"] ?? null)))), "html_attr");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "pages/documents_public_list.html.twig";
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
        return array (  239 => 25,  227 => 24,  219 => 80,  202 => 76,  190 => 70,  185 => 68,  178 => 63,  174 => 62,  168 => 59,  164 => 58,  157 => 53,  153 => 52,  142 => 49,  125 => 48,  120 => 45,  103 => 42,  99 => 41,  90 => 40,  73 => 39,  68 => 36,  61 => 32,  57 => 30,  54 => 29,  50 => 28,  46 => 22,  44 => 21,  37 => 22,);
    }

    public function getSourceContext()
    {
        return new Source("", "pages/documents_public_list.html.twig", "/var/www/galette/templates/default/pages/documents_public_list.html.twig");
    }
}
