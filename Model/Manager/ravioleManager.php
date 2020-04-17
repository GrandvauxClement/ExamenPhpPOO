<?php
    class RavioleManager extends DbManager {

        public function __construct()
        {
            parent::__construct();
        }

        public function selectAll()
        {
            $ravioles = [];
            $sql = 'SELECT * FROM raviole';
            foreach ($this->bdd->query($sql) as $row) {
                
                    $ravioles[] = new Raviole($row['id'], $row['ingredient_principal'], $row['titre'], $row['recette'], $row['image']);
            }
            return $ravioles;
        }

        public function select($id){
            $requete = $this->bdd->prepare("SELECT * FROM raviole WHERE id=?");
            $requete->bindParam(1,$id);
            $requete->execute();
            $res = $requete->fetch();
            $raviole = new Raviole($res['id'], $res['ingredient_principal'], $res['titre'], $res['recette'], $res['image']);
            return $raviole;
        }

        public function add(Raviole $raviole) 
        {
            $ingredient_principal = $raviole->getIngredient_principal();
            $titre = $raviole->getTitre();
            $recette = $raviole->getRecette();
            $image = $raviole->getImage();
            $requete = $this->bdd->prepare('INSERT INTO raviole (ingredient_principal, titre, recette, image) VALUES (?, ?, ?, ?)');
            $requete->bindParam(1, $ingredient_principal);
            $requete->bindParam(2, $titre);
            $requete->bindParam(3, $recette);
            $requete->bindParam(4, $image);
            $requete->execute();
            $raviole->setId($this->bdd->lastInsertId());
        }

        public function delete($id)
        {
            $requete = $this->bdd->prepare('DELETE FROM raviole where id=?');
            $requete->bindParam(1, $id);
            $requete->execute();
        }

        public function update(Raviole $raviole)
        {
            $ingredient_principal = $raviole->getIngredient_principal();
            $titre = $raviole->getTitre();
            $recette = $raviole->getRecette();
            $image = $raviole->getImage();
            $id = $raviole->getId();
            $requete = $this->bdd->prepare('UPDATE raviole SET ingredient_principal=?, titre=?, recette=?, image=? WHERE id=?');
            $requete->bindParam(1, $ingredient_principal);
            $requete->bindParam(2, $titre);
            $requete->bindParam(3, $recette);
            $requete->bindParam(4, $image);
            $requete->bindParam(5, $id);
            $requete->execute();
            
        }
    }