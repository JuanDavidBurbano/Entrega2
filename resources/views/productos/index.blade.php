@extends('layouts.layout')

@section('title', 'Listado de productos')

@section('content')
    <div class="row text-center my-4" style="background: linear-gradient(135deg, #75e9f8, #6563f8);">>
        <h1 h1 class="titulo-editar">Productos</h1>
        <p class="text-muted">Aquí puedes ver y administrar tus productos</p>
    </div>
    <div class="row justify-content-center">
        <div class="col-12 col-md-10">
            <div class="card shadow">
                <div class="card-body">
                    <table class="table table-striped table-bordered">
                        <thead>
                            <tr class="table-primary">
                                <th scope="col">#</th>
                                <th scope="col">Nombre</th>
                                <th scope="col">Descripción</th>
                                <th scope="col">Precio</th>
                                <th scope="col">Acciones</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($productos as $producto)
                                <tr>
                                    <th scope="row">{{ $loop->iteration }}</th>
                                    <td>{{ $producto->nombre }}</td>
                                    <td>{{ $producto->descripcion }}</td>
                                    <td>${{ number_format($producto->precio, 2) }}</td>
                                    <td>
                                        <div class="row">
                                            <div class="col-auto">
                                                <a type="button" class="btn btn-primary" href="{{ route('producto.edit', $producto->id) }}">Editar</a>
                                            </div>
                                            <div class="col-auto">
                                                <form action="{{ route('producto.delete', $producto->id) }}" method="POST">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger" onclick="return confirm('¿Seguro que quiere eliminar el registro?')">
                                                        Eliminar
                                                    </button>
                                                </form>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                    <div class="row justify-content-end">
                        <div class="col-2">
                            <a class="btn btn-success" href="{{ route('producto.create') }}">Crear producto</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
