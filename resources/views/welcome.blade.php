@extends('layout')

@section('title', "Wprowadź hasło ;)")

@section('content')
    <main class="mt-5">
        <h1 class="text-center"><b>Cześć przystojniaku ;) <br> Podaj hasło by przejść dalej <3</b></h1>
        <form action="{{ route('login') }}" method="POST">
            @csrf
            <div class="row justify-content-center">
                <div class="col-lg-4">
                    <div class="form-group">
                        <label for="password"><b>Hasło:</b></label>
                        <input type="text" class="form-control" id="password" name="password">
                        @if(session('error'))
                            <div class="alert alert-danger mt-3" role="alert">
                                HASŁO NIEPRAWIDŁOWE UWU
                            </div>
                        @endif
                    </div>
                    <div class="mt-3">
                        <button type="submit" class="btn uwu-button w-100">Przejdź dalej UWU</button>
                    </div>
                </div>
            </div>

        </form>
    </main>
@endsection
