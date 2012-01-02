<?php
	global $settings;
    $settings = require( 'settings.php' );
	require_once "models/db.php";
    require_once "models/user.php";
    //$user = getCurrentUser();
    //$redpage = 'register';
	//$redpage='conpost';
	//$redpage='register';
	if( isset( $_GET[ 'redpage' ] ) ){
     $redpage = $_GET[ 'redpage' ];   
    }
	else $redpage='globalblogs';
    /*
    if( $user == false && !in_array( $page, array( 'login', 'register', 'dologin', 'doregister' ) ) ){
        header( 'Location: ./?page=login' );
        exit();
    }
    $whitelist = array( 'posts', 'post', 'dopost', 'docomment', 'login', 'register', 'dologin', 'doregister' );
    if( !in_array( $page, $whitelist ) ){
        die( "Could not find page $page." );
    }*/
 
	require "controllers/{$redpage}.php";

?>