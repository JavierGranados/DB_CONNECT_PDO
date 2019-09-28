<?php
#IMPORTAR LAS VARIABLES DE CONEXION
require_once 'Config.php';

#CLASE PARA LA CONEXION DE BASE DE DATOS
class Conection{
    
    #VARIABLES DE CONEXION
    private $host;
    private $dbname;
    private $user;
    private $password;
    private $mbd; 

    #CONSTRUCTOR DE LA CLASE
    function __construct(){
        $this->host = HOST;
        $this->dbname = DBNAME;
        $this->user = USER;
        $this->password = PASSWORD;
    }

    #METODO PARA CONECTAR A LA BASE DE DATOS
    public function db_connect(){
        try {
            $this->mbd = new PDO('mysql:host='.$this->host.';dbname='.$this->dbname,$this->user, $this->password);
            return $this->mbd;
        } catch (PDOException $e) {
            print "¡Error!: " . $e->getMessage() . "<br/>";
            die();
        }
    }

    #METODO PARA CERRAR LA CONEXION DE LA BASE DE DATOS
    public function db_close(){
        $this->mbd = null;
    }
}