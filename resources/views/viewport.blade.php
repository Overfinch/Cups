<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Products') }}</title>
    <!-- Styles -->
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">


</head>
<body>

    <nav class="navbar navbar-expand-lg navbar-light bg-light ">
        <div class="container">
        <a class="navbar-brand" href="/">Cups</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>


            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">


                    @foreach($pages_menu as $menu_item)
                        <li class="nav-item">
                            <a class="nav-link" href="{{url('pages',$menu_item->slug)}}">{{$menu_item->title}}</a>
                        </li>
                    @endforeach

                    {{$my_menu}}

                </div>

        </div>
    </nav>

    <div id="carouselExampleSlidesOnly" class="carousel2 slide" data-ride="carousel">
        <div class="carousel-inner">
            @foreach($slides as $slide)
                <div class="carousel-item active">
                    <img class="d-block w-100" src="{{url('storage/'.$slide->img)}}" alt="{{$slide->title}}">
                </div>
            @endforeach
        </div>
    </div>

<div class="container">




    <div class="row">
        <div class="col-sm-3">
            <div class="categories">
                <div class="categories-title">Категроии:</div>
                @include('categories.tree',['categories'=> $categories])
            </div>
        </div>

        <div class="col-sm-9">
            @yield('content')
        </div>
    </div>





</div>

<!-- Scripts -->
    <script src="{{ asset('js/jquery-3.2.1.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap.bundle.js') }}"></script>

    <script !src="">
        $('.carousel').carousel()
    </script>

</body>
</html>
