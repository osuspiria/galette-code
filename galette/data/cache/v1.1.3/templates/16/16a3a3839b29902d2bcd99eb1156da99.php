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

/* pages/configuration_core_fields.html.twig */
class __TwigTemplate_c5445970049789394ceaa3004435232e extends Template
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
        $this->parent = $this->loadTemplate("page.html.twig", "pages/configuration_core_fields.html.twig", 21);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 23
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 24
        yield "    <form action=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("configureCoreFields"), "html", null, true);
        yield "\" method=\"post\" id=\"config_fields_form\" class=\"ui form\">
        <div id=\"sortable_categories\" class=\"ui stackable pointing inverted menu\">
    ";
        // line 26
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["categories"] ?? null));
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
        foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
            // line 27
            yield "            ";
            $context["catname"] = $this->env->getFunction('_T')->getCallable()(CoreExtension::getAttribute($this->env, $this->source, $context["category"], "category", [], "any", false, false, false, 27));
            // line 28
            yield "            ";
            $context["fs"] = CoreExtension::getAttribute($this->env, $this->source, $context["category"], "id_field_category", [], "any", false, false, false, 28);
            // line 29
            yield "            <a href=\"#";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["fs"] ?? null), "html", null, true);
            yield "\" class=\"item\" data-tab=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["fs"] ?? null), "html", null, true);
            yield "\">
                <input type=\"hidden\" name=\"categories[]\" id=\"category";
            // line 30
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 30), "html", null, true);
            yield "\" value=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["category"], "id_field_category", [], "any", false, false, false, 30), "html", null, true);
            yield "\"/>
                <i class=\"jsonly displaynone arrows alternate icon\" aria-hidden=\"true\"></i>
                ";
            // line 32
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["catname"] ?? null), "html", null, true);
            yield "
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 35
        yield "        </div>
    ";
        // line 36
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["categories"] ?? null));
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
        foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
            // line 37
            yield "        ";
            $context["fs"] = CoreExtension::getAttribute($this->env, $this->source, $context["category"], "id_field_category", [], "any", false, false, false, 37);
            // line 38
            yield "        <div class=\"ui tab segment\" data-tab=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["fs"] ?? null), "html", null, true);
            yield "\">
            ";
            // line 39
            yield from             $this->loadTemplate("elements/edit_core_fields.html.twig", "pages/configuration_core_fields.html.twig", 39)->unwrap()->yield($context);
            // line 40
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 42
        yield "        <div class=\"ui basic center aligned segment\">
            <button type=\"submit\" class=\"ui labeled icon primary button action\">
                <i class=\"save icon\" aria-hidden=\"true\"></i> ";
        // line 44
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("Save"), "html", null, true);
        yield "
            </button>
            ";
        // line 46
        yield from         $this->loadTemplate("components/forms/csrf.html.twig", "pages/configuration_core_fields.html.twig", 46)->unwrap()->yield($context);
        // line 47
        yield "        </div>
    </form>
