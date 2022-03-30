<!DOCTYPE html>
<html lang="en">
<head>
<title>Tasprop</title>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">

</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-success">
  <a class="navbar-brand" href="#">Tasprop</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="http://localhost/tasprop/index.php">Inicio <span class="sr-only">(current)</span></a>
      </li>
      
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-expanded="false">
          Propiedades
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="http://localhost/tasprop/casas.php">Casas</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="http://localhost/tasprop/deptos.php">Departamentos</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="http://localhost/tasprop/galpones.php">Galpones</a>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#contacto">Contacto</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Acerca de Nosotros</a>
      </li>
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>
  </div>
</nav>


<div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
    <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="images/Logo.png" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>First slide label</h5>
        <p>Some representative placeholder content for the first slide.</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="images/casa1.jpeg" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>Second slide label</h5>
        <p>Some representative placeholder content for the second slide.</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="images/casa4_1.jpg" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>Third slide label</h5>
        <p>Some representative placeholder content for the third slide.</p>
      </div>
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-target="#carouselExampleCaptions" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-target="#carouselExampleCaptions" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </button>
</div>

    <section class="my-4">
        <div class="py-4">
            <h2 class="text-center">Casas</h2>
        </div>
    </section>

    <section class="my-4">
        <div class="py-4">
            <h2 class="text-center">Departamentos</h2>
        </div>
    </section>

    <section class="my-4">
        <div class="py-4">
            <h2 class="text-center">Galpones</h2>
        </div>
    </section>

    <a id="contacto">
    <section class="my-4">
        <div class="py-4">
            <h2 class="text-center">Contáctanos</h2>
        </div>

        <div class="w-50 m-auto">
            <form action="about.php" method="post">
                <div class="form-group">
                    <label>Nombre: </label>
                    <input type="text" name="name" class="form-control">
                </div>

                <div class="form-group">
                    <label>Email: </label>
                    <input type="email" name="email" class="form-control">
                </div>

                <div class="form-group">
                    <label>Teléfono: </label>
                    <input type="text" name="number" class="form-control">
                </div>

                <button type="submit" class="btn btn-success">Ingresar</button>
            </form>
        </div>
    </section>
    </a>


    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    
</body>
</html>