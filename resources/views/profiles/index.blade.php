@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-3 p-5">
            <img src="{{ asset('img/c1.jpg') }}" class="rounded-circle w-100">
        </div>
        <div class="col-9 pt-5">
            <div class="d-flex justify-content-between align-items-center">
                <h1>{{ $user->username }}</h1>
                <a href="/post/create">Add New Post</a>
            </div>
            <div class="d-flex">
                <div class="pe-5"><strong>{{ $user->posts->count() }}</strong> posts</div>
                <div class="pe-5"><strong>23k</strong> followers</div>
                <div class="pe-5"><strong>212</strong> folllowing</div>
            </div>
            <div class="pt-4"><strong>{{ $user->profile->title }}</strong></div>
            <div>{{ $user->profile->description }}</div>
            <div><a href="#">{{ $user->profile->url }}</a></div>
        </div>
    </div>

    <div class="row pt-5">

        @foreach ($user->posts as $post)
        <div class="col-4 pb-4">
            <a href="#">
                <img src="{{ asset('storage/' . $post->image) }}" class="w-100">
            </a>
        </div> 
        @endforeach

    </div>
</div>
@endsection
