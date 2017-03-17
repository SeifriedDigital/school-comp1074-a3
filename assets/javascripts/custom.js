$(document).ready(function() {
    // Call these functions on document load
    UpdateAriaAttributes
    CheckBreakpoints()

    // Toggle drop-down nav class when button is pressed
    $('#open-nav-button').on('click', function(e) {
        e.preventDefault()
        $('nav#main-nav').toggleClass('open')

        // Update aria attributes
        UpdateAriaAttributes()
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
            userId: '4794113063',
            accessToken: '4794113063.1677ed0.dbb0971a61bd491aa2f389d45bdc2ba4',
            limit: '18',
			resolution: 'low_resolution',
            sortBy: 'most-liked'
        })
        feed.run()
	}

    // Trigger functions on window resize
    $(window).resize(function(){
        UpdateAriaAttributes()
        CheckBreakpoints()
    })
})

// This updates ARIA values related to the header and drop-down navigation
function UpdateAriaAttributes() {
    if (window.matchMedia('(min-width: 992px)').matches) {
        // Only runs when screen is not in "mobile" size and ensures that ARIA values are correct when screen is resized
        $('nav#main-nav').attr("aria-hidden", "false")
        $('nav#main-nav').attr("aria-expanded", "true")
        $('nav#main-nav').removeClass('open')
        $('#open-nav-button').removeClass("active")
        $('#open-nav-button').attr("aria-pressed","false")
        $('#open-nav-button').attr("aria-dissabled","true")

    } else {
        $('#open-nav-button').attr("aria-dissabled","false")

        // This will only function on mobile screen sizes
        if ($('nav#main-nav').hasClass('open')) {

            $('nav#main-nav').attr("aria-hidden", "false")
            $('nav#main-nav').attr("aria-expanded", "true")
            $('#open-nav-button').addClass("active")
            $('#open-nav-button').attr("aria-pressed","true")

        } else {

            $('nav#main-nav').attr("aria-hidden", "true")
            $('nav#main-nav').attr("aria-expanded", "false")
            $('#open-nav-button').removeClass("active")
            $('#open-nav-button').attr("aria-pressed","false")
        }
    }
}

// This fixes errors thrown by slick-slideshow when trying to remove the slideshow from the ellement for larger screens
function CheckBreakpoints() {
    let sst = $('#slick-slideshow-testimonials')

    if (window.matchMedia('(min-width: 992px)').matches) {
        if(sst.hasClass('slick-initialized')) {
            sst.slick('unslick')
        }
    } else if (!(sst.hasClass('slick-initialized'))) {
        // Initialize slick slideshow for testimonials on mobile
        sst.slick({
            autoplay: true,
            autoplaySpeed: 5000,
            arrows: true,
            cssEase: 'linear',
            dots: true,
            lazyLode: 'progressive',
            mobileFirst: true
        })
    }
}
