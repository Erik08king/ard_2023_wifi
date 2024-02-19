@extends('layouts.master')
@section('title','Lég minőség')
@section('content')
    
<h1>Légminőség</h1>

    <div class="table-responsive">
        <table class="table table-primary table-striped table-hover">
            <tr>
                <th>Azonosító</th>
                <th>Levegő minőség</th>
                <th>Mérési idő</th>
            </tr>

                @foreach ($legmenoseg as $leg)
                    <tr>
                        <td>{{$leg->l_id}}</td>
                        <td>{{$leg->levego}} g/kg</td>
                        <td>{{$leg->meres_ideje}}</td>
                    </tr>
                @endforeach
        </table>
        {{$legmenoseg->links()}}
    </div>

@endsection 