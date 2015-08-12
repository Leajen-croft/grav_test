<?php

/* partials/nav.html.twig */
class __TwigTemplate_3c874452cf37635469812529821ce090c9eadf204b12bb498a7be1c8b766dbcf extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<nav id=\"admin-sidebar\">
    <div id=\"admin-logo\">
        <h3><a href=\"";
        // line 3
        echo (isset($context["base_url_relative"]) ? $context["base_url_relative"] : null);
        echo "\">Grav Admin</a> <a target=\"_blank\" href=\"";
        echo (isset($context["base_url_relative_frontend"]) ? $context["base_url_relative_frontend"] : null);
        echo "\"><i class=\"fa fa-fw fa-angle-double-right\"></i></a></h3>
    </div>

    ";
        // line 7
        echo "    <div id=\"admin-user-details\">
        <a href=\"";
        // line 8
        echo (isset($context["base_url_relative"]) ? $context["base_url_relative"] : null);
        echo "/users/";
        echo $this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "user", array()), "username", array());
        echo "\">
            <img src=\"http://www.gravatar.com/avatar/";
        // line 9
        echo $this->env->getExtension('GravTwigExtension')->md5Filter($this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "user", array()), "email", array()));
        echo "?s=32\" />

            <div class=\"admin-user-names\">
                <h4>";
        // line 12
        echo $this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "user", array()), "fullname", array());
        echo "</h4>
                <h5>";
        // line 13
        echo $this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "user", array()), "title", array());
        echo "</h5>
            </div>
        </a>
    </div>
    ";
        // line 18
        echo "
    <ul id=\"admin-menu\">
        <li class=\"";
        // line 20
        echo ((((isset($context["location"]) ? $context["location"] : null) == "dashboard")) ? ("selected") : (""));
        echo "\">
            <a href=\"";
        // line 21
        echo (isset($context["base_url_relative"]) ? $context["base_url_relative"] : null);
        echo "\"><i class=\"fa fa-fw fa-th\"></i> Dashboard</a>
        </li>
        <li class=\"";
        // line 23
        echo (((((isset($context["location"]) ? $context["location"] : null) == "system") || ((isset($context["location"]) ? $context["location"] : null) == "site"))) ? ("selected") : (""));
        echo "\">
            <a href=\"";
        // line 24
        echo (isset($context["base_url_relative"]) ? $context["base_url_relative"] : null);
        echo "/system\"><i class=\"fa fa-fw fa-wrench\"></i> Configuration</a>
        </li>
        <li class=\"";
        // line 26
        echo ((((isset($context["location"]) ? $context["location"] : null) == "pages")) ? ("selected") : (""));
        echo "\">
            <a href=\"";
        // line 27
        echo (isset($context["base_url_relative"]) ? $context["base_url_relative"] : null);
        echo "/pages\">
                <i class=\"fa fa-fw fa-file-text-o\"></i> Pages
                <span class=\"badges\">
                    <span class=\"badge count\">";
        // line 30
        echo twig_length_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "routes", array()));
        echo "</span>
                </span>
            </a>
        </li>
        <li class=\"";
        // line 34
        echo ((((isset($context["location"]) ? $context["location"] : null) == "plugins")) ? ("selected") : (""));
        echo "\">
            <a href=\"";
        // line 35
        echo (isset($context["base_url_relative"]) ? $context["base_url_relative"] : null);
        echo "/plugins\">
                <i class=\"fa fa-fw fa-plug\"></i> Plugins
                <span class=\"badges\">
                    <span class=\"badge updates\"></span>
                    <span class=\"badge count\">";
        // line 39
        echo twig_length_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "plugins", array()));
        echo "</span>

                </span>
            </a>
        </li>
        <li class=\"";
        // line 44
        echo ((((isset($context["location"]) ? $context["location"] : null) == "themes")) ? ("selected") : (""));
        echo "\">
            <a href=\"";
        // line 45
        echo (isset($context["base_url_relative"]) ? $context["base_url_relative"] : null);
        echo "/themes\">
                <i class=\"fa fa-fw fa-tint\"></i> Themes
                <span class=\"badges\">
                    <span class=\"badge updates\"></span>
                    <span class=\"badge count\">";
        // line 49
        echo twig_length_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "themes", array()));
        echo "</span>
                </span>
            </a>
        </li>

        ";
        // line 54
        try {
            $this->loadTemplate("nav-pro.html.twig", "partials/nav.html.twig", 54)->display($context);
        } catch (Twig_Error_Loader $e) {
            // ignore missing template
        }

        // line 55
        echo "
        <!-- <li class=\"";
        // line 56
        echo ((((isset($context["location"]) ? $context["location"] : null) == "logs")) ? ("selected") : (""));
        echo "\">
            <a href=\"";
        // line 57
        echo (isset($context["base_url_relative"]) ? $context["base_url_relative"] : null);
        echo "/logs\">
                <i class=\"fa fa-fw fa-warning\"></i> Error Logs
                <span class=\"badges\">
                    <span class=\"badge count\">";
        // line 60
        echo twig_length_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "logs", array()));
        echo "</span>
                </span>
            </a>
        </li> -->
        <li>
            <a href=\"";
        // line 65
        echo (isset($context["base_url_relative"]) ? $context["base_url_relative"] : null);
        echo "/task";
        echo $this->getAttribute($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "system", array()), "param_sep", array());
        echo "logout\"><i class=\"fa fa-fw fa-sign-out\"></i> Logout</a>
        </li>
    </ul>
</nav>
";
    }

    public function getTemplateName()
    {
        return "partials/nav.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  162 => 65,  154 => 60,  148 => 57,  144 => 56,  141 => 55,  134 => 54,  126 => 49,  119 => 45,  115 => 44,  107 => 39,  100 => 35,  96 => 34,  89 => 30,  83 => 27,  79 => 26,  74 => 24,  70 => 23,  65 => 21,  61 => 20,  57 => 18,  50 => 13,  46 => 12,  40 => 9,  34 => 8,  31 => 7,  23 => 3,  19 => 1,);
    }
}
