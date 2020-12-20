<?php
class ConexionDB
{
    // definicion de atributos
    private $host;
    private $user;
    private $password;
    private $databaseName;
    private $conexion;

    public function __construct($host, $user, $password, $databaseName)
    {
        $this->host = $host;
        $this->user = $user;
        $this->password = $password;
        $this->databaseName = $databaseName;
    }

    /**
     * Crea una conexión a la DB
     */
    public function conectar()
    {
        // crea y retorna la conexiÃ³n con la BD
        $this->conexion = new mysqli($this->host, $this->user, $this->password, $this->databaseName);
        if ($this->conexion->connect_errno) {
            die("Error de conexión: (" . $this->conn->connect_error . ")" . $this->conn->connect_errno);
        }
    }

    /**
     * Cierra una conexiÃ³n de DB
     */
    public function cerrar()
    {
        // Metodo que cierra la conexion con la BD
        $this->conexion->close();
    }

    /**
     * Ejecuta una query enviada 
     * como parámetro
     */

    public function ejecutar($sql)
    {
        return $this->conexion->query($sql);
    }

    /* para revisar si hay error en la ejecución de la 
    sentencia SQL */
    /*
    public function ejecutar($sql)
    {
        $q = $this->conexion->query($sql);

        echo 'error ' . $this->conexion->error;
        die;
    }
    ^/
    /* devuelve la cantidad de filas que arrojó la última consulta a la conexión*/

    public function cantFilas()
    {
        return $this->conexion->affected_rows;
    }
}
