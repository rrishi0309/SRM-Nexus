<?php

/* navbar_footer.html */
class __TwigTemplate_d7c33a9cb96c8deb5bdc5264329d061f0112114acadb91aa9b2438a53dbf6a1d extends Twig_Template
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
        echo "<ul id=\"nav-footer\" class=\"linklist bulletin\" role=\"menubar\">
\t<li class=\"small-icon icon-home breadcrumbs\">
\t\t";
        // line 3
        if (($context["U_SITE_HOME"] ?? null)) {
            echo "<span class=\"crumb\"><a href=\"";
            echo ($context["U_SITE_HOME"] ?? null);
            echo "\" data-navbar-reference=\"home\">";
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("SITE_HOME");
            echo "</a></span>";
        }
        // line 4
        echo "\t\t";
        // line 5
        echo "\t\t<span class=\"crumb\"><a href=\"";
        echo ($context["U_INDEX"] ?? null);
        echo "\" data-navbar-reference=\"index\">";
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("INDEX");
        echo "</a></span>
\t\t";
        // line 6
        // line 7
        echo "\t</li>
\t";
        // line 8
        if ((($context["U_WATCH_FORUM_LINK"] ?? null) &&  !($context["S_IS_BOT"] ?? null))) {
            echo "<li class=\"small-icon icon-";
            if (($context["S_WATCHING_FORUM"] ?? null)) {
                echo "unsubscribe";
            } else {
                echo "subscribe";
            }
            echo "\" data-last-responsive=\"true\"><a href=\"";
            echo ($context["U_WATCH_FORUM_LINK"] ?? null);
            echo "\" title=\"";
            echo ($context["S_WATCH_FORUM_TITLE"] ?? null);
            echo "\" data-ajax=\"toggle_link\" data-toggle-class=\"small-icon icon-";
            if ( !($context["S_WATCHING_FORUM"] ?? null)) {
                echo "unsubscribe";
            } else {
                echo "subscribe";
            }
            echo "\" data-toggle-text=\"";
            echo ($context["S_WATCH_FORUM_TOGGLE"] ?? null);
            echo "\" data-toggle-url=\"";
            echo ($context["U_WATCH_FORUM_TOGGLE"] ?? null);
            echo "\">";
            echo ($context["S_WATCH_FORUM_TITLE"] ?? null);
            echo "</a></li>";
        }
        // line 9
        echo "
\t";
        // line 10
        // line 11
        echo "\t<li class=\"rightside\">";
        echo ($context["S_TIMEZONE"] ?? null);
        echo "</li>
\t";
        // line 12
        // line 13
        echo "\t";
        if ( !($context["S_IS_BOT"] ?? null)) {
            // line 14
            echo "
\t\t";
            // line 15
            if (($context["S_DISPLAY_MEMBERLIST"] ?? null)) {
                echo "<li class=\"small-icon icon-members rightside\" data-last-responsive=\"true\"><a href=\"";
                echo ($context["U_MEMBERLIST"] ?? null);
                echo "\" title=\"";
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("MEMBERLIST_EXPLAIN");
                echo "\" role=\"menuitem\">";
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("MEMBERLIST");
                echo "</a></li>";
            }
            // line 16
            echo "\t";
        }
        // line 17
        echo "\t";
        // line 18
        echo "\t";
        if (($context["U_TEAM"] ?? null)) {
            echo "<li class=\"small-icon icon-team rightside\" data-last-responsive=\"true\"><a href=\"";
            echo ($context["U_TEAM"] ?? null);
            echo "\" role=\"menuitem\">";
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("THE_TEAM");
            echo "</a></li>";
        }
        // line 19
        echo "\t";
        // line 20
        echo "\t";
        if (($context["U_CONTACT_US"] ?? null)) {
            echo "<li class=\"small-icon icon-contact rightside\" data-last-responsive=\"true\"><a href=\"";
            echo ($context["U_CONTACT_US"] ?? null);
            echo "\" role=\"menuitem\">";
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("CONTACT_US");
            echo "</a></li>";
        }
        // line 21
        echo "</ul>
";
    }

    public function getTemplateName()
    {
        return "navbar_footer.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  121 => 21,  112 => 20,  110 => 19,  101 => 18,  99 => 17,  96 => 16,  86 => 15,  83 => 14,  80 => 13,  79 => 12,  74 => 11,  73 => 10,  70 => 9,  44 => 8,  41 => 7,  40 => 6,  33 => 5,  31 => 4,  23 => 3,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "navbar_footer.html", "");
    }
}
