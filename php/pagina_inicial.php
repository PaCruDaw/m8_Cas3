<?php
    session_start();
    include "../html/capçelera_pagina_inicial.html";

    if (!isset($_SESSION["user"])): ?>
      
      <META HTTP-EQUIV="REFRESH" CONTENT="0;URL=../index.php">
          
  <?php endif; ?>

    <?php if (($_SESSION["profe"] == 0) ): ?>      
        <a class="nav-link" href="../php/Pagina_alumnes_inciden.php">
                    <span data-feather="file"></span>
                    Incidencies
                </a>
                <a class="nav-link" href="#">
                    <span data-feather="file"></span>
                    Solicitar material
                 </a>
    <?php endif; ?>
    <?php if (($_SESSION["profe"] == 1) ): ?>
        <li class="nav-item">
            <a class="nav-link" href="#">
              <span data-feather="file"></span>
                Gestió Sol.licituts
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">
              <span data-feather="shopping-cart"></span>
                Gestió Dispositius
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">
              <span data-feather="users"></span>
               Gestió Alumnat
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">
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

      <h2>Els meus dispositius</h2>
      <div class="table-responsive">
        <table class="table table-striped table-sm">
          <thead>
            <tr>
              <th scope="col">id</th>
              <th scope="col">Tipus</th>
              <th scope="col">Data prestec</th>
              <th scope="col">Header</th>
              <th scope="col">Header</th>
            </tr>
          </thead>
          <tbody>
            <?php require "../php/assignacions_alumne.php"; ?>
          </tbody>
        </table>
      </div>
  </div>
</div>

    <script src="../js/dashboard.js"></script>

      <script src="https://cdn.jsdelivr.net/npm/feather-icons@4.28.0/dist/feather.min.js" integrity="sha384-uO3SXW5IuS1ZpFPKugNNWqTZRRglnUJK6UAZ/gxOX80nxEkN9NcGZTftn6RzhGWE" crossorigin="anonymous"></script><script src="https://cdn.jsdelivr.net/npm/chart.js@2.9.4/dist/Chart.min.js" integrity="sha384-zNy6FEbO50N+Cg5wap8IKA4M/ZnLJgzc6w2NqACZaK0u0FXfOWRRJOnQtpZun8ha" crossorigin="anonymous"></script><script src="dashboard.js"></script>
  </body>
</html>
