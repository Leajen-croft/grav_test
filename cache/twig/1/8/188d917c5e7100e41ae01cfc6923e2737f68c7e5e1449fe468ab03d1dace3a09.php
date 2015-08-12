<?php

/* dashboard.html.twig */
class __TwigTemplate_188d917c5e7100e41ae01cfc6923e2737f68c7e5e1449fe468ab03d1dace3a09 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("partials/base.html.twig", "dashboard.html.twig", 1);
        $this->blocks = array(
            'titlebar' => array($this, 'block_titlebar'),
            'messages' => array($this, 'block_messages'),
            'content_top' => array($this, 'block_content_top'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "partials/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_titlebar($context, array $blocks = array())
    {
        // line 4
        echo "    <div class=\"button-bar\">
        <div class=\"button-group\">
            <button data-clear-cache=\"";
        // line 6
        echo (isset($context["base_url_relative"]) ? $context["base_url_relative"] : null);
        echo "/cache.json/task";
        echo $this->getAttribute($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "system", array()), "param_sep", array());
        echo "clearCache\" class=\"button\"><i class=\"fa fa-trash\"></i> Clear Cache</button>
            <button type=\"button\" class=\"button dropdown-toggle\" data-toggle=\"dropdown\">
                <i class=\"fa fa-caret-down\"></i>
            </button>
            <ul class=\"dropdown-menu\">
                <li><a data-clear-cache=\"";
        // line 11
        echo (isset($context["base_url_relative"]) ? $context["base_url_relative"] : null);
        echo "/cache.json/task";
        echo $this->getAttribute($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "system", array()), "param_sep", array());
        echo "clearCache/cleartype:all\" href=\"#\">All Cache</a></li>
                <li><a data-clear-cache=\"";
        // line 12
        echo (isset($context["base_url_relative"]) ? $context["base_url_relative"] : null);
        echo "/cache.json/task";
        echo $this->getAttribute($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "system", array()), "param_sep", array());
        echo "clearCache/cleartype:assets-only\" href=\"#\">Assets Only</a></li>
                <li><a data-clear-cache=\"";
        // line 13
        echo (isset($context["base_url_relative"]) ? $context["base_url_relative"] : null);
        echo "/cache.json/task";
        echo $this->getAttribute($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "system", array()), "param_sep", array());
        echo "clearCache/cleartype:images-only\" href=\"#\">Images Only</a></li>
                <li><a data-clear-cache=\"";
        // line 14
        echo (isset($context["base_url_relative"]) ? $context["base_url_relative"] : null);
        echo "/cache.json/task";
        echo $this->getAttribute($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "system", array()), "param_sep", array());
        echo "clearCache/cleartype:cache-only\" href=\"#\">Cache Only</a></li>
            </ul>
        </div>
        <button data-gpm-checkupdates=\"\" class=\"button\"><i class=\"fa fa-refresh\"></i> Check for Updates</button>
    </div>
    <h1><i class=\"fa fa-fw fa-th\"></i> Dashboard</h1>
