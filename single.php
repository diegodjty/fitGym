<?php get_header() ?>
    <main class="container section">
        <?php
            get_template_part('template-parts/post')
        ?>
       <div class="comments">
            <?php comment_form()?>
       </div>
    </main>
<?php
    get_footer();
?>