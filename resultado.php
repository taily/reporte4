<?php session_start();?>
<!doctype html>
<html>
<head>
<title>Yanquenpo</title>
</head>
<body>
<h1>Resultado</h1>
<p>Su opcion</p>
<?php if($_SESSION['jugada'] == 1){ ?>
<img src="http://blogs.hoy.es/la-trastienda/files/2011/10/tijeras_bn1.jpg"  width="60" height="60" />
<?}else if($_SESSION['jugada'] == 2){?>
<img src="http://www.restauracionjuvenil.com/archivos/img/piedra.jpg" width="60" height="60" />
<?}else{?>
<img src="http://us.123rf.com/400wm/400/400/hatza/hatza1205/hatza120500077/13586898-papel-en-el-estilo-dibujo.jpg" width="60" height="60"/>
<?}?>

<p>PC</p>
<?php if($_SESSION['jugadaPC'] == 1){ ?>
<img src="http://blogs.hoy.es/la-trastienda/files/2011/10/tijeras_bn1.jpg"  width="60" height="60" />
<?}else if($_SESSION['jugadaPC'] == 2){?>
<img src="http://www.restauracionjuvenil.com/archivos/img/piedra.jpg" width="60" height="60" />
<?}else{?>
<img src="http://us.123rf.com/400wm/400/400/hatza/hatza1205/hatza120500077/13586898-papel-en-el-estilo-dibujo.jpg" width="60" height="60"/>
<?}?>

<? if($_SESSION['ganador'] == 1){?>
<p>Gano la partida.</p>	
<?}else if($_SESSION['ganador'] == 2){?>
<p>Empate , vuelva a jugar.</p>	
<?}else{?>
<p>Perdio el juego.</p>	
<?}?>

<p>Su saldo es de S/. <?=$_SESSION['saldo'];?></p>

<a href="index.php">Volver a Jugar</a>
</body>
</html>