@extends('layouts.user.master')
@section('content')
<div class="container-fluid py-5">
    <div class="container">
        <div class="card">
            <div class="card-header">
                <h2 class="fw-bold">Riwayat Peminjaman Mobil</h2>
            </div>
            <div class="card-body">
                <a href="{{'booking/create'}}" class="btn btn-sm btn-success mb-5">
                    <i class="bi bi-plus-lg fw-bold"></i> Tambah
                </a>

                @if (session('success'))
                    <div class="text-success mb-3">
                        {{ session('success') }}
                    </div>
                @endif

                <table id="booking" class="table table-striped table-bordered mt-5" style="width:100%">
                    <thead class="bg-secondary text-light">
                        <tr>
                            <th class="text-center">No.</th>
                            <th class="text-center">Merek</th>
                            <th class="text-center">Model</th>
                            <th class="text-center">Nomor Plat</th>
                            <th class="text-center">Tanggal Mulai</th>
                            <th class="text-center">Tanggal Selesai</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        @if ($booking->count())
                            @foreach($booking as $index => $b)
                                <tr>
                                    <td class="text-center">{{ $index + 1 }}.</td>
                                    <td>{{ $b->brand }}</td>
                                    <td>{{ $b->model }}</td>
                                    <td>{{ $b->license_plate }}</td>
                                    <td class="text-center">{{date('d-m-Y', strtotime($b->start_date))}}</td>
                                    <td class="text-center">{{date('d-m-Y', strtotime($b->end_date))}}</td>
                                    <td>
                                        <button class="btn btn-sm btn-success" type="submit">Kembalikan</button>
                                    </td>
                                </tr>
                            @endforeach
                        @endif
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
        new DataTable('#booking');
    });
</script>
@endsection