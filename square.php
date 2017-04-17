<?php
require_once 'rectangle.php';

class Square extends Rectangle{
	public $squareHeight;

	public function __construct($height, $width, $squareHeight) {
		parent::__construct($height, $width);
		$this->width = $squareHeight;
		$this->height = $squareHeight;
	}
	public function perimeter() {
		return (($this->width * 2) + ($this->height * 2)) . PHP_EOL;
	}
	public function area() {
		return ($this->height * $this->width) . PHP_EOL;
	}
}

// $square1 = new Square(5, 10, 10);
// echo $square1->area();
// echo $square1->perimeter();