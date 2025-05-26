{{--
  Template Name: Books Template
--}}

@extends('layouts.app')

@section('content')
  @while(have_posts()) @php(the_post())
    {{-- @include('partials.page-header')
    @include('partials.content-page') --}}
    @include('partials.books.books-hero')
     @include('partials.books.books')
  @endwhile
@endsection
