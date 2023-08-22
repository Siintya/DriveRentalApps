@extends('layouts.user.master')

@section('content')
<div class="container-fluid py-5">
    <div class="container">
        <div class="card">
            <div class="card-header">
                <h3>Tambah Mobil Baru</h3>
            </div>

            <div class="card-body">
                <form class="row g-3 p-3 needs-validation" role="form" action="{{ route('mobil.store') }}" method="POST" novalidate>
                    @csrf
                    <div class="col-md-6">
                        <label for="merek" class="form-label">Merek</label>
                        <input type="text" class="form-control" id="merek" name="merek" required>
                    </div>
                    <div class="col-md-6">
                        <label for="model" class="form-label">Model</label>
                        <input type="text" class="form-control" id="model" name="model" required>
                    </div>
                    <div class="col-md-6">
                        <label for="nomor_plat" class="form-label">Nomor Plat</label>
                        <input type="text" class="form-control" id="nomor_plat" name="nomor_plat" required>
                    </div>
                    <div class="col-md-6">
                        <label for="tarif_sewa" class="form-label">Tarif Sewa per Hari</label>
                        <input type="text" class="form-control" id="tarif_sewa" name="tarif_sewa" required>
                    </div>
                    <div class="col-12">
                        <div class="d-flex justify-content-between">
                            <button class="btn btn-primary" type="submit">Simpan</button>
                            <a href="{{url('mobil')}}" class="btn btn-secondary">Kembali</a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
