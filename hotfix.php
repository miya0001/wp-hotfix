<?php

class Load_Hotfix
{
	public static function load()
	{
		global $wp_version;

		$hotfix_class = 'Firegoby\WP\Hotfix\Version_' . intval( str_replace( '.', '', $wp_version ) );

		if ( class_exists( $hotfix_class ) ) {
			$hotfix = new $hotfix_class(); // load if exists
			return $hotfix;
		} else {
			return false;
		}
	}
}

Load_Hotfix::load();
