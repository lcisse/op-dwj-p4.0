<?php
session_start();
if(!$_SESSION['motDePasse']){
	header('location: connexion.php');
}
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title>Articles</title>
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="stylesheet" href="public/css/formulaire-commentaire.css" />
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

        <script src="https://cdn.tiny.cloud/1/pei3vqv8oenlhvcich45zlq9l059k6xewy2bqch043ae4zvl/tinymce/5/tinymce.min.js" referrerpolicy="origin"/></script>
        <script>
            tinymce.init({
            selector: '#contenu'
            });
        </script>
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
            <?php include("sections-pages/menuAdmin.php"); ?>
        </section>

        <section>
        <div class="container">
                <div class="row" id="form-row">
                    <form action="ajoutArticle.php" method="POST" style="margin: 50px">
                        <div class="form-group">
                            <label for="titre">Titre de l'article</label>
                            <input type="text" name="titre" id="titre" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="contenu">Contenu de l'article</label>
                            <textarea id="contenu" name="contenu" rows="5" cols="100" class="form-control"></textarea>
                        </div>
                        <button type="submit" name="publication" class="btn btn-default btn-lg">Publiez</button>
                    </form>
                </div>
            </div>	
        	
        </section>

        <?php
        $bdd = new PDO('mysql:host=localhost;dbname=billet_simple_pour_l\'alaska;charset=utf8', 'root', '');
        

        if(isset($_POST['publication'])){
            if(!empty($_POST['titre']) AND !empty($_POST['contenu'])){
                $titre = htmlspecialchars($_POST['titre']);
                $contenu = nl2br(htmlspecialchars($_POST['contenu']));

                $addArticle = $bdd->prepare('INSERT INTO billets(titre, contenu, date_billet) VALUES(?,?, NOW())');
                $addArticle->execute(array($titre, $contenu));
                echo "L'article a bien été publié...";
            }else{
                echo "Veullez complétez tous les champs...";
            }
        }
        ?>

       <script src="https://code.jquery.com/jquery-3.4.1.js"
        integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU=" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script> 
    </body>
</html>
