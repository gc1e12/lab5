<?php

// include file for part 1

	$db =  new mysqli ('comp2203.ecs.soton.ac.uk', 'comp2203-lab5' , 'WL2133r1M7lzp1706Ne', 'comp2203-lab5');


	if($mysqli->connect_error){
		die("could not connect to MYSQL");
	}