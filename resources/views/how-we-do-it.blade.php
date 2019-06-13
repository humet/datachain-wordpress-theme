{{--
  Template Name: how we do it Template
--}}

@extends('layouts.app')

@section('content')
  @while(have_posts()) @php the_post() @endphp
    @include('partials.page-header')
    @include('partials.content-our-research-solutions-include')
    @include('partials.content-our-tools-and-research')
  @endwhile
@endsection
