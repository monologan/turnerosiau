

const formulario = document.getElementById('tercero'); 
console.log(formulario);
formulario.addEventListener("click", function(){ 
	var ventana = 'http://localhost/mvc/index.php?ruta=turnoTV';
	window.location.reload();
 }); 