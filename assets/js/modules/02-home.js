var HOME = (function(home) {
	//V A R S

	home = {
		init: function(){
			home.Loader();
		},

		Loader: function(){
			if (Cookies.get('kirby')) {
				TweenMax.to($('#loader'), 0.2,{
					autoAlpha: 0
				});
			} else {
				Cookies.set('kirby', 'true');
				TweenMax.to($('#loader'), 0.5,{
					delay: 1,
					autoAlpha: 0
				});
			}
		}
	}

	return home;

}(HOME || {}));
