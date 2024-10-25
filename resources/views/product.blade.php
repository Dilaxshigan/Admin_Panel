@extends('layouts.app')
@section('title','')
@section('main-content')

<div class="container-fluid">
    <div class="row">

        <div class="col-auto min-vh-100 bg-dark">
        <hr class="text-white">
        <div class="pt-4 pb-1 px-2">
        <ul class="nav nav-pills flex-column mb-auto">

        <li class="nav-item"><a href="{{ route('review') }}" class="fs-5 text-white text-decoration-none mx-3 mb-2 d-block"><img src="{{ asset('img/settings.svg') }}" class="img-fluid" alt="">  Review Management</a></li>
        <li class="nav-item"><a href="#" class=" fs-5 text-white text-decoration-none mx-3 mb-2 d-block"><img src="{{ asset('img/settings.svg') }}" class="img-fluid" alt="">  Project Management</a></li>
        <li class="nav-item"><a href="#" class="fs-5 text-white text-decoration-none mx-3 mb-2 d-block"><img src="{{ asset('img/settings.svg') }}" class="img-fluid" alt="">  Service Management</a></li>
        <li class="nav-item"><a href="#" class="fs-5 text-white text-decoration-none mx-3 mb-2 d-block"><img src="{{ asset('img/settings.svg') }}" class="img-fluid" alt="">  Blog Management</a></li>
        <li class="nav-item"><a href="{{ route('product') }}" class="nav-link active fs-5 text-white text-decoration-none mx-3 mb-2 d-block"><img src="{{ asset('img/settings.svg') }}" class="img-fluid" alt="">  Product Management</a></li>
        <li class="nav-item"><a href="#" class="fs-5 text-white text-decoration-none mx-3 mb-2 d-block"><img src="{{ asset('img/settings.svg') }}" class="img-fluid" alt="">  Inquire Management</a></li>
        <li class="nav-item"><a href="#" class="fs-5 text-white text-decoration-none mx-3 mb-2 d-block"><img src="{{ asset('img/settings.svg') }}" class="img-fluid" alt="">  Career Management</a></li>
        <li class="nav-item"><a href="#" class="fs-5 text-white text-decoration-none mx-3 mb-2 d-block"><img src="{{ asset('img/settings.svg') }}" class="img-fluid" alt="">  Employee Management</a></li>
        <li class="nav-item"><a href="#" class="fs-5 text-white text-decoration-none mx-3 mb-2 d-block"><img src="{{ asset('img/settings.svg') }}" class="img-fluid" alt="">  Slider Management</a></li>
        <li class="nav-item"><a href="#" class="fs-5 text-white text-decoration-none mx-3 mb-2 d-block"><img src="{{ asset('img/settings.svg') }}" class="img-fluid" alt="">  Count Management</a></li>
        <li class="nav-item"><a href="#" class="fs-5 text-white text-decoration-none mx-3 mb-2 d-block"><img src="{{ asset('img/settings.svg') }}" class="img-fluid" alt="">  Client Management</a></li>

        </ul>
    </div>

        </div>

        <div class="col">
            <div class="container mt-4 mx-auto">
                <div class="d-flex align-items-center w-100 justify-content-between bg-dark rounded" style="height: 56px;">
                     <a href="{{ route('review') }}" class="active fs-5 text-white text-decoration-none ms-2 pt-1 d-block"><img src="{{ asset('img/settings.svg') }}" class="img-fluid" alt="">  Product Management</a>
                      <a href="{{ route('add_review') }}" class="btn btn-custom fs-5 text-white me-2 py-0 px-4">+ Add Product</a>
                </div>
            </div>
        </div>
            
    </div>
</div>


@endsection
@section('styles')
<link rel="stylesheet" href="{{ asset('css/product.css') }}">
@endsection
@section('scripts')
<script src="{{ asset('js/product.js') }}"></script>
@endsection