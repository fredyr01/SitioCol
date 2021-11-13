<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="shortcut icon" href="../assets/login/img/acceso.png" type="image/x-icon">
    <link rel="stylesheet" href="../assets/fontawesome/css/fontawesome.min.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../assets/login/css/style.css">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" />
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>
<body>
        <img class="wave" src="../assets/login/img/wave.png">
        <div class="container">
            <div class="img">
                <img src="../assets/login/img/img2.svg">
            </div>
            <div class="login-content">
                <form action="#" autocomplete="off">
                    <img src="../assets/login/img/avatar.svg">
                    <h2 class="title">Bienvenido</h2>
                    <div class="input-div one">
                    <div class="i">
                            <i class="fas fa-user"></i>
                    </div>
                    <div class="div">
                            <h5>Usuario</h5>
                            <input type="text" class="input">
                    </div>
                    </div>
                    <div class="input-div pass">
                    <div class="i"> 
                            <i class="fas fa-lock"></i>
                    </div>
                    <div class="div">
                            <h5>Contraseña</h5>
                            <input type="password" class="input">
                    </div>
                    </div>
                    <!-- <a href="#">Forgot Password?</a> -->
                    <input type="submit" class="btn" value="Ingresar">
                </form>
            </div>
        </div>
    <script type="javascript" src="../assets/login/js/main.js">
    </script>
    <script type="javascript" src="../assets/login/js/alertas.js"></script>

</body>
</html>

<!-- <div class="login-container">
    <div class="login-content">
        <p class="text-center">
            <i class="fas fa-user-circle fa-5x"></i>
        </p>
        <p class="text-center">
            Inicia sesión con tu cuenta
        </p>
        <form action="" method="POST" autocomplete="off" >
            <div class="form-group">
                <label for="UserName" class="bmd-label-floating"><i class="fas fa-user-secret"></i> &nbsp; Usuario</label>
                <input type="text" class="form-control" id="UserName" name="usuario" pattern="[a-zA-Z0-9]{1,35}" maxlength="35" required="" >
            </div>
            <div class="form-group">
                <label for="UserPassword" class="bmd-label-floating"><i class="fas fa-key"></i> &nbsp; Contraseña</label>
                <input type="password" class="form-control" id="UserPassword" name="clave" pattern="[a-zA-Z0-9$@.-]{7,100}" maxlength="100" required="" >
            </div>
            <button type="submit" class="btn-login text-center">LOG IN</button>
        </form>
    </div>
</div> -->