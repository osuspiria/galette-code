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

/* pages/groups_list.html.twig */
class __TwigTemplate_7cd80f67ddc5d31e3a562fd3ddfaa645 extends Template
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
        $macros["_self"] = $this->macros["_self"] = $this;
    }

    protected function doGetParent(array $context)
    {
        // line 21
        return "page.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 23
        $context["can_export"] = (((CoreExtension::getAttribute($this->env, $this->source, ($context["login"] ?? null), "isGroupManager", [], "method", false, false, false, 23) && CoreExtension::getAttribute($this->env, $this->source, ($context["preferences"] ?? null), "pref_bool_groupsmanagers_exports", [], "any", false, false, false, 23)) || CoreExtension::getAttribute($this->env, $this->source, ($context["login"] ?? null), "isAdmin", [], "method", false, false, false, 23)) || CoreExtension::getAttribute($this->env, $this->source, ($context["login"] ?? null), "isStaff", [], "method", false, false, false, 23));
        // line 21
        $this->parent = $this->loadTemplate("page.html.twig", "pages/groups_list.html.twig", 21);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 43
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 44
        yield "    ";
        $context["parents"] = CoreExtension::getAttribute($this->env, $this->source, ($context["group"] ?? null), "getParents", [], "method", false, false, false, 44);
        // line 45
        yield "    ";
        $context["selected"] = CoreExtension::getAttribute($this->env, $this->source, ($context["group"] ?? null), "getName", [], "method", false, false, false, 45);
        // line 46
        yield "    <div class=\"ui stackable grid\">
        <div class=\"three wide column\">
    ";
        // line 48
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["group"] ?? null), "getId", [], "method", false, false, false, 48)) {
            // line 49
            yield "            <div class=\"ui top attached accordion-styled header\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("Select a group"), "html", null, true);
            yield " :</div>
            <div class=\"ui attached accordion-styled scrolling segment loader_selector\">
                <div class=\"ui tree accordion\">
                ";
            // line 52
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["groups_root"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["group"]) {
                // line 53
                yield "                    ";
                yield CoreExtension::callMacro($macros["_self"], "macro_group_item", [($context["login"] ?? null), $context["group"], ($context["parents"] ?? null), ($context["selected"] ?? null)], 53, $context, $this->getSourceContext());
                yield "
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['group'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 55
            yield "                </div>
            </div>
    ";
        }
        // line 58
        yield "    ";
        if (((($context["can_export"] ?? null) || CoreExtension::getAttribute($this->env, $this->source, ($context["login"] ?? null), "isAdmin", [], "method", false, false, false, 58)) || CoreExtension::getAttribute($this->env, $this->source, ($context["login"] ?? null), "isStaff", [], "method", false, false, false, 58))) {
            // line 59
            yield "            <div class=\"ui basic fitted segment\">
                <div class=\"ui wrapping spaced buttons\">
        ";
            // line 61
            if ((CoreExtension::getAttribute($this->env, $this->source, ($context["group"] ?? null), "getId", [], "method", false, false, false, 61) && ($context["can_export"] ?? null))) {
                // line 62
                yield "                    <a href=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("pdf_groups"), "html", null, true);
                yield "\" class=\"ui labeled icon fluid button tooltip\" title=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("Export all groups and their members as PDF"), "html", null, true);
                yield "\">
                        <i class=\"file pdf red labeled icon\" aria-hidden=\"true\"></i>
                        ";
                // line 64
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("All groups PDF"), "html", null, true);
                yield "
                    </a>
        ";
            }
            // line 67
            yield "        ";
            if ((CoreExtension::getAttribute($this->env, $this->source, ($context["login"] ?? null), "isAdmin", [], "method", false, false, false, 67) || CoreExtension::getAttribute($this->env, $this->source, ($context["login"] ?? null), "isStaff", [], "method", false, false, false, 67))) {
                // line 68
                yield "                    <a href=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("add_group", ["name" => "NAME"]), "html", null, true);
                yield "\" class=\"ui labeled icon fluid button tooltip\" id=\"newgroup\">
                        <i class=\"plus circle green icon\" aria-hidden=\"true\"></i>
                        ";
                // line 70
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("New group"), "html", null, true);
                yield "
                    </a>
        ";
            }
            // line 73
            yield "                </div>
            </div>
    ";
        }
        // line 76
        yield "        </div>
        <div class=\"thirteen wide column\">
    ";
        // line 78
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["group"] ?? null), "getId", [], "method", false, false, false, 78)) {
            // line 79
            yield "            ";
            yield from             $this->loadTemplate("elements/group.html.twig", "pages/groups_list.html.twig", 79)->unwrap()->yield(CoreExtension::merge($context, ["group" => ($context["group"] ?? null), "parent_groups" => ($context["parent_groups"] ?? null)]));
            // line 80
            yield "    ";
        } else {
            // line 81
            yield "            <div class=\"ui small message\">
                ";
            // line 82
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("no group"), "html", null, true);
            yield "
            </div>
    ";
        }
        // line 85
        yield "        </div>
    </div>
