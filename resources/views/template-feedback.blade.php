{{--
  Template Name: Feedback Template
--}}

@extends('layouts.app')

@section('content')
  @while(have_posts()) @php(the_post())
    {{-- @include('partials.page-header')
    @include('partials.content-page') --}}
    @include('partials.feedback.feedback-hero')
      @include('partials.feedback.feedback')
  @endwhile
@endsection
