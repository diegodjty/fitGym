<?php

function fitGym_classes_list($quantity = -1){
    ?>
        <ul class="grid-list">
                    <?php
                        $args = array(
                            'post_type' => 'fitgym_classes',
                            'posts_per_page' => $quantity
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
    <?php
}

function fitGym_instructors_list(){
    ?>
        <ul class="grid-list instructors">
            <?php
                $args = array(
                    'post_type' => 'instructors'
                );
               
                $instructors = new WP_Query($args);
                // echo $instructors;
                while($instructors->have_posts()){
                    $instructors->the_post();
                ?>
                    <li class="instructor">
                        <?php the_post_thumbnail('large'); ?>
                        <div class="content text-center">
                            <h3><?php the_title() ;?></h3>
                            <?php the_content();?>

                            <div class="specialty">
                                <?php
                                    $esp= get_field('specialty_');
                                    foreach($esp as $e){
                                        ?>
                                            <span class="tag">
                                                <?php echo esc_html($e);?>
                                            </span>
                                        <?php
                                    }
                                ;?>
                            </div>
                        </div>
                    </li>
                <?php
                    }
                    wp_reset_postdata();
                ?>
         </ul>
    <?php
}

function fitGym_testimonials(){
    ?>
        <ul class="testimonials-list swiper-wrapper">
            <?php
                $args = array(
                    'post_type' => 'testimonials'
                );
               
                $testimonials = new WP_Query($args);
                // echo $testimonials;
                while($testimonials->have_posts()){
                    $testimonials->the_post();
                ?>
                    <li class="testimonial text-center swiper-slide">
                        <blockquote>
                            <?php the_content() ;?>
                        </blockquote>
                        <footer class="testimonial-footer">
                        <?php the_post_thumbnail('thumbnail') ;?>
                        <p>
                            <?php the_title();?>
                        </p>
                        </footer>
                    </li>
                <?php
                    }
                    wp_reset_postdata();
                ?>
         </ul>
    <?php
}