<?php

class Usuario extends Eloquent{
    protected $table = 'usuario';
    
    public $timestamp = False;
    
    public function carro(){
        return $this->hasMany('Carro', 'id');
    }
    
    public function chance_has_usuario(){
        return $this->hasMany('chance_has_usuario', 'id');
    }
    
    
}