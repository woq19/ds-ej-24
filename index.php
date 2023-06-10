<?php

require_once 'modelo/auto.php';

$a = new auto();

$a->setMarca('Ford');
$a->setModelo('Fiesta');
$a->setVersion('SE');
$a->setAnio(2018);

$a->MostrarDatos();