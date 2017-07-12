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
							'DataTables' => APP_URIPATH.'/plugins/DataTables/datatables.min.css' ,
							'DataTablesjQuery' => APP_URIPATH.'/plugins/DataTables/DataTables-1.10.13/css/jquery.dataTables.css' ,
							'MAIN' => APP_URIPATH.'/css/main.css' ,
							'SUB' => APP_URIPATH.'/css/sub.css' ,
							'TESTING' => APP_URIPATH.'/css/test.css' ,
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
							'Get Companies' => APP_URIPATH.'/js/getCompanies.js',
							'DataTables' => APP_URIPATH.'/plugins/DataTables/datatables.js' 
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
		$footer_inline_scripts = APP_ABSPATH.'/inc/footer.companyDataTable.js.inc.php';
/*
	
	THIS GOES IN THE CONTENT AREA (#LISTDATA, WITHIN THIS TEMPLATE)

*/
		$content = '';
		// $outputTableHTML = '<table id="example" class="display" cellspacing="0" width="100%">
		// 					<thead>
		// 						<tr>
		// 							<th>id</th>
		// 				            <th>name</th>
		// 				            <th>address</th>
		// 				            <th>null</th>
		// 							<th>suite</th>
		// 							<th>floor</th>
		// 							<th>desc</th>
		// 						</tr>
		// 					</thead>
		// 					<tfoot>
		// 						<tr>
		// 							<th>id</th>
		// 				            <th>name</th>
		// 				            <th>address</th>
		// 				            <th>null</th>
		// 							<th>suite</th>
		// 							<th>floor</th>
		// 							<th>desc</th>
		// 						</tr>
		// 					</tfoot>
		// 					<tbody>
		// 					</tbody>
		// 				</table>';
		// $content .= $outputTableHTML;
		// $content .= file_get_contents('http://localhost/david/api/listings/companies/');
/*
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
