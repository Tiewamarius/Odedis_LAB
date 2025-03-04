@extends('mylayouts.app')
@section('contente')

<section class="hero">
    <div class="container">
        <h1>Suivi de votre expédition</h1>
        <form action="#" method="get">
            <input type="text" name="tracking_number" placeholder="Saisissez votre/vos numéro(s) de suivi">
            <button type="submit">Suivre</button>
        </form>
        <div class="buttons">
            <a href="#" class="button">Envoyer maintenant</a>
            <a href="#" class="button">Obtenir un devis</a>
        </div>
    </div>
    </section>
@endsection