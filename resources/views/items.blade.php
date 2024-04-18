@foreach($items as $item)
    <h2>{{ $item->title }}</h2>
    <p>{{$item->description}}</p>
    <p>{{$item->price}}</p>
    <hr/>
@endforeach
