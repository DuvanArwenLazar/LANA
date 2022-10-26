<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Lana </title>

    <!-- Styles -->
    <!-- <link rel="stylesheet" href="./Public/Css/bootstrap.min.css"> -->
    <link rel="stylesheet" href="./Public/Css/styles.css">
    <script src="https://kit.fontawesome.com/53da0b8582.js" crossorigin="anonymous"></script>
</head>
<body>
    <div class="web">
        <header class="header-ge">
            <nav class="btn-ge">
                <ul class="content-li">
                    <li class="l-element logo-l left-l"><h2> Lana </h2></li>
                    <div class="right-l">
                        <li class="l-element link link-login"><a href="#inicio-sesion" class="link link-login"> Login</a> or</li>
                        <li class="l-element link link-register"><button class="btn-btn btn-register"> Register </button></li>
                    </div>
                </ul>
            </nav>
        </header>

        <!-- Pictures container -->

        <main class="content-m">
            <h2 class="title-m"> Share Your Moments! </h2>
            <div class="cuadricula">
                <div class="general-c">
                    <!-- Imagen -->
                    <div class="imagen-c">
                        <img src="./Public/Img/IMAGEN.jfif" alt="" srcset="" class="img-main img-m img-responsive">
                    </div>
                    <!-- Foto de perfil -->
                    <div class="circle">
                        <img src="https://avatars.githubusercontent.com/u/110570465?v=4" alt="" srcset="" class="img-main img-c img-responsive">
                    </div>
                    <!-- Interacciones -->
                    <div class="interacion-c">
                        <div class="primero"> 10 <i class="fa-regular fa-heart"></i></div>
                        <div class="segundo"><i class="fa-regular fa-comment"></i> 14 </div>
                    </div>
                </div>
            </div>
        </main>

        <!-- History Container -->

        <aside class="content-a">
            <h2 class="title-m"> Tell your history! </h2>
            <!-- PENDEDIENTE -->
        </aside>

        <!--  -->

        <div class="form-c">
            <!-- inicio -->
            <div class="inicio-c" id="inicio-sesion">
                <h3 class="form-title login-title"> Login </h3>
                <form action="" method="" class="form">
                    <div class="user-login-c">
                        <input type="text" name="usernamel" id="usernamel" placeholder="Username">
                    </div>
                    <div class="password-c">
                        <input type="text" name="password" id="password" placeholder="Password">
                    </div>
                    <div class="submit-c">
                        <button type="submit" class="btn btn-register btn-form-login"> Let's Go! </button>
                    </div>
                </form>
            </div>

            <!-- Registro -->
            <div class="registro-c" id="registro">
                <h3 class="form-title register-title"> Register </h3>
                <form action="" method="" class="form">
                    <div class="email-c">
                        <input type="email" name="email" id="email" placeholder="Email">
                    </div>
                    <div class="confirm-email-c">
                        <input type="email" name="confirm-email" id="confirm-email" placeholder="Confirm Email">
                    </div>
                    <div class="user-register-c">
                        <input type="text" name="usernamer" id="usernamer" placeholder="Username">
                    </div>
                    <div class="password-c">
                        <input type="password" name="password" id="password" placeholder="Password">
                    </div>
                    <div class="confirm-email-c">
                        <input type="password" name="confirm-password" id="confirm-password" placeholder="Confirm Password">
                    </div>
                    <div class="submit-c">
                        <button type="submit" class="btn btn-submit"> Let's Go! </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>

    <!-- Scripts. -->
    <script src="https://kit.fontawesome.com/192d5c8398.js" crossorigin="anonymous"></script>
</html>
