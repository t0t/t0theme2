    <footer class="footer">
       <div>
       <nav><?php $defaults=array('theme_location'=>'footer_menu','menu_class'=>'nav-footer'); wp_nav_menu($defaults);?></nav>
       </div>
       
      <div>

      <div class="box--2">
        <h2>stream line</h2>
        <ul class="list-inline">
          <li class="icon-github">
            <a href="https://github.com/t0t/t0theme/" target="_blank">Github</a>
          </li>
          <li class="icon-twitter">
            <a href="https://twitter.com/t0tinspire" target="_blank">Twitter</a>
          </li>
          <li class="icon-flickr">
            <a href="https://www.flickr.com/photos/sergiofores/" target="_blank">Flickr</a>
          </li>
          <li class="icon-linkedin">
            <a href="https://www.linkedin.com/in/sergiofores/" target="_blank">Linkedin</a>
          </li>
        </ul>
      </div>
    
      <div class="box--2">
        <a href="mailto:sergiofores@gmail.com" class="box--1 btn btn--primary">
        Send me an em@il</a>  
      </div>

      </div>


       <div>
       	<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Culpa distinctio pariatur consequuntur inventore commodi consequatur minima unde assumenda impedit, tenetur eligendi, consectetur vero voluptatem! Expedita eligendi atque suscipit, beatae quidem.</p>
       </div>	
    </footer>
    <?php edit_post_link(); ?>
    <?php wp_footer(); ?>
</body>
</html>