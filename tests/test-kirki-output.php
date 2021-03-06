<?php

class Test_Kirki_Output extends WP_UnitTestCase {

	public function test_css_theme_mod() {
		set_theme_mod( 'foo', '#333' );
		$this->assertEquals(
		'@media (min-width: 700px) and (orientation: landscape) {body > #foo{background-color:#333 !important;}#bar{color:#333;}',
			Kirki_Output::css(
				'foo',
				'theme_mod',
				array(
					array(
						'element'  => 'body > #foo',
						'property' => 'background-color',
						'units'    => ' !important',
						'prefix'   => '@media (min-width: 700px) and (orientation: landscape) {',
						'suffix'   => '}',
					),
					array(
						'element'  => '#bar',
						'property' => 'color',
					),
				)
			)
		);
	}

	public function test_css_option() {
		update_option( 'foo', '#333' );
		$this->assertEquals(
		'@media (min-width: 700px) and (orientation: landscape) {body > #foo{background-color:#333 !important;}#bar{color:#333;}',
			Kirki_Output::css(
				'foo',
				'option',
				array(
					array(
						'element'  => 'body > #foo',
						'property' => 'background-color',
						'units'    => ' !important',
						'prefix'   => '@media (min-width: 700px) and (orientation: landscape) {',
						'suffix'   => '}',
					),
					array(
						'element'  => '#bar',
						'property' => 'color',
					),
				)
			)
		);
	}

}
