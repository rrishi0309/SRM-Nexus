<?php

/* @gothick_recaptcha2/captcha_recaptcha2.html */
class __TwigTemplate_8e09e5170870a1aef671164bce72e983d80411dcb3192ac091e8a53aa244ed85 extends Twig_Template
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
        echo "<!-- gothick/recaptcha2 all captcha_recaptcha2 -->
";
        // line 2
        if (($context["S_RECAPTCHA_AVAILABLE"] ?? null)) {
            // line 3
            echo "\t";
            $location = "recaptcha_scripts.html";
            $namespace = false;
            if (strpos($location, '@') === 0) {
                $namespace = substr($location, 1, strpos($location, '/') - 1);
                $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
                $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
            }
            $this->loadTemplate("recaptcha_scripts.html", "@gothick_recaptcha2/captcha_recaptcha2.html", 3)->display($context);
            if ($namespace) {
                $this->env->setNamespaceLookUpOrder($previous_look_up_order);
            }
            // line 4
            echo "\t<dl>
\t<dt><label>";
            // line 5
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("GOTHICK_RECAPTCHA2_CONFIRM_HUMAN");
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("COLON");
            echo "</label><br /><span>";
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("GOTHICK_RECAPTCHA2_EXPLAIN");
            echo "</span></dt>
\t<dd class=\"captcha\">
\t\t<div class=\"g-recaptcha\" data-sitekey=\"";
            // line 7
            echo ($context["RECAPTCHA2_SITEKEY"] ?? null);
            echo "\" ></div>
\t\t<noscript>
\t\t\t<div>
\t\t\t\t";
            // line 10
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("GOTHICK_RECAPTCHA2_NOSCRIPT");
            echo "
\t\t\t</div>
\t\t</noscript>
\t</dd>
\t</dl>
";
        } else {
            // line 16
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("GOTHICK_RECAPTCHA2_NOT_AVAILABLE");
            echo "
";
        }
    }

    public function getTemplateName()
    {
        return "@gothick_recaptcha2/captcha_recaptcha2.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  63 => 16,  54 => 10,  48 => 7,  40 => 5,  37 => 4,  24 => 3,  22 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@gothick_recaptcha2/captcha_recaptcha2.html", "");
    }
}
