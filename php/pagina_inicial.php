<?php
    session_start();
    include "../html/capçelera_pagina_inicial.html";

    if (!isset($_SESSION["user"])): ?>
      
      <META HTTP-EQUIV="REFRESH" CONTENT="0;URL=../index.php">
          
  <?php endif; ?>

    <?php //vista opcions de lateral per a alumnes
    if (($_SESSION["profe"] == 0) ): ?>      
        <a class="nav-link" href="pagina_inicial.php?search=1">
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
        <li class="nav-item">
            <a class="nav-link" href="pagina_inicial.php?search=1">
              <span data-feather="file"></span>
                Gestió Sol.licituts
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="pagina_inicial.php?search=2">
              <span data-feather="shopping-cart"></span>
                Gestió Dispositius
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
        <h1 class="h2">Dashboard</h1>
        <div class="btn-toolbar mb-2 mb-md-0">
          <div class="btn-group me-2">
            <button type="button" class="btn btn-sm btn-outline-secondary">Share</button>
            <button type="button" class="btn btn-sm btn-outline-secondary">Export</button>
          </div>
          <button type="button" class="btn btn-sm btn-outline-secondary dropdown-toggle">
            <span data-feather="calendar"></span>
            This week
          </button>
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
          <h2>a determinar</h2>        
        <?php endif; ?>
        <?php  if ($_GET["search"] == 1): ?>
          <h2>Gestió de solicituts</h2>
        <?php endif; ?>
        <?php  if ($_GET["search"] == 2): ?>
          <h2>Gestió de dispositius</h2>
        <?php endif; ?>
        <?php  if ($_GET["search"] == 3): ?>
          <h2>Gestio Alumnat</h2>
        <?php endif; ?>
        <?php  if ($_GET["search"] == 4): ?>
          <h2>Gestio Incidencies</h2>
        <?php endif; ?>
      <?php endif; ?>

      <div class="table-responsive">
        <table class="table table-striped table-sm">
          <thead>

          <?php //inici vista alumne capçelera taula
           if (($_SESSION["profe"] == 0) ): ?> 
            <?php if (!isset($_GET["search"])): ?>
              <tr>
                <th scope="col">id</th>
                <th scope="col">Tipus</th>
                <th scope="col">Data prestec</th>
                <th scope="col">Header</th>
                <th scope="col">Header</th>
              </tr>
            <?php endif; ?>
            <?php  if ($_GET["search"] == 1): ?>
              <tr>
                <th scope="col">id</th>
                <th scope="col">Incidencia</th>
                <th scope="col">Data prestec</th>
                <th scope="col">Header</th>
                <th scope="col">Header</th>
              </tr>
            <?php endif; ?>
            <?php  if ($_GET["search"] == 2): ?>
              <tr>
                <th scope="col">id</th>
                <th scope="col">Sol.licitud</th>
                <th scope="col">Data prestec</th>
                <th scope="col">Header</th>
                <th scope="col">Header</th>
              </tr>        <?php endif; ?>
          <?php endif; ?>

          <?php //Inici vista professor capçelera taula
          if (($_SESSION["profe"] == 1) ): ?> 
            <?php if (!isset($_GET["search"])): ?>
              <tr>
                <th scope="col">id</th>
                <th scope="col">Tipus</th>
                <th scope="col">Data prestec</th>
                <th scope="col">Header</th>
                <th scope="col">Header</th>
              </tr>
            <?php endif; ?>
            <?php  if ($_GET["search"] == 1): ?>
              <tr>
                <th scope="col">id</th>
                <th scope="col">Incidencia</th>
                <th scope="col">Data prestec</th>
                <th scope="col">Header</th>
                <th scope="col">Header</th>
              </tr>
            <?php endif; ?>
            <?php  if ($_GET["search"] == 2): ?>
              <tr>
                <th scope="col">id</th>
                <th scope="col">Sol.licitud</th>
                <th scope="col">Data prestec</th>
                <th scope="col">Header</th>
                <th scope="col">Header</th>
              </tr>       
            <?php endif; ?>
            <?php  if ($_GET["search"] == 3): ?>
                <tr>
                  <th scope="col">id</th>
                  <th scope="col">Sol.licitud</th>
                  <th scope="col">Data prestec</th>
                  <th scope="col">Header</th>
                  <th scope="col">Header</th>
                </tr>        
            <?php endif; ?>
            <?php  if ($_GET["search"] == 4): ?>
                <tr>
                  <th scope="col">id</th>
                  <th scope="col">Sol.licitud</th>
                  <th scope="col">Data prestec</th>
                  <th scope="col">Header</th>
                  <th scope="col">Header</th>
                </tr>        
            <?php endif; ?>
          <?php endif; ?>

          </thead>
          <tbody>

            <?php
             //reserques per alumnes
              if (($_SESSION["profe"] == 0) ) {
                if (!isset($_GET["search"])):
                  require "assignacions_alumne.php"; 
                endif;
                if ($_GET["search"]==1):
                  require "reserca_incidencies.php";
                endif;
              }
              //reserques de professor
              if (($_SESSION["profe"] == 1) ) {
                if (!isset($_GET["search"])):
                  require "assignacions_alumne.php"; 
                endif;
                if ($_GET["search"]==1):
                  require "reserca_incidencies.php";
                endif;
              }
            
            ?>
          </tbody>
        </table>
      </div>
  </div>
</div>

    <script src="../js/dashboard.js"></script>

      <script src="https://cdn.jsdelivr.net/npm/feather-icons@4.28.0/dist/feather.min.js" integrity="sha384-uO3SXW5IuS1ZpFPKugNNWqTZRRglnUJK6UAZ/gxOX80nxEkN9NcGZTftn6RzhGWE" crossorigin="anonymous"></script><script src="https://cdn.jsdelivr.net/npm/chart.js@2.9.4/dist/Chart.min.js" integrity="sha384-zNy6FEbO50N+Cg5wap8IKA4M/ZnLJgzc6w2NqACZaK0u0FXfOWRRJOnQtpZun8ha" crossorigin="anonymous"></script><script src="dashboard.js"></script>
  </body>
</html>
