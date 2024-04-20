@extends('adminlte::page')

@section('title', 'Pedidos')

@section('content_header')
<h1>Detalles</h1>
@stop

@section('content')
<div class="py-12">
    <table class="table table-hover">
        <thead>
            <tr>
                <th scope="col">Producto</th>
                <th scope="col">Categoria</th>
                <th scope="col">Precio/U</th>
                <th scope="col">Cantidad</th>
                <th scope="col">Subtotal</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>Toma multiple con supresor 3 salidas 2usb blanco</td>
                <td>Electronica</td>
                <td>$5.50</td>
                <td>1</td>
                <td>$5.50</td>
            </tr>
            <tr>
                <td>Mueble para tv 46 pulg</td>
                <td>Muebles</td>
                <td>$104.50</td>
                <td>1</td>
                <td>$104.50</td>
            </tr>
            <tr>
                <td>Martillo para carpintero 20 onz</td>
                <td>Herramientas</td>
                <td>5.50</td>
                <td>2</td>
                <td>$11.00</td>
            </tr>
        </tbody>
    </table>
    <h6 class="float-right">Total: $121.00</h6>
    <br/>
    <a href="/dashboard/pedidos" class="btn btn-info" >Regresar</a>
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