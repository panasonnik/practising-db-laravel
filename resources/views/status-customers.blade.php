@extends('layout.app')

@section('content')
<div class="container">

    <div class="card card-category">
        <h2 class="card__title">{{ $status->title }}</h2>
        <div class="card__list list-items">
            <h4>Customers with this status: </h4>
            @foreach($status->customers as $customer)
            <div>
                <a href="{{ route('customer', ['id'=>$customer->id]) }}">
                    <h3>{{ $customer->name }}</h3>
                </a>
                <p >{{ $customer->company }}</p>
            </div>
            @endforeach
        </div>
        <a href="{{ route('statuses') }}">Back</a>
    </div>
</div>
@endsection
