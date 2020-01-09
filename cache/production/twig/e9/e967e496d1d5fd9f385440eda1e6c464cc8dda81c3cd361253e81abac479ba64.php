<?php

/* @vse_topicpreview/event/overall_footer_after.html */
class __TwigTemplate_ba1c944291064450a9fa5369114a7cc05004f4a2e261961f31a3383187f1efd4 extends Twig_Template
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
        if ((($context["S_TOPICPREVIEW"] ?? null) && ($context["TOPICPREVIEW_THEME"] ?? null))) {
            // line 2
            echo "\t";
            $asset_file = "@vse_topicpreview/topicpreview.js";
            $asset = new \phpbb\template\asset($asset_file, $this->getEnvironment()->get_path_helper(), $this->getEnvironment()->get_filesystem());
            if (substr($asset_file, 0, 2) !== './' && $asset->is_relative()) {
                $asset_path = $asset->get_path();                $local_file = $this->getEnvironment()->get_phpbb_root_path() . $asset_path;
                if (!file_exists($local_file)) {
                    $local_file = $this->getEnvironment()->findTemplate($asset_path);
                    $asset->set_path($local_file, true);
                }
                $asset->add_assets_version('29');
            }
            $this->getEnvironment()->get_assets_bag()->add_script($asset);            // line 3
            echo "\t<script>
\t\tjQuery(function() {
\t\t\tjQuery('.topictitle').topicPreview({
\t\t\t\tdir: '";
            // line 6
            echo ($context["S_CONTENT_DIRECTION"] ?? null);
            echo "',
\t\t\t\tdelay: ";
            // line 7
            echo ($context["TOPICPREVIEW_DELAY"] ?? null);
            echo ",
\t\t\t\twidth: ";
            // line 8
            echo ($context["TOPICPREVIEW_WIDTH"] ?? null);
            echo ",
\t\t\t\tdrift: ";
            // line 9
            echo ($context["TOPICPREVIEW_DRIFT"] ?? null);
            echo ",
\t\t\t\tposition: {left: 35, top: 25},
\t\t\t\tnoavatar: '";
            // line 11
            echo ($context["T_THEME_PATH"] ?? null);
            echo "/images/no_avatar.gif'
\t\t\t});
\t\t});
\t</script>
";
        } elseif ((        // line 15
($context["S_TOPICPREVIEW"] ?? null) &&  !($context["TOPICPREVIEW_THEME"] ?? null))) {
            // line 16
            echo "\t<script>
\t\tjQuery(function() {
\t\t\tjQuery('.topictitle').attr('title', function() {
\t\t\t\treturn jQuery(this).closest('li, tr').find('.topic_preview_first').text() || undefined;
\t\t\t});
\t\t});
\t</script>
";
        }
    }

    public function getTemplateName()
    {
        return "@vse_topicpreview/event/overall_footer_after.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  64 => 16,  62 => 15,  55 => 11,  50 => 9,  46 => 8,  42 => 7,  38 => 6,  33 => 3,  21 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@vse_topicpreview/event/overall_footer_after.html", "");
    }
}
