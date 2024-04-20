@extends('layouts.app')

@section('content')

<section id="comics">
    <div class="content">
        <div class="container">
            <h3>Current Series</h3>
            <div class="row">
            @foreach($comics as $comic)
            <?php $index = array_search($comic, $comics); ?>
            <!--Uso il metodo get nella stringa dell'url per poter poi passare l'indice della carta cliccata pagina single_product del fumetto selezionato -->
                <a href="{{route('single_product')}}?index={{$index}}" class="comicCard">
                    <div class="maskComic">
                        <img class="resizeComic" src="{{$comic['thumb']}}" alt="">
                    </div>
                    <h4>{{$comic['title']}}</h4>
                </a>
            @endforeach
            </div>
            <div class="loadMore">
                <button>LOAD MORE</button>
            </div>
        </div>
    </div>
    <div class="comicsLocations">
        <div class="container">
            <div class="row">
                <div class="singleIcon">
                    <img class="resizeIcon" src="{{Vite::asset('resources/images/buy-comics-digital-comics.png')}}" alt="">
                    <span>DIGITAL COMICS</span>
                </div>
                <div class="singleIcon">
                    <img class="resizeIcon" src="{{Vite::asset('resources/images/buy-comics-merchandise.png')}}" alt="">
                    <span>DC MERCHANDISE</span>
                </div>
                <div class="singleIcon">
                    <img class="resizeIcon" src="{{Vite::asset('resources/images/buy-comics-subscriptions.png')}}" alt="">
                    <span>SUBSCRIPTION</span>
                </div>
                <div class="singleIcon">
                    <img class="resizeIcon" src="{{Vite::asset('resources/images/buy-comics-shop-locator.png')}}" alt="">
                    <span>COMIC SHOP LOCATOR</span>
                </div>
                <div class="singleIcon">
                    <img class="resizeIcon" src="{{Vite::asset('resources/images/buy-dc-power-visa.svg')}}" alt="">
                    <span>DC POWER VISA</span>
                </div>
            </div>
        </div>
    </div>
    

</section>


@endsection