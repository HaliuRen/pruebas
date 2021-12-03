<table class="table">
    <thead>
        <tr>
            <th>ID</th>
            <th>Nombre</th>
            <th>Correo</th>
            <th>Contraseña</th>
            <th>Img</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach($usuarios as $usuario){ ?>
            <tr>
                <td><?php echo $usuario->id; ?></td>
                <td><?php echo $usuario->nombreUsuario; ?></td>
                <td><?php echo $usuario->correo; ?></td>
                <td><?php echo $usuario->contraseña; ?></td>
                <td><?php echo $usuario->img; ?></td>
                
            </tr>
        <?php } ?>
    </tbody>
</table>