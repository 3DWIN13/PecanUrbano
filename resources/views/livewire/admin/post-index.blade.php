{{-- 
mostrar en card es mejor
    --}}
<div class="card ">
    <div class="card-header">
    
        <input wire:model="search" placeholder="buscar" class="form-control">
    
    </div>
    @if ($post->count())
        
    <div class="card-body">
        <table class="table table-striped">
            <thead>

                <tr>
                    <th>IMG</th>
                    <th>TITULO</th>
                    <th colspan="2"></th>
                </tr>
            </thead>
            <tbody>

               
                @foreach ($post as $item)
                    <tr>
                        <td>{{$item->id}}</td>
                        <td>{{$item->title}}</td>
                        <td with="10px">
                            <a class="btn btn-primary btn-sm" href="{{route('post.edit',$item)}}">edit</a>
                        </td>
                        <td with="10px">
                            <form action="{{route('post.destroy', $item)}}" method="POST">
                            @csrf
                                @method("DELETE")

                                <button type="submit" class="btn btn-danger btn-sm">delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach    
                
                
            </tbody>
        </table>
    </div>
    {{-- Close your eyes. Count to one. That is how long forever feels. --}}
    
     <div class="card-footer">
        {{$post->links()}} 
    </div>
    @else

    <div class="card-body">
        <strong>No hay noticias con ese titulo...</strong>
    </div>

    @endif
    
</div>
