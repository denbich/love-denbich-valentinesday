@extends('layout')

@section('title', 'Wybierz co będziemy jeść')

@section('content')
    <main class="mt-5">
        <h1 class="text-center"><b>Teraz kochanie, wybierz co będziemy jeść <3</b></h1>
        <form action="{{ route('choosefood') }}" method="POST">
            @csrf
            <div class="row justify-content-center">
                <div class="col-lg-9">
                    <div class="row">
                        <div class="col-lg-4">
                            <img src="https://www.mojegotowanie.pl/media/cache/default_big_main_photo/uploads/media/recipe/0002/71/pizza-pepperoni_170822.webp" class="img-fluid">
                            <label><input type="radio" name="food" value="pizza" required>
                                <b>Pizza</b></label>
                        </div>
                        <div class="col-lg-4">
                            <img src="https://az.przepisy.pl/www-przepisy-pl/www.przepisy.pl/przepisy3ii/img/variants/800x0/smazony-makaron.jpg" class="img-fluid">
                            <label><input type="radio" name="food" value="makaron" required>
                                <b>Makaron</b></label>
                        </div>
                        <div class="col-lg-4">
                            <img src="https://www.kikkoman.pl/fileadmin/_processed_/0/b/csm_1101-recipe-page-Authentic-Japanese-soy-sauce-ramen_desktop_7e407b8b49.webp" class="img-fluid">
                            <label><input type="radio" name="food" value="ramen" required>
                                <b>Ramen</b></label>
                        </div>
                        <div class="col-lg-4">
                            <img src="https://harmoniasmakow.pl/img/uploads/AdobeStock_82346311_min_min.jpeg" class="img-fluid">
                            <label><input type="radio" name="food" value="sushi" required>
                                <b>Sushi</b></label>
                        </div>
                        <div class="col-lg-4">
                            <img src="https://az.przepisy.pl/www-przepisy-pl/www.przepisy.pl/przepisy3ii/img/variants/800x0/pyszne_pljpg1645461269371.jpg" class="img-fluid">
                            <label><input type="radio" name="food" value="burgery" required>
                                <b>Burgery</b></label>
                        </div>
                        <div class="col-lg-4">
                            <img src="https://www.pyszne.pl/foodwiki/uploads/sites/7/2018/02/kuchnia-grecka-4.jpg" class="img-fluid">
                            <label><input type="radio" name="food" value="greckie" required>
                                <b>Greckie jedzenie</b></label>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <button type="submit" class="btn btn-lg uwu-button w-100 mt-3">Przejdź dalej UWU</button>
                </div>
            </div>
        </form>


    </main>
@endsection
