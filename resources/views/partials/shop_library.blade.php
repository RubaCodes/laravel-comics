
<div class="shop-library">
  <div class="container-lg">
    <h2>current series</h2>  
    <ul>
        @foreach ($comics as $comic)
        <li>
            @include('partials.card_product')
            @section('thumbnail')
            {{$comic['thumb']}}
            @endsection
            @section('titolo_comic')
                {{$comic["title"]}}
            @endsection
        </li>      
        @endforeach

    </ul>

    <a href="#">load more</a>
  </div>
</div>





