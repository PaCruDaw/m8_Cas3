<?php

    session_start();
    //include "../html/capçelera_pagina_inicial.html";

    if (!isset($_SESSION["user"])): ?>
      
      <META HTTP-EQUIV="REFRESH" CONTENT="0;URL=../../index.php">
          
  <?php endif; ?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.84.0">
    <title>Formulari alta material</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/boxicons/2.1.0/css/boxicons.min.css" integrity="sha512-pVCM5+SN2+qwj36KonHToF2p1oIvoU3bsqxphdOIWMYmgr4ZqD3t5DjKvvetKhXGc/ZG5REYTT6ltKfExEei/Q==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/MaterialDesign-Webfont/5.3.45/css/materialdesignicons.css" integrity="sha256-NAxhqDvtY0l4xn+YVa6WjAcmd94NNfttjNsDmNatFVc=" crossorigin="anonymous" />
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
    
    <link rel="stylesheet" href="../css/pagina_principal.css">

  </head>

<body>  
    <header class="navbar navbar-dark sticky-top bg-dark flex-md-nowrap p-0 shadow">
      <a class="navbar-brand col-md-3 col-lg-2 me-0 px-3" href="#">IES MONTSIA</a>
      <button class="navbar-toggler position-absolute d-md-none collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <input class="form-control form-control-dark w-100" type="text" placeholder="Search" aria-label="Search">
      <div class="navbar-nav">
        <div class="nav-item text-nowrap">
          <a class="nav-link px-3" href="../php/tabla_logs.php?accio=0" style="color:white;">Sign out</a>
        </div>
      </div>
    </header>
    <div class="container-fluid">
      <div class="row">
        <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
          <div class="position-sticky pt-3">
            <ul class="nav flex-column">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="../php/pagina_inicial.php" style="color:#3b76e1;" >
                  <span data-feather="home"></span>
                    <?php echo "Pagina inicial ".$_SESSION["user"]; ?>
                </a>
              </li>
    
    
        <?php //vista opcions de lateral per a alumnes
        if (($_SESSION["profe"] == 0) ): ?>      
            <a class="nav-link" href="pagina_inicial.php?search=1" style="color:black">
                        <span data-feather="file"></span>
                        Incidencies
                    </a>
                    <a class="nav-link" href="pagina_inicial.php?search=2">
                        <span data-feather="file"></span>
                        Solicitar material
                     </a>
        <?php endif; ?>
    
        <?php //vistas opcions de lateral per a mestres
        if (($_SESSION["profe"] == 1) ): ?>
            <li class="nav-item" style="color:black;">
                <a class="nav-link" href="pagina_inicial.php?search=1" >
                  <span data-feather="file"></span>
                    Gestió Assignacions
                </a>
              </li>
              <li class="nav-item" >
                <a class="nav-link" href="pagina_inicial.php?search=2">
                  <span data-feather="shopping-cart"></span>
                    Gestió Material
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="pagina_inicial.php?search=3">
                  <span data-feather="users"></span>
                   Gestió Alumnat
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="pagina_inicial.php?search=4">
                  <span data-feather="users"></span>
                   Gestió Incidencies
                </a>
              </li>
        <?php endif; ?> 
     
              </li>
            </ul>
          </div>
        </nav>
    
        <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
          <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
              <?php 
                      if ($_GET["ok"]==0) {
                        echo '<h1 class="h2" style ="color:green"></h1>'; 
                      } 
                      if ($_GET["ok"]==1) {
                        echo '<h1 class="h2" style ="color:green">Operació realitzada correctament.</h1>'; 
                      } 
                      if ($_GET["ok"]==-1) {
                        echo "<h1 class='h2' style ='color:red'>S'ha produït un error.</h1>"; 
                      } 
              ?>
            <div class="btn-toolbar mb-2 mb-md-0">
              <?php //vista boto per a alumne
                if (($_SESSION["profe"] == 0) ):
                  if ($_GET["search"] == 1): ?>
                    <button type="button" class="btn btn-sm btn-outline-secondary " onclick = "location='../html/Pagina_reserca_incidencies.html'" > 
                      <span data-feather="Sol.licitar"></span>
                        Crear Incidencia
                    </button>
                  <?php endif; 
                  if ($_GET["search"] == 2): ?>
                    <button type="button" class="btn btn-sm btn-outline-secondary ">
                      <span data-feather="Sol.licitar"></span>
                        Nova sol.licitut
                    </button>
                  <?php endif; ?>
                <?php endif; 

                if (($_SESSION["profe"] == 1) ):  //vista professor boto
                  if ($_GET["search"] == 2): ?>
                    <button type="button" class="btn btn-sm btn-outline-secondary " onclick = "location='../html/formulari_material.html'"  >
                      <span data-feather="Sol.licitar"></span>
                        Alta material
                    </button>
                  <?php  endif;
                  if ($_GET["search"] == 3): ?>
                    <button type="button" class="btn btn-sm btn-outline-secondary " onclick = "location='../html/formulari_alta_alumnes.html'" > 
                      <span data-feather="Comunicar"></span>Alta Alumne
                    </button>
                  <?php endif; 
                endif; ?>
            </div>
          </div>
    
          <?php //vista titols per a alumne
          if (($_SESSION["profe"] == 0) ): ?> 
            <?php if (!isset($_GET["search"])): ?>
              <h2>Els meus dispositius assignats</h2>        
            <?php endif; ?>
            <?php  if ($_GET["search"] == 1): ?>
              <h2>Les meues incidencies</h2>
            <?php endif; ?>
            <?php  if ($_GET["search"] == 2): ?>
              <h2>Les meues sol.licituts de material</h2>
            <?php endif; ?>
          <?php endif; ?>
    
          <?php //vistes titols per a professor
          if (($_SESSION["profe"] == 1) ): ?> 
            <?php if (!isset($_GET["search"])): ?>
              <h2>Reserques a la base dades</h2>        
            <?php endif; ?>
            <?php  if ($_GET["search"] == 1): ?>
              <h2>Gestió de solicituts</h2>
            <?php endif; ?>
            <?php  if ($_GET["search"] == 2): ?>
              <h2>Gestió de Material</h2>
            <?php endif; ?>
            <?php  if ($_GET["search"] == 3): ?>
              <h2>Gestio Alumnat</h2>
            <?php endif; ?>
            <?php  if ($_GET["search"] == 4): ?>
              <h2>Gestio Incidencies</h2>
            <?php endif; ?>
          <?php endif; ?>
    
