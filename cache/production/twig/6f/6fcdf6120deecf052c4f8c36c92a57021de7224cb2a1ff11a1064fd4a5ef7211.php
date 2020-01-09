<?php

/* @eles_coreframe/event/overall_header_content_before.html */
class __TwigTemplate_ca6a125c61f53704e8f9253646cc55b8dd7dae9b8b4de0dd119577fb7f6f16a1 extends Twig_Template
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
        if (($context["C_AD_PAGETOP_ON"] ?? null)) {
            // line 2
            echo "<div class=\"top-block\">
\t<div class=\"inner\">";
            // line 3
            echo ($context["C_AD_PAGETOP"] ?? null);
            echo "</div>
</div>
";
        }
    }

    public function getTemplateName()
    {
        return "@eles_coreframe/event/overall_header_content_before.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  24 => 3,  21 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@eles_coreframe/event/overall_header_content_before.html", "");
    }
}
