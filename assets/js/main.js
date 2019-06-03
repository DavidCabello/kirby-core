(function($){

	APP = {
		init: function(){
			NAVIGATION.init();
			GENERAL.init();

			if ($('.js-home').length) {
				HOME.init();
			}
			if ($('.js-contacto').length) {
				CONTACTO.init();
			}
		}
	};

	//I N I T
	 window.APP = APP;
	 window.onload = function() {
		APP.init();
	};
})(jQuery);
//@prepros-append modules/*.js
