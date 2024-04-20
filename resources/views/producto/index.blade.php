@extends('adminlte::page')

@section('title', 'Productos')

@section('content_header')
<h1>Productos</h1>
@stop

@section('content')
<div class="py-12">
    <!-- Button trigger modal -->
    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
        Nuevo Producto
    </button>

    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Nuevo Producto</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form method="post" action="#">
                    <div class="modal-body">
                        <label for="nombre">Nombre del producto</label>
                        <input class="form form-control" type="text" placeholder="Nombre del producto" id="nombre" />
                        <label for="categoria">Categoria</label>
                        <select class="form form-control" name="categoria" id="categoria">
                            <option>--SELECCIONE UNA OPCION--</option>
                        </select>
                        <label for="precio">Precio del producto</label>
                        <input class="form form-control" type="text" placeholder="Precio del producto" id="precio" />
                        <label for="unidad">Cantidad de unidades</label>
                        <input class="form form-control" type="number" placeholder="Unidades" id="unidad" />
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
                <th scope="col">Producto</th>
                <th scope="col">Categoria</th>
                <th scope="col">Precio/U</th>
                <th scope="col">Acciones</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>Toma multiple con supresor 3 salidas 2usb blanco</td>
                <td>Electronica</td>
                <td>$5.50</td>
                <td><button data-toggle="modal" data-target="#exampleModal" class="btn btn-info" title="Editar"><i class="fa fa-edit"></i></button>
                    <button data-toggle="modal" data-target="#deleteModal" class="btn btn-danger" title="Eliminar"><i class="fa fa-trash"></i></button>
                </td>
            </tr>
            <tr>
                <td>Mueble para tv 46 pulg</td>
                <td>Muebles</td>
                <td>$104.50</td>
                <td><button data-toggle="modal" data-target="#exampleModal" class="btn btn-info" title="Editar"><i class="fa fa-edit"></i></button>
                    <button data-toggle="modal" data-target="#deleteModal" class="btn btn-danger" title="Eliminar"><i class="fa fa-trash"></i></button>
                </td>
            </tr>
            <tr>
                <td>Martillo para carpintero 20 onz</td>
                <td>Herramientas</td>
                <td>5.50</td>
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