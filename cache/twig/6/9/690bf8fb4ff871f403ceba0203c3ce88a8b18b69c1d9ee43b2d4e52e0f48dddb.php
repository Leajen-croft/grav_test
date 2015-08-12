<?php

/* pages.html.twig */
class __TwigTemplate_690bf8fb4ff871f403ceba0203c3ce88a8b18b69c1d9ee43b2d4e52e0f48dddb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("partials/base.html.twig", "pages.html.twig", 1);
        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
            'javascripts' => array($this, 'block_javascripts'),
            'titlebar' => array($this, 'block_titlebar'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "partials/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 3
        if ($this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "route", array())) {
            // line 4
            $context["context"] = $this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "page", array(0 => true), "method");
        }
        // line 7
        if ($this->getAttribute((isset($context["uri"]) ? $context["uri"] : null), "param", array(0 => "new"), "method")) {
            // line 8
            $context["mode"] = "new";
        } elseif (        // line 9
(isset($context["context"]) ? $context["context"] : null)) {
            // line 10
            $context["mode"] = "edit";
            // line 11
            if ($this->getAttribute((isset($context["context"]) ? $context["context"] : null), "exists", array())) {
                // line 12
                $context["exists"] = true;
            }
        } else {
            // line 15
            $context["mode"] = "list";
        }
        // line 18
        $context["modular"] = (($this->getAttribute((isset($context["context"]) ? $context["context"] : null), "modular", array())) ? ("modular_") : (""));
        // line 20
        $context["warn"] = $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "plugins", array()), "admin", array()), "warnings", array()), "delete_page", array());
        // line 39
        $context["preview_link"] = ((("<a class=\"preview\" href=\"" . (isset($context["base_url_relative_frontend"]) ? $context["base_url_relative_frontend"] : null)) . (($this->getAttribute((isset($context["context"]) ? $context["context"] : null), "home", array())) ? ("") : ($this->getAttribute((isset($context["context"]) ? $context["context"] : null), "route", array())))) . "\"><i class=\"fa fa-fw fa-angle-double-right\"></i></a>");
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 22
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 23
        echo "    ";
        if (((isset($context["mode"]) ? $context["mode"] : null) == "edit")) {
            // line 24
            echo "        ";
            $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "addCss", array(0 => ((isset($context["theme_url"]) ? $context["theme_url"] : null) . "/css/codemirror/codemirror.css")), "method");
            // line 25
            echo "    ";
        }
        // line 26
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
";
    }

    // line 29
    public function block_javascripts($context, array $blocks = array())
    {
        // line 30
        echo "    ";
        $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "addJs", array(0 => ((isset($context["theme_url"]) ? $context["theme_url"] : null) . "/js/pages-all.js")), "method");
        // line 31
        echo "    ";
        if (((isset($context["mode"]) ? $context["mode"] : null) == "edit")) {
            // line 32
            echo "        ";
            $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "addJs", array(0 => ((isset($context["theme_url"]) ? $context["theme_url"] : null) . "/js/codemirror-compressed.js")), "method");
            // line 33
            echo "        ";
            $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "addJs", array(0 => ((isset($context["theme_url"]) ? $context["theme_url"] : null) . "/js/mdeditor.js")), "method");
            // line 34
            echo "        ";
            $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "addJs", array(0 => ((isset($context["theme_url"]) ? $context["theme_url"] : null) . "/js/dropzone.min.js")), "method");
            // line 35
            echo "    ";
        }
        // line 36
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
";
    }

    // line 75
    public function block_titlebar($context, array $blocks = array())
    {
        // line 76
        echo "    <div class=\"button-bar\">
        ";
        // line 77
        if (((isset($context["mode"]) ? $context["mode"] : null) == "list")) {
            // line 78
            echo "            <a class=\"button\" href=\"";
            echo (isset($context["base_url"]) ? $context["base_url"] : null);
            echo "\"><i class=\"fa fa-reply\"></i> Back</a>
            <a class=\"button\" href=\"#modal\" data-remodal-target=\"modal\"><i class=\"fa fa-plus\"></i> Add Page</a>
            <a class=\"button\" href=\"#modular\" data-remodal-target=\"modular\"><i class=\"fa fa-plus\"></i> Add Modular</a>
        ";
        } elseif ((        // line 81
(isset($context["mode"]) ? $context["mode"] : null) == "edit")) {
            // line 82
            echo "            <a class=\"button\" href=\"";
            echo (isset($context["base_url"]) ? $context["base_url"] : null);
            echo "/pages\"><i class=\"fa fa-reply\"></i> Back</a>
            ";
            // line 83
            if ((isset($context["exists"]) ? $context["exists"] : null)) {
                // line 84
                echo "                <a class=\"button\" href=\"";
                echo $this->getAttribute((isset($context["uri"]) ? $context["uri"] : null), "route", array(0 => true), "method");
                echo "/task";
                echo $this->getAttribute($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "system", array()), "param_sep", array());
                echo "copy\" class=\"page-copy\" ><i class=\"fa fa-copy\"></i> Copy</a>
                <a class=\"button\" href=\"#\" data-remodal-target=\"move\"><i class=\"fa fa-arrows\"></i> Move</a>
                ";
                // line 86
                if ((isset($context["warn"]) ? $context["warn"] : null)) {
                    // line 87
                    echo "                    <a class=\"button\" href=\"#delete\" data-remodal-target=\"delete\" data-delete-url=\"";
                    echo $this->getAttribute((isset($context["uri"]) ? $context["uri"] : null), "route", array(0 => true), "method");
                    echo "/task";
                    echo $this->getAttribute($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "system", array()), "param_sep", array());
                    echo "delete\"><i class=\"fa fa-close\"></i> Delete</a>
                ";
                } else {
                    // line 89
                    echo "                    <a class=\"button\" href=\"";
                    echo $this->getAttribute((isset($context["uri"]) ? $context["uri"] : null), "route", array(0 => true), "method");
                    echo "/task";
                    echo $this->getAttribute($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "system", array()), "param_sep", array());
                    echo "delete\" class=\"page-delete\" ><i class=\"fa fa-close\"></i></a>
                ";
                }
                // line 91
                echo "            ";
            }
            // line 92
            echo "            <button class=\"button\" name=\"task\" value=\"save\" form=\"blueprints\"><i class=\"fa fa-check\"></i> Save</button>

        ";
        }
        // line 95
        echo "    </div>
    ";
        // line 96
        if (((isset($context["mode"]) ? $context["mode"] : null) == "new")) {
            // line 97
            echo "        <h1><i class=\"fa fa-fw fa-file-text-o\"></i> Add Page</h1>
    ";
        } elseif ((        // line 98
(isset($context["mode"]) ? $context["mode"] : null) == "edit")) {
            // line 99
            echo "        <h1><i class=\"fa fa-fw fa-file-text-o\"></i>
            ";
            // line 100
            echo (($this->getAttribute((isset($context["context"]) ? $context["context"] : null), "exists", array())) ? (((("Edit '" . $this->getAttribute((isset($context["context"]) ? $context["context"] : null), "menu", array())) . "'") . (isset($context["preview_link"]) ? $context["preview_link"] : null))) : ((("Create '" . $this->getAttribute((isset($context["context"]) ? $context["context"] : null), "menu", array())) . "'")));
            echo "
        </h1>
    ";
        } else {
            // line 103
            echo "        <h1><i class=\"fa fa-fw fa-file-text-o\"></i> Manage Pages</h1>
    ";
        }
    }

    // line 107
    public function block_content($context, array $blocks = array())
    {
        // line 108
        echo "    <div class=\"admin-block clear\">
    ";
        // line 109
        $this->loadTemplate("partials/messages.html.twig", "pages.html.twig", 109)->display($context);
        // line 110
        echo "    ";
        if (((isset($context["mode"]) ? $context["mode"] : null) == "new")) {
            // line 111
            echo "        ";
            $this->loadTemplate("partials/blueprints-new.html.twig", "pages.html.twig", 111)->display(array_merge($context, array("blueprints" => $this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "blueprints", array(0 => "pages/page"), "method"), "data" => (isset($context["context"]) ? $context["context"] : null))));
            // line 112
            echo "    ";
        } elseif (((isset($context["mode"]) ? $context["mode"] : null) == "edit")) {
            // line 113
            echo "        <div class=\"admin-form-wrapper\" data-media-url=\"";
            echo (isset($context["base_url"]) ? $context["base_url"] : null);
            echo "/media/";
            echo trim($this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "route", array()), "/");
            echo ".json\" data-media-local=\"";
            echo (isset($context["base_url_relative_frontend"]) ? $context["base_url_relative_frontend"] : null);
            echo "/";
            echo trim($this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "route", array()), "/");
            echo "\" data-media-types=\"";
            echo (isset($context["media_types"]) ? $context["media_types"] : null);
            echo "\">
            ";
            // line 114
            if ($this->getAttribute($this->getAttribute((isset($context["context"]) ? $context["context"] : null), "blueprints", array()), "fields", array())) {
                // line 115
                echo "            <form id=\"admin-mode-toggle\">
                <div class=\"switch-toggle switch-grav\">
                    <input type=\"radio\" value=\"normal\" data-leave-url=\"";
                // line 117
                echo $this->getAttribute((isset($context["uri"]) ? $context["uri"] : null), "route", array(0 => true), "method");
                echo "/mode:normal\" id=\"normal\" name=\"mode-switch\" class=\"highlight\" ";
                if (($this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "session", array()), "expert", array()) == "0")) {
                    echo " checked=\"checked\"";
                }
                echo ">
                    <label for=\"normal\">Normal</label>
                    <input type=\"radio\" value=\"expert\" data-leave-url=\"";
                // line 119
                echo $this->getAttribute((isset($context["uri"]) ? $context["uri"] : null), "route", array(0 => true), "method");
                echo "/mode:expert\" id=\"expert\" name=\"mode-switch\" class=\"highlight\" ";
                if (($this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "session", array()), "expert", array()) == "1")) {
                    echo " checked=\"checked\"";
                }
                echo ">
                    <label for=\"expert\">Expert</label>
                    <a></a>
                </div>
            </form>
            ";
            }
            // line 125
            echo "
            ";
            // line 126
            if (($this->getAttribute($this->getAttribute((isset($context["context"]) ? $context["context"] : null), "blueprints", array()), "fields", array()) && ($this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "session", array()), "expert", array()) == "0"))) {
                // line 127
                echo "                ";
                $this->loadTemplate("partials/blueprints.html.twig", "pages.html.twig", 127)->display(array_merge($context, array("blueprints" => $this->getAttribute((isset($context["context"]) ? $context["context"] : null), "blueprints", array()), "data" => (isset($context["context"]) ? $context["context"] : null))));
                // line 128
                echo "            ";
            } else {
                // line 129
                echo "                ";
                $this->loadTemplate("partials/blueprints-raw.html.twig", "pages.html.twig", 129)->display(array_merge($context, array("blueprints" => $this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "blueprints", array(0 => (("pages/" . (isset($context["modular"]) ? $context["modular"] : null)) . "raw")), "method"), "data" => (isset($context["context"]) ? $context["context"] : null))));
                // line 130
                echo "            ";
            }
            // line 131
            echo "        </div>
    ";
        } else {
            // line 133
            echo "        <form id=\"page-filtering\">
            <div class=\"page-filters\">
                <input type=\"text\" placeholder=\"Add Filters\" class=\"page-filter\" name=\"page-filter\" />
            </div>
            <div class=\"page-search\">
                <input type=\"text\" placeholder=\"Search Pages\" name=\"page-search\" />
            </div>
            <div class=\"page-shortcuts\">
                <span class=\"button button-x-small\" data-page-toggleall=\"expand\"><i class=\"fa fa-fw fa-plus-circle\"></i> Expand All</span>
                <span class=\"button button-x-small\" data-page-toggleall=\"collapse\"><i class=\"fa fa-fw fa-minus-circle\"></i> Collapse All</span>
            </div>
        </form>
        <ul class=\"pages-list depth-0\">
            ";
            // line 146
            echo $this->getAttribute($this, "loop", array(0 => (isset($context["pages"]) ? $context["pages"] : null), 1 => (isset($context["base_url_relative"]) ? $context["base_url_relative"] : null), 2 => 0, 3 => (isset($context["warn"]) ? $context["warn"] : null), 4 => $this->getAttribute($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "system", array()), "param_sep", array())), "method");
            echo "
        </ul>
    ";
        }
        // line 149
        echo "    </div>

    <div class=\"remodal\" data-remodal-id=\"generic\" data-remodal-options=\"hashTracking: false\">
        <form>
            <h1>Error</h1>
            <div class=\"error-content\"></div>
            <div class=\"button-bar\">
                <a class=\"button remodal-confirm\" href=\"#\">Close</a>
            </div>
        </form>
    </div>

    ";
        // line 161
        if (((isset($context["mode"]) ? $context["mode"] : null) == "list")) {
            // line 162
            echo "    <div class=\"remodal\" data-remodal-id=\"modal\" data-remodal-options=\"hashTracking: false\">
        ";
            // line 163
            $this->loadTemplate("partials/blueprints-new.html.twig", "pages.html.twig", 163)->display(array_merge($context, array("blueprints" => $this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "blueprints", array(0 => "pages/new"), "method"), "data" => (isset($context["context"]) ? $context["context"] : null))));
            // line 164
            echo "    </div>

    <div class=\"remodal\" data-remodal-id=\"modular\" data-remodal-options=\"hashTracking: false\">
        ";
            // line 167
            $this->loadTemplate("partials/blueprints-new.html.twig", "pages.html.twig", 167)->display(array_merge($context, array("blueprints" => $this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "blueprints", array(0 => "pages/modular_new"), "method"), "data" => (isset($context["context"]) ? $context["context"] : null))));
            // line 168
            echo "    </div>
    ";
        }
        // line 170
        echo "
    ";
        // line 171
        if (((isset($context["mode"]) ? $context["mode"] : null) == "edit")) {
            // line 172
            echo "    <div class=\"remodal\" data-remodal-id=\"move\" data-remodal-options=\"hashTracking: false\">

        ";
            // line 174
            $this->loadTemplate("partials/page-move.html.twig", "pages.html.twig", 174)->display(array_merge($context, array("blueprints" => $this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "blueprints", array(0 => "pages/move"), "method"), "data" => (isset($context["context"]) ? $context["context"] : null))));
            // line 175
            echo "    </div>
    ";
        }
        // line 177
        echo "
    <div class=\"remodal\" data-remodal-id=\"delete\" data-remodal-options=\"hashTracking: false\">
        <form>
            <h1>Confirmation Required</h1>
            <p class=\"bigger\">
              Are you sure you want to delete this page and all it's children? This action cannot be undone.
            </p>
            <br>
            <div class=\"button-bar\">
            <a class=\"button secondary remodal-cancel\" href=\"#\"><i class=\"fa fa-fw fa-close\"></i> Cancel</a>
            <a class=\"button\" data-delete-action href=\"#\"><i class=\"fa fa-fw fa-check\"></i>Continue</a>
            </div>
        </form>
    </div>


    <div class=\"remodal\" data-remodal-id=\"changes\">
        <form>
            <h1>Changes Detected</h1>
            <p class=\"bigger\">
              You have unsaved changes.  Are you sure you want to leave without saving?
            </p>
            <br>
            <div class=\"button-bar\">
            <a class=\"button secondary\" data-leave-action=\"cancel\" href=\"#\"><i class=\"fa fa-fw fa-close\"></i> Cancel</a>
            <a class=\"button\" data-leave-action=\"continue\" href=\"#\"><i class=\"fa fa-fw fa-check\"></i>Continue</a>
            </div>
        </form>
    </div>

    <div class=\"remodal\" data-remodal-id=\"delete-media\" data-remodal-options=\"hashTracking: false\">
        <form>
            <h1>Confirmation Required</h1>
            <p class=\"bigger\">
              Are you sure you want to delete this file? This action cannot be undone.
            </p>
            <br>
            <div class=\"button-bar\">
            <a class=\"button secondary remodal-cancel\" href=\"#\"><i class=\"fa fa-fw fa-close\"></i> Cancel</a>
            <a class=\"button remodal-confirm\" href=\"#\"><i class=\"fa fa-fw fa-check\"></i>Continue</a>
            </div>
        </form>
    </div>
