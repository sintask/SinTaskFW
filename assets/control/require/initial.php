<?php

	/* Inisialisasi & Core
	 * List :
	 * 			-> $__SEGMEN__ 			Menghasilkan pecahan URL (tanpa tanda ? untuk parameter get).
	 * 			-> $__SEGMEN_NORMAL__ 	Menghasilkan pecahan URL sesuai yang asli. 
	 */
	$__SEGMEN__ 		= siteSegmen("pure");
	$__SEGMEN_NORMAL__ 	= siteSegmen("normal");
	$__SEGMEN_PURE__	= siteSegmen("nofollow");
	
	$__FILE_EXTENSION__ = ".php";
	$__TOKENIZING__		= $_SESSION['globalSecureToken'];

	/*CHANGEABLE*/
	$__VERSION__ 		= "SinTaskFW v1.0.2";
	$__CODENAME__ 		= "SinTask_Dev_Release";
	$__VERNAME__		= "1.0.2";
	
	$__IP_USER__      	= $_SERVER['REMOTE_ADDR'];

	/* Check Kondisi Login/Tidak */
	/* Please Change this $_SESSION if you use another type of $_SESSION var name, etc */
	$__ID_LOGIN__ 		= $__MY_SESSION__; 
	if( $__MY_SESSION__ != "" && $__MY_SESSION__ != null && !ctype_space($__MY_SESSION__) ){
		$__LOGIN_STATUS__ 	= true;
		$__ID_LOGIN__ 		= $__MY_SESSION__; 
	}

	/* XHR Status */
	$__XHR_STATUS__ 	= false;
	$__XHR_VALUE__ 		= "";
	if( !empty($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest' ){
		$__XHR_STATUS__ 	= true;
		$__XHR_VALUE__ 		= strtolower($_SERVER['HTTP_X_REQUESTED_WITH']);
	}

	/* Init 404 Detection */
	$__404_DETECT__ 	= $_SESSION['404_DETECT'];
	if($__404_DETECT__ != true) {
		$__404_DETECT__ = false;
	}

?>