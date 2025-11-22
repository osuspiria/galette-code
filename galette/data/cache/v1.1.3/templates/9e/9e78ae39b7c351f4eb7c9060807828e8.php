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

/* pages/import.html.twig */
class __TwigTemplate_9e7744b737251d4aa6d5042f993875ef extends Template
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
        $this->parent = $this->loadTemplate("page.html.twig", "pages/import.html.twig", 21);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 23
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 24
        yield "            <div class=\"ui icon yellow icon message with-transition\">
                <i class=\"exclamation triangle icon\" aria-hidden=\"true\"></i>
                <div class=\"content\">
                    ";
        // line 27
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("Warning: Don't forget to backup your current database."), "html", null, true);
        yield "
                </div>
            </div>
            <div class=\"ui basic fitted segment\">
                <div class=\"ui styled fluid accordion row\">
                    <div class=\"active title\">
                        <i class=\"jsonly displaynone icon dropdown\" aria-hidden=\"true\"></i>
                        ";
        // line 34
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("Existing files"), "html", null, true);
        yield "
                    </div>
                    <div class=\"active content field\">
                        <form class=\"ui form\" action=\"";
        // line 37
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("doImport"), "html", null, true);
        yield "\" method=\"post\">
";
        // line 38
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), ($context["existing"] ?? null)) > 0)) {
            // line 39
            yield "                            <p>";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("The following files seems ready to import on the disk:"), "html", null, true);
            yield "</p>
                            <table class=\"listing ui celled striped table\">
                                <thead>
                                    <tr>
                                        <th>";
            // line 43
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("Name"), "html", null, true);
            yield "</th>
                                        <th>";
            // line 44
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("Date"), "html", null, true);
            yield "</th>
                                        <th>";
            // line 45
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("Size"), "html", null, true);
            yield "</th>
                                        <th class=\"actions_row\">";
            // line 46
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("Actions"), "html", null, true);
            yield "</th>
                                    </tr>
                                </thead>
                                <tbody>
    ";
            // line 50
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["existing"] ?? null));
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
            foreach ($context['_seq'] as $context["_key"] => $context["import"]) {
                // line 51
                yield "                                    <tr>
                                        <td data-scope=\"row\">
                                            <input type=\"radio\" name=\"import_file\" id=\"file";
                // line 53
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 53), "html", null, true);
                yield "\" value=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["import"], "name", [], "any", false, false, false, 53), "html", null, true);
                yield "\"";
                if ((array_key_exists("import_file", $context) && (($context["import_file"] ?? null) == CoreExtension::getAttribute($this->env, $this->source, $context["import"], "name", [], "any", false, false, false, 53)))) {
                    yield " checked=\"checked\"";
                }
                yield "/>
                                            <label for=\"file";
                // line 54
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 54), "html", null, true);
                yield "\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["import"], "name", [], "any", false, false, false, 54), "html", null, true);
                yield "</label> (<a href=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("getCsv", ["type" => "import", "file" => CoreExtension::getAttribute($this->env, $this->source, $context["import"], "name", [], "any", false, false, false, 54)]), "html", null, true);
                yield "\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("see"), "html", null, true);
                yield "</a>)
                                        </td>
                                        <td data-col-label=\"";
                // line 56
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("Date"), "html", null, true);
                yield "\">
                                            ";
                // line 57
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["import"], "date", [], "any", false, false, false, 57), "html", null, true);
                yield "
                                        </td>
                                        <td data-col-label=\"";
                // line 59
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("Size"), "html", null, true);
                yield "\">
                                            ";
                // line 60
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["import"], "size", [], "any", false, false, false, 60), "html", null, true);
                yield "
                                        </td>
                                        <td class=\"actions_row\">
                                            <a
                                                href=\"";
                // line 64
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("removeCsv", ["type" => "import", "file" => CoreExtension::getAttribute($this->env, $this->source, $context["import"], "name", [], "any", false, false, false, 64)]), "html", null, true);
                yield "\"
                                                class=\"delete\"
                                            >
                                                <i class=\"ui trash red icon tooltip\" aria-hidden=\"true\"></i>
                                                <span class=\"ui special popup\">";
                // line 68
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::replace($this->env->getFunction('_T')->getCallable()("Remove '%file' from disk"), ["%file" => CoreExtension::getAttribute($this->env, $this->source, $context["import"], "name", [], "any", false, false, false, 68)]), "html", null, true);
                yield "</span>
                                            </a>
                                        </td>
                                    </tr>
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
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['import'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 73
            yield "                                </tbody>
                            </table>
                            <div class=\"ui basic center aligned segment\">
                                <div class=\"ui tooltip toggle checkbox\" title=\"";
            // line 76
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("Run the import process, but do *not* store anything in the database"), "html", null, true);
            yield "\">
                                    <label for=\"dryrun\">";
            // line 77
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("Dry run"), "html", null, true);
            yield "</label>
                                    <input type=\"checkbox\" name=\"dryrun\" id=\"dryrun\" value=\"1\"";
            // line 78
            if ((array_key_exists("dryrun", $context) && (($context["dryrun"] ?? null) == true))) {
                yield " checked=\"checked\"";
            }
            yield "/>
                                </div>
                                <button type=\"submit\" name=\"import\" id=\"import\" class=\"ui labeled icon button\">
                                    <i class=\"ui file import blue icon\" aria-hidden=\"true\"></i>
                                    ";
            // line 82
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("Import"), "html", null, true);
            yield "
                                </button>
                                ";
            // line 84
            yield from             $this->loadTemplate("components/forms/csrf.html.twig", "pages/import.html.twig", 84)->unwrap()->yield($context);
            // line 85
            yield "                            </div>
