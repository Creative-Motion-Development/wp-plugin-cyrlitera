<?php
	/**
	 * Admin boot
	 * @author Webcraftic <wordpress.webraftic@gmail.com>
	 * @copyright Webcraftic 25.05.2017
	 * @version 1.0
	 */

	// Exit if accessed directly
	if( !defined('ABSPATH') ) {
		exit;
	}

	function wbcr_dan_rating_widget_url($page_url, $plugin_name)
	{
		if( $plugin_name == 'wbcr_dan' ) {
			return 'https://goo.gl/68ucHp';
		}

		return $page_url;
	}

	add_filter('wbcr_factory_imppage_rating_widget_url', 'wbcr_dan_rating_widget_url', 10, 2);

	function wbcr_dan_group_options($options)
	{
		$options[] = array(
			'name' => 'hide_admin_notices',
			'title' => __('Hide admin notices', 'disable-admin-notices'),
			'tags' => array(),
			'values' => array('hide_admin_notices' => 'only_selected')
		);
		$options[] = array(
			'name' => 'show_notices_in_adminbar',
			'title' => __('Enable hidden notices in adminbar', 'disable-admin-notices'),
			'tags' => array()
		);

		/*$options[] = array(
			'name' => 'hidden_notices',
			'title' => __('Hidden notices', 'disable-admin-notices'),
			'tags' => array()
		);*/

		return $options;
	}

	function wbcr_dan_set_plugin_meta($links, $file)
	{
		if( $file == WDN_PLUGIN_BASE ) {
			$links[] = '<a href="https://goo.gl/TcMcS4" style="color: #FF5722;font-weight: bold;" target="_blank">' . __('Get ultimate plugin free', 'disable-admin-notices') . '</a>';
		}

		return $links;
	}

	add_filter("wbcr_clearfy_group_options", 'wbcr_dan_group_options');

	if( !defined('LOADING_DISABLE_ADMIN_NOTICES_AS_ADDON') ) {
		add_filter('plugin_row_meta', 'wbcr_dan_set_plugin_meta', 10, 2);
	}



