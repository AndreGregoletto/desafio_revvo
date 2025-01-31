<?php
require_once "../Controller/CursosController.php";

$aCourses = new CursosController();

$courses = $aCourses->getCursos();

?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio Revvo - PHP</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="../Public/CSS/style.css">
</head>
<body>
    <!-- Navbar -->
    <nav class="navbar navbar-light bg-light p-3">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">LEO</a>
            <form class="d-flex">
                <input class="form-control me-2" type="search" placeholder="Pesquisar cursos..." aria-label="Search">
                <div class="dropdown">
                    <a 
                        class="btn btn-outline-secondary dropdown-toggle" 
                        href="#" 
                        role="button" 
                        data-bs-toggle="dropdown" 
                        aria-expanded="false"
                    >
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
            <?php foreach ($courses as $course) { ?>
                <div class="col-md-3" >
                    <div class="card" style="min-height: 400px !important;">
                        <img src="<?= $course['image'] ?>" class="img-fluid" alt="Curso" style="max-height: 200px; object-fit: cover;">
                        <div class="card-body d-flex flex-column" style="height: 200px;">
                            <h5 class="card-title"> <?= $course['title'] ?> </h5>
                            <p class="card-text"> <?= $course['description'] ?> </p>
                            <a href="<?= $course['url_video'] ?>" class="btn btn-success w-100 mt-auto"> Ver Curso </a>
                        </div>
                    </div>
                </div>
            <?php } ?>

            <!-- Add Course Button -->
            <div class="col-md-3 d-flex justify-content-center align-items-center">
                <div class="card border-dashed" style="text-align: center; border: 2px dashed #ddd;">
                    <div class="card-body">
                        <i class="bi bi-plus-circle" style="font-size: 2rem; color: #888;"></i>
                        <h5 
                            class="card-title" 
                            style="cursor: pointer;" 
                            class="btn btn-primary" 
                            data-bs-toggle="modal" 
                            data-bs-target="#exampleModal" 
                            data-bs-whatever="@mdo"
                        >
                            Adicionar Curso
                        </h5>
                    </div>
                </div>
            </div>
        </div>
    </div>

<?php include_once "modalCourses.html"; ?>

<footer class="bg-light py-4">
    <div class="container d-flex justify-content-between align-items-center">

        <div class="d-flex flex-column text-start">
            <h4 class="mb-1">LEO</h4>
            <p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
        </div>

        <div class="d-flex flex-column text-end">
            <p class="mb-1">Contato:</p>
            <p class="mb-0">contato@leolearning.com | (21) 98765-3434</p>
        </div>

        <div class="d-flex flex-column text-end">
            <a href="#" class="text-secondary me-3">Twitter</a>
            <a href="#" class="text-secondary me-3">Facebook</a>
            <a href="#" class="text-secondary">LinkedIn</a>
        </div>
    </div>
</footer>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <script src="../Public/JavaScript/NewCourses.js"></script>
</body>
</html>