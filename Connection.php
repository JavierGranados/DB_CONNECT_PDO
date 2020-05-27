<?php
# IMPORT FILE OF CONNECTION config.php
require_once 'config.php';

# CONNECTION CLASS - CLASE CONEXION 
class Conection{
    # DATA OF CONNECTION - DATOS DE CONEXION
    private $dsn;
    private $user;
    private $password;
    private $mbd; 
    private $options;

    # CLASS CONSTRUCTOR - CONSTRUCTOR DE LA CLASE
    function __construct(){
        $this->dsn = DB['dsn'];
        $this->user = DB['user'];
        $this->password = DB['password'];
        $this->options = [
          PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8',
          PDO::ATTR_ERRMODE,
          PDO::ERRMODE_EXCEPTION
        ];
    }

    # CONNECT DATABASE METHOD - METODO CONECTAR BASE DE DATOS
    public function db_connect(){
        try {
            $this->mbd = new PDO($this->dsn,$this->user, $this->password,$this->options);
            return $this->mbd;
        } catch (PDOException $e) {
            print "¡Error!: " . $e->getMessage() . "<br/>";
            die();
        }
    }

    # CLOSE CONNECTION METHOD  - METODO CERRAR CONEXION  
    public function db_close(){
        $this->mbd = null;
    }
}





