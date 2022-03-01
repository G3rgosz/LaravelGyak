<h1>Töltsd ki a mezőket!</h1>

<form action="add-product" method="post">
@csrf
    <p>
        név: <input type="text" name="name" placeholder="név">
    </p>
    <p>
        ár: <input type="text" name="ar" placeholder="ár">
    </p>
    <p>
        cikkszám: <input type="text" name="cikkszam" placeholder="cikkszám">
    </p>
    <p>
        <button type="submit">Küldés</button>
    </p>
</form>