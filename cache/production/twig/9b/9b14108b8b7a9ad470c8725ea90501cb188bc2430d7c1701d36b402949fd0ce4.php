<?php

/* @eles_coreframe/widgets/auth.html */
class __TwigTemplate_de64faec5959d73e6131daa49101f68fba7d1be994b8ce6b801bd9ed4af49793 extends Twig_Template
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
        echo "<div class=\"widget widget-";
        echo $this->getAttribute(($context["c_sidebar_widgets"] ?? null), "WID", array());
        echo "\">
  <h3 class=\"widget-title\">
    <a href=\"";
        // line 3
        echo ($context["U_LOGIN_LOGOUT"] ?? null);
        echo "\">";
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("LOGIN_LOGOUT");
        echo "</a> &middot;
    ";
        // line 4
        if (($context["S_REGISTER_ENABLED"] ?? null)) {
            echo "<a href=\"";
            echo ($context["U_REGISTER"] ?? null);
            echo "\">";
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("REGISTER");
            echo "</a>";
        }
        // line 5
        echo "  </h3>
  <div class=\"widget-body\">
    <form method=\"post\" action=\"";
        // line 7
        echo ($context["S_LOGIN_ACTION"] ?? null);
        echo "\">
      <fieldset class=\"clearfix\">
        <label for=\"username\" class=\"formline\">
          <span>";
        // line 10
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("USERNAME");
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("COLON");
        echo "</span>
          <input type=\"text\" name=\"username\" id=\"username\" size=\"10\" class=\"inputbox\" title=\"";
        // line 11
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("USERNAME");
        echo "\" />
        </label>
        <label for=\"password\" class=\"formline\">
          <span>";
        // line 14
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("PASSWORD");
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("COLON");
        echo "</span>
          <input type=\"password\" name=\"password\" id=\"password\" size=\"10\" class=\"inputbox\" title=\"";
        // line 15
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("PASSWORD");
        echo "\" autocomplete=\"off\" />
        </label>

        <div class=\"left\">
          ";
        // line 19
        if (($context["U_SEND_PASSWORD"] ?? null)) {
            // line 20
            echo "            <a href=\"";
            echo ($context["U_SEND_PASSWORD"] ?? null);
            echo "\">";
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("FORGOT_PASS");
            echo "</a>
          ";
        }
        // line 22
        echo "          ";
        if (($context["S_AUTOLOGIN_ENABLED"] ?? null)) {
            // line 23
            echo "            <label for=\"autologin\">
              <input type=\"checkbox\" name=\"autologin\" id=\"autologin\" />
              ";
            // line 25
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("LOG_ME_IN");
            echo "
            </label>
          ";
        }
        // line 28
        echo "        </div>
        <input type=\"submit\" name=\"login\" value=\"";
        // line 29
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("LOGIN");
        echo "\" class=\"button2\" />
        ";
        // line 30
        echo ($context["S_LOGIN_REDIRECT"] ?? null);
        echo "
      </fieldset>
    </form>
  </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "@eles_coreframe/widgets/auth.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  102 => 30,  98 => 29,  95 => 28,  89 => 25,  85 => 23,  82 => 22,  74 => 20,  72 => 19,  65 => 15,  60 => 14,  54 => 11,  49 => 10,  43 => 7,  39 => 5,  31 => 4,  25 => 3,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@eles_coreframe/widgets/auth.html", "");
    }
}
