@extends('default_template')
@section('page-title')
    Home DC Comics
@endsection
@section('main-content')
    <main>
        @include('partials.hero')
        @include('partials.shop_library')
    </main>
@endsection
