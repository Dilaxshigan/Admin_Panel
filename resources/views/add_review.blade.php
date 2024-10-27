@extends('layouts.app')
@section('title','')
@section('main-content')

<div class="container-fluid mb-4">
    <div class="row">

        <div class="col-auto min-vh-100 bg-dark">
        <hr class="text-white">
        <div class="pt-4 pb-1 px-2">
        <ul class="nav nav-pills flex-column mb-auto">

        <li class="nav-item"><a href="{{ route('review') }}" class="nav-link active fs-5 text-white text-decoration-none mx-3 mb-2 d-block"><img src="{{ asset('img/settings.svg') }}" class="img-fluid" alt="">  Review Management</a></li>
        <li class="nav-item"><a href="#" class=" fs-5 text-white text-decoration-none mx-3 mb-2 d-block"><img src="{{ asset('img/settings.svg') }}" class="img-fluid" alt="">  Project Management</a></li>
        <li class="nav-item"><a href="#" class="fs-5 text-white text-decoration-none mx-3 mb-2 d-block"><img src="{{ asset('img/settings.svg') }}" class="img-fluid" alt="">  Service Management</a></li>
        <li class="nav-item"><a href="#" class="fs-5 text-white text-decoration-none mx-3 mb-2 d-block"><img src="{{ asset('img/settings.svg') }}" class="img-fluid" alt="">  Blog Management</a></li>
        <li class="nav-item"><a href="{{ route('product') }}" class="fs-5 text-white text-decoration-none mx-3 mb-2 d-block"><img src="{{ asset('img/settings.svg') }}" class="img-fluid" alt="">  Product Management</a></li>
        <li class="nav-item"><a href="#" class="fs-5 text-white text-decoration-none mx-3 mb-2 d-block"><img src="{{ asset('img/settings.svg') }}" class="img-fluid" alt="">  Inquire Management</a></li>
        <li class="nav-item"><a href="#" class="fs-5 text-white text-decoration-none mx-3 mb-2 d-block"><img src="{{ asset('img/settings.svg') }}" class="img-fluid" alt="">  Career Management</a></li>
        <li class="nav-item"><a href="#" class="fs-5 text-white text-decoration-none mx-3 mb-2 d-block"><img src="{{ asset('img/settings.svg') }}" class="img-fluid" alt="">  Employee Management</a></li>
        <li class="nav-item"><a href="#" class="fs-5 text-white text-decoration-none mx-3 mb-2 d-block"><img src="{{ asset('img/settings.svg') }}" class="img-fluid" alt="">  Slider Management</a></li>
        <li class="nav-item"><a href="#" class="fs-5 text-white text-decoration-none mx-3 mb-2 d-block"><img src="{{ asset('img/settings.svg') }}" class="img-fluid" alt="">  Count Management</a></li>
        <li class="nav-item"><a href="#" class="fs-5 text-white text-decoration-none mx-3 mb-2 d-block"><img src="{{ asset('img/settings.svg') }}" class="img-fluid" alt="">  Client Management</a></li>

        </ul>
    </div>

        </div>

        <div class="col d-flex justify-content-center ">
            <div class="container mt-4 pb-5 mx-auto">
                <div class="d-flex align-items-center w-100 justify-content-between bg-dark rounded" style="height: 56px;">
                <a href="#" class="active fs-5 text-white text-decoration-none ms-2 pt-1 d-block"><img src="{{ asset('img/settings.svg') }}" class="img-fluid" alt=""> Review Management > <span class="fw-semibold">Add Review</span></a>
                </div>

                <div class="card shadow w-75 my-4 p-4 mx-auto">
                    <form action="{{ route('store_review') }}" method="POST" enctype="multipart/form-data" class="fs-5" id="reviewForm">
                        @csrf
                        <div class="mb-3">
                            <label for="profile" class="form-label">Add Profile</label>
                            <input type="file" class="form-control fs-5 border-dark" id="image" name="image" accept="image/*">
                            @error('image')
                            <span class="text-danger fw-semibold">Error message goes here</span>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="name" class="form-label">Name</label>
                            <input type="text" class="form-control fs-5 border-dark" id="name" name="name" placeholder="Name">
                            @error('name')
                            <span class="text-danger fw-semibold">Error message goes here</span>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="description" class="form-label">Description</label>
                            <textarea class="form-control fs-5 border-dark" id="description" name="description" rows="2" placeholder="Description"></textarea>
                            @error('description')
                            <span class="text-danger fw-semibold">Error message goes here</span>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="review" class="form-label">Review</label>
                            <textarea class="form-control fs-5 border-dark" id="review" name="review" rows="3" placeholder="Review"></textarea>
                            @error('review')
                            <span class="text-danger fw-semibold">Error message goes here</span>
                            @enderror
                        </div>
                        <div class="mb-3 star-input">
                            <label for="star" class="form-label">Star</label><br>
                            <img src="{{ asset('img/Star.svg') }}" class="img-fluid" alt="">
                            <span class="fw-semibold">+</span>
                        </div>
                        <div class="text-end">
                           <button type="submit" class="btn btn-custom text-white fs-5 ms-auto py-1 px-4">Save</button>
                        </div>
                    </form>
                </div>
            </div>

        </div>
            
    </div>
</div>

@endsection
@section('styles')
<link rel="stylesheet" href="{{ asset('css/add_review.css') }}">
@endsection
@section('scripts')
<script src="{{ asset('js/add_review.js') }}"></script>
@if (Session::has('message'))
<script>
    // Ensure that jQuery is included
    $(document).ready(function() {
        swal("Review Successfully Added", "{{ Session::get('message') }}", {
            title: "Review Successfully Added",
            text: "Details saved",
            button: "OK",
            timer: 4000,
        });
    });
</script>
@endif
@endsection