<?php

include("con_db.php");

if(!empty($_POST)){
	if(isset($_POST["nombre"]) &&isset($_POST["apellido"]) &&isset($_POST["celular"]) && isset($_POST["email"]) &&isset($_POST["password"]) &&isset($_POST["passwordrepite"])){
		if($_POST["nombre"]!="" && $_POST["apellido"]!="" && $_POST["celular"]!="" && $_POST["email"]!="" && $_POST["password"]!=""&&$_POST["password"]==$_POST["passwordrepite"]){
			
            include "PHP/con_db.php";
			
			$found=false;
			$sql1= "select * from Usuario where Nombre=\"$_POST[nombre]\" or Email=\"$_POST[email]\")";

			$query = $con->query($sql1);
			
			while ($r=$query->fetch_array()) {
				$found=true;
				break;
			}
			
			if($found){
				print "<script>alert(\"Nombre de usuario o email ya estan registrados.\"); window.location='../login_sesion.php';</script>";
			}
            $fechaRegistro=date("d/m/y");
			$sql = "insert into Usuario(Nombre,Apellido,email,Celular,Email,password,FechaRegistro) value (\"$_POST[nombre]\",\"$_POST[apellido]\",\"$_POST[celular]\",\"$_POST[email]\",\"$_POST[password]\",\"$_POST[fechaRegistro]\")";
			$query = $con->query($sql);
			if($query!=null){
				print "<script>alert(\"Registro exitoso. Proceda a logearse\"); window.location='./login_sesion.php';</script>";
			}
         
        }
	}
}





?>