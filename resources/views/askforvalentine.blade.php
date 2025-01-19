@extends('layout')

@section('title', 'Czy będziesz moją walentynką?')

@section('content')
    <main class="mt-5">
        <h1 class="text-center"><b>Panie Rafale, czy będziesz Moją walentynką?</b></h1>
            <div class="row justify-content-center">
                <div class="col-lg-4">
                    <a href="{{ route('celebrate') }}" class="btn btn-lg uwu-button w-100">Oczywiście, że TAK!!!!!</a>
                </div>
                <div class="col-lg-4">
                    <button type="button" id="vanishButton" class="btn btn-lg uwu-button w-100 runaway-button">Ummmmm... nie :(</button>
                </div>

                <div class="col-lg-8">
                    <img src="/assets/please.gif" class="mx-auto d-block mt-3">
                </div>
            </div>
    </main>

    <script>
        const button = document.getElementById("vanishButton");

        button.addEventListener("mouseover", () => {
            button.classList.add("d-none");
        });

        button.addEventListener("mouseleave", () => {
            button.classList.remove("d-none");
        });
    </script>
@endsection
