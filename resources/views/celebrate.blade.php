@extends('layout')

@section('title', 'OMG OMG OMG!!!!!')

@section('content')
    <main class="mt-5">
        <h1 class="text-center"><b>OMG SUPER!!!!!!</b></h1>
        <div class="row justify-content-center">
            <div class="col-lg-9">
                <img src="/assets/happy-cat.gif" class="mx-auto d-block mt-3">

            </div>

            <div class="col-lg-4">
                <a href="{{ route('choosefood') }}" class="btn btn-lg uwu-button w-100 mt-3">Przejdź dalej UWU</a>
                <audio controls="" autoplay="" loop="" id="uwuaudio" class="mx-auto d-block mt-3">
                    <source src="/assets/happy.mp3" type="audio/mpeg">
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
