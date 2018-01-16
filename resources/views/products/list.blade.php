@extends('viewport')

@section('content')
    @foreach($list as $item)
        {{ $item }}
    @endforeach
@endsection