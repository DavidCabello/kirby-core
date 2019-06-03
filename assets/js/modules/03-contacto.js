var CONTACTO = (function(contacto) {
	//V A R S

	contacto = {
		init: function(){
			contacto.mailer();
		},

		mailer: function(){
			var $contact = $('#contacto-form');
			$contact.submit(function(event) {
				var form = $(this);
				$.ajax({
					url: form.attr('action'),
					data: form.serialize(),
					type: form.attr('method'),
					success: function(response){
						$contact.each (function(){
							this.reset();
						});
					}
				});
			});
		}

	}

	return contacto;

}(CONTACTO || {}));
