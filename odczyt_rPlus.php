<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <title>pliki</title>
</head>
<body>
    <?php
	$nazwa="testowy.txt";
		if(@fopen($nazwa,"r+")){
		$uchwyt=fopen($nazwa,"r+");
		$odczyt=fread($uchwyt,filesize($nazwa));//Można zamiast filesize wpisać np. 2.
		echo $odczyt;
		fwrite($uchwyt,"ab");
		}
		else echo "Brak pliku.";
	?>
</body>
</html>
