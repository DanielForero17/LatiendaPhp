@extends('layouts.menu')
@section('contenido')
@if(session('mensajito'))
<div class="row">
    <h3>{{session('mensajito')}}</h3>
    <div class="row">
    <h1 class="brown-text text-darken-4">Nuevo Producto</h1>


</div>
@endif
<div class="row">
    <h1 class="brown-text text-darken-4">Nuevo Producto</h1>
</div>
<div class="row">
    <form action="{{route('productos.store')}}" class="col s8" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="row">
            <div class="col s8 input-field">
                <input  type="text" id="nombre" name="nombre" placeholder="Nombre Producto" />
                <label for="nombre">Nombre Producto</label>
                <strong>{{ $errors->first('nombre')}}</strong>
            </div>
        </div>
        <div class="row">
            <div class="col s8 input-field">
                <textarea name="desc" id="desc" class="materialize-textarea" placeholder="Descripcion Producto"></textarea>
                <label for="desc">Descripción</label>
            </div>
        </div>
        <div class="row">
            <div class="col s8 input-field">
                <input type="text" id="precio" name="precio" placeholder="Precio Producto">
                <label for="precio">Precio Producto</label>
            </div>
        </div>

        <div class="row">
            <div class="col s8 file-field input-field">
                <div class="btn"> 
                <span>Imagen Del Producto</span>
                <input type="file" name="imagen" />
             </div>
            <div class="file-path-wrapper">
                <input type="text" class="file-path">
            </div>
            </div>
            <strong>{{ $errors->first('imagen')}}</strong>
        </div>

    
        <div class="row">

        <div class="col.s8.input-fiel">
            <select name="marca"  id="marca">

            @foreach($marcas as $marca)
            <option value="{{$marca->id}}">
                {{$marca->nombre}}
            </option>
            <label>seleccione marca</label>
            @endforeach
            </select>

        </div>
        </div>   

        <div class="row">
        <div class="clo.s8.input-fiel">
            <select name="categoria" id="categoria">
            <option value="">Seleccione Categoria</option>
            @foreach($categorias as $categoria)
            <option value="{{$categoria->id}}">
                {{$categoria->nombre}}
            </option>
            <label>seleccione categoria</label>
            @endforeach

        </div>
        </div>    

            <label>seleccione categoria</label>
            <strong>{{ $errors->first('categoria')}}</strong>
            
</select>

        <div class="row">
        <button class="btn waves-effect waves-light" type="submit" name="action">
        Guardad producto</button>
        </div>

    </form>
</div>
@endsection