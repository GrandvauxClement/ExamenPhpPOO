<html>
    <head>
        <?php require 'Parts/stylesheets.html'; ?>
    </head>
    <body>
        <?php require 'Parts/nav.php'; ?>
        <div class="container">
            <h1 class="text-primary">Bienvenue sur la page premettant d'ajouter une nouvelle recette de raviole </h1>
            <form method="POST" action="../examMVCphp/index.php?controller=raviole&action=addDone" enctype="multipart/form-data">
                <label> Titre  </label>
                <input name="titre" type="text" required class="form-control">

                <label> Les Ingrédients Principaux </label>
                <input name="ingredient_principal" type="text" required class="form-control">
                
                <label> La recette </label>
                <textarea name="recette" type="text"  class="form-control"></textarea>
                
                <label> Image (format accepter: png, jpg, gif)</label>
                <input name="image" type="file" class="form-control">

                <input type="submit" value="Valider" class="btn btn-success">
            </form>
        </div>
        <?php require 'Parts/script.html'; ?>
    </body>
</html>