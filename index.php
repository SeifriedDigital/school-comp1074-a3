<!DOCTYPE html>
<html lang="en">
	<head>

		<!-- Project Comments -->
		<!-- This website features a small property maintenance company which is local to me. This website is targeting homeowners and small businesses requiring property maintenance either on a as needed or regular basis. -->
		<!-- Original Website: http://www.propertyworkz.ca/about.html -->

		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Property Workz - Professional Property Maintenance</title>

		<meta name="description" content="Property maintenance for less. Professional property care for residential and commercial needs covering a range of services.">
		<meta name="keywords" content="Property Maintenance, Grass Cutting, Lawn Mowing, Weed Whipping, Tree Removal, Stump Removal">
		<meta name="author" content="Mathew Seifried">

        <link href="https://fonts.googleapis.com/css?family=Lato:400,700,900" rel="stylesheet">
		<link rel="stylesheet" href="assets/stylesheets/normalize.css">

		<link rel="stylesheet" href="assets/stylesheets/slick/slick.css">
		<link rel="stylesheet" href="assets/stylesheets/slick/slick-theme.css">
		<link rel="stylesheet" href="assets/stylesheets/custom.css">
        <link rel="stylesheet" href="assets/stylesheets/font-awesome/css/font-awesome.min.css">
	</head>

	<body>
		<header>
            <div class="container">
                <div id="mobile-header" class="mobile-only">
                    <a href="tel:519-943-2206"><i class="fa fa-phone" aria-hidden="true"></i></a>
                    <a href="" id="open-nav-button" title="Open navigation" role="button" aria-pressed="false"><i class="fa fa-bars"></i></a>
                </div>

                <div id="logo-container">
                    <img src="assets/images/logo.png" alt="">
                </div>

                <nav id="main-nav" role="navigation">
                    <a href="" id="close-nav-button" class="mobile-only" title="Close navigation" role="button" aria-pressed="true"><i class="fa fa-times" aria-hidden="true"></i></a>
                    <ul>
                        <li><a href="/">Home</a></li>
                        <li><a href="services">Services</a></li>
                        <li><a href="work">Our Work</a></li>
                        <li><a href="contact">Contact</a></li>
                    </ul>
                </nav>
            </div>
		</header>

        <div class="container">
            <div id="slick-slideshow" role="banner">
                <img src="http://placehold.it/350x150">
                <img src="http://placehold.it/350x150">
                <img src="http://placehold.it/350x150">
            </div>

            <main role="main">
                <section id="services">
                    <h2>Services</h2>

                    <div class="service-block">
                        <h3>Lawn Care</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
                    </div>

                    <div class="service-block">
                        <h3>Gardening</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
                    </div>

                    <div class="service-block">
                        <h3>Power Washing</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
                    </div>
                </section>

                <section id="service-areas">
                    <h2>Serving;</h2>
                    <ul>
                        <li>Brampton</li>
                        <li>Caledon</li>
                        <li>Erin</li>
                        <li>Georgetown</li>
                        <li>Guelph</li>
                        <li>Orangeville</li>
                        <li>and surrounding areas!</li>
                    </ul>
                </section>
            </main>

            <section id="testimonials" role="complementary">
                <h2>Testimonials</h2>

                <blockquote cite="John Doe" class="testimonial-slider">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. <br> - John Doe
                </blockquote>
            </section>

            <section id="contact">
                <form id="contact-form" action="index" method="post">
                    <div class="form-group">
                        <label for="name">Name</label>
                        <input id="name" type="text" name="name" required>
                    </div>

                    <div class="form-group">
                        <label for="subject">Subject</label>
                        <input id="subject" type="text" name="subject" required>
                    </div>

                    <div class="form-group">
                        <label for="message">Message</label>
                        <textarea id="message" name="message" required></textarea>
                    </div>

                    <div class="form-group">
                        <button type="submit" name="contact-form-submit-button">Send</button>
                    </div>

                    <div class="form-group">
                        <p class="form-err"></p>
                        <p class="form-message"></p>
                    </div>
                </form>
            </section>
        </div>

		<footer role="contentinfo">
            <div class="container">
                <small>&copy; <?php echo date("Y"); ?> Property Workz</small>
                <small>Website By: <a href="www.mathew.codes">Mathew Seifried</a></small>
            </div>
		</footer>

		<!-- Scripts -->
		<script type="text/javascript" src="assets/javascripts/jquery-3.1.1.min.js"></script>
		<script type="text/javascript" src="assets/javascripts/slick.min.js"></script>
		<script type="text/javascript" src="assets/javascripts/custom.js"></script>
	</body>
</html>
