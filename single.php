<?php

/**
*Main template file
*
*Generic template for the O&E Theme
*
*
*/

get_header(); ?>

<section id="main" role="main">

	<div class="inner">
    
    	<?php while ( have_posts() ) : the_post(); ?>

				<?php get_template_part( 'content' ); ?>  
   
		<?php endwhile; ?>
            
    </div>
    
</section> <!-- Main -->

<?php get_footer(); ?>