<html>
    <head>
        <?php require 'Parts/stylesheets.html'; ?>
    </head>
    <body class="container-fluid">
        <?php require 'Parts/nav.php'; ?>
        <h2 class="mb-5 text-center "> <span class="text-primary"><?php echo($raviole->getTitre()); ?> </span></h2>
        <div class="row mt-5">
            <div class="col-4 my-auto ml-5">
                <?php 
                    if($raviole->getImage()!= null)
                    {
                        echo('<img style="max-width:400px" src="assets/imageRaviole/'.$raviole->getImage().'" alt=" '.$raviole->getTitre().'">');
                    }
                    else {
                        echo('<h2> Pas de photo disponnible pour '.$raviole->getTitre().'</h2>
                        <a href="../examMVCphp/index.php?controller=raviole&action=update&id='.$raviole->getId().'">Ajouter une image à votre recette en cliquant ici !</a>');
                    }
                ?>
            </div>
                <div class="ml-5 col ">
                    
                    <h3 class="mb-5">Ingrédients : <br> <span class="text-danger"><?php echo($raviole->getIngredient_principal()); ?> </span></h3>
                    <h3 class="mb-5">Préparation : <br> <span class="text-danger"><?php echo($raviole->getRecette()); ?> </span></h3>
                </div>
            
        </div>
    <?php require 'Parts/script.html'; ?>
    </body>
</html>