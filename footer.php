    <footer class="footer">
       <div>
       <nav><?php $defaults=array('theme_location'=>'footer_menu','menu_class'=>'nav-footer'); wp_nav_menu($defaults);?></nav>
       </div>
       <div>
       	<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ut corporis dignissimos porro culpa possimus, rem vitae quis iusto, aut ratione deserunt! Cum alias non adipisci voluptatum, explicabo in animi dolores!</p>
       </div>
       <div>
       	<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Culpa distinctio pariatur consequuntur inventore commodi consequatur minima unde assumenda impedit, tenetur eligendi, consectetur vero voluptatem! Expedita eligendi atque suscipit, beatae quidem.</p>
       </div>	
    </footer>
    <?php edit_post_link(); ?>
    <?php wp_footer(); ?>
</body>
</html>