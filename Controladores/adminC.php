<?php
include_once 'database.php';
class AdminC
{

    public function IngresoC()
    {
        // if(isset($_POST["usuarioI"])){

        //     $datosC = array("usuario"=>$_POST["usuarioI"], "clave"=>$_POST["claveI"]);

        //     $tablaBD = "administradores";

        //     $respuesta = AdminM::IngresoM($datosC, $tablaBD);

        //     if ($respuesta["usuario"] == $_POST["usuarioI"] && $respuesta["clave"] == $_POST["claveI"]) {
        //         session_start();
        //         $_SESSION["ingreso"] = true;

        //         header("location:index.php?ruta=modulo");


        //     } else {
        //         echo "ERROR AL INGRESAR";
        //     }

        // }
        session_start();
          
        if (isset($_SESSION['rol'])) {
            switch ($_SESSION['rol']) {
                case 1:
                    header("location:index.php?ruta=modulo");
                    break;
                case 2:
                    header("location:index.php?ruta=modulo2");
                    break;
                default:
            }
        }

        if (isset($_POST['usuarioI']) && isset($_POST['claveI'])) {
            $username = $_POST['usuarioI'];
            $password = $_POST['claveI'];
            $db = new Database();
            $query = $db->connect()->prepare('SELECT*FROM administradores WHERE usuario = :usuario AND clave = :clave');
            $query->execute(['usuario' => $username, 'clave' => $password]);
            $row = $query->fetch(PDO::FETCH_NUM);
            if ($row == true) {
                // validar rol
                $rol = $row[3];
                $_SESSION['rol'] = $rol;
                switch ($_SESSION['rol']) {
                    case 1:
                        header("location:index.php?ruta=modulo");
                        break;

                    case 2:
                        header("location:index.php?ruta=modulo2");
                        break;

                    default:
                }
            } else {
                // no existe el usuario
                echo "El usuario o contraseña son incorrectos";
            }
        }
    }
}
