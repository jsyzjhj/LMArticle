@extends('layouts.main')

@section('title')
  {{ $title }}
@endsection

@section('metas')
  @parent
  <meta name="keywords" content="{{ $key }}" />
  <meta name="description" content="{{ $description }}" />
@endsection

@section('content')
  <div class="row">
    @include('widgets.search_bar')
    @include('home._notices')
    @include('home._category_articles')
    @include('home._links')
  </div>
@endsection
