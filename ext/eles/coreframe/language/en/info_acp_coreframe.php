<?php

if ( ! defined( 'IN_PHPBB' ) ) { exit; }
if ( empty( $lang ) || ! is_array( $lang ) ) { $lang = array(); }


$lang = array_merge( $lang, array(

	// ACP
	'C_ACP'          => 'Coreframe',
	'C_ACP_LOG'      => '<strong>Altered COREFRAME settings</strong>',
	'C_UPDATED'      => 'The theme options have been updated.',


	// MODES
	'C_ACP_GENERAL'  => 'General settings',
	'C_ACP_ADS'      => 'Advertisements &amp; Banners',
	'C_ACP_MENUS'    => 'Menus',
	'C_ACP_STYLE'    => 'Style',
	'C_ACP_TEMPLATE' => 'Template',
	'C_ACP_WIDGETS'  => 'Widgets',

	// Shared

));
