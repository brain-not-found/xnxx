
<?PHP
include "../core/livraisonC.php";
$livraison1C=new livraisonC();
$listelivraisons=$livraison1C->afficherlivraisons();

//var_dump($listeEmployes->fetchAll());
?>
<?php
if($_POST['tri']=='alphabet'){
$listelivraisons=$livraison1C->afficheralpha();
}
else if($_POST['tri']=='identifiant'){
$listelivraisons=$livraison1C->afficheridentifiant();
}
?>

<br><br><br><br>
<table class="tablexx">
<tr>
<td>identifiant</td>
<td>produit</td>
<td>quantite</td>
<td>adresse</td>
<td>supprimer</td>
<td>modifier</td>
</tr>

<?PHP
foreach($listelivraisons as $row){
    ?>
    <tr>
    <td><?PHP echo $row['identifiant']; ?></td>
    <td><?PHP echo $row['produit']; ?></td>
    <td><?PHP echo $row['quantite']; ?></td>
    <td><?PHP echo $row['adresse']; ?></td>
    <td>
        <form method="POST" action="supprimerlivraison.php">
    <input type="submit" name="supprimer" value="supprimer">
    <input type="hidden" value="<?PHP echo $row['identifiant']; ?>" name="identifiant">
    </form>
    </td>
    <td><a href="modifierlivraison.php?identifiant=<?PHP echo $row['identifiant']; ?>">
    Modifier</a></td>
    </tr>
    
    <?PHP
}
?>
</table>
<p><br>.<br></p>
<form method="POST">
    <select name="tri">
        <option value="alphabet">alphabet</option>
        <option value="cin">cin</option>
    </select>
    <input type="submit" name="pizza" value="=trier" class="validerxxx">
</form>

<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <title>Karma - Statistique</title>
    <!-- Favicon-->
    <link rel="icon" href="favicon.ico" type="image/x-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,700&subset=latin,cyrillic-ext" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" type="text/css">

    <!-- Bootstrap Core Css -->
    <link href="plugins/bootstrap/css/bootstrap.css" rel="stylesheet">

    <!-- Waves Effect Css -->
    <link href="plugins/node-waves/waves.css" rel="stylesheet" />

    <!-- Animation Css -->
    <link href="plugins/animate-css/animate.css" rel="stylesheet" />

    <!-- Morris Chart Css-->
    <link href="plugins/morrisjs/morris.css" rel="stylesheet" />

    <!-- Custom Css -->
    <link href="css/style.css" rel="stylesheet">

    <!-- AdminBSB Themes. You can choose a theme from css/themes instead of get all themes -->
    <link href="css/themes/all-themes.css" rel="stylesheet" />
     <script type="text/javascript" src="myjs.js"></script>
</head>
<body class="theme-red">
    <!-- Page Loader -->
    <div class="page-loader-wrapper">
        <div class="loader">
            <div class="preloader">
                <div class="spinner-layer pl-red">
                    <div class="circle-clipper left">
                        <div class="circle"></div>
                    </div>
                    <div class="circle-clipper right">
                        <div class="circle"></div>
                    </div>
                </div>
            </div>
            <p>S'il vous plaît, attendez...</p>
        </div>
    </div>
    <!-- #END# Page Loader -->
    <!-- Overlay For Sidebars -->
    <div class="overlay"></div>
    <!-- #END# Overlay For Sidebars -->
    <!-- Search Bar -->
    <div class="search-bar">
        <div class="search-icon">
            <i class="material-icons">Chercher</i>
        </div>
        <input type="text" placeholder="START TYPING...">
        <div class="close-search">
            <i class="material-icons">Fermer</i>
        </div>
    </div>
    <!-- #END# Search Bar -->
    <!-- Top Bar -->
    <nav class="navbar">
        <div class="container-fluid">
            <div class="navbar-header">
                <a href="javascript:void(0);" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse" aria-expanded="false"></a>
                <a href="javascript:void(0);" class="bars"></a>
                <a class="navbar-brand" href="index.html">Gestion de Livraison </a>
            </div>
            <div class="collapse navbar-collapse" id="navbar-collapse">
                    <!-- Call Search -->

                    <!-- #END# Call Search -->
                    <!-- Notifications -->
                    
                    <!-- #END# Notifications -->
                    <!-- Tasks -->
                    
                    <!-- #END# Tasks -->
                   
            </div>
        </div>
    </nav>
    <!-- #Top Bar -->
    <section>
        <!-- Left Sidebar -->
        <aside id="leftsidebar" class="sidebar">
            <!-- User Info -->
            <div class="user-info">
                <div class="image">
                    <img src="images/user.png" width="48" height="48" alt="User" />
                </div>
                <div class="info-container">
                    <div class="name" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Lamia Marzouki</div>
                    <div class="email">lamiamarzoukibekri@yahoo.com</div>
                    
                </div>
            </div>
            <!-- #User Info -->

            <!-- Menu -->
            <div class="menu">
                <ul class="list">
                    <li class="header">Navigation principale</li>
                    <li >
                        <a href="index.html">
                            <i class="material-icons">home</i>
                            <span>Mise En page</span>
                        </a>
                    </li>
                    <li>
                        <a href="Statistique.html">
                            <i class="material-icons">text_fields</i>
                            <span>Statistique</span>
                        </a>
                    </li>
                    <li>
                        <a href="gestion produit.html">
                            <i class="material-icons">layers</i>
                            <span>Gestion de produits</span>
                        </a>
                    </li>
                    <li class="active">
                        <a href="gestion livraison.html" >
                            <i class="material-icons">widgets</i>
                            <span>Gestion de livraison</span>
                        </a>
                       
                    </li>
                    <li>
                        <a href="gestion client.html" >
                            <i class="material-icons">swap_calls</i>
                            <span>Gestion de Client</span>
                        </a>
                    </li>
                    <li>
                        <a href="gestion blog.html" >
                            <i class="material-icons">assignment</i>
                            <span>Gestion de Blog</span>
                        </a>
                    </li>
                    <li>
                        <a href="SAV.html" >
                            <i class="material-icons">view_list</i>
                            <span>Service Apres vente</span>
                        </a>
                    </li>
                    <li>
                        <a href="gestion pub.html" >
                            <i class="material-icons">perm_media</i>
                            <span>Gestion de Pub</span>
                        </a>
                    </li>
                </ul>
            </div>
            <!-- #Menu -->
            <!-- Footer -->
            
            <!-- #Footer -->
        </aside>
        <!-- #END# Left Sidebar -->
        <!-- Right Sidebar -->
       
        <!-- #END# Right Sidebar -->
    
                </section>
                <form method="POST" action="impress2.php">
                <label class="validerxxx"><input type="submit" name="button" value="pdf" class="validerxxx"  href="impress2.php"></label>
            </form>
                <br><br><br><br>

                <form method="POST">
                                            <table class="tablexx">
                                                <tr><td><input type="text" name="rech" ></td><td>



                <label class="validerxxx"><input type="submit" name="button" value="rechercher" class="validerxxx" ></label>
                </form></td></tr></table>
                




                <table class="tablexx">