<div class="container">
  
  <div class="row">
      <div class="col-lg-12">
          <div class="">
              <div class="table-responsive">
                  <table class="table project-list-table table-nowrap align-middle table-borderless">
                      <thead>
                      <?php //vista titols per a alumne
                        if ($_SESSION["profe"] == 0) : 
                          if (!isset($_GET["search"])): ?>
                            <tr>
                                <th scope="col" class="ps-4" style="width: 50px;">
                                    <div class="form-check font-size-16"><input type="checkbox" class="form-check-input" id="contacusercheck" /><label class="form-check-label" for="contacusercheck"></label></div>
                                </th>
                                <th scope="col">Name</th>
                                <th scope="col">Position</th>
                                <th scope="col">Email</th>
                                <th scope="col">Projects</th>
                                <th scope="col" style="width: 200px;">Action</th>
                            </tr>
                          <?php endif; ?>
                          <?php  if ($_GET["search"] == 1): ?>                            
                            <tr>
                                <th scope="col" class="ps-4" style="width: 50px;">
                                    <div class="form-check font-size-16"><input type="checkbox" class="form-check-input" id="contacusercheck" /><label class="form-check-label" for="contacusercheck"></label></div>
                                </th>
                                <th scope="col">Id Incidencia</th>
                                <th scope="col">Position</th>
                                <th scope="col">Email</th>
                                <th scope="col">Projects</th>
                                <th scope="col" style="width: 200px;">Action</th>
                            </tr>
                          <?php endif;?>  
                          <?php  if ($_GET["search"] == 2): ?>                           
                            <tr>
                                <th scope="col" class="ps-4" style="width: 50px;">
                                    <div class="form-check font-size-16"><input type="checkbox" class="form-check-input" id="contacusercheck" /><label class="form-check-label" for="contacusercheck"></label></div>
                                </th>
                                <th scope="col">Solicitut</th>
                                <th scope="col">Position</th>
                                <th scope="col">Email</th>
                                <th scope="col">Projects</th>
                                <th scope="col" style="width: 200px;">Action</th>
                            </tr>
                          <?php endif;
                        endif;
                        if ($_SESSION["profe"] == 1) : //vistas profesor columnas titulos
                            if ($_GET["search"]==1) { ?>
                                <tr>
                                  <th>id</th>
                                  <th>idAlumne</th>
                                  <th>idMaterial</th>
                                  <th>dataInici</th>
                                  <th>dataFinal</th>
                                  <th> Action</th> 
                                </tr>        
                            <?php }
                            if ($_GET["search"] == 2): ?> 
                                <tr>
                                  <th>id</th>
                                  <th>idTipus</th>
                                  <th>idInventari</th>
                                  <th>etiqueta</th>
                                  <th>numSerie</th>
                                  <th>macEthernet</th>
                                  <th>macWifi</th>
                                  <th>SACE</th>
                                  <th>dataAdquisicio</th>
                                  <th>idUbicacio</th>
                                  <th> Action</th> 
                                </tr>                         
                            <?php endif;
                          endif; ?>

                      </thead>
                      <tbody>
                        <?php 
                          if ($_SESSION["profe"] == 0) {
                            if (!isset($_GET["search"])) {
                              require 'assignat_alumne.php'; 
                            } 
                          } 
                          //reserques de professor
                          if (($_SESSION["profe"] == 1) ) {
                            if (!isset($_GET["search"])) { //no existeix search ?>
                              <div class="form-group col-md-12">
                                <h1>Reserca de material en les aules</h1>
                                  <form action="#" method ="get">
                                      <label for="fname">Ubicació:</label>
                                      <input class = "" type="text" id="aula" name="aula">
                                      <label for="fname">Tipus material:</label>
                                      <input type="text" id="tipus" name="tipus">
                                      <button class="btn btn-sm btn-primary" type="submit">Envia consulta</button><br>
                                  </form>
                                  
                              </div>
                              <div style="margin: top 20px;">
                                <h1>Reserca de material assignat al alumnat</h1>
                                  <form action="#" method ="get">
                                      <label for="fname">Reserca alumne:</label>
                                      <input type="text" id="alumne" name="alumne">
                                      <label for="fname">Tipus material:</label>
                                      <input type="text" id="tipus" name="tipus">
                                      <button class="btn btn-sm btn-primary" type="submit">Envia consulta</button><br>
                                  </form>
                                  
                              </div>
                            <?php  
                              if (isset($_GET["aula"])) {
                                require "reserques_mestre_material.php"; 
                              }
                              if (isset($_GET["alumne"])) {
                                require "reserques_mestre_alumnat.php"; 

                              }                                
                            }
                            if ($_GET["search"]==1){
                              require "reserca_assignacions.php";
                            }
                            if ($_GET["search"]==2){
                              require "reserca_material.php";
                            }
                            if ($_GET["search"]==3){
                              require "reserca_alumnes.php";
                            }
                            if ($_GET["search"]==4){
                              require "reserca_incidencies.php";
                            }
                          } ?>
                          
                      </tbody>
                  </table>
              </div>
          </div>
      </div>
  </div>
  <div class="row g-0 align-items-center pb-4">
      <div class="col-sm-6">
          <div><p class="mb-sm-0">Showing 1 to 10 of 57 entries</p></div>
      </div>
      <div class="col-sm-6">
          <div class="float-sm-end">
              <ul class="pagination mb-sm-0">
                  <li class="page-item disabled">
                      <a href="#" class="page-link"><i class="mdi mdi-chevron-left"></i></a>
                  </li>
                  <li class="page-item active"><a href="#" class="page-link">1</a></li>
                  <li class="page-item"><a href="#" class="page-link">2</a></li>
                  <li class="page-item"><a href="#" class="page-link">3</a></li>
                  <li class="page-item"><a href="#" class="page-link">4</a></li>
                  <li class="page-item"><a href="#" class="page-link">5</a></li>
                  <li class="page-item">
                      <a href="#" class="page-link"><i class="mdi mdi-chevron-right"></i></a>
                  </li>
              </ul>
          </div>
      </div>
  </div>
</div>

</body>
</html>