@extends('layouts.app')

@section('content')

<div class="content-action-comics">
    <div class="bluebar"></div>
    <div class="container">
        <div class="comic-selected">
            <img class="resizeComic" src="{{$comics[0]['thumb']}}" alt="">
        </div>
        <div class="row">
            <div class="texts">
                <h2>{{$comics[0]['title']}}</h2>
                <div class="price-quantity"></div>
                <p>{{$comics[0]['description']}}</p>
            </div>
            <div class="adv">
                <h4>ADVERTISEMENT</h4>
                <img src="{{Vite::asset('resources/images/adv.jpg')}}" alt="">
            </div>
        </div>
    </div>
</div>
<div class="content-action-comics-info">
    <div class="container">
        <div class="row">
            <div class="talent">
                <h2>Talent</h2>
                <table>
                    <tr>
                        <th>Art by:</th>
                        <td>Marco Rossi, Gino Giallo, Paolo Viola</td>
                    </tr>
                    <tr>
                        <th>Written by:</th>
                        <td>Chicco Verde, Simone Arancione, Rosa Rossa</td>
                    </tr>
                </table>
            </div>
            <div class="specs">
                <h2>Specs</h2>
                <table>
                    <tr>
                        <th>Series:</th>
                        <td>{{$comics[0]['series']}}</td>
                    </tr>
                    <tr>
                        <th>U.S. Price:</th>
                        <td>{{$comics[0]['price']}}</td>
                    </tr>
                    <tr>
                        <th>On Sale Date</th>
                        <td>{{$comics[0]['sale_date']}}</td>
                    </tr>
                </table>
            </div>
        </div>
    </div>
    
    
</div>

@endsection