<?php 
define('APP_ABSPATH', dirname(__FILE__));
$APP_URIPATH = str_replace(realpath($_SERVER['DOCUMENT_ROOT']), '', realpath(constant('APP_ABSPATH')));
if (OS_TYPE == 2) {
	$APP_URIPATH = str_replace('\\', '/', $APP_URIPATH);
}
define('APP_URIPATH', PROJECT_URIPATH . '/app/' . $params['appid']);

$ADDRESS = '201 California Street, San Francisco, CA 94111';
$ZIPCODE = '94111';
$features_list = array(
				'AMENITIES' => FALSE,
				'ANNOUNCEMENTS' => FALSE,
				'EVENTS' => FALSE,
				'PRIMARY_SLIDESHOW' => TRUE,
				'GOOGLEMAP' => FALSE,
				'NEWS' => FALSE,
				'PRIMARY_LISTINGS' => TRUE,
				'SECONDARY_LISTINGS' => FALSE,
				'TRANSIT' => FALSE,
				'SECONDARY_SLIDESHOW' => FALSE,
				'WEATHER' => FALSE,
				'WYSIWYG' => FALSE,
				'INFOBLOCK' => TRUE,
				'HEADER' => TRUE,
				'FOOTER' => TRUE
				);

// DEFINE PROJECT CONSTANTS FROM CONFIG SECTION ABOVE
define('ADDRESS', $ADDRESS);
define('ZIPCODE', $ZIPCODE);

// DEFINE PROJECT FEATURES FROM CONFIG SECTION ABOVE
define('AMENITIES', $features_list['AMENITIES']);
define('ANNOUNCEMENTS', $features_list['ANNOUNCEMENTS']);
define('EVENTS', $features_list['EVENTS']);
define('FOOTER', $features_list['FOOTER']);
define('GOOGLEMAP', $features_list['GOOGLEMAP']);
define('HEADER', $features_list['HEADER']);
define('INFOBLOCK', $features_list['INFOBLOCK']);
define('NEWS', $features_list['NEWS']);
define('PRIMARY_LISTINGS', $features_list['PRIMARY_LISTINGS']);
define('PRIMARY_SLIDESHOW', $features_list['PRIMARY_SLIDESHOW']);
define('SECONDARY_LISTINGS', $features_list['SECONDARY_LISTINGS']);
define('SECONDARY_SLIDESHOW', $features_list['SECONDARY_SLIDESHOW']);
define('TRANSIT', $features_list['TRANSIT']);
define('WEATHER', $features_list['WEATHER']);
define('WYSIWYG', $features_list['WYSIWYG']);

define('APP_TEMPLATE', "horizontal-1");

	// print_r(get_defined_constants(true));
	// var_dump($params);
	// var_dump($_GET);
	
?>
