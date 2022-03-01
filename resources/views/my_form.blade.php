<h1>Töltsd ki a mezőket!</h1>
<!-- @if($errors->any())
    <ul>
        @foreach($errors->all() as $error)
            <li>
                {{$error}}
            </li>
        @endforeach
    </ul>
@endif -->
<form action="add-student" method="post">
@csrf
    <p>
        Név: <input type="text" name="name" placeholder="név">
        <br>
        @error("name")
            <span>{{$message}}</span>
        @enderror
    </p>
    <p>
        Email: <input type="text" name="email" placeholder="email">
        <br>
        @error("email")
            <span>{{$message}}</span>
        @enderror
    </p>
    <p>
        Telefon: <input type="text" name="phone" placeholder="telefon">
        <br>
        @error("phone")
            <span>{{$message}}</span>
        @enderror
    </p>
    <p>
        <button type="submit">Küldés</button>
    </p>
</form>