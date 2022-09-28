<?php
Class carrousel_models {
    private $id;
    private $tit;
    private $desc;
    private $imag;
    private $texto;
  
    public function __construct($id,$tit,$desc,$imag,$texto){
        $this->id=$id;
        $this->tit = $tit;
        $this->desc = $desc;
        $this->imag = $imag;
        $this->texto = $texto;
     
    }

    public function setId($id){
        $this->id= $id;
    }
    public function setTit($tit){
        $this->tit= $tit;
    }
    public function setDesc($desc){
        $this->desc = $desc;
    }
    public function setImag($imag){
        $this->imag = $imag;
    }
    public function setText($texto){
        $this->texto = $texto;
    }
  
    public function getId(){
        return $this->id;
    }
    public function getTit(){
        return $this->tituloc;
    }
    public function getDesc(){
        return $this->desc;
    }
    public function getImag(){
        return $this->imag;
    }
    public function getTexto(){
        return $this->texto;
    }
}
?>