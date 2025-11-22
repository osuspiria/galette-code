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

/* pages/configuration_pdf_models.html.twig */
class __TwigTemplate_b1bd0565b083db24b7859580df7731b0 extends Template
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
        return "page.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("page.html.twig", "pages/configuration_pdf_models.html.twig", 21);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 23
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 24
        yield "        <div class=\"ui stackable pointing inverted menu\">
";
        // line 25
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["models"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["m"]) {
            // line 26
            yield "            <a href=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("pdfModels", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["m"], "id", [], "any", false, false, false, 26)]), "html", null, true);
            yield "\" class=\"item";
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["m"], "id", [], "any", false, false, false, 26) == CoreExtension::getAttribute($this->env, $this->source, ($context["model"] ?? null), "id", [], "any", false, false, false, 26))) {
                yield " active";
            }
            yield "\" data-tab=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["m"], "id", [], "any", false, false, false, 26), "html", null, true);
            yield "\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["m"], "name", [], "any", false, false, false, 26), "html", null, true);
            yield "</a>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['m'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 28
        yield "        </div>
";
        // line 29
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["models"] ?? null));
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
        foreach ($context['_seq'] as $context["_key"] => $context["m"]) {
            // line 30
            yield "        <div class=\"ui ";
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["m"], "id", [], "any", false, false, false, 30) == CoreExtension::getAttribute($this->env, $this->source, ($context["model"] ?? null), "id", [], "any", false, false, false, 30))) {
                yield " active";
            }
            yield " tab segment\" data-tab=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 30), "html", null, true);
            yield "\">
    ";
            // line 31
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["m"], "id", [], "any", false, false, false, 31) == CoreExtension::getAttribute($this->env, $this->source, ($context["model"] ?? null), "id", [], "any", false, false, false, 31))) {
                // line 32
                yield "        ";
                yield from                 $this->loadTemplate("elements/edit_pdf_models.html.twig", "pages/configuration_pdf_models.html.twig", 32)->unwrap()->yield($context);
                // line 33
                yield "    ";
            }
            // line 34
            yield "        </div>
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['m'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        return; yield '';
    }

    // line 38
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 39
        yield "        <script type=\"text/javascript\">
            \$(function() {
                \$('.pointing.menu .item').tab({
                    auto: true,
                    alwaysRefresh: true,
                    path: '";
        // line 44
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("pdfModels", ["id" => ""]), "html", null, true);
        yield "',
                    onLoad: function(tabPath, parameterArray, historyEvent) {
                        \$('.ui.tab.segment:not(.active)').empty();
                        \$('.note-editor, .btnlegend').remove();
                        _initCodeEditor();
                        _bindSubmit();
                        _addLegendButton('.field:not(.nolegend) .ui.corner.label');
                        _handleLegend(tabPath);
                        _bindFomanticComponents();
                    }
                });
            });

            function _initCodeEditor() {
                \$('textarea.codeeditor').summernote({
                    lang: '";
        // line 59
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::replace(CoreExtension::getAttribute($this->env, $this->source, ($context["i18n"] ?? null), "getID", [], "method", false, false, false, 59), ["_" => "-"]), "html", null, true);
        yield "',
                    height: 240,
                    toolbar: [
                        ['view', ['codeview']]
                    ]
                });
                // Disable wysiwyg edition
                \$('textarea.codeeditor').next().find('.note-editable').attr('contenteditable', false);
            }
            _initCodeEditor();

            function _bindSubmit() {
                \$('button.action').click(function(event) {
                    event.preventDefault();
                    \$('.note-editor').each(function(index) {
                        var _this= \$(this);
                        // Because wysiwyg edition is disabled, it is required to toggle
                        // codeview before submit, otherwise modifications will not persist.
                        if (_this.hasClass('codeview')) {
                            var _editor = _this.prev();
                            _editor.summernote('codeview.toggle');
                        }
                    });
                    \$('.form').submit();
                });
            }
            _bindSubmit();

            _addLegendButton('.field:not(.nolegend) .ui.corner.label');
            _handleLegend();
        </script>
";
        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "pages/configuration_pdf_models.html.twig";
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
        return array (  160 => 59,  142 => 44,  135 => 39,  131 => 38,  113 => 34,  110 => 33,  107 => 32,  105 => 31,  96 => 30,  79 => 29,  76 => 28,  59 => 26,  55 => 25,  52 => 24,  48 => 23,  37 => 21,);
    }

    public function getSourceContext()
    {
        return new Source("", "pages/configuration_pdf_models.html.twig", "/var/www/galette/templates/default/pages/configuration_pdf_models.html.twig");
    }
}
