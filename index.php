<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <header class="header">
        <div class="container nav-bar">
            <div class="logo">
                <img src="<?php echo get_template_directory_uri(); ?>/img/logo.svg" alt="logo">
            </div>
            <nav>
                <a href="/us">AboutUS</a>
                <a href="/contact">contact</a>
                <a href="/blog">blog</a>
            </nav>
        </div>
    </header>
    <main>
        <?php
            while(have_posts()): the_post();
                the_title();
                the_content();
            endwhile;
        ?>
    </main>
</body>
</html>