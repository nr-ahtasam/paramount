@extends('layouts.app') @section('title', 'Paramount | Homepage')
@section('content')
<main>
    @include('homepage.sections.hero') @include('homepage.sections.about')
    @include('homepage.sections.portfolio')
    @include('homepage.sections.why-choose')
    @include('homepage.sections.sustainability')
    @include('homepage.sections.innovation')
    @include('homepage.sections.network')
    @include('homepage.sections.testimonials')
    @include('homepage.sections.insights') 
    @include('homepage.sections.cta')
</main>
@endsection
