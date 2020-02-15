@extends('layouts.app')
@section('content')
<div class="row">
	    <h1 class="col s8">Post List</h1>
        <div class="col s4">
            <a href="{{route('post.create')}}" class="btn btn-primary">Create</a>
        </div>
</div>

	@foreach($posts as $post)

	<div>
		<h2><a href="{{route('post.show',$post->id)}}"> {{$post->title}} </a> </h2>
		<p> Written By : {{$post->author->name}}</p>
		<p>{{$post->author->created_at}}</p>
		<p>Is Published Post : <strong> {{$post->is_public ? "Yes" : "NO"}}</strong></p>
		 <!--  nl2br($post->content)  -->
		<p>{{$post->excerpt}}</p>
	</div>

	@endforeach

	{{$posts->links()}}
@endsection