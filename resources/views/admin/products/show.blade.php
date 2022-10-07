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
    
    <div class="container-fluid my-3">
      <div class="row">
        @include('admin.components.sidebar')
        <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
          @foreach ($items as $item)      
          @if ($item->id == $id)
            <table class="table">
              <thead>
                <tr>
                  <th scope="col"></th>
                  <th scope="col"></th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <th scope="row">Photo</th>
                  <td><img src="{{ $item->photo }}" width="150px" alt=""></td>
                </tr>
                <tr>
                  <th scope="row">ID</th>
                  <td>{{ $item->id }}</td>
                </tr>
                <tr>
                  <th scope="row">Name</th>
                  <td>{{ $item->name }}</td>
                </tr>
                <tr>
                  <th scope="row">Description</th>
                  <td>{{ $item->description }}</td>
                </tr>
                <tr>
                  <th scope="row">Rating</th>
                  <td>{{ $item->rating }}</td>
                </tr>
                <tr>
                  <th scope="row">Stock</th>
                  <td>{{ $item->stock }}</td>
                </tr>
                <tr>
                  <th scope="row">Price</th>
                  <td>Rp</span>{{ number_format($item->price,2, ',', '.') }}</td>
                </tr>
                <tr>
                  <th scope="row">Sold</th>
                  <td>{{ $item->sold }}</td>
                </tr>
                <tr>
                  <th scope="row">Created at</th>
                  <td>{{ $item->created_at }}</td>
                </tr>
                <tr>
                  <th scope="row">Update at</th>
                  <td>{{ $item->updated_at }}</td>
                </tr>
              </tbody>
            </table>
            <div class="float-end">
              <a href="/admin/products/edit/{{ $item->id }}"><button type="button" class="btn btn-primary"><i class="bi bi-pen-fill"></i></button></a>
              <a href="/admin/products/delete/{{ $item->id }}"><button type="button" class="btn btn-danger"><i class="bi bi-trash3-fill"></i></button></a>
            </div>
            @endif
          @endforeach
        </main>
      </div>
    </div>
@endsection
