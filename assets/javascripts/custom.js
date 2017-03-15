$(document).ready(function() {

    $('#open-nav-button').on('click', function(e) {
        e.preventDefault()
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
	$('#slick-slideshow-banner').slick({
		autoplay: true,
		autoplaySpeed: 3000,
		arrows: false,
		cssEase: 'linear',
		dots: true,
		lazyLode: 'progressive',
		mobileFirst: true,
	})

	// Initialize instagram feed if related element is present
	if('#instafeed') {
        let feed = new Instafeed({
            get: 'user',
            userId: '195292122',
            accessToken: '195292122.1677ed0.c58643a2be394c399734023474d44cac',
			limit: '18',
			resolution: 'low_resolution',
            sortBy: 'most-liked'
        })
        feed.run()
	}

    // Initialize slick slideshow testimonials
    $('#slick-slideshow-testimonials').slick({
        autoplay: false,
        arrows: true,
        cssEase: 'linear',
        dots: true,
        lazyLode: 'progressive',
        mobileFirst: true,
    })

	// Find overflowing elements
    var docWidth = document.documentElement.offsetWidth;

    [].forEach.call(
        document.querySelectorAll('*'),
        function(el) {
            if (el.offsetWidth > docWidth) {
                console.log(el)
            }
        }
    )
})
