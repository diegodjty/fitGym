<?php
    while(have_posts()): the_post();
        the_title('<h1 class="text-center primary-text">','</h1>');
        // If it has an img add that class
        if(has_post_thumbnail()){
            the_post_thumbnail('full',array('class'=>'feature-img'));
        }
        the_content();
    endwhile;
?>