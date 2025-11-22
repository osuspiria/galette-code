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

/* pages/charts.html.twig */
class __TwigTemplate_12e7cf9a7b89d2590565453a3b5964d7 extends Template
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
        $this->parent = $this->loadTemplate("page.html.twig", "pages/charts.html.twig", 21);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 23
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 24
        yield "        <div class=\"ui centered grid\">
                <noscript>
                    <div class=\"ui basic segment\">
                        <div class=\"ui message\">";
        // line 27
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("This feature requires javascript."), "html", null, true);
        yield "</div>
                    </div>
                </noscript>
                <div class=\"jsonly displaynone eight wide mobile five wide computer column\">
                        <h2 class=\"uid header\">";
        // line 31
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("Members by status"), "html", null, true);
        yield "</h2>
                        <canvas id=\"";
        // line 32
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::constant("Galette\\IO\\Charts::MEMBERS_STATUS_PIE"), "html", null, true);
        yield "\" width=\"640\" height=\"640\"></canvas>
                </div>
                <div class=\"jsonly displaynone eight wide mobile five wide computer column\">
                        <h2 class=\"uid header\">";
        // line 35
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("Members by state of dues"), "html", null, true);
        yield "</h2>
                        <canvas id=\"";
        // line 36
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::constant("Galette\\IO\\Charts::MEMBERS_STATEDUE_PIE"), "html", null, true);
        yield "\" width=\"640\" height=\"640\"></canvas>
                </div>
                <div class=\"jsonly displaynone eight wide mobile five wide computer column\">
                        <h2 class=\"uid header\">";
        // line 39
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("Contributions types repartition"), "html", null, true);
        yield "</h2>
                        <canvas id=\"";
        // line 40
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::constant("Galette\\IO\\Charts::CONTRIBS_TYPES_PIE"), "html", null, true);
        yield "\" width=\"640\" height=\"640\"></canvas>
                </div>
                <div class=\"jsonly displaynone eight wide mobile four wide computer column\">
                        <h2 class=\"ui center aligned header\">";
        // line 43
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("Individuals and Companies"), "html", null, true);
        yield "</h2>
                        <canvas id=\"";
        // line 44
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::constant("Galette\\IO\\Charts::COMPANIES_OR_NOT"), "html", null, true);
        yield "\" width=\"320\" height=\"320\"></canvas>
                </div>
                <div class=\"jsonly displaynone sixteen wide mobile twelve wide computer column\">
                        <h2 class=\"ui center aligned header\">";
        // line 47
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("Contributions over time"), "html", null, true);
        yield "</h2>
                        <canvas id=\"";
        // line 48
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::constant("Galette\\IO\\Charts::CONTRIBS_ALLTIME"), "html", null, true);
        yield "\" width=\"960\" height=\"320\"></canvas>
                </div>
        </div>
