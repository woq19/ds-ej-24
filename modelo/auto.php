<?php

class auto {

    private $marca;
    private $modelo;
    private $version;
    private $anio;

    public function getMarca(){
        return $this->marca;
    }
    public function setMarca($marca){
        $this->marca=$marca;
    }
    public function getModelo(){
        return $this->modelo;
    }
    public function setModelo($modelo){
        $this->modelo=$modelo;
    }
    public function getVersion(){
        return $this->version;
    }
    public function setVersion($version){
        $this->version=$version;
    }
    public function getAnio(){
        return $this->anio;
    }
    public function setAnio($anio){
        $this->anio=$anio;
    }
    
    public function MostrarDatos(){
    echo 'Marca: '.$this->getMarca(). '<br>';
    echo 'Modelo: '.$this->getModelo(). '<br>';
    echo 'Version: '.$this->getVersion(). '<br>';
    echo 'Año: '.$this->getAnio(). '<br>';


    }
    
}

