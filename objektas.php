<?php
class Car {
	public $name = "Fiat";
	public $model = "500";
	public $weight = "850kg";
	public $color = "white";
}

$obj = new Car();
echo json_encode($obj);
?>