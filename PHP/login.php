<?php

if(!empty($_POST)){
	if(isset($_POST["email"]) &&isset($_POST["password"])){
		
		if($_POST["email"]!=""&&$_POST["password"]!=""){
            
            include "PHP/con_db.php";
			
			$user_id=null;
			$sql1= "select * from Usuario where (Nombre=\"$_POST[nombre]\" or Email=\"$_POST[email]\") and Password=\"$_POST[password]\")";
			$query = $con->query($sql1);
			while ($r=$query->fetch_array()) {
				$user_id=$r["id"];
				break;
			}
			if($user_id==null){
				print "<script>alert(\"Acceso invalido.\");window.location='../login.php';</script>";
			}else{
				session_start();
				$_SESSION["user_id"]=$user_id;
				print "<script>window.location='../home.php';</script>";				
			}
		}
	}
}

?>