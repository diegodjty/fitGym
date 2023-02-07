<footer class="footer container">
    <hr>
    <div class="footer-content">
        <?php 
            $args = array(
                'theme_location' => 'main-menu',
                'container' => 'nav',
                'container_class' =>'main-menu'
            ); 
            wp_nav_menu($args) 
        ?>
        <p class="copyright">All rights reserved. <?php echo get_bloginfo('name')." ". date('Y'); ?></p>
    </div>
</footer>
</body>
</html>