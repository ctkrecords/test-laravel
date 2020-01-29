@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-3 p-5 text-center">
            <img src="https://scontent-mia3-2.cdninstagram.com/v/t51.2885-19/s150x150/70985486_577637296311063_2240788552625422336_n.jpg?_nc_ht=scontent-mia3-2.cdninstagram.com&_nc_ohc=XPrxmdmhgkkAX_bMPm1&oh=ab9dd88c594b750afb099fc236c6bbee&oe=5ED1BAD7" alt="" class="rounded-circle">
        </div>
        <div class="col-9 pt-5">
            <div class="d-flex justify-content-between align-items-baseline">
                <h1>{{ $user->username }}</h1>
                <a href="/p/create">Add new post</a>
            </div>
            <div class="d-flex">
                <div class="pr-5"><strong>{{ $user->posts->count() }}</strong> posts</div>
                <div class="pr-5"><strong>23k</strong> followers</div>
                <div class="pr-5"><strong>221</strong> following</div>
            </div>
            <div class="pt-2 font-weight-bold">{{ $user->profile->title }}</div>
            <div>{{ $user->profile->description }}</div>
            <div>
                <a href="#">{{ $user->profile->url }}</a>
            </div>
        </div>
        
        <div class="row pt-5">
        @foreach($user->posts as $post)
            <div class="col-4 pb-5">
                <img src="/storage/{{ $post->image }}" class="w-100" alt="">
            </div>
        @endforeach
        </div>
    </div>
</div>
@endsection
