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
        <h2 class="text-center primary-text">Our Classes</h2>
        <?php fitGym_classes_list(4);?>
        <div class="btn-container">
            <a class="btn primary-btn" href="<?php echo esc_url(get_permalink(get_page_by_title('Classes')));?>">
                View All Classes
            </a>
        </div>
    </main>

    <section class="container section">
        <h2 class="text-center primary-text">Our Instructors</h2>
        <p class="text-center">Professionals Instructors To help you</p>
        <?php fitGym_instructors_list();?>
    </section>

    <section class="testimonials">
    <h2 class="text-center primary-text">Testimonials</h2>
        <div class="testimonials-container">
            <?php fitGym_testimonials();?>
        </div>
    </section>
<?php 
    get_footer();
?>