@extends('layout')

@section('title', 'Wybierz co będziemy jeść')

@section('content')
    <main class="mt-5">
        <h1 class="text-center"><b>A co robimy po jedzeniu?</b></h1>
        <form action="{{ route('doingafter') }}" method="POST">
            @csrf
            <div class="row justify-content-center">
                <div class="col-lg-4">
                    <select class="form-select" name="activity" required>
                        <option value="gaming">Kręgle</option>
                        <option value="walk">Spacer</option>
                        <option value="cinema">Kino</option>
                        <option value="club">Klub</option>
                        <option value="netflix">Netflix and chill ;)</option>
                    </select>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-4">
                    <button type="submit" class="btn btn-lg uwu-button w-100 mt-3">Przejdź dalej UWU</button>
                </div>
            </div>
        </form>


    </main>
@endsection
