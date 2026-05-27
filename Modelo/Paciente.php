<?php

/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/PHPClass.php to edit this template
 */

/**
 * Description of Paciente
 *
 * @author franc
 */
class Paciente {

    private $identificacion;
    private $nombres;
    private $apellidos;
    private $fechaNacimiento;
    private $sexo;

    public function _construct($ide, $nom, $ape, $fNa, $sex) {
        $this->identificacion = $ide;
        $this->nombres = $nom;
        $this->apellidos = $ape;
        $this->fechaNacimiento = $fNa;
        $this->sexo = $sex;
    }

    public function obtenerldentificacion() {
        return $this->identificacion;
    }

    public function obtenerNombres() {
        return $this->nombres;
    }

    public function obtenerApellidos() {
        return $this->apellidos;
    }

    public function obtenerFechaNacimiento() {
        return $this->fechaNacimiento;
    }

    public function obtenerSexo() {
        return $this->sexo;
    }
}
