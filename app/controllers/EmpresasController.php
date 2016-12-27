<?php

class EmpresasController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function getIndex(){
	    $empresas = Empresa::all();
	    return \Illuminate\Support\Facades\View::make("empresas.empresas")->with(["title"=>"Empresas","empresas"=>$empresas]);
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

    public function getConfirmareliminacion($id){
        return View::make("empresas.confirmarEliminacion")->with(["id"=>$id]);
    }

    public function getEliminar($id){
        $empresa = Empresa::where("id","=", $id)->firstOrFail();
        $empresa->delete();
        return Redirect::to("empresas");
    }

    public function getActivas(){
        $empresas = Empresa::where("estado","=",1)->get();
        return View::make("empresas.empresas")->with(["title"=>"Empresas Activas", "empresas"=>$empresas]);
    }

    public function getInactivas(){
        $empresas = Empresa::where("estado","=",0)->get();
        return View::make("empresas.empresas")->with(["title"=>"Empresas Inactivas", "empresas"=>$empresas]);
    }

    public function getBuscar(){
        $data = Input::all();
        $empresas = Empresa::whereRaw("razon_social = ?",[$data['raz_soc']])->get();
        return View::make("empresas.empresas")->with(["title"=>"Busqueda de Empresa", "empresas"=>$empresas]);
    }
}
