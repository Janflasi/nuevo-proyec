<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/estilos.css">
    <title>Register</title>
</head>
<body>
     <main>
        <header class="w-100  header-principalll">
            <div class="LOGOL">
                <img src="../img/logol.png" alt="IMAGEN DE LOGO" style="max-width: 200px; height: auto;">
            </div> 
        </header>
    </main>
     <div class="containeerr d-flex justify-content-center align-items-center min-vh-100">
       <div class="row border rounded-5 p-3 bg-white shadow box-area">
       <div class="col-md-6 rounded-4 d-flex justify-content-center align-items-center flex-column left-box" style="background: #FF0000;">
           <div class="featured-image mb-3">
          <video controls autoplay class="img-fluid" style="width: auto;">
            <source src="mp3/trailer.mp4" type="video/mp4">
             Tu navegador no admite el elemento de video.
</video>
           </div>
           <p class="text-white fs-2" style="font-family: 'Courier New', Courier, monospace; font-weight: 600;"></p>
           <small class="text-white text-wrap text-center" style="width: 17rem;font-family: 'Courier New', Courier, monospace;"></small>
       </div>
       <div class="col-md-6 right-box">
          <div class="row align-items-center">
                <div class="header-text mb-4">
                     <h2>Registrarte</h2>
                     <p>Es rápido y fácil.</p>
                </div>
<form action="../Controlador/C_registrar_usuario.php" method="POST">
<input type="hidden" name="action" value="register">
    <div class="input-group mb-3">
        <input type="number" class="form-control form-control-lg bg-light fs-6" name="documento" placeholder="N° Documento" required>
    </div>
    <div class="input-group mb-3">
        <input type="text" class="form-control form-control-lg bg-light fs-6" name="nombre" placeholder="Nombre" required>
    </div>
    <div class="input-group mb-3">
        <input type="email" class="form-control form-control-lg bg-light fs-6" name="correo" placeholder="Correo" required>
    </div>
    <div class="input-group mb-1">
        <input type="password" class="form-control form-control-lg bg-light fs-6" name="password" placeholder="password" required>
    </div>
    <div class="input-group mb-2 d-flex ">
    <div class="form-check">
        <input type="checkbox" class="form-check-input" id="formCheck">
        <label for="formCheck" class="form-check-label text-secondary custom-label">
            <small><a href="terminos.html">Acepto los Términos y Condiciones</a></small>
        </label>
    </div>
</div>
    <!-- Resto del formulario -->
    <button type="submit" class="btn btn-lg btn-danger w-100 fs-6" style="background-color: #FF0000;">Registrarse</button>
</form>
    </div>
</body>
</html>