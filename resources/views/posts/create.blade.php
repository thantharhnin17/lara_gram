@extends('layouts.app')

@section('content')
<div class="container">
    
    <div class="row">
        <div class="col-8 offset-2">

            <div class="row">
                <h1>Add New Post</h1>
            </div>
            
            <form method="POST" action="/post" enctype="multipart/form-data">
                @csrf
        
                <div class="row mb-3">
                    <label for="caption" class="col-md-4 col-form-label">Post Caption</label>
        
                    
                        <input id="caption" type="text" class="form-control @error('caption') is-invalid @enderror" name="caption" value="{{ old('caption') }}"  autocomplete="caption" autofocus>
        
                        @error('caption')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    
                </div>

                <div class="row mb-3">
                    <label for="image" class="col-md-4 col-form-label">Post image</label>
        
                    
                        <input id="image" type="file" class="form-control @error('image') is-invalid @enderror" name="image" value="{{ old('image') }}">
        
                        @error('image')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    
                </div>

                <div class="row pt-4">
                    <button class="btn btn-primary">Add New Post</button>
                </div>
        
            </form>
        </div>
    </div>

</div>
@endsection
