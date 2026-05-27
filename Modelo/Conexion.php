<?php

/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/PHPClass.php to edit this template
 */

/**
 * Description of Conexion
 *
 * @author franc
 */
class Conexion {

    private $MariaDB ;
    private $sql;
    private $result;
    private $filasAfectadas;
    private $citald;

    public function abrir() {
        $this->MariaDB  = new mysqli("localhost", "root", "", "citas");
        if (!$this->MariaDB->connect_error) {
            return 0;
        } else {
            return 1;
        }
    }

    public function cerrar() {
        $this->MariaDB ->close();
    }

    public function consulta($sql) 
    {
        $this->sql = $sql;
        $this->result = $this->MariaDB ->query($this->sql);
        $this->filasAfectadas = $this->MariaDB ->affected_rows;
        $this->citald = $this->MariaDB ->insert_id;
    }

    public function obtenerResult() {
        return $this->result;
    }

    public function obtenerFilasAfectadas() {
        return $this->filasAfectadas;
    }

    public function obtenerCitald() {
        return $this->citald;
    }
}
