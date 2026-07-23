@extends('layouts.app') @section('title', 'Paramount | Product Catalog')
@section('content')
<div class="w-full">
    @include('products.sections.product-hero')
    @include('products.sections.catalog')
    @include('products.sections.consultation')
</div>
@endsection
