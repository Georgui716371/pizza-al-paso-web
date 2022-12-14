<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="CSS/estiloFormulario.css" type="text/css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="shortcut icon" href="images/caja-de-pizza.png" type="icon">
 <style>
        
@import 'https://fonts.googleapis.com/css?family=Open+Sans+Condensed:300';
@import url('https://fonts.googleapis.com/css2? family= Merriweather:wght@700 & family= Roboto+Slab:wght@100;400 & family= Work+Sans:wght@100; 300;400;600;800 & mostrar=intercambiar');
:root{
    --color-logo:#ff8c1a;
}

.cabecera {
    background-color: var(--color-logo);
    font-family: Arial, Helvetica, sans-serif;
    border-style: solid;
    border-width:1px;
    margin:50px;
    border-radius: 1px solid black;
}
.imagen-pizza{
    width: 50px;
    height:50x;
    
}
.container{
	width: 700px;
	height: auto ;
}
.envio-botton{
    margin: 50px;
}

.center-div{
    text-align: center;
}
.register-btn{
	cursor:not-allowed;
}
.envio-botton{

    position: relative;
    display: flex;
    justify-content: center;
    align-items:center;
 
}
.envio-botton .btn{

	color:var(--color-logo);
	
	border: none;
	font-size:20px;
	border: 2px solid var(--color-logo);
	padding: 5px;
	height: auto;
	width: 200px;
	margin: 10px;
}
.envio-botton .btn:hover{

 background-color:var(--color-logo);
 color: aliceblue;

}

.envio-botton .btn svg{
	color: var(--color-logo);
    width:20px;
    height:20px;
    margin-left: 10px;
}
.container-fluid footer button{
    background-color: var(--color-logo);
}

</style>

    <title>Libro de Reclamaciones </title>
</head>

