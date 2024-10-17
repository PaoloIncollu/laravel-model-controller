@extends('layouts.app')

@section('page-title', 'Home')

@section('main-content')

    <div>



        <ul>

            @foreach ($movies as $item )
                <li>

                    {{ $item['title'] }}
                </li>


            @endforeach
        </ul>

    </div>
@endsection
