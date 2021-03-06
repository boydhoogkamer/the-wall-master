<?php
require "private/includes/config.php";
require "private/includes/model.php";
require "private/includes/controllers.php";

$CONFIG = require('./private/includes/config.php');

if ( ! isset( $_GET['page'] ) ) {
	header( 'Status: 404' );
	echo '404 Page Not Found';
	exit;
}

switch ( $_GET['page'] ) {
	case '':
        feed();
        break;
	case 'feed':
		feed();
		break;
	case 'info':
		info();
		break;
	case 'profile':
		profile();
		break;
	case 'editprofile':
		editProfile();
		break;
	case 'upload':
		upload();
		break;
    case 'login':
		login();
		break;
    case 'checkpassword':
		checkpassword();
		break;
	case 'createaccount':
		createaccount();
		break;
        
}
