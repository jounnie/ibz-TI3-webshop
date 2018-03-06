@extends('layout')

@section('content')
    <form>
        <div class="form-group">
            <label for="userDropdown">Select User</label>
            <select class="form-control" id="userDropdown">
                @foreach($users as $user)
                    <option>{{ $user->nickname }} ({{$user->type}})</option>
                @endforeach
            </select>
        </div>
        <button type="submit" class="btn btn-primary">Login</button>
    </form>
@endsection