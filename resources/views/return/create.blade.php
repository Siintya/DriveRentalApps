@extends('layouts.user.master')

@section('content')
    <h1>Kembalikan Mobil</h1>

    @if (session('error'))
        <div class="alert alert-danger">
            {{ session('error') }}
        </div>
    @endif

    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <form action="#" method="POST">
        @csrf
        <label for="license_plate">Nomor Plat Mobil:</label>
        <input type="text" name="license_plate" id="license_plate" required>
        <br>
        <button type="submit">Kembalikan</button>
    </form>
@endsection
