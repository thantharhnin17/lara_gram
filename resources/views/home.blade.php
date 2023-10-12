@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-3 p-5">
            <img src="{{ asset('img/c1.jpg') }}" class="rounded-circle w-100">
        </div>
        <div class="col-9 pt-5">
            <div><h1>lara_cat</h1></div>
            <div class="d-flex">
                <div class="pe-5"><strong>153</strong> posts</div>
                <div class="pe-5"><strong>23k</strong> followers</div>
                <div class="pe-5"><strong>212</strong> folllowing</div>
            </div>
            <div class="pt-4">laraCat.org</div>
            <div>We're a global community of millions of people learning to code together.
                LearnToCodeRPG: https://www.freecodecamp.org/news/learn-to-code-rpg/
            </div>
            <div><a href="#">www.laracat.org</a></div>
        </div>
    </div>

    <div class="row pt-5">
        <div class="col-4 pb-4">
            <a href="#">
                <img src="{{ asset('img/c1.jpg') }}" class="w-100">
            </a>
        </div>
        <div class="col-4 pb-4">
            <a href="#">
                <img src="{{ asset('img/c1.jpg') }}" class="w-100">
            </a>
        </div>
        <div class="col-4 pb-4">
            <a href="#">
                <img src="{{ asset('img/c1.jpg') }}" class="w-100">
            </a>
        </div>
    </div>
</div>
@endsection
