<?php

$documento = isset($_POST['documento']) ? $_POST['documento'] : 'Valor por defecto del documento';
$nombre = isset($_POST['nombre']) ? $_POST['nombre'] : 'Valor por defecto del nombre';
$correo = isset($_POST['correo']) ? $_POST['correo'] : 'Valor por defecto del correo';
$password = isset($_POST['password']) ? $_POST['password'] : 'Valor por defecto del password';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/estilos.css">
    <title>Profile</title>
</head>
<body>
<main>
        <header class="w-100  header-prinscipal">
            <div class="GAVIGOL">
                <img src="../img/logol.png" alt="IMAGEN DE LOGO" style="max-width: 200px; height: auto;">
            </div> 
            <nav>
                <div class="d-flex justify-content-end">
                    <a href="#" class="btn btn-secondary menu-button" style="margin-right: 10px;">Administrador </a>
                    <div class="col-auto">
                        <img src="../img/GGGG.png" alt="Imagen" style="max-width: 50px; height: auto;">
                    </div>
                </div>
            </nav>
        </header>
    </main>
    <div class="containervh">
    <div class="main-body">
    
          <!-- /Breadcrumb -->
          <div class="row gutters-sm">
            <div class="col-md-4 mb-3">
              <div class="card">
                <div class="card-body">
                  <div class="d-flex flex-column align-items-center text-center">
                    <img src="https://bootdey.com/img/Content/avatar/avatar7.png" alt="Admin" class="rounded-circle" width="150">
                    <div class="mt-3">
                      <h4>John Doe</h4>
                      <p class="text-secondary mb-1">Full Stack Developer</p>
                      <p class="text-muted font-size-sm">Bay Area, San Francisco, CA</p>
                      <button class="btn btn-primary">Follow</button>
                      <button class="btn btn-outline-primary">Message</button>
                    </div>
                  </div>
                </div>
              </div>
              <div class="card mt-3">
              </div>
            </div>
            <div class="col-md-8">
              <div class="card mb-3">
                <div class="card-body">
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-1">Documento</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                      <?php echo htmlspecialchars($documento); ?>
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Nombre</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                      <?php echo htmlspecialchars($nombre); ?>
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Correo</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                      <?php echo htmlspecialchars($correo); ?>
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Contraseña</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                      <?php echo htmlspecialchars($password); ?>
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-12">
                      <a class="btn btn-info" target="__blank" href="https://www.bootdey.com/snippets/view/profile-edit-data-and-skills">Editar Datos</a>
                    </div>
                  </div>
                </div>
              </div>

             
          </div>

        </div>
    </div>
</body>
</html>
