<div class="card">
    <div class="card-header">
        Subir Archivos
    </div>
    <div class="card-body">
        <form action="" method="POST" enctype="multipart/form-data">
            <div class="mb-3">
              <label for="archivo" class="form-label">ACTA DE NACIMIENTO:</label>
              <input type="file" class="form-control" name="archivo[]" id="acta" required size="30">
            </div>
            <div class="mb-3">
              <label for="archivo" class="form-label">RFC:</label>
              <input type="file" class="form-control" name="archivo[]" id="rfc" required size="30">
            </div>
            <!-- <div class="mb-3">
              <label for="archivo" class="form-label">CURP:</label>
              <input type="file" class="form-control" name="archivo" id="curp" required size="30">
            </div>
            <div class="mb-3">
              <label for="archivo" class="form-label">INE:</label>
              <input type="file" class="form-control" name="archivo" id="ine" required size="30">
            </div>
            <div class="mb-3">
              <label for="archivo" class="form-label">CONSTANCIA DOMICILIARIA:</label>
              <input type="file" class="form-control" name="archivo" id="constancia" required size="30">
            </div>
            <div class="mb-3">
              <label for="archivo" class="form-label">CERTIFICADO DE ESTUDIOS:</label>
              <input type="file" class="form-control" name="archivo" id="certificado" required size="30">
            </div>
            <div class="mb-3">
              <label for="archivo" class="form-label">TITULO:</label>
              <input type="file" class="form-control" name="archivo" id="titulo" required size="30">
            </div>
            <div class="mb-3">
              <label for="archivo" class="form-label">CEDULA PROFESIONAL:</label>
              <input type="file" class="form-control" name="archivo" id="cedula" required size="30">
            </div> -->
            <button type="submit" class="btn btn-success" name="subir" value="Subir archivo"></button>
        </form>
    </div>
</div>