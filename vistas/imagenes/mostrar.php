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
                <td><?php echo $imagen->tipo_imagen; ?></td>
                
                <!-- <td><?php //echo $usuario->archivo; ?></td> -->
                <!-- <td><a title="Descargar Archivo" href="<?php //echo $imagen[$i]; ?>" download="<?php //echo $imagen[$i]; ?>" style="color: blue; font-size:18px;"> <?php //echo $imagen->imagen; ?> </a></td> -->
                 
                
            </tr>
        <?php } ?>
    </tbody>
</table>