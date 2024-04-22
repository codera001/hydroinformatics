<?php 
// start session
session_start();
// Prevent caching
header("Cache-Control: no-store, no-cache, must-revalidate, max-age=0");
header("Cache-Control: post-check=0, pre-check=0", false);
header("Pragma: no-cache");
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
define('EQUIPURL', 'http://localhost/hydroinformatics/webcontrol/assets/equip_image/');
define('HSEURL', 'http://localhost/hydroinformatics/webcontrol/assets/hse_image/');

$conn = mysqli_connect('localhost', 'root', '', 'hydroinformatics')
or die('cant connect to database');  


//  $conn = mysqli_connect('localhost', 'ogrrecom_server', '@admin100@', 'ogrrecom_server')
//  or die('cant connect to database');  

function isLoggedIn(){
    if(isset($_SESSION['logged_in'])){
        return true;
    }else{
        return false;
    }
}

