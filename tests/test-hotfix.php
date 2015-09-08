<?php

class HotfixTest extends WP_UnitTestCase
{
	/**
	 * @test
	 */
	function version_43()
	{
		global $wp_version;

		if ( '4.3' === $wp_version ) {
			$this->assertSame( '4.3', Load_Hotfix::load()->get_version() );

			do_action( 'admin_enqueue_scripts' );
			$this->expectOutputRegex( '/#adminmenu \{ transform: translateZ\(0\); \}/' );
			wp_print_styles( 'wp-admin' );
		} else {
			$this->assertSame( false, Load_Hotfix::load() );
		}
	}
}
