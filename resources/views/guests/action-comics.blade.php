@extends('layouts.app')

@section('content')

<div class="content-action-comics">
    <div class="bluebar"></div>
    <div class="container">
        <div class="comic-selected">
            <img class="resizeComic" src="{{$comics[0]['thumb']}}" alt="">
        </div>

        <div class="row">

            <div class="comicCard">
                <div class="maskComic">
                    <img class="resizeComic" src="" alt="">
                </div>
                <h4>4</h4>
            </div>

        </div>
        <div class="loadMore">
            <button>LOAD MORE</button>
        </div>
    </div>

    @endsection