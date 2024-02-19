@extends('layouts.master')
@section('title','Nyomogombos adatok észlelése')
@section('content')
    
    <div class="m-2">

        <h1>A nyomogombos rögzitett adatok.</h1>

        <table class="table table-primary table-bordered table-striped table-hover">
            <tr>
                <th>#id</th>
                <th>Típus</th>
                <th>Hőmérséklet</th>
                <th>Páratartalom</th>
                <th>Levegő minöség</th>
                <th>Rögzités ideje</th>
            </tr>
            <tr>
                @foreach ($nyomogombosok_hrd as $nyomo)
                    <tr>
                        <td>{{$nyomo->ny_id}}</td>
                        <td>{{$nyomo->tipus}}</td>
                        <td>{{$nyomo->homerseklet}}&deg;c</td>
                        <td>{{$nyomo->paratartalom}}%</td>
                        <td>{{$nyomo->legminoseg}} ppm</td>
                        <td>{{$nyomo->rogzetesideje}}</td>
                    </tr>
                @endforeach
        </table>
        {{$nyomogombosok_hrd->links()}}
    </div>



@endsection 