<?php
    while(have_posts()): the_post();
        the_title('<h1 class="text-center primary-text">','</h1>');
        // If it has an img add that class
        if(has_post_thumbnail()){
            the_post_thumbnail('full',array('class'=>'feature-img'));
        };
            $starting_hour = get_field('starting_hour');
            $ending_hour = get_field('ending_hour')
        ?>
            <p class="class-info">
            <?php the_field('classes_days');?> - 
            <?php echo $starting_hour .' - '. $ending_hour; ?> </p>
            <?php
        
        the_content();
            
    endwhile;
?>