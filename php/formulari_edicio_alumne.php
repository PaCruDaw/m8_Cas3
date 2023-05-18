<?php 
    session_start();
    require "dbconexio.php";

    $id = $_GET["id"];
  
    $sql = "SELECT *
            FROM Usuaris WHERE id=$id";
    
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // output data of each row
        while ($row = $result->fetch_assoc()) { 

            $nom = $row["nom"];
            $cognom1 = $row["cognom1"];
            $cognom2 = $row["cognom2"];
            $correu = $row["correu"];
            $contrasenya = $row["contrasenya"];
            $roll = $row["roll"];            
            $grupClasse = $row["grupClasse"];

        }

    }?>


<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.84.0">
    <title>Formulari alta material</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.0/examples/checkout/">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" 
      integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" 
      integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>


    <!-- Bootstrap core CSS -->
<link href="../assets/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>:last-child
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
    <link href="./css/form-validation.css" rel="stylesheet">
  </head>
  <body class="bg-light">
    
<div class="container">
  <main >
    <div class="py-5 text-center">
      <img class="d-block mx-auto mb-4" src="../imagenes/logoCombinat.jpg" alt="" width="82" height="67">
      <h2>Alta de material</h2>
      <p class="lead">Omple el següent formulari per a poder insertar un nou alumne.</p>
    </div>

    <div class="row g-5">
      <div class="col-md-7 col-lg-8">
        <h4 class="mb-3">Formulari</h4>
        <form class="needs-validation" novalidate action="../php/update_alumne.php" method="post">
        <input type="hidden" class="form-control" id="id" name = "id" placeholder="" value='<?= $id; ?>' required>
          <div class="row g-3">
            <div class="col-sm-3">
              <label for="lastName" class="form-label">Nom</label>
              <input type="text" class="form-control" id="nom" name = "nom" placeholder="" value='<?= $nom; ?>' required>
              <div class="invalid-feedback">
                El camp etiqueta es obligatori.
              </div>
            </div>
           
            <div class="col-sm-6">
              <label for="lastName" class="form-label">Cognom1</label>
              <input type="text" class="form-control" id="cognom1" name = "cognom1" placeholder="" value='<?= $cognom1; ?>' required>
              <div class="invalid-feedback">
                El camp etiqueta es obligatori.
              </div>
            </div>

            <div class="col-sm-6">
              <label for="lastName" class="form-label">Cognom2</label>
              <input type="text" class="form-control" id="cognom2" name ="cognom2" placeholder="" value='<?= $cognom2; ?>' >
              <div class="invalid-feedback">
                El camp número de serie es obligatori.
              </div>
            </div>

            <div class="col-sm-6">
              <label for="username" class="form-label">Correu Electronic</label>
              <div class="input-group has-validation">
                <input type="text" class="form-control" id="correu" name = "correu" placeholder="" value ='<?= $correu; ?>'>
                <div class="invalid-feedback">
                  El correu es obligatori
                </div>
              </div>
            </div>

            <div class="col-sm-6">
                <label for="username" class="form-label">Contrasenya</label>
                <div class="input-group has-validation">
                  <input type="text" class="form-control" id="contrasenya" name = "contrasenya" placeholder="" value = '<?= $contrasenya; ?>'>
                  <div class="invalid-feedback">
                    Introdueix una MAC valida.
                  </div>
                </div>
            </div>

            <div class="col-sm-6">
                <label for="username" class="form-label">Roll</label>
                <div class="input-group has-validation">
                  <input type="text" class="form-control" id="roll" name = "roll" placeholder="" value = '<?= $roll; ?>'>
                  <div class="invalid-feedback">
                    Introdueix una sace valida.
                  </div>
                </div>
            </div>
            <div           
              class="col-sm-6">
                <label for="lastName" class="form-label">Classe i Grup</label>
                <input type="text" class="form-control" id="grupClasse" name = "grupClasse" placeholder="" value= '<?= $grupClasse; ?>' >
                <div class="invalid-feedback">
                  El grup de clase es obligat.
                </div>
            </div>
          </div>

          <hr class="my-4">
          <button class="w-100 btn btn-primary btn-lg" type="submit">Envia Formulari</button>
        </form>
      </div>
    </div>
  </main>

  <footer class="my-5 pt-5 text-muted text-center text-small">
    <p class="mb-1">&copy; 2022-2023 Company Name</p>
    <ul class="list-inline">
      <li class="list-inline-item"><a href="#">Privacy</a></li>
      <li class="list-inline-item"><a href="#">Terms</a></li>
      <li class="list-inline-item"><a href="#">Support</a></li>
    </ul>
  </footer>
</div>
    <script src="../assets/dist/js/bootstrap.bundle.min.js"></script>

      <script src="./js/form-validation.js"></script>
  </body>
</html>

   

    <?php 
    
    if (!mysqli_query($conn, $sql)): ?>
   
        <META HTTP-EQUIV="REFRESH" CONTENT="0;URL=pagina_inicial.php?ok=-1&search=3">
    <?php endif;
    

    $conn->close();
?>
