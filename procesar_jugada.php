<?php
session_start();
$_SESSION['jugada'] = $_POST['jugada'];
$_SESSION['jugadaPC'] = rand(1,3);
$saldo = $_SESSION['saldo'];
$ganador = true;

$jugada = $_SESSION['jugada'];
$pc = $_SESSION['jugadaPC'];


if($jugada < $pc ){
	//perdio jugador , gano pc
	$ganador = 0;
}else
if($jugada > $pc ){
	//gano el jugador
	$ganador = 1;
}else
if($jugada == 3 && $pc == 1){
	$ganador = 0;
}else
if($pc == 3 && $jugada == 1){
	$ganador = 1;	
}else
if($pc == $jugada){
	$ganador = 2;	
}


if($ganador == 1){
	$saldo = $saldo + 2;
}else{
	$saldo = $saldo -1;
}



$_SESSION['ganador'] = $ganador;
$_SESSION['saldo'] = $saldo;

header('Location:resultado.php');
?>