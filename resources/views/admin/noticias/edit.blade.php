@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>EDITAR</h1>
@stop


@section('content')
    <div class="card">
        <div class="card-body">
            {!! Form::model($post,['route' =>['post.update',$post], 'files'=>true, 'id'=>'fomularioPost','method'=>'put']) !!}

            {!! Form::hidden('user_id', auth()->user()->id) !!}

        @include('admin.noticias.partiers.form')


            {!! Form::submit('Actualizar noticia', ['class' => 'btn btn-primary']) !!}
            {!! Form::close() !!}

            <x-modal-tag :tags="$tags"/>
        </div>
    </div>
@stop

@section('css')
   <style>
       .image-wrapper{
           position: relative;
           padding-bottom: 56,25%;
       }
       .image-wrapper img{
           position: absulute;
           object-fit: cover;
           width: 100%;
           height: 100%;
       }
   </style>
@stop

@section('js')
    <script src="{{ asset('vendor/jQuery-Plugin-stringToSlug-1.3/jquery.stringToSlug.min.js') }}"> </script>

    <script>
        /* const formularioPost = document.getElementById('fomularioPost')
        const tags = formularioPost.checkbox;
formularioPost.addEventListener('click', (e)=>{
    
    if (e.target.classList.contains('btn-warning')) {
        for (let x = 0; x < tags.length; x++) {
            console.log(tags[x].checked.value)
            
        }
        
    }
}) */
    </script>

    <script src="https://cdn.ckeditor.com/ckeditor5/29.0.0/classic/ckeditor.js"></script>

    <script>

$(document).ready(function() {

    card = document.getElementById('card');
    modalContent = document.getElementById('modalContent');
    titulo = document.getElementById('exampleModalLabel1');
    label=document.getElementById('etikas')
$('[id = "del"]').click(function(){

    card.innerHTML='';
    titulo.innerHTML='ELIMINAR ETIQUETAS';
    label.innerHTML='Seguro quieres eliminar estas etiquetas'
    
    var eli = '<input type="hidden" value="hola" name="eliminar"  id="eliminar"/>';
  $("#card").append(eli);

    var arr = $('[name="tags[]"]:checked').map(function () {
        return this.value;
    }).get();


for (let i = 0; i < arr.length; i++) {
     
    var inp = '<input type="hidden" value="'+arr[i]+'" name="ids[]"  id="ids[]"/>';
  $("#card").append(inp);
}
    
});

$('[name="edit"]').click(function() {
    
    card.innerHTML='';
    
  var arr = $('[name="tags[]"]:checked').map(function(){
    return this.value+':'+this.dataset.id;
  }).get();
  
  var str = arr.join('#');
  
  
for (let i = 0; i < arr.length; i++) {
    str=arr[i].split(':');
    id=str[0];
    name=str[1]

    var inp = '<input type="hidden" value="'+id+'" name="ids[]"  id="ids[]"/><input type="text" data-id="'+id+'" value="'+name+'" name="edita[]" id="edita[]" class="form-control"><br>';
  $("#card").append(inp);
}


  /* $('#arr').text(JSON.stringify(arr));
  
  $('#str').text(str); */
  console.log(arr);
  $('#act').val(str)

  
});

});

        $(document).ready(function() {
            $("#title").stringToSlug({
                setEvents: 'keyup keydown blur',
                getPut: '#slug',
                space: '-'
            });

        });

        

        ClassicEditor
            .create(document.querySelector('#body'))
            .catch(error => {
                console.error(error);
            });

            ClassicEditor
            .create(document.querySelector('#description'))
            .catch(error => {
                console.error(error);
            });


document.getElementById("picture").addEventListener('change', cambiarImagen);

function cambiarImagen(event){
    var file = event.target.files[0];

    var reader = new FileReader();
    reader.onload = (event) => {
        document.getElementById("file").setAttribute('src', event.target.result);
    };

    reader.readAsDataURL(file);
}
    </script>
@stop