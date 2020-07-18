<?php
session_start();
if (!$_SESSION['admin']) {
    $_SESSION['admin'] = ' ';
    $_SESSION['inscription'] = "S'inscrire";
    $_SESSION['deconnecter'] = "Se connecter";
    $_SESSION['deconnection'] = "index";
}
if(!$_SESSION['motDePasseUt']){
    header('location: index.php?action=connexion');
}
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title>Article et commentaire</title>
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="stylesheet" href="public/css/article-commentaire.css" />
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    </head>
 
    <body>
        <header>
        	<?php include("sections-pages/barre-menu.php"); ?>

            <div class="container-pluid" >
            	<div class="row">
            		<div class="col-xs-12" id="image-header">
            			<img src="public/images/image1.jpg" class="img-responsive" />
            		</div>
            	</div>
            </div>
            
        </header>
        <section>

            <div class="container">
                <h1><?php echo htmlspecialchars($billet['titre']); ?></h1>
                <div id="date-article"><strong><?php echo $billet['date_billet']; ?></strong></div>
                <p><?php echo html_entity_decode($billet['contenu']); ?></p> 

                <div id="commentaire"><h2>Commentaires</h2></div>
            </div>
            <?php
            while ($comment = $comments->fetch())
            {
            ?>
            <div class="container">
                <p><strong><?php echo htmlspecialchars($comment['auteur']); ?></strong> le <?php echo $comment['date_commentaire']; ?></p>
                 
                <div class="container"> 
                    <p><?php echo nl2br(htmlspecialchars($comment['commentaire'])); ?>
                    <a class="btn btn-default" role="button" data-toggle="modal" data-target="#modal"><strong style="color: orange;">Signalez.</strong></a></p>

                    <div class="modal fade" id="modal" tabindex="-1" role="dialog" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title">Signaler ce commentaire</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">x</span></button>
                                </div>
                                <div class="modal-body">
                                    <p>Voulez-vous vraiment signaler ce commentaire ?</p>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Annuler</button>
                                    <a href="index.php?action=signale&amp;idCom=<?= $comment['id'] ?>&amp;billet= <?php echo $billet['id']; ?>" name="signaler" type="button" class="btn btn-primary">Confirmer</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>                 
            </div>
            <?php
            } // Fin de la boucle des commentaires
            ?>

            <div class="container">
                <h4><em>Ajoutez un commentaire</em></h4>
                <div class="row" id="form-row">
                    <form action="index.php?action=addComment&amp;id=<?= $billet['id'] ?>" method="POST" style="margin: 50px">
                        <div class="form-group">
                            <label for="auteur">Auteur</label>
                            <input type="text" name="auteur" id="auteur" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label for="commentaire">Commentaire</label>
                            <textarea id="Commentaire" name="commentaire" rows="5" cols="100" class="form-control" required></textarea>
                        </div>
                        <button type="submit" class="btn btn-default btn-lg">Envoyez</button>
                    </form>
                </div>
            </div>
              	
        </section>

       <script src="https://code.jquery.com/jquery-3.4.1.js"
        integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU=" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script> 
    </body>
</html>

 