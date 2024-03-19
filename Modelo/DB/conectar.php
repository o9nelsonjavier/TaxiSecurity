<?php
class MySQLDB {
    private $host;
    private $username;
    private $password;
    private $database;
    private $conn;

    // Constructor
    public function __construct($host, $username, $password, $database) {
        $this->host = $host;
        $this->username = $username;
        $this->password = $password;
        $this->database = $database;

        // Intentar conectarse a la base de datos
        $this->conn = new mysqli($this->host, $this->username, $this->password, $this->database);

        // Verificar si hay errores de conexión
        if ($this->conn->connect_error) {
            die("Error de conexión: " . $this->conn->connect_error);
        }
    }

    // Método para ejecutar consultas SQL
    public function query($sql) {
        return $this->conn->query($sql);
    }

    // Método para cerrar la conexión
    public function close() {
        $this->conn->close();
    }
}
