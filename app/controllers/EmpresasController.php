<?php

class EmpresasController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function getIndex(){
	    $empresas = Empresa::all();
	    return \Illuminate\Support\Facades\View::make("empresas.empresas")->with(["empresas"=>$empresas]);
    }
    public function getAgregar(){
	    return View::make("empresas.agregar")->with(["title"=>"Agregar"]);
    }

    public function postAgregar(){
        $data = Input::all();
        $rules = ["nombre"=>"required",
        "razon_social"=>"required",
        "fecha_creacion"=>"required",
        "rfc"=>"required"];
        $validation = Validator::make($data, $rules);
        if($validation){
            $empresa = Empresa::create($data);
        }
        return Redirect::to("empresas");
    }

    public function getEditar($id){
        $empresa = Empresa::where("id","=", $id)->firstOrFail();
        return View::make("empresas.editar")->with(["title"=>"Editar", "empresa"=>$empresa]);
    }

    public function postEditar($id){
        $empresa = Empresa::where("id","=", $id)->firstOrFail();
        $data = Input::all();
        $empresa->nombre = $data['nombre'];
        $empresa->razon_social = $data['razon_social'];
        $empresa->fecha_creacion = $data['fecha_creacion'];
        $empresa->trabajadores = $data['trabajadores'];
        $empresa->rfc = $data['rfc'];
        $empresa->estado = $data['estado'];
        $empresa->touch();
        return Redirect::to("empresas");
    }
}
