<header class="header">
    <div class="container">
        <?php
            if(function_exists('the_custom_logo')){
                $custom_logo_id = get_theme_mod('custom_logo');
                $logo = wp_get_attachment_image_src($custom_logo_id);
            }
        ?>
        <a href="<?php echo esc_url(home_url('/')); ?>" class="logo-container">
            <img src="<?php echo $logo[0] ?>" alt="" class="logo">
        </a>

        <nav class="nav">
            <div class="nav-item">
                who we are
                <div class="sub-nav">
                    <a href="<?php echo esc_url(home_url('/company/')); ?>" class="sub-nav-item">
                        company profile
                    </a>
                    <a href="<?php echo esc_url(home_url('/founder/')); ?>" class="sub-nav-item">
                        founder
                    </a>
                </div>
            </div>
            <div class="nav-item">
                leather
                <div class="sub-nav">
                    <a href="<?php echo esc_url(home_url('/wet-blue/')); ?>" class="sub-nav-item">
                        wet blue
                    </a>
                    <a href="<?php echo esc_url(home_url('/crust-leather/')); ?>" class="sub-nav-item">
                        crust leather
                    </a>
                    <a href="<?php echo esc_url(home_url('/finished-leather/')); ?>" class="sub-nav-item">
                        finished leather
                    </a>
                </div>
            </div>
            <a href="<?php echo esc_url(home_url('/production/')); ?>" class="nav-item">production</a>
            <a href="<?php echo esc_url(home_url('/products')); ?>" class="nav-item">products</a>
            <a href="<?php echo esc_url(home_url('/news-events')); ?>" class="nav-item">news & events</a>
            <a href="<?php echo esc_url(home_url('/contacts')); ?>" class="nav-item">contacts</a>
        </nav>

        <nav class="dropdown mobile-nav none">
            <ion-icon name="menu" onclick="dropDown()" class="menu-button"></ion-icon>
            <div id="menuContent" class="nav-content">
                <div class="nav-item">
                    who we are
                    <div class="sub-nav">
                        <a href="<?php echo esc_url(home_url('/company/')); ?>" class="sub-nav-item">
                            company profile
                        </a>
                        <a href="<?php echo esc_url(home_url('/founder/')); ?>" class="sub-nav-item">
                            founder
                        </a>
                    </div>
                </div>
                <div class="nav-item">
                    leather
                    <div class="sub-nav">
                        <a href="<?php echo esc_url(home_url('/wet-blue/')); ?>" class="sub-nav-item">
                            wet blue
                        </a>
                        <a href="<?php echo esc_url(home_url('/crust-leather/')); ?>" class="sub-nav-item">
                            crust leather
                        </a>
                        <a href="<?php echo esc_url(home_url('/finished-leather/')); ?>" class="sub-nav-item">
                            finished leather
                        </a>
                    </div>
                </div>
                <a href="<?php echo esc_url(home_url('/production/')); ?>" class="nav-item">production</a>
                <a href="<?php echo esc_url(home_url('/products')); ?>" class="nav-item">products</a>
                <a href="<?php echo esc_url(home_url('/news-events')); ?>" class="nav-item">news & events</a>
                <a href="<?php echo esc_url(home_url('/contacts')); ?>" class="nav-item">contacts</a>
            </div>
        </nav>
    </div>
</header>