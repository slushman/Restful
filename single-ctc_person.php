<?php

get_header();

$has_sidebar = is_active_sidebar( 'people' );

?>

<section class="section-masthead <?php if ( ! $has_sidebar ) echo 'masthead-centered' ?>">
  <div class="container">
    <?php tbf_breadcrumb(); ?>

    <h1 class="masthead-title"><?php the_title(); ?></h1>
  </div>
</section>

<section class="section section-main">
  <div class="container">
    <div class="row">
      <div class="col col-xs-12 <?php echo ( $has_sidebar ? 'col-md-7' : 'col-md-8 col-md-push-2' ); ?>">
        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
          <article <?php post_class( 'entry' ); ?>>
            <?php if ( has_post_thumbnail() ) : ?>
              <div class="entry-thumbnail">
                <?php the_post_thumbnail( 'large' ); ?>
              </div>
            <?php endif; ?>

            <?php if ( tbf_person_position() || tbf_person_phone() || tbf_person_email() || tbf_person_urls() ) : ?>
              <div class="entry-meta person-meta">
                <?php if ( tbf_person_position() ) : ?>
                  <div class="entry-meta-item person-position"><i class="fa fa-user fa-fw"></i><?php echo tbf_person_position(); ?></div>
                <?php endif; ?>

                <?php if ( tbf_person_phone() ) : ?>
                  <div class="entry-meta-item person-phone"><i class="fa fa-phone fa-fw"></i><?php echo tbf_person_phone(); ?></div>
                <?php endif; ?>

                <?php if ( tbf_person_email() ) : ?>
                  <div class="entry-meta-item person-email"><i class="fa fa-envelope fa-fw"></i><?php echo tbf_person_email(); ?></div>
                <?php endif; ?>

                <?php if ( tbf_person_urls() ) : ?>
                  <div class="entry-meta-item"><?php echo tbf_person_urls(); ?></div>
                <?php endif; ?>
              </div>
            <?php endif; ?>

            <div class="entry-content">
              <?php the_content(); ?>
            </div>
          </article>
        <?php endwhile; else: ?>
          <?php _e( 'Nothing found.', 'restful' ); ?>
        <?php endif; ?>
      </div>

      <?php if ( $has_sidebar ) get_sidebar( 'people' ); ?>
    </div>
  </div>
</section>

<?php get_footer();