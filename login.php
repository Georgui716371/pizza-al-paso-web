<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <link rel="shortcut icon" href="" type="image/x-icon">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="stylesheet" href="/CSS/style.css" type="text/css">
  <link rel="stylesheet" href="/CSS/login-style.css" type="text/css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
  <title>LOGIN</title>
  <style>
    html,
    body {
      height: 100%;
    }

    :root {}

    body {

      align-items: center;
      padding-top: 40px;
      padding-bottom: 40px;
      background-color: #f5f5f5 !important;
    }

    main {
      background-color: #f5f5f5 !important;
      text-align: center;
    }

    .form-signin {

      display: flex;
      justify-content: center;
      align-items: center;
      flex-direction: column;
      max-width: 330px;
      padding: 15px;
      height: auto;
      width: 900px !important;
      box-shadow: 0 .5rem 1rem rgba(0, 0, 0, .2);
    }

    .form-signin .form-floating:focus-within {
      z-index: 2;
    }

    .container-fluid .form-signin [type="submit"] {
      background-color: var(--color-logo);

      font-weight: bold;
      color: black;

    }

    .form-signin input[type="email"] {
      margin-bottom: -1px;
      border-bottom-right-radius: 0;
      border-bottom-left-radius: 0;
    }

    .form-signin input[type="password"] {
      margin-bottom: 10px;
      border-top-left-radius: 0;
      border-top-right-radius: 0;
    }

    .bd-placeholder-img {
      font-size: 1.125rem;
      text-anchor: middle;
      -webkit-user-select: none;
      -moz-user-select: none;
      user-select: none;
    }

    @media (min-width: 768px) {
      .bd-placeholder-img-lg {
        font-size: 3.5rem;
      }
    }

    .b-example-divider {
      height: 3rem;
      background-color: rgba(0, 0, 0, .1);
      border: solid rgba(0, 0, 0, .15);
      border-width: 1px 0;
      box-shadow: inset 0 .5em 1.5em rgba(0, 0, 0, .1), inset 0 .125em .5em rgba(0, 0, 0, .15);
    }

    .b-example-vr {
      flex-shrink: 0;
      width: 1.5rem;
      height: 100vh;
    }

    .bi {
      vertical-align: -.125em;
      fill: currentColor;
    }

    .nav-scroller {
      position: relative;
      z-index: 2;
      height: 2.75rem;
      overflow-y: hidden;
    }

    .nav-scroller .nav {
      display: flex;
      flex-wrap: nowrap;
      padding-bottom: 1rem;
      margin-top: -1px;
      overflow-x: auto;
      text-align: center;
      white-space: nowrap;
      -webkit-overflow-scrolling: touch;
    }


    @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500&display=swap');


    :root {
      --color-logo: #ff8c1a;
    }

    body::-webkit-scrollbar {
      width: 15px;
      /* width of the entire scrollbar */
    }

    body::-webkit-scrollbar-track {
      background: white;
      /* color of the tracking area */
    }

    body::-webkit-scrollbar-thumb {
      background-color: var(--color-logo);

    }

    * {
      font-family: 'Poppins', sans-serif;
      margin: 0;
      padding: 0;
      box-sizing: border-box;
      text-decoration: none !important;
      /*border: 1px solid black;*/
    }


    html {
      font-size: 12px;
    }

    header {

      display: flex;
      width: 100%;
      position: fixed;
      left: 0;
      top: 0;
      background-color: aliceblue;
      box-shadow: 0 .5rem 1rem rgba(0, 0, 0, .2);
      justify-content: space-evenly;
      padding: 8px;
      z-index: 100;
    }

    header .logo {

      color: var(--color-logo);
      font-size: 20px;


    }

    header span {

      color: black;

    }

    header .navbar a {

      margin-left: 20px;
      color: black;
      font-size: 15px;



    }

    header .navbar a:hover {
      color: var(--color-logo);
      background-color: aliceblue;
    }

    header .redes {
      color: black;

    }

    header .redes i {
      color: black;
      padding: 10px;

    }

    header .redes i:hover {
      color: var(--color-logo);
    }

    header input {
      display: none;
    }

    header label {
      font-size: 3rem;
      color: var(--verde);
      cursor: pointer;
      visibility: hidden;
      opacity: 0;
    }
  </style>

</head>

