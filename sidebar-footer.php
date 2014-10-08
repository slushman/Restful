<?php if ( is_active_sidebar( 'footer-1' ) || is_active_sidebar( 'footer-2' ) || is_active_sidebar( 'footer-3' ) ) : ?>

<section class="section section-sidebar-footer sidebar sidebar-footer">
  <div class="container">
    <div class="row">
      <?php if ( is_active_sidebar( 'footer-1' ) ) : ?>
        <div class="widget-area col col-xs-12 col-md-4">
          <?php dynamic_sidebar( 'footer-1' ); ?>
        </div>
      <?php endif; ?>

      <?php if ( is_active_sidebar( 'footer-2' ) ) : ?>
        <div class="widget-area col col-xs-12 col-md-4">
          <?php dynamic_sidebar( 'footer-2' ); ?>
        </div>
      <?php endif; ?>

      <?php if ( is_active_sidebar( 'footer-3' ) ) : ?>
        <div class="widget-area col col-xs-12 col-md-4">
          <?php dynamic_sidebar( 'footer-3' ); ?>
        </div>
      <?php endif; ?>
    </div>
  </div>
</section>

<?php endif;