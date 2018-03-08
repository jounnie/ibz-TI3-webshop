@extends('layouts.master')

@section('content')
    <form method="POST" action="/advertisements">
        @csrf
        <div class="form-group">
            <label for="description">Bezeichnung</label>
            <input type="text" class="form-control" id="description" placeholder="Super Skunk" name="description">
        </div>
        <div class="form-group">
            <label for="amount">Menge (kg)</label>
            <input type="number" class="form-control" id="amount" placeholder="7" name="amount">
        </div>
        <div class="form-group">
            <label for="quality">Qualität</label>
            <select multiple class="form-control" id="quality" name="quality">
                <option>1</option>
                <option>2</option>
                <option>3</option>
                <option>4</option>
                <option>5</option>
                <option>6</option>
                <option>7</option>
                <option>8</option>
                <option>9</option>
                <option>10</option>
            </select>
        </div>
        <div class="form-group">
            <label for="deliveryDate">Lieferdatum</label>
            <input type="date" class="form-control" id="deliveryDate" placeholder="" name="deliveryDate">
        </div>
        <button type="submit" class="btn btn-primary">Erstellen</button>
    </form>
@endsection