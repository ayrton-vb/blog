@extends('adminlte::page')
@section('title', 'CodersFree')

@section('content_header')
@can('admin.tags.create')
<a class="btn btn-secondary btn-sm float-right" href="{{route('admin.tags.create')}}">Nueva Etiqueta</a>
    
@endcan
    <h1>Lista de Etiquetas</h1>
@stop

@section('content')
@if (session('info'))
<div class="alert alert-success">
    <strong>{{session('info')}}</strong>
</div>    
@endif
    <div class="card">
        <div class="carbody">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>Name</th>
                        <th colspan="2"></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($tags as $tag)
                    <tr>
                        <td>{{$tag->id}}</td>
                        <td>{{$tag->name}}</td>
                        <td width='10px'>
                            @can('admin.tags.edit')
                            <a class="btn btn-primary btn-sm" href="{{route('admin.tags.edit',$tag)}}">Edit</a>
                                
                            @endcan
                        </td>
                        <td width='10px'>
                            @can('admin.tags.destroy')
                                <form action="{{route('admin.tags.destroy',$tag)}}" method="POST">
                                    @csrf
                                    @method('delete')
                                    <button class="btn btn-danger btn-sm">Eliminar</button>
                                </form>
                            @endcan
                        </td>
                    </tr>
                        
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@stop

