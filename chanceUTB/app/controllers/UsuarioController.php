<?php

class UsuarioController extends BaseController{

	public function index() {
        $usuarios = Usuario::all()->toJson();
        return $usuarios;
    }
    
	public function create(){
		$usuario = new Usuario;

		$usuario->nombre1 = Input::get('nombre1');
		$usuario->nombre2 = Input::get('nombre2');
		$usuario->apellido1 = Input::get('apellido1');
		$usuario->apellido2 = Input::get('apellido2');
		$usuario->codigo = Input::get('codigo');
		$usuario->bday = Input::get('bday');
		$usuario->email = Input::get('email');
		$usuario->sexo = Input::get('sexo');
		$usuario->password = Input::get('password');
		$usuario->save();
	}

	/*public function update(){
		$usuario = Usuario::find(array[0]->id);
		$usuario->nombre1 = array[0]->nombre1;
		$usuario->nombre2 = array[0]->nombre2;
		$usuario->apellido1 = array[0]->apellido1;
		$usuario->apellido2 = array[0]->apellido2;
		$usuario->password = array[0]->password;
	}*/

	public function show($idusuario){
		$usuario = Usuario::find($idusuario)->toJson();
		return $usuario;
	}
}