<?php

    include_once("modelos/archivos.php");
    include_once("conexion.php");

    class ControladorArchivos{

        public function subir(){
            if($_POST){
                $archivo = $_FILES["archivo"]["tmp_name"];
            
                if($archivo !== false){
        
                        $binario_nombre_temporal=$_FILES['archivo']['tmp_name'] ;
                        $archivo_binario = addslashes(fread(fopen($binario_nombre_temporal, "rb"), filesize($binario_nombre_temporal)));
                        $archivo_nombre =$_FILES['archivo']['name'];
                        $archivo_peso =$_FILES['archivo']['size'];
                        $archivo_tipo =$_FILES['archivo']['type'];
                        
                        $data=file_get_contents($archivo_binario);
                        $base64 = 'data:application/' . $archivo_tipo. ';base64,' . base64_encode($data);
                        
                        Archivos::subir($base64, $archivo_nombre, $archivo_peso, $archivo_tipo);
                    
                }
            } 
            include_once("vistas/archivos/subir.php");//importando
        
        }
        public function mostrar(){
            //print_r(Empleado::consultar());
            // $archivo_nombre = $_GET['archivo_nombre'];
            $archivos = Archivos::mostrar();

            include_once("vistas/archivos/mostrar.php");

        }
        
        
    }
?>