";
        return; yield '';
    }

    // line 89
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 90
        yield "<script type=\"text/javascript\">
    \$(function() {
        var _mode;

        ";
        // line 95
        yield "        \$('#newgroup').click(function(){
            var _href = \$(this).attr('href');
            var _input = '<div class=\"ui labeled input\"><div class=\"ui label\">";
        // line 97
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("Name:"), "html", null, true);
        yield "</div><input type=\"text\" name=\"new_group_name\" id=\"new_group_name\" required/></div>';
            \$('body').modal({
                title: '";
        // line 99
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("Add a new group"), "html", null, true);
        yield "',
                class: 'tiny',
                content: _input,
                onApprove: function() {
                    var _name = \$('#new_group_name').val();
                    if ( _name != '' ) {
                        //check uniqueness
                        \$.ajax({
                            url: '";
        // line 107
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("ajax_groupname_unique"), "html", null, true);
        yield "',
                            type: \"POST\",
                            data: {
                                ajax: true,
                                gname: _name
                            },
                            ";
        // line 113
        yield from         $this->loadTemplate("elements/js/loader.js.twig", "pages/groups_list.html.twig", 113)->unwrap()->yield(CoreExtension::merge($context, ["selector" => ".segment:not(.tab).loader_selector", "loader" => "button"]));
        // line 116
        yield ",
                            success: function(res){
                                if ( res.success == false ) {
                                    if (res.message) {
                                        ";
        // line 120
        yield from         $this->loadTemplate("elements/js/modal.js.twig", "pages/groups_list.html.twig", 120)->unwrap()->yield(CoreExtension::merge($context, ["modal_title_twig" => $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("An error occurred :("), "js"), "modal_content" => "res.message", "modal_class" => "tiny", "modal_content_class" => "scrolling", "modal_deny_only" => true, "modal_cancel_text" => $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("Close"), "js"), "modal_classname" => "redalert"]));
        // line 129
        yield "                                    } else {
                                        ";
        // line 130
        yield from         $this->loadTemplate("elements/js/modal.js.twig", "pages/groups_list.html.twig", 130)->unwrap()->yield(CoreExtension::merge($context, ["modal_title_twig" => $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("The group name you have requested already exists in the database."), "js"), "modal_without_content" => true, "modal_class" => "mini", "modal_deny_only" => true, "modal_cancel_text" => $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("Close"), "js"), "modal_classname" => "redalert"]));
        // line 138
        yield "                                    }
                                } else {
                                    \$(location).attr('href', _href.replace('NAME', _name));
                                }
                            },
                            error: function() {
                                ";
        // line 144
        yield from         $this->loadTemplate("elements/js/modal.js.twig", "pages/groups_list.html.twig", 144)->unwrap()->yield(CoreExtension::merge($context, ["modal_title_twig" => $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("An error occurred checking name uniqueness :("), "js"), "modal_without_content" => true, "modal_class" => "mini", "modal_deny_only" => true, "modal_cancel_text" => $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("Close"), "js"), "modal_classname" => "redalert"]));
        // line 152
        yield "                            }
                        });
                    } else {
                        ";
        // line 155
        yield from         $this->loadTemplate("elements/js/modal.js.twig", "pages/groups_list.html.twig", 155)->unwrap()->yield(CoreExtension::merge($context, ["modal_title_twig" => $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("Please provide a group name"), "js"), "modal_without_content" => true, "modal_class" => "mini", "modal_deny_only" => true, "modal_cancel_text" => $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("Close"), "js"), "modal_classname" => "redalert"]));
        // line 163
        yield "                        return false;
                    }
                },
                actions: [{
                    text    : '";
        // line 167
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("Create"), "js"), "html", null, true);
        yield "',
                    icon    : 'plus',
                    class   : 'icon labeled green approve'
                },{
                    text    : '";
        // line 171
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("Close"), "js"), "html", null, true);
        yield "',
                    icon    : 'times',
                    class   : 'icon labeled deny'
                },]
            }).modal('show');
            return false;
        });

        ";
        // line 180
        yield "        var _btnuser_mapping = function(){
            \$('#btnusers_small, #btnmanagers_small').click(function(){
                _mode = (\$(this).attr('id') == 'btnusers_small') ? 'members' : 'managers';
                var _persons = \$('input[name=\"' + _mode + '[]\"]').map(function() {
                    return \$(this).val();
                }).get();
                \$.ajax({
                    url: '";
        // line 187
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("ajaxMembers"), "html", null, true);
        yield "',
                    type: \"POST\",
                    data: {
                        multiple: true,
                        from: 'groups',
                        gid: \$('#id_group').val(),
                        mode: _mode,
                        members: _persons
                    },
                    ";
        // line 196
        yield from         $this->loadTemplate("elements/js/loader.js.twig", "pages/groups_list.html.twig", 196)->unwrap()->yield(CoreExtension::merge($context, ["loader" => "action", "selector" => ".tab.segment.active .loader_selector"]));
        // line 199
        yield ",
                    success: function(res){
                        _members_dialog(res, _mode);
                    },
                    error: function() {
                        ";
        // line 204
        yield from         $this->loadTemplate("elements/js/modal.js.twig", "pages/groups_list.html.twig", 204)->unwrap()->yield(CoreExtension::merge($context, ["modal_title_twig" => $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("An error occurred displaying members interface :("), "js"), "modal_without_content" => true, "modal_class" => "mini", "modal_deny_only" => true, "modal_cancel_text" => $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("Close"), "js"), "modal_classname" => "redalert"]));
        // line 212
        yield "                    }
                });
                return false;
            });
        }
        _btnuser_mapping();

        var _members_dialog = function(res, mode){
            var _title = '";
        // line 220
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("Group members selection"), "js"), "html", null, true);
        yield "';
            if ( mode == 'managers' ) {
                _title = '";
        // line 222
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("Group managers selection"), "js"), "html", null, true);
        yield "';
            }
            ";
        // line 224
        yield from         $this->loadTemplate("elements/js/modal.js.twig", "pages/groups_list.html.twig", 224)->unwrap()->yield(CoreExtension::merge($context, ["modal_title" => "_title", "modal_content" => "res", "modal_class" => "members-selection fullscreen", "modal_content_class" => "scrolling", "modal_deny_only" => true, "modal_cancel_text" => $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("Close"), "js"), "modal_other_options" => ["autofocus" => false]]));
        // line 235
        yield "            _members_ajax_mapper(res, \$('#group_id').val(), mode);

        }

        var _members_ajax_mapper = function(res, gid, mode){
            \$('#btnvalid').click(function(){
                //store entities in the original page so they can be saved
                var _container;
                if ( mode == 'managers' ) {
                    _container = \$('#group_managers');
                } else {
                    _container = \$('#group_members');
                }
                var _persons = new Array();
                \$('li[id^=\"member_\"]').each(function(){
                    _persons[_persons.length] = this.id.substring(7, this.id.length);
                });
                if ( _persons.length == 0 ) {
                    var _persons = '';
                }
                \$.ajax({
                    url: '";
        // line 256
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("ajaxGroupMembers"), "html", null, true);
        yield "',
                    type: \"POST\",
                    data: {
                        persons: _persons,
                        person_mode: mode
                    },
                    ";
        // line 262
        yield from         $this->loadTemplate("elements/js/loader.js.twig", "pages/groups_list.html.twig", 262)->unwrap()->yield(CoreExtension::merge($context, ["selector" => "#btnvalid", "loader" => "button"]));
        // line 265
        yield ",
                    success: function(res){
                        var _modified = '<div class=\"ui icon yellow small message with-transition\"><i class=\"exclamation triangle icon\" aria-hidden=\"true\"></i><div class=\"content\">";
        // line 267
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("Items in this list have been modified. Don't forget to save your changes."), "js"), "html", null, true);
        yield "</div></div>';
                        _container.find('.message').remove();
                        if ( res != 0 ) {
                            _container.find('.loader_selector').remove();
                            _container.children('.segment').append(res);
                            _container.children('#group_' + mode + ' .segment').append(_modified);
                        } else {
                            var _emptyselection = '<tbody><tr><td colspan=\"2\"><input type=\"hidden\" name=\"' + mode + '[]\" value=\"\">";
        // line 274
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("No member attached"), "js"), "html", null, true);
        yield "</td></tr></tbody>';
                            _container.find('table.listing tbody').remove();
                            _container.find('table.listing').append(_emptyselection);
                            _container.children('#group_' + mode + ' .segment').append(_modified);
                        }
                        \$('.members-selection').modal('hide');
                        \$('.message.with-transition').transition('flash');
                    },
                    error: function() {
                        ";
        // line 283
        yield from         $this->loadTemplate("elements/js/modal.js.twig", "pages/groups_list.html.twig", 283)->unwrap()->yield(CoreExtension::merge($context, ["modal_title_twig" => $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("An error occurred displaying members interface :("), "js"), "modal_without_content" => true, "modal_class" => "mini", "modal_deny_only" => true, "modal_cancel_text" => $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("Close"), "js"), "modal_classname" => "redalert"]));
        // line 291
        yield "                    }
                });
            });

            //Remap links
            var _none = \$('#none_selected').clone();
            \$('li[id^=\"member_\"]').click(function(){
                \$(this).remove();
                if ( \$('#selected_members ul li').length == 0 ) {
                    \$('#selected_members ul').append(_none);
                }
            });

            \$('#listing tbody tr').click(function(event){
                event.preventDefault();
                var _mlink = \$(this).find('.username_row a');
                var _mid = _mlink[0].href.match(/.*\\/(\\d+)\$/)[1];
                var _mname = _mlink.text();
                \$('#none_selected').remove()
                if ( \$('#member_' + _mid).length == 0 ) {
                    var _li = '<li id=\"member_' + _mid + '\" class=\"item\"><i class=\"ui user minus icon\" aria-hidden=\"true\"></i><span class=\"ui content\">' + _mname + '</span></li>';
                    \$('#selected_members ul').append(_li);
                    \$('#member_' + _mid).click(function(){
                        \$(this).remove();
                        if ( \$('#selected_members ul li').length == 0 ) {
                            \$('#selected_members ul').append(_none);
                        }
                    });
                }
                return false;
            }).css('cursor', 'pointer').attr('title', '";
        // line 321
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("Click on a row to select a member"), "js"), "html", null, true);
        yield "');

            \$('.members-selection .pagination a').click(function(){
                var gid = \$('#the_id').val();
                var _members = new Array();
                \$('li[id^=\"member_\"]').each(function(){
                    _members[_members.length] = this.id.substring(7, this.id.length);
                });

                \$.ajax({
                    url: this.href,
                    type: \"POST\",
                    data: {
                        from: 'groups',
                        gid: gid,
                        members: _members,
                        mode: _mode,
                        multiple: true
                    },
                    ";
        // line 340
        yield from         $this->loadTemplate("elements/js/loader.js.twig", "pages/groups_list.html.twig", 340)->unwrap()->yield(CoreExtension::merge($context, ["loader" => "#listing"]));
        // line 342
        yield ",
                    success: function(res){
                        \$('#listing').remove();
                        var _listing = \$(\$.parseHTML(res)).find('#listing');
                        \$('.members-selection .eleven.wide.column').prepend(_listing);
                        _members_ajax_mapper(res, gid, _mode);
                    },
                    error: function() {
                        ";
        // line 350
        yield from         $this->loadTemplate("elements/js/modal.js.twig", "pages/groups_list.html.twig", 350)->unwrap()->yield(CoreExtension::merge($context, ["modal_title_twig" => $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("An error occurred displaying members interface :("), "js"), "modal_without_content" => true, "modal_class" => "mini", "modal_deny_only" => true, "modal_cancel_text" => $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("Close"), "js"), "modal_classname" => "redalert"]));
        // line 358
        yield "                    }
                });
                return false;
            });
        }

        ";
        // line 364
        yield from         $this->loadTemplate("elements/js/removal.js.twig", "pages/groups_list.html.twig", 364)->unwrap()->yield(CoreExtension::merge($context, ["loader" => "button", "loader_selector" => "#delete", "single_action" => "true"]));
        // line 369
        yield "    });
