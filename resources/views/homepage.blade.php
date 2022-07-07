@extends('default_template')
@section('page-title')
    Home DC Comics
@endsection
<main>
    @section('main-content')
        @include('partials.hero')
        @include('partials.shop_library')  
    @endsection
</main>
</html>