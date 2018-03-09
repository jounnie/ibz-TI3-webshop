@extends('layouts.master')

@section('content')
    @if(Request::is("*/edit"))
        <h1>Inserat editieren</h1>
    @else
        <h1>Inserat erstellen</h1>
    @endif

    <form method="POST" action="{{(Request::is("*/edit") ? "/advertisements/$ad->id":"/advertisements")}}">
        @csrf
        <div class="form-group">
            <label for="description">Bezeichnung</label>
            <input type="text" class="form-control" id="description" placeholder="Super Skunk" name="description"
                   value="{{$ad->description}}">
        </div>
        <div class="form-group">
            <label for="amount">Menge (kg)</label>
            <input type="number" class="form-control" id="amount" placeholder="7" name="amount" value="{{$ad->amount}}">
        </div>
        <div class="form-group">
            <label for="quality">Qualität</label>
            <select class="form-control" id="quality" name="quality">
                @for ($i = 1; $i <= 10; $i++)
                    <option value="{{$i}}" {{($ad->quality == $i ? "selected":"")}}>{{$i}}</option>
                @endfor
            </select>
        </div>
        <div class="form-group">
            <label for="deliveryDate">Lieferdatum</label>
            <input type="date" class="form-control" id="deliveryDate" placeholder="" name="deliveryDate"
                   value="{{$ad->deliveryDate}}">
        </div>
        <button type="submit" class="btn btn-primary">Speichern</button>
    </form>
@endsection