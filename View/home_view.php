<html>
    <head>
        <?php require 'Parts/stylesheets.html'; ?>
    </head>
    <body>
        <?php require 'Parts/nav.php'; ?>
        <h1 class="text-center text-primary">Bienvenue sur la page listant les recette de raviole </h1>
       
        <table class="table table-dark">
            <thead>
                <td scope="col"> Id</td>
                <td scope="col"> Ingrédients Principaux </td>
                <td scope="col"> Titre</td>
                <td scope="col"> Recette</td>
                <td scope="col"> File </td>
                <td scope="col" >Action </td>
            </thead>
            <tbody>
                <?php
                    foreach($ravioles as $raviole){
                ?>    
                <tr>
                    <td><?php echo($raviole->getId()); ?></td>
                    <td><?php echo($raviole->getIngredient_principal()); ?></td>
                    <td><?php echo($raviole->getTitre()); ?></td>
                    <td><?php echo($raviole->getRecette()); ?></td>
                    <td>
                        <?php if($raviole->getImage() != null)
                        {
                            echo('<img src="assets/imageRaviole/'.$raviole->getImage().'" style="max-width:200px;"></td>');
                        }
                        else {
                            echo('Pas d\'image associer à cette recette ! :/');
                        }
                        ?>
                        
                    <td>
                        <a class="btn btn-primary" href="../examMVCphp/index.php?controller=raviole&action=detail&id=<?php echo $raviole->getId()?>">Voir le détail</a><br>
                        <a class="btn btn-danger" href="../examMVCphp/index.php?controller=raviole&action=delete&id=<?php echo $raviole->getId()?>">Supprimer </a><br>
                        <a class="btn btn-success" href="../examMVCphp/index.php?controller=raviole&action=update&id=<?php echo $raviole->getId()?>">Modifier </a>
                    </td>
                </tr>
                <?php
                    }
                ?>
            </tbody>
        </table>

        <?php require 'Parts/script.html'; ?>
    </body>
</html>