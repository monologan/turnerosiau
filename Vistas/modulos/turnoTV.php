<?php
// session_start();
// if (!$_SESSION["ingreso"]) {
// 	header("location:index.php?ruta=ingreso");
// 	exit();
// }
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Document</title>


</head>

<body>
	<?php header("refresh: 100"); ?>
	<br>
	<h1>Turnos</h1>
	<table id="t1" border="1">
		<thead>
			<tr>
				<th>Turno</th>
				<th>Modulo</th>
			</tr>
		</thead>
		<tbody>
			<?php
			$mostrar = new TurnosC();
			$mostrar->MostrarTurnosC();
			?>
		</tbody>

	</table>
	<audio id="audio" controls style="display:none">
		<source type="audio/mp3" src="audio.mp3">
	</audio>
	<script type="text/javascript">
		
		//audio
		var audio = document.getElementById("audio");
		audio.play();
		
		//blink	
		var color = "red";
		function BlinkIt() {
			var blink = document.getElementById("blink");
			color = (color == "#ffffff") ? "red" : "#ffffff";
			blink.style.color = color;
			blink.style.fontSize = '36px';
			audio.play();
		}
		function parar() {
			clearInterval(ads);
		}
		var ads = setInterval(BlinkIt, 900);
		setTimeout(parar, 15000);

	</script>


</body>

</html>