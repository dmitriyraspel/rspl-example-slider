<?php
/**
 * Plugin Name:     RSPL Example Slider
 * Description:     Тестовый слайдер без настроек
 * Version:         0.1.0
 * Author:          dmitriy raspel
 *
 * @package         rspl-example-slider
 */


defined( 'ABSPATH' ) || exit;

/**
 * Сделано на основе примера блока Gutenberg Examples Inner Blocks
 * Подключены скрипты и стили с проверкой блока.
 */
function rspl_example_slider_register_block() { // регистрируем блок

	if ( ! function_exists( 'register_block_type' ) ) {
		// Gutenberg is not active.
		return;
	}

	wp_register_script(
		'rspl-example-slider',
		plugins_url( 'block.js', __FILE__ ),
		[ 'wp-blocks', 'wp-element', 'wp-block-editor' ],
		filemtime( plugin_dir_path( __FILE__ ) . 'block.js' ),
		true
	);

	register_block_type(
		'rspl-example/slider',
		[
			'editor_script' => 'rspl-example-slider',
		]
	);

} // конец регистрации блока
add_action( 'init', 'rspl_example_slider_register_block' );

function rspl_example_slider_frontend_scripts() { // подключаем скрипты и стили
	
	if ( has_block( 'rspl-example/slider' ) ) { // если есть блок, подключаем скрипты и стили

		wp_enqueue_script(
			'rspl-example-slick-script',
			plugins_url( '/assets/js/slick.js', __FILE__ ),
			[ 'jquery' ], // ставим зависимость от jquery 
			filemtime( plugin_dir_path( __FILE__ ) . '/assets/js/slick.js' ),
			true
		);
	
		wp_enqueue_style(
			'rspl-example-slider-style',
			plugins_url( '/assets/css/style.css', __FILE__ ),
			array( ),
			filemtime( plugin_dir_path( __FILE__ ) . '/assets/css/style.css' )
		);
	} // конец if если есть блок
} // конец функции "подключаем скрипты и стили"
add_action( 'wp_enqueue_scripts', 'rspl_example_slider_frontend_scripts' );