<!DOCTYPE html>
<html>
<head>
	<title>PARÁMETROS PASADOS A TRAVÉS DE UN FORMULARIO</title>
	<style type="text/css">
		body {
			width: 60%;
			background-color: #6a6a68;
			font-family: Lobster;
			margin-left: 20%;
			margin-right: 20%;
			margin-top: 2em;
			font-size: 22px;
			color: #2b2b28;
		}

		table {
			margin-left: auto;
			margin-right: auto;

		}
		td, th{
			border: 1px solid black;
			padding: 0.6em;
			font-family: Verdana;
			font-size: 14px;
			border-radius: 1em;
		}
		td {
			background-color: #f1d6ab;
			text-align: center;
		}
		th {
			background-color: #e3b04b;
		}
		section {
			background-color: #f8f8f8;
			width: 70%;
			text-align: center;
			border-radius: 1em;
			padding-top: 1em:
			padding-bottom: 1em;
		}
		.rth{
			background-color: #6a6a68;
			color: #f8f8f8;
		}


	</style>
	<link href="https://fonts.googleapis.com/css?family=Lobster&display=swap" rel="stylesheet"> 
</head>
<body>

<?php
	echo "<section>";
	if(!empty($_GET))
	{
		echo "<br><p>Éstos son los parámetros pasados mediante GET</p>";
		echo "<table>";
		echo "<tr><th class='rth'>Parámetro</th><th>Valor</th>";
		foreach ($_GET as $key => $value) { 
		echo "<tr>";
		echo "<th>";	
		echo $key;
		echo "</th>"; 
		echo "<td>";	
		echo $value;
		echo "</td>"; 
		echo "</tr>";
		}
		echo "</table>";
	}
	else {
		echo "<br><p>No hay parámetros pasados mediante GET</p>";
	}
	echo "<br></section>";
	echo "<br>";
	echo "<section>";
	if(!empty($_POST))
	{
		echo "<br><p>Éstos son los parámetros pasados mediante POST</p>";
		echo "<table>";
		echo "<tr><th class='rth'>Parámetro</th><th>Valor</th>";		
		foreach ($_POST as $key => $value) { 
		echo "<tr>";
		echo "<th>";	
		echo $key;
		echo "</th>"; 
		echo "<td>";	
		echo $value;
		echo "</td>"; 
		echo "</tr>";
		}
		echo "</table>";
	}
	else {
		echo "<br><p>No hay parámetros pasados mediante POST</p>";
	}
	echo "<br></section>";
?>


</body>
</html>


