<?php
require_once 'rectangle.php';

class Square extends Rectangle{

	public function perimeter() {
		return (($this->width * 2) + ($this->height * 2)) . PHP_EOL;
	}
}

$square1 = new Square(5,5);
echo $square1->area();
echo $square1->perimeter();