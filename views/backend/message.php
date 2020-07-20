<?php
session_start();
if(!$_SESSION['motDePasse']){
	header('location: index.php?action=connexion');
}
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title>Admin- les messages.</title>
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

        <div class="container" style="margin-top: 20px;"><h2>Vos messages.</h2></div>
        
        <?php        
        while ($allMessages = $selectAllMessages->fetch())
            {
            ?>
                <div class="container" style="margin-top: 20px;">
            		<p><strong><?php echo $allMessages['prenom'];?> <?php echo $allMessages['nom'];?></strong> <em> <?php echo $allMessages['date_messages'];?></em></p> 
                    <p> <?php echo $allMessages['messages'];?></p>
                    <p><?php echo $allMessages['mail'];?></p> <hr>
            	</div>
            <?php	
            }
            ?>
        	
        	
        </section>


       <script src="https://code.jquery.com/jquery-3.4.1.js"
        integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU=" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script> 
    </body>
</html>