";
        return; yield '';
    }

    // line 53
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 54
        yield "        <script type=\"module\">
            // Chart.js plugins
            Chart.register(ChartDataLabels);
            const autocolors = window['chartjs-plugin-autocolors'];

            // Default options
            const lighten = (color, value) => Chart.helpers.color(color).lighten(value).rgbString();
            Chart.defaults.font.family = \"'PT Sans','Helvetica Neue',Arial,Helvetica,sans-serif\";
            Chart.defaults.font.color = 'rgb(99, 107, 112)';
            Chart.defaults.backgroundColor = 'rgb(158, 226, 226)';

            const _members_status_pie_ctx = document.getElementById('";
        // line 65
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::constant("Galette\\IO\\Charts::MEMBERS_STATUS_PIE"), "html", null, true);
        yield "').getContext('2d');
            let _members_status_pie_total = ";
        // line 66
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["charts"] ?? null), "MembersStatusPieData", [], "any", false, false, false, 66), "html", null, true);
        yield ".reduce(getSum, 0);
            const _members_status_pie = new Chart(_members_status_pie_ctx, {
                type: 'pie',
                data: {
                    labels: ";
        // line 70
        yield CoreExtension::getAttribute($this->env, $this->source, ($context["charts"] ?? null), "MembersStatusPieLabels", [], "any", false, false, false, 70);
        yield ",
                    datasets: [{
                        label: '";
        // line 72
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("Members by status"), "js"), "html", null, true);
        yield "',
                        data: ";
        // line 73
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["charts"] ?? null), "MembersStatusPieData", [], "any", false, false, false, 73), "html", null, true);
        yield ",
                    }]
                },
                plugins: [
                    autocolors
                ],
                options: {
                    plugins: {
                        autocolors: {
                            mode: 'data',
                            customize(context) {
                              const colors = context.colors;
                              return {
                                background: lighten(colors.background, 0.2),
                                border: lighten(colors.border, 0.2)
                              };
                            }
                        },
                        legend: {
                            position: 'right',
                            labels: {
                                boxWidth: 10,
                            }
                        },
                        tooltip: {
                            position: 'nearest',
                            backgroundColor: 'rgb(99, 107, 112)',
                            caretPadding: 15,
                            boxPadding: 8,
                        },
                        datalabels: {
                            formatter: function(value, context) {
                                  return Math.fround(value / _members_status_pie_total * 100).toFixed(1) + ' %';
                            },
                            backgroundColor: 'rgb(255, 255, 255)',
                            borderColor: 'rgb(229, 229, 229)',
                            borderWidth: 1,
                            borderRadius: 4,
                        }
                    }
                }
            });

            const _members_statedue_pie_ctx = document.getElementById('";
        // line 116
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::constant("Galette\\IO\\Charts::MEMBERS_STATEDUE_PIE"), "html", null, true);
        yield "').getContext('2d');
            let _members_statedue_pie_total = ";
        // line 117
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["charts"] ?? null), "MembersStateDuePieData", [], "any", false, false, false, 117), "html", null, true);
        yield ".reduce(getSum, 0);
            const _members_statedue_pie = new Chart(_members_statedue_pie_ctx, {
                type: 'pie',
                data: {
                    labels: ";
        // line 121
        yield CoreExtension::getAttribute($this->env, $this->source, ($context["charts"] ?? null), "MembersStateDuePieLabels", [], "any", false, false, false, 121);
        yield ",
                    datasets: [{
                        label: '";
        // line 123
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("Members by state of dues"), "js"), "html", null, true);
        yield "',
                        data: ";
        // line 124
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["charts"] ?? null), "MembersStateDuePieData", [], "any", false, false, false, 124), "html", null, true);
        yield "
                    }]
                },
                plugins: [
                    autocolors
                ],
                options: {
                    plugins: {
                        autocolors: {
                            mode: 'data',
                            customize(context) {
                              const colors = context.colors;
                              return {
                                background: lighten(colors.background, 0.2),
                                border: lighten(colors.border, 0.2)
                              };
                            }
                        },
                        legend: {
                            position: 'right',
                            labels: {
                                boxWidth: 10,
                            }
                        },
                        tooltip: {
                            backgroundColor: 'rgb(99, 107, 112)',
                            caretPadding: 15,
                            boxPadding: 8,
                        },
                        datalabels: {
                            formatter: function(value, context) {
                                  return Math.fround(value / _members_statedue_pie_total * 100).toFixed(1) + ' %';
                            },
                            backgroundColor: 'rgb(255, 255, 255)',
                            borderColor: 'rgb(229, 229, 229)',
                            borderWidth: 1,
                            borderRadius: 4,
                        }
                    }
                }
            });

            const _contribs_types_pie_ctx = document.getElementById('";
        // line 166
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::constant("Galette\\IO\\Charts::CONTRIBS_TYPES_PIE"), "html", null, true);
        yield "').getContext('2d');
            let _contribs_types_pie_total = ";
        // line 167
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["charts"] ?? null), "ContribsTypesPieData", [], "any", false, false, false, 167), "html", null, true);
        yield ".reduce(getSum, 0);
            const _contribs_types_pie_pie = new Chart(_contribs_types_pie_ctx, {
                type: 'pie',
                data: {
                    labels: ";
        // line 171
        yield CoreExtension::getAttribute($this->env, $this->source, ($context["charts"] ?? null), "ContribsTypesPieLabels", [], "any", false, false, false, 171);
        yield ",
                    datasets: [{
                        label: '";
        // line 173
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("Contributions types repartition"), "js"), "html", null, true);
        yield "',
                        data: ";
        // line 174
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["charts"] ?? null), "ContribsTypesPieData", [], "any", false, false, false, 174), "html", null, true);
        yield "
                    }]
                },
                plugins: [
                    autocolors
                ],
                options: {
                    plugins: {
                        autocolors: {
                            mode: 'data',
                            customize(context) {
                              const colors = context.colors;
                              return {
                                background: lighten(colors.background, 0.2),
                                border: lighten(colors.border, 0.2)
                              };
                            }
                        },
                        legend: {
                            position: 'right',
                            labels: {
                                boxWidth: 10,
                            }
                        },
                        tooltip: {
                            backgroundColor: 'rgb(99, 107, 112)',
                            caretPadding: 15,
                            boxPadding: 8,
                        },
                        datalabels: {
                            formatter: function(value, context) {
                                  return Math.fround(value / _contribs_types_pie_total * 100).toFixed(1) + ' %';
                            },
                            backgroundColor: 'rgb(255, 255, 255)',
                            borderColor: 'rgb(229, 229, 229)',
                            borderWidth: 1,
                            borderRadius: 4,
                        }
                    }
                }
            });

            const _companies_individuals_ctx = document.getElementById('";
        // line 216
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::constant("Galette\\IO\\Charts::COMPANIES_OR_NOT"), "html", null, true);
        yield "').getContext('2d');
            let _companies_individuals_total = ";
        // line 217
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["charts"] ?? null), "CompaniesOrNotData", [], "any", false, false, false, 217), "html", null, true);
        yield ".reduce(getSum, 0);
            const _companies_individuals = new Chart(_companies_individuals_ctx, {
                type: 'doughnut',
                data: {
                    labels: ";
        // line 221
        yield CoreExtension::getAttribute($this->env, $this->source, ($context["charts"] ?? null), "CompaniesOrNotLabels", [], "any", false, false, false, 221);
        yield ",
                    datasets: [{
                        label: '";
        // line 223
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("Individuals and Companies"), "js"), "html", null, true);
        yield "',
                        data: ";
        // line 224
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["charts"] ?? null), "CompaniesOrNotData", [], "any", false, false, false, 224), "html", null, true);
        yield "
                    }]
                },
                plugins: [
                    autocolors
                ],
                options: {
                    plugins: {
                        autocolors: {
                            mode: 'data',
                            customize(context) {
                              const colors = context.colors;
                              return {
                                background: lighten(colors.background, 0.2),
                                border: lighten(colors.border, 0.2)
                              };
                            }
                        },
                        legend: {
                            position: 'bottom',
                            labels: {
                                boxWidth: 10,
                            }
                        },
                        tooltip: {
                            backgroundColor: 'rgb(99, 107, 112)',
                            caretPadding: 15,
                            boxPadding: 8,
                        },
                        datalabels: {
                            formatter: function(value, context) {
                                  return Math.fround(value / _companies_individuals_total * 100).toFixed(1) + ' %';
                            },
                            backgroundColor: 'rgb(255, 255, 255)',
                            borderColor: 'rgb(229, 229, 229)',
                            borderWidth: 1,
                            borderRadius: 4,
                        }
                    }
                }
            });

            const _contribs_alltime_ctx = document.getElementById('";
        // line 266
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::constant("Galette\\IO\\Charts::CONTRIBS_ALLTIME"), "html", null, true);
        yield "').getContext('2d');
            const _contribs_alltime = new Chart(_contribs_alltime_ctx, {
                type: 'bar',
                data: {
                    labels: ";
        // line 270
        yield CoreExtension::getAttribute($this->env, $this->source, ($context["charts"] ?? null), "ContribsAllTimeLabels", [], "any", false, false, false, 270);
        yield ",
                    datasets: [{
                        label: '";
        // line 272
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("Total contributions for the month"), "js"), "html", null, true);
        yield "',
                        data: ";
        // line 273
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["charts"] ?? null), "ContribsAllTimeData", [], "any", false, false, false, 273), "html", null, true);
        yield "
                    }]
                },
                options: {
                    plugins: {
                        legend: {
                            display: false
                        },
                        tooltip: {
                            backgroundColor: 'rgb(99, 107, 112)',
                            caretPadding: 10,
                            boxPadding: 8,
                        },
                        datalabels: {
                            backgroundColor: 'rgb(255, 255, 255)',
                            borderColor: 'rgb(229, 229, 229)',
                            borderWidth: 1,
                            borderRadius: 4,
                        }
                    }
                }
            });

            function getSum(total, num) {
                return total + Math.round(num);
            }
        </script>
";
        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "pages/charts.html.twig";
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
        return array (  411 => 273,  407 => 272,  402 => 270,  395 => 266,  350 => 224,  346 => 223,  341 => 221,  334 => 217,  330 => 216,  285 => 174,  281 => 173,  276 => 171,  269 => 167,  265 => 166,  220 => 124,  216 => 123,  211 => 121,  204 => 117,  200 => 116,  154 => 73,  150 => 72,  145 => 70,  138 => 66,  134 => 65,  121 => 54,  117 => 53,  108 => 48,  104 => 47,  98 => 44,  94 => 43,  88 => 40,  84 => 39,  78 => 36,  74 => 35,  68 => 32,  64 => 31,  57 => 27,  52 => 24,  48 => 23,  37 => 21,);
    }

    public function getSourceContext()
    {
        return new Source("", "pages/charts.html.twig", "/var/www/galette/templates/default/pages/charts.html.twig");
    }
}
