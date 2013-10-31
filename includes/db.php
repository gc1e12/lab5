<?php

// include file for part 1


	// Instantiate a new MySQLi instance and connect
	$db =  new mysqli ('comp2203.ecs.soton.ac.uk', 'comp2203-lab5' , 'WL2133r1lM7lzp1706Ne', 'comp2203-lab5');

	//check if the connection succeeded
	if($db->connect_error){
		die("could not connect to MYSQL");
	}