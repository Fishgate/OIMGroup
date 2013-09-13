<?php
/**
 * Holds constants/variables used in the configuration of the application.
 *
 * @author Kyle Vermeulen <kyle@source-lab.co.za>
 */

/**
 * These are the database connection details, change them as required.
 * Database dumps stored in the "sql" folder of the project root
 *
 */
//localhost
define('DB_HOST',       'localhost');
define('DB_NAME',       'OIMGroup');
define('DB_USERNAME',   'root');
define('DB_PASSWORD',   'root');
define('DB_LOGS_TBL',   'contactlogs');

/**
 * Contact information of the admin, generaly used as "FROM" headers for email.
 * 
 */
define('ADMIN_EMAIL', 'kyle@fishgate.co.za');
define('ADMIN_NAME', 'Kyle');

/**
 * Set the project state here for error handling, saves the end user from 
 * getting exceptions thrown at them, set to true/false.
 * 
 */
define('DEV', true);
define('DEV_EMAIL', 'kyle@fishgate.co.za, tyrone@fishgate.co.za');

/**
 * General pathing constants for including files and other goodness.
 *
 */
$root = pathinfo($_SERVER['SCRIPT_FILENAME']);
define('ABS_PATH',      dirname(__FILE__));
define('BASE_FOLDER',   basename($root['dirname']));
define('SITE_ROOT',     realpath(dirname(__FILE__)));
define('SITE_URL',      'http://'.$_SERVER['HTTP_HOST'].'/'.BASE_FOLDER);

/**
 * Setup autoloader to initiate classes with ease.
 *
 */
function __autoload($className) {
    require_once "../classes/$className.php";
}

?>
