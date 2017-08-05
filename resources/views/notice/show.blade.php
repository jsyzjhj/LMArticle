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
  @include('notice._breadcrumb')


  <div class="row">
    <div class="col-md-9">
      <div class="page-header article-title text-center">
        <h1>{{ $notice->title }}</h1>
      </div>

      <div class="article-content">
        {!! $notice->content !!}
      </div>
    </div>

    <div class="col-md-3">
      @include('notice._right_articles')
    </div>
  </div>

@endsection
