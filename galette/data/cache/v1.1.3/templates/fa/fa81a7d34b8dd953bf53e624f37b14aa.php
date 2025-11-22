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

/* @PluginGaletteObjectslend/headers.html.twig */
class __TwigTemplate_f091720b0e0d4f52e8dfe33be9dca4e5 extends Template
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
        if ((array_key_exists("olendsprefs", $context) && CoreExtension::getAttribute($this->env, $this->source, ($context["olendsprefs"] ?? null), "showFullsize", [], "method", false, false, false, 21))) {
            // line 22
            yield "<script type=\"text/javascript\">
    var _init_fullimage = function() {
        \$('.picture').css('cursor', 'pointer').attr('title', '";
            // line 24
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("Click to view fullsize image", "objectslend"), "js"), "html", null, true);
            yield "');
        \$('.picture').click(function () {
            var image = \$(this).attr('src');
            var fullimage = image.replace(/thumbnail/, 'photo');
            \$('body').append(
                '<div class=\"ui modal fullimage\"><i class=\"close icon\"></i><div class=\"center aligned image content\"><img class=\"ui fluid image\" src=\"' +
                    fullimage +
                    '\" /></div></div>'
            );
            \$('.ui.modal.fullimage').css('width', 'auto');
            \$('.ui.modal.fullimage').modal({
                onHidden: function() {
                    \$(this).modal('hide dimmer').remove();
                }
            }).modal('show');
        });
    }

    \$(function(){
        _init_fullimage();
    });
</script>
";
        }
        // line 47
        yield "<script type=\"text/javascript\" src=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("plugin_res", ["plugin" => ($context["module_id"] ?? null), "path" => "lend.js"]), "html", null, true);
        yield "\"></script>
";
        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@PluginGaletteObjectslend/headers.html.twig";
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
        return array (  70 => 47,  44 => 24,  40 => 22,  38 => 21,);
    }

    public function getSourceContext()
    {
        return new Source("", "@PluginGaletteObjectslend/headers.html.twig", "/var/www/galette/plugins/plugin-objectslend/templates/default/headers.html.twig");
    }
}
