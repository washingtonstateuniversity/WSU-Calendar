<?php
/*
Template Name: Calendar View
*/
$host  = $_SERVER['HTTP_HOST'];
$uri  = rtrim(dirname($_SERVER['PHP_SELF']), '/\\');
$extra = 'events/';
header("HTTP/1.1 301 Moved Permanently"); // for SEO
header("Location: http://$host$uri/$extra");
exit;

?>