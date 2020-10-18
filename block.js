( function( blocks, element, blockEditor ) {
	var el = element.createElement;
	var InnerBlocks = blockEditor.InnerBlocks;

	blocks.registerBlockType( 'rspl-example/slider', {
		title: 'Example: Slider',
		icon: 'embed-photo', // Иконка Svg или Dashicons. https://developer.wordpress.org/resource/dashicons/.
		category: 'layout',
		keywords: [ 'slider', 'gallery', 'section' ],
		supports: { align: ["wide","full"], default: 'full' },
	
		edit: function( props ) {
			return el(
				'div',
				{ className: props.className },
				el( InnerBlocks )
			);
		},
	
		save: function( props ) {
			return el(
				'div',
				{ className: props.className },
				el( InnerBlocks.Content )
			);
		},
	} );
} )
(
	window.wp.blocks,
	window.wp.element,
	window.wp.blockEditor 
);
