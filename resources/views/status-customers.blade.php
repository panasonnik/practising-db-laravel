@extends('layout.app')

@section('content')
<div class="container">

    <div class="card card-category">
        <h2 class="card__title">{{ $status->title }}</h2>
        <div class="card__list list-items">
            @foreach($status->customers as $customer)
            <div>
                <h3>{{ $customer->name }}</h3>
                <p >{{ $customer->company }}</p>
            </div>
            @endforeach
        </div>
        <a href="{{ route('statuses') }}">Back</a>
    </div>
</div>
@endsection
