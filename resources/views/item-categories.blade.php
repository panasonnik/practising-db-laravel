@extends('layout.app')

@section('title')
    Item & Categories
@endsection
      
        
@section('content')
    <h2>{{ $item->title }}</h2>
    <p>{{$item->description}}</p>
    <p>{{$item->price}}</p>
    @foreach($categories as $category)
        <h2>{{ $category->title }}</h2>
        <hr/>
    @endforeach
    <hr/>
@endsection

