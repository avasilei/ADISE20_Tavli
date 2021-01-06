<?php

class Position{

    private $pawns = [];

//prosthikh pouliou
    public function addPawn(Pawn $pawn){
        $this->pawns[] = $pawn;
    }
//aferesh poylioy 
    public function removePawn(){
        return array_pop($this->pawns);
    }
//piasmenh thesh 
    public function isInUse(){
        return $this->getNumberPawns() > 0;
    }
//kai an einai se thesh poy exei poyli ti xrwma exei 
    public function inUseBy(){
        if($this->isInUse()){
            return $this->pawns[0]->getColorPawn();
        }
        else{
            return null;
        }
    }
//poulia 
    public function getNumberPawns(){
        return count($this->pieces);
    }



}