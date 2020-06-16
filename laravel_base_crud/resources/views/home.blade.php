@extends("layout")

@section("content")
<main>
    <div>

        @foreach($cagnoliniDb as $cane)

            Nome: <a href="{{route('show', $cane['id'])}}">{{$cane["nome"]}}</a><br>

        @endforeach

    </div>
</main>
@endsection
