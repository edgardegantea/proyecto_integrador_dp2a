@extends('layout.layout')
@section('content')

    <section class="hero is-link">
        <div class="hero-body">
            <p class="title">
                Formulario para registrar una nueva computadora
            </p>
        </div>
    </section>

    <section class="section">
        <form action="{{ route('computadora.update', $computadora->id) }}" method="post">
            @csrf
            @method('PUT')

            <div class="columns">

                <div class="column">

                    <div>
                        <label for="">Marca: </label>
                        <input class="input is-large" type="text" value="{{ $computadora->marca }}" name="marca" id="">
                    </div>

                    <div>
                        <label for="">Modelo: </label>
                        <input class="input is-large" type="text" value="{{ $computadora->modelo }}" name="modelo" id="">
                    </div>

                    <div>
                        <label for="">Descripción: </label>
                        <textarea class="input is-large" name="descripcion" id="" cols="30" rows="5"> {{ $computadora->descripcion }}</textarea>
                    </div>

                    <div>
                        <label for="">Tipo de computadora: </label>
                        <select class="input is-large" name="tipo" id="">
                            <option value="{{ $computadora->modelo }}">{{ $computadora->modelo }}</option>
                            <option value="Computadora portátil">Computadora portátil</option>
                            <option value="PC de escritorio">PC de escritorio</option>
                            <option value="PC gamming">PC gamming</option>
                            <option value="Chromebook">Chromebook</option>
                        </select>
                    </div>

                </div>

                <div class="column">

                    <div>
                        <label for="">Precio de compra:</label>
                        <input class="input is-large" type="number" name="precioDeCompra"  value="{{ $computadora->precioDeCompra }}" step="0.1" min="0" id="">
                    </div>

                    <div>
                        <label for="">Precio de venta:</label>
                        <input class="input is-large" type="number" name="precioDeVenta" value="{{ $computadora->precioDeVenta }}" step="0.1" min="0" id="">
                    </div>

                    <div>
                        <label for="">Stock:</label>
                        <input class="input is-large" value="{{ $computadora->stock }}" type="number" name="stock" id="">
                    </div>

                    <div>
                        <label for="">Disponible:</label>
                        <select class="input is-large" name="disponible" id="">
                            <option value="1">Sí</option>
                            <option value="0">No</option>
                        </select>
                    </div>

                </div>

            </div>

            <div>
            <div class="is-flex is-justify-content-space-around">
                <a href="{{ url('computadora/') }}" class="button is-danger is-large">X Cancelar</a>
                <input class="button is-light is-large" type="reset" value="Restablecer">
                <input class="button is-link is-large" type="submit" value="Guardar">
            </div>
            </div>


        </form>
    </section>

@endsection
