<?php
    $title = "Confirmar Eliminación";
?>
@extends("layouts.mainempresas")

@section("content")
    <div class="container">
        <div class="row">
            <h1>¿En realidad desea borrar el registro?</h1>
        </div>
        <div class="row">
            <div class="col-md-4">
                <form action="{{url("empresas/eliminar")}}/{{$id}}" method="get">
                    <input type="submit" class="btn btn-danger btn-block" value="Si">
                </form>
            </div>
            <div class="col-md-4">
                <form action="{{url("empresas")}}" method="get">
                    <input type="submit" class="btn btn-success btn-block" value="No">
                </form>
            </div>
        </div>
    </div>
@stop
