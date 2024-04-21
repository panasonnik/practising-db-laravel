@extends('layout.app')

@section('title')
    {{$item->title}}
@endsection

@section('content')
    <div class="item-card single-card">
        <h2 class="item-card__title">{{ $item->title }}</h2>
        <p class="item-card__description">{{ $item->description }}</p>
        <p class="item-card__price">{{ $item->price }}</p>

        <h3>Customers:</h3>
            <ul>
                @foreach($item->customers as $customer)
                    <a href="{{ route('customer', ['id'=>$customer->id]) }}">
                        <li>{{ $customer->name }}</li>
                    </a>
                @endforeach
            </ul>

        <a href="{{ route('items') }}">Back</a>
    </div>  
@endsection




