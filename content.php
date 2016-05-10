<?php
/**
 * The template for displaying all single posts
 *
 * @package WordPress
 * @subpackage Twenty_Thirteen
 * @since Twenty Thirteen 1.0
 */

get_header(); ?>

<article class="block">

	<?php if ( has_post_thumbnail() ) {
		the_post_thumbnail();
	} ?>

	<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
	<?php the_excerpt(); ?>
	<?php the_category(); ?>
    
    <?php if ( is_single() ) : ?>
    
		<?php the_tags( $sep, $after ); ?>
		<?php the_author_link(); ?>
		<?php the_time( 'M, m, Y' ); ?>
           
    <?php endif; ?>
            
</article>

<?php get_footer(); ?>