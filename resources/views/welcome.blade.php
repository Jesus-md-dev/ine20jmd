<!doctype html>
<!-- Bootstrap first template for Internet y Negocio Electrónico, University of Cadiz,
     since 2019, based on https://www.w3schools.com/bootstrap4/bootstrap_templates.asp -->
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="css/bootstrap.min.css" />
  <!-- 
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script> 
    -->
  <style>
    .centerb {
      background-color: #E6FEE1;
    }

    .boticon {
      width: 25px;
    }

    .fakeimg {
      height: 100px;
      background: #aaa;
    }

    .bars {
      background: #47FCDE;
    }

    .lateral {
      background: #9FFDE0;
    }

    a {
      color: black
    }

    .refsize {
      font-size: 13px;
    }

    .lateralimg {
      vertical-align: middle;
      width: auto;
      max-height: 71px;
      height: auto;
      margin: 10px;
    }

    .imgcustom {
      vertical-align: middle;
      width: auto;
      max-height: 150px;
      height: auto;
      margin: 10px;
    }
  </style>

  <title>OLD&NEW eSHOP</title>
</head>

<body>

  <!--Barra Superior-->
  <nav class="navbar navbar-expand-sm navbar-light bars shadow border-bottom border-secondary">
    <a class="navbar-brand" href="#">
      <h3 class="navbar-brand">OLD&NEW eSHOP</h3>
    </a>
    <form class="form-inline">
      <input class="form-control pr-5 mr-2" type="search" placeholder="Buscar" aria-label="Buscar">
      <button class="btn btn-secondary my-2 my-sm-0" type="submit">Buscar</button>
    </form>
    <button class="btn ml-auto" type="submit">Autenticación</button>
    <button class="btn" type="submit">
      <img src="/ico/cesta.png" alt="" width="40">
    </button>
  </nav>

  <!--Centro-->
  <div class="centerb border border-dark">
    <div class="row centerb">
      <div class="container col-md-9">

        <!--1º Fila-->
        <div class="row d-flex flex-column">

          <!--Titulo-->
          <div class="row">
            <h4 class="ml-5 mt-4 mb-4">Ofertas del dia</h4>
          </div>

          <!--Productos-->
          <div class="row d-flex justify-content-around">

            <div class="col-md-2">
              <div class="row">
                <div class="bd-placeholder-img">
                  <a href=""><img src="/img/gamecube.png" alt="" class="img-fluid imgcustom"></a>
                </div>
              </div>
              <div class="row">
                <h5>270,00€</h5>
              </div>
              <div class="row">
                <strike>300,00€</strike> - 10% de descuento
              </div>
            </div>

            <div class="col-md-2">
              <div class="row">
                <div class="bd-placeholder-img">
                  <a href=""><img src="/img/mariokart live.jpg" alt="" class="img-fluid imgcustom"></a>
                </div>
              </div>
              <div class="row">
                <h5>450,00€</h5>
              </div>
              <div class="row">
                <strike>500,00€</strike> - 10% de descuento
              </div>
            </div>

            <div class="col-md-2">
              <div class="row">
                <div class="bd-placeholder-img">
                  <a href=""><img src="/img/wow.png" alt="" class="img-fluid imgcustom"></a>
                </div>
              </div>
              <div class="row">
                <h5>10,00€</h5>
              </div>
              <div class="row">
                <strike>20,00€</strike> - 10% de descuento
              </div>
            </div>

            <div class="col-md-2">
              <div class="row">
                <div class="bd-placeholder-img">
                  <a href=""><img src="/img/mandopro.png" alt="" class="img-fluid imgcustom"></a>
                </div>
              </div>
              <div class="row">
                <h5>6,30€</h5>
              </div>
              <div class="row">
                <strike>7,00€</strike> - 10% de descuento
              </div>
            </div>
          </div>
        </div>

        <!--2º Fila-->
        <div class="row d-flex flex-column ">

          <!--Titulo-->
          <div class="row">
            <h4 class="ml-5 mt-4 mb-4">Nuevos Productos</h4>
          </div>

          <!--Productos-->
          <div class="row d-flex justify-content-around">

            <div class="col-md-3">
              <div class="row">
                <div class="bd-placeholder-img">
                  <a href=""><img src="/img/odyssey.jpg" alt="" class="img-fluid imgcustom"></a>
                </div>
              </div>
              <div class="row">
                <h5>40,00€</h5>
              </div>
            </div>

            <div class="col-md-3">
              <div class="row">
                <div class="bd-placeholder-img">
                  <a href=""><img src="/img/ringfit.jpg" alt="" class="img-fluid imgcustom"></a>
                </div>
              </div>
              <div class="row">
                <h5>100,00€</h5>
              </div>
            </div>

            <div class="col-md-3">
              <div class="row">
                <div class="bd-placeholder-img">
                  <a href=""><img src="/img/sdswitch.jpg" alt="" class="img-fluid imgcustom w-auto"></a>
                </div>
              </div>
              <div class="row">
                <h5>10,30€</h5>
              </div>
            </div>

          </div>
        </div>
      </div>

      <!--Columna lateral-->
      <div class="col-md-2 rounded lateral mt-3 mb-3 shadow border border-secondary">
        <h6 class="mt-2">Lo más vendido</h6>

        <div class="d-flex flex-row">

          <div class="d-flex flex-column">
            <h1 class="font-weight-light">1</h1>
          </div>

          <div class="d-flex flex-column m-2">
            <a href=""><img src="/img/minecraft.jpg" alt="" class="img-fluid lateralimg"></a>
          </div>

        </div>

        <div class="d-flex flex-row">

          <div class="d-flex flex-column">
            <h1 class="font-weight-light">2</h1>
          </div>

          <div class="d-flex flex-column m-2">
            <a href=""><img src="/img/microusb.jpg" alt="" class="img-fluid lateralimg"></a>
          </div>

        </div>
        <div class="d-flex flex-row">

          <div class="d-flex flex-column">
            <h1 class="font-weight-light">3</h1>
          </div>

          <div class="d-flex flex-column m-2">
            <a href=""><img src="/img/smash.jpg" alt="" class="img-fluid lateralimg"></a>
          </div>

        </div>
        <div class="d-flex flex-row">

          <div class="d-flex flex-column">
            <h1 class="font-weight-light">4</h1>
          </div>

          <div class="d-flex flex-column m-2">
            <a href=""><img src="/img/infamous.jpg" alt="" class="img-fluid lateralimg"></a>
          </div>

        </div>
        <div class="d-flex flex-row">

          <div class="d-flex flex-column">
            <h1 class="font-weight-light">5</h1>
          </div>

          <div class="d-flex flex-column m-2">
            <a href=""><img src="/img/uncharted.jpg" alt="" class="img-fluid lateralimg"></a>
          </div>

        </div>
        <button class="btn btn-primary m-2">Ver más</button>

      </div>
    </div>
  </div>

  <!--Barra Inferior-->
  <footer class="page-footer bars text-black-100 border-top border-secondary pb-2">
    <div class="container-fluid text-md-left ml-3 mb-3 mr-3">
      <div class="row">
        <div class="col-md-3">
          <div class="row mb-1 mt-3"><b>Acerca de</b></div>
          <div class="row refsize"> <a href=""> Quienes Somos </a> </div>
          <div class="row refsize"> <a href=""> Trabaja con nosotros </a> </div>
          <div class="row refsize"> <a href=""> Aviso legal </a> </div>
        </div>
        <div class="col-md-3">
          <div class="row mb-1 mt-3"><b>Navegación</b></div>
          <div class="row refsize"> <a href=""> Idioma/Languages </a> </div>
          <div class="row refsize"> <a href=""> Mapa del sitio </a> </div>
        </div>
        <div class="col-md-3">
          <div class="row mb-1 mt-3"><b>Ayuda</b></div>
          <div class="row refsize"> <a href=""> Gestionar Compras </a> </div>
          <div class="row refsize"> <a href=""> Tarifas y politicas de envio </a> </div>
          <div class="row refsize"> <a href=""> Devolver o reemplazar productos </a> </div>
          <div class="row refsize"> <a href=""> Contacto para ayuda </a> </div>
          <div class="row refsize"> <a href=""> IVA sobre los bienes </a> </div>
          <div class="row refsize"> <a href=""> Método de pago </a> </div>
        </div>
        <div class="col-md-3">
          <div class="row mb-1 mt-3"><b>Contacto</b></div>
          <div class="row refsize"> <a href=""> Atencion al cliente </a> </div>
          <div class="row refsize"> <a href=""> Twitter <img src="/ico/twitter.png" alt="" class="boticon"> </a> </div>
          <div class="row refsize"> <a href=""> Facebook <img src="/ico/facebook.png" alt="" class="boticon"> </a> </div>
          <div class="row refsize"> <a href=""> Youtube <img src="/ico/youtube.png" alt="" class="boticon"> </a> </div>
          <div class="row refsize"> <a href=""> Instagram <img src="/ico/instagram.png" alt="" class="boticon"> </a> </div>
        </div>
      </div>
    </div>
  </footer>


  <!-- Loading Javascripts -->
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script>
    window.jQuery || document.write('https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
  </script>
  </script>
  <!-- <script src="../../assets/js/vendor/popper.min.js"></script> -->
  <script src="js/bootstrap.min.js"></script>
</body>

</html>