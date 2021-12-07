<?php

    class Imagenes{
        
        public $id;
        public $imagen;
        public $tipo_imagen;
        

        public function __construct($id,$imagen,$tipo_imagen){
            $this->id = $id;
            $this->imagen = $imagen;
            $this->tipo_imagen = $tipo_imagen;
        }

        //subir
        public static function subir($imagen, $tipo_imagen){
            $conexionBD = BD::crearInstancia();

            $sql = $conexionBD->prepare("INSERT INTO imagenes(imagen,tipo_imagen) VALUES(?,?)");
            $sql->execute(array($imagen, $tipo_imagen));
        }

        //Mostrar
        public static function mostrar(){
            $listaImagenes = [];
            $conexionBD = BD::crearInstancia();
            $sql = $conexionBD->query("SELECT * FROM imagenes");
    
            foreach($sql->fetchAll() as $imagenes){
                $listaImagenes[] = new Imagenes($imagenes['id'],$imagenes['imagen'], $imagenes['tipo_imagen']);
            }
            return $listaImagenes;
        }

    }

?>