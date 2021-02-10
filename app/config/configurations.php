<?php

/*
    * Router the application
*/

# Database access settings
define('DB_DRIVER', 'mysql');
define('DB_HOST', 'localhost');
define('DB_NAME', 'intelcost_goods');
define('DB_CHARSET', 'utf8');
define('DB_USER', 'root');
define('DB_PASSWORD', '');

# Route application
define('ROUTE_APP', dirname(dirname(__FILE__)));

# Route url examplo : http://mvc.test/
define('ROUTE_URL', 'http://localhost/intelcost/');

# Route include home
define('ROUTE_INCLUDE', ROUTE_APP . "/views/inc/");
# Route view home
define('ROUTE_VIEW', ROUTE_APP . "/views/modules/");

# Name website
define('NAME_PAGE', '| Intel cost');
