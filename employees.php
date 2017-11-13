<?xml version="1.0" encoding="UTF-8"?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN"
    "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html version="-//W3C//DTD XHTML 1.1//EN"
      xmlns="http://www.w3.org/1999/xhtml" xml:lang="en"
      xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance"
      xsi:schemaLocation="http://www.w3.org/1999/xhtml
                          http://www.w3.org/MarkUp/SCHEMA/xhtml11.xsd"
>
    <head>
        <title>Login-MexRest</title>
        <meta http-equiv="Content-Type" content="application/xhtml+xml; 
        charset=utf-8" /> 
        <meta name="author" content="Jose Hernandez" />
        <meta name="description" content="login for chef and workers" />
        <meta name="keywords" content="login, workers" />
        <link rel="stylesheet" type="text/css" href="style.css" />
        <script type="text/javascript" src="main.js"></script>

    </head>
    <body>
        <div id="header">
            <ol class="contentlink-bc">
                <li>
                    <a href="." title="MexRes - El castillo">MexRes</a>
                </li>
                <li>
                    <a>Login</a>
                </li>
            </ol>
            <ul id="navmenu">
                <li><a href="about.html">About Us</a></li>
                <li><a href="menu.html">Menu</a></li>
                <li><a href="markets.html">Mexican markets</a></li>
                <li><a href="contact.html">Contact Us</a></li>
                <li><a>Login</a></li>
            </ul>
        </div>
        <div id="content"> 
        	<?php
        		session_start();
        		include "conexion.php";
        		$found=false;
				$sql1= "select * from Employees";
				$query = $con->query($sql1);
				$admin=$_SESSION['admin'];
				$sql2="select * from Employees where Email=\"$admin\"";
				$query2 = $con->query($sql2);
				if($admin == "luis@gmail.com")
				{
					while ($r=$query->fetch_array()) {
				      	echo "EMP ID :{$r[0]}  <br> ".
         				"EMP NAME : {$r[1]} <br> ".
         				"EMP EMAIL : {$r[2]} <br> ".
         				"EMP ADMIN : {$r[3]} <br> ".
         				"EMP PASS : {$r[4]} <br> ".
         				"EMP SALARY : {$r[5]} <br> ".
         				"--------------------------------<br>";
					}
				}
				else
				{
					while ($r=$query2->fetch_array()) {
				      	echo "EMP ID :{$r[0]}  <br> ".
         				"EMP NAME : {$r[1]} <br> ".
         				"EMP EMAIL : {$r[2]} <br> ".
         				"EMP ADMIN : {$r[3]} <br> ".
         				"EMP PASS : {$r[4]} <br> ".
         				"EMP SALARY : {$r[5]} <br> ".
         				"--------------------------------<br>";
					}
				}
        	?>
        </div>
        <div id="footer">
            <dl>
                <dt>Author</dt>
                <dd>Jose Hernandez</dd>
                <dt>&#169; 2016</dt>
                <dd>All rights reserved</dd>
                <dt>On service by</dt>
                <dd>Luis Castillo</dd>
            </dl>
        </div>
    </body>
</html>
