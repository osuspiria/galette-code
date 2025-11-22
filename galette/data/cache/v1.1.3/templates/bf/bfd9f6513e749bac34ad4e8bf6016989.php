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

/* pages/configuration_core_lists.html.twig */
class __TwigTemplate_6e860b783746be78441d7c129fe77fb7 extends Template
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
        $this->parent = $this->loadTemplate("page.html.twig", "pages/configuration_core_lists.html.twig", 21);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 23
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 24
        yield "    <noscript>
        <div class=\"ui basic fitted center aligned segment\">
            <div class=\"ui compact message\">";
        // line 26
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("This feature requires javascript."), "html", null, true);
        yield "</div>
        </div>
    </noscript>
    <form action=\"";
        // line 29
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("storeListFields", ["table" => ($context["table"] ?? null)]), "html", null, true);
        yield "\" method=\"post\" id=\"config_fields_form\" class=\"ui form\">
        <div class=\"ui basic fitted segment loader_selector\">
            <table id=\"listed_fields_table\" class=\"listing ui celled striped table\">
                <thead>
                    <tr>
                        <th class=\"id_row\">#</th>
                        <th>";
        // line 35
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("Field name"), "html", null, true);
        yield "</th>
                        <th>";
        // line 36
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("Permissions"), "html", null, true);
        yield "</th>
                        <th>";
        // line 37
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("Actions"), "html", null, true);
        yield "</th>
                    </tr>
                </thead>
                <tfoot>
                    <tr>
                        <td data-scope=\"row\"></td>
                        <td class=\"left\" data-col-label=\"";
        // line 43
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("Available fields"), "html", null, true);
        yield "\" colspan=\"2\">
                            <div id=\"remaining_fields_dropdown\" class=\"ui fluid search clearable selection dropdown\">
                                <i class=\"dropdown icon\"></i>
                                <div class=\"default text\">";
        // line 46
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("Available fields"), "html", null, true);
        yield "</div>
                                <div id=\"remaining_fields\" class=\"menu sortable-items\">
    ";
        // line 48
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["remaining_fields"] ?? null));
        foreach ($context['_seq'] as $context["col"] => $context["field"]) {
            // line 49
            yield "        ";
            $context["fid"] = CoreExtension::getAttribute($this->env, $this->source, $context["field"], "field_id", [], "any", false, false, false, 49);
            // line 50
            yield "        ";
            $context["permission"] = (($__internal_compile_0 = ($context["permissions"] ?? null)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0[CoreExtension::getAttribute($this->env, $this->source, $context["field"], "visible", [], "any", false, false, false, 50)] ?? null) : null);
            // line 51
            yield "                                    <div class=\"item\" data-fid=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["fid"] ?? null), "html", null, true);
            yield "\" data-label=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["field"], "label", [], "any", false, false, false, 51), "html", null, true);
            yield "\" data-permission=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["permission"] ?? null), "html", null, true);
            yield "\">
                                        <input type=\"hidden\" name=\"rfields[]\" value=\"";
            // line 52
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["fid"] ?? null), "html", null, true);
            yield "\"/>
                                        <span class=\"text\">";
            // line 53
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["field"], "label", [], "any", false, false, false, 53), "html", null, true);
            yield "</span>
                                        <span class=\"description\">(";
            // line 54
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["permission"] ?? null), "html", null, true);
            yield ")</span>
                                    </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['col'], $context['field'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 57
        yield "                                </div>
                        </td>
                        <td class=\"collapsing actions_row\">
                            <input type=\"hidden\" name=\"new\" value=\"1\" />
                            <a href=\"#\" id=\"addfield\" class=\"ui labeled icon button\">
                                <i class=\"plus green icon\" aria-hidden=\"true\"></i>
                                ";
        // line 63
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("Add"), "html", null, true);
        yield "
                            </a>
                        </td>
                    </tr>
                </tfoot>
                <tbody id=\"listed_fields\" class=\"sortable-items\">
    ";
        // line 69
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["listed_fields"] ?? null));
        foreach ($context['_seq'] as $context["col"] => $context["field"]) {
            // line 70
            yield "        ";
            $context["fid"] = CoreExtension::getAttribute($this->env, $this->source, $context["field"], "field_id", [], "any", false, false, false, 70);
            // line 71
            yield "        ";
            $context["permission"] = (($__internal_compile_1 = ($context["permissions"] ?? null)) && is_array($__internal_compile_1) || $__internal_compile_1 instanceof ArrayAccess ? ($__internal_compile_1[CoreExtension::getAttribute($this->env, $this->source, $context["field"], "visible", [], "any", false, false, false, 71)] ?? null) : null);
            // line 72
            yield "                    <tr data-fid=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["fid"] ?? null), "html", null, true);
            yield "\" data-label=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["field"], "label", [], "any", false, false, false, 72), "html", null, true);
            yield "\" data-permission=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["permission"] ?? null), "html", null, true);
            yield "\">
                        <td data-scope=\"row\" class=\"collapsing\">
                            <i class=\"arrows alternate icon\" aria-hidden=\"true\"></i>
                        </td>
                        <td class=\"left\" data-col-label=\"";
            // line 76
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("Field name"), "html", null, true);
            yield "\">
                            <input type=\"hidden\" name=\"fields[]\" value=\"";
            // line 77
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["fid"] ?? null), "html", null, true);
            yield "\"/>
                            ";
            // line 78
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["field"], "label", [], "any", false, false, false, 78), "html", null, true);
            yield "
                        </td>
                        <td class=\"left\" data-col-label=\"";
            // line 80
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("Permissions"), "html", null, true);
            yield "\">
                            ";
            // line 81
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["permission"] ?? null), "html", null, true);
            yield "
                        </td>
                        <td class=\"center actions_row\">
                            <a href=\"#\" class=\"delete\">
                                <i class=\"ui trash red icon tooltip\" aria-hidden=\"true\"></i>
                                <span class=\"ui special popup\">";
            // line 86
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::replace($this->env->getFunction('_T')->getCallable()("Delete '%s' field"), ["%s" => CoreExtension::getAttribute($this->env, $this->source, $context["field"], "label", [], "any", false, false, false, 86)]), "html", null, true);
            yield "</span>
                            </a>
                        </td>
                    </tr>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['col'], $context['field'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 91
        yield "                </tbody>
            </table>
        </div>
        <div class=\"ui basic center aligned segment\">
            <button type=\"submit\" class=\"ui labeled icon primary button action\">
                <i class=\"save icon\" aria-hidden=\"true\"></i> ";
        // line 96
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("Save"), "html", null, true);
        yield "
            </button>
        </div>
        ";
        // line 99
        yield from         $this->loadTemplate("components/forms/csrf.html.twig", "pages/configuration_core_lists.html.twig", 99)->unwrap()->yield($context);
        // line 100
        yield "    </form>
