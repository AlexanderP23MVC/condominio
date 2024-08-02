<?php
namespace App\Controllers;


class Apto{

    private $apto;
    private $id;
    public function __construct(string $apto,int $id){
            $this->apto = $apto;
            $this->id = $id;
    }


    public function creaateApto(string $apto){
        /* Crear el Apto */
    }

    public function getreadApto(){
        /* leer el Apto */
        return $this->apto;
    }

    public function updateApto(string $apto){
        /* modificar el Apto */
    }
    
    public function deleteApto(string $apto){
        /* eliminar el Apto */
    }
}