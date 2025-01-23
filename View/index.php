<?php
// require_once "../Model/Cursos.php";
require_once "../Controller/CursosController.php";

$cursos = new CursosController();

$teste = $cursos->index();
// var_dump($teste);

?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio Revvo - PHP</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <!-- Navbar -->
    <nav class="navbar navbar-light bg-light p-3">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">LEO</a>
            <form class="d-flex">
                <input class="form-control me-2" type="search" placeholder="Pesquisar cursos..." aria-label="Search">
                <div class="dropdown">
                    <a class="btn btn-outline-secondary dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        <img src="https://picsum.photo/50" alt="Profile" class="rounded-circle"> John Doe
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="#">Perfil</a></li>
                        <li><a class="dropdown-item" href="#">Sair</a></li>
                    </ul>
                </div>
            </form>
        </div>
    </nav>

    <!-- Carousel -->
    <div id="mainCarousel" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="https://picsum.photos/1200/400" class="d-block w-100" alt="Curso">
                <div class="carousel-caption d-none d-md-block">
                    <h5>LOREM IPSUM</h5>
                    <p>Aenean laoreet bibendum nulla sed consectetur. Quam sociosqu nascetur ridiculus mus.</p>
                    <a href="#" class="btn btn-primary">Ver Curso</a>
                </div>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#mainCarousel" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#mainCarousel" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>

    <!-- Courses Section -->
    <div class="container my-5">
        <h3 class="mb-4">Meus Cursos</h3>
        <div class="row g-4">
            <!-- Course Card -->
            <div class="col-md-3">
                <div class="card">
                    <img src="https://picsum.photos/250/150" class="card-img-top" alt="Curso">
                    <div class="card-body">
                        <h5 class="card-title">PELLENTESQUE MALESUADA</h5>
                        <p class="card-text">Cras blandit tempus porttitor. Nulla vitae elit libero.</p>
                        <a href="#" class="btn btn-success">Ver Curso</a>
                    </div>
                </div>
            </div>
            <!-- Repeat the card for each course -->
            <div class="col-md-3">
                <div class="card">
                    <img src="https://picsum.photos/250/150" class="card-img-top" alt="Curso">
                    <div class="card-body">
                        <h5 class="card-title">PELLENTESQUE MALESUADA</h5>
                        <p class="card-text">Cras blandit tempus porttitor. Nulla vitae elit libero.</p>
                        <a href="#" class="btn btn-success">Ver Curso</a>
                    </div>
                </div>
            </div>
            <!-- Add More Cards -->
            <div class="col-md-3">
                <div class="card">
                    <img src="https://picsum.photos/250/150" class="card-img-top" alt="Curso">
                    <div class="card-body">
                        <h5 class="card-title">PELLENTESQUE MALESUADA</h5>
                        <p class="card-text">Cras blandit tempus porttitor. Nulla vitae elit libero.</p>
                        <a href="#" class="btn btn-success">Ver Curso</a>
                    </div>
                </div>
            </div>
            <!-- Add Course Button -->
            <div class="col-md-3 d-flex justify-content-center align-items-center">
                <div class="card border-dashed" style="text-align: center; border: 2px dashed #ddd;">
                    <div class="card-body">
                        <i class="bi bi-plus-circle" style="font-size: 2rem; color: #888;"></i>
                        <h5 class="card-title">Adicionar Curso</h5>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Footer -->
    <footer class="bg-light text-center py-4">
        <div class="container">
            <p class="mb-1">Copyright 2017 - All rights reserved.</p>
            <p>Contato: contato@leolearning.com | (21) 98765-3434</p>
            <div>
                <a href="#" class="text-secondary me-3">Twitter</a>
                <a href="#" class="text-secondary me-3">Facebook</a>
                <a href="#" class="text-secondary">LinkedIn</a>
            </div>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>