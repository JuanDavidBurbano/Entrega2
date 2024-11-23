@extends('layouts.layout')

@section('title', 'Creación de producto')

@section('content')
    <div class="row text-center my-4" style="background: linear-gradient(135deg, #2cace7, #75efff);">>
        <h1 class="titulo-editar">Registrar Producto</h1>
        <p class="text-muted">Llena los campos a continuación para agregar un nuevo producto</p>
    </div>
    <div class="row justify-content-center">
        <div class="col-md-6 col-sm-12">
            <div class="card shadow">
                <div class="card-body">
                    <form method="POST" action="{{ route('producto.store') }}">
                        @csrf
                        @method('POST')
                        <div class="mb-3">
                            <label for="nombre" class="form-label fw-bold">Nombre</label>
                            <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Producto">
                        </div>
                        <div class="mb-3">
                            <label for="descripcion" class="form-label fw-bold">Descripción</label>
                            <textarea class="form-control" id="descripcion" name="descripcion" rows="3" placeholder="Descripción producto"></textarea>
                        </div>
                        <div class="mb-3">
                            <label for="precio" class="form-label fw-bold">Precio</label>
                            <div class="input-group">
                                <span class="input-group-text">$</span>
                                <input type="number" class="form-control" id="precio" name="precio" placeholder="0.00">
                            </div>
                        </div>
                        <div class="row justify-content-between mt-4">
                            <div class="col-auto">
                                <button type="submit" class="btn btn-primary px-4">Guardar</button>
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
