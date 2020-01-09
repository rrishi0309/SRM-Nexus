<?php

/* ajaxbase.html */
class __TwigTemplate_5b96c2af27ddbb4ce49de2cfff35fa0883be6437f1998b7e96612b20abac1ae3 extends Twig_Template
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
        $this->loadTemplate("overall_header.html", "ajaxbase.html", 1)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
        // line 2
        echo "
<h1>";
        // line 3
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("OPTIONS");
        echo "</h1>

<form id=\"acp_board\" method=\"post\" action=\"";
        // line 5
        echo ($context["U_ACTION"] ?? null);
        echo "\">
\t<fieldset>
\t\t<legend>";
        // line 7
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("OPTIONS");
        echo "</legend>

\t\t<dl>
\t\t\t<dt>
\t\t\t\t<label for=\"ajaxbase_allow_preview\">";
        // line 11
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("AJAXBASE_ALLOW_PREVIEW");
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("COLON");
        echo "</label>
\t\t\t</dt>
\t\t\t<dd>
\t\t\t\t<label><input type=\"radio\" id=\"ajaxbase_allow_preview\" class=\"radio\" name=\"ajaxbase_allow_preview\" value=\"1\"";
        // line 14
        if (($context["AJAXBASE_ALLOW_PREVIEW"] ?? null)) {
            echo " checked=\"checked\"";
        }
        echo " /> ";
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("YES");
        echo "</label>
\t\t\t\t<label><input type=\"radio\" class=\"radio\" name=\"ajaxbase_allow_preview\" value=\"0\"";
        // line 15
        if ( !($context["AJAXBASE_ALLOW_PREVIEW"] ?? null)) {
            echo " checked=\"checked\"";
        }
        echo " /> ";
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("NO");
        echo "</label>
\t\t\t</dd>
\t\t</dl>

\t\t<dl>
\t\t\t<dt>
\t\t\t\t<label for=\"ajaxbase_allow_whoisonline\">";
        // line 21
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("AJAXBASE_ALLOW_WHOISONLINE");
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("COLON");
        echo "</label>
\t\t\t</dt>
\t\t\t<dd>
\t\t\t\t<label><input type=\"radio\" id=\"ajaxbase_allow_whoisonline\" class=\"radio\" name=\"ajaxbase_allow_whoisonline\" value=\"1\"";
        // line 24
        if (($context["AJAXBASE_ALLOW_WHOISONLINE"] ?? null)) {
            echo " checked=\"checked\"";
        }
        echo " /> ";
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("YES");
        echo "</label>
\t\t\t\t<label><input type=\"radio\" class=\"radio\" name=\"ajaxbase_allow_whoisonline\" value=\"0\"";
        // line 25
        if ( !($context["AJAXBASE_ALLOW_WHOISONLINE"] ?? null)) {
            echo " checked=\"checked\"";
        }
        echo " /> ";
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("NO");
        echo "</label>
\t\t\t</dd>
\t\t</dl>

\t\t<dl>
\t\t\t<dt>
\t\t\t\t<label for=\"ajaxbase_allow_statistics\">";
        // line 31
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("AJAXBASE_ALLOW_STATISTICS");
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("COLON");
        echo "</label>
\t\t\t</dt>
\t\t\t<dd>
\t\t\t\t<label><input type=\"radio\" id=\"ajaxbase_allow_statistics\" class=\"radio\" name=\"ajaxbase_allow_statistics\" value=\"1\"";
        // line 34
        if (($context["AJAXBASE_ALLOW_STATISTICS"] ?? null)) {
            echo " checked=\"checked\"";
        }
        echo " /> ";
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("YES");
        echo "</label>
\t\t\t\t<label><input type=\"radio\" class=\"radio\" name=\"ajaxbase_allow_statistics\" value=\"0\"";
        // line 35
        if ( !($context["AJAXBASE_ALLOW_STATISTICS"] ?? null)) {
            echo " checked=\"checked\"";
        }
        echo " /> ";
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("NO");
        echo "</label>
\t\t\t</dd>
\t\t</dl>
\t</fieldset>

\t<fieldset class=\"submit-buttons\">
\t\t<legend>";
        // line 41
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("SUBMIT");
        echo "</legend>
\t\t<input class=\"button1\" type=\"submit\" id=\"submit\" name=\"submit\" value=\"";
        // line 42
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("SUBMIT");
        echo "\" />
\t</fieldset>

\t";
        // line 45
        echo ($context["S_FORM_TOKEN"] ?? null);
        echo "
</form>

";
        // line 48
        $location = "overall_footer.html";
        $namespace = false;
        if (strpos($location, '@') === 0) {
            $namespace = substr($location, 1, strpos($location, '/') - 1);
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
        }
        $this->loadTemplate("overall_footer.html", "ajaxbase.html", 48)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
    }

    public function getTemplateName()
    {
        return "ajaxbase.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  151 => 48,  145 => 45,  139 => 42,  135 => 41,  122 => 35,  114 => 34,  107 => 31,  94 => 25,  86 => 24,  79 => 21,  66 => 15,  58 => 14,  51 => 11,  44 => 7,  39 => 5,  34 => 3,  31 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "ajaxbase.html", "");
    }
}
