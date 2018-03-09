@extends('layouts.master')

@section('content')
    @php
        $user = session('loggedInUser')
    @endphp
    <h1>Inserat</h1>
    <br>
    <table class="table">
        <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Bezeichnung</th>
            <th scope="col">Menge (kg)</th>
            <th scope="col">Qualität</th>
            <th scope="col">Lieferdatum</th>
            <th scope="col">Status</th>
            <th scope="col">Funktionen</th>
        </tr>
        </thead>
        <tbody>
        <tr>
            <th scope="row">{{$ad->id}}</th>
            <td>{{$ad->description}}</td>
            <td>{{$ad->amount}}</td>
            <td>{{$ad->quality}}</td>
            <td>{{$ad->deliveryDate}}</td>
            <td>{{$ad->status}}</td>
            <td>
                @if('vendor' === $user->type && $ad->status !== 'closed')
                    <a href="/advertisements/{{$ad->id}}/offer/create">Angebot erstellen</a>
                @endif
            </td>
        </tr>
        </tbody>
    </table>

    <h1>Angebote</h1>
    <br>
    <table class="table">
        <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Preis</th>
            <th scope="col">Anbieter</th>
            <th scope="col">Funktionen</th>
        </tr>
        </thead>
        <tbody>
        @foreach($offers as $offer)
            <tr>
                <th scope="row">{{$offer->id}}</th>
                <td>{{$offer->price}}</td>
                <td>{{$offer->user->nickname}}</td>
                <td>
                    @if($ad->user_id === $user->id && $ad->status !== 'closed')
                        <a href="/advertisements/{{$ad->id}}/offer/{{$offer->id}}/select">Auswählen</a>
                    @endif
                    @if($offer->user_id === $user->id && $ad->status !== 'closed')
                        <a href="/advertisements/{{$ad->id}}/offer/{{$offer->id}}/edit">Bearbeiten</a>
                        <a href="/advertisements/{{$ad->id}}/offer/{{$offer->id}}/delete"
                           onclick="return confirm('Angebot löschen?')">Löschen</a>
                    @endif
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>

    @if($ad->status == 'closed')
        <h1>Bestellung</h1>
        <br>
        <table class="table">
            <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Bestelldatum</th>
                <th scope="col">Angebot</th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <th scope="row">{{$order->id}}</th>
                <td>{{$order->orderDate}}</td>
                <td>{{$selectedOfferId}}</td>
            </tr>
            </tbody>
        </table>
    @endif
@endsection