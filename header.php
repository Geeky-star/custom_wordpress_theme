<!DOCTYPE html>
<html>

<head>
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>


    <nav>
        <label class="logo">
            <img src="final_logo.png">
        </label>

        <ul>
            <li><a class="active" href="#">Home</a></li>
            <li><a href="about.html">About</a></li>
            <li><a href="contact.html">Contact Us</a></li>
            <li><a href="formpage.html">Feedback</a></li>
        </ul>
    </nav>

    <section>
        <div class="footer">
            <div class="footer-content">
                <div class="footer-section about">
                    <h1 class="logo-text"><span>Car</span>Rentals</h1>
                    <p>
                        On motive to make your travel life easier.
                    </p>
                    <div class="contact">
                        <span><i class="fa fa-phone"></i> &nbsp; 123-456-789</span>
                        <span><i class="fa fa-envelope"></i> &nbsp; urbanCars@gmail.com</span>

                    </div>
                    <br>
                    <div class="socials">
                        <a href="#"><i class="fa fa-facebook"></i></a>
                        <a href="#"><i class="fa fa-twitter"></i></a>
                        <a href="#"><i class="fa fa-linkedin"></i></a>
                        <a href="#"><i class="fa fa-google-plus"></i></a>

                    </div>
                </div>
                <div class="footer-section links">
                    <h2>Quick Links</h2>
                    <br>
                    <ul>
                        <a href="#">
                            <li>Events</li>
                        </a>
                        <a href="#">
                            <li>Services</li>
                        </a>
                        <a href="#">
                            <li>Team</li>
                        </a>
                        <a href="#">
                            <li>Gallery</li>
                        </a>
                    </ul>
                </div>

                <div class="footer-section contact-form">
                    <h2>Any Query, Contact Us</h2>
                    <br>
                    <form action="index.html" method="post">
                        <input type="email" name="email" class="text-input" placeholder="Your email address..."><br>
                        <textarea name="message" class="text-input contact-input" placeholder="Your message..."></textarea>
                        <br>
                        <button type="submit" class="btn btn-big contact-btn">
                            <i class="fa fa-envelope"></i>
                            Send
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </section>