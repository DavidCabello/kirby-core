
var GENERAL = (function(general) {
	//V A R S
	var bg = $('.bg-img');

	general = {
		init: function(){
			bg.imgLiquid();
		},

		//FLICKITY
		Carousel: function(){
			$('.main-carousel').flickity({
				pageDots: true,
				contain: true,
				prevNextButtons: false,
				autoPlay: true,
				pauseAutoPlayOnHover: false,
				groupCells: 1,
			});
		}

	}

	return general;

}(GENERAL || {}));
