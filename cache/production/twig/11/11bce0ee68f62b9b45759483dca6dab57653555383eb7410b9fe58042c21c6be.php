<?php

/* @eles_coreframe/event/overall_header_body_before.html */
class __TwigTemplate_e0b3b09835e6ec73f813b575f999edcce06c23ddcb21729816a987432bee9c95 extends Twig_Template
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
        if (($context["C_PRELOADER_ON"] ?? null)) {
            // line 2
            echo "<div id=\"preloader\"><div class=\"preloader\"></div></div>
";
        }
    }

    public function getTemplateName()
    {
        return "@eles_coreframe/event/overall_header_body_before.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  21 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@eles_coreframe/event/overall_header_body_before.html", "");
    }
}
