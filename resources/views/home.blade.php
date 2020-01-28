@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-3 p-5 text-center">
            <img src="https://scontent-mia3-2.cdninstagram.com/v/t51.2885-19/s150x150/70985486_577637296311063_2240788552625422336_n.jpg?_nc_ht=scontent-mia3-2.cdninstagram.com&_nc_ohc=XPrxmdmhgkkAX_bMPm1&oh=ab9dd88c594b750afb099fc236c6bbee&oe=5ED1BAD7" alt="" class="rounded-circle">
        </div>
        <div class="col-9 pt-5">
            <div>
                <h1>{{ $user->username }}</h1>
            </div>
            <div class="d-flex">
                <div class="pr-5"><strong>153</strong> posts</div>
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
            <div class="col-4">
                <img src="https://scontent-mia3-2.cdninstagram.com/v/t51.2885-15/sh0.08/e35/c1.0.748.748a/s640x640/80822732_136158880746098_6415996104684412231_n.jpg?_nc_ht=scontent-mia3-2.cdninstagram.com&_nc_cat=102&_nc_ohc=JhdDstf7fuwAX8tZc2y&oh=2b3a8f7704c468f926d78fe16e1d803e&oe=5EDB9375" class="w-100" alt="">
            </div>
            <div class="col-4">
                <img src="https://scontent-mia3-2.cdninstagram.com/v/t51.2885-15/sh0.08/e35/c1.0.748.748a/s640x640/80822732_136158880746098_6415996104684412231_n.jpg?_nc_ht=scontent-mia3-2.cdninstagram.com&_nc_cat=102&_nc_ohc=JhdDstf7fuwAX8tZc2y&oh=2b3a8f7704c468f926d78fe16e1d803e&oe=5EDB9375" class="w-100" alt="">
            </div>
            <div class="col-4">
                <img src="https://scontent-mia3-2.cdninstagram.com/v/t51.2885-15/sh0.08/e35/c1.0.748.748a/s640x640/80822732_136158880746098_6415996104684412231_n.jpg?_nc_ht=scontent-mia3-2.cdninstagram.com&_nc_cat=102&_nc_ohc=JhdDstf7fuwAX8tZc2y&oh=2b3a8f7704c468f926d78fe16e1d803e&oe=5EDB9375" class="w-100" alt="">
            </div>
        </div>
    </div>
</div>
@endsection
