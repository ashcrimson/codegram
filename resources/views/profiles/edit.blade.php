@extends('layouts.app')

@section('content')

<div class="container">
<form action="/profile/{{ $user->id }}" enctype="multipart/form-data" method="post">
    {{ csrf_field() }}
    {{ method_field('PATCH') }}

    <div class="row">
        <div class="col-8 offset-2">
            <div class="row">
                <h1>Edit Profile</h1>
            </div>

            <div class="form-group row">
                <label for="title" class="col-md-4 control-label">Title</label>

                
                    <input id="title" 
                            type="text" 
                            class="form-control" 
                            name="title"
                            value="{{ old('title') ?? $user->profile->title }}" 
                            autofocus>

                    @if ($errors->has('title'))
                        <span class="help-block">
                            <strong>{{ $errors->first('title') }}</strong>
                        </span>
                    @endif
            </div>

            <div class="form-group row">
                <label for="description" class="col-md-4 control-label">Description</label>

                
                    <input id="description" 
                            type="text" 
                            class="form-control" 
                            name="description"
                            value="{{ old('description') ?? $user->profile->description  }}" 
                            autofocus>

                    @if ($errors->has('description'))
                        <span class="help-block">
                            <strong>{{ $errors->first('description') }}</strong>
                        </span>
                    @endif
            </div>
            <div class="form-group row">
                <label for="url" class="col-md-4 control-label">URL</label>

                
                    <input id="url" 
                            type="text" 
                            class="form-control" 
                            name="url"
                            value="{{ old('url') ?? $user->profile->url }}" 
                            autofocus>

                    @if ($errors->has('url'))
                        <span class="help-block">
                            <strong>{{ $errors->first('url') }}</strong>
                        </span>
                    @endif
            </div>

            <div class="row">
                <label for="image" class="col-md-4 control-label">Profile Image</label>
                <input type="file", class="form-control-file" id="image" name="image">

                @if ($errors->has('image'))
                            <strong>{{ $errors->first('image') }}</strong>
                @endif
            </div>

            <div class="row pt-4">
                <button class="btn btn-primary">Save Profile</button>
            </div>
        </div>
    </div>
    </form>
</div>

@endsection
