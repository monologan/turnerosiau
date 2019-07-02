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
		<audio id="audio" controls style="display:none" >
			<source type="audio/mp3" src="audio.mp3">
		</audio>
	<script type="text/javascript">
	//audio
		var audio = document.getElementById("audio");
		audio.play();
	//blink	
	window.setInterval(BlinkIt, 1000);
		var color = "red";
		function BlinkIt() {
			var blink = document.getElementById("blink");
			color = (color == "#ffffff") ? "red" : "#ffffff";
			blink.style.color = color;
			blink.style.fontSize = '36px';
			window.setTimeout("BlinkIt()", 5000);
		// 	for (var i = 900; i < 4500; i = i + 900) {
		// 	//setTimeout("BlinkIt()", i);
		// 	setTimeout("BlinkIt()", i + 450);
		// }
	}		
	</script>


</body>

</html>