@extends('layout')

@section('title', 'Dziękuję, że jesteś <3')

@section('content')
    <main class="mt-5">
        <h1 class="text-center"><b>Doszedłeś do końca!!!</b></h1>
        <div class="row justify-content-center">
            <div class="col-lg-9">
                <img src="https://c.tenor.com/Q6rgr_3z9W0AAAAd/tenor.gif" class="mx-auto d-block mt-3">
                <h3 class="text-center"><b>Dziękuję, że jesteś Rafale <3</b></h3>
                <h5 class="text-center"><b>Wyślij mi ten kod: {{ base64_encode('Jedzenie: '.session('food'). ' Aktywność: '.session('activity')) }}</b></h5>
            </div>

            <div class="col-lg-4">
                <audio controls="" autoplay="" loop="" id="uwuaudio" class="mx-auto d-block mt-3">
                    <source src="http://love-denbich-valentinesday.test/assets/end.mp3" type="audio/mpeg">
                </audio>
            </div>
        </div>
    </main>

    <script>
        $(document).ready(function() {
            $("#uwuaudio").get(0).play();
        });
    </script>
@endsection

