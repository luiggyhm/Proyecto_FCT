@extends('layouts.plantillaInconsistentes')

@section('inconsistentes')
<div class="container">
    <h1>{{ $titulo_view }}</h1>
    
    @if($inconsistentes->isEmpty())
        <p>No se encontraron inconsistencias entre los usuarios FTP y las suscripciones.</p>
    @else
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>Alias</th>
                    <th>Email</th>
                    <th>Estado FTP</th>
                    <th>Estado Suscripción</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($inconsistentes as $item)
                    <tr>
                        <td>{{ $item->alias }}</td>
                        <td>{{ $item->email }}</td>
                        <td>{{ $item->estado_ftp }}</td>
                        <td>{{ $item->estado_suscripcion }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    @endif
</div>
@endsection