<?php

class chance_has_usuario extends Eloquent{
    protected $table = 'chance_has_usuario';
    
    public $timestamp = False;
    
    public function usuario(){
        return $this->belongsTo('Usuario', 'id');
    }
    
    public function chance(){
        return $this->belongsTo('Chance', 'id');
    }
    
    
}