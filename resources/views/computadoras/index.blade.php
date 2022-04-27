@extends('layout.layout')
@section('content')

    <section class="hero is-link">
        <div class="hero-body">
            <p class="title">
                Listado de computadoras
            </p>
            <a class="button is-info" href="/computadora/create">Agregar</a>
        </div>
    </section>

    <section class="section">

        <div class="table-container">

            <table class="table is-bordered is-striped is-narrow is-hoverable is-fullwidth">
                <thead>
                <tr>
                    <th>Marca</th>
                    <th>Modelo</th>
                    <th>Descripción</th>
                    <th>Tipo</th>
                    <th>Precio de compra</th>
                    <th>Precio de venta</th>
                    <th>Ganancia</th>
                    <th>Stock</th>
                    <th>Disponible</th>
                    <th>Acciones</th>
                </tr>
                </thead>
                <tfoot>
                <tr>
                    <th>Marca</th>
                    <th>Modelo</th>
                    <th>Descripción</th>
                    <th>Tipo</th>
                    <th>Precio de compra</th>
                    <th>Precio de venta</th>
                    <th>Ganancia</th>
                    <th>Stock</th>
                    <th>Disponible</th>
                    <th>Acciones</th>
                </tr>
                </tfoot>
                <tbody>

                @forelse($computadoras as $computadora)
                    <tr>
                        <th>{{ $computadora->marca }}</th>
                        <td>{{ $computadora->modelo }}</td>
                        <td>{{ $computadora->descripcion }}</td>
                        <td>{{ $computadora->tipo }}</td>
                        <td>$ {{ $computadora->precioDeCompra }} MXN</td>
                        <td>$ {{ $computadora->precioDeVenta }} MXN</td>
                        <td>$ {{ $computadora->precioDeVenta - $computadora->precioDeCompra }} MXN</td>
                        <td>{{ $computadora->stock }} unidades</td>
                        <td>
                            @if ($computadora->disponible == 1 )
                                <p>Disponible</p>
                            @else
                                <p>No disponible</p>
                            @endif
                        </td>
                        <td>
                            <form action="{{ route('computadora.destroy', $computadora->id) }}" 
                            method="POST">
                                <a class="button is-info is-small" 
                                href="{{ route('computadora.show', $computadora->id) }}">
                                Ver</a>
                                <a class="button is-info is-small" 
                                href="{{ route('computadora.edit', $computadora->id) }}">
                                Editar</a>
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="button is-danger is-small">
                                    Eliminar</button>
                            </form>
                        </td>

                    </tr>
                </tbody>

                @empty
                    <h3>No hay datos en la base de datos</h3>
                @endforelse
            </table>
        </div>
    </section>

@endsection
