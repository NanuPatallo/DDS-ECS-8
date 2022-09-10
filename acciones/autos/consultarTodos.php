<?php

header('Content-Type: application/json');

require_once '../../modelo/auto.php';
require_once 'responses/consultarTodosResponse.php';
require_once '../../configuracion/database.php';



$res = new ConsultarTodosResponses();
$res->ListAutos = Auto::BuscarTodos();

echo json_encode($res);
