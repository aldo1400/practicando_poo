<?php

require_once "Index.php";
$car=new test\Car('alex');
$car2=new test\Car('joaquin');

// $car->set('model','ferrari');
// $car->set('owner','joel');

$owner=$car->get('owner');
$model=$car2->get('owner');
echo "the owner is".$owner."and th model is :".$model;

 ?>
