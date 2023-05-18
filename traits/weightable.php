<?php
trait Weightable{
    protected $weight;

    public function getWeight(){
        if($this->weight){
        return $this->weight;
        }else{
            return 'peso non impostato';
        }
    }
    public function setWeight($weight, $unit){
        $this->weight = $weight.$unit;
    }

}