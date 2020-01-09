<?php

/* @eles_coreframe/inc/css-dynamic.html */
class __TwigTemplate_82976cc0efaa304d146ccc95c3d5fc57db974133ef4ac8d382c547d1245db1bc extends Twig_Template
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
        echo "<style id=\"c-dyncss\" type=\"text/css\" media=\"screen\">

";
        // line 3
        if ((($context["C_LAYOUT_MODE"] ?? null) === "boxed")) {
            // line 4
            echo "  html { ";
            if (($context["C_STYLE_BGIM"] ?? null)) {
                echo " background: url('";
                echo ($context["C_STYLE_BGIM"] ?? null);
                echo "'); ";
            }
            echo " }
";
        }
        // line 6
        echo "
";
        // line 7
        if ((($context["C_FONTS_SIZE"] ?? null) || ($context["C_FONTS_TEXT"] ?? null))) {
            // line 8
            echo "body {
  ";
            // line 9
            if (($context["C_FONTS_SIZE"] ?? null)) {
                echo " font-size: ";
                echo ($context["C_FONTS_SIZE"] ?? null);
                echo "; ";
            }
            // line 10
            echo "  ";
            if (($context["C_FONTS_TEXT"] ?? null)) {
                echo " font-family: ";
                echo ($context["C_FONTS_TEXT"] ?? null);
                echo "; ";
            }
            // line 11
            echo "}
";
        }
        // line 13
        echo "
";
        // line 14
        if (($context["C_FONTS_HEADERS"] ?? null)) {
            // line 15
            echo "  h1, h2, h3, h4, h5, .header { font-family: ";
            echo ($context["C_FONTS_HEADERS"] ?? null);
            echo "; }
";
        }
        // line 17
        echo "
";
        // line 18
        if (((($context["C_LAYOUT_MODE"] ?? null) === "full") || (($context["C_LAYOUT_MODE"] ?? null) === "contained"))) {
            // line 19
            echo "
  body { padding: 0; }
  #wrap {
    max-width: none;
    margin: 0;
  }
  ";
            // line 25
            if (($context["C_LAYOUT_WIDTH"] ?? null)) {
                // line 26
                echo "    .container { width: ";
                echo ($context["C_LAYOUT_WIDTH"] ?? null);
                echo "; }
  ";
            }
            // line 28
            echo "
";
        } elseif (        // line 29
($context["C_LAYOUT_WIDTH"] ?? null)) {
            // line 30
            echo "  #wrap { max-width: ";
            echo ($context["C_LAYOUT_WIDTH"] ?? null);
            echo "; }
";
        }
        // line 32
        echo "
";
        // line 33
        if ((($context["C_STYLE_CORNERS"] ?? null) === "corners-flat")) {
            // line 34
            echo "
  .search-box .inputbox {
    box-shadow: none;
  }
  .search-header, .search-box .inputbox, .search-box a.button {
    border-radius: 0;
  }
  .forabg, .forumbg, .stat-block, div.rules, .stat-block.auth-box form {
    border-radius: 0;
  }
  .button, a.button, a.button1, input.button1, a.button2, input.button2, a.input.button3, input.button3, .right-box a {
    border-radius: 0;
  }
  .pagination li a, .pagination li span {
    border-radius: 0;
  }
  .post-buttons a.icon-button, .hastouch .post-buttons a.icon-button {
    border-radius: 0;
  }
  select, .inputbox, #eles input#text_shoutbox {
    border-radius: 0;
  }
  #tabs .tab > a {
    border-radius: 0;
  }
  input[type=\"checkbox\"]:before {
    border-radius: 0;
  }
  #navigation ul:first-child li:first-child a, #navigation ul:last-child li:last-child a {
    border-radius: 0;
  }
  #cp-main li.header, ul.cplist, li.header, .collapsed li.header {
    border-radius: 0;
  }
  .navbar.top .inner {
    border-radius: 0;
  }
  #page-sidebar .widget {
    border-radius: 0;
  }
  .widget-infotabs .nav > li > a {
    border-radius: 0;
  }
  .pagination > ul > li:first-child a, .pagination > ul > li:first-child span,
  .pagination > ul > li:last-child a, .pagination > ul > li:last-child span {
      border-radius: 0;
  }
  .tooltip-inner {
    border-radius: 0;
  }
  input[type=\"checkbox\"]:before, .input-view.type-checkbox:before {
    border-radius: 0;
  }
  .postbody .content::-webkit-scrollbar, #topicreview::-webkit-scrollbar,
  #post_details::-webkit-scrollbar, .codebox code::-webkit-scrollbar,
  .attachbox dd::-webkit-scrollbar, .attach-image::-webkit-scrollbar,
  .dropdown ul::-webkit-scrollbar, #mchat-messages::-webkit-scrollbar {
    border-radius: 0;
  }
  .postbody .content::-webkit-scrollbar-thumb,
  #topicreview::-webkit-scrollbar-thumb, #post_details::-webkit-scrollbar-thumb,
  .dropdown ul::-webkit-scrollbar-thumb, .codebox code::-webkit-scrollbar-thumb,
  .attachbox dd::-webkit-scrollbar-thumb,.attach-image::-webkit-scrollbar-thumb,
  #mchat-messages::-webkit-scrollbar-thumb {
    border-radius: 0;
  }
  #eles #abbc3_buttons select, #eles #abbc3_buttons .abbc3_button,
  #eles #phpbb_announcement {
    border-radius: 0;
  }
  #topicreview {
    border-radius: 0;
  }
  #eles #quick-login-panel {
    border-radius: 0;
  }
  .postprofile .avatar img,
  .postprofile .avatar .img {
    border-radius: 0;
  }
  #eles .postlove {
    border-radius: 0;
  }
  #confirm > .panel, #message.panel {
    border-radius: 0;
  }
  #eles #mchat-main .mchat-avatar {
    border-radius: 0;
  }

";
        }
        // line 125
        echo "
";
        // line 126
        if (($context["C_STYLE_HERO"] ?? null)) {
            // line 127
            echo "  #page-header .header-bg {
    background-image: url('";
            // line 128
            echo ($context["C_STYLE_HERO"] ?? null);
            echo "');
    opacity: ";
            // line 129
            echo (($context["C_STYLE_HERO_OPACITY"] ?? null) / 100);
            echo ";
  }
";
        }
        // line 132
        echo "
";
        // line 133
        echo ($context["C_CODE_CSS"] ?? null);
        echo "

</style>
";
    }

    public function getTemplateName()
    {
        return "@eles_coreframe/inc/css-dynamic.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  222 => 133,  219 => 132,  213 => 129,  209 => 128,  206 => 127,  204 => 126,  201 => 125,  108 => 34,  106 => 33,  103 => 32,  97 => 30,  95 => 29,  92 => 28,  86 => 26,  84 => 25,  76 => 19,  74 => 18,  71 => 17,  65 => 15,  63 => 14,  60 => 13,  56 => 11,  49 => 10,  43 => 9,  40 => 8,  38 => 7,  35 => 6,  25 => 4,  23 => 3,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@eles_coreframe/inc/css-dynamic.html", "");
    }
}
