<table class="table">
    <thead>
        <tr>
            <th>ID</th>
            <th>Archivo</th>
            <th>Nombre Archivo</th>
            <th>Peso Archivo</th>
            <th>Tipo Archivo</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach($archivos as $archivo){ ?>
            <tr>
                <td><?php echo $archivo->id; ?></td>
                <td><?php echo $archivo->archivo_binario ?></td>
                <!-- <td><?php //echo ' <img src="'.$archivo->archivo_binario.'" width="40"/>' ?></td> -->
                <td><?php echo $archivo->archivo_nombre; ?></td>
                <td><?php echo $archivo->archivo_peso; ?></td>
                <td><?php echo $archivo->archivo_tipo; ?></td>
                
                <!-- <td><?php //echo $usuario->archivo; ?></td> -->
                <!-- <td><a title="Descargar Archivo" href="<?php //echo $imagen[$i]; ?>" download="<?php //echo $imagen[$i]; ?>" style="color: blue; font-size:18px;"> <?php //echo $imagen->imagen; ?> </a></td>  -->
                 
                
            </tr>
        <?php } ?>
    </tbody>
</table>