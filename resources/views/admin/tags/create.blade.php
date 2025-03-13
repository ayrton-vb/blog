@extends('adminlte::page')
@section('title', 'CodersFree')

@section('content_header')
    <h1>Crear Etiqueta</h1>
@stop

@section('content')
    <div class="card">
        <div class="card-body">
            {!! Form::open(['route' => 'admin.tags.store']) !!}
            <div class="form-group">
                {!! Form::label('name', 'Nombre')!!}
                {!! Form::text('name', null, ['class'=>'form-control','placeholder'=>'Ingrese el nombre de la etiqueta ...']) !!}
                {!! Form::close() !!}
            </div>

            <div class="form-group">
            {!! Form::open(['route' => 'admin.tags.store']) !!}
            {!! Form::label('slug', 'Slug')!!}
            {!! Form::text('slug', null, ['class'=>'form-control','placeholder'=>'Ingrese el slug de la etiqueta ...', 'readonly']) !!}    
            </div>

            <div class="form-group">
                <label for="">Colo:</label>
                <select name="color" id="" class="form-control">
                    <option value="">color rojo</option>
                    <option value="">color azul</option>
                    <option value="">color amarillo</option>
                </select>
            </div>

            {!! Form::submit('Crear Etiqueta', ['class'=> 'btn btn-primary']) !!}

            {!! Form::close() !!}

       </div>      
    </div>
@stop

@section('js')
<script src="{{asset('vendor/jQuery-Plugin-stringToSlug-1.3/jquery.stringToSlug.min.js')}}"></script>

<script>
    $(document).ready( function() {
  $("#name").stringToSlug({
    setEvents: 'keyup keydown blur',
    getPut: '#slug',
    space: '-'
  });
});
</script>
@endsection
