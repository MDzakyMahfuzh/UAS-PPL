@extends('customer.layouts.customer')

@push('style')
    <!-- CSS Libraries -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
    <link rel="stylesheet" href="{{asset('css/customer/header.css')}}">
    <link rel="stylesheet" href="{{asset('css/customer/footer.css')}}">
    <link rel="stylesheet" href="{{asset('css/customer/package.css')}}">
@endpush

@section('content')

    @include('customer.components.package.search')
    
    <div class="container landing"> 
        
        <div class="my-5">
            <h3>Popular Package</h3>
            @include('customer.components.package.popular-package')

            <h3>Latest Package</h3>
            @include('customer.components.package.latest-package')
        </div>  
    </div>

@endsection


