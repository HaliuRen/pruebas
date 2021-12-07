<table class="table">
    <thead>
        <tr>
            <th>ID</th>
            <th>Nombre</th>
            <th>Correo</th>
            <th>Contraseña</th>
            <th>Archivo</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach($usuarios as $usuario){ ?>
            <tr>
                <td><?php echo $usuario->id; ?></td>
                <td><?php echo $usuario->nombreUsuario; ?></td>
                <td><?php echo $usuario->correo; ?></td>
                <td><?php echo $usuario->contraseña; ?></td>
                <!-- <td><?php //echo $usuario->archivo; ?></td> -->
                <td><a title="Descargar Archivo" href="<?php echo $archivo[$i]; ?>" download="<?php echo $archivo[$i]; ?>" style="color: blue; font-size:18px;"> <?php echo $usuario->archivo; ?> </a></td>
                <!-- <td><img src=' " '. <?php //echo $usuario->img; ?> . ' " ' alt='Img blob desde MySQL' width="200" /></td>   -->
                
            </tr>
        <?php } ?>
    </tbody>
</table>