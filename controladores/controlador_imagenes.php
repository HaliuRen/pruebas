<?php

    include_once("modelos/imagenes.php");
    include_once("conexion.php");

    class ControladorImagenes{

        public function subir(){
            if (!isset($_FILES["imagen"]) || $_FILES["imagen"]["error"] > 0) {
                echo "Ha ocurrido un error";
            }
            else{
                $permitidos = array("pdf","jpg");
                $limite_kb = 16384;

                if (in_array($_FILES['imagen']['type'], $permitidos) && $_FILES['imagen']['size'] <= $limite_kb * 1024) {
                    $imagen_temporal = $_FILES['imagen']['tmp_name'];

                    $tipo = $_FILES['imagen']['type'];
                    
                    
                    $data=file_get_contents($imagen_temporal);
                    
                    $base64 = 'data:image/' . $tipo. ';base64,' . base64_encode($data);
                    
                    $resultado = Imagenes::subir($base64,$tipo); 

                    if ($resultado != '')
                    {
                        echo "El archivo ha sido copiado exitosamente.";
                    }
                    else
                    {
                        echo "Ocurrió algun error al copiar el archivo.";
                    }
                }
                else
                {
                    echo "Formato de archivo no permitido o excede el tamaño límite de $limite_kb Kbytes.";
                }
            }



            //Imagenes::subir($imagen,$tipo_imagen);  
            include_once("vistas/imagenes/subir.php");//importando
        }
        

        public function mostrar(){
            //print_r(Empleado::consultar());
            $imagenes = Imagenes::mostrar();
            include_once("vistas/imagenes/mostrar.php");
        }
        
    }
;

?>