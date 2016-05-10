<?php

/**
*Main template file
*
*Generic template for the O&E Theme
*
*
*/

get_header(); ?>

<section id="page-banner">

	<div class="inner">
    
		<?php the_title( '<h1>', '</h1>' ); ?>
    
    </div>

</section> <!-- Page Banner -->

<section id="main" role="main">

	<div class="inner">
    	
        <?php if ( have_posts() ) : ?>
    
    		<?php while ( have_posts() ) : the_post(); ?>
            
            	<?php get_template_part( 'content' ); ?>
                        
            <?php endwhile; // end of the loop /> ?>
            
            <?php else : ?>
            
            <h1>No content found</h1>
            
		<?php endif; ?>
    
    </div>

</section> <!-- Section -->

<?php get_footer(); ?>