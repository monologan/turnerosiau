<?php
require_once "conexionBD.php";

class TurnosM extends ConexionBD
{
    //registrar turno
    static public function RegistrarTurnoM($datosC, $tablaBD)
    {
        $pdo = ConexionBD::cBD()->prepare("INSERT INTO $tablaBD (turno, modulo) VALUES(:turno, :modulo)");
        $pdo->bindParam(":turno", $datosC["turno"], PDO::PARAM_INT);
        $pdo->bindParam(":modulo", $datosC["modulo"], PDO::PARAM_INT);


        if ($pdo->execute()) {
            return "bien";
        } else {
            return "Error";        }

        $pdo->close();
    }
    //mostrar turno    
    public function MostrarTurnosM($tablaBD, $tablaBD2)
    {
        $pdo = ConexionBD::cBD()->prepare("SELECT turnos.turno, administradores.usuario FROM $tablaBD
                                            inner join $tablaBD2 on administradores.id=turnos.modulo 
                                            ORDER BY turno DESC LIMIT 2 ");

        $pdo->execute();
        return $pdo->fetchAll();
        $pdo->close();
    }    
}
