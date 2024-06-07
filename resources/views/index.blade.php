@extends('layouts.app')
@section('navbar')
    @include('layouts.navbar')
@endsection
@section('content')

    <div class="b-example-divider"></div>

    <div class="container col-xxl-8 px-4">
        <div class="row flex-lg-row-reverse align-items-center g-5 py-5">
            <div class="col-10 col-sm-8 col-lg-6">
            </div>
            <div class="col-lg-6">
                <p class="display-6"    >Booking lapangan</p>
                <div class="d-grid gap-2 d-md-flex justify-content-md-start mt-5">
                    <button type="button" class="btn btn-danger btn-lg px-4 gap-3"><a href="{{ route('sewalapangan') }}"
                            style="text-decoration:none; color:whitesmoke;">Sewa Lapangan</a></button>
                    <button type="button" class="btn btn-danger btn-lg px-4 gap-3"><a href="{{ route('register') }}"
                            style="text-decoration:none; color:whitesmoke;">Register</a></button>
                    <button type="button" class="btn btn-danger btn-lg px-4 gap-3"><a href="{{ route('login') }}"
                            style="text-decoration:none; color:whitesmoke;">Login</a></button>
                </div>
            </div>
        </div>
    </div>
@endsection
