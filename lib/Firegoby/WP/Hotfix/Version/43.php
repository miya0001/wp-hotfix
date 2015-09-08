<?php

namespace Firegoby\WP\Hotfix;

class Version_43 extends \Firegoby\WP\Hotfix
{
	public function plugins_loaded()
	{
		add_action( 'admin_enqueue_scripts', array( $this, 'admin_enqueue_scripts' ) );
	}

	public function admin_enqueue_scripts()
	{
		wp_add_inline_style( 'wp-admin', '#adminmenu { transform: translateZ(0); }' );
	}
}
