@props(['item'])
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
             {!! Form::open(['route' => 'post.store']) !!} 
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="card-body">
                    {!! Form::label('etik', 'Escribe la Etiqueta:') !!}
                    {!! Form::text('etik', '', ['class' => 'form-control']) !!}
                    
                </div>
            </div>
            {!! Form::hidden('user_id', auth()->user()->id) !!}
        
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
               {!! Form::submit('Save Change', ['class'=>'btn btn-primary']) !!}
            </div>
          {!! Form::close() !!} 
        </div>
    </div>
</div>

<div class="modal fade" id="exampleModaledit" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel1"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content" id="modalContent">
             {!! Form::open(['route' => 'post.store']) !!} 
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel1">EDITAR ETIQUETAS</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="card-body" >
                    {!! Form::label('etikas', 'Escribe la Etiqueta:', ['id'=>'etikas']) !!}
                   {{-- {!! Form::text('act', '', ['id'=>'act']) !!} --}}
                   <div id="card"></div>
                   
                </div>
            </div>
            {!! Form::hidden('user_id', auth()->user()->id) !!}
        
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
               {!! Form::submit('Save Change', ['class'=>'btn btn-primary']) !!}
            </div>
          {!! Form::close() !!} 
        </div>
    </div>
</div>
