<?php

    class Usuario{
        
        public $id;
        public $nombreUsuario;
        public $correo;
        public $contraseña;
        public $archivo;

        public function __construct($id,$nombreUsuario,$correo,$contraseña,$archivo){
            $this->id = $id;
            $this->nombreUsuario = $nombreUsuario;
            $this->correo = $correo;
            $this->contraseña = $contraseña;
            $this->archivo = $archivo;
        }

        //registrar
        public static function registrar($nombreUsuario, $correo, $contraseña,$archivo){
            $conexionBD = BD::crearInstancia();

            $sql = $conexionBD->prepare("INSERT INTO usuarios(nombreUsuario,correo,contraseña,archivo) VALUES(?,?,?,?)");
            $sql->execute(array($nombreUsuario, $correo, $contraseña,$archivo));
        }
     
        //iniciar sesion
        public static function iniciar($nombreUsuario,$contraseña){
            
            $conexionBD = BD::crearInstancia();

            $sql = $conexionBD->prepare("SELECT * FROM usuarios WHERE nombreUsuario=? AND contraseña=?");
            $sql->execute(array($nombreUsuario, $contraseña));
            $usuario=$sql->fetch();
            //print_r($usuario);
           
            if($usuario != ""){
                return $usuario;
            }else{
               return "error";
            }









            
            /*$sql->bindParam("nombreUsuario", $nombreUsuario, BD::PARAM_STR);
            $sql->execute();*/

            //$result = $sql->fetch(BD::FETCH_ASSOC);

            /*if (!$result) {
                echo '<p class="error">Username password combination is wrong!</p>';
            } else {
                if (password_verify($contraseña, $result['contraseña'])) {
                    $_SESSION['id'] = $result['id'];
                    header("Location:./?controlador=paginas&accion=inicio");//redireccionando
                    exit;
                } else {
                    echo "Error";
                }
            }*/

            //$sql->execute(array($nombreUsuario));
            //$usuario=$sql->fetch();
        }

        //Consultar
        public static function consultar(){
            $listaUsuarios = [];
            $conexionBD = BD::crearInstancia();
            $sql = $conexionBD->query("SELECT * FROM usuarios");
    
            foreach($sql->fetchAll() as $usuario){
                $listaUsuarios[] = new Usuario($usuario['id'], $usuario['nombreUsuario'], $usuario['correo'],$usuario['contraseña'],$usuario['archivo']);
    
            }
            return $listaUsuarios;
        }

    }

?>