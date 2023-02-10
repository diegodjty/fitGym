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

            // get gallery
            $galery = get_post_gallery(get_the_ID(),false);

            // Get ID's on an array
            $galery_images_ID=explode(",",$galery['ids']);
            ?>
                <ul class="image-gallery">
                    <?php 
                        foreach($galery_images_ID as $id){
                            $big_image = wp_get_attachment_image_src($id,'large')[0];
                            $full_image = wp_get_attachment_image_src($id,'full')[0];

                            ?>
                                <li>
                                    <a data-lightbox="gallery" href="<?php echo $full_image; ?>">
                                        <img src="<?php echo $big_image; ?>" alt="gallery image">
                                    </a>
                                </li>
                            <?php
                        }
                    ?>
                </ul>
            <?php
        endwhile;
    ?>
    </main>

    <?php
        get_footer();
    ?>
