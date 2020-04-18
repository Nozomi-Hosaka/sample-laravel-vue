@extends('layouts.spa')
@section('title', 'SPA | '.env('APP_NAME'))
@section('version', env('VERSION'))
@include('layouts.head')
@include('layouts.vue_script')
@section('content')
    <div id="app">
        <app></app>
    </div>
@endsection
