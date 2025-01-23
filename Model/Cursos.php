<?php
    require_once "AcessDatabase.php";

    class Cursos extends AccessDatabase {

        public function getCursos() {
            try {
                $sql = "
                    SELECT 
                          id
                        , imagem
                        , titulo
                        , descricao
                    FROM cursos";

                $result = $this->aD->query($sql);
                $aCursos = $result->fetchAll(PDO::FETCH_ASSOC);

                return $aCursos;
            } catch (\Throwable $th) {
                echo "<pre>";var_dump($th);
                return [];
            }

        }

    }