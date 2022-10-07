@extends('admin.products.layout')
@section('content.products')
  <body>
    <header class="navbar navbar-dark sticky-top bg-dark flex-md-nowrap p-0 shadow">
      <a class="navbar-brand col-md-3 col-lg-2 me-0 px-3 fs-6" href="#">NIKKY ADMIN</a>
      <button class="navbar-toggler position-absolute d-md-none collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <input class="form-control form-control-dark w-100 rounded-0 border-0" type="text" placeholder="Search" aria-label="Search">
      <div class="navbar-nav">
        <div class="nav-item text-nowrap">
          <a class="nav-link px-3" href="#">Sign out</a>
        </div>
      </div>
    </header>
    <div class="container-fluid">
      <div class="row">
        @include('admin.components.sidebar')

        <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
          <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom"></div>
            <form action="/admin/products/store" method="post" enctype="multipart/form-data">
              {{ csrf_field() }}
              <div class="mb-3">
                <label for="photo" class="form-label">Product photo</label>
                <input type="file" class="form-control" id="photo" name="photo" placeholder="Product photo">
              </div>
              <div class="mb-3">
                <label for="name" class="form-label">Product Name</label>
                <input type="text" class="form-control" id="name" name="name" placeholder="Product name">
              </div>
              <div class="mb-3">
                <label for="description" class="form-label">Description</label>
                <textarea class="form-control" id="description" name="description" placeholder="Description" rows="3"></textarea>
              </div>
              <div class="mb-3">
                {{-- <label for="rating" class="form-label">Rating</label> --}}
                <input class="form-control" id="rating" type="hidden" placeholder="-" aria-label="Disabled input rating" disabled>
              </div>
              <div class="mb-3">
                <label for="stock" class="form-label">Stock</label>
                <input type="number" class="form-control" id="stock" name="stock" placeholder="Stock">
              </div>
              <div class="mb-3">
                <label for="price" class="form-label">Price</label>
                <input type="number" class="form-control" id="price" name="price" placeholder="Price">
              </div>
              <div class="mb-3">
                {{-- <label for="rating" class="form-label">Sold</label> --}}
                <input class="form-control" id="rating" type="hidden" placeholder="-" aria-label="Disabled input solg" disabled>
              </div>
              <button type="submit" class="btn btn-success float-end">Submit</button>
            </form>
        </main>
      </div>
    </div>
@endsection