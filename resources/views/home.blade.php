@extends('layouts.global')
@section('content_home')
  <div class="container container-1-light w-100 p-relative mt-4 mb-5">
    @include('components.banner')
  </div>  
  <div class="container text-justify py-0">
    <h2 class="text-uppercase fs-5 text-secondary">Our Products</h2>
    <hr width="70px">
    
    <div class="row justify-content-sm-center mb-5">
      @include('components.card')
    </div>
  </div>
@endsection