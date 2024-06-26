@extends('layout.app')

@section('title') 
Categories & Items 
@endsection

@section('content')
<div class="container">

    <div class="card card-category">
        <h2 class="card__title">Category: {{ $category->title }}</h2>
        <div class="card__list list-items">
            <h4>Items related: </h4>
            @foreach($category->items as $item)
                <div>
                    <h3>{{ $item->title }}</h3>
                    <p>{{ $item->description }}</p>
                    <p>{{ $item->price }}</p>

                </div>
            @endforeach
        </div>
        <a href="{{ route('items') }}">Back</a>
    </div>
</div>
@endsection
