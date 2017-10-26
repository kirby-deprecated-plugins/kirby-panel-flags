(function($) {
	$.fn.flags = function() {
		return this.each(function() {
			$('.languages').before( $('.plugin-panel-flags').html() );
		});
	};
})(jQuery);