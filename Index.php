<HTML>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" /> 
<?php
include('connexion.php');
?>
<HEAD> 
    <link href="jouets.css" rel="stylesheet" media="all" type="text/css">
</HEAD>
<BODY>
    <DIV id="Haut">
    </DIV>
    
    <DIV id="Corps">
    <?php
    
        $aujourdhui = getdate();
        $jour = $aujourdhui['mday'];
        $mois = $aujourdhui['mon'];
        $an = $aujourdhui['year'];
        
        echo "<h1>Bievenue sur le site des produits Jouets en Bois, aujourd'hui 
        le $jour/$mois/$an</h1>";       
    ?>
       
    <p><h4>Petit site didactique</h4></p>
    <p><h4> Attention certaines pages ne sont pas fournies car elles feront l'objet d'un développement
    ultérieur</h4></p>
    <br><br>
    
    <p><h2> Gestion des catégories</h2></p>
        <a href="AfficheTouteCategories.php">Visualiser toute les catégories</a><br>
        <a href="NouvelleCategorie.php">Créer une nouvelle catégorie</a><br>
    <br>
    
    <p><h2> Gestion des produits</h2></p>
        <a href="AfficheToutProduits.php">Visualiser toute les produits - en image</a><br>
        <a href="Afficheproduits1Categorie.php">Visualiser les produits d'une catégorie</a><br>
        <a href="ChoisirUnProduitSurId.php">Visualiser un produit à partir de son N°</a><br>
        <a href="NouveauProduit.php">Créer un nouveau produit</a><br>
    <br>
    
    </DIV>
</BODY>
</HTML>
