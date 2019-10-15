@extends('layouts.app')

@section('content')


<div class="container">
    <div class="row">
        <div class="col-3 p-5">
            <img src="{{ $user->profile->profileImage() }}" class="rounded-circle w-100">
        </div>
        <div class="col-9 pt-5">
            <div class="d-flex justify-content-between align-items-baseline">
                <div class="d-flex align-items-center pb-3">
                    <div class="h4">{{ $user->username }}</div>

                    <follow-button user-id="{{ $user->id }}" ></follow-button>
                </div>

                
                    <a href="{{route('crear.post')}}">Add New Post</a>
                
                
            </div>
          
                <a href="/profile/{{ $user->id }}/edit">Edit Profile</a>
               
           
            <div class="d-flex">
                <div class="pr-5"><strong>{{ $postCount }}</strong> posts</div>
                <div class="pr-5"><strong>{{ $followersCount }}</strong> followers</div>
                <div class="pr-5"><strong>{{ $followingCount }}</strong> following</div>
            </div>
            <div>
            <div class="pt-4 font-weight-bold">{{ $user->profile->title}}</div>
            <div>{{ $user->profile->description }}</div>
            <div><a href="#">{{ $user->profile->url }}</a></div>
            </div>
        </div>
    </div>
    <div class="row pt-5">
        @forelse($user->posts as $post)
            <div class="col-4 pb-4">
                <a href="{{route('mostrar-post', $post->id)}}">
                    <img src="/storage/{{ $post->image }}" class="w-100">
                </a>
            </div>
        @empty
            <h1 class="text-danger">No tiene ningun post</h1>
        @endforelse
    </div>
</div>
@endsection
