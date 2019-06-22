@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Logueado</div>     

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    Menú de opciones:

                    <!--                    -->
                    <br/>
                <form action="{{ url('/consultar') }}">
                    <input type="submit" value="Consultar servicios">   
                </form>
                <form action="{{ url('/agregar') }}">
                    <input type="submit" value="Agregar servicios">   
                </form>
                <form action="{{ url('/editar') }}">
                    <input type="submit" value="Editar servicios">   
                </form>
                <form action="{{ url('/eliminar') }}">
                    <input type="submit" value="Eliminar servicios">   
                </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
