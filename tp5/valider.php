<html>
    <head>
        <title>
        </title>
    </head>
    <body>
       <?php //test du mot de passe
if (isset($_POST['Envoyer']))
{
if ($_POST['pw'] != "sigl") 
   echo "Mot de passe incorrecte"; 
else
echo "Mot de passe correcte" ;
}
?>
<input type="button" value="Retour" onclick="self.history.back();">      
    </body>
</html>




