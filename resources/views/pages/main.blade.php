@extends('template.index')

@section('content')
    @include('partials.heroSec')
    <main id="main">
        @include('partials.aboutSec')
        @include('partials.featSec')
        @include('partials.servicesSec')
        @include('partials.portfolioSec')
        @include('partials.testimonialsSec')
        @include('partials.teamSec')
        @include('partials.contactSec')
    </main>
@endsection