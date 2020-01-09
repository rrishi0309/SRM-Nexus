<?php

/* @eles_coreframe/inc/navbar_header.html */
class __TwigTemplate_9e74033653b0e9fcfb487f49af1ee89ad3d350925257b9f3a8f68692ca35390d extends Twig_Template
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
        echo "<ul id=\"nav-breadcrumbs\" class=\"linklist navlinks";
        if (($context["C_SOCIAL_LINKS_ON"] ?? null)) {
            echo " has-social-links";
        }
        echo "\" role=\"menubar\">
  ";
        // line 2
        $value = " itemtype=\"http://data-vocabulary.org/Breadcrumb\" itemscope=\"\"";
        $context['definition']->set('MICRODATA', $value);
        // line 3
        echo "  ";
        // line 4
        echo "  <li class=\"small-icon icon-home breadcrumbs\">
    ";
        // line 5
        if (($context["U_SITE_HOME"] ?? null)) {
            echo "<span class=\"crumb\"";
            echo $this->getAttribute(($context["definition"] ?? null), "MICRODATA", array());
            echo "><a href=\"";
            echo ($context["U_SITE_HOME"] ?? null);
            echo "\" data-navbar-reference=\"home\" itemprop=\"url\"><span itemprop=\"title\">";
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("SITE_HOME");
            echo "</span></a></span>";
        }
        // line 6
        echo "    ";
        // line 7
        echo "    <span class=\"crumb\"";
        echo $this->getAttribute(($context["definition"] ?? null), "MICRODATA", array());
        echo "><a href=\"";
        echo ($context["U_INDEX"] ?? null);
        echo "\" accesskey=\"h\" data-navbar-reference=\"index\" itemprop=\"url\"><span itemprop=\"title\">";
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("INDEX");
        echo "</span></a></span>
    ";
        // line 8
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["loops"] ?? null), "navlinks", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["navlinks"]) {
            // line 9
            echo "      ";
            // line 10
            echo "      <span class=\"crumb\"";
            echo $this->getAttribute(($context["definition"] ?? null), "MICRODATA", array());
            if ($this->getAttribute($context["navlinks"], "MICRODATA", array())) {
                echo " ";
                echo $this->getAttribute($context["navlinks"], "MICRODATA", array());
            }
            echo "><a href=\"";
            echo $this->getAttribute($context["navlinks"], "U_VIEW_FORUM", array());
            echo "\" itemprop=\"url\"><span itemprop=\"title\">";
            echo $this->getAttribute($context["navlinks"], "FORUM_NAME", array());
            echo "</span></a></span>
      ";
            // line 11
            // line 12
            echo "    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['navlinks'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 13
        echo "    ";
        // line 14
        echo "  </li>
  ";
        // line 15
        // line 16
        echo "
  ";
        // line 22
        echo "</ul>

";
        // line 24
        if (($context["C_SOCIAL_LINKS_ON"] ?? null)) {
            // line 25
            echo "  <ul class=\"social-links col-xs-4\">
  ";
            // line 26
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["loops"] ?? null), "c_social_links", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["c_social_links"]) {
                // line 27
                echo "    ";
                if ($this->getAttribute($context["c_social_links"], "ON", array())) {
                    // line 28
                    echo "      <li id=\"social-link-";
                    echo $this->getAttribute($context["c_social_links"], "ID", array());
                    echo "\">
        <a href=\"";
                    // line 29
                    echo $this->getAttribute($context["c_social_links"], "URL", array());
                    echo "\" title=\"";
                    echo $this->getAttribute($context["c_social_links"], "TITLE", array());
                    echo "\">
          ";
                    // line 30
                    if (($this->getAttribute($context["c_social_links"], "ID", array()) == "facebook")) {
                        // line 31
                        echo "            <i class=\"fa fa-facebook-official\"></i>
          ";
                    } elseif (($this->getAttribute(                    // line 32
$context["c_social_links"], "ID", array()) == "twitter")) {
                        // line 33
                        echo "            <i class=\"fa fa-twitter\"></i>
          ";
                    } elseif (($this->getAttribute(                    // line 34
$context["c_social_links"], "ID", array()) == "google-plus")) {
                        // line 35
                        echo "            <i class=\"fa fa-google-plus\"></i>
          ";
                    } elseif (($this->getAttribute(                    // line 36
$context["c_social_links"], "ID", array()) == "pinterest")) {
                        // line 37
                        echo "            <i class=\"fa fa-pinterest\"></i>
          ";
                    } elseif (($this->getAttribute(                    // line 38
$context["c_social_links"], "ID", array()) == "youtube")) {
                        // line 39
                        echo "            <i class=\"fa fa-youtube-play\"></i>
          ";
                    } elseif (($this->getAttribute(                    // line 40
$context["c_social_links"], "ID", array()) == "linkedin")) {
                        // line 41
                        echo "            <i class=\"fa fa-linkedin\"></i>
          ";
                    } elseif (($this->getAttribute(                    // line 42
$context["c_social_links"], "ID", array()) == "github")) {
                        // line 43
                        echo "            <i class=\"fa fa-github\"></i>
          ";
                    } elseif (($this->getAttribute(                    // line 44
$context["c_social_links"], "ID", array()) == "instagram")) {
                        // line 45
                        echo "            <i class=\"fa fa-instagram\"></i>
          ";
                    } elseif (($this->getAttribute(                    // line 46
$context["c_social_links"], "ID", array()) == "steam")) {
                        // line 47
                        echo "            <i class=\"fa fa-steam\"></i>
          ";
                    } elseif (($this->getAttribute(                    // line 48
$context["c_social_links"], "ID", array()) == "twitch")) {
                        // line 49
                        echo "            <i class=\"fa fa-twitch\"></i>
          ";
                    } else {
                        // line 51
                        echo "            <i class=\"fa fa-share-alt\"></i>
          ";
                    }
                    // line 53
                    echo "        </a>
    </li>
    ";
                }
                // line 56
                echo "  ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['c_social_links'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 57
            echo "  </ul>
";
        }
    }

    public function getTemplateName()
    {
        return "@eles_coreframe/inc/navbar_header.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  183 => 57,  177 => 56,  172 => 53,  168 => 51,  164 => 49,  162 => 48,  159 => 47,  157 => 46,  154 => 45,  152 => 44,  149 => 43,  147 => 42,  144 => 41,  142 => 40,  139 => 39,  137 => 38,  134 => 37,  132 => 36,  129 => 35,  127 => 34,  124 => 33,  122 => 32,  119 => 31,  117 => 30,  111 => 29,  106 => 28,  103 => 27,  99 => 26,  96 => 25,  94 => 24,  90 => 22,  87 => 16,  86 => 15,  83 => 14,  81 => 13,  75 => 12,  74 => 11,  61 => 10,  59 => 9,  55 => 8,  46 => 7,  44 => 6,  34 => 5,  31 => 4,  29 => 3,  26 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@eles_coreframe/inc/navbar_header.html", "");
    }
}
