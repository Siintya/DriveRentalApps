@extends('layouts.home.master')
@section('content')
<div class="container-fluid mt-5">
    <div class="container py-5">
        <div class="card mx-auto d-block" style="width:28rem;">
            <div class="card-header">
                <h1 class="h3 fw-normal">Login</h1>
            </div>
            <div class="card-body">
                @if (session('success'))
                    <div class="text-success mb-3">
                        {{ session('success') }}
                    </div>
                @endif

                <form class="p-3" role="form" action="{{route('login')}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control form-control-sm" id="name" name="name" placeholder="name">
                        <label for="name">Nama</label>
                    </div>
                    <div class="form-floating mb-3">
                        <input type="password" class="form-control form-control-sm" id="password" name="password" placeholder="Password">
                        <label for="password">Password</label>
                    </div>
                    <p class="text-start text-muted">Belum memiliki account? <a href="{{url('register')}}">Register</a></p>
                    <button class="w-100 mt-2 btn btn-md btn-primary" type="submit">Login</button>
                </form>
            </div>
        </div>
        <!-- footer -->
        <p class="mt-5 mb-3 text-muted">&copy; 2023</p>
    </div>
</div>
@endsection