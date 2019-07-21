<?php

class TurnosC
{
    //registrar turnos
    public function RegistrarTurnoC()
    {

        if (isset($_POST['turnoW'])) {
            $datosC = array("turno" => $_POST['turnoW'], "modulo" => $_POST['moduloW']);

            $tablaBD = "turnos";

            $resultado = TurnosM::RegistrarTurnoM($datosC, $tablaBD);

<<<<<<< HEAD
            if ($resultado == "bien") {
                header("location:index.php?ruta=modulo");    
=======
            if ($resultado == "bien") {                
                header("location:index.php?ruta=modulo");           
                
>>>>>>> b5be3e5b13928f07388c6a9520313438cb3fefee
            } else {
                echo "Turno en Atencion.";
            }
        }
    }
    //mostrar turno
    public function MostrarTurnosC()
    {
        $tablaBD = "turnos";
        $tablaBD2 = "administradores";

        $respuesta = TurnosM::MostrarTurnosM($tablaBD, $tablaBD2);
        
        foreach ($respuesta as $key => $value) {
            
            echo '<tr id="blink">
            <td ><h1 class="display-5">' . $value["turno"] . '</h1></td>    
            <td ><h1 class="display-5">' . $value["usuario"] . '</h1></td>                
        </tr>';
        }
<<<<<<< HEAD
      
=======
        
>>>>>>> b5be3e5b13928f07388c6a9520313438cb3fefee
    }
}
?>


