<table class="table">
    <thead>
        <tr>
            <th>ID</th>
            <th>Contenido</th>
            <th>Nombre</th>
            <th>Imagen</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach($imagenes as $imagen){ ?>
            <tr>
                <td><?php echo $imagen->id; ?></td>
                <!-- <td><?php //echo $imagen->imagen_binario ?></td> -->

               
                <td><?php echo ' <a href=" '.$imagen->contenido.'">Descargar</a>' ?></td>
                <td><?php echo $imagen->nombre; ?></td>
                <td><?php echo $imagen->imagen; ?></td>
                
                <!-- <td><?php //echo $usuario->archivo; ?></td> -->
                <!-- <td><a title="Descargar Archivo" href="<?php //echo $imagen[$i]; ?>" download="<?php //echo $imagen[$i]; ?>" style="color: blue; font-size:18px;"> <?php //echo $imagen->imagen; ?> </a></td>  -->
                 
                
            </tr>
        <?php } ?>
    </tbody>
</table>
