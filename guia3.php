<!doctype html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.84.0">
    <title>Desafio #1</title>


    <!-- Bootstrap core CSS -->
<link href="./css/bootstrap.min.css" rel="stylesheet">

    <style>
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
    </style>

    
    <!-- Custom styles for this template -->
    <link href="./css/navbar-top.css" rel="stylesheet">
  </head>
  <body style="background-color: rgba(51, 75, 97, 0.349)">
  
    
<nav class="navbar navbar-expand-md navbar-dark bg-primary mb-4">
  <div class="container-fluid">
    <a class="navbar-brand disabled" href="#">DESAFIO PRACTICO 1    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarCollapse">
      <ul class="navbar-nav me-auto mb-2 mb-md-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="index.php">Ejercicio 1</a>
        </li>
        <li class="nav-item">
        <a class="nav-link active" href="guia2.php">Ejercicio 2</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" href="guia3.php" >Ejercicio 3</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" href="guia4.php" >Ejercicio 4</a>
        </li>
      </ul>
    </div>
  </div>
</nav>

<main class="container">
  <div class="bg-light p-5 rounded">
    <h1 style="text-align: center;">Lector de caracteres</h1>
        <form method="POST">
            <div class="input-group">
              <span class="input-group-text">Ingrese un caracter</span>
              <input type="text"required aria-label="First name" name="monto" id="numero" class="form-control">
            </div><br>
            <center><button name="conv" class="btn btn-primary btn-lg">Convertir</button></center>
          </form>
    <br>
    <?php
if(isset($_POST['conv'])  ){
    echo "<h3>";
    $caracter = $_POST['monto'];    
    if (is_numeric($caracter) and strlen($_POST['monto'])==1 ) {
        echo "Numero";
    }
    
    elseif (preg_match('/^[íóúéá]/i', $caracter)==1) {
      echo "Vocal con tilde";
    }
    
    elseif (is_string($caracter) and strlen($_POST['monto'])==1 ) {
      if (ctype_upper($caracter)) {
        if (preg_match('/^[AEIOU ]/i', $caracter)==1) {
          echo " Vocal mayuscula";
        }
        else {
          echo "Consonante mayuscula";
        }
      }
      
      elseif (!ctype_upper($caracter)) {
        if (preg_match('/^[aeiou]/i', $caracter)==1) {
          echo " Vocal sin tilde minuscula";
        }
        
        elseif (ord($caracter) >= 97 and ord($caracter) <= 122 ){
          echo "Consonante minuscula"; 
      }

      else{
        echo "simbolo";} 
      }
    }

    else {
      echo "El carácter ingresado no se puede procesar";
    }

    echo "</h3>";
  }
?>

  </div>
</main>
    <script src="./js/bootstrap.bundle.min.js"></script>      
  </body>
</html>

