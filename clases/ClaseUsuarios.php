<?php

include 'MySQLclass.php';
include 'UsuarioEntidad.php';

class Usuario extends Conexion
{
    protected static $cnx;

    private static function getConexion()
    {
        self::$cnx = Conexion::conectar();
    }

    private static function desconectar()
    {
        self::$cnx = null;
    }

    
    public static function login($usuario)
    {
        $query = "SELECT * FROM usuarios WHERE usuario = :usuario AND password = :password";

        self::getConexion();

        $resultado = self::$cnx->prepare($query);

        $resultado->bindValue(":usuario", $usuario->getUsuario());
        $resultado->bindValue(":password", $usuario->getPassword());

        $resultado->execute();

        if ($resultado->rowCount() > 0) {
            $filas = $resultado->fetch();
            if ($filas["usuario"] == $usuario->getUsuario()
                && $filas["password"] == $usuario->getPassword()) {
                return true;
            }
        }

        return false;
    }


    public static function getUsuario($usuario)
    {
        $query = "SELECT id,nombre,usuario,privilegio,fecha_registro FROM usuarios WHERE usuario = :usuario AND password = :password";

        self::getConexion();

        $resultado = self::$cnx->prepare($query);

        $resultado->bindValue(":usuario", $usuario->getUsuario());
        $resultado->bindValue(":password", $usuario->getPassword());

        $resultado->execute();

        $filas = $resultado->fetch();

        $usuario = new Usuario();
        $usuario->setId($filas["id"]);
        $usuario->setNombre($filas["nombre"]);
        $usuario->setUsuario($filas["usuario"]);

        $usuario->setPrivilegio($filas["privilegio"]);
        $usuario->setFecha_registro($filas["fecha_registro"]);

        return $usuario;
    }

    /**
     * Metodo que sirve para registrar usuarios
     *
     * @param      object         $usuario
     * @return     boolean
     */
    public static function registrar($usuario)
    {
        $query = "INSERT INTO usuarios (nombre,usuario,password,privilegio) VALUES (:nombre,:usuario,:password,:privilegio)";

        self::getConexion();

        $resultado = self::$cnx->prepare($query);

        $resultado->bindValue(":nombre", $usuario->getNombre());

        $resultado->bindValue(":usuario", $usuario->getUsuario());
        $resultado->bindValue(":password", $usuario->getPassword());
        $resultado->bindValue(":privilegio", $usuario->getPrivilegio());

        if ($resultado->execute()) {
            return true;
        }

        return false;
    }
}