";
    }

    // line 41
    public function getloop($__page__ = null, $__base_url__ = null, $__depth__ = null, $__warn__ = null, $__separator__ = null)
    {
        $context = $this->env->mergeGlobals(array(
            "page" => $__page__,
            "base_url" => $__base_url__,
            "depth" => $__depth__,
            "warn" => $__warn__,
            "separator" => $__separator__,
            "varargs" => func_num_args() > 5 ? array_slice(func_get_args(), 5) : array(),
        ));

        $blocks = array();

        ob_start();
        try {
            // line 42
            echo "    ";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "children", array(), "method"));
            foreach ($context['_seq'] as $context["_key"] => $context["p"]) {
                // line 43
                echo "        ";
                $context["description"] = ((((( !$this->getAttribute($context["p"], "page", array())) ? ("Folder &bull; ") : ("Page &bull; ")) . (($this->getAttribute(                // line 44
$context["p"], "modular", array())) ? ("Modular &bull; ") : (""))) . (($this->getAttribute(                // line 45
$context["p"], "routable", array())) ? ("Routable &bull; ") : ("Not Routable &bull; "))) . (($this->getAttribute(                // line 46
$context["p"], "visible", array())) ? ("Visible &bull; ") : ("Not Visible &bull; ")));
                // line 47
                echo "
        <li class=\"page-item\" data-nav-id=\"";
                // line 48
                echo $this->getAttribute($context["p"], "route", array());
                echo "\">
            <div class=\"row\">
                <span ";
                // line 50
                echo ((($this->getAttribute($this->getAttribute($context["p"], "children", array(0 => 0), "method"), "count", array()) > 0)) ? ("data-toggle=\"children\"") : (""));
                echo " data-hint=\"";
                echo trim((isset($context["description"]) ? $context["description"] : null), " &bull; ");
                echo "\" class=\"hint--bottom\">
                <i class=\"page-icon fa fa-fw fa-circle-o ";
                // line 51
                echo ((($this->getAttribute($this->getAttribute($context["p"], "children", array(0 => 0), "method"), "count", array()) > 0)) ? ("children-closed") : (""));
                echo " ";
                echo (($this->getAttribute($context["p"], "modular", array())) ? ("modular") : ((( !$this->getAttribute($context["p"], "routable", array())) ? ("not-routable") : ((( !$this->getAttribute($context["p"], "visible", array())) ? ("not-visible") : ((( !$this->getAttribute($context["p"], "page", array())) ? ("folder") : (""))))))));
                echo "\"></i>
                </span>
                <a href=\"";
                // line 53
                echo (isset($context["base_url"]) ? $context["base_url"] : null);
                echo "/pages/";
                echo trim($this->getAttribute($context["p"], "route", array()), "/");
                echo "\" class=\"page-edit\">";
                echo $this->getAttribute($context["p"], "menu", array());
                echo "</a>
                <span class=\"page-home\">";
                // line 54
                echo (($this->getAttribute($context["p"], "home", array())) ? ("<i class=\"fa fa-home\"></i>") : (""));
                echo "</span>
                <span class=\"page-tools\">
                    ";
                // line 56
                if ((isset($context["warn"]) ? $context["warn"] : null)) {
                    // line 57
                    echo "                    <a href=\"#delete\" data-remodal-target=\"delete\" data-delete-url=\"";
                    echo (isset($context["base_url"]) ? $context["base_url"] : null);
                    echo "/pages/";
                    echo trim($this->getAttribute($context["p"], "route", array()), "/");
                    echo "/task";
                    echo (isset($context["separator"]) ? $context["separator"] : null);
                    echo "delete\" class=\"page-delete\" ><i class=\"fa fa-close\"></i></a>
                    ";
                } else {
                    // line 59
                    echo "                    <a href=\"";
                    echo (isset($context["base_url"]) ? $context["base_url"] : null);
                    echo "/pages/";
                    echo trim($this->getAttribute($context["p"], "route", array()), "/");
                    echo "/task";
                    echo (isset($context["separator"]) ? $context["separator"] : null);
                    echo "delete\" class=\"page-delete\" ><i class=\"fa fa-close\"></i></a>
                    ";
                }
                // line 61
                echo "                </span>
                <p class=\"page-route\">";
                // line 62
                echo $this->getAttribute($context["p"], "route", array());
                echo "</p>
            </div>
            ";
                // line 64
                if (($this->getAttribute($this->getAttribute($context["p"], "children", array(), "method"), "count", array()) > 0)) {
                    // line 65
                    echo "
            <ul class=\"depth-";
                    // line 66
                    echo ((isset($context["depth"]) ? $context["depth"] : null) + 1);
                    echo "\" style=\"display:none;\">
                ";
                    // line 67
                    echo $this->getAttribute($this, "loop", array(0 => $context["p"], 1 => (isset($context["base_url"]) ? $context["base_url"] : null), 2 => ((isset($context["depth"]) ? $context["depth"] : null) + 1), 3 => (isset($context["warn"]) ? $context["warn"] : null), 4 => (isset($context["separator"]) ? $context["separator"] : null)), "method");
                    echo "
            </ul>
            ";
                }
                // line 70
                echo "        </li>
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['p'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    public function getTemplateName()
    {
        return "pages.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  490 => 70,  484 => 67,  480 => 66,  477 => 65,  475 => 64,  470 => 62,  467 => 61,  457 => 59,  447 => 57,  445 => 56,  440 => 54,  432 => 53,  425 => 51,  419 => 50,  414 => 48,  411 => 47,  409 => 46,  408 => 45,  407 => 44,  405 => 43,  400 => 42,  384 => 41,  337 => 177,  333 => 175,  331 => 174,  327 => 172,  325 => 171,  322 => 170,  318 => 168,  316 => 167,  311 => 164,  309 => 163,  306 => 162,  304 => 161,  290 => 149,  284 => 146,  269 => 133,  265 => 131,  262 => 130,  259 => 129,  256 => 128,  253 => 127,  251 => 126,  248 => 125,  235 => 119,  226 => 117,  222 => 115,  220 => 114,  207 => 113,  204 => 112,  201 => 111,  198 => 110,  196 => 109,  193 => 108,  190 => 107,  184 => 103,  178 => 100,  175 => 99,  173 => 98,  170 => 97,  168 => 96,  165 => 95,  160 => 92,  157 => 91,  149 => 89,  141 => 87,  139 => 86,  131 => 84,  129 => 83,  124 => 82,  122 => 81,  115 => 78,  113 => 77,  110 => 76,  107 => 75,  100 => 36,  97 => 35,  94 => 34,  91 => 33,  88 => 32,  85 => 31,  82 => 30,  79 => 29,  72 => 26,  69 => 25,  66 => 24,  63 => 23,  60 => 22,  56 => 1,  54 => 39,  52 => 20,  50 => 18,  47 => 15,  43 => 12,  41 => 11,  39 => 10,  37 => 9,  35 => 8,  33 => 7,  30 => 4,  28 => 3,  11 => 1,);
    }
}
