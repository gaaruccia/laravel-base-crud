@extends("layout.layout")
@section("content")
<main>
    <form action="{{route('update', $omino['id'])}}" method="post">
        @csrf
        @method("POST")
        <label for="firstname">Nome</label>
        <input type="text" name="firstname" value="{{$omino['firstname']}}"><br>
        <label for="lastname">Cognome</label>
        <input type="text" name="lastname" value="{{$omino['lastname']}}"><br>
        <label for="address">Indirizzo</label>
        <input type="text" name="address" value="{{$omino['address']}}"><br>
        <label for="code">CAP</label>
        <input type="text" name="code" value="{{$omino['code']}}"><br>
        <label for="state">Stato</label>
        <input type="text" name="state" value="{{$omino['state']}}"><br>
        <label for="phonenumber">Numero Di Telefono</label>
        <input type="text" name="phonenumber" value="{{$omino['phonenumber']}}"><br>
        <label for="role">Ruolo</label>
        <input type="text" name="role" value="{{$omino['role']}}"><br>
        <button type="submit" name="submit">Submit</button>
    </form>
</main>
@endsection