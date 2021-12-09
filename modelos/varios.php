<?php

    class Varios{
        
        public $id;
        public $contenido;
        public $nombre;
        public $imagen;
       

        public function __construct($id,$contenido,$nombre,$imagen){
            $this->id = $id;
            $this->contenido = $contenido;
            $this->nombre = $nombre;
            $this->imagen = $imagen;
        }

        //subir
        public static function subir($contenido, $nombre, $imagen){
            $conexionBD = BD::crearInstancia();

            $sql = $conexionBD->prepare("INSERT INTO imagenes(contenido, nombre, imagen) VALUES(?,?,?)");
            $sql->execute(array($contenido, $nombre, $imagen));
        }

        //Mostrar
        public static function ver(){
            $listaImagenes = [];
            $conexionBD = BD::crearInstancia();
            $sql = $conexionBD->query("SELECT * FROM imagenes");
    
            foreach($sql->fetchAll() as $imagenes){
                $listaImagenes[] = new Varios($imagenes['id'],$imagenes['contenido'], $imagenes['nombre'], $imagenes['imagen']);
            }
            return $listaImagenes;
        }

    }

?>