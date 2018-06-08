<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="stylesheet" type="text/css" href="<?php echo RUTA_URL?>/css/estilos.css">
    <link rel="stylesheet" type="text/css" href="<?php echo RUTA_URL?>/css/dashboard.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css">

    <title><?php echo NOMBRESITIO ?></title>
</head>
<body>
    
    


    <nav class="navbar navbar-dark fixed-top bg-dark flex-md-nowrap p-0 shadow">
      <a class="navbar-brand col-sm-3 col-md-6 mr-0" href="paginas/articulo">Inspirate UNI</a>
      <input class="form-control form-control-dark w-100" type="text" placeholder="Search" aria-label="Search">
      <ul class="navbar-nav px-3">
        <li class="nav-item text-nowrap">
          <a class="nav-link" href="../../Project-MVC01/login">Sign out</a>
        </li>
      </ul>
    </nav>
    
    <div class="container-fluid">
        <div class="row">
            <nav class="col-md-2 d-none d-md-block bg-light sidebar">
                <div class="sidebar-sticky">
                <ul class="nav flex-column">
                    <li class="nav-item">
                    <a class="nav-link active" href="#">
                        <span data-feather="home"></span>
                        Home <span class="sr-only">(current)</span>
                    </a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link" href="index">
                        <span data-feather="file"></span>
                        Miembros Directiva
                    </a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link" href="#">
                        <span data-feather="shopping-cart"></span>
                        Talleres Academiscos
                    </a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link" href="#">
                        <span data-feather="users"></span>
                        Talleres Culturales
                    </a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link" href="#">
                        <span data-feather="bar-chart-2"></span>
                        Tours Facultades
                    </a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link" href="#">
                        <span data-feather="layers"></span>
                        Charlas
                    </a>
                    </li>
                </ul>

                <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted">
                    <span>Saved reports</span>
                    <a class="d-flex align-items-center text-muted" href="#">
                    <span data-feather="plus-circle"></span>
                    </a>
                </h6>
                <ul class="nav flex-column mb-2">
                    <li class="nav-item">
                    <a class="nav-link" href="#">
                        <span data-feather="file-text"></span>
                        Current month
                    </a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link" href="#">
                        <span data-feather="file-text"></span>
                        Last quarter
                    </a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link" href="#">
                        <span data-feather="file-text"></span>
                        Social engagement
                    </a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link" href="#">
                        <span data-feather="file-text"></span>
                        Year-end sale
                    </a>
                    </li>
                </ul>
                </div>
            </nav> 