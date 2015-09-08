<?php

namespace Firegoby\WP;

class Hotfix
{
	public function __construct()
	{
		add_action( 'plugins_loaded', array( $this, 'plugins_loaded' ) );
	}

	public function get_version()
	{
		global $wp_version;
		return $wp_version;
	}
}
