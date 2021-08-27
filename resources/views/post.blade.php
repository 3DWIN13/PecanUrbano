@extends('layouts.layout')

<link href="../css/post.css" rel="stylesheet">

@section('content')

<!-- block for animate navigation menu -->
<div class="nav-animate"></div>

<section class="banner-section">
</section>
<section class="post-content-section custom-content">
    <div class="container">

        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 post-title-block">

                <h1 class="">{{$item->title}}</h1>
                <ul class="list-inline">
                    <li>Nombre autor</li>
                    <li>{{date('F d, Y',strtotime($item->updated_at))}}</li>
                </ul>
                <ul class="list-unstyled">
                    <li>Tag 1</li>
                    <li>Tag 2</li>
                    <li>Tag 3</li>
                </ul>
            </div>
            <div class="col-lg-9 col-md-9 col-sm-12">
               
                
                <div class="well ">
                    <img src="{{Storage::url($item->picture)}}" class="img-responsive">
                </div>
                {!!$item->body!!}


            </div>
            
            <div class="col-lg-3  col-md-3 col-sm-12">
                <div class="list-group">
                    <h2>Noticias recientes</h2>
                    @foreach ($recientes as $re)
                    <a class="list-group-item" href="{{route('noticias', $re)}}">
                        <div class="media">
                            <div class="media-left">
                                <img src="{{Storage::url($re->picture)}}"
                                    style="width: 64px; height: 64px;">
                            </div>
                            <div class="media-body">
                                <h4 class="media-heading">{{$re->title}}</h4>
                                {!!Str::limit($re->description, 45, '...')!!}
                            </div>
                        </div>
                    </a>    
                    @endforeach
                    
                   
                </div>

                <div class="list-group">
                    <h2>Noticias relacionadas</h2>

                    @foreach ($rela as $rel)
                        
                    
                    <a class="list-group-item" href="{{route('noticias', $rel)}}">
                        <div class="media">
                            <div class="media-left">
                                <img src="{{Storage::url($rel->picture)}}"
                                    style="width: 64px; height: 64px;">
                            </div>
                            <div class="media-body">
                                <h4 class="media-heading">{{$rel->title}}</h4>
                                {!!Str::limit($rel->description,45, ' ...')!!}
                            </div>
                        </div>
                    </a>
                    @endforeach
                   
                </div>
            </div>
        </div>


    </div> <!-- /container -->
</section>

@endsection