";
    }

    // line 22
    public function block_messages($context, array $blocks = array())
    {
    }

    // line 24
    public function block_content_top($context, array $blocks = array())
    {
        // line 25
        echo "
    ";
        // line 26
        $context["gpm"] = $this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "gpm", array(), "method");
        // line 27
        echo "    ";
        $context["updatable"] = $this->getAttribute((isset($context["gpm"]) ? $context["gpm"] : null), "getUpdatablePlugins", array(), "method");
        // line 28
        echo "    ";
        $context["backup"] = $this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "lastBackup", array(), "method");
        // line 29
        echo "
    <div id=\"admin-dashboard\">
        <div id=\"updates\" class=\"dashboard-item dashboard-left\">
            <div class=\"tertiary-accent default-box-shadow\">
                <h1>Maintenance</h1>
                <div class=\"admin-update-charts\">
                    <div class=\"updates-chart\">
                        <div class=\"chart-wrapper\">
                            <div class=\"ct-chart\"></div>
                            <span class=\"numeric\"><span>-</span><em>updated</em></span>
                        </div>
                        <p>Updates Available</p>
                    </div>
                    <div class=\"backups-chart\">
                        <div class=\"chart-wrapper\">
                            <div class=\"ct-chart\"></div>
                            <script>
                                var data = {
                                  series: [";
        // line 47
        echo $this->getAttribute((isset($context["backup"]) ? $context["backup"] : null), "chart_fill", array());
        echo ", ";
        echo $this->getAttribute((isset($context["backup"]) ? $context["backup"] : null), "chart_empty", array());
        echo "]
                                };
                                var options = {
                                  donut: true,
                                  donutWidth: 10,
                                  startAngle: 0,
                                  total: 100,
                                  showLabel: false,
                                  height: 150
                                };
                                Chartist.Pie('.backups-chart .ct-chart', data, options);
                            </script>
                            <span class=\"numeric\">";
        // line 59
        echo $this->getAttribute((isset($context["backup"]) ? $context["backup"] : null), "days", array());
        echo "<em>days</em></span>
                        </div>
                        <p>Last Backup</p>
                    </div>
                </div>
                <div class=\"flush-bottom button-bar\">
                    <button data-maintenance-update=\"";
        // line 65
        echo (isset($context["base_url_relative"]) ? $context["base_url_relative"] : null);
        echo "/update.json/task";
        echo $this->getAttribute($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "system", array()), "param_sep", array());
        echo "update\" class=\"button\"><i class=\"fa fa-cloud-download\"></i> Update</button>
                    <button data-ajax=\"";
        // line 66
        echo (isset($context["base_url_relative"]) ? $context["base_url_relative"] : null);
        echo "/backup.json/task";
        echo $this->getAttribute($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "system", array()), "param_sep", array());
        echo "backup\" class=\"button\"><i class=\"fa fa-database\"></i> Backup</button>
                </div>
            </div>
        </div>
        <div id=\"popularity\" class=\"dashboard-item dashboard-right\">
            <div class=\"secondary-accent default-box-shadow\">
                <h1>Statistics</h1>
                <div class=\"ct-chart\"></div>
                <script>
                    var data = {
                        labels: ";
        // line 76
        echo $this->getAttribute($this->getAttribute((isset($context["popularity"]) ? $context["popularity"] : null), "getDailyChartData", array()), "labels", array(), "array");
        echo ",
                        series: [
                            ";
        // line 78
        echo $this->getAttribute($this->getAttribute((isset($context["popularity"]) ? $context["popularity"] : null), "getDailyChartData", array()), "data", array(), "array");
        echo "
                        ]
                    };
                    var options = {
                        height: 164,
                        chartPadding:5,

                        axisX: {
                            showGrid: false,
                            labelOffset: {
                                x: 0,
                                y: 5
                            }
                        },
                        axisY: {
                            offset: 15,
                            showLabel: true,
                            showGrid: true,
                            labelOffset: {
                                x: 5,
                                y: 5
                            },
                            scaleMinSpace: 20
                        }
                    };
                    Chartist.Bar('#popularity .ct-chart', data, options);
                </script>
                <div class=\"flush-bottom button-bar stats-bar\">
                    <span class=\"stat\">
                        <b>";
        // line 107
        echo $this->getAttribute((isset($context["popularity"]) ? $context["popularity"] : null), "getDailyTotal", array());
        echo "</b>
                        <i>Today</i>
                    </span>
                    <span class=\"stat\">
                        <b>";
        // line 111
        echo $this->getAttribute((isset($context["popularity"]) ? $context["popularity"] : null), "getWeeklyTotal", array());
        echo "</b>
                        <i>Week</i>
                    </span>
                    <span class=\"stat\">
                        <b>";
        // line 115
        echo $this->getAttribute((isset($context["popularity"]) ? $context["popularity"] : null), "getMonthlyTotal", array());
        echo "</b>
                        <i>Month</i>
                    </span>
                </div>
            </div>
        </div>
    </div>
";
    }

    // line 124
    public function block_content($context, array $blocks = array())
    {
        // line 125
        echo "
    ";
        // line 126
        $this->loadTemplate("partials/messages.html.twig", "dashboard.html.twig", 126)->display($context);
        // line 127
        echo "    ";
        if ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "plugins", array()), "admin", array()), "show_beta_msg", array())) {
            // line 128
            echo "    <div class=\"error alert\"><i class=\"fa fa-exclamation-circle\"></i> ";
            echo $this->env->getExtension('GravTwigExtension')->translate("ADMIN_BETA_MSG");
            echo "</div>
    ";
        }
        // line 130
        echo "    <div id=\"latest\">
        <div class=\"button-bar\">
            <a class=\"button\" href=\"";
        // line 132
        echo $this->getAttribute((isset($context["uri"]) ? $context["uri"] : null), "route", array(0 => true), "method");
        echo "/pages\"><i class=\"fa fa-fw fa-file-text-o\"></i>Manage Pages</a>
        </div>
        <h1>Latest Page Updates</h1>
        <table>
        ";
        // line 136
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "latestPages", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["latest"]) {
            // line 137
            echo "            <tr><td class=\"double\"><a href=\"";
            echo (isset($context["base_url"]) ? $context["base_url"] : null);
            echo "/pages/";
            echo trim($this->getAttribute($context["latest"], "route", array()), "/");
            echo "\"><i class=\"fa fa-fw fa-file-o\"></i> ";
            echo $this->getAttribute($context["latest"], "title", array());
            echo "</a></td><td class=\"double\">";
            echo $this->getAttribute($context["latest"], "route", array());
            echo "</td><td><b>";
            echo $this->env->getExtension('GravTwigExtension')->nicetimeFilter($this->getAttribute($context["latest"], "modified", array()));
            echo "</b></td></tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['latest'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 139
        echo "        </table>
    </div>

";
    }

    public function getTemplateName()
    {
        return "dashboard.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  277 => 139,  260 => 137,  256 => 136,  249 => 132,  245 => 130,  239 => 128,  236 => 127,  234 => 126,  231 => 125,  228 => 124,  216 => 115,  209 => 111,  202 => 107,  170 => 78,  165 => 76,  150 => 66,  144 => 65,  135 => 59,  118 => 47,  98 => 29,  95 => 28,  92 => 27,  90 => 26,  87 => 25,  84 => 24,  79 => 22,  66 => 14,  60 => 13,  54 => 12,  48 => 11,  38 => 6,  34 => 4,  31 => 3,  11 => 1,);
    }
}
