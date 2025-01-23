<?php
    // require_once 'Model/AcessDatabase.php';
    require_once '../Model/Cursos.php';

    class CursosController {
        private $cursos;

        public function __construct() {
            $this->cursos = new Cursos();
        }

        public function index() {
            // var_dump('index');die;
            $response = $this->cursos->getCursos();
            return $response;
        }


    }