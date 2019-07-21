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

            if($resultado == "bien"){

                header("location:index.php?ruta=modulo");
            } else {
                echo "Turno en Atencion.  Por favor ingrese el siguiente";
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
            <td >' . $value["turno"] . '</td>    
            <td >' . $value["usuario"] . '</td>               
            
        </tr>';
        }        
    }
}
