@extends('adminlte::page')

@section('title', 'Pedidos')

@section('content_header')
<h1>Nuevo Pedido</h1>
@stop

@section('content')
<div class="py-12">
    <form method="post" action="#">
        <div class="modal-body">
            <label>N° de orden</label>
            <input class="form form-control" type="text" disabled id="orden" />
            <label for="tienda">Seleccione La tienda</label>
            <select class="form form-control" name="tienda" id="tienda" required>
                <option>--SELECCIONE UNA TIENDA--</option>
                <option value="1">Santa Ana</option>
                <option value="2">San Salvador</option>
                <option value="3">San Miguel</option>
            </select>
            <label for="producto">Producto</label>
            <select class="form form-control" name="producto" id="producto" required>
                <option disabled>--SELECCIONE UN PRODUCTO--</option>
                <option value="1">Toma multiple con supresor 3 salidas 2usb blanco (23 disponible)</option>
                <option value="2">Mueble para tv 46 pulg (10 disponible)</option>
                <option value="3">Martillo para carpintero 20 onz (5 disponible)</option>
            </select>
            <label>Cantidad</label>
            <input type="number" required class="form form-control" id="cantidad" />
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary">Cerrar</button>
            <button type="button" onclick="newProducto()" class="btn btn-primary">Añadir producto</button>
            <button type="button" class="btn btn-success">Finalizar venta</button>
        </div>
    </form>
</div>
<script>
    let order = document.querySelector('#orden');
    order.value = '123456'

    function newProducto() {
        var carrito = [];
        let tienda = document.querySelector('#tienda').value;
        let orden = document.querySelector('#orden').value;
        let producto = document.querySelector('#producto').value;
        let cantidad = document.querySelector('#cantidad').value;
        carrito.push({orden, tienda, producto, cantidad});
        if (localStorage.getItem("carrito")) {
            var x = JSON.parse(localStorage.getItem("carrito"));
            x.push({orden, tienda, producto, cantidad});
            localStorage.setItem("carrito", JSON.stringify(x))
        }
        else{
            localStorage.setItem("carrito", JSON.stringify(carrito))
        }
        
    }
</script>
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