<?php

class Chance extends Eloquent{
    protected $table = 'chance';
    
    public $timestamp = False;
    
    public function carro(){
        return $this->belongsTo('Carro', 'id');
    }
    
    public function chance_has_usuario(){
        return $this->hasMany('chance_has_usuario', 'id');
    }
    
    
}