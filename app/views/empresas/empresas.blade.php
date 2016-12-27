<?php
        $title = "Empresas";
?>

@extends("layouts.mainempresas")
@section("content")
    <div class="container">
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Nombre</th>
                    <th>Razon social</th>
                    <th>Fecha Creacion</th>
                    <th>N° Empleados</th>
                    <th>RFC</th>
                    <th>Estado</th>
                    <th>Opciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach($empresas as $empresa)
                    <tr>
                        <td>{{$empresa->nombre}}</td>
                        <td>{{$empresa->razon_social}}</td>
                        <td>{{$empresa->fecha_creacion}}</td>
                        <td>{{$empresa->trabajadores}}</td>
                        <td>{{$empresa->rfc}}</td>
                        <td>{{($empresa->estado==1)?"Activo":"Inactivo";}}</td>
                        <td class="text-center">
                            <a href="{{url('empresas/editar')}}/{{$empresa->id}}" class="btn btn-warning">Editar</a>
                            <a href="{{url('empresa/borrar')}}/" class="btn btn-danger">Eliminar</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@stop
