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

/* elements/header.html.twig */
class __TwigTemplate_046820a5a1c151820bc5817acf22bf96 extends Template
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
        // line 22
        yield "        <title>";
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["preferences"] ?? null), "pref_slogan", [], "any", false, false, false, 22) != "")) {
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('__')->getCallable()(CoreExtension::getAttribute($this->env, $this->source, ($context["preferences"] ?? null), "pref_slogan", [], "any", false, false, false, 22)), "html", null, true);
            yield " - ";
        }
        if ((($context["page_title"] ?? null) != "")) {
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["page_title"] ?? null), "html", null, true);
            yield " - ";
        }
        yield "Galette ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::constant("GALETTE_VERSION"), "html", null, true);
        yield "</title>
        <meta charset=\"UTF-8\" />
        <meta name=\"viewport\" content=\"width=device-width\" />
        <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 25
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->getBasePath(), "html", null, true);
        yield "/";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::constant("GALETTE_THEME"), "html", null, true);
        yield "ui/semantic";
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["i18n"] ?? null), "isRtl", [], "method", false, false, false, 25)) {
            yield ".rtl";
        }
        yield ".min.css\" />

    ";
        // line 27
        if (($context["html_editor"] ?? null)) {
            // line 28
            yield "        <link rel=\"stylesheet\" type=\"text/css\" href=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->getBasePath(), "html", null, true);
            yield "/assets/css/codemirror.css\">
        <link rel=\"stylesheet\" type=\"text/css\" href=\"";
            // line 29
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->getBasePath(), "html", null, true);
            yield "/assets/css/summernote.min.css\" />
    ";
        }
        // line 31
        yield "
    ";
        // line 33
        yield "    ";
        $context["localstylesheet"] = (Twig\Extension\CoreExtension::constant("_CURRENT_THEME_PATH") . "galette_local.css");
        // line 34
        yield "    ";
        if ($this->env->getFunction('file_exists')->getCallable()(($context["localstylesheet"] ?? null))) {
            // line 35
            yield "        <link rel=\"stylesheet\" type=\"text/css\" href=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->getBasePath(), "html", null, true);
            yield "/";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::constant("GALETTE_THEME"), "html", null, true);
            yield "galette_local.css\" />
    ";
        }
        // line 37
        yield "    ";
        // line 38
        yield "    ";
        $context["localprintstylesheet"] = (Twig\Extension\CoreExtension::constant("_CURRENT_THEME_PATH") . "galette_print_local.css");
        // line 39
        yield "    ";
        if ($this->env->getFunction('file_exists')->getCallable()(($context["localprintstylesheet"] ?? null))) {
            // line 40
            yield "        <link rel=\"stylesheet\" type=\"text/css\" href=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->getBasePath(), "html", null, true);
            yield "/";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::constant("GALETTE_THEME"), "html", null, true);
            yield "galette_print_local.css\" media=\"print\" />
    ";
        }
        // line 42
        yield "        <link rel=\"icon\" type=\"image/png\" href=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->getBasePath(), "html", null, true);
        yield "/";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::constant("GALETTE_THEME"), "html", null, true);
        yield "images/favicon.png\" />
        <link rel=\"apple-touch-icon\" type=\"image/png\" href=\"";
        // line 43
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->getBasePath(), "html", null, true);
        yield "/";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::constant("GALETTE_THEME"), "html", null, true);
        yield "images/favicon.png\">

        <script type=\"text/javascript\" src=\"";
        // line 45
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->getBasePath(), "html", null, true);
        yield "/assets/js/jquery.min.js\"></script>

";
        // line 49
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), ($context["plugin_headers"] ?? null)) != 0)) {
            // line 50
            yield "    ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["plugin_headers"] ?? null));
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
            foreach ($context['_seq'] as $context["mid"] => $context["header"]) {
                // line 51
                yield "        ";
                yield from                 $this->loadTemplate($context["header"], "elements/header.html.twig", 51)->unwrap()->yield(CoreExtension::merge($context, ["module_id" => $context["mid"]]));
                // line 52
                yield "    ";
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
            unset($context['_seq'], $context['_iterated'], $context['mid'], $context['header'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
        // line 54
        yield "
";
        // line 55
        $context["darkcssfile"] = (Twig\Extension\CoreExtension::constant("GALETTE_CACHE_DIR") . "dark.css");
        // line 56
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["login"] ?? null), "isDarkModeEnabled", [], "method", false, false, false, 56) && $this->env->getFunction('file_exists')->getCallable()(($context["darkcssfile"] ?? null)))) {
            // line 57
            yield "    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("getDarkCSS"), "html", null, true);
            yield "\">
";
        }
        // line 59
        yield "
";
        // line 60
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["preferences"] ?? null), "pref_noindex", [], "any", false, false, false, 60)) {
            // line 61
            yield "    <meta name=\"robots\" content=\"noindex, nofollow\" />
";
        }
        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "elements/header.html.twig";
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
        return array (  185 => 61,  183 => 60,  180 => 59,  174 => 57,  172 => 56,  170 => 55,  167 => 54,  152 => 52,  149 => 51,  131 => 50,  129 => 49,  124 => 45,  117 => 43,  110 => 42,  102 => 40,  99 => 39,  96 => 38,  94 => 37,  86 => 35,  83 => 34,  80 => 33,  77 => 31,  72 => 29,  67 => 28,  65 => 27,  54 => 25,  38 => 22,);
    }

    public function getSourceContext()
    {
        return new Source("", "elements/header.html.twig", "/var/www/galette/templates/default/elements/header.html.twig");
    }
}
