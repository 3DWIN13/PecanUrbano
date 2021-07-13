@extends('layouts.layout')

@section('fb-plugin')
<div id="fb-root"></div>
<script async defer crossorigin="anonymous" src="https://connect.facebook.net/es_LA/sdk.js#xfbml=1&version=v11.0" nonce="Ie4cyOxX"></script>
<meta property="fb:admins" content=""/>
@endsection

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

                <h1 class="">Titulo del post</h1>
                <ul class="list-inline">
                    <li>Nombre autor</li>
                    <li>Publicado: 1/1/2021</li>
                </ul>
                <ul class="list-unstyled">
                    <li>Tag 1</li>
                    <li>Tag 2</li>
                    <li>Tag 3</li>
                </ul>
            </div>
            <div class="col-lg-9 col-md-9 col-sm-12">
                <p class="lead">
                    Desde aca es el cuerpo del post
                </p>
                <p>Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec
                    ullamcorper nulla non metus auctor fringilla. Duis mollis, est non commodo luctus, nisi erat
                    porttitor ligula, eget lacinia odio sem nec elit. Donec ullamcorper nulla non metus auctor
                    fringilla.</p>
                <div class="well ">
                    <img src="https://static.pexels.com/photos/268455/pexels-photo-268455.jpeg" class="img-responsive">
                </div>
                <p>Maecenas sed diam eget risus varius blandit sit amet non magna. Donec id elit non mi porta gravida at
                    eget metus. Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem
                    nec elit.</p>
                <blockquote>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</p>
                    <footer>Someone famous in <cite title="Source Title">Source Title</cite></footer>
                </blockquote>
                <p>Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec
                    ullamcorper nulla non metus auctor fringilla. Duis mollis, est non commodo luctus, nisi erat
                    porttitor ligula, eget lacinia odio sem nec elit. Donec ullamcorper nulla non metus auctor
                    fringilla.</p>
                <p>Maecenas sed diam eget risus varius blandit sit amet non magna. Donec id elit non mi porta gravida at
                    eget metus. Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem
                    nec elit.</p>
                <blockquote>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante. nascetur
                        ridiculus mus. Donec ullamcorper nulla non metus auctor fringilla. Duis mollis, est non commodo
                        luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Donec ullamcorper nulla non
                        metus auctor fringilla.</p>

                </blockquote>

                <div class="image-block">
                    <img src="https://static.pexels.com/photos/268455/pexels-photo-268455.jpeg" class="img-responsive">
                </div>

                <div class="fb-comments col-lg-12 col-md-12 col-sm-12" data-href="{{url()->current()}}" data-width="" data-numposts="5"></div>
            </div>


            <div class="col-lg-3  col-md-3 col-sm-12">
                <div class="list-group">
                    <h2>Noticias recientes</h2>
                    <a class="list-group-item" href="#">
                        <div class="media">
                            <div class="media-left">
                                <img src="https://static.pexels.com/photos/268455/pexels-photo-268455.jpeg"
                                    style="width: 64px; height: 64px;">
                            </div>
                            <div class="media-body">
                                <h4 class="media-heading">Media heading</h4>
                                Cras sit amet nibh libero, in gravida nulla.
                            </div>
                        </div>
                    </a>
                    <a class="list-group-item" href="#">
                        <div class="media">
                            <div class="media-left">
                                <img src="https://static.pexels.com/photos/268455/pexels-photo-268455.jpeg"
                                    style="width: 64px; height: 64px;">
                            </div>
                            <div class="media-body">
                                <h4 class="media-heading">Media heading</h4>
                                Cras sit amet nibh libero, in gravida nulla.
                            </div>
                        </div>
                    </a>
                    <a class="list-group-item" href="#">
                        <div class="media">
                            <div class="media-left">
                                <img src="https://static.pexels.com/photos/268455/pexels-photo-268455.jpeg"
                                    style="width: 64px; height: 64px;">
                            </div>
                            <div class="media-body">
                                <h4 class="media-heading">Media heading</h4>
                                Cras sit amet nibh libero, in gravida nulla.
                            </div>
                        </div>
                    </a>
                </div>

                <div class="list-group">
                    <h2>Noticias relacionadas</h2>
                    <a class="list-group-item" href="#">
                        <div class="media">
                            <div class="media-left">
                                <img src="https://static.pexels.com/photos/268455/pexels-photo-268455.jpeg"
                                    style="width: 64px; height: 64px;">
                            </div>
                            <div class="media-body">
                                <h4 class="media-heading">Media heading</h4>
                                Cras sit amet nibh libero, in gravida nulla.
                            </div>
                        </div>
                    </a>
                    <a class="list-group-item" href="#">
                        <div class="media">
                            <div class="media-left">
                                <img src="https://static.pexels.com/photos/268455/pexels-photo-268455.jpeg"
                                    style="width: 64px; height: 64px;">
                            </div>
                            <div class="media-body">
                                <h4 class="media-heading">Media heading</h4>
                                Cras sit amet nibh libero, in gravida nulla.
                            </div>
                        </div>
                    </a>
                    <a class="list-group-item" href="#">
                        <div class="media">
                            <div class="media-left">
                                <img src="https://static.pexels.com/photos/268455/pexels-photo-268455.jpeg"
                                    style="width: 64px; height: 64px;">
                            </div>
                            <div class="media-body">
                                <h4 class="media-heading">Media heading</h4>
                                Cras sit amet nibh libero, in gravida nulla.
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>


    </div> <!-- /container -->
</section>

@endsection