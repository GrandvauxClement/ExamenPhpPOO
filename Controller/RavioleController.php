<?php 
    class RavioleController {

        public function detail($id)
        {
            $ravioleManager = new RavioleManager();
            $raviole = $ravioleManager->select($id);
            require 'View/detailRaviole_view.php';
        }

        public function add()
        {
            require 'View/addRaviole_view.php';
        }

        public function addDone() 
        {
            $imageUrl = null;
            $allowedExtension = ['image/png','image/jpeg','image/gif'];
            if(in_array($_FILES['image']['type'],$allowedExtension)){
                if($_FILES['image']['size'] < 80000000){
                    $extension = explode('/', $_FILES['image']['type'])[1];
                    $imageUrl = uniqid().'.'.$extension;
                    move_uploaded_file($_FILES['image']['tmp_name'],'assets/imageRaviole/'.$imageUrl);
                }
    
            }
            $raviole = new Raviole(null, $_POST['ingredient_principal'], $_POST['titre'], $_POST['recette'], $imageUrl);
            $ravioleManager = new RavioleManager();
            $ravioleManager->add($raviole);
            header('Location: ../examMVCphp/index.php?controller=default&action=home');
        }

        public function delete($id) 
        {
            $ravioleManager = new RavioleManager();
            $ravioleManager->delete($id);
            header('Location: ../examMVCphp/index.php?controller=default&action=home');
        }

        public function update($id)
        {
            $ravioleManager = new RavioleManager();
            $raviole = $ravioleManager->select($id);
            require 'View/updateRaviole_view.php';
        }

        public function updatedone($id)
        {
            if($_FILES['image']['size']== 0)
            {
                $ravioleManager = new RavioleManager();
                $raviole = $ravioleManager->select($id);
                $imageUrl= $raviole->getImage();
            }
            else {
                $imageUrl = null;
                $allowedExtension = ['image/png','image/jpeg','image/gif'];
                if(in_array($_FILES['image']['type'],$allowedExtension)){
                    if($_FILES['image']['size'] < 80000000){
                        $extension = explode('/', $_FILES['image']['type'])[1];
                        $imageUrl = uniqid().'.'.$extension;
                        move_uploaded_file($_FILES['image']['tmp_name'],'assets/imageRaviole/'.$imageUrl);
                }
            } 
            }

            $raviole = new Raviole($id, $_POST['ingredient_principal'], $_POST['titre'], $_POST['recette'], $imageUrl);
            $planetsManager = new RavioleManager();
            $planetsManager->update($raviole);
            header('Location: ../examMVCphp/index.php?controller=default&action=home');
        }
    }