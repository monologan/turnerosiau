<?php
// session_start();
// if (!$_SESSION["ingreso"]) {
// 	header("location:index.php?ruta=ingreso");
// 	exit();
// }
?>
<head runat="server"></head>


<div class="container my-5 py-5 border">
	<div class="row border">
		<div class="col-7 text-white border py-3">
			<div class="embed-responsive embed-responsive-4by3">
				<iframe class="embed-responsive-item" src="https://www.youtube.com/embed/zpOULjyy-n8?rel=0" ></iframe>
			</div>
		</div>
		<div class="col-5  text-white text-center border ">

			<table id="t1" class="table table-dark table-bordered bg-info mt-3">
				<thead>
					<tr class="bg-danger">
						<th scope="col">
							<h1 class="display-5">TURNO</h1>
						</th>
						<th scope="col">
							<h1 class="display-5">MODULO</h1>
						</th>
					</tr>
				</thead>
				<tbody>
					<?php
				
					$mostrar = new TurnosC();
					$mostrar->MostrarTurnosC();
				
					?>
				</tbody>
			</table>

		</div>
	</div>
</div>


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
	
	function recargar(){
	windwos.location.load();
}

</script>