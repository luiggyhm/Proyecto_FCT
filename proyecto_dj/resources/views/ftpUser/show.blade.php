@extends('layouts.plantillaDetalleFtpUser')

@section('tituloAnuncio')
    @component('_components.ftpUser.tituloUsuario')
        @slot('titulo', 'Usuario')
    @endcomponent
@endsection


@section('mostrarDetalleFtpUser')
    @component('_components.ftpUser.mostrarDetalleFtpUser')
        @slot('id', $usuarioFtp->id)
        @slot('alias', $usuarioFtp->alias)
        @slot('password', $usuarioFtp->password)
        @slot('directorio', $usuarioFtp->directorio_raiz)
        @slot('tipo_user', $usuarioFtp->tipo_user)
        @slot('estado', $usuarioFtp->estado)
        @slot('user_id', $usuarioFtp->user_id)
    @endcomponent
@endsection