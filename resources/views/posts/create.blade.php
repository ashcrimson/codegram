@extends('layouts.app')

@section('content')


<div class="container">
    <form action="/p" enctype="multipart/form-data" method="post">
    {{ csrf_field() }}
    <div class="row">
        <div class="col-8 offset-2">
            <div class="row">
                <h1>Add New Post</h1>
            </div>

            <div class="form-group{{ $errors->has('caption') ? ' has-error' : '' }}">
                <label for="caption" class="col-md-4 control-label">Post Caption</label>

                
                    <input id="caption" 
                            type="text" 
                            class="form-control" 
                            name="caption"
                            value="{{ old('caption') }}" 
                            autofocus>

                    @if ($errors->has('caption'))
                        <span class="help-block">
                            <strong>{{ $errors->first('caption') }}</strong>
                        </span>
                    @endif
            </div>

            <div class="row">
                <label for="image" class="col-md-4 control-label">Post Image</label>
                <input type="file", class="form-control-file" id="image" name="image">

                @if ($errors->has('image'))
                            <strong>{{ $errors->first('image') }}</strong>
                @endif
            </div>

            <div class="row pt-4">
                <button class="btn btn-primary">Add New Post</button>
            </div>
        </div>
    </div>
    </form>
    
</div>
@endsection
