@extends('default_template')
@section('page-title')
    Prodotto
@endsection
@section('main-content')
    @include('partials.hero')
    <div class="hero-product">
        <div class="comic-info__top container-lg">
            <div>
                <h2>{{ $prodotto['title'] }}</h2>
                <div class="price">
                    <div class="price__left">
                        U.S. Price: <span>{{ $prodotto['price'] }}</span>
                    </div>
                    <div class="price__right">
                        <select>
                            <option selected disabled> check availability</option>
                        </select>
                    </div>
                </div>
                <p class="comic-description">
                    {{ $prodotto['description'] }}
                </p>
            </div>
            <div>
                <img src="{{ asset('/images/adv.jpg') }}" alt="adv">
            </div>
        </div>
        <div class="comic-info__bottom container-lg">

        </div>
    </div>
@endsection
