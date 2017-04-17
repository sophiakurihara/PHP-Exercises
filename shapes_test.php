<?php

require_once 'rectangle.php';
require_once 'square.php';

// using shapes_test file to test methods on both rectangles and squares

$rectangle1 = new Rectangle(10, 5);
echo $rectangle1->area();
echo $rectangle1->perimeter();

$rectangle2 = new Rectangle(15, 25.5);
echo $rectangle2->area();

$square1 = new Square(5, 10, 10);
echo $square1->area();
echo $square1->perimeter();