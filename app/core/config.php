<?php
define('admin', 1); // quyền admin
define('user', 0); // quyền người dùng thông thường
if ($_SERVER['SERVER_NAME'] == 'localhost') {
    define('DB_NAME', 'uwc_2_0');
    define('DB_HOST', 'localhost');
    define('DB_USER', 'root');
    define('DB_PASS', '');
    
    define('ROOT', 'http://localhost/MVC_test_v0/public');
    define('APPROOT', dirname(dirname(__FILE__)));
    //define('VIEWSURL', 'http://localhost/assignment-ltw/app/views');
    //definr('')
}
