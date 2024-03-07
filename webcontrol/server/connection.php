<?php 

// App root
define('APPROOT', dirname(dirname(__FILE__)));
define('SITEURL', 'http://localhost/hydroinformatics/');
define('ADMINURL', 'http://localhost/hydroinformatics/webcontrol/');
define('SERVICEURL', 'http://localhost/hydroinformatics/webcontrol/assets/service_image/');
define('HOMEURL', 'http://localhost/hydroinformatics/webcontrol/assets/home_image/');
define('ABOUTURL', 'http://localhost/hydroinformatics/webcontrol/assets/about_image/');
define('TEAMURL', 'http://localhost/hydroinformatics/webcontrol/assets/team_image/');
define('PROJECTURL', 'http://localhost/hydroinformatics/webcontrol/assets/project_image/');
define('CAROUSELURL', 'http://localhost/hydroinformatics/webcontrol/assets/carousel_image/');
define('CLIENTURL', 'http://localhost/hydroinformatics/webcontrol/assets/client_image/');
define('REVIEWURL', 'http://localhost/hydroinformatics/webcontrol/assets/review_image/');
define('NEWSURL', 'http://localhost/hydroinformatics/webcontrol/assets/news_image/');
$conn = mysqli_connect('localhost', 'root', '', 'hydroinformatics')
or die('cant connect to database');  


//  $conn = mysqli_connect('localhost', 'ogrrecom_server', '@admin100@', 'ogrrecom_server')
//  or die('cant connect to database');  




