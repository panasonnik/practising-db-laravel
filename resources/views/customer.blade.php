@extends('layout.app')

@section('title')
{{$customer->name}}
@endsection

@section('content')
    <div class="item-card single-card">
        <h2 class="item-card__title">{{ $customer->name }}</h2>
        <p class="item-card__description">Company: {{ $customer->company }}</p>
        <h4>Items:</h4>
        <ul>
            @foreach($customer->items as $item)
                <a href="{{ route('item', ['id'=>$item->id]) }}">
                    <li>{{ $item->title }}</li>
                </a>
            @endforeach
        </ul>
        <a href="{{ route('customers') }}">Back</a>
    </div>  
@endsection
