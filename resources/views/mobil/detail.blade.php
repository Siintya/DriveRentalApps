@extends('layouts.user.master')

@section('content')
<div class="container-fluid py-5">
    <div class="container">
        <div class="card">
            <div class="card-body">
                <form class="row g-3 p-3 needs-validation" role="form" action="#">
                    @csrf
                    <div class="col-md-6">
                        <label for="merek" class="form-label">Merek</label>
                        <input type="text" class="form-control" id="merek" value="{{ $car->brand }}">
                    </div>
                    <div class="col-md-6">
                        <label for="model" class="form-label">Model</label>
                        <input type="text" class="form-control" id="model" value="{{ $car->model }}">
                    </div>
                    <div class="col-md-6">
                        <label for="nomor_plat" class="form-label">Nomor Plat</label>
                        <input type="text" class="form-control" id="nomor_plat" value="{{ $car->license_plate }}">
                    </div>
                    <div class="col-md-6">
                        <label for="tarif_sewa" class="form-label">Tarif Sewa per Hari</label>
                        <input type="text" class="form-control" id="tarif_sewa" value="Rp. {{ number_format($car->daily_rate, 2) }}">
                    </div>
                    <div class="col-12">
                        <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                            <a href="{{url('mobil')}}" class="btn btn-secondary">Kembali</a>
                        </div>
                    </div>
                </form>
            </div>

            
        </div>
    </div>
</div>
@endsection
