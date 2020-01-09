<?php

/* @eles_coreframe/event/overall_header_page_body_before.html */
class __TwigTemplate_8cc6d4c4c56a08c783244cd9f950923cd5ea48512c7478ab80c6b6b06bd5a280 extends Twig_Template
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
        $context["C_LAYOUT_CLASS"] = (((($context["C_LAYOUT_MODE"] ?? null) == "contained")) ? (" container") : (""));
        // line 2
        $context["C_SIDEBAR_CONTAINER"] = ((($context["C_SIDEBAR_ON"] ?? null)) ? (" sided") : (""));
        // line 3
        echo "
<section class=\"main ";
        // line 4
        echo (($context["C_LAYOUT_CLASS"] ?? null) . ($context["C_SIDEBAR_CONTAINER"] ?? null));
        echo "\">
<div class=\"inner";
        // line 5
        if (($context["C_STYLE_OFFSET_ON"] ?? null)) {
            echo " header-offset";
        }
        echo "\">

";
        // line 7
        $context["C_BODY_CLASS"] = ((($context["C_SIDEBAR_ON"] ?? null)) ? ("col-sm-9") : (""));
        // line 8
        $context["C_BODY_ALIGN"] = (((($context["C_SIDEBAR_ON"] ?? null) && (($context["C_SIDEBAR_POS"] ?? null) == "left"))) ? (" rightside col-sm-push-3") : (" leftside"));
        // line 9
        echo "<div id=\"page-body-wrapper\" role=\"main\" class=\"";
        echo (($context["C_BODY_CLASS"] ?? null) . ($context["C_BODY_ALIGN"] ?? null));
        echo "\">
";
    }

    public function getTemplateName()
    {
        return "@eles_coreframe/event/overall_header_page_body_before.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  41 => 9,  39 => 8,  37 => 7,  30 => 5,  26 => 4,  23 => 3,  21 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@eles_coreframe/event/overall_header_page_body_before.html", "");
    }
}
