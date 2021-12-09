<div class="card">
    <div class="card-header">
        Subir Archivos
    </div>
    <div class="card-body">
        <form action="" method="POST" enctype="multipart/form-data">
            <div class="mb-3">
              <label for="archivos" class="form-label">Varios Archivos</label>
              <input type="file" class="form-control" name="archivos[]" multiple required>
            </div>

            <button type="submit" class="btn btn-success" name="subir" value="Cargar Imagen">Cargar Archivos</button>
        </form>
    </div>
</div>