<body>
    <div class="cabecera">
        <div class="center-div">
            <div>
                <h2>PIZZA AL PASO</h2>
                <div class="caja-pizza">
                    <img src="images/caja-de-pizza copy.png" class="imagen-pizza">
                </div>
            </div>
            <div>
                <h4>FORMULARIO LIBRO DE RECLAMACIONES</h4>
            </div>
            <div class="texto1">
                <p>Conforme a lo establecido en c??digo de la Protecci??n y Defensa del consumidor contamos con un Libro
                    de Reclamaciones a tu disposici??n para que puedas registrar tu queja o reclamo acerca de alg??n
                    pedido o transacci??n realizada a trav??s de nuestras p??ginas.</p>
            </div>
        </div>
    </div>

    <div class="container" style="border-radius:10px; border:1px solid #ff9900;" >
        <form action="PHP/envioCorreoLibroReclamaciones.php" method="post" class="needs-validation" novalidate>
            <h6 class="form-title">1.IDENTIFICACI??N DEL CONSUMIDOR RECLAMANTE(*) :</h6>
            <br>
            <div class="main-user-info user-input-box">
                <div class="form-floating user-input-box">
                    <input type="date" class="form-control" id="floatingTextarea2" name="fechaIncidente"
                        required></input>
                    <label><i>Fecha del Incidente:</i></label>
                    <div class="invalid-feedback">
                        Introduzca la fecha del incidente
                    </div>
                </div>
                <br>
                <div class="form-floating mb-3 user-input-box">
                    <input type="text" class="form-control" id="floatingInput" name="Apellidos" required>
                    <label><i>Apellidos:</i></label>
                    <div class="invalid-feedback">
                        Introduzca sus apellidos
                    </div>
                </div>
                <div class="form-floating mb-3 user-input-box">
                    <input type="text" class="form-control" id="floatingInput" name="Nombres" required>
                    <label><i>Nombres:</i></label>
                    <div class="invalid-feedback">
                        Introduzca sus nombres
                    </div>
                </div>
                <div class="form-floating user-input-box">
                    <input type="email" class="form-control" id="floatingInputGrid" name="EnmailAddres" required>
                    <label><i>Correo:</i></label>
                    <div class="invalid-feedback">
                        Introduzca su email
                    </div>
                </div>
                <br>
                <div class="form-floating user-input-box">
                    <input type="tel" class="form-control" id="floatingInputGrid" name="telefonoCelular" required>
                    <label><i>Tel??fono:</i></label>
                    <div class="invalid-feedback">
                        Introduzca su tel??fono
                    </div>
                </div>
                <br>
                <div class="form-floating user-input-box">
                    <select class="form-select" id="floatingSelectGrid" seleccion="selectFormSelection">
                        <option value="">seleccione</option>
                        <option value="dni">DNI</option>
                        <option value="dniElectronico">DNI electr??nico</option>
                        <option value="Carnet">Carnet de Extranjeria</option>
                    </select>
                    <label><i>Seleccione el Tipo de Documento:</i></label>
                </div>
                <br>
                <div class="form-floating user-input-box">
                    <input type="tel" class="form-control" id="floatingInputGrid" name="NumeroDocumento" required>
                    <label><i>N??mero de documento:</i></label>
                    <div class="invalid-feedback">
                        Introduzca el n??mero de documento
                    </div>
                </div>
                <br>
                <div class="form-floating user-input-box">
                    <input type="text" class="form-control" id="floatingInputGrid" name="Direccion" required>
                    <label><i>Direcci??n:</i></label>
                    <div class="invalid-feedback">
                        Introduzca la direcci??n
                    </div>
                </div>
            </div>
            <br>
            <div class="main-user-info user-input-box">
                <h6 class="form-title">2.IDENTIFICACI??N DEL BIEN CONTRATADO (*):</h6>
                <br>

                <fieldset style="border:1px solid rgb(198, 192, 192)">
                    <legend>Tipo:</legend>
                    <div class="form-check user-input-box">
                        <input class="form-check-input" type="radio" name="radioButtonTipo" id="flexRadioDefault1"
                            required>
                        <label class="form-check-label">
                            <i>Producto</i>
                        </label>
                    </div>

                    <div class="form-check user-input-box">
                        <input class="form-check-input" type="radio" name="radioButtonTipo" id="flexRadioDefault2"
                            checked>
                        <label class="form-check-label">
                            <i>Servicio</i>
                        </label>
                    </div>
                </fieldset>
                <br>
                <div class="form-floating user-input-box">
                    <input type="number" class="form-control" id="floatingInputGrid" name="MontoReclamado" required>
                    <label><i>Monto Reclamado:</i></label>
                    <div class="invalid-feedback">
                        Introduzca el monto reclamado
                    </div>
                </div>
                <br>
                <div class="form-floating user-input-box">
                    <textarea class="form-control" id="floatingTextarea" name="ComentarioMonto" required></textarea>
                    <label><i>Descripci??n para monto reclamado:</i></label>
                    <div class="invalid-feedback">
                        Introduzca la descripcci??n del monto
                    </div>
                </div>
            </div>
            <br>
            <div class="main-user-info user-input-box">
                <h6 class="form-title">3.DETALLE DE LA RECLAMACION Y PEDIDO DEL CONSUMIDOR (*):</h6>
                <br>
                <fieldset>
                    <legend>Reclamaci??n:</legend>
                    <div class="form-check user-input-box">
                        <input class="form-check-input" type="radio" name="radioButtonReclamo" id="flexRadioDefault1"
                            required>
                        <label class="form-check-label">
                            <i>Queja</i>
                        </label>
                    </div>

                    <div class="form-check user-input-box">
                        <input class="form-check-input" type="radio" name="radioButtonReclamo" id="flexRadioDefault2"
                            checked>
                        <label class="form-check-label">
                            <i> Reclamo</i>

                        </label>
                    </div>
                </fieldset>
                <br>
                <div class="form-floating user-input-box">
                    <input type="number" class="form-control" id="floatingInputGrid" name="numeroDeBoleta" required>
                    <label><i>N??mero de Boleta:</i></label>
                    <div class="invalid-feedback">
                        Introduzca el n??mero de boleta
                    </div>
                </div>
                <br>
            </div>
            <br>

            <div class="form-floating user-input-box">
                <input type="date" class="form-control" id="floatingTextarea2" name="fechaPedido" required></input>
                <label><i>Fecha de Pedido:</i></label>
                <div class="invalid-feedback">
                    Introduzca la fecha del pedido
                </div>
            </div>
            <br>
            <div class="form-floating">
                <textarea class="form-control" id="floatingTextarea" name="ComentarioDetalleReclamo"
                    required></textarea>
                <label><i>Detalle:</i></label>

            </div>
            <br>
            <div class="form-floating">
                <textarea class="form-control" id="floatingTextarea" name="ComentarioPedidoConcreto"
                    required></textarea>
                <label><i>Pedido en Concreto:</i></label>
            </div>
            <div class="envio-botton">
                <div class="g-recaptcha" data-sitekey="6LcPn4IiAAAAADr9Kd5WocDAmo3eMkxzA1Lobxwl"
                    data-callback="recaptcha_callback"></div>
            </div>
            <br>
            <div class="envio-botton">
                <button class="btn">ENVIAR <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><!--! Font Awesome Pro 6.2.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. --><path d="M307 34.8c-11.5 5.1-19 16.6-19 29.2v64H176C78.8 128 0 206.8 0 304C0 417.3 81.5 467.9 100.2 478.1c2.5 1.4 5.3 1.9 8.1 1.9c10.9 0 19.7-8.9 19.7-19.7c0-7.5-4.3-14.4-9.8-19.5C108.8 431.9 96 414.4 96 384c0-53 43-96 96-96h96v64c0 12.6 7.4 24.1 19 29.2s25 3 34.4-5.4l160-144c6.7-6.1 10.6-14.7 10.6-23.8s-3.8-17.7-10.6-23.8l-160-144c-9.4-8.5-22.9-10.6-34.4-5.4z"/></svg> </button>
            </div>
        </form>
    </div>
    <script>

        /*
        function recaptcha_callback(){
            var registerBtn=document.querySelector("#register-btn");
            registerBtn.removeAttribute("disabled");
            registerBtn.style.cursor="pointer";
            alert("Marque el reCaptcha");
        }
      */
        function recaptchaFuntion() {
            var response = grecaptcha.getResponse();

            if (response.length == 0) {
                alert("Captcha no verificado")
            }
        }

    </script>

    </script>
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
    <script src="https://www.google.com/recaptcha/api.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
        crossorigin="anonymous"></script>
</body>

</html>