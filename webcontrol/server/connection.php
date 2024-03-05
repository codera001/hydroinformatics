<?php 

// App root
define('APPROOT', dirname(dirname(__FILE__)));
define('SITEURL', 'http://localhost/hydroinformatics/');
define('ADMINURL', 'http://localhost/hydroinformatics/webcontrol/');
define('SERVICEURL', 'http://localhost/hydroinformatics/webcontrol/assets/service_image/');
define('HOMEURL', 'http://localhost/hydroinformatics/webcontrol/assets/home_image/');
define('ABOUTURL', 'http://localhost/hydroinformatics/webcontrol/assets/about_image/');
define('TEAMURL', 'http://localhost/hydroinformatics/webcontrol/assets/team_image/');
$conn = mysqli_connect('localhost', 'root', '', 'hydroinformatics')
or die('cant connect to database');  


//  $conn = mysqli_connect('localhost', 'ogrrecom_server', '@admin100@', 'ogrrecom_server')
//  or die('cant connect to database');  




