@extends('layout.home')
@section('title', 'List Products')
@section('content')

<div class="bg-light py-3">
  <div class="container">
    <div class="row">
      <div class="col-md-12 mb-0"><a href="index.html">Home</a> <span class="mx-2 mb-0">/</span> <strong class="text-black">Store</strong></div>
    </div>
  </div>
</div>

<div class="site-section">
  <div class="container">
    
    <div class="row">
      <div class="col-lg-6">
        <h3 class="mb-3 h6 text-uppercase text-black d-block">Filter by Price</h3>
        <div id="slider-range" class="border-primary"></div>
        <input type="text" name="text" id="amount" class="form-control border-0 pl-0 bg-white" disabled="" />
      </div>
      <div class="col-lg-6">
        <h3 class="mb-3 h6 text-uppercase text-black d-block">Filter by Reference</h3>
        <button type="button" class="btn btn-secondary btn-md dropdown-toggle px-4" id="dropdownMenuReference"
          data-toggle="dropdown">Reference</button>
        <div class="dropdown-menu" aria-labelledby="dropdownMenuReference">
          <a class="dropdown-item" href="#">Relevance</a>
          <a class="dropdown-item" href="#">Name, A to Z</a>
          <a class="dropdown-item" href="#">Name, Z to A</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">Price, low to high</a>
          <a class="dropdown-item" href="#">Price, high to low</a>
        </div>
      </div>
    </div>

    <div class="row">
      @foreach ($products as $product)
      <div class="col-sm-6 col-lg-4 text-center item mb-4">
        <span class="tag">Sale</span>
        <a href="/store/{{ $product->id }}"> <img src="/uploads/{{ $product->foto1 }}" alt="Image"></a>
        <h3 class="text-dark"><a href="/store/{{ $product->id }}">{{ $product->product_name }}</a></h3>
        <p class="price">Rp. {{ number_format($product->price) }}</p>
      </div>
      @endforeach
    </div>
  </div>
</div>
@endsection