<?php
/**
*Template for displaying Archives
*
*/
get_header(); ?>

<section id="main" role="main">

	<div class="inner">
    
    	<?php if ( have_posts() ) : ?>
    
    		<header class="page-header">
        
        		<h1 class="page-title"><?php post_type_archive_title(); ?></h1>
       		
    		</header>
            
		<?php while ( have_posts() ) : the_post(); ?>
        
        	<?php get_template_part( 'content' ); ?>
         
		<?php endwhile; ?>
            
		<?php else : ?>
        
        <article>
        
        	<h1>No results were found for this author</h1>
        
        </article>
            
		<?php endif; ?>
    
    </div>

</section> <!-- Section -->

<?php get_footer(); ?>