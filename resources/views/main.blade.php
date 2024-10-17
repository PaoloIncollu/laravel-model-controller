@extends('layouts.app')

@section('page-title', 'Home')

@section('main-content')

    <div class="container mt-5">



        <ul class="row">

            @foreach ($movies as $item )

                <div class="col-4 mb-4">
                    <div class="card">
                        <div class="card-body">
                          <h2 class="card-title">Titolo: {{ $item['title'] }}</h5>
                          <h4 class="card-subtitle mb-2 text-body-secondary">Titolo originale: {{ $item['original_title'] }}</h6>
                          <h6 class="card-text">Nazionalità: {{ $item['nationality'] }}</h6>
                          <h6 class="card-text"> Data uscita: {{ $item['date'] }}</h6>
                          <h6 class="card-text">Voto: {{ $item['vote'] }}</h6>

                        </div>
                      </div>
                </div>



            @endforeach
        </ul>

    </div>
@endsection
