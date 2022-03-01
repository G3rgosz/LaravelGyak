<h1>Töltsd ki a mezőket!</h1>
@if($errors->any())
    <ul>
        @foreach($errors->all() as $error)
            <li>
                {{$error}}
            </li>
        @endforeach
    </ul>
@endif
<form action="add-student" method="post">
@csrf
    <p>
        Név: <input type="text" name="name" placeholder="név">
    </p>
    <p>
        Email: <input type="text" name="email" placeholder="email">
    </p>
    <p>
        Telefon: <input type="text" name="phone" placeholder="telefon">
    </p>
    <p>
        <button type="submit">Küldés</button>
    </p>
</form>