<?php
	
	require_once("Employe.php");
Class DataBase{
	
	function connexion(){
		$servername = "localhost";
		$username = "root";
		$data_base ="scott";
		$password = "";

		$conn = new mysqli($servername, $username, $password,$data_base);

		if ($conn->connect_error) {
			die("Connection failed: " . $conn->connect_error);
		} 

		return $conn;
	}

	function insert_employe($objet_employe){
				
			$num_emp= $objet_employe->getNum();
			$nom_emp=$objet_employe->getNom();
			$fonction_emp=$objet_employe->getJob();
			$chef_emp=$objet_employe->getChef();
			$date_emp=$objet_employe->getDate();
			$salaire_emp=$objet_employe->getSalaire();
			$departement_emp=$objet_employe->getDepartement();

			
	  $connex = $this->connexion();
	  
	  	$stat = $connex->query("select DEPTNO from dept where DNAME='$departement_emp'");
		$id_dep = $stat->fetch_row();

	if ($insert_emp = $connex->prepare("INSERT INTO emp(EMPNO,ENAME,JOB,MGR,HIREDATE,SAL,DEPTNO) VALUES (?, ?, ?, ?, ?, ?, ?)")) {
		$insert_emp->bind_param('issisii',$num_emp,$nom_emp,$fonction_emp,$chef_emp,$date_emp,$salaire_emp,$id_dep[0]);
		$insert_emp->execute();
	}
	 
	 if($insert_employe_compte=$connex->prepare("INSERT INTO passwd(LOGIN,PASS) VALUES(?,?)")){
		$insert_employe_compte->bind_param('si',$nom_emp,$num_emp);
		$insert_employe_compte->execute();
	}

	
	}
	
 function search($num,$nmtable)
    {
		$connex = $this->connexion();
    	$stat = $connex->query("SELECT EMPNO,ENAME,JOB,MGR,HIREDATE,SAL,DEPTNO FROM $nmtable where EMPNO=$num");
  		


		if($stat->num_rows > 0 ){

			$table="<table class='table table-hover'>";
			$table.="<tr>";
			$table.="<th> EMPNO </th>";
			$table.="<th> ENAME </th>";
			$table.="<th> JOB </th>";
			$table.="<th> MGR </th>";
			$table.="<th> HIREDATE </th>";
			$table.="<th> SAL </th>";
			$table.="<th> DEPTNO </th>";
			$table.="</tr>";
            $table.="<tr>";

			$res = $stat->fetch_row();
            $table.="<td>".$res[0]."</td>";
            $table.="<td>".$res[1]."</td>";
            $table.="<td>".$res[2]."</td>";
            $table.="<td>".$res[3]."</td>";
            $table.="<td>".$res[4]."</td>";
            $table.="<td>".$res[5]."</td>";
            $table.="<td>".$res[6]."</td>";
            $table.="</tr>";
			
        $table.="</table>";
		}
		else
        {
            return "Aucun Résultat";
        }
        return $table;
    }
    function delete($num)
    {
		$connex = $this->connexion();
    	$exist = $connex->query("SELECT EMPNO FROM emp where EMPNO=$num");
		
        if($exist->num_rows ==0)
        {
            return "Aucun employé";
        }
		else{
		$stat2 = $connex->query("DELETE FROM emp WHERE EMPNO=$num");
    	$stat3 = $connex->query("DELETE FROM passwd WHERE PASS=$num");

       
        return "Cet employé a été supprimé";}
    	
	}
	
	
	}
?>