    <footer class="main-footer">
      <?php //$defaults=array('theme_location'=>'footer_menu','menu_class'=>'nav-footer'); wp_nav_menu($defaults);?>
       
        <h2 class="main-footer__header">Contacto</h2>
        <ul class="main-footer__list">
          <li class="icon-github">
            <a href="https://github.com/t0t/t0theme2/" target="_blank">My repositories on Github</a>
          </li>
          <li class="icon-twitter">
            <a href="https://twitter.com/t0tinspire" target="_blank">I'm @t0tinspire on Twitter</a>
          </li>
          <li class="icon-flickr">
            <a href="https://www.flickr.com/photos/sergiofores/" target="_blank">Hago fotos a las cosas que me gustan</a>
          </li>
          <li class="icon-linkedin">
            <a href="https://www.linkedin.com/in/sergiofores/" target="_blank">Yes! I've a profile on Linkedin too!</a>
          </li>
        </ul>
    
        <div class="main-footer__credits">
          <a href="mailto:sergiofores@gmail.com" class="main-footer__btn btn btn--primary">Just say Hello!</a>
        <aside class="creditos" rel="author"> 
            <small>
              <a href="http://sergiofores.net" target="_blank"><i class="icon-logo-mazizo"></i> </a> &sdot; <?php bloginfo('name'); ?>
              <?php echo date('Y'); ?>
            </small>
          <?php edit_post_link('&oplus; Editar ') ?>&sdot;
          <?php wp_loginout(); ?>
          </aside>
        </div> 
       
    </footer>
    <?php wp_footer(); ?>

</body>
</html>