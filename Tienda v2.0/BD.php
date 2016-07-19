<?php
class BD {

    private $localhost;
    private $user;
    private $pass;
    private $database;
    private $conexion = false;

    public function BD($direccion, $usuario, $contrasenia, $basedatos) {
        $this->localhost = $direccion;
        $this->user = $usuario;
        $this->pass = $contrasenia;
        $this->database = $basedatos;
    }

    public function GetMyConnection() {
        if ($this->conexion)
            return $this->conexion;
        $this->conexion = mysql_connect($this->localhost, $this->user, $this->pass) or die('Could not connect to server.');
        mysql_select_db($this->database, $this->conexion) or die('Could not select database.');
        return $this->conexion;
    }

    public function Close() {
        if ($this->conexion != false)
            mysql_close($this->conexion);
        $this->conexion = false;
    }

    public function Query($cadena) {
        return $res = mysql_query($cadena, $this->GetMyConnection());
    }

}?>