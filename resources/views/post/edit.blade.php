
@extends('layouts.app')

@section('content')
    <div>
        @if ($errors->any())
        <ul>
            @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
        </ul>
        @endif

        <form action="{{route('post.update',$post->id)}}" method="POST">
            @csrf   
            @method('PUT')       
            <text-input name="title" placeholder="Enter Title" value="{{$post->title}}">Title</text-input>
            <text-area name="content" placeholder="Enter Content" rows="6" value="{{$post->content}}">Content</text-area>
            <form-group label="Publish Post :">
                 <radio-select name="is_public" @if($post->is_public) checked=1 @endif label="Yes" id="is_published_yes" value="1"></radio-select>
                 <radio-select name="is_public" @if(!$post->is_public) checked=1 @endif id="is_published_no" label="No" value="0"></radio-select>
            </form-group>
           <button class='btn btn-primary'>Save</button>
            <a href="{{route('post.show',$post->id)}}" class='btn'>Cancel</a>
        </form>
    </div>

@endsection


