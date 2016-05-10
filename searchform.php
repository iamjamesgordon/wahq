<?php
/**
*Template for displaying search forms
*
*/
?>

<form method="get" id="searchform" action="<?php echo esc_url ( home_url( '/' ) ); ?>">
	
    <input type="text" name="s" id="searchformrequest" placeholder="Search" >    
    <input type="submit" id="searchformsubmit">
        
</form>