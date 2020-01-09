<?php

/* @vinabb_emojipicker/event/overall_footer_body_after.html */
class __TwigTemplate_e1dcda7f46a5ddfbe381d710d4a1bbf220b5a9abfabed9bf7fc21aea133d847a extends Twig_Template
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
        $context["S_DMZX_MCHAT"] = (($context["MCHAT_INDEX"] ?? null) && (isset($context["MCHAT_LOCATION"]) || array_key_exists("MCHAT_LOCATION", $context)));
        // line 2
        $context["S_BOARDTOOLS_QUICKREPLY"] = (isset($context["S_QR_QUICKQUOTE_ENABLE"]) || array_key_exists("S_QR_QUICKQUOTE_ENABLE", $context));
        // line 3
        $context["S_VSE_ABBC3"] = (isset($context["ABBC3_BBCODE_ICONS"]) || array_key_exists("ABBC3_BBCODE_ICONS", $context));
        // line 4
        echo "
";
        // line 5
        if (((((((($context["S_IN_POSTING"] ?? null) || ($context["S_COMPOSE_PM"] ?? null)) || ($context["S_QUICK_REPLY"] ?? null)) || (isset($context["SIGNATURE_PREVIEW"]) || array_key_exists("SIGNATURE_PREVIEW", $context))) || ($context["S_DMZX_MCHAT"] ?? null)) || ($context["S_BOARDTOOLS_QUICKREPLY"] ?? null)) || ($context["S_VSE_ABBC3"] ?? null))) {
            // line 6
            echo "
";
            // line 7
            $asset_file = "@vinabb_emojipicker/emojionearea.min.css";
            $asset = new \phpbb\template\asset($asset_file, $this->getEnvironment()->get_path_helper(), $this->getEnvironment()->get_filesystem());
            if (substr($asset_file, 0, 2) !== './' && $asset->is_relative()) {
                $asset_path = $asset->get_path();                $local_file = $this->getEnvironment()->get_phpbb_root_path() . $asset_path;
                if (!file_exists($local_file)) {
                    $local_file = $this->getEnvironment()->findTemplate($asset_path);
                    $asset->set_path($local_file, true);
                }
                $asset->add_assets_version('29');
            }
            $this->getEnvironment()->get_assets_bag()->add_stylesheet($asset);            // line 8
            $asset_file = "@vinabb_emojipicker/jquery.caret.min.js";
            $asset = new \phpbb\template\asset($asset_file, $this->getEnvironment()->get_path_helper(), $this->getEnvironment()->get_filesystem());
            if (substr($asset_file, 0, 2) !== './' && $asset->is_relative()) {
                $asset_path = $asset->get_path();                $local_file = $this->getEnvironment()->get_phpbb_root_path() . $asset_path;
                if (!file_exists($local_file)) {
                    $local_file = $this->getEnvironment()->findTemplate($asset_path);
                    $asset->set_path($local_file, true);
                }
                $asset->add_assets_version('29');
            }
            $this->getEnvironment()->get_assets_bag()->add_script($asset);            // line 9
            $asset_file = "@vinabb_emojipicker/jquery.textcomplete.min.js";
            $asset = new \phpbb\template\asset($asset_file, $this->getEnvironment()->get_path_helper(), $this->getEnvironment()->get_filesystem());
            if (substr($asset_file, 0, 2) !== './' && $asset->is_relative()) {
                $asset_path = $asset->get_path();                $local_file = $this->getEnvironment()->get_phpbb_root_path() . $asset_path;
                if (!file_exists($local_file)) {
                    $local_file = $this->getEnvironment()->findTemplate($asset_path);
                    $asset->set_path($local_file, true);
                }
                $asset->add_assets_version('29');
            }
            $this->getEnvironment()->get_assets_bag()->add_script($asset);            // line 10
            $asset_file = "@vinabb_emojipicker/emojione.min.js";
            $asset = new \phpbb\template\asset($asset_file, $this->getEnvironment()->get_path_helper(), $this->getEnvironment()->get_filesystem());
            if (substr($asset_file, 0, 2) !== './' && $asset->is_relative()) {
                $asset_path = $asset->get_path();                $local_file = $this->getEnvironment()->get_phpbb_root_path() . $asset_path;
                if (!file_exists($local_file)) {
                    $local_file = $this->getEnvironment()->findTemplate($asset_path);
                    $asset->set_path($local_file, true);
                }
                $asset->add_assets_version('29');
            }
            $this->getEnvironment()->get_assets_bag()->add_script($asset);            // line 11
            $asset_file = "@vinabb_emojipicker/emojionearea.min.js";
            $asset = new \phpbb\template\asset($asset_file, $this->getEnvironment()->get_path_helper(), $this->getEnvironment()->get_filesystem());
            if (substr($asset_file, 0, 2) !== './' && $asset->is_relative()) {
                $asset_path = $asset->get_path();                $local_file = $this->getEnvironment()->get_phpbb_root_path() . $asset_path;
                if (!file_exists($local_file)) {
                    $local_file = $this->getEnvironment()->findTemplate($asset_path);
                    $asset->set_path($local_file, true);
                }
                $asset->add_assets_version('29');
            }
            $this->getEnvironment()->get_assets_bag()->add_script($asset);            // line 12
            echo "
<script>
\t/** global bbtags */

\t\$(document).ready(function()
\t{
\t\t/**
\t\t* BBCode buttons
\t\t*
\t\t* 3.1:
\t\t*\t<input name=\"addbbcode*\"...
\t\t*\t<input name=\"addlistitem\"...
\t\t*
\t\t* 3.2:
\t\t*\t<button name=\"addbbcode*\"...
\t\t*\t<button name=\"addlistitem\"...
\t\t*/
\t\t";
            // line 29
            if ( !($context["S_VSE_ABBC3"] ?? null)) {
                // line 30
                echo "\t\t\$('button[name^=\"addbbcode\"]').each(function()
\t\t{
\t\t\tvar bbcodeIndex = parseInt(\$(this).attr('onclick').replace('bbstyle(', '').replace(')', ''));

\t\t\t\$(this).attr({
\t\t\t\t'data-bbcode-tag-open': (typeof bbtags[bbcodeIndex] !== 'undefined') ? bbtags[bbcodeIndex] : '',
\t\t\t\t'data-bbcode-tag-close': (typeof bbtags[bbcodeIndex + 1] !== 'undefined') ? bbtags[bbcodeIndex + 1] : ''
\t\t\t});

\t\t\t\$(this).removeAttr('onclick');
\t\t});

\t\t\$('button[name=\"addlistitem\"]').each(function()
\t\t{
\t\t\t\$(this).attr({
\t\t\t\t'data-bbcode-tag-open': \$(this).val(),
\t\t\t\t'data-bbcode-tag-close': ''
\t\t\t});

\t\t\t\$(this).removeAttr('onclick');
\t\t})
\t\t";
            } else {
                // line 52
                echo "\t\t\$('input[name^=\"addbbcode\"]').each(function()
\t\t{
\t\t\tvar abbcData = {
\t\t\t\t'align': 'center',
\t\t\t\t'float': 'left',
\t\t\t\t'dir': 'rtl',
\t\t\t\t'marq': 'left',
\t\t\t\t'mod': \"";
                // line 59
                echo twig_escape_filter($this->env, ($context["ABBC3_USERNAME"] ?? null), "js");
                echo "\",
\t\t\t\t'highlight': 'yellow',
\t\t\t\t'glow': 'red',
\t\t\t\t'shadow': 'blue',
\t\t\t\t'dropshadow': 'blue',
\t\t\t\t'blur': 'blue'
\t\t\t};
\t\t\tvar onClick = \$(this).attr('onclick');
\t\t\tvar removeOnClick = true;

\t\t\tif (onClick.indexOf('bbstyle') !== -1)
\t\t\t{
\t\t\t\tvar bbcodeIndex = parseInt(onClick.replace('bbstyle(', '').replace(')', ''));

\t\t\t\t\$(this).attr({
\t\t\t\t\t'data-bbcode-tag-open': (typeof bbtags[bbcodeIndex] !== 'undefined') ? bbtags[bbcodeIndex] : '',
\t\t\t\t\t'data-bbcode-tag-close': (typeof bbtags[bbcodeIndex + 1] !== 'undefined') ? bbtags[bbcodeIndex + 1] : ''
\t\t\t\t});
\t\t\t}
\t\t\telse if (onClick.indexOf('url') !== -1 || onClick.indexOf('BBvideo') !== -1)
\t\t\t{
\t\t\t\tremoveOnClick = false;
\t\t\t}
\t\t\telse if (onClick.indexOf('bbspecial') !== -1)
\t\t\t{
\t\t\t\tvar bbcodeData = onClick.replace('bbspecial(', '').replace(')', '').replace(/'/g, '').split(',');
\t\t\t\tvar bbcodeIndex = parseInt(bbcodeData[1]);
\t\t\t\tvar bbcodeOpen = (typeof bbtags[bbcodeIndex] !== 'undefined') ? bbtags[bbcodeIndex] : '';
\t\t\t\tvar bbcodeClose = (typeof bbtags[bbcodeIndex + 1] !== 'undefined') ? bbtags[bbcodeIndex + 1] : '';

\t\t\t\tif (bbcodeData[0].indexOf('=') !== -1)
\t\t\t\t{
\t\t\t\t\tvar key = bbcodeData[0].replace('=', '');
\t\t\t\t\tbbcodeOpen = bbcodeOpen.replace('=', '=' + ((typeof abbcData[key] !== 'undefined') ? abbcData[key] : ''));
\t\t\t\t}

\t\t\t\t\$(this).attr({
\t\t\t\t\t'data-bbcode-tag-open': bbcodeOpen,
\t\t\t\t\t'data-bbcode-tag-close': bbcodeClose
\t\t\t\t});
\t\t\t}

\t\t\tif (removeOnClick)
\t\t\t{
\t\t\t\t\$(this).removeAttr('onclick');
\t\t\t}
\t\t});

\t\t\$('input[name=\"addlistitem\"]').each(function()
\t\t{
\t\t\t\$(this).attr({
\t\t\t\t'data-bbcode-tag-open': '[*]',
\t\t\t\t'data-bbcode-tag-close': ''
\t\t\t});

\t\t\t\$(this).removeAttr('onclick');
\t\t});
\t\t";
            }
            // line 117
            echo "
\t\t// Color picker
\t\t\$('a[data-color]').each(function()
\t\t{
\t\t\t\$(this).attr({
\t\t\t\t'data-bbcode-tag-open': '[color=#' + \$(this).data('color') + ']',
\t\t\t\t'data-bbcode-tag-close': '[/color]'
\t\t\t});

\t\t\t\$(this).removeAttr('href');
\t\t\t\$(this).css('cursor', 'pointer');
\t\t});

\t\t// Text size dropdown list
\t\t";
            // line 131
            if (($context["S_VSE_ABBC3"] ?? null)) {
                // line 132
                echo "\t\t\$('select[name=\"abbc3_font\"]').removeAttr('onchange');
\t\t\$('select[name=\"abbc3_addbbcode20\"]').attr('name', 'addbbcode20');
\t\t";
            }
            // line 135
            echo "
\t\t\$('select[name=\"addbbcode20\"]').removeAttr('onchange');

\t\t/**
\t\t* Quote buttons in the bottom review list
\t\t*
\t\t* 3.1:
\t\t*   BBCode: [quote=\"username\"]text[/quote]
\t\t*   Post: addquote(2, 'username', 'wrote');
\t\t*   PM: addquote(2, 'username', 'wrote');
\t\t* 3.2:
\t\t*   BBCode: [quote=username post_id=1 time=1483964216 user_id=2]
\t\t*\t\t\ttext
\t\t*\t\t\t[/quote]
\t\t*   Post: addquote(2, 'username', 'wrote', {post_id:1,time:1483964216,user_id:2});
\t\t*   PM: addquote(2, 'username', 'wrote', {time:1484074339,user_id:2});
\t\t*/
\t\t\$('a[onclick^=\"addquote\"]').each(function()
\t\t{
\t\t\tvar quoteData = \$(this).attr('onclick').replace(/['\\s{}]/g, '').replace('addquote(', '').replace(');', '').replace(/:/g, '=').split(',');
\t\t\tvar extra = (typeof quoteData[5] !== 'undefined') ? ' ' + quoteData[5] : '';

\t\t\t\$(this).attr({
\t\t\t\t'data-bbcode-tag-open': '[quote=' + quoteData[1] + ' ' + quoteData[3] + ' ' + quoteData[4] + extra + ']' + '<br>' + \$('#message_' + quoteData[0]).html() + '<br>',
\t\t\t\t'data-bbcode-tag-close': '[/quote]'
\t\t\t});

\t\t\t\$(this).removeAttr('href').removeAttr('onclick');
\t\t});

\t\t// Smilies
\t\tvar \$smiley = ";
            // line 166
            if (($context["S_DMZX_MCHAT"] ?? null)) {
                echo "\$('div#mchat-smilies > a')";
            } else {
                echo "\$('div#smiley-box > a')";
            }
            // line 167
            echo "
\t\t\$smiley.each(function()
\t\t{
\t\t\t\$(this).attr('data-smiley-code', \$(this).find('img').attr('alt'));
\t\t\t\$(this).removeAttr('href').removeAttr('onclick');
\t\t\t\$(this).css('cursor', 'pointer');
\t\t});

\t\t";
            // line 175
            if (($context["S_DMZX_MCHAT"] ?? null)) {
                // line 176
                echo "\t\t\$('input#mchat-input').attr('data-emojipicker', true);
\t\t\$('input#mchat-input').wrap('<div id=\"mchat-content\"></div>');
\t\t\$('div#mchat-content').css({
\t\t\t'position': 'absolute',
\t\t\t'z-index': 1
\t\t});
\t\t";
            }
            // line 183
            echo "
\t\t";
            // line 184
            if (($context["S_BOARDTOOLS_QUICKREPLY"] ?? null)) {
                // line 185
                echo "\t\t\$('div#register-and-translit').remove();
\t\t";
            }
            // line 187
            echo "
\t\t// Set the attribute data-emojipicker=\"true\" to load Emoji Picker on other extensions
\t\tvar \$emojiPicker = \$('div#message-box > textarea, [data-emojipicker=\"true\"]');

\t\t\$emojiPicker.emojioneArea({
\t\t\tattributes: {
\t\t\t\tdir: '";
            // line 193
            echo ($context["S_CONTENT_DIRECTION"] ?? null);
            echo "'
\t\t\t},
\t\t\tuseInternalCDN: false,
\t\t\timageType: 'svg',
\t\t\tpickerPosition: \"";
            // line 197
            echo ((($context["S_DMZX_MCHAT"] ?? null)) ? ("top") : ("bottom"));
            echo "\",
\t\t\tfiltersPosition: 'bottom',
\t\t\tbuttonTitle: \"";
            // line 199
            echo twig_escape_filter($this->env, $this->env->getExtension('phpbb\template\twig\extension')->lang("EMOJI_BUTTON_EXPLAIN"), "js");
            echo "\",
\t\t\tplaceholder: \"";
            // line 200
            echo twig_escape_filter($this->env, ($this->env->getExtension('phpbb\template\twig\extension')->lang("MESSAGE") . $this->env->getExtension('phpbb\template\twig\extension')->lang("ELLIPSIS")), "js");
            echo "\",
\t\t\tfilters: {
\t\t\t\ttones: {
\t\t\t\t\ttitle: \"";
            // line 203
            echo twig_escape_filter($this->env, $this->env->getExtension('phpbb\template\twig\extension')->lang(array(0 => "EMOJI_CATS", 1 => "TONES")), "js");
            echo "\"
\t\t\t\t},
\t\t\t\trecent: {
\t\t\t\t\ttitle: \"";
            // line 206
            echo twig_escape_filter($this->env, $this->env->getExtension('phpbb\template\twig\extension')->lang(array(0 => "EMOJI_CATS", 1 => "RECENT")), "js");
            echo "\"
\t\t\t\t},
\t\t\t\tsmileys_people: {
\t\t\t\t\ttitle: \"";
            // line 209
            echo twig_escape_filter($this->env, $this->env->getExtension('phpbb\template\twig\extension')->lang(array(0 => "EMOJI_CATS", 1 => "SMILIES")), "js");
            echo "\"
\t\t\t\t},
\t\t\t\tanimals_nature: {
\t\t\t\t\ttitle: \"";
            // line 212
            echo twig_escape_filter($this->env, $this->env->getExtension('phpbb\template\twig\extension')->lang(array(0 => "EMOJI_CATS", 1 => "NATURE")), "js");
            echo "\"
\t\t\t\t},
\t\t\t\tfood_drink: {
\t\t\t\t\ttitle: \"";
            // line 215
            echo twig_escape_filter($this->env, $this->env->getExtension('phpbb\template\twig\extension')->lang(array(0 => "EMOJI_CATS", 1 => "FOOD")), "js");
            echo "\"
\t\t\t\t},
\t\t\t\tactivity: {
\t\t\t\t\ttitle: \"";
            // line 218
            echo twig_escape_filter($this->env, $this->env->getExtension('phpbb\template\twig\extension')->lang(array(0 => "EMOJI_CATS", 1 => "ACTIVITIES")), "js");
            echo "\"
\t\t\t\t},
\t\t\t\ttravel_places: {
\t\t\t\t\ttitle: \"";
            // line 221
            echo twig_escape_filter($this->env, $this->env->getExtension('phpbb\template\twig\extension')->lang(array(0 => "EMOJI_CATS", 1 => "TRAVEL")), "js");
            echo "\"
\t\t\t\t},
\t\t\t\tobjects: {
\t\t\t\t\ttitle: \"";
            // line 224
            echo twig_escape_filter($this->env, $this->env->getExtension('phpbb\template\twig\extension')->lang(array(0 => "EMOJI_CATS", 1 => "OBJECTS")), "js");
            echo "\"
\t\t\t\t},
\t\t\t\tsymbols: {
\t\t\t\t\ttitle: \"";
            // line 227
            echo twig_escape_filter($this->env, $this->env->getExtension('phpbb\template\twig\extension')->lang(array(0 => "EMOJI_CATS", 1 => "SYMBOLS")), "js");
            echo "\"
\t\t\t\t},
\t\t\t\tflags: {
\t\t\t\t\ticon : 'flag_gb',// Feel free to change to your 2-letter country code
\t\t\t\t\ttitle: \"";
            // line 231
            echo twig_escape_filter($this->env, $this->env->getExtension('phpbb\template\twig\extension')->lang(array(0 => "EMOJI_CATS", 1 => "FLAGS")), "js");
            echo "\"
\t\t\t\t}
\t\t\t}
\t\t});

\t\t// Adjust the new contenteditable div as same as the original textarea
\t\tvar checkExist = setInterval(function()
\t\t{
\t\t\tif (\$('div.emojionearea').length)
\t\t\t{
\t\t\t\t// Keep the original font size
\t\t\t\t\$('div.emojionearea').css({
\t\t\t\t\t'font-size': \$emojiPicker.css('font-size')
\t\t\t\t});

\t\t\t\t// Keep the original height, break long words
\t\t\t\t\$('div.emojionearea-editor').css({
\t\t\t\t\t'min-height': \$emojiPicker.css('height'),
\t\t\t\t\t'word-break': 'break-all'
\t\t\t\t});

\t\t\t\t// Trick for FireFox incorrect caret position on the contenteditable elements: https://bugzilla.mozilla.org/show_bug.cgi?id=904846
\t\t\t\tif (/firefox/i.test(navigator.userAgent))
\t\t\t\t{
\t\t\t\t\t\$('div.emojionearea-editor').on('click', function()
\t\t\t\t\t{
\t\t\t\t\t\tif (!\$(this).html().length)
\t\t\t\t\t\t{
\t\t\t\t\t\t\t// Do not worry, any extra break lines will be removed
\t\t\t\t\t\t\t\$(this).html('<br>');
\t\t\t\t\t\t}
\t\t\t\t\t});
\t\t\t\t}

\t\t\t\t";
            // line 265
            if (($context["S_DMZX_MCHAT"] ?? null)) {
                // line 266
                echo "\t\t\t\t\$('div.emojionearea').css({
\t\t\t\t\t'width': (parseInt(\$('div#mchat-main').css('width')) - 10) + 'px'
\t\t\t\t});

\t\t\t\t\$('div#mchat-buttons').css({
\t\t\t\t\t'padding-top': '40px'
\t\t\t\t});
\t\t\t\t";
            }
            // line 274
            echo "
\t\t\t\tclearInterval(checkExist);
\t\t\t}
\t\t}, 100);

\t\t";
            // line 279
            if (($context["S_DMZX_MCHAT"] ?? null)) {
                // line 280
                echo "\t\t\$('div.emojionearea-editor').on('keydown', function(e)
\t\t{
\t\t\tif(e.keyCode == 13)
\t\t\t{
\t\t\t\t\$(this).blur();
\t\t\t\tmChat.add();
\t\t\t\t\$(this).html('');
\t\t\t\t\$(this).focus();
\t\t\t}
\t\t});
\t\t";
            }
            // line 291
            echo "\t});

\t(function (document, window, \$)
\t{
\t\t// Remove default click events from color buttons
\t\tphpbb.registerPalette = function(el)
\t\t{
\t\t\tvar\torientation\t= el.attr('data-orientation'),
\t\t\t\theight\t\t= el.attr('data-height'),
\t\t\t\twidth\t\t= el.attr('data-width'),
\t\t\t\ttarget\t\t= el.attr('data-target'),
\t\t\t\tbbcode\t\t= el.attr('data-bbcode');

\t\t\t// Insert the palette HTML into the container.
\t\t\tel.html(phpbb.colorPalette(orientation, width, height));
\t\t};

\t\tvar pasteHtmlAtCaret = function(html)
\t\t{
\t\t\tvar sel, range;

\t\t\tif (window.getSelection)
\t\t\t{
\t\t\t\tsel = window.getSelection();

\t\t\t\tif (sel.getRangeAt && sel.rangeCount)
\t\t\t\t{
\t\t\t\t\trange = sel.getRangeAt(0);
\t\t\t\t\trange.deleteContents();
\t\t\t\t\tvar el = document.createElement(\"div\");
\t\t\t\t\tel.innerHTML = html;
\t\t\t\t\tvar frag = document.createDocumentFragment(), node, lastNode;

\t\t\t\t\twhile (node = el.firstChild)
\t\t\t\t\t{
\t\t\t\t\t\tlastNode = frag.appendChild(node);
\t\t\t\t\t}

\t\t\t\t\trange.insertNode(frag);

\t\t\t\t\tif (lastNode)
\t\t\t\t\t{
\t\t\t\t\t\trange = range.cloneRange();
\t\t\t\t\t\trange.setStartAfter(lastNode);
\t\t\t\t\t\trange.collapse(true);
\t\t\t\t\t\tsel.removeAllRanges();
\t\t\t\t\t\tsel.addRange(range);
\t\t\t\t\t}
\t\t\t\t}
\t\t\t}
\t\t\telse if (document.selection && document.selection.type != \"Control\")
\t\t\t{
\t\t\t\tdocument.selection.createRange().pasteHTML(html);
\t\t\t}
\t\t};

\t\t";
            // line 347
            if (($context["S_PLUPLOAD"] ?? null)) {
                // line 348
                echo "\t\tvar updatePlaceInline = function()
\t\t{
\t\t\t\$('[data-attach-id]').each(function(i)
\t\t\t{
\t\t\t\tvar filename = \$(this).find('span.file-name > a').text();
\t\t\t\tvar \$button = \$(this).find('span.attach-controls > input');

\t\t\t\t\$button.on('click', function()
\t\t\t\t{
\t\t\t\t\t\$('div.emojionearea-editor').focus();
\t\t\t\t\tpasteHtmlAtCaret('[attachment=' + i + ']' + filename + '[/attachment]');
\t\t\t\t});
\t\t\t});
\t\t};

\t\t// Update inline-attach buttons on preview or edit mode
\t\tupdatePlaceInline();

\t\tphpbb.plupload.updateBbcode = function(action, index)
\t\t{
\t\t\t// Update attachment indexes or remove attachment tags assigned to deleted files
\t\t\tvar\ttextarea = \$('div.emojionearea-editor'),
\t\t\t\ttext = textarea.html(),
\t\t\t\tremoval = (action === 'removal');

\t\t\t// Return if the bbcode isn't used at all.
\t\t\tif (text.indexOf('[attachment=') === -1)
\t\t\t{
\t\t\t\treturn;
\t\t\t}

\t\t\tfunction runUpdate(i)
\t\t\t{
\t\t\t\tvar regex = new RegExp('\\\\[attachment=' + i + '\\\\](.*?)\\\\[\\\\/attachment\\\\]', 'g');
\t\t\t\ttext = text.replace(regex, function updateBbcode(_, fileName)
\t\t\t\t{
\t\t\t\t\t// Remove the bbcode if the file was removed.
\t\t\t\t\tif (removal && index === i)
\t\t\t\t\t{
\t\t\t\t\t\treturn '';
\t\t\t\t\t}

\t\t\t\t\tvar newIndex = i + ((removal) ? -1 : 1);

\t\t\t\t\treturn '[attachment=' + newIndex + ']' + fileName + '[/attachment]';
\t\t\t\t});
\t\t\t}

\t\t\t// Loop forwards when removing and backwards when adding ensures we don't
\t\t\t// corrupt the bbcode index.
\t\t\tvar i;

\t\t\tif (removal)
\t\t\t{
\t\t\t\tfor (i = index; i < phpbb.plupload.ids.length; i++)
\t\t\t\t{
\t\t\t\t\trunUpdate(i);
\t\t\t\t}
\t\t\t}
\t\t\telse
\t\t\t{
\t\t\t\tfor (i = phpbb.plupload.ids.length - 1; i >= index; i--)
\t\t\t\t{
\t\t\t\t\trunUpdate(i);
\t\t\t\t}
\t\t\t}

\t\t\ttextarea.html(text);
\t\t};

\t\t// Update inline-attach buttons
\t\tvar oldEnableUploader = phpbb.plupload.enableUploader;
\t\tphpbb.plupload.enableUploader = function()
\t\t{
\t\t\tupdatePlaceInline();
\t\t\toldEnableUploader();
\t\t};

\t\tvar oldDeleteFile = phpbb.plupload.deleteFile;
\t\tphpbb.plupload.deleteFile = function(row, attachId)
\t\t{
\t\t\t\$('[data-attach-id]').each(function(i)
\t\t\t{
\t\t\t\tvar \$button = \$(this).find('span.attach-controls > input');

\t\t\t\t// Remove click events on old inline-attach buttons
\t\t\t\t\$button.off('click');
\t\t\t});

\t\t\toldDeleteFile(row, attachId);
\t\t\tupdatePlaceInline();
\t\t};
\t\t";
            }
            // line 441
            echo "
\t\t";
            // line 442
            if (((($context["S_DMZX_MCHAT"] ?? null) || ($context["S_BOARDTOOLS_QUICKREPLY"] ?? null)) || ($context["S_VSE_ABBC3"] ?? null))) {
                // line 443
                echo "\t\tinsert_text = function(text)
\t\t{
\t\t\t\$('div.emojionearea-editor').focus();
\t\t\tpasteHtmlAtCaret(text);
\t\t};
\t\t";
            }
            // line 449
            echo "\t})(document, window, jQuery);
</script>

";
        }
    }

    public function getTemplateName()
    {
        return "@vinabb_emojipicker/event/overall_footer_body_after.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  619 => 449,  611 => 443,  609 => 442,  606 => 441,  511 => 348,  509 => 347,  451 => 291,  438 => 280,  436 => 279,  429 => 274,  419 => 266,  417 => 265,  380 => 231,  373 => 227,  367 => 224,  361 => 221,  355 => 218,  349 => 215,  343 => 212,  337 => 209,  331 => 206,  325 => 203,  319 => 200,  315 => 199,  310 => 197,  303 => 193,  295 => 187,  291 => 185,  289 => 184,  286 => 183,  277 => 176,  275 => 175,  265 => 167,  259 => 166,  226 => 135,  221 => 132,  219 => 131,  203 => 117,  142 => 59,  133 => 52,  109 => 30,  107 => 29,  88 => 12,  77 => 11,  66 => 10,  55 => 9,  44 => 8,  33 => 7,  30 => 6,  28 => 5,  25 => 4,  23 => 3,  21 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@vinabb_emojipicker/event/overall_footer_body_after.html", "");
    }
}
