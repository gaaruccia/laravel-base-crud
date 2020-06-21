@extends("layout.layout")
@section("content")
<main>
    <ul>
        <li>Nome: {{$omino["firstname"]}}</li>
        <li>Cognome: {{$omino["lastname"]}}</li>
        <li>Indirizzo: {{$omino["address"]}}</li>
        <li>CAP: {{$omino["code"]}}</li>
        <li>Stato: {{$omino["state"]}} </li>
        <li>Numero Di Telefono: {{$omino["phonenumber"]}}</li>
        <li>Ruolo: {{$omino["role"]}}</li>
        <li><a href="{{route('edit', $omino['id'])}}">Modifica Omino</a> </li>
        <li><a href="{{route('delete', $omino['id'])}}">Elimina Omino</a></li>
    </ul>
</main>
@endsection
