<?php get_header() ?>
    <main class="container section with-sidebar">
        <section class="main-content">
            <?php
                get_template_part('template-parts/class')
            ?>
        </section>
        <aside>
            <h2>sidebar here</h2>
        </aside>
    </main>
<?php
    get_footer();
?>