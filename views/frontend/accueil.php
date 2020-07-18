<?php
session_start();
if (!$_SESSION['admin']) {
    $_SESSION['admin'] = ' ';
    $_SESSION['inscription'] = "S'inscrire";
    $_SESSION['deconnecter'] = "Se connecter";
    $_SESSION['deconnection'] = "index";
}
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title>Accueil</title>
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
        <link rel="stylesheet" href="public/css/accueil.css" />
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    </head>
 
    <body>
        <div id="page">
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
            <div id="diapoInfo">
                <div id="diapo">
                    <div id="conteneur">
                        <img src="public/images/image5.jpg" alt="velo">
                    </div>
                </div>
                <div id="infoSite">
                    <div id="barreInfo1"><h2><em>Billet simple pour l'alaska.</em></h2></div>
                    <div id="textInfo">
                        <p>"Vous trouverez dans ce blog le contenu de mon nouveau roman, "Billet simple pour l'Alaska", qui sera publié par épisode.<br>
                        Vous étes un amoureux de lecture ?<br>
                        Si vous n'avez pas encore un compte, inscrivez-vous pour voir tout le contenu.<br>
                        Bonne lecture !"</p>
                        <p>Jean Forteroche, acteur et écrivain.</p>
                    </div>
                    <div id="barreInfo2"><i class="fab fa-facebook"></i><i class="fab fa-twitter"></i><i class="fab fa-youtube"></i><i class="fab fa-linkedin-in"></i></div>
                </div>
            </div>
        </section>

        <section>
            <div class="container" id="derniereArticle">
                <div class="row">
                    <div class="col-md-4" id="derniereArticleImg">
                        <img src="public/images/image8.jpg" class="img-responsive" alt="image tablette">
                    </div>
                    <div class="col-md" id="derniereArticleTexte">
                        <h1><em>Le dernier épisode</em></h>
                        <h2><?php echo htmlspecialchars($derniereArticle['titre']); ?></h2>
                        <div id="date-article"><em><?php echo $derniereArticle['date_billet']; ?></em></div>
                        <?php 
                            $string = html_entity_decode($derniereArticle['contenu'], ENT_NOQUOTES);
                        ?>
                        <p id="paraLastArt"><?php echo  substr($string, 0, strrpos(substr($string, 0, 1500), ' '));?> <a href="index.php?action=listBillets"> <span id="voirArticle" >[...]</span></a></p>

                    </div>                    
                </div>
            </div>
        </section>
        <footer></footer>
        <p>Lamine cisse, projet 4 DWJ.</p>
        </div>

       <script src="https://code.jquery.com/jquery-3.4.1.js"
        integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU=" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
        <script src="public/js/diaporama.js"></script> 
    </body>
</html>
