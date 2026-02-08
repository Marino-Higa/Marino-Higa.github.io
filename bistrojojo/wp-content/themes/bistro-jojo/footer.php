<div class="pagetop js-pagetop">
      <i class="fas fa-angle-up"></i>PAGE TOP
    </div>

    <footer class="footer">
      <div class="container">
        <div class="footer_inner">
          <nav>
            <?php
              $args = array(
                'menu' => 'g-nav',
                'menu_class' => '',
                'container' => false,
              );
              ?>
            <?php wp_nav_menu($args); ?>
          </nav>
          <div class="footer_copyright">
            <small>&copy; 2020 Bistro jojo</small>
          </div>
        </div>
      </div>
    </footer>
    <?php wp_footer(); ?>
  </body>
</html>
