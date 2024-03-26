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