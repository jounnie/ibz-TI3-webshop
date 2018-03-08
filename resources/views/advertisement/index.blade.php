@extends('layouts.master')

@section('content')
    Inserat

    <table class="table">
        <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Bezeichnung</th>
            <th scope="col">Menge (kg)</th>
            <th scope="col">Qualität</th>
            <th scope="col">Lieferdatum</th>
        </tr>
        </thead>
        <tbody>
        @foreach($ads as $ad)
            <tr>
                <th scope="row">{{$ad->id}}</th>
                <td>{{$ad->description}}</td>
                <td>{{$ad->amount}}</td>
                <td>{{$ad->quality}}</td>
                <td>{{$ad->deliveryDate}}</td>
            </tr>
        @endforeach
        </tbody>
    </table>
@endsection