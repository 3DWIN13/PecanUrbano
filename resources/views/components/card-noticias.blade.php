@props(['item'])
				<div class="col-md-6 col-sm-6">
					<!-- event item -->
					<div class="events-item ">
						<!-- image container -->
						<div class="figure">
							<!-- event date -->
							<div class="event-date">
								{{date(' d', strtotime($item->created_at))}} <span class="emonth">{{date('F', strtotime($item->created_at))}}</span>
								<div class="clearfix"></div>
								<!-- time -->
								<span class="etime">{{date('Y', strtotime($item->created_at))}}</span>
							</div>
							<!-- event location -->
							
								<div class="contenedorsito">

									@foreach ($item->tags as $tag)
					
									<a href="{{route('tags', $tag)}}" class="etiquetas"><i class="fa fa-tags"></i> {{$tag->name}}</a> 	
					
							@endforeach
								</div>
							
							<!-- image -->
							
							<img class="img-responsive" src="{{Storage::url($item->picture)}}" alt="" />
							<!-- image hover -->
							<div class="img-hover">
								<!-- hover icon -->
								<a href="{{route('noticias', $item)}}"><i class="fa fa-play-circle"></i></a>
							</div>
						</div>
						<!-- event information -->
						<div class="event-info">
							<!-- event title -->
							<h3>{{$item->title}}</h3>
							<!-- horizontal line -->
							<hr />
							<!-- paragraph -->
							<p>{!!Str::limit($item->description, 150, '...')!!} <a href="{{route('noticias', $item)}}">more</a></p>
							<!-- buy ticket button link -->
							<a href="{{route('noticias', $item)}}" type="button" class="btn btn-lg btn-theme" >VER MAS</a>
						</div>
					</div>
				</div>
