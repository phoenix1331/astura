@extends('app')
@section('content')
<div class="inner-banner"></div>
<div class="container">
    <div class="content main">
		@if(!empty($post))
			<div class="row blog">
				<div class="col-lg-3">
					<img class="" src="{{$post->photo}}" alt="Post photo for {{$post->name}}">
				</div>
				<div class="col-lg-9">
					<h2>{{$post->name}}</h2>
					<p>Created: {{$post->created_at->diffForHumans()}}</p>
					<p>{{$post->copy}}</p>
				</div>
			</div>
		@endif
    </div> <!-- Close content -->
</div> <!-- Close container -->
@endsection