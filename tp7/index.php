<?php	

require_once("listes_tp5.php"); 
require_once("login.php");


?>

<html lang="en">
<head>
  <title>TP7</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  

 
 
 <div class="row" style='margin-left : 5px; margin-right : 5px '>
     

	<div class="container col-sm-offset-3 col-sm-6" >
	
	<form class="form-horizontal" method="POST" action="">
	
<br><br>
	<b> Nom Employe </b>
	<input type="text" class ="form-control" name="nom_employe" id="nom_employe"/>
	
	<b> N Employe </b>
	<input type="number" class ="form-control" name="num_employe" id="numero_employe"/>
	
	<b> Fonction Employe </b>
	<input list="fonction_employe" id="fonction_employeee"  name="fonction_employe" class ="form-control">
		<?php 	
			$vr1_conn=connexion();
			$req=$vr1_conn -> query("SELECT DISTINCT JOB FROM emp");
				$tableau3;
				$i=0;
				while($row = $req->fetch_assoc()){
					$tableau3[$i]=$row['JOB'];
					$i++;
				}
				list_modifiable($tableau3,"fonction_employe");
				?>		
	
	<b> Chef  </b>
    <?php
		$vr2_conn=connexion();		
		$req=$vr2_conn -> query("select EMPNO,ENAME from emp");
				$tableau;
				$i=0;
				while($row = $req->fetch_assoc()){
					$tableau[$i][0]=$row['EMPNO'];
					$tableau[$i][1]=$row['ENAME'];
					$i++;
				}
				
				list_option($tableau,"chef"); 
		?>
	
	<b> Date  </b> 
	<input type="text" class ="form-control" name="date" id="date"/>
	
	<b> Salaire  </b>
	<input type="number" class ="form-control" name="salaire" id="salaire"/>
	
	<b> Departement  </b>
	<?php 	
		$vr3_conn=connexion();
		$req=$vr3_conn -> query("SELECT DEPTNO,DNAME FROM dept");
				$tableau2;
				$i=0;
				while($row = $req->fetch_assoc()){
					$tableau2[$i][0]=$row['DEPTNO'];
					$tableau2[$i][1]=$row['DNAME'];
					$i++;
				}
				
				list_option($tableau2,"departement"); 
		 ?>
		
		<br>

	<center><div><input type="submit" class="btn btn-primary" value="valider" name="ajouter"/> 
	<input  class="btn btn-info" type="submit" value="rechercher" name="rechercher" id="rechercher" /> 
	<input class="btn btn-danger" type="submit" value="Supprimer" name="supprimer"/> 
		<input class="btn btn-secondary" type="reset" value="Effacer" name="Effacer"/>  <br><br><div></center></form>
	  
		
</div>
	
	<div id="rechercher" class="container col-sm-offset-3 col-sm-6" style="margin-top:30px;" ><?php
				require_once("DataBase.php");
				$a = new DataBase();

        if(isset($_POST['rechercher']))
        {
			if(empty($_POST['num_employe']))
            {
                die("Veuillez entrer un numéro d'employé");
            }
           $num=$_POST["num_employe"];
           echo $a->search($num,"emp");
        }
		
		if(isset($_POST['ajouter']))
        {			

			require_once("ajouter_employe_tp5.php");
			ajouter();
        }
		
		if(isset($_POST['supprimer']))
        {
			if(empty($_POST['num_employe']))
            {
                die("Veuillez entrer un numéro d'employé");
            }
			require_once("DataBase.php");
						

			$num=$_POST["num_employe"];

			$a->delete($num);
        }
		
		
		?></div>
		

</body>
</html>


