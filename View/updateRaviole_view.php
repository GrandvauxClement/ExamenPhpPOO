<html>
    <head>
        <?php require 'Parts/stylesheets.html'; ?>
    </head>
    <body>
        <?php require 'Parts/nav.php'; ?>
        <div class="container">
            <h1 class="text-primary">Bienvenue sur la page premettant de modifier recette de raviole </h1>
            <form method="POST" action="../examMVCphp/index.php?controller=raviole&action=updateDone&id=<?php echo($raviole->getId()); ?>" enctype="multipart/form-data">
                <label> Titre  </label>
                <input name="titre" type="text" class="form-control" required value="<?php echo($raviole->getTitre()); ?>">

                <label> Les Ingrédients Principaux </label>
                <input name="ingredient_principal" type="text" class="form-control" required value="<?php echo($raviole->getIngredient_principal()); ?>">
                
                <label> La recette </label>
                <textarea name="recette" type="text" class="form-control"> <?php echo($raviole->getRecette()); ?></textarea> 
                <?php 
                    if($raviole->getImage()!= null)
                    {
                        echo('<legend>Actuel image representant cette recette</legend>
                        <img style="max-width:300px" class="mt-1" src="assets/imageRaviole/'.$raviole->getImage().'"> <br>');
                    }
                ?>
                
                <label class="mt-3">  Image (format accepter: png, jpg, gif)</label><br>
                <input name="image" type="file" class="mb-5 btn btn-secondary">

                <input type="submit" value="Valider" class="btn btn-success d-block m-auto">
            </form>
        </div>
        <?php require 'Parts/script.html'; ?>
    </body>
</html>