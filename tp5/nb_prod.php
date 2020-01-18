<html>
    <head>
        <title>
        </title>
    </head>
    <body>
       <?php
   if(isset($_POST["sb"])){
       $vara=$_POST['list'];
       $var2=$_POST['text'];
       $var3=$_POST['list1'];
         echo "vous avez commande $var2 $var3  aupres de $vara"; 
    } 
    ?>
        <input type="button" value="Retour" onclick="self.history.back();"> 
 
    </body>
</html>


