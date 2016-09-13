<?php

$peso = $_POST['peso'];
$altura = $_POST['altura'];
$imc = array('resultado'=>'');
$imc['resultado'] = $peso / ($altura * $altura);
echo json_encode($imc);

