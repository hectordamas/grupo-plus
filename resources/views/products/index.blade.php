@extends('layouts.app')
@section('content')
<div class="container-fluid">
  <div class="row">
    @include('admin.sidebar')
    @include('products.products')
  </div>
</div>
@endsection
