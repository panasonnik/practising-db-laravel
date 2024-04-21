@extends('layout.app')

@section('title')
    Customers
@endsection
      
        
@section('content')

    <div class="container">
        @foreach($customers as $customer)
        <div class="card">
            <h2 class="card__title">{{ $customer->name }}</h2>
            <a href="{{ route('customer', ['id'=>$customer->id]) }}" class="learn-more">Learn more...</a>
            <p class="card__description">Company: {{ $customer->company }}</p>
                <ul>
                    <li class="card__list__list-item">
                        <a href="{{ route('statusCustomers', ['id' => $customer->status->id]) }}">{{ $customer->status->title }}</a>
                    </li>
                </ul>
        </div> 
        @endforeach
    </div>

@endsection




