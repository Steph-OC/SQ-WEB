<footer class="site_footer">
    <?php wp_nav_menu(
        array(
            'theme_location' => 'footer-menu',
            'container' => 'ul',
            'menu_class' => 'site_footer_menu',
        )
    );
    ?>
</footer>
</div>
<?php wp_footer(); ?>
</body>

</html>