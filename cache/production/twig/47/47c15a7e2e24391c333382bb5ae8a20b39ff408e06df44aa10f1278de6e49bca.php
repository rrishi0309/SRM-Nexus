<?php

/* @eles_coreframe/inc/header.html */
class __TwigTemplate_3bcd68f9b14023d7e81a39d5560e867ee321e317f8221eaf7adb62d0530fa7e0 extends Twig_Template
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
        echo "<div id=\"navbar-main\" class=\"topbar\" data-scroll-header>
  <div class=\"inner";
        // line 2
        if ((($context["C_LAYOUT_MODE"] ?? null) === "contained")) {
            echo " container";
        }
        echo "\">
    ";
        // line 3
        $location = "@eles_coreframe/inc/menubar.html";
        $namespace = false;
        if (strpos($location, '@') === 0) {
            $namespace = substr($location, 1, strpos($location, '/') - 1);
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
        }
        $this->loadTemplate("@eles_coreframe/inc/menubar.html", "@eles_coreframe/inc/header.html", 3)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
        // line 4
        echo "  </div>
</div>

<div class=\"masthead\" role=\"banner\">
  <div class=\"inner";
        // line 8
        if ((($context["C_LAYOUT_MODE"] ?? null) === "contained")) {
            echo " container";
        }
        echo "  ";
        if (($context["C_STYLE_OFFSET_ON"] ?? null)) {
            echo " header-offset-size";
        }
        echo "\">

    <div id=\"site-description\">
      <a id=\"logo\" class=\"logo\" href=\"";
        // line 11
        if (($context["U_SITE_HOME"] ?? null)) {
            echo ($context["U_SITE_HOME"] ?? null);
        } else {
            echo ($context["U_INDEX"] ?? null);
        }
        echo "\" title=\"";
        if (($context["U_SITE_HOME"] ?? null)) {
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("SITE_HOME");
        } else {
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("INDEX");
        }
        echo "\">
        ";
        // line 12
        if (($context["C_LOGO_IMAGE"] ?? null)) {
            // line 13
            echo "          <img src=\"";
            echo ($context["T_THEME_PATH"] ?? null);
            echo "/images/";
            echo ($context["C_LOGO_IMAGE"] ?? null);
            echo "\" alt=\"";
            echo ($context["SITENAME"] ?? null);
            echo " logo.\">
        ";
        } else {
            // line 15
            echo "          ";
            echo ($context["SITE_LOGO_IMG"] ?? null);
            echo "
        ";
        }
        // line 17
        echo "        ";
        if (($context["C_LOGO_SITEINFO"] ?? null)) {
            // line 18
            echo "          <h1>";
            echo ($context["SITENAME"] ?? null);
            echo "</h1>
          <p>";
            // line 19
            echo ($context["SITE_DESCRIPTION"] ?? null);
            echo "</p>
        ";
        }
        // line 21
        echo "      </a>
      <p class=\"skiplink\"><a href=\"#start_here\">";
        // line 22
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("SKIP");
        echo "</a></p>
    </div>

    ";
        // line 25
        // line 26
        echo "    ";
        if ((($context["S_DISPLAY_SEARCH"] ?? null) &&  !($context["S_IN_SEARCH"] ?? null))) {
            // line 27
            echo "    <div id=\"search-box\" class=\"search-box search-header\" role=\"search\">
      <form action=\"";
            // line 28
            echo ($context["U_SEARCH"] ?? null);
            echo "\" method=\"get\" id=\"search\">
      <fieldset>
        <input name=\"keywords\" id=\"keywords\" type=\"search\" maxlength=\"128\" title=\"";
            // line 30
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("SEARCH_KEYWORDS");
            echo "\" class=\"inputbox search tiny\" size=\"20\" value=\"";
            echo ($context["SEARCH_WORDS"] ?? null);
            echo "\" placeholder=\"";
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("SEARCH_MINI");
            echo "\" />
        <button class=\"button icon-button search-icon\" type=\"submit\" title=\"";
            // line 31
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("SEARCH");
            echo "\">";
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("SEARCH");
            echo "</button>
        <a href=\"";
            // line 32
            echo ($context["U_SEARCH"] ?? null);
            echo "\" class=\"button icon-button search-adv-icon\" title=\"";
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("SEARCH_ADV");
            echo "\">";
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("SEARCH_ADV");
            echo "</a>
        ";
            // line 33
            echo ($context["S_SEARCH_HIDDEN_FIELDS"] ?? null);
            echo "
      </fieldset>
      </form>
    </div>
    ";
        }
        // line 38
        echo "  </div>

  ";
        // line 40
        // line 41
        echo "  <div class=\"navbar top\" role=\"navigation\">
    <div class=\"inner";
        // line 42
        if ((($context["C_LAYOUT_MODE"] ?? null) === "contained")) {
            echo " container";
        }
        echo " ";
        if (($context["C_STYLE_OFFSET_ON"] ?? null)) {
            echo " header-offset-nav";
        }
        echo "\">
      ";
        // line 43
        $location = "@eles_coreframe/inc/navbar_header.html";
        $namespace = false;
        if (strpos($location, '@') === 0) {
            $namespace = substr($location, 1, strpos($location, '/') - 1);
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
        }
        $this->loadTemplate("@eles_coreframe/inc/navbar_header.html", "@eles_coreframe/inc/header.html", 43)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
        // line 44
        echo "    </div>
  </div>

  ";
        // line 47
        if (($context["C_STYLE_HERO_VFX"] ?? null)) {
            // line 48
            echo "    <div id=\"header-vfx\"></div>
  ";
        }
        // line 50
        echo "  ";
        if (($context["C_STYLE_HERO"] ?? null)) {
            // line 51
            echo "    <div class=\"header-bg\"></div>
  ";
        }
        // line 53
        echo "</div>

";
    }

    public function getTemplateName()
    {
        return "@eles_coreframe/inc/header.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  202 => 53,  198 => 51,  195 => 50,  191 => 48,  189 => 47,  184 => 44,  172 => 43,  162 => 42,  159 => 41,  158 => 40,  154 => 38,  146 => 33,  138 => 32,  132 => 31,  124 => 30,  119 => 28,  116 => 27,  113 => 26,  112 => 25,  106 => 22,  103 => 21,  98 => 19,  93 => 18,  90 => 17,  84 => 15,  74 => 13,  72 => 12,  58 => 11,  46 => 8,  40 => 4,  28 => 3,  22 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@eles_coreframe/inc/header.html", "");
    }
}
