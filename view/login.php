<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/estilos.css">
    <title>login</title>
  

</head>
<body>
    <main>
        <header class="w-100  header-principal">
            <div class="logo">
                <img src="../img/logol.png" alt="IMAGEN DE LOGO" style="max-width: 200px; height: auto;">
            </div> 
            <nav>
                <div class="d-flex justify-content-end">
                    <a href="#" class="btn btn-secondary menu-button" style="margin-right: 10px;">Registrarse</a>
                    <div class="col-auto">
        <img src="../img/pp.png" alt="Imagen" style="max-width: 50px; height: auto;">
    </div>
                    <a href="#" class="btn btn-secondary menu-button" style="margin-right: 10px;">Iniciar Sesión</a>
                    <div class="col-auto">
        <img src="../img/ñl.webp" alt="Imagen" style="max-width: 50px; height: auto;">
    </div>
                </div>
            </nav>
        </header>
    </main>
    <div class="container d-flex justify-content-center align-items-center flex-grow-1" >
        <div class="row border rounded-3 p-2 bg-white shadow box-area" >
            <div class="col-md-6 rounded-3 d-flex justify-content-center align-items-center flex-column left-box">
                <div class="featured-image mb-3">
                    <video controls autoplay class="img-fluid" style="max-width: 100%;">
                        <source src="mp3/trailer.mp4" type="video/mp4">
                        Tu navegador no admite el elemento de video.
                    </video>
                </div>
                <p class="text-dark fs-4" style="font-family: 'Courier New', Courier, monospace; font-weight: 600;"></p>
                <small class="text-dark text-wrap text-center" style="max-width: 17rem; font-family: 'Courier New', Courier, monospace;"></small>
            </div>
            <div class="col-md-6 right-box">
                <div class="row align-items-center">
                    <div class="header-text mb-2">
                        <h2>Hola, Bienvenidos a Repuestos JJJ</h2>
                        <p>Estamos felices de tenerte de vuelta.</p>
                    </div>
                    <form action="" method="POST">
                        <input type="hidden" name="action" value="login">
                        <div class="input-group mb-3">
                            <input type="email" class="form-control form-control-lg bg-light fs-5" name="correo" placeholder="Correo" required>
                        </div>
                        <div class="input-group mb-3">
                            <input type="password" class="form-control form-control-lg bg-light fs-5" name="password" placeholder="Contraseña" required>
                        </div>
                        <!-- Añadir reCAPTCHA widget aquí -->
                        <div class="g-recaptcha mb-3 " data-sitekey="6LfaIgwqAAAAAFjrowWPA5vbDBONVvx83AP2Iv9S"  > </div>
                        <button type="submit" class="btn btn-lg btn-danger w-100 fs-6" style="background-color: #FF0000;">Iniciar</button>
                    </form>
                    <div class="row mt-3">
                        <div class="col-12 text-center mt-2">
                            <small>¿Olvidaste tu contraseña? <a href="controlador.php?seccion=seccion5" style="color: #FF0000;">Recuperar</a></small>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>
</body>
</html>