";
        return; yield '';
    }

    // line 103
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 104
        yield "    <script type=\"module\">
        function _initSortable() {
            var _listed = document.getElementById('listed_fields');

            new Sortable(_listed, {
                group: 'lists',
                animation: 150,
                ghostClass: 'yellow',
                filter: '.delete',
                onUpdate: function (evt) {
                    var _item = evt.item;
                    _item.classList.add('yellow');
                },
                onFilter: function (evt) {
                    var _item = evt.item;
                    var _table = document.getElementById('listed_fields_table');
                    var _remaining_fields = document.getElementById('remaining_fields');
                    var _field_id = _item.dataset.fid;
                    var _field_label = _item.dataset.label;
                    var _field_permission = _item.dataset.permission;
                    var _dropdown_item = '<div class=\"item\" data-fid=\"' + _field_id + '\" data-label=\"' + _field_label + '\" data-permission=\"' + _field_permission + '\">';
                        _dropdown_item +='<input type=\"hidden\" name=\"rfields[]\" value=\"' + _field_id + '\"/>';
                        _dropdown_item +='<span class=\"text\">' + _field_label + '</span>';
                        _dropdown_item +='<span class=\"description\">(' + _field_permission + ')</span>';
                        _dropdown_item +='</div>';
                    if (_item.parentNode.children.length > 1) {
                        _item.parentNode.removeChild(_item);
                        _table.classList.add('red');
                        _remaining_fields.innerHTML += _dropdown_item;
                    } else {
                        \$('.ui.toast').toast('close');
                        \$('body').toast({
                            displayTime: 'auto',
                            minDisplayTime: 5000,
                            wordsPerMinute: 80,
                            showProgress: 'bottom',
                            closeIcon: true,
                            position: 'top attached',
                            message: '";
        // line 142
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("Deleting the last field is not possible. There must be at least one field in the list."), "js"), "html", null, true);
        yield "',
                            showIcon: 'info',
                            class: 'info'
                        });
                    }
                }
            });
        }

        function _handleAddToList(evt) {
            evt.preventDefault();

            var _listed_fields = document.getElementById('listed_fields');
            var _remaining_fields = document.getElementById('remaining_fields');
            var _selected_field = _remaining_fields.getElementsByClassName('selected');

            if (_selected_field.length > 0) {
                for (let i = 0; i < _selected_field.length; i++) {
                    var _field_id = _selected_field[i].dataset.fid;
                    var _field_label = _selected_field[i].dataset.label;
                    var _field_permission = _selected_field[i].dataset.permission;
                    var _table_item = '<tr class=\"yellow\" data-fid=\"' + _field_id + '\" data-label=\"' + _field_label + '\" data-permission=\"' + _field_permission + '\">';
                        _table_item +='<td data-scope=\"row\" class=\"collapsing\"><i class=\"arrows alternate icon\" aria-hidden=\"true\"></i></td>';
                        _table_item +='<td class=\"left\" data-col-label=\"";
        // line 165
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("Field name"), "html", null, true);
        yield "\">';
                        _table_item +='<input type=\"hidden\" name=\"fields[]\" value=\"' + _field_id + '\"/>' + _field_label;
                        _table_item +='</td>';
                        _table_item +='<td class=\"left\" data-col-label=\"";
        // line 168
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("Permissions"), "html", null, true);
        yield "\">' + _field_permission + '</td>';
                        _table_item +='<td class=\"center actions_row\"><a href=\"#\" class=\"delete\">';
                        _table_item +='<i class=\"ui trash red icon tooltip\" aria-hidden=\"true\"></i>';
                        _table_item +='<span class=\"ui special popup\">";
        // line 171
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::replace($this->env->getFunction('_T')->getCallable()("Delete '%s' field"), ["%s" => " + _field_label + "]), "js"), "html", null, true);
        yield "</span>';
                        _table_item +='</a></td>';
                        _table_item +='</tr>';

                    _selected_field[i].remove();
                }

                \$('#remaining_fields_dropdown').dropdown('clear');
                _listed_fields.innerHTML += _table_item;
            }
        }

        function _addToList() {
            var _add = document.getElementById('addfield');
            _add.addEventListener('click', _handleAddToList, false);
        }

        \$(function() {
            _initSortable();
            _addToList();
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
        return "pages/configuration_core_lists.html.twig";
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
        return array (  313 => 171,  307 => 168,  301 => 165,  275 => 142,  235 => 104,  231 => 103,  225 => 100,  223 => 99,  217 => 96,  210 => 91,  199 => 86,  191 => 81,  187 => 80,  182 => 78,  178 => 77,  174 => 76,  162 => 72,  159 => 71,  156 => 70,  152 => 69,  143 => 63,  135 => 57,  126 => 54,  122 => 53,  118 => 52,  109 => 51,  106 => 50,  103 => 49,  99 => 48,  94 => 46,  88 => 43,  79 => 37,  75 => 36,  71 => 35,  62 => 29,  56 => 26,  52 => 24,  48 => 23,  37 => 21,);
    }

    public function getSourceContext()
    {
        return new Source("", "pages/configuration_core_lists.html.twig", "/var/www/galette/templates/default/pages/configuration_core_lists.html.twig");
    }
}
