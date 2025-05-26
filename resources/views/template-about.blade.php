{{--
  Template Name: About Template
--}}

@extends('layouts.app')

@section('content')
  @while(have_posts()) @php(the_post())
    {{-- @include('partials.page-header')
    @include('partials.content-page') --}}
    @include('partials.about.about-hero')
    @include('partials.about.features')
    @include('partials.about.team')
  @endwhile
@endsection
