<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of equipocamp
 *
 * @author cetecom
 */
class equipocamp {
    
    private $idequipocamp;
    private $idequipo;
    private $idcampeonato;
    private $pganados;
    private $pempatados;
    private $pperdidos;
    private $gafavor;
    private $gencontra;
    
    function __construct($idequipocamp, $idequipo, $idcampeonato, $pganados, $pempatados, $pperdidos, $gafavor, $gencontra) {
        $this->idequipocamp = $idequipocamp;
        $this->idequipo = $idequipo;
        $this->idcampeonato = $idcampeonato;
        $this->pganados = $pganados;
        $this->pempatados = $pempatados;
        $this->pperdidos = $pperdidos;
        $this->gafavor = $gafavor;
        $this->gencontra = $gencontra;
    }
    
    function getIdequipocamp() {
        return $this->idequipocamp;
    }

    function getIdequipo() {
        return $this->idequipo;
    }

    function getIdcampeonato() {
        return $this->idcampeonato;
    }

    function getPganados() {
        return $this->pganados;
    }

    function getPempatados() {
        return $this->pempatados;
    }

    function getPperdidos() {
        return $this->pperdidos;
    }

    function getGafavor() {
        return $this->gafavor;
    }

    function getGencontra() {
        return $this->gencontra;
    }

    function setIdequipocamp($idequipocamp) {
        $this->idequipocamp = $idequipocamp;
    }

    function setIdequipo($idequipo) {
        $this->idequipo = $idequipo;
    }

    function setIdcampeonato($idcampeonato) {
        $this->idcampeonato = $idcampeonato;
    }

    function setPganados($pganados) {
        $this->pganados = $pganados;
    }

    function setPempatados($pempatados) {
        $this->pempatados = $pempatados;
    }

    function setPperdidos($pperdidos) {
        $this->pperdidos = $pperdidos;
    }

    function setGafavor($gafavor) {
        $this->gafavor = $gafavor;
    }

    function setGencontra($gencontra) {
        $this->gencontra = $gencontra;
    }



    
    
}
