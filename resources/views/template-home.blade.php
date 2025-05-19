{{--
  Template Name: Home Template
--}}

@extends('layouts.app')

@section('content')
  @while(have_posts()) @php(the_post())
    {{-- @include('partials.page-header')
    @include('partials.content-page') --}}
    @include('partials.homepage.hero')
    @include('partials.homepage.media-text')
  @endwhile
@endsection
