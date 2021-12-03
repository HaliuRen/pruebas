<div class="card">
    <div class="card-header">
        Registrarme
    </div>
    <div class="card-body">
        <form action="" method="POST" enctype="multipart/form-data">
            <div class="mb-3">
              <label for="nombreUsuario" class="form-label">Nombre de usuario:</label>
              <input type="text"
                class="form-control" name="nombreUsuario" id="nombreUsuario" aria-describedby="helpId" placeholder="Nombre de usuario" required>
            </div>

            <div class="mb-3">
              <label for="correo" class="form-label">Email:</label>
              <input type="email" class="form-control" name="correo" id="correo" aria-describedby="emailHelpId" placeholder="ejmplo@correo.com" required>
            </div>

            <div class="mb-3">
              <label for="contraseña" class="form-label">Contraseña:</label>
              <input type="password" class="form-control" name="contraseña" id="contraseña" aria-describedby="emailHelpId" placeholder="" required>
            </div>

            <div class="mb-3">
              <label for="img" class="form-label">Foto de Perfil</label>
              <input type="file" class="form-control" name="img" id="img" required>
            </div>

            <button type="submit" class="btn btn-success">Registrar</button>
        </form>
    </div>
</div>