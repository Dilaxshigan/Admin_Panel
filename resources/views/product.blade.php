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
                     <a href="{{ route('product') }}" class="active fs-5 text-white text-decoration-none ms-2 pt-1 d-block"><img src="{{ asset('img/settings.svg') }}" class="img-fluid" alt="">  Product Management</a>
                      <a href="{{ route('add_product') }}" class="btn btn-custom fs-5 text-white me-2 py-0 px-4">+ Add Product</a>
                </div>

                <div class="table-responsive  row justify-content-center my-4">
        <div class="col-11">
            <table class="table table-borderless align-middle mx-auto">
                <thead >
                    <tr class="pb-4">
                       <th scope="col"> </th>
                        <th scope="col" > <h5></h5></th>
                        <th scope="col" class="me-5">
                         <h4>Image</h4>
                        </th>
                        <th scope="col" class="">
                        <h4>Title</h4>
                        </th>
                        <th scope="col" class="px-5">
                        <h4>Description</h4>
                        </th>
                        <th scope="col" class="">
                            <h4>Link</h4>
                        </th>
                        <th scope="col"><h4></h4></th>
                        <th scope="col"><h4></h4></th>
                        
                    </tr>
                </thead>
                <tbody>

                @foreach($product as $products)
                    <tr class=" border-bottom">
                        <th scope="row" class=" py-4"></th>
                        <div class="">
                            <td class="pe-5">{{ $products->id }}</td>
                            <td><img src="{{ asset('products/'.$products->image) }}" class="rounded me-5" style="height: 120px;width: 120px;" alt=""></td>
                            <td class="fs-6">{{ $products->title }}</td>
                            <td class="fs-6 px-5">{{ $products->description }}</td>
                            <td class="fs-6">{{ $products->link }}</td>
                        </div>
                        <td>
                             <a href="#"><img src="{{ asset('img/pen.svg') }}" class="img-fluid ms-5" alt=""></a>
                        </td>
                        <td>
                             <a href="{{ route('delete_product', $products->id) }}"><img src="{{ asset('img/trash.svg') }}" class="img-fluid ms-5" alt=""></a>
                        </td>
                    </tr>     
                    @endforeach
                </tbody>
            </table>
        </div>
        <div class="pagination custom-class d-flex flex-column align-items-center my-4 py-3">
        {{ $product->links() }} 
        </div>
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