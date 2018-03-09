@extends('layouts.master')

@section('content')
    <h1>Inserate</h1>
    <br>
    <form method="POST" action="/advertisements/search">
        @csrf
        <div class="input-group">
            <div class="input-group-prepend">
                <span class="input-group-text" id="">Bezeichnung und Status</span>
            </div>
            <input type="text" class="form-control" name="description">
            <select class="form-control" name="status">
                <option value="all">all</option>
                <option value="new">new</option>
                <option value="closed">closed</option>
            </select>
            <div class="input-group-append">
                <button class="btn btn-primary btn-outline-secondary" type="submit">Suche</button>
                <a class="btn btn-primary btn-outline-secondary" type="button" href="/advertisements">Abbrechen</a>
            </div>
        </div>
    </form>
    <br>
    <table class="table">
        <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Bezeichnung</th>
            <th scope="col">Menge (kg)</th>
            <th scope="col">Qualität</th>
            <th scope="col">Lieferdatum</th>
            <th scope="col">Anzahl Angebote</th>
            <th scope="col">Status</th>
            <th scope="col">Funktionen</th>
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
                <td>tbd</td>
                <td>{{$ad->status}}</td>
                <td>
                    <a href="/advertisements/{{$ad->id}}">Details</a>
                    <a href="/advertisements/{{$ad->id}}/edit">Bearbeiten</a>
                    <a href="/advertisements/{{$ad->id}}/delete"
                       onclick="return confirm('Inserat löschen?')">Löschen</a>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
@endsection