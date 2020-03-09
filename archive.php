<?php
/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package themebox
 */

get_header();
  if ( have_posts() ) : ?>

    <header>
      <?php
      the_archive_title( '<h1>', '</h1>' );
      the_archive_description( '<div>', '</div>' );
      ?>
    </header>

    <?php
    while ( have_posts() ) :
      the_post();
      get_template_part( 'template-parts/content', get_post_type() );

    endwhile;

    the_posts_navigation();

  else :

    get_template_part( 'template-parts/content', 'none' );

  endif;

get_footer();
