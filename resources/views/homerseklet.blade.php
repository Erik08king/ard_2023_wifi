@extends('layouts.master')
@section('title','Hőméséklet')
@section('content')
    
    <h1>Hőmésékletek</h1>

    <div class="table-responsive">
        <table class="table table-primary table-striped table-hover">
            <tr>
                <th>Azonosító</th>
                <th>Hőméséklet</th>
                <th>Páratartalom</th>
                <th>Mérési idő</th>
            </tr>

                @foreach ($homersekletek as $hom)
                    <tr>
                        <td>{{$hom->h_id}}</td>
                        <td>{{$hom->hofok}}&deg;c</td>
                        <td>{{$hom->paratartalom}}%</td>
                        <td>{{$hom->meres_ideje}}</td>
                    </tr>
                @endforeach
        </table>
        {{$homersekletek->links()}}
    </div>


@endsection