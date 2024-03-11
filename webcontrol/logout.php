<?php  
require 'server/connection.php';
session_destroy();
header('location:index');
