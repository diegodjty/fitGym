<?php get_header() ?>
    <section class="welcome section container text-center">
        <h2 class="primary-text">
            <?php the_field('heading') ?>
        </h2>
        <p class="">
            <?php the_field('heading_text') ?>
        </p>
    </section>
    <section class="areas">
        <div class="area">
            <?php 
                $area = get_field('area_1');
                $image = $area['image']['sizes']['medium_large'];
                $text = $area['text'];
            ?>
            <img src="<?php echo esc_attr($image); ?>" alt="<?php echo esc_attr($text); ?>">
            <p><?php echo esc_html($text); ?></p>
        </div>
        <div class="area">
            <?php 
                $area2 = get_field('area_2');
                $image = $area2['image']['sizes']['medium_large'];
                $text = $area2['text'];
            ?>
            <img src="<?php echo esc_attr($image); ?>" alt="<?php echo esc_attr($text); ?>">
            <p><?php echo esc_html($text); ?></p>
        </div>
        <div class="area">
            <?php 
                $area3 = get_field('area_3');
                $image = $area3['image']['sizes']['medium_large'];
                $text = $area3['text'];
            ?>
            <img src="<?php echo esc_attr($image); ?>" alt="<?php echo esc_attr($text); ?>">
            <p><?php echo esc_html($text); ?></p>
        </div>
        <div class="area">
            <?php 
                $area4 = get_field('area_4');
                $image = $area4['image']['sizes']['medium_large'];
                $text = $area4['text'];
            ?>
            <img src="<?php echo esc_attr($image); ?>" alt="<?php echo esc_attr($text); ?>">
            <p><?php echo esc_html($text); ?></p>
        </div>
    </section>
    <main class="container section">
    </main>
<?php
    get_footer();
?>