@extends('layouts.app')


@section('content')

<div class="content-action-comics">
    <div class="bluebar"></div>
    <div class="container">
        <div class="comic-selected">
            <img class="resizeComic" src="{{$comics[$_GET['index']]['thumb']}}" alt="">
        </div>
        <div class="row">
            <div class="texts">
                <h2>{{$comics[$_GET['index']]['title']}}</h2>
                <div class="price-quantity">
                    <div class="price">
                        <strong>U.S. Price <span class="white">{{$comics[$_GET['index']]['price']}}</span></strong>
                        <span class="available">AVAILABLE</span>
                    </div>
                    <select class="quantity" name="quantity" id="">
                        <option value="">Check Availability</option>
                        <option value="">1</option>
                        <option value="">2</option>
                        <option value="">3+</option>
                    </select>
                </div>
                <p>{{$comics[$_GET['index']]['description']}}</p>
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
                        <td>{{$comics[$_GET['index']]['series']}}</td>
                    </tr>
                    <tr>
                        <th>U.S. Price:</th>
                        <td>{{$comics[$_GET['index']]['price']}}</td>
                    </tr>
                    <tr>
                        <th>On Sale Date</th>
                        <td>{{$comics[$_GET['index']]['sale_date']}}</td>
                    </tr>
                </table>
            </div>
        </div>
    </div>
</div>

@endsection