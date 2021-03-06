@extends('layouts.app')

@section('content')
  @while(have_posts()) @php the_post() @endphp
    @include('partials.page-header')
    @include('partials.content-what-we-do')
    @include('partials.content-how-we-do-it')
  @endwhile
@endsection
