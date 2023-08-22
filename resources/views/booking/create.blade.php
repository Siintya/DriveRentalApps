@extends('layouts.user.master')

@section('content')
<div class="container-fluid py-5">
    <div class="container">
        <div class="card">
            <div class="card-header">
                <h3 class="fw-bold">Pemesan Mobil</h3>
            </div>
            <div class="card-body">
                @if (session('error'))
                    <div class="alert alert-danger">
                        {{ session('error') }}
                    </div>
                @endif
            
                <form class="row" action="{{route('booking.store')}}" method="POST">
                    @csrf
                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="form-label" for="start_date">Tanggal Mulai</label>
                            <input type="date" class="form-control" name="start_date" id="start_date" required>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="form-label" for="end_date">Tanggal Selesai</label>
                            <input type="date" class="form-control" name="end_date" id="end_date" required>
                        </div>
                    </div>
                    
                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="form-label" for="car_id">Mobil:</label>
                            <select class="form-control" name="car_id" id="car_id" required>
                                @foreach($availableCars as $car)
                                    <option value="{{ $car->id }}">{{ $car->brand }} {{ $car->model }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>

                    <div class="col-md-12">
                        <button class="btn btn-primary" type="submit">Pesan</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
