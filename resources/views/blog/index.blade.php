@extends('app')
@section('content')
<div class="inner-banner"></div>
<div class="container">
    <div class="content main">
        <div class="row">
            <div class="col-lg-12">
            <h1>{{$title}}</h1>
                <p>
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab repudiandae rerum perferendis assumenda quos id cupiditate maiores animi architecto dicta, autem excepturi laudantium sint soluta, velit quam illum, alias magni distinctio nam aliquid ea reiciendis. Nostrum, doloremque! Adipisci delectus, corrupti voluptates aut, quos, fuga velit fugiat quia explicabo autem repellendus veritatis rerum a. 
                </p>
            </div>
        </div>
        <hr />
		@if(!empty($posts))
			@foreach($posts as $post)
			<div class="row blog">
				<div class="col-lg-3">
					<img class="" src="{{$post->photo}}" alt="Post photo for {{$post->name}}">
				</div>
				<div class="col-lg-9">
					<h2>{{$post->name}}</h2>
					<p>{{Str::words($post->copy, 100)}}   [...]</p>
					<p>Created: {{$post->created_at->diffForHumans()}}</p>
					<p class="text-right">{!! link_to_route('blog.show', 'Read More', array($post->slug), array('class' => 'btn btn-primary')) !!}</p>

				</div>
			</div>
			<hr />
			@endforeach
		@endif
        <div class="row">
	        <div class="col-lg-12">
	            {!! $posts->appends(Request::except('page'))->render() !!}
	        </div>
        </div>
    </div> <!-- Close content -->
</div> <!-- Close container -->
@endsection