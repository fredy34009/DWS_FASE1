@extends('adminlte::page')

@section('title', 'Pedidos')

@section('content_header')
<h1>Pedidos</h1>
@stop

@section('content')
<div class="py-12">
    <!-- Button trigger modal -->
    <a  class="btn btn-primary" href="pedidos/crear">
        Nuevo Pedido
</a>
    <table class="table table-hover">
        <thead>
            <tr>
                <th scope="col">Tienda</th>
                <th scope="col">Orden</th>
                <th scope="col">Acciones</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>San Miguel</td>
                <td>122550</td>
                <td>
                <a href="pedidos/detalles" class="btn btn-info" title="Ver detalles"><i class="fa fa-eye"></i></a>
                    <button data-toggle="modal" data-target="#exampleModal" class="btn btn-info" title="Editar"><i class="fa fa-edit"></i></button>
                    <button data-toggle="modal" data-target="#deleteModal" class="btn btn-danger" title="Eliminar"><i class="fa fa-trash"></i></button>
                </td>
            </tr>
            <tr>
                <td>San Salvador</td>
                <td>125015</td>
                <td>
                <a href="pedidos/detalles" class="btn btn-info" title="Ver detalles"><i class="fa fa-eye"></i></a>
                    <button data-toggle="modal" data-target="#exampleModal" class="btn btn-info" title="Editar"><i class="fa fa-edit"></i></button>
                    <button data-toggle="modal" data-target="#deleteModal" class="btn btn-danger" title="Eliminar"><i class="fa fa-trash"></i></button>
                </td>
            </tr>
            <tr>
                <td>Santa Ana</td>
                <td>745124</td>
                <td>
                    <a href="pedidos/detalles" class="btn btn-info" title="Ver detalles"><i class="fa fa-eye"></i></a>
                    <button data-toggle="modal" data-target="#exampleModal" class="btn btn-info" title="Editar"><i class="fa fa-edit"></i></button>
                    <button data-toggle="modal" data-target="#deleteModal" class="btn btn-danger" title="Eliminar"><i class="fa fa-trash"></i></button>
                </td>
            </tr>
        </tbody>
    </table>
</div>
@include('pedido.modal.eliminar')
<!--Fin modal -->
@stop

@section('css')
{{-- Add here extra stylesheets --}}
{{-- <link rel="stylesheet" href="/css/admin_custom.css"> --}}
@stop

@section('js')
<script>
    console.log("Hi, I'm using the Laravel-AdminLTE package!");
</script>
@stop