<tr>
<td>identifiant</td>
<td>produit</td>
<td>quantite</td>
<td>adresse</td>
<td>supprimer</td>
<td>modifier</td>
</tr>

<?PHP
if (isset($_POST['rech'])) {
    $livraison=$livraison1C->recupererlivraison($_POST['rech']);
foreach($livraison as $row){
    ?>
    <tr>
    <td><?PHP echo $row['identifiant']; ?></td>
    <td><?PHP echo $row['produit']; ?></td>
    <td><?PHP echo $row['quantite']; ?></td>
    <td><?PHP echo $row['adresse']; ?></td>
    <td>
        <form method="POST" action="supprimerlivraison.php">
    <input type="submit" name="supprimer" value="supprimer">
    <input type="hidden" value="<?PHP echo $row['identifiant']; ?>" name="identifiant">
    </form>
    </td>
    <td><a href="modifierlivraison.php?identifiant=<?PHP echo $row['identifiant']; ?>">
    Modifier</a></td>
    </tr>
    
    <?PHP
}
}
?>
</table>

                <a class="validerxx" href="gestionlivraison.php">retour</a>
            </form>
                </div>
                    </div>
                </div>
            </div>
            </div>

    </section>

    <script src="plugins/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core Js -->
    <script src="plugins/bootstrap/js/bootstrap.js"></script>

    <!-- Select Plugin Js -->
    <script src="plugins/bootstrap-select/js/bootstrap-select.js"></script>

    <!-- Slimscroll Plugin Js -->
    <script src="plugins/jquery-slimscroll/jquery.slimscroll.js"></script>

    <!-- Waves Effect Plugin Js -->
    <script src="plugins/node-waves/waves.js"></script>

    <!-- Jquery CountTo Plugin Js -->
    <script src="plugins/jquery-countto/jquery.countTo.js"></script>

    <!-- Morris Plugin Js -->
    <script src="plugins/raphael/raphael.min.js"></script>
    <script src="plugins/morrisjs/morris.js"></script>

    <!-- ChartJs -->
    <script src="plugins/chartjs/Chart.bundle.js"></script>

    <!-- Flot Charts Plugin Js -->
    <script src="plugins/flot-charts/jquery.flot.js"></script>
    <script src="plugins/flot-charts/jquery.flot.resize.js"></script>
    <script src="plugins/flot-charts/jquery.flot.pie.js"></script>
    <script src="plugins/flot-charts/jquery.flot.categories.js"></script>
    <script src="plugins/flot-charts/jquery.flot.time.js"></script>

    <!-- Sparkline Chart Plugin Js -->
    <script src="plugins/jquery-sparkline/jquery.sparkline.js"></script>

    <!-- Custom Js -->
    <script src="js/admin.js"></script>
    <script src="js/pages/index.js"></script>

    <!-- Demo Js -->
    <script src="js/demo.js"></script>
</body>
</html>




