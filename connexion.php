<?php
session_start();
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title>Articles</title>
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="stylesheet" href="public/css/formulaire-commentaire.css" />
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
                <div class="row" id="form-row">
                    <form action="connexion.php" method="POST" class="form-inline" style="margin: 50px;">
                        <div class="form-group">
                            <label for="pseudo">Pseudo</label>
                            <input type="text" name="pseudo" id="pseudo" class="form-control"
                            style="margin: 30px;">
                        </div>
                        <div class="form-group">
                            <label for="password">Mot de passe</label>
                            <input type="password" name="password" id="password" class="form-control"
                            style="margin: 30px;">
                        </div>
                        <button type="submit" class="btn btn-default btn-lg" name="okConnexion">Validez</button>
                    </form>
                </div>
            </div>
        	
        </section>

        <?php
        $bdd = new PDO('mysql:host=localhost;dbname=billet_simple_pour_l\'alaska;charset=utf8', 'root', '');

        $admin = $bdd->prepare('SELECT COUNT(*) AS nbAdmin FROM utilisateurs WHERE pseudo = ? and mot_de_passe = ? and roles = ?');
    
        if(isset($_POST['okConnexion']))
        {
            if(!empty($_POST['pseudo']) AND !empty($_POST['password'])){

                $admin->execute(array($_POST['pseudo'], ($_POST['password']), ('administrateur')));

                $dataAdmin = $admin->fetch();
                $motDePasse = 'admin';
                //$pseudo = 'admin';
                if(/*$_POST['pseudo'] == $pseudo*/ $dataAdmin['nbAdmin'] > 0){
                    //if($_POST['password'] == $motDePasse){
                        $_SESSION['motDePasse'] = $motDePasse;
                        header('location: admin.php');
                   /* }else{
                        echo "Mot de passe incorrect...";
                    }*/
                }else{
                    echo "Les informations que vous avez saisis ne sont pas correct...";
                }        
            }else{
                echo "Veillez compléter tous les champs...";
            }        
        }

        ?>

       <script src="https://code.jquery.com/jquery-3.4.1.js"
        integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU=" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script> 
    </body>
</html>
