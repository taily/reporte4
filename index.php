<?php 
session_start(); 
if(!isset($_SESSION['saldo'])){
	$_SESSION['saldo'] = 10;
}
?>
<!doctype html>
<html>
<head>
<title>Yanquenpo</title>
</head>
<body>
<h1>Jugar</h1>
<p>Su saldo es <?=$_SESSION['saldo']?></p>
<p>Seleccione una opcion para jugar (costo S/ 1.00)</p>
<!--prg permite procesar una llamda post y luego mandar lo que necesita el usuario-->

<form action="procesar_jugada.php" method="post">
<input type="image" src="http://www.restauracionjuvenil.com/archivos/img/piedra.jpg" nwidth="60" height="60" />
<input type="hidden" name="jugada" value="2"/>
</form>

<form action="procesar_jugada.php" method="post">
<input type="image" src="http://us.123rf.com/400wm/400/400/hatza/hatza1205/hatza120500077/13586898-papel-en-el-estilo-dibujo.jpg" width="60" height="60"/>
<input type="hidden" name="jugada" value="3"/>
</form>

<form action="procesar_jugada.php" method="post">
<input type="image" src="http://blogs.hoy.es/la-trastienda/files/2011/10/tijeras_bn1.jpg"  width="60" height="60" />
<input type="hidden" name="jugada" value="1"/>
</form>
</body>
</html>