@extends('adminlte::page')

@section('title', 'Tiendas')

@section('content_header')
<h1>Tiendas</h1>
@stop

@section('content')
<div class="py-12">
    <!-- Button trigger modal -->
    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
        Nueva Tienda
    </button>

    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Nueva Tienda</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form method="post">
                    <div class="modal-body">

                        <label for="categoria">Nombre de la Tienda</label>
                        <input class="form form-control" type="text" placeholder="Nombre de la tienda" id="categoria" />
                        <label for="direccion">Direccion</label>
                        <input class="form form-control" type="text" placeholder="Direcion de la tienda" id="direccion" />
                        <label for="telefono">Telefono</label>
                        <input class="form form-control" type="text" placeholder="Telefono de la tienda" id="telefono" pattern="[2-6,7]/d{3}-d{4}" />
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                        <button type="button" class="btn btn-primary">Guardar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!--Fin modal -->
    <table class="table table-hover">
        <thead>
            <tr>
                <th scope="col">Tienda</th>
                <th scope="col">Acciones</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>San Miguel</td>
                <td><button data-toggle="modal" data-target="#exampleModal" class="btn btn-info" title="Editar"><i class="fa fa-edit"></i></button>
                    <button data-toggle="modal" data-target="#deleteModal" class="btn btn-danger" title="Eliminar"><i class="fa fa-trash"></i></button>
                </td>
            </tr>
            <tr>
                <td>San Salvador</td>
                <td><button data-toggle="modal" data-target="#exampleModal" class="btn btn-info" title="Editar"><i class="fa fa-edit"></i></button>
                    <button data-toggle="modal" data-target="#deleteModal" class="btn btn-danger" title="Eliminar"><i class="fa fa-trash"></i></button>
                </td>
            </tr>
            <tr>
                <td>Santa Ana</td>
                <td><button data-toggle="modal" data-target="#exampleModal" class="btn btn-info" title="Editar"><i class="fa fa-edit"></i></button>
                    <button data-toggle="modal" data-target="#deleteModal" class="btn btn-danger" title="Eliminar"><i class="fa fa-trash"></i></button>
                </td>
            </tr>
        </tbody>
    </table>
</div>
<!-- Modal -->
<div class="modal fade" id="deleteModal" tabindex="-1" aria-labelledby="deleteModal" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Eliminar</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                Seguro que deseas realizar esta accion?
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-primary" data-dismiss="modal">Cancelar</button>
                <button type="button" class="btn btn-danger">Confirmar</button>
            </div>
        </div>
    </div>
</div>
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