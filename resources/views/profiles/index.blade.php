@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-3 p-5">
            <img src="https://scontent-syd2-1.cdninstagram.com/vp/4190058411fd538eca487caa98d8a074/5E2ADE5D/t51.2885-19/s150x150/59381178_2348911458724961_5863612957363011584_n.jpg?_nc_ht=scontent-syd2-1.cdninstagram.com"
                class="rounded-circle">
        </div>
        <div class="col-9 pt-5">
            <div class="d-flex justify-content-between align-items-baseline">
                <h1>{{ $user->username}}</h1>
                <a href="/p/create">Add new post</a>
            </div>
            <div class="d-flex">
                <div class="pr-5"><strong>{{ $user->posts->count() }}</strong> posts</div>
                <div class="pr-5"><strong>314m</strong> followers</div>
                <div class="pr-5"><strong>221</strong> following</div>
            </div>
            <div class="pt-4 font-weight-bold">{{ $user->profile->title }}</div>
            <div>{{ $user->profile->description }}</div>
            <div><a href="#">{{ $user->profile->url }}</a></div>
        </div>
    </div>

    <div class="row pt-5">
       @foreach($user->posts as $post) 
       <div class="col-4 pb-4">
            <a href="/p/{{  $post->id }}">
            <img src="/storage/{{ $post->image }}"
                class="w-100">
            </a>
        </div>
       @endforeach


        
    </div>
</div>
@endsection
