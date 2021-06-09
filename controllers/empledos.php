<?php
require '../fw/fw.php';
require '../models/empleados.php';
/*require '../views/ListadoEmpleados.php';*/
 
$m=new empleados();
$m->getEmpleado();
 var_dump($m);