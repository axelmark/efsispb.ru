@extends('layouts.site')

@section('header')
    @include('site.header')
@endsection

@section('content')
    @if($post)
        @include('site.content')
        @include('site.pagination')
    @else
        {!! Lang::get('ru.noart')!!}
    @endif
@endsection

@section('footer')
    @include('site.footer')
@endsection