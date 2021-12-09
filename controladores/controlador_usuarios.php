<?php

    include_once("modelos/usuario.php");
    include_once("conexion.php");

    class ControladorUsuarios{

        public function registrar(){

            if($_POST){
                print_r($_POST);
                $nombreUsuario = $_POST['nombreUsuario'];
                $correo = $_POST['correo'];
                $contraseña = $_POST['contraseña'];
                $archivo = $_FILES["archivo"]["tmp_name"];
                if($archivo !== false){
                    $fileTmpPath = $_FILES['archivo']['tmp_name'];
                    $fileName = $_FILES['archivo']['name'];
                    $fileSize = $_FILES['archivo']['size'];
                    $fileType = $_FILES['archivo']['type'];
                    $fileNameCmps = explode(".", $fileName);
                    $fileExtension = strtolower(end($fileNameCmps));
                    
                    //$newFileName = $fileName;

                    $allowedfileExtensions = array('jpg', 'gif', 'png', 'zip', 'txt', 'xls', 'doc', 'pdf');

                    if (in_array($fileExtension, $allowedfileExtensions)){

                        $imagen_temporal= $fileTmpPath;

                        $tipo = $fileType;
                        
                        
                        $data=file_get_contents($imagen_temporal);
                        
                        $base64 = 'data:image/' . $tipo. ';base64,' . base64_encode($data);
                        
                        // $resultado = Imagenes::subir($base64,$tipo); 
                        $resultado = Usuario::registrar($nombreUsuario,$correo,$contraseña,$base64);  
                        // Usuario::registrar($nombreUsuario,$correo,$contraseña,$newFileName);  
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
                        echo "Formato de archivo no permitido o excede el tamaño límite de Kbytes.";
                    }
                }
                // $revisar = getimagesize($_FILES["img"]["tmp_name"]);
                // if($revisar !== false){
                //     $img = $_FILES['img']['tmp_name'];
                //     $imgContenido = addslashes(file_get_contents($img));
                // }
                
                
            }

            include_once("vistas/usuarios/registrar.php");//importando
        }
        
        public function iniciar(){
            
            //$usser = Usuario::iniciar($_REQUEST['nombreUsuario'], $_REQUEST['contraseña']);
            //print_r($usser);
            session_start();

            if(isset($_GET['cerrar_sesion'])){
                session_unset();

                session_destroy();
            }

            if(isset($_SESSION['rol'])){
                switch($_SESSION['rol']){
                    case 1:
                        header('location: ./vistas/admin/inicio.php');
                    break;

                    case 2:
                        header("Location:./?controlador=paginas&accion=inicio");
                        break;

                    default;
                }
            }

           
           /*if(isset($_REQUEST['nombreUsuario']) && isset($_REQUEST['contraseña'])){
                $usser = Usuario::iniciar($_REQUEST['nombreUsuario'], $_REQUEST['contraseña']);
                //print_r($usser);
                //print_r($usser['id_rol']);
                
                if($usser == 'error'){
                    header("Location:./?controlador=paginas&accion=error");//redireccionando
                    
                }
                else{
                    $usser['id_rol'];
                    $_SESSION['rol'] = $usser;
                    
                    switch($_SESSION['rol']){
                        case 1:
                            header("Location:./?controlador=paginas&accion=error");
                            //header("location:./vistas/admin/inicio.php");
                        break;
    
                        case 2:
                            header("Location:./?controlador=paginas&accion=inicio");
                            break;
    
                        default;
                    }
                    
                    //header("Location:./?controlador=paginas&accion=inicio");//redireccionando
                }
            }*/
            
            
            if(isset($_REQUEST['nombreUsuario']) && isset($_REQUEST['contraseña'])){
                $usser = Usuario::iniciar($_REQUEST['nombreUsuario'], $_REQUEST['contraseña']);
                //print_r($usser);
                //print_r($usser['id_rol']);
                
                if($usser == 'error'){
                    header("Location:./?controlador=paginas&accion=error");//redireccionando
                    
                }
                else if($usser['id_rol'] == 1){
                    header("Location:./vistas/admin/inicio.php");

                }else{
                    //header("Location:./?controlador=paginas&accion=inicio");//redireccionando
                    
                    header("Location:./?controlador=paginas&accion=inicio");//redireccionando
                    
                }
                
            }
            
            
            include_once("vistas/usuarios/iniciar.php");//importando
        }

        public function inicio(){
            //print_r(Empleado::consultar());
            $usuarios = Usuario::consultar();
            include_once("vistas/usuarios/usuarios.php");
        }
        
    }


?>