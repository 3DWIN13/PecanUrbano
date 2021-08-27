@error('title')
<small class="text-danger">
    {{ $message }}
</small>
@enderror
<div class="form-group">
{!! Form::label('title', 'Titulo: ') !!}
{!! Form::text('title', null, ['class' => 'form-control', 'placeholder' => 'Titulo de la noticia', 'autocomplete' => 'off']) !!}
</div>

@error('slug')
<small class="text-danger">
    {{ $message }}
</small>
@enderror
<div class="form-group">
{!! Form::label('slug', 'Slug: ') !!}
{!! Form::text('slug', null, ['class' => 'form-control', 'placeholder' => 'Este sera el slug de tu noticias', 'readonly']) !!}
</div>


<div class="card">
<div class="card-body">
@error('tags')
<small class="text-danger">
    {{ $message }}
</small>
@enderror
<div class="row">
<div class="col-md-10">
    <div class="form-group">
        <p class="font-wigth-bold">ETIQUETAS</p>

        @foreach ($tags as $item)

            <label class="mr-2" id="label">
                {!! Form::checkbox('tags[]', $item->id, null, ['data-id'=>$item->name]) !!}
                
                {{ $item->name }}
            </label>
        @endforeach
    </div>
</div>

<div class="col-md-2">
    <div class="form-group">
        <div class="row mb-1">
            <div class="col">
                {!! Form::button('edit', ['name'=>'edit','class' => 'btn btn-warning form-control', 'data-toggle'=>'modal' , 'data-target'=>'#exampleModaledit']) !!}
            </div>
            <div class="col">
                {!! Form::button('del', ['class' => 'btn btn-danger form-control', 'id'=>'del', 'data-toggle'=>'modal' , 'data-target'=>'#exampleModaledit']) !!}
            </div>
        </div>
        
        {!! Form::button('crear', ['class' => 'btn btn-success form-control', 'data-toggle'=>'modal' , 'data-target'=>'#exampleModal']) !!}
        
    </div>
</div>

</div>
</div>
</div>

@error('description')
<small class="text-danger">
    {{ $message }}
</small>
@enderror
<div class="form-group">
{!! Form::label('description', 'Descripcion del la noticia: ') !!}
{!! Form::textarea('description', null, ['class' => 'form-control']) !!}
</div>

<div class="row mb-3">
<div class="col">
    <div class="image-wrapper">
        @isset ($post->picture)
        <img id='file' src="{{Storage::url($post->picture)}}" alt="">
            
        @else
        <img id='file' src="https://cdn.pixabay.com/photo/2015/06/30/08/07/lens-826308_960_720.jpg" alt="">
            
        @endisset
    </div>
</div>
<div class="col">
    {!! Form::label('picture', 'Elige la imagen de la noticia') !!}
    {!! Form::file('picture', ['class'=>'form-control-file']) !!}
    @error('picture')
<small class="text-danger">
    {{ $message }}
</small>
@enderror
</div>
</div>
@error('body')
<small class="text-danger">
    {{ $message }}
</small>
@enderror
<div class="form-group">
{!! Form::label('body', 'Cuerpo del la noticia: ') !!}
{!! Form::textarea('body', null, ['class' => 'form-control']) !!}
</div>