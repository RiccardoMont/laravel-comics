@extends('layouts.app')

@section('content') 

<section id="comics">
<div class="jumbotron"></div>
    <div class="container">
        <div class="row">
            <p>main</p>
            @foreach($comics as $comic)

            <h5>{{$comic['title']}}</h5>
            @endforeach
        </div>
    </div>
    
</section>


@endsection