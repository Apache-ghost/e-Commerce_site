( function( api ) {

	// Extends our custom "ecommerce-watch-store" section.
	api.sectionConstructor['ecommerce-watch-store'] = api.Section.extend( {

		// No events for this type of section.
		attachEvents: function () {},

		// Always make the section active.
		isContextuallyActive: function () {
			return true;
		}
	} );

} )( wp.customize );