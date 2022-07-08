<div class="shop-library">
    <div class="container-lg">
        <h2>current series</h2>
        <ul>

            @foreach ($comics as $index => $comic)
                <li>
                    <a href="{{ route('comic', ['id' => $index]) }}">
                        <div class="card">
                            <img src="{{ $comic['thumb'] }}" alt="{{ $comic['title'] }}" />
                            <h3> {{ $comic['title'] }} </h3>
                        </div>
                    </a>
                </li>
            @endforeach
        </ul>
        <a href="#">load more</a>
    </div>
</div>
