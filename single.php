<?php

/**
*Main template file
*
*Generic template for the O&E Theme
*
*
*/

get_header(); ?>

<div id="portfolio-wrapper" class="inner-wide">

	<div id="portfolio-header">

		<h1>Portfolio Header</h1>

	</div> <!-- Portfolio header -->
    
    <div id="portfolio-hero" class="padding">
    
    	<?php $feat_image = wp_get_attachment_url( get_post_thumbnail_id($post->ID) ); ?>
                    
		<img src="<?php echo $feat_image; ?>" alt="" />
    
    </div> <!-- Portfolio hero -->

	<div id="portfolio-copy" class="padding">

		<article>
    
    	<?php the_content(); ?>
    
    	</article>

	</div> <!-- Portfolio copy -->

	<div id="portfolio-thumbs">

		<img src="sdfsf" alt="" class="col-3" />
        <img src="sdfsf" alt="" class="col-3" />
        <img src="sdfsf" alt="" class="col-3" />
        
        <div class="clearfix"></div>

	</div> <!-- Portfolio thumbs -->

</div> <!-- Wrapper -->

<?php get_footer(); ?>
