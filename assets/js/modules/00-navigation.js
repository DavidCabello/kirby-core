
var NAVIGATION = (function(navigation) {
	//V A R S

	navigation = {
		init: function(){
			navigation.Navigation();
		},
		Navigation: function(){
			//Open menu
			$('.js-open-menu').click(function(event) {
				TweenMax.to($('.js-menu'), 0.5,{
					delay : 0.5,
					autoAlpha : 1,
					ease: Expo.easeInOut,					
					onComplete: function(){

					}
				});
			});

			//Close menu
			$('.js-close-menu').click(function(event) {
				TweenMax.to($('.js-menu'), 0.5, {
					delay : 0.5,
					autoAlpha : 0,
					ease: Expo.easeInOut
				});
			});
		}

	}

	return navigation;

}(NAVIGATION || {}));
