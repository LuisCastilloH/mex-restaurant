<?php
if(!empty($_POST)){
	if(isset($_POST["NameR"]) &&isset($_POST["AddressR"]) &&isset($_POST["EmailR"]) &&isset($_POST["PasswordR"])){
		if($_POST["NameR"]!=""&& $_POST["AddressR"]!=""&&$_POST["EmailR"]!=""&&$_POST["PasswordR"]!=""){
			include "conexion.php";
			$found=false;
			$sql1= "select * from Customers where Name=\"$_POST[NameR]\" or Email=\"$_POST[EmailR]\"";
			$query = $con->query($sql1);
			while ($r=$query->fetch_array()) {
				$found=true;
				break;
			}

			if($found){
				print "<script>alert(\"Customer already registered.\");window.location='login.html';</script>";
			}
			$sql = "insert into Customers (Name,Address,Email,Password) values (\"$_POST[NameR]\",\"$_POST[AddressR]\",\"$_POST[EmailR]\",\"$_POST[PasswordR]\")";
			$query = $con->query($sql);
			if($query!=null){
				print "<script>alert(\"Register Succesful. Now you can order!\");window.location='login.html';</script>";
			}
			else
			{
				//echo "Error: " . $sql . "<br>" . $con->error;
				print "<script>alert(\"Something wrong happened!\");window.location='login.html';</script>";
			}
		}
		else
		{
			print "<script>window.location='login.html';</script>";
		}
	}
}
?>