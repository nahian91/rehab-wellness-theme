<?php
/**
 * The template for displaying the footer
 */
?>

<footer id="colophon" class="site-footer">
    <div class="main-footer-prime bg-section dark-section">
        <div class="container">
            <div class="row">
                <!-- Column 1: About -->
                <div class="col-xl-4">
                    <div class="about-footer-prime">
                        <div class="footer-logo-prime">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo.svg" alt="Logo">
                        </div>
                        <div class="about-footer-content-prime">
                            <p>We combine advanced medical technology with expert clinical knowledge to deliver efficient & effective healthcare services.</p>
                        </div>
                        <div class="footer-social-links-prime">
                            <h3>Follow Us on Socials:</h3>
                            <ul>
                                <li><a href="#"><i class="fa-brands fa-pinterest-p"></i></a></li>
                                <li><a href="#"><i class="fa-brands fa-x-twitter"></i></a></li>
                                <li><a href="#"><i class="fa-brands fa-facebook-f"></i></a></li>
                                <li><a href="#"><i class="fa-brands fa-instagram"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>

                <!-- Column 2: Footer Links Box -->
                <div class="col-xl-8">
                    <div class="footer-links-box-prime">
                        
                        <!-- Quick Links -->
                        <div class="footer-links-prime footer-quick-links-prime">
                            <h2>Quick Links</h2>
                            <?php wp_nav_menu( array(
                                'theme_location' => 'footer-1',
                                'container'      => false,
                                'items_wrap'     => '<ul>%3$s</ul>',
                            ) ); ?>
                        </div>

                        <!-- Services Links -->
                        <div class="footer-links-prime footer-service-links-prime">
                            <h2>Our Services</h2>
                            <?php wp_nav_menu( array(
                                'theme_location' => 'footer-2',
                                'container'      => false,
                                'items_wrap'     => '<ul>%3$s</ul>',
                            ) ); ?>
                        </div>

                        <!-- Patient Resources Links -->
                        <div class="footer-links-prime footer-privacy-policy-prime">
                            <h2>Patient Resources</h2>
                            <?php wp_nav_menu( array(
                                'theme_location' => 'footer-3',
                                'container'      => false,
                                'items_wrap'     => '<ul>%3$s</ul>',
                            ) ); ?>
                        </div>

                    </div>
                </div>

                <!-- Contact Items List -->
                <div class="col-lg-12">
                    <div class="footer-contact-items-list-prime">
                        <div class="footer-contact-item-prime">
                            <div class="icon-box">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/icon-location-white.svg" alt="Location">
                            </div>
                            <div class="footer-contact-item-content-prime">
                                <p>Our Location</p>
                                <h3>2715 Ash Dr. San Jose, South Dakota 83475</h3>
                            </div>
                        </div>
                        <div class="footer-contact-item-prime">
                            <div class="icon-box">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/icon-phone-white.svg" alt="Phone">
                            </div>
                            <div class="footer-contact-item-content-prime">
                                <p>Phone Number</p>
                                <h3><a href="tel:+123456789">+(123) 456-789</a></h3>
                            </div>
                        </div>
                        <div class="footer-contact-item-prime">
                            <div class="icon-box">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/icon-mail-white.svg" alt="Email">
                            </div>
                            <div class="footer-contact-item-content-prime">
                                <p>Email Address</p>
                                <h3><a href="mailto:info@domainname.com">info@domainname.com</a></h3>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Copyright -->
                <div class="col-lg-12">
                    <div class="footer-copyright-text-prime">
                        <p>Copyright © <?php echo date('Y'); ?> All Rights Reserved.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>

</div><!-- #page -->

<?php wp_footer(); ?>
</body>
</html>