@extends('layouts.app')
@section('content')
<div class="container-fluid">
  <div class="row justify-content-center">
    @include('admin.sidebar')
    @include('products.update')
  </div>
</div>
@endsection
