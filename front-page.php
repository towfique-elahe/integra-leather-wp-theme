<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Enqueue Styles -->
    <?php
		wp_head();
    ?>
</head>

<body>
    <!-- hero -->
    <section id="hero">
        <!-- header -->
        <?php get_header() ?>

        <!-- image carousel -->
        <div class="slider-container">
            <!-- slide 1 -->
            <div class="slide fade">
                <img class="slide-image" src="/wp-content/themes/integra/assets/images/slider1.jpg">
                <div class="slide-content">
                    <h3 class="slide-title">Professionals in Leather Tanning</h3>
                    <a href="<?php echo esc_url(home_url('/contacts')); ?>" class="btn">
                        contact us <ion-icon name="arrow-forward"></ion-icon>
                    </a>
                </div>
                <div class="slide-number-container">
                    <div class="container">
                        <p class="slider-number">01</p>
                        <hr>
                        <p class="slider-number">08</p>
                    </div>
                </div>
            </div>

            <!-- slide 2 -->
            <div class="slide fade">
                <img class="slide-image" src="/wp-content/themes/integra/assets/images/slider2.jpg">
                <div class="slide-content">
                    <h3 class="slide-title">Best Local Raw Hides of Bangladesh</h3>
                    <a href="<?php echo esc_url(home_url('/contacts')); ?>" class="btn">
                        contact us <ion-icon name="arrow-forward"></ion-icon>
                    </a>
                </div>
                <div class="slide-number-container">
                    <div class="container">
                        <p class="slider-number">02</p>
                        <hr>
                        <p class="slider-number">08</p>
                    </div>
                </div>
            </div>

            <!-- slide 3 -->
            <div class="slide fade">
                <img class="slide-image" src="/wp-content/themes/integra/assets/images/slider3.jpg">
                <div class="slide-content">
                    <h3 class="slide-title">Reliable Resources of Materials and Chemicals</h3>
                    <a href="<?php echo esc_url(home_url('/contacts')); ?>" class="btn">
                        contact us <ion-icon name="arrow-forward"></ion-icon>
                    </a>
                </div>
                <div class="slide-number-container">
                    <div class="container">
                        <p class="slider-number">03</p>
                        <hr>
                        <p class="slider-number">08</p>
                    </div>
                </div>
            </div>

            <!-- slide 4 -->
            <div class="slide fade">
                <img class="slide-image" src="/wp-content/themes/integra/assets/images/slider4.jpg">
                <div class="slide-content">
                    <h3 class="slide-title">QC in Each and Every Stage of Production</h3>
                    <a href="<?php echo esc_url(home_url('/contacts')); ?>" class="btn">
                        contact us <ion-icon name="arrow-forward"></ion-icon>
                    </a>
                </div>
                <div class="slide-number-container">
                    <div class="container">
                        <p class="slider-number">04</p>
                        <hr>
                        <p class="slider-number">08</p>
                    </div>
                </div>
            </div>

            <!-- slide 5 -->
            <div class="slide fade">
                <img class="slide-image" src="/wp-content/themes/integra/assets/images/slider5.jpg">
                <div class="slide-content">
                    <h3 class="slide-title">Ensure Superior Quality and Finishes</h3>
                    <a href="<?php echo esc_url(home_url('/contacts')); ?>" class="btn">
                        contact us <ion-icon name="arrow-forward"></ion-icon>
                    </a>
                </div>
                <div class="slide-number-container">
                    <div class="container">
                        <p class="slider-number">05</p>
                        <hr>
                        <p class="slider-number">08</p>
                    </div>
                </div>
            </div>

            <!-- slide 6 -->
            <div class="slide fade">
                <img class="slide-image" src="/wp-content/themes/integra/assets/images/slider6.jpg">
                <div class="slide-content">
                    <h3 class="slide-title">Quality Production and Customer Satisfaction</h3>
                    <a href="<?php echo esc_url(home_url('/contacts')); ?>" class="btn">
                        contact us <ion-icon name="arrow-forward"></ion-icon>
                    </a>
                </div>
                <div class="slide-number-container">
                    <div class="container">
                        <p class="slider-number">06</p>
                        <hr>
                        <p class="slider-number">08</p>
                    </div>
                </div>
            </div>

            <!-- slide 7 -->
            <div class="slide fade">
                <img class="slide-image" src="/wp-content/themes/integra/assets/images/slider7.jpg">
                <div class="slide-content">
                    <h3 class="slide-title">Committed to Environment Protection</h3>
                    <a href="<?php echo esc_url(home_url('/contacts')); ?>" class="btn">
                        contact us <ion-icon name="arrow-forward"></ion-icon>
                    </a>
                </div>
                <div class="slide-number-container">
                    <div class="container">
                        <p class="slider-number">07</p>
                        <hr>
                        <p class="slider-number">08</p>
                    </div>
                </div>
            </div>

            <!-- slide 8 -->
            <div class="slide fade">
                <img class="slide-image" src="/wp-content/themes/integra/assets/images/slider8.jpg">
                <div class="slide-content">
                    <h3 class="slide-title">Integra Your Fashion, Trends & Style</h3>
                    <a href="<?php echo esc_url(home_url('/contacts')); ?>" class="btn">
                        contact us <ion-icon name="arrow-forward"></ion-icon>
                    </a>
                </div>
                <div class="slide-number-container">
                    <div class="container">
                        <p class="slider-number">08</p>
                        <hr>
                        <p class="slider-number">08</p>
                    </div>
                </div>
            </div>

            <!-- previous and nest buttons -->
            <div class="slider-nav">
                <div class="container">
                    <a class="slider-nav-btn" onclick="plusSlides(-1)">
                        <ion-icon name="arrow-back"></ion-icon>
                    </a>
                    <a class="slider-nav-btn" onclick="plusSlides(1)">
                        <ion-icon name="arrow-forward"></ion-icon>
                    </a>
                </div>
            </div>

            <!-- dots/circles -->
            <div class="dot-container">
                <div class="container">
                    <span class="dot" onclick="currentSlide(1)"></span>
                    <span class="dot" onclick="currentSlide(2)"></span>
                    <span class="dot" onclick="currentSlide(3)"></span>
                    <span class="dot" onclick="currentSlide(4)"></span>
                    <span class="dot" onclick="currentSlide(5)"></span>
                    <span class="dot" onclick="currentSlide(6)"></span>
                    <span class="dot" onclick="currentSlide(7)"></span>
                    <span class="dot" onclick="currentSlide(8)"></span>
                </div>
            </div>
        </div>
    </section>

    <div class="section-divider"></div>

    <!-- about us -->
    <section id="about">
        <div class="container">
            <div class="section-head">
                <p class="section-number">01</p>
                <h3 class="section-heading">
                    about us
                </h3>
                <p class="section-summary">
                    We are producing 100% genuine leathers for shoes, bags and garments in an eco-friendly environment.
                </p>
            </div>

            <p class="para">
                Integra Leather is one of the most reliable leather buying agency and manufacturing company in
                Bangladesh. We have started working successfully and trustfully since 2008 and supplying high end
                quality leathers to domestic and foreign markets. We are dedicated to excellence in merchandising,
                leather development, production, QC and logistics. We are producing 100% genuine leathers for shoes,
                bags and garments in an eco-friendly environment. We are familiar with tanning full chrome, full
                vegetable, semi chrome, chrome free / eco leather articles.
            </p>
        </div>
    </section>

    <div class="section-divider"></div>

    <!-- our main goals -->
    <section id="goals">
        <div class="container">
            <div class="section-head">
                <p class="section-number">02</p>
                <h3 class="section-heading">
                    our main goals
                </h3>
                <p class="section-summary">
                    We look after from rawhide, wet blue to final packaging.
                </p>
            </div>
        </div>

        <div class="full-container">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <img src="/wp-content/themes/integra/assets/images/slider2.jpg" alt="" class="cover-image">
                        <img src="/wp-content/themes/integra/assets/images/slider8.jpg" alt="" class="cover-image">
                    </div>
                    <div class="col">
                        <ul class="goals">
                            <li class="goal">
                                Our mission to manufacture global standard leathers under environmental friendly and
                                socially compliant atmosphere.
                            </li>
                            <li class="goal">
                                Committed to environment protection.
                            </li>
                            <li class="goal">
                                Ending human discrimination and creating equal opportunity for all.
                            </li>
                            <li class="goal">
                                Improvement of our stuffs livelihood and a sustainable lifestyle.
                            </li>
                            <li class="goal">
                                Promoting human ability and creativity.
                            </li>
                            <li class="goal">
                                Introduce our country to all over the world.
                                <br>
                                "MADE IN BANGLADESH"
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div class="section-divider"></div>

    <!-- why choose us -->
    <section id="choose">
        <div class="container">
            <div class="section-head">
                <p class="section-number">03</p>
                <h3 class="section-heading">
                    why choose us
                </h3>
                <p class="section-summary">
                    Committed to quality production and customer satisfaction.
                </p>
            </div>

            <div class="choose-container">
                <div class="choose c1">
                    <img src="/wp-content/themes/integra/assets/images/choose1.png" alt="" class="choose-icon">
                    <p class="choose-info">
                        Timely shipment and delivery
                    </p>
                </div>
                <div class="choose c2">
                    <img src="/wp-content/themes/integra/assets/images/choose2.png" alt="" class="choose-icon">
                    <p class="choose-info">
                        Infinite number of satisfied customers.
                    </p>
                </div>
                <div class="choose c3">
                    <img src="/wp-content/themes/integra/assets/images/choose3.png" alt="" class="choose-icon">
                    <p class="choose-info">
                        Merchandising by a committed and dedicated team
                    </p>
                </div>
                <div class="choose c4">
                    <img src="/wp-content/themes/integra/assets/images/choose4.png" alt="" class="choose-icon">
                    <p class="choose-info">
                        Have in depth knowledge of leather processing and production
                    </p>
                </div>
                <div class="choose c5">
                    <img src="/wp-content/themes/integra/assets/images/choose5.png" alt="" class="choose-icon">
                    <p class="choose-info">
                        Well qualified team of QA and QCs is involved in each and every stage of production
                    </p>
                </div>
                <div class="choose c6">
                    <img src="/wp-content/themes/integra/assets/images/choose6.png" alt="" class="choose-icon">
                    <p class="choose-info">
                        Ensure superior quality and workmanship of the goods
                    </p>
                </div>
                <div class="choose c7">
                    <img src="/wp-content/themes/integra/assets/images/choose7.png" alt="" class="choose-icon">
                    <p class="choose-info">
                        Reliable resources of raw hides, materials and chemicals.
                    </p>
                </div>
                <div class="choose c8">
                    <img src="/wp-content/themes/integra/assets/images/choose8.png" alt="" class="choose-icon">
                    <p class="choose-info">
                        Latest high speed manufacturing technology
                    </p>
                </div>
                <div class="choose c9">
                    <img src="/wp-content/themes/integra/assets/images/choose9.png" alt="" class="choose-icon">
                    <p class="choose-info">
                        Valid licenses to work for valued foreign buyers
                    </p>
                </div>
            </div>
        </div>

        <div class="section-divider"></div>

        <div class="banner">
            <img src="/wp-content/themes/integra/assets/images/why-choose-us-banner.jpg" alt="" class="banner-bg">
            <div class="container row">
                <p class="banner-title">
                    WE BELIEVE WE CAN FIND A BETTER WAY FOR YOU.
                </p>
                <a href="<?php echo esc_url(home_url('/contacts')); ?>" class="btn">
                    contact us <ion-icon name="arrow-forward"></ion-icon>
                </a>
            </div>
        </div>
    </section>

    <div class="section-divider"></div>

    <!-- production -->
    <section id="production">
        <div class="container">
            <div class="section-head">
                <p class="section-number">04</p>
                <h3 class="section-heading">
                    production
                </h3>
                <p class="section-summary">
                    Made in Bangladesh
                </p>
            </div>

            <div class="projects-container">
                <div class="project p1">
                    <img src="/wp-content/themes/integra/assets/images/project-1.jpg" alt="" class="project-img">
                    <div class="project-content">
                        <h3 class="project-heading">
                            Raw Hides
                        </h3>
                        <a href="" class="project-link">
                            View More
                            <ion-icon name="arrow-forward"></ion-icon>
                        </a>
                    </div>
                </div>
                <div class="project p2">
                    <img src="/wp-content/themes/integra/assets/images/project-2.jpg" alt="" class="project-img">
                    <div class="project-content">
                        <h3 class="project-heading">
                            Wet Blue Drums
                        </h3>
                        <a href="" class="project-link">
                            View More
                            <ion-icon name="arrow-forward"></ion-icon>
                        </a>
                    </div>
                </div>
                <div class="project p3">
                    <img src="/wp-content/themes/integra/assets/images/project-3.jpg" alt="" class="project-img">
                    <div class="project-content">
                        <h3 class="project-heading">
                            Wet Blue Pilling
                        </h3>
                        <a href="" class="project-link">
                            View More
                            <ion-icon name="arrow-forward"></ion-icon>
                        </a>
                    </div>
                </div>
                <div class="project p4">
                    <img src="/wp-content/themes/integra/assets/images/project-4.jpg" alt="" class="project-img">
                    <div class="project-content">
                        <h3 class="project-heading">
                            Wet Blue
                        </h3>
                        <a href="" class="project-link">
                            View More
                            <ion-icon name="arrow-forward"></ion-icon>
                        </a>
                    </div>
                </div>
                <div class="project p5">
                    <img src="/wp-content/themes/integra/assets/images/project-5.jpg" alt="" class="project-img">
                    <div class="project-content">
                        <h3 class="project-heading">
                            Splitting
                        </h3>
                        <a href="" class="project-link">
                            View More
                            <ion-icon name="arrow-forward"></ion-icon>
                        </a>
                    </div>
                </div>
                <div class="project p6">
                    <img src="/wp-content/themes/integra/assets/images/project-6.jpg" alt="" class="project-img">
                    <div class="project-content">
                        <h3 class="project-heading">
                            Trimming
                        </h3>
                        <a href="" class="project-link">
                            View More
                            <ion-icon name="arrow-forward"></ion-icon>
                        </a>
                    </div>
                </div>
                <div class="project p7">
                    <img src="/wp-content/themes/integra/assets/images/project-7.jpg" alt="" class="project-img">
                    <div class="project-content">
                        <h3 class="project-heading">
                            Color Dyed
                        </h3>
                        <a href="" class="project-link">
                            View More
                            <ion-icon name="arrow-forward"></ion-icon>
                        </a>
                    </div>
                </div>
                <div class="project p8">
                    <img src="/wp-content/themes/integra/assets/images/project-8.jpg" alt="" class="project-img">
                    <div class="project-content">
                        <h3 class="project-heading">
                            Setting
                        </h3>
                        <a href="" class="project-link">
                            View More
                            <ion-icon name="arrow-forward"></ion-icon>
                        </a>
                    </div>
                </div>
                <div class="project p9">
                    <img src="/wp-content/themes/integra/assets/images/project-9.jpg" alt="" class="project-img">
                    <div class="project-content">
                        <h3 class="project-heading">
                            Hydraulic Vacuum
                        </h3>
                        <a href="" class="project-link">
                            View More
                            <ion-icon name="arrow-forward"></ion-icon>
                        </a>
                    </div>
                </div>
                <div class="project p10">
                    <img src="/wp-content/themes/integra/assets/images/project-10.jpg" alt="" class="project-img">
                    <div class="project-content">
                        <h3 class="project-heading">
                            For Hanging
                        </h3>
                        <a href="" class="project-link">
                            View More
                            <ion-icon name="arrow-forward"></ion-icon>
                        </a>
                    </div>
                </div>
            </div>

            <div class="btn-container">
                <a href="<?php echo esc_url(home_url('/production')); ?>" class="btn">
                    all projects <ion-icon name="arrow-forward"></ion-icon>
                </a>
            </div>
        </div>

        <div class="section-divider"></div>

        <div class="banner">
            <div class="container row">
                <div class="col">
                    <h3 class="banner-title">
                        100% Genuine Leather
                    </h3>
                    <p class="banner-desc">
                        There are so many incredible types of leather available. Each has it’s own unique qualities that
                        will benefit different project types or working styles.
                    </p>
                    <a href="<?php echo esc_url(home_url('/contacts')); ?>" class="btn">
                        contact us <ion-icon name="arrow-forward"></ion-icon>
                    </a>
                </div>
                <div class="col">
                    <img src="/wp-content/themes/integra/assets/images/genuine-leather-banner-img.png" alt=""
                        class="banner-img">
                </div>
            </div>
        </div>
    </section>

    <div class="section-divider"></div>

    <!-- leather -->
    <section id="leather">
        <div class="container">
            <div class="section-head">
                <p class="section-number">05</p>
                <h3 class="section-heading">
                    leather
                </h3>
                <p class="section-summary">
                    Discover Our Collection
                </p>
            </div>

            <div class="cats">
                <a href="<?php echo esc_url(home_url('/wet-blue/')); ?>" class="cat">
                    <img src="/wp-content/themes/integra/assets/images/WET-BLUE-3.jpg" alt="" class="cat-img">
                    <div class="cat-content">
                        <h4 class="cat-title">
                            WET BLUE
                        </h4>
                    </div>
                </a>
                <a href="<?php echo esc_url(home_url('/crust-leather/')); ?>" class="cat">
                    <img src="/wp-content/themes/integra/assets/images/COW-BEIGE-LINING-1.jpg" alt="" class="cat-img">
                    <div class="cat-content">
                        <h4 class="cat-title">
                            CRUST LEATHER
                        </h4>
                    </div>
                </a>
                <a href="<?php echo esc_url(home_url('/finished-leather/')); ?>" class="cat">
                    <img src="/wp-content/themes/integra/assets/images/NUBUCK-1.jpg" alt="" class="cat-img">
                    <div class="cat-content">
                        <h4 class="cat-title">
                            FINISHED LEATHER
                        </h4>
                    </div>
                </a>
            </div>
        </div>
    </section>

    <div class="section-divider"></div>

    <!-- featured products -->
    <section id="products">
        <div class="container">
            <div class="section-head">
                <p class="section-number">06</p>
                <h3 class="section-heading">
                    FEATURED PRODUCTS
                </h3>
                <p class="section-summary">
                    Made in Bangladesh
                </p>
            </div>

            <div class="products">
                <div class="product">
                    <img src="/wp-content/themes/integra/assets/images/WALLET-2.jpg" alt="" class="product-img">
                    <div class="product-info">
                        <h3 class="product-name">
                            Men's Wallet
                        </h3>
                        <a href="" class="product-link">
                            See More >>
                        </a>
                    </div>
                </div>
                <div class="product">
                    <img src="/wp-content/themes/integra/assets/images/BACKPACK-2.jpg" alt="" class="product-img">
                    <div class="product-info">
                        <h3 class="product-name">
                            Backpack
                        </h3>
                        <a href="" class="product-link">
                            See More >>
                        </a>
                    </div>
                </div>
                <div class="product">
                    <img src="/wp-content/themes/integra/assets/images/BELT-4.jpg" alt="" class="product-img">
                    <div class="product-info">
                        <h3 class="product-name">
                            Belt
                        </h3>
                        <a href="" class="product-link">
                            See More >>
                        </a>
                    </div>
                </div>
                <div class="product">
                    <img src="/wp-content/themes/integra/assets/images/DUFFEL-4.jpg" alt="" class="product-img">
                    <div class="product-info">
                        <h3 class="product-name">
                            Duffel
                        </h3>
                        <a href="" class="product-link">
                            See More >>
                        </a>
                    </div>
                </div>
                <div class="product">
                    <img src="/wp-content/themes/integra/assets/images/JACKET-1.jpg" alt="" class="product-img">
                    <div class="product-info">
                        <h3 class="product-name">
                            Jacket
                        </h3>
                        <a href="" class="product-link">
                            See More >>
                        </a>
                    </div>
                </div>
                <div class="product">
                    <img src="/wp-content/themes/integra/assets/images/MESSENGER-5.jpg" alt="" class="product-img">
                    <div class="product-info">
                        <h3 class="product-name">
                            Messenger
                        </h3>
                        <a href="" class="product-link">
                            See More >>
                        </a>
                    </div>
                </div>
                <div class="product">
                    <img src="/wp-content/themes/integra/assets/images/MENS-BOOTS-2.jpg" alt="" class="product-img">
                    <div class="product-info">
                        <h3 class="product-name">
                            Men's Boot
                        </h3>
                        <a href="" class="product-link">
                            See More >>
                        </a>
                    </div>
                </div>
                <div class="product">
                    <img src="/wp-content/themes/integra/assets/images/MENS-SHOES-3.jpg" alt="" class="product-img">
                    <div class="product-info">
                        <h3 class="product-name">
                            Men's Shoes
                        </h3>
                        <a href="" class="product-link">
                            See More >>
                        </a>
                    </div>
                </div>
                <div class="product">
                    <img src="/wp-content/themes/integra/assets/images/MOCCASIN-4.jpg" alt="" class="product-img">
                    <div class="product-info">
                        <h3 class="product-name">
                            Moccasin
                        </h3>
                        <a href="" class="product-link">
                            See More >>
                        </a>
                    </div>
                </div>
                <div class="product">
                    <img src="/wp-content/themes/integra/assets/images/OFFICE-BAG-5.jpg" alt="" class="product-img">
                    <div class="product-info">
                        <h3 class="product-name">
                            Office Bag
                        </h3>
                        <a href="" class="product-link">
                            See More >>
                        </a>
                    </div>
                </div>
                <div class="product">
                    <img src="/wp-content/themes/integra/assets/images/WOMEN-BOOTS-5.jpg" alt="" class="product-img">
                    <div class="product-info">
                        <h3 class="product-name">
                            Women's Boot
                        </h3>
                        <a href="" class="product-link">
                            See More >>
                        </a>
                    </div>
                </div>
                <div class="product">
                    <img src="/wp-content/themes/integra/assets/images/WOMEN-SHOES-7.jpeg" alt="" class="product-img">
                    <div class="product-info">
                        <h3 class="product-name">
                            Women's Shoe
                        </h3>
                        <a href="" class="product-link">
                            See More >>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div class="section-divider"></div>

    <!-- blogs -->
    <section id="blogs">
        <div class="container">
            <div class="section-head">
                <p class="section-number">07</p>
                <h3 class="section-heading">
                    NEWS & Events
                </h3>
                <p class="section-summary">
                    Goods for all time
                </p>
            </div>

            <div class="blogs">
                <?php
                    $args = array(
                        'post_type'      => 'post',      // Specify the post type (you can change it if needed).
                        'posts_per_page' => 3,           // Limit to 3 posts.
                        'order'          => 'DESC',      // Display in descending order (latest posts first).
                    );

                    $query = new WP_Query($args);

                    if ($query->have_posts()) {
                        while ($query->have_posts()) {
                            $query->the_post();
                            
                            get_template_part('template-parts/content', 'archive');
                        }
                        wp_reset_postdata(); // Restore the original post data.
                    } else {
                        echo "No news and events are available";
                    }
                ?>
            </div>

        </div>
    </section>

    <div class="section-divider"></div>

    <!-- partners -->
    <section id="partners">
        <div class="container partners">
            <img src="/wp-content/themes/integra/assets/images/partner-1.png" alt="" class="partner">
            <img src="/wp-content/themes/integra/assets/images/partner-2.png" alt="" class="partner">
            <img src="/wp-content/themes/integra/assets/images/partner-3.png" alt="" class="partner">
            <img src="/wp-content/themes/integra/assets/images/partner-4.png" alt="" class="partner">
        </div>
    </section>

    <div class="section-divider"></div>

    <!-- contacts -->
    <section id="contact">
        <div class="container">
            <div class="section-head">
                <p class="section-number">08</p>
                <h3 class="section-heading">
                    CONTACT US
                </h3>
                <p class="section-summary">
                    We can help. Our team of experts is on hand to answer your questions.
                </p>
            </div>

            <div class="row">
                <form action="/wp-content/themes/integra/submit-form.php" method="post" class="col form">
                    <input type="text" name="name" id="name" class="input" placeholder="Name *" required>
                    <input type="tel" name="phone" id="phone" class="input" placeholder="Phone Number *" required>
                    <input type="email" name="email" id="email" class="input" placeholder="Email *" required>
                    <input type="text" name="interest" id="interest" class="input" placeholder="Interested In">
                    <textarea name="message" id="message" class="input" placeholder="Message *" required></textarea>
                    <button type="submit" class="btn">
                        send email <ion-icon name="arrow-forward-outline"></ion-icon>
                    </button>
                </form>
                <div class="col">
                    <img src="/wp-content/themes/integra/assets/images/contact-us.png" alt="" class="contact-img">
                </div>
            </div>
        </div>
    </section>

    <?php get_footer() ?>
</body>

</html>