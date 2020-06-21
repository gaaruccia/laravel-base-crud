@extends("layout.layout")
@section("content")
<main>
    <ul>
        <li><a href="{{route('create')}}">Crea un nuovo Omino</a></li>
        @foreach($omini as $omino)
            <li>Nome e Cognome: <a href="{{route('show', $omino['id'])}}">{{$omino["firstname"]}} {{$omino["lastname"]}}</a></li>
        @endforeach
    </ul>
</main>
@endsection
