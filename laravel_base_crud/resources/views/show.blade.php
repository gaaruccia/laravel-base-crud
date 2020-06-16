@extends("layout")

@section("content")
<main>
    <div>

        ID: {{$cane["id"]}}<br>    
        Nome: {{$cane["nome"]}}<br>
        Tipo: {{$cane["tipo"]}}<br>
        Altezza: {{$cane["altezza"]}}cm<br>
        Peso: {{$cane["peso"]}}kg<br>

    </div>
</main>
@endsection