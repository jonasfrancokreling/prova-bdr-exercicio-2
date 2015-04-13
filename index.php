<?php

	$link = "http://www.google.com";
	
	function redirect(){
		header("Location: ".$link);
		die();
	}
	
	if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] === true){
		redirect();
	}elseif(isset($_COOKIE['Loggedin']) && $_COOKIE['Loggedin'] === true){
		redirect();
	}
	
?>