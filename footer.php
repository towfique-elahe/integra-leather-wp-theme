<div class="section-divider"></div>

<!-- footer -->
<footer id="footer">
    <div class="container row">
        <div class="col">
            <?php
                if(function_exists('the_custom_logo')){
                    $custom_logo_id = get_theme_mod('custom_logo');
                    $logo = wp_get_attachment_image_src($custom_logo_id);
                }
            ?>
            <img src="<?php echo $logo[0] ?>" alt="" class="logo">
        </div>
        <div class="col">
            <h4 class="footer-heading">
                Information
            </h4>
            <ul class="list">
                <li>
                    <a href="<?php echo esc_url(home_url('/company/')); ?>">Company</a>
                </li>
                <li>
                    <a href="<?php echo esc_url(home_url('/production/')); ?>">Production</a>
                </li>
                <li>
                    <a href="<?php echo esc_url(home_url('/products/')); ?>">Products</a>
                </li>
                <li>
                    <a href="<?php echo esc_url(home_url('/news-events/')); ?>">News & Event</a>
                </li>
                <li>
                    <a href="<?php echo esc_url(home_url('/contacts/')); ?>">Contacts</a>
                </li>
            </ul>
        </div>
        <div class="col">
            <h4 class="footer-heading">
                Contacts
            </h4>
            <ul class="list">
                <li>
                    <ion-icon name="call-outline" class="icon"></ion-icon>
                    <a href="tel:8801718419091">+8801718419091 (whatsapp) 24/7</a>
                </li>
                <li>
                    <ion-icon name="mail-outline" class="icon"></ion-icon>
                    <p>
                        <a href="mailto:integraleather@gmail.com">integraleather@gmail.com</a> <br>
                        <a href="mailto:faisal@integraleather.net">faisal@integraleather.net</a>
                    </p>
                </li>
                <li>
                    <ion-icon name="location-outline" class="icon"></ion-icon>
                    <p>
                        House: 93/4-A, Moneswar Road, Zigatola, Hazaribagh, Dhaka-1209, Bangladesh.
                    </p>
                </li>
            </ul>
        </div>
        <div class="col">
            <h4 class="footer-heading">
                Social Media
            </h4>
            <div class="row">
                <a target="_blank" href="https://www.facebook.com/integraleatherstyle" class="social">
                    <ion-icon name="logo-facebook"></ion-icon>
                </a>
                <a target="_blank" href="https://www.linkedin.com/company/integra-leather/" class="social">
                    <ion-icon name="logo-linkedin"></ion-icon>
                </a>
                <a target="_blank" href="https://www.instagram.com/integraleather/" class="social">
                    <ion-icon name="logo-instagram"></ion-icon>
                </a>
                <a target="_blank" href="https://www.youtube.com/c/IntegraLeather" class="social">
                    <ion-icon name="logo-youtube"></ion-icon>
                </a>
                <a target="_blank" href="https://wa.me/8801718419091" class="social">
                    <ion-icon name="logo-whatsapp"></ion-icon>
                </a>
                <a target="_blank" href="weixin://contacts/profile/{integraleather}" class="social">
                    <ion-icon name="logo-wechat"></ion-icon>
                </a>
            </div>
        </div>
    </div>

    <hr>

    <p class="copyright">
        © 2023 Integra Leather | All Rights Reserved
    </p>
</footer>

<!-- Enqueue Scripts -->
<?php
    wp_footer();
?>