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

/* @PluginGaletteObjectslend/preferences.html.twig */
class __TwigTemplate_ff0ab5540fe582028835b310a4bc6911 extends Template
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
        $this->parent = $this->loadTemplate("page.html.twig", "@PluginGaletteObjectslend/preferences.html.twig", 21);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 47
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 48
        yield "<form action=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("store_objectlend_preferences"), "html", null, true);
        yield "\" method=\"post\" class=\"ui form\">
    <div class=\"ui stackable pointing inverted menu tabbed\">
        <a class=\"item active\" data-tab=\"plugin_preferences\">";
        // line 50
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("Plugin preferences", "objectslend"), "html", null, true);
        yield "</a>
        <a class=\"item\" data-tab=\"plugin_images\">";
        // line 51
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("Images related", "objectslend"), "html", null, true);
        yield "</a>
        <a class=\"item\" data-tab=\"plugin_display\">";
        // line 52
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("Display preferences", "objectslend"), "html", null, true);
        yield "</a>
    </div>

    <div class=\"ui active tab segment\" data-tab=\"plugin_preferences\">
        <div class=\"ui stackable grid\">
            <div class=\"column\">
                ";
        // line 58
        $context["yesno_boxes"] = [["label" => $this->env->getFunction('_T')->getCallable()("Members can borrow:", "objectslend"), "name" => "ENABLE_MEMBER_RENT_OBJECT", "tip" => $this->env->getFunction('_T')->getCallable()("Allow a member (not staff neither admin) to borrow an object. If set to 'No', only admin and staff members can access the 'Take object' page", "objectslend"), "yes" => ["name" => "yes_memberborrow", "checked" => (CoreExtension::getAttribute($this->env, $this->source,         // line 65
($context["lendsprefs"] ?? null), "ENABLE_MEMBER_RENT_OBJECT", [], "any", false, false, false, 65) == "1")], "no" => ["name" => "no_memberborrow", "checked" => (CoreExtension::getAttribute($this->env, $this->source,         // line 69
($context["lendsprefs"] ?? null), "ENABLE_MEMBER_RENT_OBJECT", [], "any", false, false, false, 69) == "0")]], ["label" => $this->env->getFunction('_T')->getCallable()("Generate contribution:", "objectslend"), "name" => "AUTO_GENERATE_CONTRIBUTION", "tip" => $this->env->getFunction('_T')->getCallable()("Automatically generate a contribution for the member of the amount of the rental price of the object", "objectslend"), "yes" => ["name" => "yes_contrib", "checked" => (CoreExtension::getAttribute($this->env, $this->source,         // line 78
($context["lendsprefs"] ?? null), "AUTO_GENERATE_CONTRIBUTION", [], "any", false, false, false, 78) == "1")], "no" => ["name" => "no_contrib", "checked" => (CoreExtension::getAttribute($this->env, $this->source,         // line 82
($context["lendsprefs"] ?? null), "AUTO_GENERATE_CONTRIBUTION", [], "any", false, false, false, 82) == "0")]]];
        // line 86
        yield "
                ";
        // line 87
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["yesno_boxes"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["yesno_box"]) {
            // line 88
            yield "                    ";
            yield CoreExtension::callMacro($macros["_self"], "macro_yesno_checkbox", [CoreExtension::getAttribute($this->env, $this->source,             // line 89
$context["yesno_box"], "label", [], "any", false, false, false, 89), CoreExtension::getAttribute($this->env, $this->source,             // line 90
$context["yesno_box"], "name", [], "any", false, false, false, 90), CoreExtension::getAttribute($this->env, $this->source,             // line 91
$context["yesno_box"], "tip", [], "any", false, false, false, 91), CoreExtension::getAttribute($this->env, $this->source,             // line 92
$context["yesno_box"], "yes", [], "any", false, false, false, 92), CoreExtension::getAttribute($this->env, $this->source,             // line 93
$context["yesno_box"], "no", [], "any", false, false, false, 93)], 88, $context, $this->getSourceContext());
            // line 94
            yield "
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['yesno_box'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 96
        yield "
                ";
        // line 97
        $context["ctype_list_values"] = [$this->env->getFunction('_T')->getCallable()("Choose a contribution type", "objectslend")];
        // line 98
        yield "                ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["ctypes"] ?? null));
        foreach ($context['_seq'] as $context["id"] => $context["ctype"]) {
            // line 99
            yield "                    ";
            $context["ctype_list_values"] = (($context["ctype_list_values"] ?? null) + [$context["id"] => $context["ctype"]]);
            // line 100
            yield "                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['id'], $context['ctype'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 101
        yield "
                ";
        // line 103
        yield "                <div class=\"field";
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["lendsprefs"] ?? null), "AUTO_GENERATE_CONTRIBUTION", [], "any", false, false, false, 103) == "1")) {
            yield " required";
        }
        yield "\">
                    <label for=\"contribution_type\">";
        // line 104
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("Contribution type:"), "html", null, true);
        yield "</label>
                    <div id=\"contribution_type\" class=\"ui dropdown selection\">
                        ";
        // line 106
        $context["selectedid"] = CoreExtension::getAttribute($this->env, $this->source, ($context["lendsprefs"] ?? null), "GENERATED_CONTRIBUTION_TYPE_ID", [], "any", false, false, false, 106);
        // line 107
        yield "                        <input id=\"id_type_cotis_input\" type=\"hidden\" name=\"id_type_cotis\" value=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["selectedid"] ?? null), "html", null, true);
        yield "\"";
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["lendsprefs"] ?? null), "AUTO_GENERATE_CONTRIBUTION", [], "any", false, false, false, 107) == "1")) {
            yield " required=\"required\"";
        }
        yield ">
                        <i class=\"dropdown icon\"></i>
                        <div class=\"text\">";
        // line 109
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["type_cotis_options"] ?? null));
        foreach ($context['_seq'] as $context["key"] => $context["values"]) {
            if (($context["key"] == ($context["selectedid"] ?? null))) {
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["values"], "label", [], "any", false, false, false, 109), "html", null, true);
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['values'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        yield "</div>
                        <div class=\"menu\">
                            ";
        // line 111
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["type_cotis_options"] ?? null));
        foreach ($context['_seq'] as $context["key"] => $context["values"]) {
            // line 112
            yield "                                <div class=\"item";
            if (($context["key"] == ($context["selectedid"] ?? null))) {
                yield " active selected";
            }
            yield "\" data-value=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["key"], "html", null, true);
            yield "\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["values"], "label", [], "any", false, false, false, 112), "html", null, true);
            yield "</div>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['values'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 114
        yield "                        </div>
                    </div>
                </div>

                ";
        // line 118
        yield from         $this->loadTemplate("components/forms/text.html.twig", "@PluginGaletteObjectslend/preferences.html.twig", 118)->unwrap()->yield(CoreExtension::merge($context, ["id" => "contrib_text", "name" => "GENERATED_CONTRIB_INFO_TEXT", "value" => CoreExtension::getAttribute($this->env, $this->source,         // line 121
($context["lendsprefs"] ?? null), "GENERATED_CONTRIB_INFO_TEXT", [], "any", false, false, false, 121), "label" => $this->env->getFunction('_T')->getCallable()("Contribution text:", "objectslend"), "title" => $this->env->getFunction('_T')->getCallable()("Comment text to add on generated contribution", "objectslend"), "tip_html" => $this->env->getFunction('_T')->getCallable()("Comment text to add on generated contribution. Automatically replaced values (put into curly brackets): <br/>- NAME: Name<br/>- DESCRIPTION: Description<br/>- SERIAL_NUMBER: Serial number<br/>- PRICE: Price<br/>- RENT_PRICE: Borrow price<br/>- WEIGHT: Weight<br/>- DIMENSION: Dimensions", "objectslend"), "required" => (CoreExtension::getAttribute($this->env, $this->source,         // line 125
($context["lendsprefs"] ?? null), "AUTO_GENERATE_CONTRIBUTION", [], "any", false, false, false, 125) == "1"), "component_class" => "field"]));
        // line 128
        yield "
            </div>
        </div>
    </div>

    <div class=\"ui tab segment\" data-tab=\"plugin_images\">
        <div class=\"ui stackable grid\">
            <div class=\"column\">
                ";
        // line 136
        yield from         $this->loadTemplate("components/forms/number.html.twig", "@PluginGaletteObjectslend/preferences.html.twig", 136)->unwrap()->yield(CoreExtension::merge($context, ["id" => "max_thumb_height", "name" => "THUMB_MAX_HEIGHT", "value" => CoreExtension::getAttribute($this->env, $this->source,         // line 139
($context["lendsprefs"] ?? null), "THUMB_MAX_HEIGHT", [], "any", false, false, false, 139), "label" => $this->env->getFunction('_T')->getCallable()("Max thumb height (in px)", "objectslend")]));
        // line 142
        yield "
                ";
        // line 143
        yield from         $this->loadTemplate("components/forms/number.html.twig", "@PluginGaletteObjectslend/preferences.html.twig", 143)->unwrap()->yield(CoreExtension::merge($context, ["id" => "max_thumb_width", "name" => "THUMB_MAX_WIDTH", "value" => CoreExtension::getAttribute($this->env, $this->source,         // line 146
($context["lendsprefs"] ?? null), "THUMB_MAX_WIDTH", [], "any", false, false, false, 146), "label" => $this->env->getFunction('_T')->getCallable()("Max thumb width (in px)", "objectslend")]));
        // line 149
        yield "
                ";
        // line 150
        $context["yesno_boxes"] = [["label" => $this->env->getFunction('_T')->getCallable()("Images in lists:", "objectslend"), "name" => "VIEW_THUMBNAIL", "title" => $this->env->getFunction('_T')->getCallable()("Display images in objects and categories lists", "objectslend"), "tip" => $this->env->getFunction('_T')->getCallable()("Display images in objects and categories lists", "objectslend"), "yes" => ["name" => "yes_view_thumb", "checked" => (CoreExtension::getAttribute($this->env, $this->source,         // line 158
($context["lendsprefs"] ?? null), "VIEW_THUMBNAIL", [], "any", false, false, false, 158) == "1")], "no" => ["name" => "no_view_thumb", "checked" => (CoreExtension::getAttribute($this->env, $this->source,         // line 162
($context["lendsprefs"] ?? null), "VIEW_THUMBNAIL", [], "any", false, false, false, 162) == "0")]], ["label" => $this->env->getFunction('_T')->getCallable()("Enable fullsize:", "objectslend"), "name" => "VIEW_FULLSIZE", "title" => $this->env->getFunction('_T')->getCallable()("Show fullsize image or just thumbs", "objectslend"), "tip" => $this->env->getFunction('_T')->getCallable()("Will permit to see fullsize image clicking on thumbnails.<br/>If disabled, only thumbnails will be displayed, but full images are still kept.", "objectslend"), "yes" => ["name" => "yes_view_fullsize", "checked" => (CoreExtension::getAttribute($this->env, $this->source,         // line 172
($context["lendsprefs"] ?? null), "VIEW_FULLSIZE", [], "any", false, false, false, 172) == "1")], "no" => ["name" => "no_view_fullsize", "checked" => (CoreExtension::getAttribute($this->env, $this->source,         // line 176
($context["lendsprefs"] ?? null), "VIEW_FULLSIZE", [], "any", false, false, false, 176) == "0")]]];
        // line 180
        yield "
                ";
        // line 181
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["yesno_boxes"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["yesno_box"]) {
            // line 182
            yield "                    ";
            yield CoreExtension::callMacro($macros["_self"], "macro_yesno_checkbox", [CoreExtension::getAttribute($this->env, $this->source,             // line 183
$context["yesno_box"], "label", [], "any", false, false, false, 183), CoreExtension::getAttribute($this->env, $this->source,             // line 184
$context["yesno_box"], "name", [], "any", false, false, false, 184), CoreExtension::getAttribute($this->env, $this->source,             // line 185
$context["yesno_box"], "tip", [], "any", false, false, false, 185), CoreExtension::getAttribute($this->env, $this->source,             // line 186
$context["yesno_box"], "yes", [], "any", false, false, false, 186), CoreExtension::getAttribute($this->env, $this->source,             // line 187
$context["yesno_box"], "no", [], "any", false, false, false, 187)], 182, $context, $this->getSourceContext());
            // line 188
            yield "
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['yesno_box'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 190
        yield "            </div>
        </div>
    </div>

    <div class=\"ui tab segment\" data-tab=\"plugin_display\">
        <div class=\"ui stackable grid\">
            <div class=\"column\">
                ";
        // line 197
        $context["yesno_boxes"] = [["label" => $this->env->getFunction('_T')->getCallable()("View category:", "objectslend"), "name" => "VIEW_CATEGORY", "yes" => ["name" => "yes_view_category", "checked" => (CoreExtension::getAttribute($this->env, $this->source,         // line 203
($context["lendsprefs"] ?? null), "VIEW_CATEGORY", [], "any", false, false, false, 203) == "1")], "no" => ["name" => "no_view_category", "checked" => (CoreExtension::getAttribute($this->env, $this->source,         // line 207
($context["lendsprefs"] ?? null), "VIEW_CATEGORY", [], "any", false, false, false, 207) == "0")]], ["label" => $this->env->getFunction('_T')->getCallable()("View forecast return date:", "objectslend"), "name" => "VIEW_DATE_FORECAST", "yes" => ["name" => "yes_view_dateforecast", "checked" => (CoreExtension::getAttribute($this->env, $this->source,         // line 215
($context["lendsprefs"] ?? null), "VIEW_DATE_FORECAST", [], "any", false, false, false, 215) == "1")], "no" => ["name" => "no_view_dateforecats", "checked" => (CoreExtension::getAttribute($this->env, $this->source,         // line 219
($context["lendsprefs"] ?? null), "VIEW_DATE_FORECAST", [], "any", false, false, false, 219) == "0")]], ["label" => $this->env->getFunction('_T')->getCallable()("View description", "objectslend"), "name" => "VIEW_DESCRIPTION", "yes" => ["name" => "yes_view_description", "checked" => (CoreExtension::getAttribute($this->env, $this->source,         // line 227
($context["lendsprefs"] ?? null), "VIEW_DESCRIPTION", [], "any", false, false, false, 227) == "1")], "no" => ["name" => "no_view_description", "checked" => (CoreExtension::getAttribute($this->env, $this->source,         // line 231
($context["lendsprefs"] ?? null), "VIEW_DESCRIPTION", [], "any", false, false, false, 231) == "0")]], ["label" => $this->env->getFunction('_T')->getCallable()("View dimensions:", "objectslend"), "name" => "VIEW_DIMENSION", "yes" => ["name" => "yes_view_dimension", "checked" => (CoreExtension::getAttribute($this->env, $this->source,         // line 239
($context["lendsprefs"] ?? null), "VIEW_DIMENSION", [], "any", false, false, false, 239) == "1")], "no" => ["name" => "no_view_dimension", "checked" => (CoreExtension::getAttribute($this->env, $this->source,         // line 243
($context["lendsprefs"] ?? null), "VIEW_DIMENSION", [], "any", false, false, false, 243) == "0")]], ["label" => $this->env->getFunction('_T')->getCallable()("View borrow price:", "objectslend"), "name" => "VIEW_LEND_PRICE", "yes" => ["name" => "yes_view_lendprice", "checked" => (CoreExtension::getAttribute($this->env, $this->source,         // line 251
($context["lendsprefs"] ?? null), "VIEW_LEND_PRICE", [], "any", false, false, false, 251) == "1")], "no" => ["name" => "no_view_lendprice", "checked" => (CoreExtension::getAttribute($this->env, $this->source,         // line 255
($context["lendsprefs"] ?? null), "VIEW_LEND_PRICE", [], "any", false, false, false, 255) == "0")]], ["label" => $this->env->getFunction('_T')->getCallable()("View price sum:", "objectslend"), "name" => "VIEW_LIST_PRICE_SUM", "tip" => $this->env->getFunction('_T')->getCallable()("View the objects buy price sum on the list under the category", "objectslend"), "yes" => ["name" => "yes_view_pricesum", "checked" => (CoreExtension::getAttribute($this->env, $this->source,         // line 264
($context["lendsprefs"] ?? null), "VIEW_LIST_PRICE_SUM", [], "any", false, false, false, 264) == "1")], "no" => ["name" => "no_view_pricesum", "checked" => (CoreExtension::getAttribute($this->env, $this->source,         // line 268
($context["lendsprefs"] ?? null), "VIEW_LIST_PRICE_SUM", [], "any", false, false, false, 268) == "0")]], ["label" => $this->env->getFunction('_T')->getCallable()("View buy price:", "objectslend"), "name" => "VIEW_PRICE", "yes" => ["name" => "yes_view_price", "checked" => (CoreExtension::getAttribute($this->env, $this->source,         // line 276
($context["lendsprefs"] ?? null), "VIEW_PRICE", [], "any", false, false, false, 276) == "1")], "no" => ["name" => "no_view_price", "checked" => (CoreExtension::getAttribute($this->env, $this->source,         // line 280
($context["lendsprefs"] ?? null), "VIEW_PRICE", [], "any", false, false, false, 280) == "0")]], ["label" => $this->env->getFunction('_T')->getCallable()("View serial number:", "objectslend"), "name" => "VIEW_SERIAL", "yes" => ["name" => "yes_view_serial", "checked" => (CoreExtension::getAttribute($this->env, $this->source,         // line 288
($context["lendsprefs"] ?? null), "VIEW_SERIAL", [], "any", false, false, false, 288) == "1")], "no" => ["name" => "no_view_serial", "checked" => (CoreExtension::getAttribute($this->env, $this->source,         // line 292
($context["lendsprefs"] ?? null), "VIEW_SERIAL", [], "any", false, false, false, 292) == "0")]], ["label" => $this->env->getFunction('_T')->getCallable()("View weight", "objectslend"), "name" => "VIEW_WEIGHT", "yes" => ["name" => "yes_view_weight", "checked" => (CoreExtension::getAttribute($this->env, $this->source,         // line 300
($context["lendsprefs"] ?? null), "VIEW_WEIGHT", [], "any", false, false, false, 300) == "1")], "no" => ["name" => "no_view_weight", "checked" => (CoreExtension::getAttribute($this->env, $this->source,         // line 304
($context["lendsprefs"] ?? null), "VIEW_WEIGHT", [], "any", false, false, false, 304) == "0")]]];
        // line 309
        yield "
                ";
        // line 310
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["yesno_boxes"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["yesno_box"]) {
            // line 311
            yield "                    ";
            yield CoreExtension::callMacro($macros["_self"], "macro_yesno_checkbox", [CoreExtension::getAttribute($this->env, $this->source,             // line 312
$context["yesno_box"], "label", [], "any", false, false, false, 312), CoreExtension::getAttribute($this->env, $this->source,             // line 313
$context["yesno_box"], "name", [], "any", false, false, false, 313), (((CoreExtension::getAttribute($this->env, $this->source,             // line 314
$context["yesno_box"], "tip", [], "any", true, true, false, 314) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, $context["yesno_box"], "tip", [], "any", false, false, false, 314)))) ? (CoreExtension::getAttribute($this->env, $this->source, $context["yesno_box"], "tip", [], "any", false, false, false, 314)) : (null)), CoreExtension::getAttribute($this->env, $this->source,             // line 315
$context["yesno_box"], "yes", [], "any", false, false, false, 315), CoreExtension::getAttribute($this->env, $this->source,             // line 316
$context["yesno_box"], "no", [], "any", false, false, false, 316)], 311, $context, $this->getSourceContext());
            // line 317
            yield "
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['yesno_box'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 319
        yield "            </div>
        </div>
    </div>

    <div class=\"ui basic center aligned segment\">
        <button type=\"submit\" class=\"ui labeled icon primary button action\">
            <i class=\"save icon\"></i> ";
        // line 325
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("Save"), "html", null, true);
        yield "
        </button>
    </div>
    ";
        // line 328
        yield from         $this->loadTemplate("components/forms/csrf.html.twig", "@PluginGaletteObjectslend/preferences.html.twig", 328)->unwrap()->yield($context);
        // line 329
        yield "</form>
";
        return; yield '';
    }

    // line 23
    public function macro_yesno_checkbox($__label__ = null, $__name__ = null, $__tip__ = null, $__yes__ = null, $__no__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "label" => $__label__,
            "name" => $__name__,
            "tip" => $__tip__,
            "yes" => $__yes__,
            "no" => $__no__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        return ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            // line 24
            yield "    <div class=\"field\">
        <div class=\"inline fields\">
            <label title=\"";
            // line 26
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["tip"] ?? null));
            yield "\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["label"] ?? null), "html", null, true);
            yield "
    ";
            // line 27
            if ( !(null === ($context["tip"] ?? null))) {
                // line 28
                yield "                <i class=\"circular inverted primary small icon info tooltip\" data-html=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["tip"] ?? null));
                yield "\"></i>
    ";
            }
            // line 30
            yield "            </label>
            <div class=\"field inline\">
                <div class=\"ui radio checkbox\">
                    <input type=\"radio\" name=\"";
            // line 33
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["name"] ?? null), "html", null, true);
            yield "\" id=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["yes"] ?? null), "name", [], "any", false, false, false, 33), "html", null, true);
            yield "\" value=\"1\" ";
            if (CoreExtension::getAttribute($this->env, $this->source, ($context["yes"] ?? null), "checked", [], "any", false, false, false, 33)) {
                yield "checked=\"checked\"";
            }
            yield "/>
                    <label for=\"";
            // line 34
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["yes"] ?? null), "name", [], "any", false, false, false, 34), "html", null, true);
            yield "\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("Yes"), "html", null, true);
            yield "</label>
                </div>
            </div>
            <div class=\"field inline\">
                <div class=\"ui radio checkbox\">
                    <input type=\"radio\" name=\"";
            // line 39
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["name"] ?? null), "html", null, true);
            yield "\" id=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["no"] ?? null), "name", [], "any", false, false, false, 39), "html", null, true);
            yield "\" value=\"0\" ";
            if (CoreExtension::getAttribute($this->env, $this->source, ($context["no"] ?? null), "checked", [], "any", false, false, false, 39)) {
                yield "checked=\"checked\"";
            }
            yield "/>
                    <label for=\"";
            // line 40
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["no"] ?? null), "name", [], "any", false, false, false, 40), "html", null, true);
            yield "\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("No"), "html", null, true);
            yield "</label>
                </div>
            </div>
        </div>
    </div>
