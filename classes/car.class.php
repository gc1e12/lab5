<?php

// car class for part 1

class car{

	public $id;
	public $manufacturerId;
	public $colourId;
	public $model;
	public $description;
	public $price;
	public $regNumber;
	public $regDate;


	/* 
	 * This is a contsructor used to create a new car object
	 *
	 *@param $id, $manufacturerId, $colourId, $model, $description, $price,$regNumber,$regDate
	 *@return
	 *
	*/

	public function __construct($id, $manufacturerId, $colourId, $model, $description, $price,$regNumber,$regDate){

		this->$id = $id;
		this->$manufacturerId = $manufacturerId;
		this->$colourId = $colourId;
		this->$model = $model;
		this->$description = $description;
		this->$price = $price;
		this->$regNumber = $regNumber;
		this->$regDate = $regDate;
	}

}