<?php
ini_set('display_errors', 1);
error_reporting(E_ALL);

$PROJECTID = '4970ch';
define('PROJECTID', $PROJECTID);


// DETERMINE OPERATING SYSTEM 
class System {

	const OS_UNKNOWN = 1;
	const OS_WIN = 2;
	const OS_LINUX = 3;
	const OS_OSX = 4;

	/**
	 * @return int
	 */
	static public function getOS() {
		switch (true) {
		case stristr(PHP_OS, 'DAR'): return self::OS_OSX;
		case stristr(PHP_OS, 'WIN'): return self::OS_WIN;
		case stristr(PHP_OS, 'LINUX'): return self::OS_LINUX;
		default:return self::OS_UNKNOWN;
		}
	}

}

//DEFINE PROJECT ROOT
define('PROJECT_ABSPATH', dirname(__FILE__));

// CHECK PROJECT ROOT AGAINST OPERATING SYSTEM
$PROJECT_URIPATH = str_replace(realpath($_SERVER['DOCUMENT_ROOT']), '', realpath(constant('PROJECT_ABSPATH')));
$system = new System();
$OS_TYPE = $system->getOS();
define('OS_TYPE', $OS_TYPE);
// MODIFY PATH IF WINDOWS OPERATING SYSTEM
if (OS_TYPE == 2) {
	$PROJECT_URIPATH = str_replace('\\', '/', $PROJECT_URIPATH);
}
//SET PROJECT_URIPATH CONSTANT
define('PROJECT_URIPATH', $PROJECT_URIPATH);

?>