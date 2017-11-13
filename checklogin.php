<?php
if(!empty($_POST)){
	if(isset($_POST["Email"]) &&isset($_POST["Password"])){
		if($_POST["Email"]!=""&&$_POST["Password"]!=""){
			include "conexion.php";
			$user_id=null;
			$sql1= "select * from Employees where (Email=\"$_POST[Email]\") and Password=\"$_POST[Password]\" ";
			$query = $con->query($sql1);
			while ($r=$query->fetch_array()) {
				$user_id=$r["Employee_id"];
				break;
			}
			if($user_id==null){
				print "<script>alert(\"Invalid access.\");window.location='login.html';</script>";
			}else{
				session_start();
				$_SESSION["admin"]=$_POST["Email"];
				print "<script>window.location='employees.php';</script>";				
			}
		}
		else
		{
			print "<script>window.location='login.html';</script>";
		}
	}
}
?>