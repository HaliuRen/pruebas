<?php

    include_once("controladores/controlador_".$controlador.".php");//importando automaticamente
    $objControlador = "Controlador" . ucfirst($controlador); //asginando las clases de forma automatica
    $controlador = new $objControlador;//instanciando clases
    $controlador->$accion();//accediendo a los metodos

?>