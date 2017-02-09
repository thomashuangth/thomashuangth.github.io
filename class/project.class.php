<?php

class Project {
	public $title;
	public $img;
	public $link;
	public $private = false;

	public function __construct($title, $img, $link, $private = false){
		$this->title 		= $title;
		$this->img	 		= $img;
		$this->link 		= $link;
		$this->private 	= $private;
	}
}