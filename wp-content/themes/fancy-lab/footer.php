<?php
/**
 * The template for displaying the footer
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Fancy Lab
 */
?>

<footer>
      <section class="footer-widgets">

        <div class="container">
          <div class="row">
            Footer wigets
          </div>
        </div>
      </section>
      <section class="copyright">
        <div class="container">
          <div class="row">
            <div class="copyright-text col-12 col-md-6">
              <?php get_theme_mod( 'set_copyright', 'Copyright 2021 - All rights reversed' ); ?></div>
            <nav class="footer-menu col-12 col-md-6 text-left text-md-right">
              <?php 
                wp_nav_menu(
                  array(
                    'theme_location'  =>  'fancy_lab_footer_menu'
                  )
                  );
              ?>
            </nav>
          </div>
        </div>
      </section>
    </footer>
  </div>

  <?php wp_footer(); ?>
</body>
</html>
