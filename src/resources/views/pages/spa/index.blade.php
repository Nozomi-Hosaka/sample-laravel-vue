@extends('layouts.spa')
@section('title', 'Vue-Laravel | '.env('APP_NAME'))
@section('version', env('VERSION'))
@include('layouts.head')
@include('layouts.vue_script')
@section('content')
    ここはBladeにVueを埋め込んだページ
    <div id="app">
        <app></app>
    </div>
@endsection
