@extends("layouts.mainempresas")

@section("css")
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
@stop

@section("content")
    <div class="container">
        <h1 class="text-center">{{$title}}</h1>
        <section class="col-md-4 col-md-offset-4">
            {{\Illuminate\Support\Facades\Form::open()}}
                <input type="text" name="nombre" class="form-control" placeholder="Nombre">
                <input type="text" name="razon_social" class="form-control" placeholder="Razon Social">
                <input type="datetime" name="fecha_creacion" class="form-control datepicker" placeholder="Fecha de Creacion">
                <input type="text" name="trabajadores" class="form-control" placeholder="N° Trabajadores">
                <input type="text" name="rfc" class="form-control" placeholder="RFC">
                <select name="estado">
                    <option value="1">Activo</option>
                    <option value="0">Inactivo</option>
                </select>
                <input type="submit" value="Agregar" class="btn btn-primary btn-block">
            {{\Illuminate\Support\Facades\Form::close()}}
        </section>
    </div>
@stop

@section("js")
    <link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/themes/smoothness/jquery-ui.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
    <script src="{{asset("js/datepicker.js")}}"></script>
@stop