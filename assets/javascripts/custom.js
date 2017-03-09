$(document).ready(function() {
    $('#open-nav-button, #close-nav-button').on('click', function(event) {
        event.preventDefault()
        $('nav#main-nav').toggleClass('open')

		// Change aria-pressed value when toggling the navigation via the nav toggle buttons on a mobile view
		if ($('nav#main-nav').hasClass('open')) {
            $('#open-nav-button').attr("aria-pressed","true")
            $('#close-nav-button').attr("aria-pressed","false")
		} else {
            $('#open-nav-button').attr("aria-pressed","false")
            $('#close-nav-button').attr("aria-pressed","true")
		}
    })

	// Initialize slick slideshow banner
	$('#slick-slideshow').slick({
		autoplay: true,
		autoplaySpeed: 3000,
		arrows: false,
		cssEase: 'linear',
		dots: true,
		lazyLode: 'progressive',
		mobileFirst: true,

	})
})
