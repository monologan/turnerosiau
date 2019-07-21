<?php

class Modelo
{
    static public function RutasModelo($rutas)
    {
        if ($rutas ==  "seccion" ||$rutas ==  "ingreso" || $rutas == "registrar" || $rutas == "turnoTV" || $rutas == "modulo" || $rutas == "modulo2" ||$rutas == "salir") {
            $pagina = "Vistas/modulos/" . $rutas . ".php";
        } elseif ($rutas == "index") {
            $pagina = "Vistas/modulos/ingreso.php";
        } else {
            $pagina = "Vistas/modulos/ingreso.php";
        }
        return $pagina;
    }
}
