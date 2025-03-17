<div class="form-group">
    {!! Form::label('name', 'Nombre:') !!}
    {!! Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'ingrese el nombre del post']) !!}

    @error('name')
        <small class="text-danger">{{$message}}</small>
    @enderror

</div>

<div class="form-group">
    {!! Form::label('slug', 'Slug:') !!}
    {!! Form::text('slug', null, ['class' => 'form-control', 'placeholder' => 'ingrese el slug del post', 'readonly']) !!}

    @error('slug')
        <small class="text-danger">{{$message}}</small>
    @enderror
</div>

<div class="form-group">
    {!! Form::label('category_id', 'Categoria:') !!}
    from{!! Form::select('category_id', $categories, null, ['class' => 'form-control']) !!}
 
    @error('category_id')
       <small class="text-danger">{{$message}}</small>
    @enderror
</div>

<div class="forn-group">
    <p class="font-weight-bold">Etiquetas</p>
    @foreach ($tags as $tag)
    <label for="" class="mr-2">
        {!! Form::checkbox('tags[]', $tag->id, null) !!}  
        {{$tag->name}}  
    </label>               
    @endforeach
    
    @error('tags')
    <br>
    <small class="text-danger">{{$message}}</small>
    @enderror    
</div>


<div class="form-group">
    <p class="font-weight-bold">Estado</p>
    <label for="">
        {!! Form::radio('status', 1, true) !!}
        Borrador
    </label>
    <label for="">
        {!! Form::radio('status', 2) !!}
        Publicado
    </label>
    
    @error('status')
    <br>
    <small class="text-danger">{{$message}}</small>
    @enderror  
</div>

<div class="row mb-3">
    <div class="col">
        <div class="image-wrapper">
            @isset ($post->image)
                <img id="picture" src="{{Storage::url($post->image->url)}}" alt="">         
            @else
                <img id="picture" src="https://images.pexels.com/photos/30970419/pexels-photo-30970419/free-photo-of-noche-lluviosa-en-un-vibrante-callejon-de-tokio.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=2" alt="">
            @endisset
        </div>
    </div>
    <div class="col">
        <div class="form-group">
            {!! Form::label('file', 'Imagen que se mostrara en el post........') !!}
            {!! Form::file('file', ['class' => 'from-control-file', 'accept' => 'image/*']) !!}

            @error('file')
            <span class="text-danger">{{$message}}</span>
            @enderror

        </div>
  
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Neque officiis quidem cum maxime illo pariatur atque exercitationem temporibus cumque alias optio nulla nihil dicta ex, incidunt doloribus quam obcaecati dolores?</p>
    </div>
</div>

<div class="form-group">
    {!! Form::label('extract', 'Extracto:') !!}
    {!! Form::textarea('extract', null, ['class'=>'form-control']) !!}
    @error('extract')
    <small class="text-danger">{{$message}}</small>
    @enderror  
</div>

<div class="form-group">
    {!! Form::label('body', 'Cuerpo del post:') !!}
    {!! Form::textarea('body', null, ['class'=>'form-control']) !!}
    @error('body')
    <small class="text-danger">{{$message}}</small>
    @enderror  
</div>