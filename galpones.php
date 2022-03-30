<?php 
// Include the database configuration file  
require_once 'dbConfig.php'; 
 
// Get image data from database 
$result = $db->query("SELECT nombre, imagen1, imagen2, imagen3, imagen4, descripcion  FROM propiedades WHERE tipo = 'Galpones' ORDER BY id ASC"); 
?>





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
  <a class="navbar-brand" href="#">Casas</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="http://localhost/tasprop/index.php">Inicio <span class="sr-only"></span></a>
      </li>
      
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-expanded="false">
          Propiedades
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="http://localhost/tasprop/casas.php">Casas</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">Departamentos</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">Galpones</a>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Contacto</a>
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


<?php if($result->num_rows > 0){ ?> 
    
        <?php while($row = $result->fetch_assoc()){ ?>
          <div class="propiedad">
            <h2><?php echo strval($row['nombre']); ?></h2>
            <div id="<?php echo strval($row['nombre']); ?>" class="carousel slide" data-ride="carousel">
              <ul class="carousel-indicators">
                <li data-target="#<?php echo strval($row['nombre']); ?>" data-slide-to="0" class="active"></li>
                <li data-target="#<?php echo strval($row['nombre']); ?>" data-slide-to="1"></li>
                <li data-target="#<?php echo strval($row['nombre']); ?>" data-slide-to="2"></li>
                <li data-target="#<?php echo strval($row['nombre']); ?>" data-slide-to="3"></li>
                <li data-target="#<?php echo strval($row['nombre']); ?>" data-slide-to="4"></li>

              </ul>
              <div class="carousel-inner">
                <div class="carousel-item active">
                  <img src="data:images/jpg;charset=utf8;base64,<?php echo base64_encode($row['imagen1']); ?>" alt="slide one">
                  <div class="carousel-caption">
                    <p><?php echo strval($row['descripcion']); ?></p>
                  </div>
                </div>
                <div class="carousel-item">
                  <img src="data:images/jpg;charset=utf8;base64,<?php echo base64_encode($row['imagen2']); ?>" alt="slide two">
                  <div class="carousel-caption">
                    <p><?php echo strval($row['descripcion']); ?></p>
                  </div>
                </div>
                <div class="carousel-item">
                  <img src="data:images/jpg;charset=utf8;base64,<?php echo base64_encode($row['imagen3']); ?>" alt="slide three">
                  <div class="carousel-caption">
                    <p><?php echo strval($row['descripcion']); ?></p>
                  </div>
                </div>
                      <div class="carousel-item">
                  <img src="data:images/jpg;charset=utf8;base64,<?php echo base64_encode($row['imagen4']); ?>" alt="slide four">
                  <div class="carousel-caption">
                    <p><?php echo strval($row['descripcion']); ?></p>
                  </div>
                </div>
                  <div class="carousel-item">
                  <img src="images/logo.jpg" alt="slide five">
                  <div class="carousel-caption">
                  </div>
                </div>
              </div>
              <a class="carousel-control-prev" href="#<?php echo strval($row['nombre']); ?>" data-slide="prev">
                <span class="carousel-control-prev-icon"></span>
              </a>
              <a class="carousel-control-next" href="#<?php echo strval($row['nombre']); ?>" data-slide="next">
                <span class="carousel-control-next-icon"></span>
              </a>
            </div>
            <h5 class="center"></h5>
          </div>
        <?php } ?> 
     
<?php }else{ ?> 
    <p class="status error">Image(s) not found...</p> 
<?php } ?>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    
</body>
</html>