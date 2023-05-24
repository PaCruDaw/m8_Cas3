<?php 
    session_start();
    require "dbconexio.php";

    $id = $_GET["id"];
  
    $sql = "SELECT *
            FROM Incidencies WHERE id=$id";
    
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // output data of each row
        while ($row = $result->fetch_assoc()) { 

            $informacio = $row["informacio"];
            $dataOberta = $row["dataOberta"];
            $dataTancada = $row["dataTancada"];
            $idAlumne = $row["idAlumne"];
            $idDispositiu = $row["idDispositiu"];
            $idEstat = $row["idEstat"];            

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
    <title>Modificar inciencia</title>

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
      <h2>Modificar incidencia</h2>
      <p class="lead">Omple el següent formulari per modificar una incidencia.</p>
    </div>

    <div class="row g-5">
      <div class="col-md-7 col-lg-8">
        <h4 class="mb-3">Formulari</h4>
        <form class="needs-validation" novalidate action="../php/update_incidencia.php" method="post">
          <div class="row g-3">
          
            <div class="col-sm-3">
              <label for="lastName" class="form-label">DataTancada</label>
              <input type="text" class="form-control" id="dataTancada" name ="dataTancada" placeholder="" value='<?= $dataTancada; ?>' >
              <div class="invalid-feedback">
                El camp número de serie es obligatori.
              </div>
            </div>

            <div class="col-sm-3">
                <label for="username" class="form-label">idEstat</label>
                <div class="input-group has-validation">
                  <input type="text" class="form-control" id="idEstat" name = "idEstat" placeholder="" value='<?= $idEstat; ?>'>
                  <div class="invalid-feedback">
                    Introdueix una sace valida.
                  </div>
                </div>
            </div>

            <div class="col-sm-12">
              <label for="lastName" class="form-label">informacio</label>
              <textarea rows="10" cols="30" type="text" class="form-control" id="informacio" name = "informacio" placeholder="" >
              <?= $informacio; ?>
              </textarea>              <div class="invalid-feedback">
                El camp etiqueta es obligatori.
              </div>
          </div>

          <input type="hidden" class="form-control" id="idAlumne" name = "idAlumne" placeholder="" value='<?= $idAlumne; ?>' >
          <input type="hidden" class="form-control" id="dataOberta" name ="dataOberta" placeholder="" value='<?= $dataOberta; ?>' >
          <input type="hidden" class="form-control" id="id" name = "id" placeholder="" value='<?= $id; ?>' required>
          <input type="hidden" class="form-control" id="idDispositiu" name = "idDispositiu" placeholder="" value='<?= $idDispositiu; ?>'>


          <button class="w-100 btn btn-primary btn-lg" type="submit">Continue to checkout</button>
        </form>
    </div>
  </main>

  <footer class="my-5 pt-5 text-muted text-center text-small">
    <p class="mb-1">&copy; 2017–2021 Company Name</p>
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
