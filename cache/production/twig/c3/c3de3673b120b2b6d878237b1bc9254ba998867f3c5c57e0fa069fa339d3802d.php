<?php

/* index_body.html */
class __TwigTemplate_b2b84fd65e8617a4bb2561516517ae4af8161e97e53fbfe44c58ffc496633ebc extends Twig_Template
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
        $location = "overall_header.html";
        $namespace = false;
        if (strpos($location, '@') === 0) {
            $namespace = substr($location, 1, strpos($location, '/') - 1);
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
        }
        $this->loadTemplate("overall_header.html", "index_body.html", 1)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
        // line 2
        echo "
<p class=\"";
        // line 3
        echo ($context["S_CONTENT_FLOW_END"] ?? null);
        echo " responsive-center time";
        if (($context["S_USER_LOGGED_IN"] ?? null)) {
            echo " rightside";
        }
        echo " hidden-xs\">";
        if (($context["S_USER_LOGGED_IN"] ?? null)) {
            echo ($context["LAST_VISIT_DATE"] ?? null);
        } else {
            echo ($context["CURRENT_TIME"] ?? null);
        }
        echo "</p>
";
        // line 4
        if (($context["S_USER_LOGGED_IN"] ?? null)) {
            echo "<p class=\"responsive-center time hidden-xs\">";
            echo ($context["CURRENT_TIME"] ?? null);
            echo "</p>";
        }
        // line 5
        echo "
";
        // line 6
        // line 7
        if (($context["U_MARK_FORUMS"] ?? null)) {
            // line 8
            echo "\t<div class=\"action-bar compact\">
\t\t<a href=\"";
            // line 9
            echo ($context["U_MARK_FORUMS"] ?? null);
            echo "\" class=\"mark-read rightside\" accesskey=\"m\" data-ajax=\"mark_forums_read\">";
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("MARK_FORUMS_READ");
            echo "</a>
\t</div>
";
        }
        // line 12
        // line 13
        echo "
";
        // line 14
        $location = "forumlist_body.html";
        $namespace = false;
        if (strpos($location, '@') === 0) {
            $namespace = substr($location, 1, strpos($location, '/') - 1);
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
        }
        $this->loadTemplate("forumlist_body.html", "index_body.html", 14)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
        // line 15
        echo "
";
        // line 16
        // line 17
        echo "


";
        // line 20
        // line 21
        echo "


<div class=\"stats-blocks\">
  ";
        // line 25
        if (($context["NEWEST_USER"] ?? null)) {
            // line 26
            echo "    <div class=\"col-block statistics\">
      <h3>
        <i class=\"fa fa-fw fa-signal\"></i>
        ";
            // line 29
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("STATISTICS");
            echo "
      </h3>
      <ul>
        ";
            // line 32
            // line 33
            echo "        <li>";
            echo ($context["TOTAL_POSTS"] ?? null);
            echo "</li>
        <li>";
            // line 34
            echo ($context["TOTAL_TOPICS"] ?? null);
            echo "</li>
        <li>";
            // line 35
            echo ($context["TOTAL_USERS"] ?? null);
            echo "</li>
        ";
            // line 36
            // line 37
            echo "      </ul>
      <p>";
            // line 38
            echo ($context["NEWEST_USER"] ?? null);
            echo "</p>
    </div>
  ";
        }
        // line 41
        echo "
\t";
        // line 42
        if (($context["S_DISPLAY_BIRTHDAY_LIST"] ?? null)) {
            // line 43
            echo "\t\t<div class=\"col-block birthday-list\">
\t\t\t<h3>
\t\t\t\t<i class=\"fa fa-fw fa-birthday-cake\"></i>
\t\t\t\t";
            // line 46
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("BIRTHDAYS");
            echo "
\t\t\t</h3>
\t\t\t<p>
\t\t\t\t";
            // line 49
            // line 50
            echo "\t\t\t\t";
            if (twig_length_filter($this->env, $this->getAttribute(($context["loops"] ?? null), "birthdays", array()))) {
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("CONGRATULATIONS");
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("COLON");
                echo " <strong>";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["loops"] ?? null), "birthdays", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["birthdays"]) {
                    echo $this->getAttribute($context["birthdays"], "USERNAME", array());
                    if (($this->getAttribute($context["birthdays"], "AGE", array()) !== "")) {
                        echo " (";
                        echo $this->getAttribute($context["birthdays"], "AGE", array());
                        echo ")";
                    }
                    if ( !$this->getAttribute($context["birthdays"], "S_LAST_ROW", array())) {
                        echo ", ";
                    }
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['birthdays'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                echo "</strong>";
            } else {
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("NO_BIRTHDAYS");
            }
            // line 51
            echo "\t\t\t\t";
            // line 52
            echo "\t\t\t</p>
\t\t</div>
\t";
        }
        // line 55
        echo "
  ";
        // line 56
        if (($context["S_DISPLAY_ONLINE_LIST"] ?? null)) {
            // line 57
            echo "    <div class=\"col-block online-list\">
      <h3>
        <i class=\"fa fa-fw fa-users\"></i>
        ";
            // line 60
            if (($context["U_VIEWONLINE"] ?? null)) {
                echo "<a href=\"";
                echo ($context["U_VIEWONLINE"] ?? null);
                echo "\">";
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("WHO_IS_ONLINE");
                echo "</a>
        ";
            } else {
                // line 61
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("WHO_IS_ONLINE");
            }
            // line 62
            echo "      </h3>
      <p>
        ";
            // line 64
            // line 65
            echo "        ";
            echo ($context["TOTAL_USERS_ONLINE"] ?? null);
            echo "<br />
        <p class=\"online-users\">";
            // line 66
            echo ($context["LOGGED_IN_USER_LIST"] ?? null);
            echo "</p>
        ";
            // line 67
            if (($context["LEGEND"] ?? null)) {
                echo "<em class=\"legend\">";
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("LEGEND");
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("COLON");
                echo " ";
                echo ($context["LEGEND"] ?? null);
                echo "</em>";
            }
            // line 68
            echo "        ";
            // line 69
            echo "      </p>
    </div>
  ";
        }
        // line 72
        echo "</div>

";
        // line 74
        // line 75
        echo "
";
        // line 76
        $location = "overall_footer.html";
        $namespace = false;
        if (strpos($location, '@') === 0) {
            $namespace = substr($location, 1, strpos($location, '/') - 1);
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
        }
        $this->loadTemplate("overall_footer.html", "index_body.html", 76)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
    }

    public function getTemplateName()
    {
        return "index_body.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  250 => 76,  247 => 75,  246 => 74,  242 => 72,  237 => 69,  235 => 68,  226 => 67,  222 => 66,  217 => 65,  216 => 64,  212 => 62,  209 => 61,  200 => 60,  195 => 57,  193 => 56,  190 => 55,  185 => 52,  183 => 51,  157 => 50,  156 => 49,  150 => 46,  145 => 43,  143 => 42,  140 => 41,  134 => 38,  131 => 37,  130 => 36,  126 => 35,  122 => 34,  117 => 33,  116 => 32,  110 => 29,  105 => 26,  103 => 25,  97 => 21,  96 => 20,  91 => 17,  90 => 16,  87 => 15,  75 => 14,  72 => 13,  71 => 12,  63 => 9,  60 => 8,  58 => 7,  57 => 6,  54 => 5,  48 => 4,  34 => 3,  31 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "index_body.html", "");
    }
}
