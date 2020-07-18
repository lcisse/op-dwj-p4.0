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
        <title>A propos</title>
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="stylesheet" href="public/css/about.css" />
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    </head>
 
    <body>
    	<header>
    		<?php include("sections-pages/barre-menu.php"); ?>

    		<div class="container-pluid" id="t">
            	<div class="row">
            		<div class="col-xs-12" id="image-header">
            			<img src="public/images/image-about1.jpg" class="img-responsive" />
            		</div>
            	</div>
            </div>
    	</header>

        <section>
            <div class="container" id="derniereArticle">
                <div class="row">
                    <div class="col-md-4" id="derniereArticleImg">
                        <img src="public/images/about2.jpg" class="img-responsive" alt="image tablette">
                    </div>
                    <div class="col-md" id="derniereArticleTexte">
                        <h1><em>Jean Forteroche, acteur et écrivain.</em></h1>
                        <p>Après des études de lettres et un début de carrière dans dans le monde du journalisme, je “décide” (ma vie est tout à fait une suite planifiée de choix réfléchis) de me consacrer à ma passion (l’écriture). Regarder la vie est mon premier roman. Mes thèmes de prédilection sont la l'aventure, les relations humaines, l’épanouissement personnel, et la quête de sens. J’ai grandi en région parisienne, et après avoir beaucoup voyagé, je vis actuellement à l'alaska.</p>
                    </div>                    
                </div>
            </div>
        </section>

       <script src="https://code.jquery.com/jquery-3.4.1.js"
        integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU=" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script> 
    </body>
</html>

