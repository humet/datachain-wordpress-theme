{{--
  Template Name: what we do Template
--}}

@extends('layouts.app')

@section('content')
  @while(have_posts()) @php the_post() @endphp
    @include('partials.page-header')
    @include('partials.content-social-audits')
    @include('partials.content-social-listening')
    @include('partials.content-trend-review-monitoring')
    @include('partials.content-social-first-pulse-surveys')
  @endwhile
@endsection
