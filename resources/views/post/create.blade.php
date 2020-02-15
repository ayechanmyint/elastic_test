
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

        <form action="{{route('post.store')}}" method="POST">
            @csrf          
            <text-input name="title" placeholder="Enter Title">Title</text-input>
            <text-area name="content" placeholder="Enter Content" rows="6">Content</text-area>
            <form-group label="Publish Post :">
                <radio-select name="is_public" checked="true" label="Yes" id="is_published_yes" value="1"> </radio-select>
                <radio-select name="is_public" label="No" id="is_published_no" value="0"> </radio-select>
            </form-group>
           <button class='btn btn-primary'>Save</button>
            <a href="{{route('post.index')}}" class='btn'>Cancel</a>
        </form>
    </div>

@endsection


