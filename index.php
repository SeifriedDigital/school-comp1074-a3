<!DOCTYPE html>
<html lang="en">
	<head>
		<!--
		COMP1074 - A3 - Mathew Seifried

		This website features a small property maintenance company which is local to me. This website is targeting homeowners and small businesses requiring property maintenance either on a as needed or regular basis.
		It is important for a website with services like this one to be accessible because people will disability, especially visual disabilities will most likely require assistance with property care.

		Original Website: http://www.propertyworkz.ca/about.html
		Only content such as some of the text and images are being used in my assignment version of this website. The business has grated me permission to use their content.

        ARIA LANDMARKS ROLES
        124, 125 - button
        128 - navigation
        146 - banner
        155 - main
        205 - complementary
        269 - content-info

        ARIA STATES
        125 - aria-disabled, aria-pressed (via custom.js 60 -> 90)
        128 - aria-hidden, aria-expanded (via custom.js 60 -> 90)

        ARIA PROPERTIES
        199 - aria-live, aria-relevant
        227 -> 257 - aria-labelledby, aria-required

        ARIA LIVE
        199

        Extra space was in case I needed more room to type without wreaking the line numbers above but I overestimated that a bit.



































































		-->

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
                <div id="mobile-nav-bar">
                    <a href="tel:519-943-2206" title="Call Property Workz" role="button"><i class="fa fa-phone" aria-hidden="true"></i></a>
                    <a href="" id="open-nav-button" title="Toggle navigation" role="button"><i class="fa fa-bars"></i></a>
                </div>

                <nav id="main-nav" role="navigation">
                    <ul>
                        <li><a href="#about">About</a></li>
                        <li><a href="#services">Services</a></li>
                        <li><a href="#work">Our Work</a></li>
                        <li><a href="#contact">Contact</a></li>
                    </ul>
                </nav>
            </div>

            <div class="container">
               <h1>
                   <img src="assets/images/logo.png" alt="Property Workz">
               </h1>
            </div>
		</header>

        <div id="ss-banner-container" class="container">
            <div role="banner" id="slick-slideshow-banner">
                <img src="assets/images/lawn-care.jpg">
                <img src="assets/images/pressure-washing.jpg">
                <img src="assets/images/landscaping.jpg">
            </div>

            <a href="#contact">Message Us</a>
        </div>

        <main role="main" class="container">
            <section id="about">
                <h2>We Are <span>Property Workz</span></h2>
                <p>Since 2011 we have been providing residential and commercial property care to hundreds of customers across southern Ontario. We provide numerous services to suit your property's needs, whether it is weekly lawn care, tree removal or pressure washing, we will get the job done. We work with your schedule and aim to provide the same high standard of detail to each customer no matter the job.</p>
                <h3>Serving Southern Ontario</h3>
                <ul>
                    <li>Brampton</li>
                    <li>Caledon</li>
                    <li>Erin</li>
                    <li>Georgetown</li>
                    <li>Guelph</li>
                    <li>Orangeville</li>
                </ul>
            </section>

            <section id="services">
                <h2>Services</h2>

                <div class="service-block">
                    <h3>Lawn Care</h3>
                    <p>Scheduled lawn care services to suit your needs is our specialty. Whether it is twice a week or once every other week we will keep your lawn looking beautiful. Lawn mowing, weed whipping, watering, aerating and rolling are just some of our lawn care services. </p>
                </div>

                <div class="service-block">
                    <h3>Property Maintenance</h3>
                    <p>Leaves jamming your eavestroughs? Driveway starting to crack? Siding looking grungy? Our team has done it all! We can help you with your spring cleaning and keep your property looking sharp. Let us do the work while you relax.</p>
                </div>

                <div class="service-block">
                    <h3>Commercial Services</h3>
                    <p>Our skilled team is the answer to keeping your property in shape so you can worry about the business side of things. With our equipment and expertise we can provide your business the service it needs.</p>
                </div>

                <div class="service-block">
                    <h3>Got Something Interesting?</h3>
                    <p>Don't worry! Just send us a message and we will get back to you with an answer. We aim to provide you with a one stop solution for all of your property's needs.</p>
                </div>
            </section>
        </main>

        <section id="work" class="container">
            <h2>See Some of Our Work</h2>
            <small> to view on Instagram</small>

            <div id="instafeed" aria-live="polite" aria-relevant="additions">
            <!-- Populated via JS -->
            </div>
            <small></small>
        </section>

        <section  role="complementary" id="testimonials">
            <div class="container">
                <h2>Testimonials</h2>

                <div id="slick-slideshow-testimonials">
                    <blockquote cite="John Doe" class="testimonial-slider">
                        "These guys are awesome, they are in it for more than just the money, their customer service is on point. I'm always so pleased to see all the extra little things they do for my lawn, it looks so nice!"<br><span>- Nicole Ireland</span>
                    </blockquote>

                    <blockquote cite="John Doe" class="testimonial-slider">
                        "Thanks to Property Workz for the awesome job on my property. The fallen branches from the storm created a real mess. Having someone dependable with a chainsaw made the cleanup easier."<br><span>- S & N</span>
                    </blockquote>

                    <blockquote cite="John Doe" class="testimonial-slider">
                        "We wanted our lawn maintained after coming home from our vacation spot so we could relax and unwind. Property Workz gave us exactly that."<br><span>- Josh</span>
                    </blockquote>
                </div>
            </div>
        </section>

        <section id="contact" class="container">
            <div>
                <form role="form" id="contact-form" action="index" method="post" autocomplete="on">
                    <h2>Contact Us</h2>
                    <div class="form-group">
                        <label id="name-label" for="name">Name:</label>
                        <input id="name" type="text" name="name" required aria-required="true" aria-autocomplete="both" aria-labelledby="contact-form name-label">
                    </div>

                    <div class="form-group">
                        <label id="email-label" for="email">Email:</label>
                        <input id="email" type="email" name="email" required aria-required="true" aria-autocomplete="both" aria-labelledby="contact-form email-label">
                    </div>

                    <div class="form-group">
                        <label id="subject-label" for="subject">Subject:</label>
                        <input id="subject" type="text" name="subject" autocomplete="off" aria-autocomplete="none" required aria-required="true" aria-labelledby="contact-form subject-label">
                    </div>

                    <div class="form-group">
                        <label id="message-label" for="message">Message:</label>
                        <textarea id="message" name="message" required autocomplete="off" aria-autocomplete="none" aria-required="true"  aria-labelledby="contact-form message-label"></textarea>
                    </div>

                    <div class="form-group">
                        <p class="form-err"></p>
                        <p class="form-message"></p>
                    </div>

                    <div class="form-group">
                        <button id="contact-form-submit" type="submit" name="contact-form-submit">Send</button>
                    </div>
                </form>

                <div>
                    <h3>Follow Us</h3>
                    <ul>
                        <li><a href="https://www.facebook.com/propertyworkz" title="Property Workz on Facebook"><img src="assets/images/facebook.png" alt=""><span>/propertyworkz</span></a></li>
                        <li><a href="https://www.instagram.com/propertyworkz/" title="Property Workz on Instagram"><img src="assets/images/instagram.png" alt=""><span>@propertyworkz</span></a></li>
                    </ul>
                </div>
            </div>
        </section>

		<footer role="contentinfo">
            <div class="container">
                <small>&copy;<?php echo date("Y"); ?> Property Workz</small>
                <small>Website by <a href="www.mathew.codes">Mathew Seifried</a></small>
            </div>
		</footer>

		<!-- Scripts -->
		<script type="text/javascript" src="assets/javascripts/jquery-3.1.1.min.js"></script>
		<script type="text/javascript" src="assets/javascripts/slick.min.js"></script>
        <script type="text/javascript" src="assets/javascripts/instafeed.min.js"></script>
		<script type="text/javascript" src="assets/javascripts/custom.js"></script>
	</body>
</html>
