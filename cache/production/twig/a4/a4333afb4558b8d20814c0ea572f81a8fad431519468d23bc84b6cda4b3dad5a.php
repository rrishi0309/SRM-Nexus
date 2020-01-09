<?php

/* @eles_coreframe/inc/menubar.html */
class __TwigTemplate_6d0f9b59393e5b9837ccd10e051f326a7f4917bf306d9f0294c401a942d6eacd extends Twig_Template
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
        echo "<ul id=\"nav-main\" class=\"linklist bulletin\" role=\"menubar\">

  <li id=\"quick-links\" class=\"small-icon responsive-menu dropdown-container";
        // line 3
        if (( !($context["S_DISPLAY_QUICK_LINKS"] ?? null) &&  !($context["S_DISPLAY_SEARCH"] ?? null))) {
            echo " hidden";
        }
        echo "\" data-skip-responsive=\"true\">
    <a href=\"#\" class=\"responsive-menu-link dropdown-trigger\">";
        // line 4
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("QUICK_LINKS");
        echo "</a>
    <div class=\"dropdown hidden\">
      <div class=\"pointer\"><div class=\"pointer-inner\"></div></div>
      <ul class=\"dropdown-contents\" role=\"menu\">
        ";
        // line 8
        // line 9
        echo "
        ";
        // line 10
        if (($context["U_ACP"] ?? null)) {
            // line 11
            echo "          <li class=\"small-icon icon-acp\" data-last-responsive=\"true\"><a href=\"";
            echo ($context["U_ACP"] ?? null);
            echo "\" title=\"";
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("ACP");
            echo "\" role=\"menuitem\">";
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("ACP");
            echo "</a></li>
        ";
        }
        // line 13
        echo "        ";
        if (($context["U_MCP"] ?? null)) {
            // line 14
            echo "          <li class=\"small-icon icon-mcp\" data-last-responsive=\"true\"><a href=\"";
            echo ($context["U_MCP"] ?? null);
            echo "\" title=\"";
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("MCP");
            echo "\" role=\"menuitem\">";
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("MCP");
            echo "</a></li>
        ";
        }
        // line 16
        echo "
        ";
        // line 17
        if (($context["S_DISPLAY_SEARCH"] ?? null)) {
            // line 18
            echo "          <li class=\"separator\"></li>
          ";
            // line 19
            if (($context["S_REGISTERED_USER"] ?? null)) {
                // line 20
                echo "            <li class=\"small-icon icon-search-self\"><a href=\"";
                echo ($context["U_SEARCH_SELF"] ?? null);
                echo "\" role=\"menuitem\">";
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("SEARCH_SELF");
                echo "</a></li>
          ";
            }
            // line 22
            echo "          ";
            if (($context["S_USER_LOGGED_IN"] ?? null)) {
                // line 23
                echo "            <li class=\"small-icon icon-search-new\"><a href=\"";
                echo ($context["U_SEARCH_NEW"] ?? null);
                echo "\" role=\"menuitem\">";
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("SEARCH_NEW");
                echo "</a></li>
          ";
            }
            // line 25
            echo "          ";
            if (($context["S_LOAD_UNREADS"] ?? null)) {
                // line 26
                echo "            <li class=\"small-icon icon-search-unread\"><a href=\"";
                echo ($context["U_SEARCH_UNREAD"] ?? null);
                echo "\" role=\"menuitem\">";
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("SEARCH_UNREAD");
                echo "</a></li>
          ";
            }
            // line 28
            echo "          <li class=\"small-icon icon-search-unanswered\"><a href=\"";
            echo ($context["U_SEARCH_UNANSWERED"] ?? null);
            echo "\" role=\"menuitem\">";
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("SEARCH_UNANSWERED");
            echo "</a></li>
          <li class=\"small-icon icon-search-active\"><a href=\"";
            // line 29
            echo ($context["U_SEARCH_ACTIVE_TOPICS"] ?? null);
            echo "\" role=\"menuitem\">";
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("SEARCH_ACTIVE_TOPICS");
            echo "</a></li>
          <li class=\"separator\"></li>
          <li class=\"small-icon icon-search\"><a href=\"";
            // line 31
            echo ($context["U_SEARCH"] ?? null);
            echo "\" role=\"menuitem\">";
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("SEARCH");
            echo "</a></li>
        ";
        }
        // line 33
        echo "
        ";
        // line 34
        if (( !($context["S_IS_BOT"] ?? null) && (($context["S_DISPLAY_MEMBERLIST"] ?? null) || ($context["U_TEAM"] ?? null)))) {
            // line 35
            echo "          <li class=\"separator\"></li>
          ";
            // line 36
            if (($context["S_DISPLAY_MEMBERLIST"] ?? null)) {
                echo "<li class=\"small-icon icon-members\"><a href=\"";
                echo ($context["U_MEMBERLIST"] ?? null);
                echo "\" role=\"menuitem\">";
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("MEMBERLIST");
                echo "</a></li>";
            }
            // line 37
            echo "          ";
            if (($context["U_TEAM"] ?? null)) {
                echo "<li class=\"small-icon icon-team\"><a href=\"";
                echo ($context["U_TEAM"] ?? null);
                echo "\" role=\"menuitem\">";
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("THE_TEAM");
                echo "</a></li>";
            }
            // line 38
            echo "        ";
        }
        // line 39
        echo "        <li class=\"separator\"></li>

        ";
        // line 41
        if ( !($context["S_USER_LOGGED_IN"] ?? null)) {
            // line 42
            echo "          <li class=\"small-icon icon-faq\"><a href=\"";
            echo ($context["U_FAQ"] ?? null);
            echo "\" rel=\"help\" title=\"";
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("FAQ_EXPLAIN");
            echo "\" role=\"menuitem\">";
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("FAQ");
            echo "</a></li>
        ";
        }
        // line 44
        echo "
        ";
        // line 45
        // line 46
        echo "      </ul>
    </div>
  </li>

  ";
        // line 50
        // line 51
        echo "
    ";
        // line 52
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["loops"] ?? null), "c_menu_items", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["c_menu_items"]) {
            // line 53
            echo "      <li class=\"small-icon menu-item ";
            echo $this->getAttribute($context["c_menu_items"], "CLASS", array());
            echo "\" data-last-responsive=\"true\">
        <a href=\"";
            // line 54
            echo $this->getAttribute($context["c_menu_items"], "URL", array());
            echo "\" title=\"";
            echo $this->getAttribute($context["c_menu_items"], "TEXT", array());
            echo "\" role=\"menuitem\">";
            echo $this->getAttribute($context["c_menu_items"], "TEXT", array());
            echo "</a>
      </li>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['c_menu_items'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 57
        echo "
  ";
        // line 58
        // line 59
        echo "
";
        // line 60
        if (($context["S_REGISTERED_USER"] ?? null)) {
            // line 61
            echo "  <li id=\"username_logged_in\" class=\"rightside ";
            if (($context["CURRENT_USER_AVATAR"] ?? null)) {
                echo " no-bulletin";
            }
            echo "\" data-skip-responsive=\"true\">
    ";
            // line 62
            // line 63
            echo "    <div class=\"header-profile dropdown-container\">
      <a href=\"";
            // line 64
            echo ($context["U_PROFILE"] ?? null);
            echo "\" class=\"header-avatar dropdown-trigger\">";
            if (($context["CURRENT_USER_AVATAR"] ?? null)) {
                echo ($context["CURRENT_USER_AVATAR"] ?? null);
                echo " ";
            }
            echo ($context["CURRENT_USERNAME_SIMPLE"] ?? null);
            echo "</a>
      <div class=\"dropdown hidden\">
        <div class=\"pointer\"><div class=\"pointer-inner\"></div></div>
        <ul class=\"dropdown-contents\" role=\"menu\">
          ";
            // line 68
            if (($context["U_RESTORE_PERMISSIONS"] ?? null)) {
                echo "<li class=\"small-icon icon-restore-permissions\"><a href=\"";
                echo ($context["U_RESTORE_PERMISSIONS"] ?? null);
                echo "\">";
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("RESTORE_PERMISSIONS");
                echo "</a></li>";
            }
            // line 69
            echo "
          ";
            // line 70
            // line 71
            echo "
          <li class=\"small-icon icon-ucp\"><a href=\"";
            // line 72
            echo ($context["U_PROFILE"] ?? null);
            echo "\" title=\"";
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("PROFILE");
            echo "\" role=\"menuitem\">";
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("PROFILE");
            echo "</a></li>
          <li class=\"small-icon icon-profile\"><a href=\"";
            // line 73
            echo ($context["U_USER_PROFILE"] ?? null);
            echo "\" title=\"";
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("READ_PROFILE");
            echo "\" role=\"menuitem\">";
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("READ_PROFILE");
            echo "</a></li>

          ";
            // line 75
            // line 76
            echo "
          <li class=\"separator\"></li>
          <li class=\"small-icon icon-logout\"><a href=\"";
            // line 78
            echo ($context["U_LOGIN_LOGOUT"] ?? null);
            echo "\" title=\"";
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("LOGIN_LOGOUT");
            echo "\" accesskey=\"x\" role=\"menuitem\">";
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("LOGIN_LOGOUT");
            echo "</a></li>
        </ul>
      </div>
    </div>
    ";
            // line 82
            // line 83
            echo "  </li>
  ";
            // line 84
            if (($context["S_DISPLAY_PM"] ?? null)) {
                // line 85
                echo "    <li class=\"small-icon icon-pm rightside\" data-skip-responsive=\"true\">
      <a href=\"";
                // line 86
                echo ($context["U_PRIVATEMSGS"] ?? null);
                echo "\" role=\"menuitem\"><span>";
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("PRIVATE_MESSAGES");
                echo " [</span><strong>";
                echo ($context["PRIVATE_MESSAGE_COUNT"] ?? null);
                echo "</strong><span>]</span></a>
    </li>
  ";
            }
            // line 89
            echo "  ";
            if (($context["S_NOTIFICATIONS_DISPLAY"] ?? null)) {
                // line 90
                echo "    <li class=\"small-icon icon-notification dropdown-container dropdown-";
                echo ($context["S_CONTENT_FLOW_END"] ?? null);
                echo " rightside\" data-skip-responsive=\"true\">
      <a href=\"";
                // line 91
                echo ($context["U_VIEW_ALL_NOTIFICATIONS"] ?? null);
                echo "\" id=\"notification_list_button\" class=\"dropdown-trigger\"><span>";
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("NOTIFICATIONS");
                echo " [</span><strong>";
                echo ($context["NOTIFICATIONS_COUNT"] ?? null);
                echo "</strong><span>]</span></a>
      ";
                // line 92
                $location = "notification_dropdown.html";
                $namespace = false;
                if (strpos($location, '@') === 0) {
                    $namespace = substr($location, 1, strpos($location, '/') - 1);
                    $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
                    $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
                }
                $this->loadTemplate("notification_dropdown.html", "@eles_coreframe/inc/menubar.html", 92)->display($context);
                if ($namespace) {
                    $this->env->setNamespaceLookUpOrder($previous_look_up_order);
                }
                // line 93
                echo "    </li>
  ";
            }
            // line 95
            echo "  ";
        } else {
            // line 96
            echo "    <li class=\"small-icon icon-logout rightside\"  data-skip-responsive=\"true\"><a href=\"";
            echo ($context["U_LOGIN_LOGOUT"] ?? null);
            echo "\" title=\"";
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("LOGIN_LOGOUT");
            echo "\" accesskey=\"x\" role=\"menuitem\">";
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("LOGIN_LOGOUT");
            echo "</a></li>
    ";
            // line 97
            if ((($context["S_REGISTER_ENABLED"] ?? null) &&  !(($context["S_SHOW_COPPA"] ?? null) || ($context["S_REGISTRATION"] ?? null)))) {
                // line 98
                echo "      <li class=\"small-icon icon-register rightside\" data-skip-responsive=\"true\"><a href=\"";
                echo ($context["U_REGISTER"] ?? null);
                echo "\" role=\"menuitem\">";
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("REGISTER");
                echo "</a></li>
    ";
            }
            // line 100
            echo "    ";
            // line 101
            echo "  ";
        }
        // line 102
        echo "</ul>
";
    }

    public function getTemplateName()
    {
        return "@eles_coreframe/inc/menubar.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  365 => 102,  362 => 101,  360 => 100,  352 => 98,  350 => 97,  341 => 96,  338 => 95,  334 => 93,  322 => 92,  314 => 91,  309 => 90,  306 => 89,  296 => 86,  293 => 85,  291 => 84,  288 => 83,  287 => 82,  276 => 78,  272 => 76,  271 => 75,  262 => 73,  254 => 72,  251 => 71,  250 => 70,  247 => 69,  239 => 68,  226 => 64,  223 => 63,  222 => 62,  215 => 61,  213 => 60,  210 => 59,  209 => 58,  206 => 57,  193 => 54,  188 => 53,  184 => 52,  181 => 51,  180 => 50,  174 => 46,  173 => 45,  170 => 44,  160 => 42,  158 => 41,  154 => 39,  151 => 38,  142 => 37,  134 => 36,  131 => 35,  129 => 34,  126 => 33,  119 => 31,  112 => 29,  105 => 28,  97 => 26,  94 => 25,  86 => 23,  83 => 22,  75 => 20,  73 => 19,  70 => 18,  68 => 17,  65 => 16,  55 => 14,  52 => 13,  42 => 11,  40 => 10,  37 => 9,  36 => 8,  29 => 4,  23 => 3,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@eles_coreframe/inc/menubar.html", "");
    }
}
