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

/* components/forms/input.html.twig */
class __TwigTemplate_0fed3320c4aa4b22c27b775c7d0991ce extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'component' => [$this, 'block_component'],
            'label' => [$this, 'block_label'],
            'element' => [$this, 'block_element'],
            'label_after' => [$this, 'block_label_after'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 21
        if ((array_key_exists("tip_html", $context) && (($context["tip_html"] ?? null) != ""))) {
            // line 22
            yield "    ";
            $context["tip"] = ($context["tip_html"] ?? null);
        }
        // line 24
        yield "
";
        // line 25
        yield from $this->unwrap()->yieldBlock('component', $context, $blocks);
        return; yield '';
    }

    public function block_component($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 26
        if ( !array_key_exists("notag", $context)) {
            // line 27
            yield "<div";
            if (array_key_exists("component_id", $context)) {
                yield " id=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["component_id"] ?? null), "html", null, true);
                yield "\"";
            }
            yield " class=\"";
            (((array_key_exists("component_class", $context) &&  !(null === ($context["component_class"] ?? null)))) ? (yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["component_class"] ?? null), "html", null, true)) : (yield "field"));
            if ((array_key_exists("required", $context) && (($context["required"] ?? null) == true))) {
                yield " required";
            }
            yield "\">
";
        }
        // line 29
        yield "    ";
        if ((array_key_exists("type", $context) && (($context["type"] ?? null) == "checkbox"))) {
            // line 30
            yield "        <div class=\"ui toggle";
            if ((array_key_exists("checked", $context) && (($context["checked"] ?? null) == true))) {
                yield " checked";
            }
            yield " right aligned checkbox\">
    ";
        } elseif (( !        // line 31
array_key_exists("nolabel", $context) || (($context["nolabel"] ?? null) != true))) {
            // line 32
            yield "    ";
            yield from $this->unwrap()->yieldBlock('label', $context, $blocks);
            // line 41
            yield "    ";
        }
        // line 42
        yield "    ";
        if ((array_key_exists("type", $context) && (($context["type"] ?? null) == "password"))) {
            // line 43
            yield "        <div class=\"ui input\">
    ";
        } elseif (((        // line 44
array_key_exists("tip", $context) && (($context["tip"] ?? null) != "")) && (array_key_exists("type", $context) && (($context["type"] ?? null) == "text")))) {
            // line 45
            yield "        <div class=\"ui corner labeled input\">
    ";
        } elseif (((        // line 46
array_key_exists("rightlabel", $context) && (($context["rightlabel"] ?? null) != "")) && (array_key_exists("type", $context) && (($context["type"] ?? null) == "text")))) {
            // line 47
            yield "        <div class=\"ui right labeled input\">
    ";
        } elseif (        // line 48
array_key_exists("search_id", $context)) {
            // line 49
            yield "        <div id=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["search_id"] ?? null), "html", null, true);
            yield "\" class=\"ui search field input\">
            <div class=\"ui icon input\">
    ";
        }
        // line 52
        yield "    ";
        yield from $this->unwrap()->yieldBlock('element', $context, $blocks);
        // line 71
        yield "    ";
        if (array_key_exists("search_id", $context)) {
            // line 72
            yield "                <i class=\"jsonly displaynone search icon\" aria-hidden=\"true\"></i>
            </div>
        </div>
    ";
        } elseif (((        // line 75
array_key_exists("rightlabel", $context) && (($context["rightlabel"] ?? null) != "")) && (array_key_exists("type", $context) && (($context["type"] ?? null) == "text")))) {
            // line 76
            yield "            <div class=\"ui basic label\">
                ";
            // line 77
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["rightlabel"] ?? null), "html", null, true);
            yield "
            </div>
        </div>
    ";
        } elseif (((        // line 80
array_key_exists("tip", $context) && (($context["tip"] ?? null) != "")) && (array_key_exists("type", $context) && (($context["type"] ?? null) == "text")))) {
            // line 81
            yield "            <div class=\"ui corner label\">
                <i class=\"circular inverted primary small icon info tooltip\" ";
            // line 82
            if (array_key_exists("tip_html", $context)) {
                yield "data-html";
            } else {
                yield "title";
            }
            yield "=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["tip"] ?? null), "html", null, true);
            yield "\" aria-hidden=\"true\"></i>
            </div>
        </div>
    ";
        } elseif ((        // line 85
array_key_exists("type", $context) && (($context["type"] ?? null) == "password"))) {
            // line 86
            yield "        </div>
    ";
        }
        // line 88
        yield "    ";
        if ((array_key_exists("type", $context) && (($context["type"] ?? null) == "checkbox"))) {
            // line 89
            yield "    ";
            yield from $this->unwrap()->yieldBlock('label_after', $context, $blocks);
            // line 98
            yield "    </div>
    ";
        }
        // line 100
        yield "    ";
        if (((array_key_exists("tip", $context) && (($context["tip"] ?? null) != "")) && (array_key_exists("type", $context) && (($context["type"] ?? null) != "text")))) {
            yield "<i class=\"circular inverted primary small icon info tooltip\" title=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["tip"] ?? null), "html", null, true);
            yield "\" aria-hidden=\"true\"></i>";
        }
        // line 101
        yield "    ";
        if (array_key_exists("example", $context)) {
            // line 102
            yield "        <div class=\"exemple\">";
            yield ($context["example"] ?? null);
            yield "</div>
    ";
        }
        // line 104
        if ( !array_key_exists("notag", $context)) {
            // line 105
            yield "</div>
";
        }
        return; yield '';
    }

    // line 32
    public function block_label($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 33
        yield "        <label for=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["id"] ?? null), "html", null, true);
        yield "\"";
        if (array_key_exists("title", $context)) {
            yield " title=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["title"] ?? null), "html", null, true);
            yield "\"";
        }
        if (array_key_exists("labelclass", $context)) {
            yield " class=\"";
            if (array_key_exists("labelclass", $context)) {
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["labelclass"] ?? null), "html", null, true);
            }
            yield "\"";
        }
        yield ">
        ";
        // line 34
        if ((($context["masschange"]) ?? (false))) {
            // line 35
            yield "            ";
            // line 36
            yield "            <input type=\"checkbox\" name=\"mass_";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["entry"] ?? null), "field_id", [], "any", false, false, false, 36), "html", null, true);
            yield "\" class=\"mass_checkbox\"/>
        ";
        }
        // line 38
        yield "            ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["label"] ?? null), "html", null, true);
        yield "
        </label>
    ";
        return; yield '';
    }

    // line 52
    public function block_element($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 53
        yield "                <input
                    type=\"";
        // line 54
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["type"] ?? null), "html", null, true);
        yield "\"
                    name=\"";
        // line 55
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((($context["name"]) ?? (($context["id"] ?? null))), "html", null, true);
        yield "\"
                    id=\"";
        // line 56
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["id"] ?? null), "html", null, true);
        yield "\"
                    value=\"";
        // line 57
        if ( !(($context["value"] ?? null) === null)) {
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["value"] ?? null), "html", null, true);
        }
        yield "\"
                    ";
        // line 58
        if ((array_key_exists("required", $context) && (($context["required"] ?? null) == true))) {
            yield " required=\"required\"";
        }
        // line 59
        yield "                    ";
        if ((array_key_exists("readonly", $context) && (($context["readonly"] ?? null) == true))) {
            yield " readonly=\"readonly\"";
        }
        // line 60
        yield "                    ";
        if ((array_key_exists("disabled", $context) && (($context["disabled"] ?? null) == true))) {
            yield " disabled=\"disabled\"";
        }
        // line 61
        yield "                    ";
        if (array_key_exists("title", $context)) {
            yield " title=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["title"] ?? null), "html", null, true);
            yield "\"";
        }
        // line 62
        yield "                    ";
        if (array_key_exists("maxlength", $context)) {
            yield " maxlength=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["maxlength"] ?? null), "html", null, true);
            yield "\"";
        }
        // line 63
        yield "                    ";
        if (array_key_exists("elt_class", $context)) {
            yield " class=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["elt_class"] ?? null), "html", null, true);
            yield "\"";
        }
        // line 64
        yield "                    ";
        if (array_key_exists("autocomplete", $context)) {
            yield " autocomplete=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["autocomplete"] ?? null), "html", null, true);
            yield "\"";
        }
        // line 65
        yield "                    ";
        if (array_key_exists("autofocus", $context)) {
            yield " autofocus";
        }
        // line 66
        yield "                    ";
        if (array_key_exists("size", $context)) {
            yield " size=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["size"] ?? null), "html", null, true);
            yield "\"";
        }
        // line 67
        yield "                    ";
        if ((array_key_exists("checked", $context) && (($context["checked"] ?? null) == true))) {
            yield " checked";
        }
        // line 68
        yield "                    ";
        if (array_key_exists("placeholder", $context)) {
            yield " placeholder=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["placeholder"] ?? null), "html", null, true);
            yield "\"";
        }
        // line 69
        yield "                />
    ";
        return; yield '';
    }

    // line 89
    public function block_label_after($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 90
        yield "        <label for=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["id"] ?? null), "html", null, true);
        yield "\"";
        if (array_key_exists("title", $context)) {
            yield " title=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["title"] ?? null), "html", null, true);
            yield "\"";
        }
        if (array_key_exists("labelclass", $context)) {
            yield " class=\"";
            if (array_key_exists("labelclass", $context)) {
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["labelclass"] ?? null), "html", null, true);
            }
            yield "\"";
        }
        yield ">
        ";
        // line 91
        if ((($context["masschange"]) ?? (false))) {
            // line 92
            yield "            ";
            // line 93
            yield "            <input type=\"checkbox\" name=\"mass_";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["entry"] ?? null), "field_id", [], "any", false, false, false, 93), "html", null, true);
            yield "\" class=\"mass_checkbox\"/>
        ";
        }
        // line 95
        yield "            ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["label"] ?? null), "html", null, true);
        yield "
        </label>
    ";
        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "components/forms/input.html.twig";
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
        return array (  369 => 95,  363 => 93,  361 => 92,  359 => 91,  341 => 90,  337 => 89,  331 => 69,  324 => 68,  319 => 67,  312 => 66,  307 => 65,  300 => 64,  293 => 63,  286 => 62,  279 => 61,  274 => 60,  269 => 59,  265 => 58,  259 => 57,  255 => 56,  251 => 55,  247 => 54,  244 => 53,  240 => 52,  231 => 38,  225 => 36,  223 => 35,  221 => 34,  203 => 33,  199 => 32,  192 => 105,  190 => 104,  184 => 102,  181 => 101,  174 => 100,  170 => 98,  167 => 89,  164 => 88,  160 => 86,  158 => 85,  146 => 82,  143 => 81,  141 => 80,  135 => 77,  132 => 76,  130 => 75,  125 => 72,  122 => 71,  119 => 52,  112 => 49,  110 => 48,  107 => 47,  105 => 46,  102 => 45,  100 => 44,  97 => 43,  94 => 42,  91 => 41,  88 => 32,  86 => 31,  79 => 30,  76 => 29,  61 => 27,  59 => 26,  51 => 25,  48 => 24,  44 => 22,  42 => 21,);
    }

    public function getSourceContext()
    {
        return new Source("", "components/forms/input.html.twig", "/var/www/galette/templates/default/components/forms/input.html.twig");
    }
}
