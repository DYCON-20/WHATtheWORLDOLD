<!DOCTYPE html>
<html lang="fr">


<head>
 <meta charset="UTF-8">
 <!--//////////////////////////// DEBUT Tools  //////////////////////////-->
 <meta name="viewport" content="width=device-width, initial-scale=1">

<!--//////////////////////////// FIN Tools  //////////////////////////-->

<!--//////////////////////////// DEBUT BOOSTRAP  //////////////////////////-->
<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
<script src="js/bootstrap.js" defer></script>
<!--//////////////////////////// FIN BOOSTRAP  //////////////////////////-->

<!--//////////////////////////// DEBUT CSS  //////////////////////////-->
<link rel="stylesheet" type="text/css" href="css/basique.css">
<link rel="stylesheet" type="text/css" href="css/font.css">
<link rel="stylesheet" type="text/css" href="css/indexnavCarte.css">
<link rel="stylesheet" type="text/css" href="css/carte.css">


<link rel="stylesheet" href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css" />


<!--//////////////////////////// FIN CSS  //////////////////////////-->

<!--//////////////////////////// DEBUT JS  //////////////////////////-->
<script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js"></script>
<script src="js/carte.js" defer></script>


<!--//////////////////////////// FIN JS  //////////////////////////-->

<!--//////////////////////////// DEBUT RESPON  //////////////////////////-->
<!--//////////////////////////// FIN RESPON  //////////////////////////-->
</head>


<body class="Fontbody">


    <header>
        <!--//////////////////////////// DEBUT NAV  //////////////////////////-->
        <?php include 'Block/navindex.html';?>
        <!--//////////////////////////// DEBUT NAV  //////////////////////////-->
    </header>


    <main>
        <!--//////////////////////////// DEBUT main  //////////////////////////-->
        <?php include 'Block/CarteOpen.php';?>
        <!--//////////////////////////// DEBUT main  //////////////////////////-->      
    </main>

    
    <footer>
        <!--//////////////////////////// DEBUT footer  //////////////////////////-->
        <?php include 'Block/';?>
        <!--//////////////////////////// DEBUT footer  //////////////////////////-->   
    </footer>

</body>
</html>
