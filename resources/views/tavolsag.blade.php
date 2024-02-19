@extends('layouts.master')
@section('title','Távolság')
@section('content')

<h1>Távolság</h1>

<div class="table-responsive">
    <table class="table table-primary table-striped table-hover">
        <tr>
            <th>Azonosító</th>
            <th>Levegő minőség</th>
            <th>Mérési idő</th>
        </tr>

            @foreach ($tavolsag as $tav)
                <tr>
                    <td>{{$tav->t_id}}</td>
                    <td>{{$tav->tav}} cm</td>
                    <td>{{$tav->meres_ideje}}</td>
                </tr>
            @endforeach
    </table>
    {{$tavolsag->links()}}
</div>

@endsection 