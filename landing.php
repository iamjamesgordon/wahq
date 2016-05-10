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

		<img src="sdas" alt="" class="col-6" />
    	<img src="sdas" alt="" class="col-6" />
    	<img src="sdas" alt="" class="col-6" />
    
    	<img src="sdas" alt="" class="col-6" />
    	<img src="sdas" alt="" class="col-6" />
    	<img src="sdas" alt="" class="col-6" />
        
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
        
        		<li>Consultancy</li>
            	<li>Photography</li>
            	<li>Film making</li>
            	<li>Graphic design</li>
            	<li>Copywriting</li>
            	<li>Project managing</li>
            
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

		<img src="sdas" alt="" class="col-3" />
    	<img src="sdas" alt="" class="col-3" />
    	<img src="sdas" alt="" class="col-3" />  
          
    	<img src="sdas" alt="" class="col-3" />
    	<img src="sdas" alt="" class="col-3" />
    	<img src="sdas" alt="" class="col-3" />
        
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