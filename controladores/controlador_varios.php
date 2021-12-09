<?php

    include_once("modelos/varios.php");
    include_once("conexion.php");

    class ControladorVarios{

        public function subir(){

            if(isset($_POST['submit'])) {

                // Contamos la cantidad de imagenes
                $countfiles = count($_FILES['archivos']['name']);
            
                // Generamos el bucle de todos los archivos
                for($i = 0; $i < $countfiles; $i++) {
            
                    // Extraemos en variable el nombre de archivo
                    $filename = $_FILES['archivos']['name'][$i];
                    // Obtenemos la extension del archivo
                    $file_extension = pathinfo($filename, PATHINFO_EXTENSION);
                        
                    $file_extension = strtolower($file_extension);
                
                    // Validamos la extensión de la imagen
                    $valid_extension = array("png","jpeg","jpg", "pdf");
                
                    if(in_array($file_extension, $valid_extension)) {
            
                        $imagen_temporal = $_FILES['archivos']['tmp_name'][$i];

                        $tipo = $_FILES['archivos']['type'][$i];
                    
                    
                        $data=file_get_contents($imagen_temporal);
                        
                        $base64 = 'data:image/' . $tipo. ';base64,' . base64_encode($data);
                        
                        Varios::subir($base64,$tipo,$imagen_temporal);
                    }
                }
            
            }
            
                 
            include_once("vistas/archivos/varios.php");//importando
        
        }
        public function ver(){
            //print_r(Empleado::consultar());
            // $archivo_nombre = $_GET['archivo_nombre'];
            $imagenes = Varios::ver();

            include_once("vistas/archivos/ver.php");

        }
        
        
    }
?>
