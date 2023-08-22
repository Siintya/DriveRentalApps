@extends('layouts.home.master')
@section('content')
<div class="container-fluid mt-5">
    <div class="container py-5">
        <div class="card mx-auto d-block" style="width:28rem;">
            <div class="card-header">
                <h1 class="h3 fw-normal">Register</h1>
            </div>
            <div class="card-body">
                <form class="p-3" role="form" action="{{route('register.action')}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="row text-start">
                        <div class="col-md-6">
                            <div class="form-group mb-3">
                                <label class="form-label" for="nama">Nama</label>
                                <input type="text" class="form-control form-control-sm" id="nama" name="nama">
                                
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group mb-3">
                                <label class="form-label" for="password">Password</label>
                                <input type="password" class="form-control form-control-sm" id="password" name="password">
                                
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group mb-3">
                                <label class="form-label" for="telp">No. Telp</label>
                                <input type="integer" class="form-control form-control-sm" id="telp" name="telp">
                                
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group mb-3">
                                <label class="form-label" for="sim">No. SIM</label>
                                <input type="integer" class="form-control form-control-sm" id="sim" name="sim">
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group mb-3">
                                <label class="form-label" for="alamat">Alamat</label>
                                <textarea class="form-control form-control-sm" id="alamat" name="alamat" rows="4"></textarea>
                            </div>
                        </div>
                    </div>
                    
                    <p class="text-start text-muted">Sudah memiliki account? <a href="{{url('/')}}">Login</a></p>
                    <button class="w-100 mt-2 btn btn-md btn-primary" type="submit">Register</button>
                </form>
            </div>
        </div>
        <!-- footer -->
        <p class="mt-5 mb-3 text-muted">&copy; 2023</p>
    </div>
</div>
@endsection