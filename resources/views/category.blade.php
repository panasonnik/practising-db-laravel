@extends('layout.app')

@section('title') 
Category 
@endsection

@section('content')
<h2>{{ $category->title }}</h2>
<hr/>
@endsection
