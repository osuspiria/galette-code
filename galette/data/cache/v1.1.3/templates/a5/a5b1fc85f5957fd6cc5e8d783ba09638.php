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

/* modals/mass_change_members.html.twig */
class __TwigTemplate_7427622f0523947b0967c513b72a639b extends Template
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
        return $this->loadTemplate((((($context["mode"] ?? null) == "ajax")) ? ("ajax.html.twig") : ("page.html.twig")), "modals/mass_change_members.html.twig", 21);
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
        yield "    <div id=\"mass_change\"";
        if ((($context["mode"] ?? null) != "ajax")) {
            yield " class=\"center\"";
        } else {
            yield " class=\"ui modal\"";
        }
        yield ">
    ";
        // line 25
        if ((($context["mode"] ?? null) == "ajax")) {
            // line 26
            yield "        <div class=\"header\">
    ";
        } else {
            // line 28
            yield "        <h2>
    ";
        }
        // line 30
        yield "            ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["page_title"] ?? null), "html", null, true);
        yield "
    ";
        // line 31
        if ((($context["mode"] ?? null) != "ajax")) {
            // line 32
            yield "        </h2>
    ";
        } else {
            // line 34
            yield "        </div>
        <div class=\"content scrolling\">
    ";
        }
        // line 37
        yield "            <form action=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["form_url"] ?? null), "html", null, true);
        yield "\" method=\"post\" class=\"ui form\">
            ";
        // line 38
        if ( !array_key_exists("changes", $context)) {
            // line 39
            yield "                <p>";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("Only checked fields will be updated."), "html", null, true);
            yield "</p>
                ";
            // line 41
            yield "                ";
            yield from             $this->loadTemplate("components/form.html.twig", "modals/mass_change_members.html.twig", 41)->unwrap()->yield(CoreExtension::merge($context, ["masschange" => true]));
            // line 42
            yield "                ";
            // line 43
            yield "                ";
            yield from             $this->loadTemplate("components/dynamic_fields.html.twig", "modals/mass_change_members.html.twig", 43)->unwrap()->yield(CoreExtension::merge($context, ["object" => ($context["member"] ?? null), "masschange" => true]));
            // line 44
            yield "            ";
        } else {
            // line 45
            yield "                <p>";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("You are about to proceed following changes for selected members:"), "html", null, true);
            yield "</p>
                <ul>
                ";
            // line 47
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["changes"] ?? null));
            foreach ($context['_seq'] as $context["field"] => $context["change"]) {
                // line 48
                yield "                    ";
                $context["display_value"] = CoreExtension::getAttribute($this->env, $this->source, $context["change"], "value", [], "any", false, false, false, 48);
                // line 49
                yield "                    ";
                if (($context["field"] == "id_statut")) {
                    // line 50
                    yield "                        ";
                    $context["display_value"] = (($__internal_compile_0 = ($context["statuts"] ?? null)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0[($context["display_value"] ?? null)] ?? null) : null);
                    // line 51
                    yield "                    ";
                }
                // line 52
                yield "                    ";
                if (($context["field"] == "titre_adh")) {
                    // line 53
                    yield "                        ";
                    $context["display_value"] = CoreExtension::getAttribute($this->env, $this->source, (($__internal_compile_1 = ($context["titles_list"] ?? null)) && is_array($__internal_compile_1) || $__internal_compile_1 instanceof ArrayAccess ? ($__internal_compile_1[($context["display_value"] ?? null)] ?? null) : null), "long", [], "any", false, false, false, 53);
                    // line 54
                    yield "                    ";
                }
                // line 55
                yield "                    ";
                if (($context["field"] == "sexe_adh")) {
                    // line 56
                    yield "                        ";
                    if ((($context["display_value"] ?? null) == Twig\Extension\CoreExtension::constant("Galette\\Entity\\Adherent::NC"))) {
                        // line 57
                        yield "                            ";
                        $context["display_value"] = $this->env->getFunction('_T')->getCallable()("Unspecified");
                        // line 58
                        yield "                        ";
                    }
                    // line 59
                    yield "                        ";
                    if ((($context["display_value"] ?? null) == Twig\Extension\CoreExtension::constant("Galette\\Entity\\Adherent::WOMAN"))) {
                        // line 60
                        yield "                            ";
                        $context["display_value"] = $this->env->getFunction('_T')->getCallable()("Woman");
                        // line 61
                        yield "                        ";
                    }
                    // line 62
                    yield "                        ";
                    if ((($context["display_value"] ?? null) == Twig\Extension\CoreExtension::constant("Galette\\Entity\\Adherent::MAN"))) {
                        // line 63
                        yield "                            ";
                        $context["display_value"] = $this->env->getFunction('_T')->getCallable()("Man");
                        // line 64
                        yield "                        ";
                    }
                    // line 65
                    yield "                    ";
                }
                // line 66
                yield "                    <li>
                        <input type=\"hidden\" name=\"";
                // line 67
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["field"], "html", null, true);
                yield "\" value=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["change"], "value", [], "any", false, false, false, 67), "html", null, true);
                yield "\"/>
                        ";
                // line 68
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["change"], "label", [], "any", false, false, false, 68), "html", null, true);
                yield " ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["display_value"] ?? null), "html", null, true);
                yield "
                    </li>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['field'], $context['change'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 71
            yield "                </ul>
            ";
        }
        // line 73
        yield "    ";
        if ((($context["mode"] ?? null) != "ajax")) {
            // line 74
            yield "                <div class=\"ui basic center aligned segment\">
    ";
        }
        // line 76
        yield "                    ";
        if ((($context["mode"] ?? null) != "ajax")) {
            // line 77
            yield "                        <input type=\"submit\" id=\"masschange\" class=\"ui button\" value=\"";
            if ( !array_key_exists("changes", $context)) {
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("Edit"), "html", null, true);
            } else {
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("OK"), "html", null, true);
            }
            yield "\"/>
                        <a href=\"";
            // line 78
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["cancel_uri"] ?? null), "html", null, true);
            yield "\" class=\"ui button\" id=\"btncancel\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("Cancel"), "html", null, true);
            yield "</a>
                    ";
        }
        // line 80
        yield "                    <input type=\"hidden\" name=\"confirm\" value=\"1\"/>
                    ";
        // line 81
        if ((($context["mode"] ?? null) == "ajax")) {
            yield "<input type=\"hidden\" name=\"ajax\" value=\"true\"/>";
        }
        // line 82
        yield "                    ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["data"] ?? null));
        foreach ($context['_seq'] as $context["key"] => $context["value"]) {
            // line 83
            yield "                        ";
            if (is_iterable($context["value"])) {
                // line 84
                yield "                            ";
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable($context["value"]);
                foreach ($context['_seq'] as $context["_key"] => $context["val"]) {
                    // line 85
                    yield "                        <input type=\"hidden\" name=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["key"], "html", null, true);
                    yield "[]\" value=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["val"], "html", null, true);
                    yield "\"/>
                            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['val'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 87
                yield "                        ";
            } else {
                // line 88
                yield "                        <input type=\"hidden\" name=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["key"], "html", null, true);
                yield "\" value=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["value"], "html", null, true);
                yield "\"/>
                        ";
            }
            // line 90
            yield "                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['value'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 91
        yield "                    ";
        yield from         $this->loadTemplate("components/forms/csrf.html.twig", "modals/mass_change_members.html.twig", 91)->unwrap()->yield($context);
        // line 92
        yield "    ";
        if ((($context["mode"] ?? null) != "ajax")) {
            // line 93
            yield "                </div>
    ";
        }
        // line 95
        yield "            </form>
    ";
        // line 96
        if ((($context["mode"] ?? null) == "ajax")) {
            // line 97
            yield "        </div>
    ";
        }
        // line 99
        yield "    </div>
";
        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "modals/mass_change_members.html.twig";
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
        return array (  289 => 99,  285 => 97,  283 => 96,  280 => 95,  276 => 93,  273 => 92,  270 => 91,  264 => 90,  256 => 88,  253 => 87,  242 => 85,  237 => 84,  234 => 83,  229 => 82,  225 => 81,  222 => 80,  215 => 78,  206 => 77,  203 => 76,  199 => 74,  196 => 73,  192 => 71,  181 => 68,  175 => 67,  172 => 66,  169 => 65,  166 => 64,  163 => 63,  160 => 62,  157 => 61,  154 => 60,  151 => 59,  148 => 58,  145 => 57,  142 => 56,  139 => 55,  136 => 54,  133 => 53,  130 => 52,  127 => 51,  124 => 50,  121 => 49,  118 => 48,  114 => 47,  108 => 45,  105 => 44,  102 => 43,  100 => 42,  97 => 41,  92 => 39,  90 => 38,  85 => 37,  80 => 34,  76 => 32,  74 => 31,  69 => 30,  65 => 28,  61 => 26,  59 => 25,  50 => 24,  46 => 23,  36 => 21,);
    }

    public function getSourceContext()
    {
        return new Source("", "modals/mass_change_members.html.twig", "/var/www/galette/templates/default/modals/mass_change_members.html.twig");
    }
}
