<?php
/** database config **/
if ($_SERVER['SERVER_NAME'] == 'localhost') {
    
    define('DB_NAME', 'uwc_2_0');
    define('DB_HOST', 'localhost');
    define('DB_USER', 'root');
    define('DB_PASS', '');
    
    define('ROOT', 'http://localhost/MVC/public');
    define('APPROOT', dirname(dirname(__FILE__)));
    //define('VIEWSURL', 'http://localhost/UWC2.0 Project Code/app/views');
    //definr('')
}