<?php

class EmpresasController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function getIndex(){
	    return \Illuminate\Support\Facades\View::make("empresas.empresas")->with(Empresa::getEmpresas());
    }
}
