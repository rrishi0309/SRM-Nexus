<?php

/* @eles_coreframe/event/overall_header_head_append.html */
class __TwigTemplate_1527b244791c6aa644a26b629198153946b18bb9a42ad5d3c85c3188842539ad extends Twig_Template
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
        if (($context["C_CODE_HEADTAG_ON"] ?? null)) {
            // line 2
            echo ($context["C_CODE_HEADTAG"] ?? null);
            echo "
";
        }
        // line 4
        echo "
";
        // line 5
        $context["C_FAVICON"] = ((        // line 6
($context["C_FAVICON_URL"] ?? null)) ? (($context["C_FAVICON_URL"] ?? null)) : ((($context["T_THEME_PATH"] ?? null) . "/images/favicon.png")));
        // line 7
        echo "<link
  href=\"";
        // line 8
        echo ($context["C_FAVICON"] ?? null);
        echo "?assets_version=";
        echo ($context["T_ASSETS_VERSION"] ?? null);
        echo "\"
  rel=\"shortcut icon\">

";
        // line 11
        echo ($context["C_FONTS_URL"] ?? null);
        echo "

";
        // line 13
        if ((($context["C_STYLE_THEME"] ?? null) !== "original")) {
            // line 14
            echo "  ";
            $asset_file = (("@eles_coreframe/colors.css.php?" . ($context["C_STYLE_QUERY"] ?? null)) . "");
            $asset = new \phpbb\template\asset($asset_file, $this->getEnvironment()->get_path_helper(), $this->getEnvironment()->get_filesystem());
            if (substr($asset_file, 0, 2) !== './' && $asset->is_relative()) {
                $asset_path = $asset->get_path();                $local_file = $this->getEnvironment()->get_phpbb_root_path() . $asset_path;
                if (!file_exists($local_file)) {
                    $local_file = $this->getEnvironment()->findTemplate($asset_path);
                    $asset->set_path($local_file, true);
                }
                $asset->add_assets_version('29');
            }
            $this->getEnvironment()->get_assets_bag()->add_stylesheet($asset);        }
    }

    public function getTemplateName()
    {
        return "@eles_coreframe/event/overall_header_head_append.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  50 => 14,  48 => 13,  43 => 11,  35 => 8,  32 => 7,  30 => 6,  29 => 5,  26 => 4,  21 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@eles_coreframe/event/overall_header_head_append.html", "");
    }
}
