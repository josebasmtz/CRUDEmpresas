@extends("layouts.mainempresas")

@section("css")
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
@stop

@section("content")
    <div class="container">
        <h1 class="text-center">Editar Empresa</h1>
        <section class="col-md-4 col-md-offset-4">
            {{\Illuminate\Support\Facades\Form::open()}}
            <input type="text" name="nombre" class="form-control" placeholder="Nombre" value="{{$empresa->nombre}}">
            <input type="text" name="razon_social" class="form-control" placeholder="Razon Social" value="{{$empresa->razon_social}}">
            <input type="datetime" name="fecha_creacion" class="form-control datepicker" placeholder="Fecha de Creacion" value="{{$empresa->fecha_creacion}}">
            <input type="text" name="trabajadores" class="form-control" placeholder="N° Trabajadores" value="{{$empresa->trabajadores}}">
            <input type="text" name="rfc" class="form-control" placeholder="RFC" value="{{$empresa->rfc}}">
            <select name="estado">
                <option value="1" @if($empresa->estado == 1) selected @endif>Activo</option>
                <option value="0" @if($empresa->estado == 0) selected @endif>Inactivo</option>
            </select>
            <input type="submit" value="Editar" class="btn btn-primary btn-block">
            {{\Illuminate\Support\Facades\Form::close()}}
        </section>
    </div>
@stop

@section("js")
    <link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/themes/smoothness/jquery-ui.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
    <script src="{{asset("js/datepicker.js")}}"></script>
@stop