<?php


class ChanceController extends BaseController{

	public function index() {
        $chances = Chance::all()->toJson();
        return $chances;
    }

	public function create(){
		$chance =  new Chance;
		$chance->fecha = Input::get('fecha');
		$chance->hora = Input::get('hora');
		$chance->llegada = Input::get('llegada');
		$chance->salida = Input::get('salida');
		$chance->cupos = Input::get('cupos');
		$placa = Input::get('placa');
		$carro = Carro::find($placa);
		$chance = $carro()->associate($carro);
		$chance->save();
	}

	/*public function uptdate($vjson){
		$array[0] = json_decode($vjson);
		$chance = chance::find($array[0]->idChance);
		$chance->fecha = $array[0]->fecha;
		$chance->hora = $array[0]->hora;
		$chance->llegada = $array[0]->llegada;
		$chance->salida = $array[0]->salida;
		$chance->cupos = $array[0]->cupos;
		$chance->save();
	}*/

	public function show($idchance){
		$chance = Chance::find($idchance)->toJson();
		return $chance;
	}

}