</script>
";
        return; yield '';
    }

    // line 25
    public function macro_group_item($__login__ = null, $__group__ = null, $__parents__ = null, $__selected__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "login" => $__login__,
            "group" => $__group__,
            "parents" => $__parents__,
            "selected" => $__selected__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        return ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            // line 26
            yield "    <div class=\"";
            if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, ($context["group"] ?? null), "getGroups", [], "method", false, false, false, 26)) > 0)) {
                yield "title";
                if (CoreExtension::inFilter(CoreExtension::getAttribute($this->env, $this->source, ($context["group"] ?? null), "getName", [], "method", false, false, false, 26), ($context["parents"] ?? null))) {
                    yield " active";
                }
            } else {
                yield "nochild";
            }
            yield "\">
        <i class=\"";
            // line 27
            if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, ($context["group"] ?? null), "getGroups", [], "method", false, false, false, 27)) > 0)) {
                yield "dropdown";
            } else {
                yield "empty";
            }
            yield " icon\" aria-hidden=\"true\"></i>
        <a class=\"ui";
            // line 28
            if ((CoreExtension::getAttribute($this->env, $this->source, ($context["group"] ?? null), "getName", [], "method", false, false, false, 28) == ($context["selected"] ?? null))) {
                yield " primary";
            }
            if ( !CoreExtension::getAttribute($this->env, $this->source, ($context["login"] ?? null), "isGroupManager", [CoreExtension::getAttribute($this->env, $this->source, ($context["group"] ?? null), "getId", [], "method", false, false, false, 28)], "method", false, false, false, 28)) {
                yield " disabled";
            }
            yield " label\" href=\"";
            if (CoreExtension::getAttribute($this->env, $this->source, ($context["login"] ?? null), "isGroupManager", [CoreExtension::getAttribute($this->env, $this->source, ($context["group"] ?? null), "getId", [], "method", false, false, false, 28)], "method", false, false, false, 28)) {
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("groups", ["id" => CoreExtension::getAttribute($this->env, $this->source, ($context["group"] ?? null), "getId", [], "method", false, false, false, 28)]), "html", null, true);
            } else {
                yield "#";
            }
            yield "\">
            ";
            // line 29
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["group"] ?? null), "getName", [], "method", false, false, false, 29), "html", null, true);
            yield "
        </a>
    </div>
    ";
            // line 32
            if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, ($context["group"] ?? null), "getGroups", [], "method", false, false, false, 32)) > 0)) {
                // line 33
                yield "    <div class=\"content";
                if (CoreExtension::inFilter(CoreExtension::getAttribute($this->env, $this->source, ($context["group"] ?? null), "getName", [], "method", false, false, false, 33), ($context["parents"] ?? null))) {
                    yield " active";
                }
                yield "\">
        <div class=\"accordion\">
        ";
                // line 35
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, ($context["group"] ?? null), "getGroups", [], "method", false, false, false, 35));
                foreach ($context['_seq'] as $context["_key"] => $context["child_group"]) {
                    // line 36
                    yield "            ";
                    yield CoreExtension::callMacro($macros["_self"], "macro_group_item", [($context["login"] ?? null), $context["child_group"], ($context["parents"] ?? null), ($context["selected"] ?? null)], 36, $context, $this->getSourceContext());
                    yield "
        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child_group'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 38
                yield "        </div>
    </div>
    ";
            }
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "pages/groups_list.html.twig";
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
        return array (  539 => 38,  530 => 36,  526 => 35,  518 => 33,  516 => 32,  510 => 29,  495 => 28,  487 => 27,  475 => 26,  460 => 25,  453 => 369,  451 => 364,  443 => 358,  441 => 350,  431 => 342,  429 => 340,  407 => 321,  375 => 291,  373 => 283,  361 => 274,  351 => 267,  347 => 265,  345 => 262,  336 => 256,  313 => 235,  311 => 224,  306 => 222,  301 => 220,  291 => 212,  289 => 204,  282 => 199,  280 => 196,  268 => 187,  259 => 180,  248 => 171,  241 => 167,  235 => 163,  233 => 155,  228 => 152,  226 => 144,  218 => 138,  216 => 130,  213 => 129,  211 => 120,  205 => 116,  203 => 113,  194 => 107,  183 => 99,  178 => 97,  174 => 95,  168 => 90,  164 => 89,  157 => 85,  151 => 82,  148 => 81,  145 => 80,  142 => 79,  140 => 78,  136 => 76,  131 => 73,  125 => 70,  119 => 68,  116 => 67,  110 => 64,  102 => 62,  100 => 61,  96 => 59,  93 => 58,  88 => 55,  79 => 53,  75 => 52,  68 => 49,  66 => 48,  62 => 46,  59 => 45,  56 => 44,  52 => 43,  47 => 21,  45 => 23,  38 => 21,);
    }

    public function getSourceContext()
    {
        return new Source("", "pages/groups_list.html.twig", "/var/www/galette/templates/default/pages/groups_list.html.twig");
    }
}
