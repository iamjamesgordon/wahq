<?php
/**
*Template for displaying search forms
*
*/
get_header(); ?>

<section id="main" role="main">

	<div class="inner">
    
    	<?php if ( have_posts() ) : ?>
    
    		<header class="page-header">
        
        		<h1 class="page-title"></h1>
       		
    		</header>
            
          <?php while ( have_posts() ) : the_posts(); ?>
        
        	<div class="blocks">
        
        		Permalink
                
                Feature Image
                
                Post Title
                
                Post Author
                
                Post Date
                
                Post Category
        
        	</div>
         
		<?php endwhile; ?>
            
		<?php else : ?>
        
        <article>
        
        	<h1>No results were found for therequested archive, Perhaps searching will help you find a related post</h1>
        
        </article>
            
		<?php endif; ?>
    
    </div>

</section> <!-- Section -->