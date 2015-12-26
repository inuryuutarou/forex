/**
 * Other components intialization
 */
(function ($) { "use strict";

    // testimonials 1 carousel indicators handle
	$(function () {
		$('#sign_in').on('hidden.bs.modal', function() {
			$(this).removeData('bs.modal');
		});
	});

})(jQuery);

