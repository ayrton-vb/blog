@extends('adminlte::page')
@section('title', 'CodersFree')

@section('content_header')
    <h1>Editar rol</h1>
@stop


@section('content')
@if (session('info'))
    <div class="alert alert-success">
        <strong>{{session('info')}}</strong>
    </div>    
@endif

    <div class="card">
        <div class="card-body">
            {!! Form::model($role, ['route' => ['admin.roles.update', $role], 'method' => 'put']) !!}

            @include('admin.roles.partials.form')
      
                {!! Form::submit('Actualizar rol', ['class' => 'btn btn-primary']) !!}
        
            {!! Form::close() !!}
        </div>
    </div>
@stop

