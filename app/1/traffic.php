<?php
	require 'appconfig.php';
	require PROJECT_ABSPATH . '/templates/classes/buildTemplate.php';
/*
	
	CUSTOM/ADDED STYLESHEET

*/
		// declare stylesheet variable;
		$stylesheets = '';
		// set keys/values for custom stylesheets
		$css_files = array(
							'MAIN' => APP_URIPATH.'/css/main.css' ,
							'SUB' => APP_URIPATH.'/css/sub.css',
							'TRAFFIC' => APP_URIPATH.'/css/traffic.css',
							'TESTING' => APP_URIPATH.'/css/test.css',
						);
			foreach ($css_files as $key => $css_file) {
				$stylesheets .= '<!--'.$key.'-->'."\n";
				$stylesheets .= '<link rel="stylesheet" type="text/css" href="'.$css_file.'">'."\n";
			}
			unset($css_file);
		unset($css_files);
/*
	
	CUSTOM/ADDED JAVASCRIPT FILES (IN HEAD)

*/
		$head_scripts = '';
		$javascript_files = array(
							// 'DataTables' => APP_URIPATH.'/plugins/DataTables/datatables.js' 
						);
			foreach ($javascript_files as $key => $javascript_file) {
				$head_scripts .= '<!--'.$key.'-->'."\n";
				$head_scripts .= '<script type="text/javascript" src="'.$javascript_file.'"></script>'."\n";
			}
			unset($javascript_file);
		unset($javascript_files);
/*
	
	CUSTOM/ADDED FOOTERSCRIPTS

*/
		$footer_scripts = '';
		$javascript_files = array(
						'GoogleMapsAPI' => 'https://maps.googleapis.com/maps/api/js?key=AIzaSyDspNL6AzsenA2OqxauH9DeriT431xgfTk&v=3',  
						'Traffic' => APP_URIPATH.'/js/traffic.js',
						);
			foreach ($javascript_files as $key => $javascript_file) {
				$footer_scripts .= '<!--'.$key.'-->'."\n";
				$footer_scripts .= '<script type="text/javascript" src="'.$javascript_file.'"></script>'."\n";
			}
			unset($javascript_file);
		unset($javascript_files);

			/* INLINE SCRIPTS */
			// $postdata = http_build_query(
			//     array(
			//         'projectUriPath' => PROJECT_URIPATH
			//     )
			// );
			// $opts = array('http' =>
			//     array(
			//         'method'  => 'POST',
			//         'header'  => 'Content-type: application/x-www-form-urlencoded',
			//         'content' => $postdata
			//     )
			// );
			// $context  = stream_context_create($opts);
			// $footer_scripts .= file_get_contents('http://'.$_SERVER['HTTP_HOST'].APP_URIPATH.'/inc/footer.scripts.js.inc.php', false, $context);
			// ^^^I N N E F F I C I E N T^^^ BELOW IS BETTER
/*
	
	CUSTOM/ADDED INLINE SCRIPTS (FOR THE FOOTER) <<<MEANT TO PASS THROUGH PHP VARIABLES ON URI REQUESTS>>>;

*/

		$footer_inline_scripts = '';
/*
	
	THIS GOES IN THE CONTENT AREA (#LISTDATA, WITHIN THIS TEMPLATE)

*/
	
		$content = '';
/*
	
	INSERT INCLUDES/SCRIPTS/OTHER DEPENDENCIES INTO THE TEMPLATE FILES, MODIFY THE TEMPLATE FILES AS NEEDED FOR ADDITIONAL CUSTOMIZATION
	BY DECLARING TEMPLATE DATA PARAMETERS AND MAKING DATA/PAGE REQUESTS THROUGH PHP. 

*/
		$data = array(
						'params' => $params,
						'title' => 'Directory Listings',
						'styles' => $stylesheets,
						'head_scripts' => $head_scripts,
						'content' => $content,
						'footer_scripts' => $footer_scripts,
						'footer_inline_scripts' => $footer_inline_scripts
					);
/*
	
	CALL THE Template Class TO PRINT THE PAGE BASED ON THE DATA ARRAY

*/		
		$tmpl = new Template(PROJECT_ABSPATH . '/templates/'.APP_TEMPLATE.'/template.php', $data);
		echo $tmpl->render();

?>
