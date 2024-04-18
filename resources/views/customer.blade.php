@extends('layout.app')

        @section('title')
        {{$customer->name}}
        @endsection

        @section('content')
        <div class="item-card single-card">
            <h2 class="item-card__title">{{ $customer->name }}</h2>
            <p class="item-card__description">{{ $customer->company }}</p>
            <a href="{{ route('customers') }}">Back</a>
        </div>  
        @endsection




