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
	case 'upload':
		upload();
		break;
    //     break;
    // case 'gametips':
	// 	gametips();
    //     break;
    // case 'about':
	// 	about();
    //     break;
    // case 'contact':
	// 	contact();
    //     break;
        
}
