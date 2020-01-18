<html>
<head>
 
<meta charset="utf-8">
<link href="style.css" rel="stylesheet">
     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
      <style>
            body{
                
                background-color:orange;
            }
        
        </style>
</head>
<body>
 
<?php 
require("list.php");
require("list_modifiable.php");
require ("connexion_pdo.php");
require("Employe.php");
 
	if(isset($_POST['supp'])&& !empty($_POST['num'])){
	$tmp=$_POST['num'];
	$req="delete from scott where empno=".$tmp;
	$employe = new Employe("","","","","","","");
	$employe=$employe->supprimer($req);
	}
	else if(isset($_POST["env"])){
		$nom=$_POST["nom"];
		$num=$_POST["num"];
		$fonction=$_POST["fonction"];
		$chef=$_POST["chef"];
		$date_emb=$_POST["date_emb"];
		$sal=$_POST["sal"];
		$dept=$_POST["Dept"];
		$employe =new Employe($num,$nom,$fonction,$chef,$date_emb,$sal,"",$dept);
		$employe->inserer();

		
	}
	else{
			$connex = new PDO('mysql:dbname=scott;host=localhost',"root","");
		$connex->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
	}
?>
    <centre>
   <br><br><br><br><br><br><br>
<form name="formulaire" method="POST" action="index.php" style="margin-left:38%;">
  
	<table>
		<tr>
			<td>Nom d'employe</td>
			<td><input type="text"name="nom" class="form-control" /></td>
		</tr>
		<tr>
			<td>Num employe</td>
			<td><input type="text"name="num" class="form-control" /> </td>
		</tr>
		<tr>
			<td>Fonction employe</td>
			<td>
		 
<input type ='text' name ='fonction' class="form-control" />			
			</td>
		</tr>
		<tr>
			<td>Chef </td>
			<td>

		
			
			<?php
        
        $tc=Array("SMITH","Scoot","ADMIN");
      
           cree($tc,"chef");
					
					 
			?>
	 
			</td>
		</tr>
		<tr>
			<td>Date embauche</td>
			<td><input type="date" name="date_emb" placeholder ="jj/mm/aaaa" class="form-control" /></td>
		</tr>
		<tr>
			<td>salaire employe</td>
			<td><input type="text" name="sal" id="sal" class="form-control"/></td>
		</tr>
		<tr>
			<td>Departement</td>
			<td >
			
			
			
			<?php 
			 $ta=Array("ACCOUNTTING","INFORMATIQUE","ECONOMIQUE","PERSONNEL");
        list_modifiable($ta,"lista"); 
			 ?>
			</td>
		</tr>
        <br><br><br>
 
		<tr col="4">
			<td>
			<input type="submit" value="Envoyer" name ="env" class="btn btn-primary">
			<input type="submit" value="Effacer"  type="reset" class="btn btn-secondary" /></td>
			<td><input type="submit" value="rechercher" name ="rech" class="btn btn-info">
			<input type="submit" value="Supprimer" name ="supp" class="btn btn-danger" ></td>
		</tr>
	</table>

        </form>
    </centre>
 
 <div id="div_tab">
 <?php 
	if(isset($_POST['rech'])&& !empty($_POST['num'])){
	$tmp=$_POST['num'];
	$req="select * from emp where empno=".$tmp;
	$employe = new Employe("","","","","","","");
	$employe=$employe->rechercher($req);
	 
	 echo "<table id='tab' style='color:green;border-style:solid;border-width:3px'> ";
	echo "<tr>";
	echo "<th> EMPNO</th><th> ENAME</th><th> JOB</th><th> MGR</th><th> HIREDATE</th><th> SAL</th><th> DEPTNO</th>";
	echo "</tr>";
	
	foreach($employe as $tm){
		echo "<tr style='border-color:green;border-style:solid;border-width:3px'>";
	echo "<td>".$tm['empno']."</td>";
	echo "<td>".$tm['log']."</td>";
	echo "<td>".$tm['fonct']."</td>";
	echo "<td>".$tm['chef']."</td>";
	echo "<td>".$tm['date']."</td>";
	echo "<td>".$tm['salaire']."</td>";
	echo "<td>".$tm['depart']."</td>";
	
	echo "</tr>";}
	echo "</table>";
	}
	?>
 </div>
    
</body>
</html>