<?php

class Carro extends Eloquent{
    protected $table = 'carro';
    
    public $timestamp = False;
    
    public function usuario(){
        return $this->belongsTo('Usuario', 'id');
    }
    
    public function chance(){
        return $this->hasMany('Chance', 'id');
    }
    
    
}