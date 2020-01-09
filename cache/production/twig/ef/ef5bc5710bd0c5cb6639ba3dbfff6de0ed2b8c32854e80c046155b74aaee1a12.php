<?php

/* @eles_coreframe/inc/widgets.html */
class __TwigTemplate_a81d733d6149d8deeb16ed7d3a2b22d371d4741c80dde3a85686906e14331599 extends Twig_Template
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
        if (($this->getAttribute(($context["definition"] ?? null), "OPT", array()) == "c_sidebar_widgets")) {
            // line 2
            echo "  ";
            ob_start();
            echo $this->getAttribute(($context["c_sidebar_widgets"] ?? null), "WID", array());
            $context["WIDGET"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
            // line 3
            echo "  ";
            ob_start();
            echo $this->getAttribute(($context["c_sidebar_widgets"] ?? null), "CONTENT", array());
            $context["WIDGET_CONTENT"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
            // line 4
            echo "  ";
        } elseif (($this->getAttribute(($context["definition"] ?? null), "OPT", array()) == "c_footer_widgets")) {
            // line 5
            echo "  ";
            ob_start();
            echo $this->getAttribute(($context["c_footer_widgets"] ?? null), "WID", array());
            $context["WIDGET"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
            // line 6
            echo "  ";
            ob_start();
            echo $this->getAttribute(($context["c_footer_widgets"] ?? null), "CONTENT", array());
            $context["WIDGET_CONTENT"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        }
        // line 8
        echo "
";
        // line 9
        if ((($context["WIDGET"] ?? null) == "adblock")) {
            // line 10
            echo "  ";
            if (($context["C_AD_WIDGETS_ON"] ?? null)) {
                echo ($context["C_AD_WIDGETS"] ?? null);
            }
            // line 11
            echo "
";
        } elseif ((        // line 12
($context["WIDGET"] ?? null) == "auth")) {
            // line 13
            echo "  ";
            if (( !($context["S_USER_LOGGED_IN"] ?? null) &&  !($context["S_IS_BOT"] ?? null))) {
                // line 14
                echo "    ";
                $location = (("@eles_coreframe/widgets/" . ($context["WIDGET"] ?? null)) . ".html");
                $namespace = false;
                if (strpos($location, '@') === 0) {
                    $namespace = substr($location, 1, strpos($location, '/') - 1);
                    $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
                    $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
                }
                $this->loadTemplate((("@eles_coreframe/widgets/" . ($context["WIDGET"] ?? null)) . ".html"), "@eles_coreframe/inc/widgets.html", 14)->display($context);
                if ($namespace) {
                    $this->env->setNamespaceLookUpOrder($previous_look_up_order);
                }
                // line 15
                echo "  ";
            }
            // line 16
            echo "
";
        } elseif ((        // line 17
($context["WIDGET"] ?? null) == "infotabs")) {
            // line 18
            echo "  ";
            $location = (("@eles_coreframe/widgets/" . ($context["WIDGET"] ?? null)) . ".html");
            $namespace = false;
            if (strpos($location, '@') === 0) {
                $namespace = substr($location, 1, strpos($location, '/') - 1);
                $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
                $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
            }
            $this->loadTemplate((("@eles_coreframe/widgets/" . ($context["WIDGET"] ?? null)) . ".html"), "@eles_coreframe/inc/widgets.html", 18)->display($context);
            if ($namespace) {
                $this->env->setNamespaceLookUpOrder($previous_look_up_order);
            }
            // line 19
            echo "
";
        } elseif ((        // line 20
($context["WIDGET"] ?? null) == "forums")) {
            // line 21
            echo "  ";
            $location = (("@eles_coreframe/widgets/" . ($context["WIDGET"] ?? null)) . ".html");
            $namespace = false;
            if (strpos($location, '@') === 0) {
                $namespace = substr($location, 1, strpos($location, '/') - 1);
                $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
                $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
            }
            $this->loadTemplate((("@eles_coreframe/widgets/" . ($context["WIDGET"] ?? null)) . ".html"), "@eles_coreframe/inc/widgets.html", 21)->display($context);
            if ($namespace) {
                $this->env->setNamespaceLookUpOrder($previous_look_up_order);
            }
            // line 22
            echo "
";
        } elseif ((        // line 23
($context["WIDGET"] ?? null) == "recents")) {
            // line 24
            echo "  ";
            $location = (("@eles_coreframe/widgets/" . ($context["WIDGET"] ?? null)) . ".html");
            $namespace = false;
            if (strpos($location, '@') === 0) {
                $namespace = substr($location, 1, strpos($location, '/') - 1);
                $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
                $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
            }
            $this->loadTemplate((("@eles_coreframe/widgets/" . ($context["WIDGET"] ?? null)) . ".html"), "@eles_coreframe/inc/widgets.html", 24)->display($context);
            if ($namespace) {
                $this->env->setNamespaceLookUpOrder($previous_look_up_order);
            }
            // line 25
            echo "
";
        } else {
            // line 27
            echo "  ";
            echo ($context["WIDGET_CONTENT"] ?? null);
            echo "
";
        }
    }

    public function getTemplateName()
    {
        return "@eles_coreframe/inc/widgets.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  137 => 27,  133 => 25,  120 => 24,  118 => 23,  115 => 22,  102 => 21,  100 => 20,  97 => 19,  84 => 18,  82 => 17,  79 => 16,  76 => 15,  63 => 14,  60 => 13,  58 => 12,  55 => 11,  50 => 10,  48 => 9,  45 => 8,  39 => 6,  34 => 5,  31 => 4,  26 => 3,  21 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@eles_coreframe/inc/widgets.html", "");
    }
}
