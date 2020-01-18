<?php	
require_once("login.php"); 
require_once("all_function_tp_4.php"); 


?>

<html lang="en">
<head>
  <title>TP6</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  

  <style>
   div.container{
    box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
	
}
  </style>
  
</head>
<body>

 
<br>
    <br>
	<div class="container col-sm-offset-3 col-sm-6" >
		<div id="message">  </div>

	<form class="form-horizontal" method="POST" action="ajouter_employe_tp_4.php">
     
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
	
	<b>Salaire  </b>
	<input type="number" class ="form-control" name="salaire" id="salaire"/>
	
	<b>Departement  </b>
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

	<center><button type="submit"  class="btn btn-primary"  /> Ajouter</button>
			<button type="reset"  class="btn btn-danger"  /> Effacer</button></center>
	
	</body>
	</form>
          
 </div>      
</div>



</body>
</html>


