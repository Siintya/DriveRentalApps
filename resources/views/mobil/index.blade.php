@extends('layouts.user.master')
@section('content')
<div class="container-fluid py-5">
    <div class="container">
        <div class="card">
            <div class="card-header">
                <h2>Daftar Mobil Tersedia</h2>
            </div>
            <div class="card-body">
                <a href="{{'mobil/tambah'}}" class="btn btn-sm btn-success mb-5">
                    <i class="bi bi-plus-lg fw-bold"></i> Tambah
                </a>

                @if (session('success'))
                    <div class="text-success mb-3 mt-3">
                        {{ session('success') }}
                    </div>
                @endif

                <table id="mobil" class="table table-striped table-bordered mt-5" style="width:100%">
                    <thead class="bg-secondary text-light">
                        <tr>
                            <th class="text-center">No.</th>
                            <th class="text-center">Merek</th>
                            <th class="text-center">Model</th>
                            <th class="text-center">Nomor Plat</th>
                            <th class="text-center">Tarif Sewa per Hari</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($cars as $index => $car)
                            <tr>
                                <td class="text-center">{{ $index + 1 }}.</td>
                                <td>{{ $car->brand }}</td>
                                <td>{{ $car->model }}</td>
                                <td>{{ $car->license_plate }}</td>
                                <td class="text-center">Rp. {{ number_format($car->daily_rate, 2) }}</td>
                                <td class="text-center">
                                    <a href="{{url('mobil/') . '/' . $car->id }}" class="btn btn-sm btn-primary">
                                        <i class="bi bi-eye-fill"></i>
                                    </a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection
@section('js')
<script>
    $(function () {
        new DataTable('#mobil');
    });
</script>
@endsection