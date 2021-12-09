<!doctype html>
<html lang="en">
  <head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS v5.0.2 -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"  integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!-- Bootstrap Icon -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.6.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="css/main.css";

  </head>
  <body>
      
    <nav class="navbar navbar-expand navbar-light bg-light">
        <ul class="nav navbar-nav">
            <li class="nav-item active">
                <a class="nav-link" href="?controlador=paginas&accion=inicio">Home<span class="visually-hidden">(current)</span></a>
            </li>
            <li class="nav-item active">
                <a class="nav-link" href="?controlador=usuarios&accion=inicio">Usuarios<span class="visually-hidden">(current)</span></a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">Imagenes</a>
              <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                <li><a class="dropdown-item" href="?controlador=imagenes&accion=subir">Subir</a></li>
                <li><a class="dropdown-item" href="?controlador=imagenes&accion=mostrar">Descargar</a></li>
              </ul>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">archivos</a>
              <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                <li><a class="dropdown-item" href="?controlador=archivos&accion=subir">Cargar</a></li>
                <li><a class="dropdown-item" href="?controlador=varios&accion=subir">Cargar Varios</a></li>
                <li><a class="dropdown-item" href="?controlador=varios&accion=ver">Ver</a></li>
                <li><a class="dropdown-item" href="?controlador=archivos&accion=mostrar">Descargar</a></li>
              </ul>
            </li>
            <!-- <li class="nav-item active">
                <a class="nav-link" href="#">Playeras<span class="visually-hidden">(current)</span></a>
            </li>
            <li class="nav-item active">
                <a class="nav-link" href="#">Ropa<span class="visually-hidden">(current)</span></a>
            </li>
            <li class="nav-item active">
                <a class="nav-link" href="#">Accesorios<span class="visually-hidden">(current)</span></a>
            </li>
            <li class="nav-item active">
                <a class="nav-link" href="#">Rurus<span class="visually-hidden">(current)</span></a>
            </li> -->
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="bi bi-person"></i></a>
              <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                <li><a class="dropdown-item" href="?controlador=usuarios&accion=iniciar">Iniciar Sesion</a></li>
                <li><a class="dropdown-item" href="?controlador=usuarios&accion=registrar">Registrarse</a></li>
              </ul>
            </li>
            <li class="nav-item active">
                <a class="nav-link" href="#"><i class="bi bi-cart"></i></a>
            </li>
        </ul>
    </nav>


    <?php
        /*
        include_once("controladores/controlador_paginas.php");//importando

        $paginaInicio = new ControladorPaginas();//instanciando la clase
        $paginaInicio->inicio();//accediendo a sus metodos
        */

        include_once("ruteador.php");
        
    ?>


    <!-- Bootstrap JavaScript Libraries -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
  </body>
</html>