<h2>{{ $category->title }}</h2>
@foreach($items as $item)
<h2>{{ $item->title }}</h2>
<p>{{$item->description}}</p>
<p>{{$item->price}}</p>
@endforeach


<hr/>

