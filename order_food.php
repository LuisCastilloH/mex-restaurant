<?php
if(!empty($_POST)){
	if(isset($_POST["dish"]) &&isset($_POST["cust"])){
		if($_POST["dish"]!=""&& $_POST["cust"]!=""){
			include "conexion.php";
			// $datetime = date("Y-m-d");
			$sql = "insert into Orders (Dish_name, Customer_id, oDate) values (\"$_POST[dish]\",\"$_POST[cust]\", CURDATE())";
			$query = $con->query($sql);
			if($query!=null){
				print "<script>alert(\"Order successfully registered\");window.location='menu.html';</script>";
			}
			else
			{
				//echo "Error: " . $sql . "<br>" . $con->error;
				print "<script>alert(\"Something wrong happened!\");window.location='classical_food.html';</script>";
			}
		}
		else
		{
			print "<script>window.location='classical_food.html';</script>";
		}
	}
}
?>