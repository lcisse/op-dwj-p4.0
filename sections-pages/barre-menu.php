                                    <!-- NAV -->
<nav class="navbar navbar-expand-md navbar-light fixed-top">
    <!--<a href="#"><i class="fas fa-anchor text-warning fa-2x"></i></a>-->
    <button type="button" class="navbar-toggler bg-light" data-toggle="collapse" data-target="#nav">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse justify-content-between" id="nav">
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link text-light font-weight-bold text-uppercase px-3" href="accueil.php?action=accueil"><i class="fas fa-home"></i> Accueil</a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-light font-weight-bold text-uppercase px-3" href="about.php">A propos</a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-light font-weight-bold text-uppercase px-3" href="index.php?action=listBillets">Articles</a>
            </li>
                <li class="nav-item">
                <a class="nav-link text-light font-weight-bold text-uppercase px-3" href="contact.php">Contact</a>
            </li>
            <a type="button"  class="nav-link btn btn-default font-weight-bold text-uppercase px-3" href="<?php echo $_SESSION["deconnection"]; ?>.php" style="background-color: white;"><?php echo $_SESSION["deconnecter"]; ?></a>
            <a type="button"  class="nav-link text-light btn btn-default font-weight-bold text-uppercase px-3" href="inscription.php"><?php echo $_SESSION["inscription"]; ?></a>
            </li>
                <li class="nav-item">
                <a class="nav-link text-light font-weight-bold text-uppercase px-3" href="admin.php"><?php echo $_SESSION['admin']; ?></a>
            </li>
    </div>
</nav>
            <!-- END OF NAV -->