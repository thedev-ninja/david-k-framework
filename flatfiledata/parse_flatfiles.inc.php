<?php
error_reporting(E_ALL);
ini_set('auto_detect_line_endings', TRUE);
function ImportCSV2Array($filename, $field_keys = FALSE) {
	$row = 0;
	$col = 0;
	$handle = @fopen($filename, "r");
	if ($handle) {
		$length = 4096;
		$delimiter = "|";
		$num = -1;
		while (($row = fgetcsv($handle, $length, $delimiter)) !== FALSE) {
		$num++;
			
							
			if (isset($field_keys)) {
				if ($field_keys !== FALSE) {
					if (empty($fields)) {
						$fields = $row;
						continue;
					}
					foreach ($row as $k => $value) {
						$results[$col][$fields[$k]] = $value;
					}
					$col++;
					unset($row);
				} elseif($field_keys == FALSE) {
					foreach ($row as $k => $value) {
						$results[$col][$k] = $value;
					}
					$col++;
					unset($row);
				}
			} else {
					foreach ($row as $k => $value) {
						$results[$col][$k] = $value;
					}
					$col++;
					unset($row);
				}
		}
		if (!feof($handle)) {
			echo "Error: unexpected fgetcsv() fail";
		}
		fclose($handle);
		}
		else{
			// echo "uhhh...";
		}

	return $results;
};
?>