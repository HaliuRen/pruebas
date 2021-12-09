<table class="table">
    <thead>
        <tr>
            <th>ID</th>
            <th>Imaegn</th>
            <th>Tipo Imagen</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach($imagenes as $imagen){ ?>
            <tr>
                <td><?php echo $imagen->id; ?></td>
                <td><?php echo ' <img src="'.$imagen->imagen.'" width="40"/>' ?></td>
                <!-- <td><a title="Descargar Archivo" href="<?php //echo $imagen->imagen; ?>" download="<?php //echo $imagen->imagen; ?>" style="color: blue; font-size:18px;"> <?php //echo $imagen->imagen; ?> </a></td>  -->
                <td><?php echo $imagen->tipo_imagen; ?></td>
                
                <!-- <td><?php //echo $usuario->archivo; ?></td> -->
                <!-- REVISAR -->
                <!-- https://es.stackoverflow.com/questions/71897/d%C3%B3nde-se-guardan-los-archivos-blob-de-phpmyadmin */ -->
                 
                
            </tr>
        <?php } ?>
        <?php 
            var_dump($imagenes);
        ?>
    </tbody>
</table>