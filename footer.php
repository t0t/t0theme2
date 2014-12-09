    <footer class="footer">
       <nav><?php $defaults=array('theme_location'=>'footer_menu','menu_class'=>'nav-footer'); wp_nav_menu($defaults);?></nav>	
    </footer>
    <?php edit_post_link(); ?>
    <?php wp_footer(); ?>
</body>
</html>