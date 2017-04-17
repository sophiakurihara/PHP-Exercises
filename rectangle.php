<?php

class Rectangle {
	public $height;
	public $width;

	public function __construct($height, $width) {
		$this->height = $height;
		$this->width = $width;
	}

	public function area() {
		return ($this->height * $this->width) . PHP_EOL;
	}

	public function perimeter() {
		return (($this->width * 2) + ($this->height * 2)) . PHP_EOL;
	}
}

// $rectangle1 = new Rectangle(10, 5);
// echo $rectangle1->area();

// $rectangle2 = new Rectangle(15, 25.5);
// echo $rectangle2->area();