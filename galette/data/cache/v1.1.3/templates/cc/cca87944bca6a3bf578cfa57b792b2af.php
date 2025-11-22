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

/* elements/js/choose_social.js.twig */
class __TwigTemplate_de03933e700872d11fc3409b89d2595e extends Template
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
        yield "var _dropdownSocials = function() {
    \$('.socials-dropdown').dropdown({
        allowAdditions: true,
        onNoResults: function(searchValue) {
            \$(this).dropdown('set value', searchValue);
        }
    });
}

var _rmSocial = function(elt) {
    if ( typeof elt == 'undefined') {
        elt = \$('#social .stored');
    }
    elt.find('.delsocial').click(function(e){
        e.preventDefault();
        var _this = \$(this);
        _this.parents('.field.stored').remove();
    });
}

\$(function(){
    _rmSocial();
    _dropdownSocials();

    \$('a.addsocial').click(function(e) {
        e.preventDefault();

        var _newindex = \$(this).parents('.addsocial').find('.combo-social:last .socials-dropdown').attr('id').replace('social_new_type_', '');
        ++_newindex;
        \$(this).parents('.addsocial').find ('.combo-social:last')
            .clone() // copy
            .insertAfter('#social .combo-social:last') // where
            .find('.socials-dropdown').attr('id', 'social_new_type_' + _newindex).dropdown('clear')
            .find('input:not(.search)').attr('id', 'social_new_type_input_' + _newindex).attr('name', 'social_new_type_' + _newindex)
            .parent().parent().parent().find('input.value').attr('id', 'social_new_value_' + _newindex).attr('name', 'social_new_value_' + _newindex).val('')
        ;

        _dropdownSocials();
    });
});
";
        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "elements/js/choose_social.js.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo()
    {
        return array ();
    }

    public function getSourceContext()
    {
        return new Source("", "elements/js/choose_social.js.twig", "/var/www/galette/templates/default/elements/js/choose_social.js.twig");
    }
}
