<?php

    //Database Credentials
    $hostname = "mysql5045.site4now.net";
    $dbname = "db_a77b2a_homeoro";
    $username = "a77b2a_homeoro";
    $password = "T2112a1406"; 
    
    $conn = new mysqli($hostname, $username, $password, $dbname);

	if ($conn->connect_error) {
	  die("Connection failed: " . $conn->connect_error);
	}