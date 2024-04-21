@extends('layout.app')

        @section('title')
        Items
        @endsection
      
        
    @section('content')

<div class="container">
    @foreach($items as $item)
    <div class="card">
        <h2 class="card__title">Title: {{ $item->title }}</h2>
        <a href="{{ route('item', ['id'=>$item->id]) }}" class="learn-more">Learn more...</a>
        <p class="card__description">Description: {{ $item->description }}</p>
        <p class="card__price">Price: {{ $item->price }}</p>
        <div class="card__list">
            <ul>
            @foreach($item->categories as $category)
                <li class="card__list__list-item">
                    <a href="{{ route('categoryItems', ['id' => $category->id]) }}">{{ $category->title }}</a>
                </li>
            @endforeach
            </ul>
        </div>
    </div> 
    @endforeach
</div>

@endsection