";
        } else {
            // line 87
            yield "                            <p>";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("No import file actually exists."), "html", null, true);
            yield "<br/>";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("Use upload form below to send a new file on server, or copy it directly in the imports directory."), "html", null, true);
            yield "</p>
";
        }
        // line 89
        yield "                        </form>
                    </div>
                </div>
            </div>
            <form class=\"ui form\" action=\"";
        // line 93
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("uploadImportFile"), "html", null, true);
        yield "\" method=\"post\" enctype=\"multipart/form-data\">
                <div class=\"ui basic fitted segment\">
                    <div class=\"ui styled fluid accordion row\">
                        <div class=\"active title\">
                            <i class=\"jsonly displaynone icon dropdown\" aria-hidden=\"true\"></i>
                            ";
        // line 98
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("Upload new file"), "html", null, true);
        yield "
                        </div>
                        <div class=\"active content field\">
                            <div class=\"field wide\">
                                <div class=\"ui file action input\">
                                    <input type=\"file\" name=\"new_file\" accept=\"text/csv\" id=\"new_file\"/>
                                    <label for=\"new_file\" class=\"ui button\">
                                        <i class=\"blue file csv icon\" aria-hidden=\"true\"></i>
                                        ";
        // line 106
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("Choose a file"), "html", null, true);
        yield "
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"ui basic center aligned segment\">
                    <div class=\"ui wrapping spaced buttons\">
                        <button type=\"submit\" name=\"upload\" id=\"upload\" class=\"ui primary labeled icon button\">
                            <i class=\"upload icon\" aria-hidden=\"true\"></i>
                            ";
        // line 117
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("Upload file"), "html", null, true);
        yield "
                        </button>
                        <a
                            href=\"";
        // line 120
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("importModel"), "html", null, true);
        yield "\"
                            class=\"ui labeled icon button\"
                        >
                            <i class=\"cogs icon\" aria-hidden=\"true\"></i>
                            ";
        // line 124
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("Configure import model"), "html", null, true);
        yield "
                        </a>
                        ";
        // line 126
        yield from         $this->loadTemplate("components/forms/csrf.html.twig", "pages/import.html.twig", 126)->unwrap()->yield($context);
        // line 127
        yield "                    </div>
                </div>
            </form>
";
        return; yield '';
    }

    // line 132
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 133
        yield "        <script type=\"text/javascript\">
            \$(function() {
                //bind import click to check if one is selected
                \$('#import').on('click', function(){
                    if ( \$('input[name=import_file]:checked').length > 0 ) {
                        return true;
                    } else {
                        ";
        // line 140
        yield from         $this->loadTemplate("elements/js/modal.js.twig", "pages/import.html.twig", 140)->unwrap()->yield(CoreExtension::merge($context, ["modal_title_twig" => $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("No file selected"), "js"), "modal_content_twig" => $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("Please make sure to select one file to import."), "js"), "modal_class" => "tiny", "modal_deny_only" => true, "modal_cancel_text" => $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("Close"), "js"), "modal_classname" => "redalert"]));
        // line 148
        yield "                        return false;
                    }
                });

                \$('#upload').click(function(){
                    var _selected = \$('#new_file')[0].files.length;
                    if ( _selected == 0 ) {
                        ";
        // line 155
        yield from         $this->loadTemplate("elements/js/modal.js.twig", "pages/import.html.twig", 155)->unwrap()->yield(CoreExtension::merge($context, ["modal_title_twig" => $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("No file selected"), "js"), "modal_content_twig" => $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("Please make sure to select one file to upload."), "js"), "modal_class" => "tiny", "modal_deny_only" => true, "modal_cancel_text" => $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("Close"), "js"), "modal_classname" => "redalert"]));
        // line 163
        yield "                        return false;
                    } else {
                        return true;
                    }
                });
            });
            ";
        // line 169
        yield from         $this->loadTemplate("elements/js/removal.js.twig", "pages/import.html.twig", 169)->unwrap()->yield(CoreExtension::merge($context, ["single_action" => "true"]));
        // line 172
        yield "        </script>
";
        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "pages/import.html.twig";
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
        return array (  338 => 172,  336 => 169,  328 => 163,  326 => 155,  317 => 148,  315 => 140,  306 => 133,  302 => 132,  294 => 127,  292 => 126,  287 => 124,  280 => 120,  274 => 117,  260 => 106,  249 => 98,  241 => 93,  235 => 89,  227 => 87,  223 => 85,  221 => 84,  216 => 82,  207 => 78,  203 => 77,  199 => 76,  194 => 73,  175 => 68,  168 => 64,  161 => 60,  157 => 59,  152 => 57,  148 => 56,  137 => 54,  127 => 53,  123 => 51,  106 => 50,  99 => 46,  95 => 45,  91 => 44,  87 => 43,  79 => 39,  77 => 38,  73 => 37,  67 => 34,  57 => 27,  52 => 24,  48 => 23,  37 => 21,);
    }

    public function getSourceContext()
    {
        return new Source("", "pages/import.html.twig", "/var/www/galette/templates/default/pages/import.html.twig");
    }
}
