@extends('layouts.layout')

@section('title', 'Edición de producto')

@section('content')
    <div class="row text-center my-4" style="background: linear-gradient(135deg, #6cbafad3, #ad70fd);">>
        <h1 class="titulo-editar">Editar Producto</h1>
        <p class="text-muted">Modificar los campos para ctualizar el producto</p>
    </div>
    <div class="row justify-content-center">
        <div class="col-md-6 col-sm-12">
            <div class="card shadow">
                <div class="card-body">
                    <form method="POST" action="{{ route('producto.update', $producto->id) }}">
                        @csrf
                        @method('POST')
                        <div class="mb-3">
                            <label for="nombre" class="form-label fw-bold">Nombre</label>
                            <input type="text" class="form-control" id="nombre" name="nombre" value="{{ $producto->nombre }}" placeholder="Producto">
                        </div>
                        <div class="mb-3">
                            <label for="descripcion" class="form-label fw-bold">Descripción</label>
                            <textarea class="form-control" id="descripcion" name="descripcion" rows="3" placeholder="Descripción del producto">{{ $producto->descripcion }}</textarea>
                        </div>
                        <div class="mb-3">
                            <label for="precio" class="form-label fw-bold">Precio</label>
                            <div class="input-group">
                                <span class="input-group-text">$</span>
                                <input type="number" class="form-control" id="precio" name="precio" value="{{ $producto->precio }}" placeholder="00000">
                            </div>
                        </div>
                        <div class="row justify-content-between mt-4">
                            <div class="col-auto">
                                <button type="submit" class="btn btn-primary px-4">Actualizar</button>
                            </div>
                            <div class="col-auto">
                                <a class="btn btn-info px-4" href="{{ route('producto.index') }}">Ver productos</a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection


