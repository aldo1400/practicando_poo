<?php

require_once "Index.php";
$car=new test\Car();
$car->set('model','ferrari');
$car->set('owner','joel');

$owner=$car->get('owner');
$model=$car->get('model');
echo "the owner is".$owner."and th model is :".$model;

 ?>
