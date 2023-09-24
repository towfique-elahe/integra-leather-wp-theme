<div class="container col">
    <h1 class="heading">
        <?php
            if (is_home()) {
                echo get_the_title(get_option('page_for_posts'));
            } else {
                echo get_the_title();
            }
        ?>
    </h1>

    <?php
        the_content();
    ?>
</div>