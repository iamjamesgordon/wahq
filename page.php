<?php
/**
*Template for displaying all pages
*
*
*
*/
get_header(); ?>

<section id="page-banner">

	<div class="inner">

		<?php the_title( '<h1>', '</h1>' ); ?>
    
    </div>

</section> <!-- Page Banner -->

<section role="main">

	<div class="inner">
    	    
		<?php while ( have_posts() ) : the_post(); ?>

			<?php the_content(); ?>

		<?php endwhile; ?>          
                
    </div>

</section> <!-- Section -->

<?php get_footer(); ?>