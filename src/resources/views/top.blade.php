@extends('layouts.common')
@section('title', 'トップ | '.env('APP_NAME'))
@section('version', env('VERSION'))
@include('layouts.head')
@include('layouts.footer')
@include('layouts.script')
@section('content')
    ここはただのBlade製ページ
    <ul>
        <li><a href="">Vue導入 - サーバーレンダリング</a></li>
        <li><a href="">Vue導入 - Vueレンダリング - SPAチック</a></li>
    </ul>
@endsection
