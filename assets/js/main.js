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
//@prepros-append modules/00-navigation.js
//@prepros-append modules/01-general.js
//@prepros-append modules/02-home.js
//@prepros-append modules/03-contacto.js
