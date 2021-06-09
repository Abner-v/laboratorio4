<?php

// controllers/listaempleados.php

require '../fw/fw.php';
require '../models/piezas.php';
require '../views/listadodepiezas.php';

$e = new piezas();
$todas = $e->getTodas();



$v = new listadodepiezas();
$v->piezas = $todas;
$v->render();