<body>
  <header>
    <a href="" class="logo"><span>PIZZA AL</span> PASO <i class="fa-solid fa-pizza-slice"></i></a>
    <input type="checkbox" id="menu-bar" />
    <label for="menu-bar" class="fa fa-bars"></label>
    <nav class="navbar">
      <a href="index.php">NOSOTROS</a>
      <a href="index.php">HISTORIA</a>
      <a href="index.php">CONTACTANOS</a>
      <a href="index.php">PRODUCTOS</a>
      <a href="index.php">COMPRAR</a>
      <a href="index.php">LOGIN</a>
    </nav>
    <div class="redes">
      <a href="https://www.instagram.com/pizzas_al_paso/" target="_blank"><i class="fa-brands fa-instagram"></i></a>
      <a href="https://www.facebook.com/profile.php?id=100063580178149&sk=about" target="_blank"><i class="fa-brands fa-facebook-f"></i></a>
      <a href="https://www.youtube.com/"><i class="fa-brands fa-youtube" target="_blank"></i></a>
      <a href="https://www.tiktok.com/es/"><i class="fa-brands fa-tiktok" target="_blank"></i></a>
      <a href=""><i class="fa-sharp fa-solid fa-cart-shopping" target="_blank"></i></a>
    </div>
  </header>

  <div class="container-fluid">
    <br>
    <br>
  </div>

  <div class="container-fluid">
    <main class="form-signin w-100 m-auto p-5">
      <form method="post" class="needs-validation" novalidate>
        <img class="mb-4" src="/img/logo-pizza.png" alt="" width="70%" height="70%">
        <h1 class="h3 mb-3 fw-normal">INICIAR SESIÓN </h1>

        <div class="form-floating">
          <input  type="email" class="form-control" id="email" placeholder="name@example.com" required>
          <label for="email">Correo electronico</label>
        </div>
        <div class="invalid-feedback">
          Introduzca su correo
        </div>
        <div class="form-floating">
          <input type="password" class="form-control" id="password" placeholder="Password" required>
          <label for="password">Contraseña</label>
        </div>
        <div class="invalid-feedback">
          Introduzca su contraseña
        </div>
        <button class="w-100 btn btn-lg btn-warning m-3" type="submit">INICIAR SESION</button>
        <a class="w-100 btn btn-lg btn-warning m-3" href="registro.php">REGISTRARSE</a>

      </form>
    </main>
    
    <script>
        // Example starter JavaScript for disabling form submissions if there are invalid fields
        (function () {
            'use strict'

            // Fetch all the forms we want to apply custom Bootstrap validation styles to
            var forms = document.querySelectorAll('.needs-validation')

            // Loop over them and prevent submission
            Array.prototype.slice.call(forms)
                .forEach(function (form) {
                    form.addEventListener('submit', function (event) {
                        if (!form.checkValidity()) {
                            event.preventDefault()
                            event.stopPropagation()
                        }

                        form.classList.add('was-validated')
                    }, false)
                })
        })()

    </script>
  </div>

  <div class="container-fluid">
    <footer class="py-5 p-4 mt-5">
      <div class="row">
        <div class="col-6 col-md-2 mb-3">
          <h5>PIZZA AL PASO</h5>
          <ul class="nav flex-column">
            <li class="nav-item mb-2">
              <a href="" class="nav-link p-0 text-muted">NOSOTROS</a>
            </li>
            <li class="nav-item mb-2">
              <a href="#" class="nav-link p-0 text-muted">HISTORIA</a>
            </li>
            <li class="nav-item mb-2">
              <a href="#" class="nav-link p-0 text-muted">CONTACTANOS</a>
            </li>
            <li class="nav-item mb-2">
              <a href="#" class="nav-link p-0 text-muted">PRODUCTOS</a>
            </li>
            <li class="nav-item mb-2">
              <a href="#" class="nav-link p-0 text-muted">COMPRAR</a>
            </li>
          </ul>
        </div>
        <div class="col-6 col-md-2 mb-3">
          <h5>Section</h5>
          <ul class="nav flex-column">
            <li class="nav-item mb-2">
              <a href="librodereclamaciones.php" class="nav-link p-0 text-muted">LIBRO DE RECLAMACIONES</a>
            </li>
            <li class="nav-item mb-2">
              <a href="#" class="nav-link p-0 text-muted">Features</a>
            </li>
            <li class="nav-item mb-2">
              <a href="#" class="nav-link p-0 text-muted">Pricing</a>
            </li>
            <li class="nav-item mb-2">
              <a href="#" class="nav-link p-0 text-muted">FAQs</a>
            </li>
            <li class="nav-item mb-2">
              <a href="#" class="nav-link p-0 text-muted">About</a>
            </li>
          </ul>
        </div>

        <div class="col-md-5 offset-md-1 mb-3">
          <form>
            <h5>Envianos un correo</h5>
            <p>Monthly digest of what's new and exciting from us.</p>
            <div class="d-flex flex-column flex-sm-row w-100 gap-2">
              <label for="newsletter1" class="visually-hidden">Correo Electronico</label>
              <input id="newsletter1" type="text" class="form-control" placeholder="Email address" />
              <button class="w-100 btn btn-lg btn-warning" type="button">Enviar</button>
            </div>
          </form>
        </div>
      </div>

      <div class="d-flex flex-column flex-sm-row justify-content-between py-4 my-4 border-top">
        <p>&copy; 2022, Inc.Todos los derechos reservados.</p>
        <ul class="list-unstyled d-flex">
          <li class="ms-3">
            <a class="link-dark" href="#"><svg class="bi" width="24" height="24">
                <use xlink:href="#twitter" />
              </svg></a>
          </li>
          <li class="ms-3">
            <a class="link-dark" href="#"><svg class="bi" width="24" height="24">
                <use xlink:href="#instagram" />
              </svg></a>
          </li>
          <li class="ms-3">
            <a class="link-dark" href="#"><svg class="bi" width="24" height="24">
                <use xlink:href="#facebook" />
              </svg></a>
          </li>
        </ul>
      </div>
    </footer>
  </div>

</body>

</html>