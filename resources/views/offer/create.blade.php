@extends('layouts.master')

@section('content')
    @if(Request::is("*/edit"))
        <h1>Angebot editieren</h1>
    @else
        <h1>Angebot erstellen</h1>
    @endif

    <form method="POST"
          action="{{(Request::is("*/edit") ? "/advertisements/$ad->id/offer/$offer->id/edit":"/advertisements/$ad->id/offer/create")}}">
        @csrf
        <div class="form-group">
            <label for="price">Preis</label>
            <input type="number" step="0.01" class="form-control" id="price" name="price" value="{{$offer->price}}">
        </div>
        <button type="submit" class="btn btn-primary">Speichern</button>
    </form>
@endsection