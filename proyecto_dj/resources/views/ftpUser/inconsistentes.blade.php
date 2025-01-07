@extends('layouts.plantillaInconsistentes')

@section('inconsistentes')
<div class="container">
    <h1 class="text-decoration-none text-white">{{ $titulo_view }}</h1>
    
    @if($inconsistentes->isEmpty())
        <h1 class="text-decoration-none text-white">No se encontraron inconsistencias entre los usuarios FTP y las suscripciones.</h1>
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
        <td>
            @if ($item->estado_ftp === $item->estado_suscripcion)
                <span class="text-success">Coinciden</span>
            @else
                <span class="text-danger">No coinciden</span>
            @endif
        </td>
    </tr>
@endforeach

            </tbody>
        </table>
    @endif
</div>
@endsection