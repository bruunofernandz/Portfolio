<?php
	$link=mysqli_connect("localhost","root", "")or die("Nao foi encontrado o mysql");
	mysqli_select_db($link, "escola")or die("Nao foi encontrado o banco de dados");
?>