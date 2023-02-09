<?php
    /*
    * Template Name: Galery
    */
    get_header() 
?>
    <main class="container section">
    <?php
        while(have_posts()): the_post();
            the_title('<h1 class="text-center primary-text">','</h1>');
            the_content();    
        endwhile;
    ?>
    </main>

    <?php
        get_footer();
    ?>
