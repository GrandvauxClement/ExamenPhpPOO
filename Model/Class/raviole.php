<?php
    class Raviole {
        private $id;
        private $ingredient_principal;
        private $titre;
        private $recette;
        private $image;

        public function __construct($id=null, $ingredient_principal, $titre, $recette, $image=null)
        {
            $this->id = $id;
            $this->ingredient_principal = $ingredient_principal;
            $this->titre = $titre;
            $this->recette = $recette;
            $this->image =$image;
        }

        public function getId(){
            return $this->id;
        }

        public function setId($id){
            $this->id = $id;
        }

        public function getIngredient_principal(){
            return $this->ingredient_principal;
        }

        public function getTitre(){
            return $this->titre;
        }

        public function getRecette(){
            return $this->recette;
        }

        public function getImage(){
            return $this->image;
        }
    }