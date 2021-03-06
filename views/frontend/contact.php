<?php
session_start();
if (!$_SESSION['admin']) {
    $_SESSION['admin'] = ' ';
    $_SESSION['inscription'] = "S'inscrire";
    $_SESSION['deconnecter'] = "Se connecter";
    $_SESSION['deconnection'] = "connexion";
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
                    <form action="" method="POST" style="margin: 50px">
                        <div class="form-group">
                            <label>Nom</label>
                            <input type="text" name="nom" id="nom" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="prenom">Prénom</label>
                            <input type="text" name="prenom" id="prenom" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="email">Mail</label>
                            <input type="email" name="email" id="email" class="form-control">
                        </div>
                        <div class="form-group">
                            <label>Message</label>
                            <textarea id="Message" name="message" rows="5" cols="100" class="form-control"></textarea>
                        </div>
                        <button type="submit" class="btn btn-default btn-lg" name="okmessage">Envoyer</button>
                    </form>
                </div>
            </div>
        	
        </section>
        <section>
            <?php 
            $bdd = new PDO('mysql:host=localhost;dbname=billet_simple_pour_l\'alaska;charset=utf8', 'root', '');

            if (isset($_POST['okmessage'])){
                if(!empty($_POST['nom']) AND !empty($_POST['prenom']) AND !empty($_POST['email']) AND !empty($_POST['message'])){
                    $nom = htmlspecialchars($_POST['nom']);
                    $prenom = htmlspecialchars($_POST['prenom']);
                    $email = htmlspecialchars($_POST['email']);
                    $message = htmlspecialchars($_POST['message']);

                    $insererMessage = $bdd->prepare('INSERT INTO contacts(nom, prenom, mail, messages, date_messages) VALUES(?, ?, ?, ?, NOW())');
                        $insererMessage->execute(array($nom, $prenom, $email, $message));

                        echo "Message envoyé... !";
                }else{
                    echo "Veillez remplir tous les champs... !";
                }

            }



             ?>
        </section>

       <script src="https://code.jquery.com/jquery-3.4.1.js"
        integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU=" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script> 
    </body>
</html>