";
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@PluginGaletteObjectslend/preferences.html.twig";
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
        return array (  384 => 40,  374 => 39,  364 => 34,  354 => 33,  349 => 30,  343 => 28,  341 => 27,  335 => 26,  331 => 24,  315 => 23,  309 => 329,  307 => 328,  301 => 325,  293 => 319,  286 => 317,  284 => 316,  283 => 315,  282 => 314,  281 => 313,  280 => 312,  278 => 311,  274 => 310,  271 => 309,  269 => 304,  268 => 300,  267 => 292,  266 => 288,  265 => 280,  264 => 276,  263 => 268,  262 => 264,  261 => 255,  260 => 251,  259 => 243,  258 => 239,  257 => 231,  256 => 227,  255 => 219,  254 => 215,  253 => 207,  252 => 203,  251 => 197,  242 => 190,  235 => 188,  233 => 187,  232 => 186,  231 => 185,  230 => 184,  229 => 183,  227 => 182,  223 => 181,  220 => 180,  218 => 176,  217 => 172,  216 => 162,  215 => 158,  214 => 150,  211 => 149,  209 => 146,  208 => 143,  205 => 142,  203 => 139,  202 => 136,  192 => 128,  190 => 125,  189 => 121,  188 => 118,  182 => 114,  167 => 112,  163 => 111,  149 => 109,  139 => 107,  137 => 106,  132 => 104,  125 => 103,  122 => 101,  116 => 100,  113 => 99,  108 => 98,  106 => 97,  103 => 96,  96 => 94,  94 => 93,  93 => 92,  92 => 91,  91 => 90,  90 => 89,  88 => 88,  84 => 87,  81 => 86,  79 => 82,  78 => 78,  77 => 69,  76 => 65,  75 => 58,  66 => 52,  62 => 51,  58 => 50,  52 => 48,  48 => 47,  37 => 21,);
    }

    public function getSourceContext()
    {
        return new Source("", "@PluginGaletteObjectslend/preferences.html.twig", "/var/www/galette/plugins/plugin-objectslend/templates/default/preferences.html.twig");
    }
}
