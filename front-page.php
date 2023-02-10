<?php get_header() ?>
    <section class="welcome section container text-center">
        <h2 class="primary-text">
            <?php the_field('heading') ?>
        </h2>
        <p class="">
            <?php the_field('heading_text') ?>
        </p>
    </section>
    <main class="container section">
    </main>
<?php
    get_footer();
?>