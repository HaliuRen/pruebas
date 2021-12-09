<?php

    class Archivos{
        
        public $id;
        public $archivo_binario;
        public $archivo_nombre;
        public $archivo_peso;
        public $archivo_tipo;
        

        public function __construct($id,$archivo_binario,$archivo_nombre,$archivo_peso,$archivo_tipo){
            $this->id = $id;
            $this->archivo_binario = $archivo_binario;
            $this->archivo_nombre = $archivo_nombre;
            $this->archivo_peso = $archivo_peso;
            $this->archivo_tipo = $archivo_tipo;
        }

        //subir
        public static function subir($archivo_binario,$archivo_nombre, $archivo_peso, $archivo_tipo){
            $conexionBD = BD::crearInstancia();

            $sql = $conexionBD->prepare("INSERT INTO archivos(archivo_binario, archivo_nombre, archivo_peso, archivo_tipo) VALUES(?,?,?,?)");
            $sql->execute(array($archivo_binario, $archivo_nombre, $archivo_peso, $archivo_tipo));
        }

        //Mostrar
        public static function mostrar(){
            $listaArchivos = [];
            $conexionBD = BD::crearInstancia();
            $sql = $conexionBD->query("SELECT * FROM archivos");
    
            foreach($sql->fetchAll() as $archivos){
                $listaArchivos[] = new Archivos($archivos['id'],$archivos['archivo_binario'], $archivos['archivo_nombre'], $archivos['archivo_peso'], $archivos['archivo_tipo']);
            }
            return $listaArchivos;
        }

    }

?>