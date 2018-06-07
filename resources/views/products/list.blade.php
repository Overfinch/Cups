@extends('viewport')

@section('content')
    <div class="row">
    @foreach($list as $item)
        <div class="card" style="width: 18rem;">
            <div class="item-img" style="background-image: url('/storage/{{$item->img}}'); background-size: auto auto; background-size: 100%; background-position: center 50%;"></div>
            <!--<img class="card-img-top" src="/storage/{{$item->img}}" alt="{{ $item->name }}"> -->
            <div class="card-body">
                <h5 class="card-title text-center">{{ $item->name }}</h5>
                <div class="price">{{ $item->price }} грн</div>
                <a href="#" class="btn btn-primary">Купить</a>
            </div>
        </div>
    @endforeach
    </div>
@endsection