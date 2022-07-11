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
        <div class="comic-info__bottom ">
            <div class=" boh container-lg">
                <div class="talent">
                    <h3>Talent</h3>
                    <ul>
                        <li>
                            <span>Art by:</span>
                            <p>
                                @foreach ($prodotto['artists'] as $artist)
                                    {{ $artist }},
                                @endforeach
                            </p>
                        </li>
                        <li>
                            <span>Written by:</span>
                            <p>
                                @foreach ($prodotto['writers'] as $writer)
                                    {{ $writer }},
                                @endforeach
                            </p>
                        </li>
                    </ul>
                </div>
                <div class="specs">
                    <h3>Specs</h3>
                    <ul>
                        <li>
                            <span>Art by:</span>
                            <span>{{ $prodotto['series'] }}</span>
                        </li>
                        <li>
                            <span>U.S. Price:</span>
                            <span>{{ $prodotto['price'] }}</span>
                        </li>
                        <li>
                            <span>On Sale Date:</span>
                            <span>{{ $prodotto['sale_date'] }}</span>
                        </li>
                    </ul>
                </div>
            </div>
            <div>

            </div>
        </div>
    </div>
@endsection
