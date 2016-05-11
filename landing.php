<?php
/**
*Template name: Landing Template
*
*
*
*/
get_header(); ?>

<div id="landing-banner">

	<?php echo do_shortcode('[masterslider id="3"]'); ?>

</div>

<!------------------------------------------------------------->

<div id="brands" class="padding">

	<section class="inner-wide">
    
    	<?php echo do_shortcode('[envira-gallery slug="brands"]'); ?>

		<!--<img src="sdas" alt="" class="col-6" />
    	<img src="sdas" alt="" class="col-6" />
    	<img src="sdas" alt="" class="col-6" />
    
    	<img src="sdas" alt="" class="col-6" />
    	<img src="sdas" alt="" class="col-6" />
    	<img src="sdas" alt="" class="col-6" />-->
        
        <div class="clearfix"></div>
    
    </section> <!-- Inner -->

</div>

<!------------------------------------------------------------->

<div id="about-us" class="padding">

	<section class="inner-slim center-text">

		<hgroup>
    
    		<h1 class="section-header">About Us</h1>
        
    	</hgroup>
    
        <p>
		<?php echo do_shortcode('[contentblock id=landing-about]'); ?>  
        </p>
        
	</section> <!-- Inner -->
    
</div>

<!------------------------------------------------------------->

<div id="slider-divider">

	<?php echo do_shortcode('[masterslider id="2"]'); ?>

</div>

<!------------------------------------------------------------->

<div id="services" class="padding center-text white-text">

	<section class="inner-slim">

		<hgroup>
    
    		<h1 class="section-header">Services</h1>
            
		</hgroup>
        
        <ul>
        
		<?php $loop = new WP_Query( array( 'post_type' => 'services' ) ); ?>
			<?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
            
            	<li><?php echo get_the_title(); ?></li>
                
		<?php endwhile; wp_reset_query(); ?>
        
        </ul>
    
    </section> <!-- Inner -->

</div>

<!------------------------------------------------------------->

<div id="statement" class="padding center-text">

	<h1>"BRAND STATEMENT" TBC</h1>

</div>

<!------------------------------------------------------------->

<div id="portfolio">

	<div class="inner-wide">
    
    	<?php $loop = new WP_Query( array( 'post_type' => 'portfolio' ) ); ?>
			<?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
            
            	<a href="<?php echo get_permalink();?>" class="col-3">
                
					<div class="portfolio-thumbs-overlay" style="">
        
        				<h2 class="portfolio-thumbs-header"><?php echo the_title(); ?></h2>
        
        			</div>
                
                	<?php $feat_image = wp_get_attachment_url( get_post_thumbnail_id($post->ID) ); ?>
                    
                    <img src="<?php echo $feat_image; ?>" alt="" class="portfolio-thumbs" />
                                       
                </a>
                
		<?php endwhile; wp_reset_query(); ?>
        
        <div class="clearfix"></div>
    
    </div>
    
</div>

<!------------------------------------------------------------->

<div id="contact" class="padding">

	<section class="inner-slim center-text">
    
    	<h1 class="section-header">Contact Us</h1>
    	
        <p>New Business</p>
    	<p><?php echo do_shortcode('[contentblock id=contact-newbusiness]'); ?></p>
        
        <br>
        
        <p>General Inquiries</p>
        <p><?php echo do_shortcode('[contentblock id=contact-general]'); ?></p>
    
    </section> <!-- Inner -->

</div>

<!------------------------------------------------------------->

<?php get_footer(); ?>
