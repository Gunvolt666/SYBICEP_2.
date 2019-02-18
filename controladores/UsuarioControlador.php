<?php

include '../clases/ClaseUsuarios.php';

class UsuarioControlador
{

    public static function login($usuario, $password)
    {
        $obj_usuario = new Usuario();
        $obj_usuario->setUsuario($usuario);
        $obj_usuario->setPassword($password);

        return Usuario::login($obj_usuario);
    }

    public function getUsuario($usuario, $password)
    {
        $obj_usuario = new Usuario();
        $obj_usuario->setUsuario($usuario);
        $obj_usuario->setPassword($password);

        return Usuario::getUsuario($obj_usuario);
    }

    public function registrar($nombre, $usuario, $password, $privilegio)
    {
        $obj_usuario = new Usuario();
        $obj_usuario->setNombre($nombre);
        $obj_usuario->setUsuario($usuario);

        $obj_usuario->setPrivilegio($privilegio);
        $obj_usuario->setPassword($password);

        return Usuario::registrar($obj_usuario);
    }

}
