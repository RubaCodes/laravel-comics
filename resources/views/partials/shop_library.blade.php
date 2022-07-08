<div class="shop-library">
    <div class="container-lg">
        <h2>current series</h2>
        <ul>

            @foreach ($comics as $comic)
                <li>
                    <a>
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
