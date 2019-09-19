<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
            <a class="navbar-brand h1 mb-0" href="#">VIVA O MATE</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navebarSite">
              <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navebarSite">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item">
                      <a class="nav-link" href="index.php">Inicio</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="paginas/brasileiro.php">Brasileiro</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="paginas/uruguai.php">Uruguaio</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="paginas/curiosidades.php">Curiosidades</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="paginas/argentino.php">Argentino</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="paginas/paraguaio.php">Paraguaio</a>
                    </li>
                </ul>
                <ul class="navbar-nav mr-auto">
                  <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" id="navDrop">
                      Usuário
                    </a>
                    <div class="dropdown-menu">
                      <a class="dropdown-item" href="paginas/formulario.php">Cadastrar</a>
                      <a class="dropdown-item" href="paginas/listar.php">Listar</a>
                      <a class="dropdown-item" href="paginas/edit_usuario.php">Editar</a>

                    </div>
                  </li>
                </ul>
                <ul class="navbar-nav ml-auto">
                  <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" id="navDrop">
                      Socal
                    </a>
                    <div class="dropdown-menu">
                      <a class="dropdown-item" href="#">Facebook</a>
                      <a class="dropdown-item" href="#">Twitter</a>
                      <a class="dropdown-item" href="#">Instagram</a>
                    </div>
                  </li>
                </ul>
                <form class="form-inline">
                  <input class="form-control ml-4 mr-2" type="search" placeholder="Buscar...">
                  <button class="btn btn-dark" type="submit">Ok</button>
                </form>
              </div>
      </div>
  </nav>

      <div id="carouselSite" class="carousel slide" data-ride="carousel">

        <ol class="carousel-indicators">
          <li data-target="#carouselSite" data-slide-to="0" class="active"></li>
          <li data-target="#carouselSite" data-slide-to="1"></li>
          <li data-target="#carouselSite" data-slide-to="2"></li>

        </ol>

        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="imagens/chimas3.png" class="img-fluid  d-block w-100">
            <div class="carousel-caption d-none d-md-block text-white">
              <h3>O mate uruguaio</h3>
              <p>Sabe diferenciar?</p>
            </div>
          </div>

          <div class="carousel-item">
            <img src="imagens/chimarrão.png" class="img-fluid  d-block w-100">
            <div class="carousel-caption d-none d-md-block text-body">
              <h3>O Chimas</h3>
              <p>Sabe o que o diferencia?</p>
            </div>
          </div>

          <div class="carousel-item">
            <img src="imagens/chimas2.png" class="img-fluid  d-block w-100">
            <div class="carousel-caption d-none d-md-block text-white">
              <h3>Saiba os diferentes tipos de erva-mate</h3>
              <p>O melhor do mate</p>
            </div>
          </div>
        </div>

        <a class="carousel-control-prev" href="#carouselSite" role="button" data-slide="prev">
           <span class="carousel-control-prev-icon" aria-hidden="true"></span>
           <span class="sr-only">Anterior</span>
         </a>
         <a class="carousel-control-next" href="#carouselSite" role="button" data-slide="next">
           <span class="carousel-control-next-icon" aria-hidden="true"></span>
           <span class="sr-only">Avançar</span>
         </a>
      </div>
      <div class="container">
        <div class="row">
          <div class="col-12 text-center my-4">
            <h1 class="display-3">Bem-vindo mateadores </h1>
            <p>Saiba tudo sobre erva-mate</p>
          </div>
        </div>
        <!-- <div class="row">
          <div class="col-3"></div>
          <div class="col-9"></div>

        </div> -->

      </div>


    <script src="js/jquery-3.4.1.js" ></script>
    <script src="js/popper.min.js"></script>
    <script src="bootstrap/bootstrap.min.js"></script>

</body>
