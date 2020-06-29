<!DOCTYPE html>
<html>
    <meta charset="utf-8">
<link rel="stylesheet" href="style/vitrine.css">

<?php include("header.php"); ?>
<?php include("navigation.php"); ?> 
<body>
<h2>CONTACT</h2>
<form method="POST" action="traitement.php">
    
<p><input type="text" name="Nom Prénom" id="pseudo" placeholder="Votre Nom et Prénom" size="30px"></p>

<p><input type="text" name="Adresse e-mail" id="e-mail" placeholder="Votre adresse e-mail" size=30px></p>

<p><textarea name="Message" id="message" placeholder="Votre message"></textarea></p>
<p><input type="submit" value="Envoyer"></p></input>

</form>


</style>

</body>

<?php include("footer.php"); ?>
</html>