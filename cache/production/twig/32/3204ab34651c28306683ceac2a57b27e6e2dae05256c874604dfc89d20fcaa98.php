<?php

/* @eles_coreframe/inc/footer.html */
class __TwigTemplate_d1cfe8b4540558c2b2f0d82e505d1b623c43d84fdb992cd1b496f3cdefa8b1b6 extends Twig_Template
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
        echo "<div class=\"navbar bottom\" role=\"navigation\">
  <div class=\"inner";
        // line 2
        if ((($context["C_LAYOUT_MODE"] ?? null) === "contained")) {
            echo " container";
        }
        echo "\">
  ";
        // line 3
        $location = "navbar_footer.html";
        $namespace = false;
        if (strpos($location, '@') === 0) {
            $namespace = substr($location, 1, strpos($location, '/') - 1);
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
        }
        $this->loadTemplate("navbar_footer.html", "@eles_coreframe/inc/footer.html", 3)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
        // line 4
        echo "  </div>
</div>

<div class=\"footer-inner";
        // line 7
        if ((($context["C_LAYOUT_MODE"] ?? null) === "contained")) {
            echo " container";
        }
        echo "\">

  <div class=\"row\">
  ";
        // line 10
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["loops"] ?? null), "c_footer_widgets", array()));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["c_footer_widgets"]) {
            // line 11
            echo "    ";
            if (($this->getAttribute($context["c_footer_widgets"], "WID", array()) !== "none")) {
                // line 12
                echo "
    ";
                // line 13
                if (($this->getAttribute($context["c_footer_widgets"], "S_ROW_COUNT", array()) == 0)) {
                    // line 14
                    echo "      ";
                    $context["WF_CLASS"] = "col-sm-4";
                    // line 15
                    echo "    ";
                } elseif (($this->getAttribute($context["c_footer_widgets"], "S_ROW_COUNT", array()) == 1)) {
                    // line 16
                    echo "      ";
                    $context["WF_CLASS"] = "col-sm-5";
                    // line 17
                    echo "    ";
                } elseif (($this->getAttribute($context["c_footer_widgets"], "S_ROW_COUNT", array()) == 2)) {
                    // line 18
                    echo "      ";
                    $context["WF_CLASS"] = "col-sm-3";
                    // line 19
                    echo "    ";
                }
                // line 20
                echo "
    <div class=\"widget footer-widget widget-";
                // line 21
                echo $this->getAttribute($context["c_footer_widgets"], "WID", array());
                echo " ";
                echo ($context["WF_CLASS"] ?? null);
                echo "\">
      ";
                // line 22
                if ($this->getAttribute($context["c_footer_widgets"], "TITLE", array())) {
                    // line 23
                    echo "        <h3 class=\"widget-title\">";
                    echo $this->getAttribute($context["c_footer_widgets"], "TITLE", array());
                    echo "</h3>
      ";
                }
                // line 25
                echo "      <div class=\"widget-body\">
        ";
                // line 26
                $value = "c_footer_widgets";
                $context['definition']->set('OPT', $value);
                // line 27
                echo "        ";
                $location = "@eles_coreframe/inc/widgets.html";
                $namespace = false;
                if (strpos($location, '@') === 0) {
                    $namespace = substr($location, 1, strpos($location, '/') - 1);
                    $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
                    $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
                }
                $this->loadTemplate("@eles_coreframe/inc/widgets.html", "@eles_coreframe/inc/footer.html", 27)->display($context);
                if ($namespace) {
                    $this->env->setNamespaceLookUpOrder($previous_look_up_order);
                }
                // line 28
                echo "      </div>
    </div>
    ";
            }
            // line 31
            echo "  ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['c_footer_widgets'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 32
        echo "  </div>

</div>

<div class=\"endbar\">
  <div class=\"inner";
        // line 37
        if ((($context["C_LAYOUT_MODE"] ?? null) === "contained")) {
            echo " container";
        }
        echo "\">
    ";
        // line 38
        // line 39
        echo "
    ";
        // line 40
        if (($context["C_COPYRIGHT_ON"] ?? null)) {
            // line 41
            echo "    <p class=\"copyright";
            if (($context["C_COPYRIGHT_TEXT"] ?? null)) {
                echo " left col-sm-6";
            }
            echo "\">
    

     
      Designed With <i class=\"fa fa-heart animate-pulse\"></i> By
      <a href=\"https://www.pixlz.in\" target=\"_blank\" title=\"Pixlz\">Pixlz</a>.
\t
    </p>
   
   
    ";
        }
        // line 52
        echo "    ";
        if (($context["C_COPYRIGHT_TEXT"] ?? null)) {
            // line 53
            echo "      <p class=\"copyright";
            if (($context["C_COPYRIGHT_ON"] ?? null)) {
                echo " right col-sm-6";
            }
            echo "\">
        ";
            // line 54
            echo ($context["C_COPYRIGHT_TEXT"] ?? null);
            echo "
      </p>
    ";
        }
        // line 57
        echo "    ";
        // line 58
        echo "  </div>
</div>

";
    }

    public function getTemplateName()
    {
        return "@eles_coreframe/inc/footer.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  205 => 58,  203 => 57,  197 => 54,  190 => 53,  187 => 52,  170 => 41,  168 => 40,  165 => 39,  164 => 38,  158 => 37,  151 => 32,  137 => 31,  132 => 28,  119 => 27,  116 => 26,  113 => 25,  107 => 23,  105 => 22,  99 => 21,  96 => 20,  93 => 19,  90 => 18,  87 => 17,  84 => 16,  81 => 15,  78 => 14,  76 => 13,  73 => 12,  70 => 11,  53 => 10,  45 => 7,  40 => 4,  28 => 3,  22 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@eles_coreframe/inc/footer.html", "");
    }
}
