<? php
/**
 * Plugin Name:       ip function 
 * Plugin URI:        http://fidatok.website
 * Description:        ip function 
 * Version:          1.2
 **/
?>
<?php 
add_action('wp_head','ip_address');

function ip_address() {
	 $user_ip = getenv('REMOTE_ADDR');
  $geo = unserialize(file_get_contents("http://www.geoplugin.net/php.gp?ip=$user_ip"));
  $country = $geo["geoplugin_countryName"];
  switch ($country) {
		  case "India":
        header('Location:http://domain.com/hi');
        break;
 
    	  case "Bangladesh":
        header('Location:http://fidatok.com');
        break;
  }
	
}
?>
