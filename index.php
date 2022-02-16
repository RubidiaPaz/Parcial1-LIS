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

  <body style="background-color: rgba(95, 120, 143, 0.349)">

<main class="container">
  <div class="bg-light p-5 rounded">
    <h1 style="text-align: center;">Inscripciones de Estudiantes</h1>
      <form action="index.php" method="post">
        <div class="input-group">
          <span class="input-group-text">Materia: </span>
          <input type="text" required aria-label="First name" name="materia" class="form-control">
        </div><br>
        <div class="input-group">
          <span class="input-group-text">Unidades UV: </span>
          <input type="text" required aria-label="First name" name="unidades" class="form-control">
        </div><br>
        <div class="input-group">
          <span class="input-group-text">Matricula: </span>
          <input type="text" required aria-label="First name" name="matricula" class="form-control">
        </div><br>
        <div class="input-group">
          <span class="input-group-text">Grupo: </span>
          <input type="text" required aria-label="First name" name="grupo" class="form-control">
        </div><br>
        <div class="input-group">
          <span class="input-group-text">Salón: </span>
          <input type="text"required aria-label="First name" name="salon" class="form-control">
        </div><br>
        <center><input type="submit" value="Enviar" name="enviar" class="btn btn-primary btn-lg"></center>
      </form>

<?php
if (isset($_POST['enviar'])) {
  $materia= $_POST['materia'];
  $unidades= $_POST['unidades'];
  $matricula= $_POST['matricula'];
  $grupo= $_POST['grupo'];
  $salon= $_POST['salon'];
  

echo "&nbsp; <center><h3>DATOS RECIBIDOS</h3></center>";
echo "<h5>Nombre de materia:  ". $materia."";
echo "<h5>Unidades valorativas (U.V): ". $unidades."</h5>";
echo "<h5>Numero de matricula: ". $matricula."</h5>";
echo "<h5>Salon de clase: ". $salon."</h5>";
}

?>
  </div>
</main>
    <script src="./js/bootstrap.bundle.min.js"></script>      
  </body>
</html>

