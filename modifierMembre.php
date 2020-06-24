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
        <?php
        $bdd = new PDO('mysql:host=localhost;dbname=billet_simple_pour_l\'alaska;charset=utf8', 'root', '');
        if(isset($_GET['id']) AND !empty($_GET['id'])){
            $selectInfoMembre = $bdd->prepare('SELECT * FROM utilisateurs WHERE id = ?');

            $selectInfoMembre->execute(array($_GET['id']));

            $infoMembres = $selectInfoMembre->fetch();

            if(isset($_POST['modifierMembre'])){
                $pseudoModifie = htmlspecialchars($_POST['pseudo']);

                $updatePseudoMembre = $bdd->prepare('UPDATE utilisateurs SET  pseudo = ? WHERE id = ?');

                $updatePseudoMembre->execute(array($pseudoModifie, $_GET['id']));

                header('location: gererMembres.php');

            }
        }else{
            echo "L'utilisateur est introuvable...";
        }
   
        ?>
        <section>
        <div class="container">
                <div class="row" id="form-row">
                    <form action="modifierMembre.php?id=<?= $_GET['id'];?>" method="POST" class="form-inline" style="margin: 50px;">
                        <div class="form-group">
                            <label for="pseudo">Pseudo</label>
                            <input type="text" name="pseudo" id="pseudo" class="form-control"
                            style="margin: 30px;" value="<?= $infoMembres['pseudo'] ;?>">
                        </div>
                        <button type="submit" class="btn btn-default btn-lg" name="modifierMembre">Validez</button>
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
