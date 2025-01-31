<?php
require_once '../Model/Cursos.php';

class CursosController {
    private $cursos;

    public function __construct() {
        $this->cursos = new Cursos();
    }

    public function index() {
        header("Location: http://desafio_revvo_3.test/View/");
        exit(); 
    }

    public function getCursos() {
        $response = $this->cursos->getCursos();

        return $response;
    }

    public function create($data) {
        try {
            $course = [
                  'title'       => $data['title']
                , 'description' => $data['description']
                , 'url_video'   => $data['url_video']
            ];

            $this->cursos->create($course, $_FILES['image']);

            return $this->index();
        } catch (\Throwable $th) {
            return $th->getMessage();
            return $this->index();
        }
    }
}

if (isset($_GET['action'])) {
    $controller = new CursosController();

    switch ($_GET['action']) {
        case 'create':
            if ($_SERVER['REQUEST_METHOD'] === 'POST') {
                $controller->create($_POST);
            }
            break;

        case 'index':
        default:
            $controller->index();
            break;
    }
}
