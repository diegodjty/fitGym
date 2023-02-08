<?php
    /*
    * Template Name: Clasess List
    */
    get_header() 
?>
    <main class="container section">
        <?php
            get_template_part('template-parts/page')
        ?>
        <ul class="grid-list">
            <?php
                $args = array(
                    'post_type' => 'gymfitness_clases'
                );
                $clasess = new WP_Query($args);

                while($clasess->have_posts()){
                    $clasess->the_post();
                ?>
                        <li class="card">
                            <?php the_post_thumbnail(); ?>
                            <div class="content">
                                <a href="<?php the_permalink();?>">
                                    <h3><?php the_title(); ?></h3>
                                </a>
                                <?php 
                                    $starting_hour = get_field('starting_hour');
                                    $ending_hour = get_field('ending_hour')
                                ?>
                                <p><?php the_field('classes_days');?> - 
                                <?php echo $starting_hour .' - '. $ending_hour ?> </p>
                            </div>
                        </li>
                <?php
                    }
                    wp_reset_postdata();
                ?>
        </ul>
    </main>

    <?php
        get_footer();
    ?>