";
        return; yield '';
    }

    // line 51
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 52
        yield "    <script type=\"module\">
        \$(function() {
            \$('.pointing.menu .item').tab();
        });

        var _initSortable = function(){
            var _categories = document.getElementById('sortable_categories');

            var _nestedSortables = [].slice.call(document.querySelectorAll('.sortable-items'));
            var _drag_on_tabs = null;

            function changeTab() {
                \$('.pointing.menu .item').tab('change tab', this.dataset.tab);
            }

            for (var i = 0; i < _nestedSortables.length; i++) {
                new Sortable(_nestedSortables[i], {
                    group: 'nested',
                    animation: 150,
                    ghostClass: 'yellow',
                    fallbackOnBody: true,
                    swapThreshold: 0.65,
                    onStart: function (evt) {
                        const targets = document.querySelectorAll('#sortable_categories .item');
                        for (let i = 0; i < targets.length; i++) {
                            targets[i].addEventListener('dragenter', changeTab, false);
                        }
                    },
                    onEnd: function (evt) {
                        const targets = document.querySelectorAll('#sortable_categories .item');
                        for (let i = 0; i < targets.length; i++) {
                            targets[i].removeEventListener('dragenter', changeTab, false);
                        }
                    },
                    onAdd: function (evt) {
                        var _item = evt.item;
                        var _category = _item.parentElement.dataset.category;
                        _item.classList.add('yellow');
                        _item.querySelectorAll('input[name\$=category]')[0].setAttribute('value', _category);
                    },
                    onUpdate: function (evt) {
                        var _item = evt.item;
                        _item.classList.add('yellow');
                    }
                });
            }

            new Sortable(_categories, {
                animation: 150,
                onUpdate: function (evt) {
                    var _item = evt.item;
                    _item.classList.add('moved');
                }
            });
        }

        var _warnings = [];
        var _checkCoherence = function(index, elt){
            var _elt = \$(elt);
            var _disabled = _elt.find('.required input:disabled, .visible input:disabled');
            if ( _disabled.length == 0 ) {
                var _required = parseInt(_elt.find('.required input:checked').val());
                var _visible = parseInt(_elt.find('.visible option:selected').val());

                if ( _required === 1 && _visible === 0 ) {
                    _elt.addClass('red colored');
                    _elt.find('.required_cell, .visibility_cell').addClass('left red marked');
                    _warnings[_warnings.length] = _elt;
                }
            }
        }

        var _bindForm = function(){
            \$('#config_fields_form').submit(function(){

                _warnings = [];
                \$('.sortable-items tr').removeClass('red colored');
                \$('.required_cell, .visibility_cell').removeClass('left red marked');
                \$('.sortable-items tr').each(_checkCoherence);

                if ( _warnings.length > 0 ) {
                    document.getElementById('galette_body').scrollTo({top: 0});
                    var _message = '";
        // line 134
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("Some warnings has been thrown:"), "js"), "html", null, true);
        yield "<ul>';
                    \$.each(_warnings, function(i,w){
                        var _val = w[0].getElementsByClassName('fieldname')[0].textContent.trim();
                        _message += '<li>' + _val + '</li>';
                    });
                    _message += '</ul>";
        // line 139
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("Please correct above warnings to continue."), "html", null, true);
        yield "';
                    \$('body')
                        .toast({
                            title: '";
        // line 142
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("Warning"), "js"), "html", null, true);
        yield "',
                            displayTime: 0,
                            closeIcon: true,
                            position: 'top attached',
                            message: _message,
                            showIcon: 'exclamation triangle',
                            class: 'warning'
                        })
                    ;
                    return false;
                } else {
                    return true;
                }
            });
        }

        \$(function() {
            _bindForm();
            _initSortable();

            /*\$('#add_category').click(function() {
                var _fieldsets = \$('fieldset[id^=cat_]');
                var _cat_iter = _fieldsets.length + 1;

                var _fs = \$(_fieldsets[0]).clone();
                _fs.attr('id', 'cat_' + _cat_iter).children('ul').attr('id', 'sortable_' + _cat_iter);
                _fs.find('li:not(.listing)').remove();

                var _legend = _fs.children('legend');
                var _a = _legend.children('a');

                _legend.html('<input type=\"text\" name=\"categories[]\" id=\"category' + _cat_iter + '\" value=\"New category #' + _cat_iter + '\"/>');
                _legend.prepend(_a);
                _a.spinDown();

                \$('#members_tab').append(_fs);
                _initSortable();
                _bindCollapse();

                \$(this).attr('href', '#cat_' + _cat_iter);
                //Getting
                var _url = document.location.toString();
                if (_url.match('#')) { // the URL contains an anchor
                    var _url = _url.split('#')[0];
                }
                _url += '#cat_' + _cat_iter;

                document.location = _url;
                _legend.children(':input').focus();
                return false;
            });*/
        });
    </script>
";
        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "pages/configuration_core_fields.html.twig";
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
        return array (  277 => 142,  271 => 139,  263 => 134,  179 => 52,  175 => 51,  168 => 47,  166 => 46,  161 => 44,  157 => 42,  142 => 40,  140 => 39,  135 => 38,  132 => 37,  115 => 36,  112 => 35,  95 => 32,  88 => 30,  81 => 29,  78 => 28,  75 => 27,  58 => 26,  52 => 24,  48 => 23,  37 => 21,);
    }

    public function getSourceContext()
    {
        return new Source("", "pages/configuration_core_fields.html.twig", "/var/www/galette/templates/default/pages/configuration_core_fields.html.twig");
    }
}
