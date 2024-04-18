@extends('layout.app')

        @section('title')
        Statuses
        @endsection
      
        
    @section('content')



<div class="container">
@foreach($statuses as $status)
    <div class="card">
        <h2 class="card__title">{{ $status->title }}</h2>
        <a href="{{ route('statusCustomers', ['id'=>$status->id]) }}" class="learn-more">Learn more...</a>
    </div> 
    @endforeach
</div>

@endsection




