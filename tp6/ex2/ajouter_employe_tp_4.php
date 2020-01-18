<?php
	require_once("all_function_tp_4.php");
	
	 $nom_emp = $_POST['nom_employe'];
	 $num_emp = $_POST['num_employe'];
	 $fon_emp = $_POST['fonction_employe'];
	 $cf_emp = $_POST['chef'];
	 $dt_emp = $_POST['date'];
	 $sl_emp = $_POST['salaire'];
	 $dep_emp = $_POST['departement'];

		$connex = connexion2();
	 	$stat = $connex->query("select DEPTNO from dept where DNAME='$dep_emp'");
		$id_dep = $stat->fetch_row();
		
		
		  	if($stat->num_rows == 0){
					 	$stat = $connex->query("select MAX(DEPTNO) from dept");
						$id_max = $stat->fetch_row();
						$id_max[0] = $id_max[0] + 10;

				
			}

	  
	 if ($insert_res = $connex->prepare("INSERT INTO emp(EMPNO,ENAME,JOB,MGR,HIREDATE,SAL,DEPTNO) VALUES (?, ?, ?, ?, ?, ?, ?)")) {

	$insert_res->bind_param('issisii', $num_emp,$nom_emp,$fon_emp,$cf_emp,$dt_emp,$sl_emp,$id_dep[0]);
	$insert_res->execute();
	 }
	 if($insert_employe_compte=$connex->prepare("INSERT INTO passwd(LOGIN,PASS) VALUES(?,?)")){
		$insert_employe_compte->bind_param('si',$nom_emp,$num_emp);
		$insert_employe_compte->execute();
	}
	 
	 header("Location:ex2.php");
	
  
?>