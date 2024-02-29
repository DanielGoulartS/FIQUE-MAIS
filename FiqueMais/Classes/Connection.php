<?php

class Connection {

    private $host;
    private $usuario;
    private $senha;
    private $base;
    private $dbConnection;

    public function __construct() {
        $this->host = 'localhost';
        $this->usuario = 'root';
        $this->senha = '';
        $this->base = 'base';

        $this->dbConnection = mysqli_connect($this->host, $this->usuario, $this->senha, $this->base)
                or die("Erro ao Conectar a base de dados.");
    }

    public function IsConnected() {
        return mysqli_get_connection_stats($this->dbConnection);
    }

    public function CloseConnection() {
        return mysqli_close($this->dbConnection);
    }

    public function Query(string $query) {
        return mysqli_query($this->dbConnection, $query);
    }

    public function getHost() {
        return $this->host;
    }

    public function getUsuario() {
        return $this->usuario;
    }

    public function getSenha() {
        return $this->senha;
    }

    public function getBase() {
        return $this->base;
    }

    public function getDbConnection() {
        return $this->dbConnection;
    }

    public function setHost($host): void {
        $this->host = $host;
    }

    public function setUsuario($usuario): void {
        $this->usuario = $usuario;
    }

    public function setSenha($senha): void {
        $this->senha = $senha;
    }

    public function setBase($base): void {
        $this->base = $base;
    }

    public function setDbConnection($dbConnection): void {
        $this->dbConnection = $dbConnection;
    }
    
}
