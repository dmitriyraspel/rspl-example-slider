( function( blocks, element, blockEditor ) {
	var el = element.createElement;
	var InnerBlocks = blockEditor.InnerBlocks;
	blocks.registerBlockType( 'rspl-example/slider', {
		// blocks.registerBlockType( 'gutenberg-examples/example-07', {
		title: 'Example: Slider',
		category: 'layout',
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
} )( window.wp.blocks, window.wp.element, window.wp.blockEditor );
