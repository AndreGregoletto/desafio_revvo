<?php
    require_once "AcessDatabase.php";

    class Cursos extends AccessDatabase {

        public function getCursos() {
            try {
                $sql = "
                    SELECT 
                          id
                        , image
                        , title
                        , description
                        , url_video
                    FROM courses";

                $result = $this->aD->query($sql);
                $aCursos = $result->fetchAll(PDO::FETCH_ASSOC);

                return $aCursos;
            } catch (\Throwable $th) {
                echo "<pre>";var_dump($th);
                return [];
            }

        }

        public function create($data, $file) {
            try {
                $imagePath = $this->uploadImage($data['title'], $file);
    
                $stmt = $this->aD->prepare("INSERT INTO courses (image, title, description, url_video) 
                                             VALUES (:image, :title, :description, :url_video)");
                $stmt->bindParam(':image', $imagePath);
                $stmt->bindParam(':title', $data['title']);
                $stmt->bindParam(':description', $data['description']);
                $stmt->bindParam(':url_video', $data['url_video']);
    
                $stmt->execute();
                return true;
            } catch (\Throwable $th) {
                return false;  // Retorna false em caso de erro
            }
        }
    
        private function uploadImage($title, $file) {
            $uploadDir = '../Public/Image/';  
            $imageName = strtolower(str_replace(' ', '-', $title)) . '-image.' . pathinfo($file['name'], PATHINFO_EXTENSION);
            $imagePath = $uploadDir . $imageName;
    
            if (file_exists($imagePath)) {
                unlink($imagePath);
            }

            if (move_uploaded_file($file['tmp_name'], $imagePath)) {
                return $imagePath; 
            } else {
                return false;  
            }
        }

    }