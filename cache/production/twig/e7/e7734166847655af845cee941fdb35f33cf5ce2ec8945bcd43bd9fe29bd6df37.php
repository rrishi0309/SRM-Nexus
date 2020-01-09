<?php

/* @eles_coreframe/event/overall_footer_page_body_after.html */
class __TwigTemplate_cfd70983bb7827bf35e4af3b5cb153ded27ddfbbd4ad10f1b26ba58d10667a00 extends Twig_Template
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
        if (($context["C_AD_PAGEEND_ON"] ?? null)) {
            // line 2
            echo "<div class=\"bottom-block\">
\t<div class=\"inner\">";
            // line 3
            echo ($context["C_AD_PAGEEND"] ?? null);
            echo "</div>
</div>
";
        }
        // line 6
        echo "
</div>
<!-- #page-body-wrapper -->

";
        // line 10
        if (($context["C_SIDEBAR_ON"] ?? null)) {
            // line 11
            $context["C_SIDEBAR_ALIGN"] = (((($context["C_SIDEBAR_ON"] ?? null) && (($context["C_SIDEBAR_POS"] ?? null) == "left"))) ? ("leftside col-sm-pull-9") : ("rightside"));
            // line 12
            echo "<div id=\"page-sidebar\" class=\"col-sm-3 ";
            echo ($context["C_SIDEBAR_ALIGN"] ?? null);
            echo "\">
\t";
            // line 13
            $location = "inc/sidebar.html";
            $namespace = false;
            if (strpos($location, '@') === 0) {
                $namespace = substr($location, 1, strpos($location, '/') - 1);
                $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
                $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
            }
            $this->loadTemplate("inc/sidebar.html", "@eles_coreframe/event/overall_footer_page_body_after.html", 13)->display($context);
            if ($namespace) {
                $this->env->setNamespaceLookUpOrder($previous_look_up_order);
            }
            // line 14
            echo "</div>
";
        }
        // line 16
        echo "
</div><!-- .inner -->
";
        // line 18
        if (($context["C_STYLE_OFFSET_ON"] ?? null)) {
            echo "<div class=\"header-offset-shadow\"></div>";
        }
        // line 19
        echo "
</section>
<!-- .main -->
";
    }

    public function getTemplateName()
    {
        return "@eles_coreframe/event/overall_footer_page_body_after.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  69 => 19,  65 => 18,  61 => 16,  57 => 14,  45 => 13,  40 => 12,  38 => 11,  36 => 10,  30 => 6,  24 => 3,  21 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@eles_coreframe/event/overall_footer_page_body_after.html", "");
    }
}
