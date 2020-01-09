<?php

/* @eles_coreframe/event/overall_footer_body_after.html */
class __TwigTemplate_eb1db1560d388f1afa600bed3d47769006ce7105a6cc0a76746aed536cf7346d extends Twig_Template
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
        echo "<script id=\"c-dynjs\" type=\"text/javascript\">
  Eles.props.headerVfx.configFile = '";
        // line 2
        echo ($context["ROOT_PATH"] ?? null);
        echo "styles/eles/template/js/vfxconfig.json';
";
        // line 3
        if (($context["C_NOSTICK_NAV"] ?? null)) {
            // line 4
            echo "  Eles.stick_nav = false;
";
        }
        // line 6
        if ( !($context["C_STYLE_HERO_VFX"] ?? null)) {
            // line 7
            echo "  Eles.header_vfx = false;
";
        }
        // line 9
        echo "</script>

";
        // line 11
        if (($context["C_CODE_BODYEND_ON"] ?? null)) {
            // line 12
            echo ($context["C_CODE_BODYEND"] ?? null);
            echo "
";
        }
    }

    public function getTemplateName()
    {
        return "@eles_coreframe/event/overall_footer_body_after.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  44 => 12,  42 => 11,  38 => 9,  34 => 7,  32 => 6,  28 => 4,  26 => 3,  22 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@eles_coreframe/event/overall_footer_body_after.html", "");
    }
}
