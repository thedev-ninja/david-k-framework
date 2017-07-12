<?php
// require 'config.php';
require 'parse_flatfiles.inc.php';
// echo PROJECTID;
if (isset($_GET['headers']) !== FALSE) {
	$header = filter_var($_GET['headers'], FILTER_VALIDATE_BOOLEAN);
}else{
	$header = FALSE;
}
if (isset($_GET['data'])) {
	$data = $_GET['data'];
}
if (isset($_GET['ext'])) {
	$ext = '.'.$_GET['ext'];
}
// print_r(get_defined_constants(true));
$data = PROJECT_ABSPATH . '\\' . PROJECTID . '_' . $data.$ext;
// $data = 'C:\wwwroot\david' . '\\' . 'PROJECT' . '_' . $data.$ext;
$data = array("data" => ImportCSV2Array($data, $header));
$result_array = $data;
if (isset($_GET['format'])) {
	$format = strtoupper($_GET['format']);
	if ($format == 'JSON') {
		echo json_encode($result_array);
	}
	elseif ($format == 'RAW') {
		// echo PROJECTID;
		print_r($result_array);
	}
}
else{
// echo PROJECTID;
$format = 'JSON';
	// echo json_encode($result_array).PHP_EOL;
	// echo PROJECTID;
}
?>