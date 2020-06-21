@extends("layout.layout")
@section("content")
<main>
    <form action="{{route('store')}}" method="post">
        @csrf
        @method("POST")
        <label for="firstname">Nome</label>
        <input type="text" name="firstname" value=""><br>
        <label for="lastname">Cognome</label>
        <input type="text" name="lastname" value=""><br>
        <label for="address">Indirizzo</label>
        <input type="text" name="address" value=""><br>
        <label for="code">CAP</label>
        <input type="text" name="code" value=""><br>
        <label for="state">Stato</label>
        <input type="text" name="state" value=""><br>
        <label for="phonenumber">Numero Di Telefono</label>
        <input type="text" name="phonenumber" value=""><br>
        <label for="role">Ruolo</label>
        <input type="text" name="role" value=""><br>
        <button type="submit" name="submit">Submit</button>
    </form>
</main>
@endsection