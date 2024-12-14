<h1>items</h1>

<ul>
    @foreach ($items as $items)
    <li>{{$items['id']}}</li>
@endforeach
</ul>