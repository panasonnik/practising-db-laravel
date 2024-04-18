@extends('layout.app')

        @section('title')
        Items
        @endsection
      
        
    @section('content')



<div class="container">
@foreach($categories as $category)
    <div class="card">
        <h2 class="card__title">{{ $category->title }}</h2>
        <a href="{{ route('categoryItems', ['id'=>$category->id]) }}" class="learn-more">Learn more...</a>
    </div> 
    @endforeach
</div>

@endsection




