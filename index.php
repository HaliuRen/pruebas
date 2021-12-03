<?php

$controlador = "paginas";
$accion = "inicio";

//validando rutas
if(isset($_GET['controlador']) && isset($_GET['accion'])){//validando que las variables esten definidas y no sean null
    if($_GET['controlador'] != "" && $_GET['accion'] != ""){//si controlador y accion son diferente de vacio, entonces se asignan a las variables y asi se forma la ruta
        $controlador = $_GET['controlador'];
        $accion = $_GET['accion'];
    }
}


require_once ("vistas/templates.php");//importando

?>
