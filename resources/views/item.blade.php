@extends('layout.app')

        @section('title')
        {{$item->title}}
        @endsection

        @section('content')
        <div class="item-card single-card">
            <h2 class="item-card__title">{{ $item->title }}</h2>
            <p class="item-card__description">{{ $item->description }}</p>
            <p class="item-card__price">{{ $item->price }}</p>
            <a href="{{ route('items') }}">Back</a>
        </div>  
        @endsection




