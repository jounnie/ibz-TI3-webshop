@extends('layouts.focused')

@section('content')
    <form method="POST" action="/login" class="form-signin">
        @csrf
        {{--<img class="mb-4" src="https://getbootstrap.com/assets/brand/bootstrap-solid.svg" alt="" width="72" height="72">--}}

        <h1 class="h3 mb-3 font-weight-normal">Login</h1>

        {{--<label for="inputEmail" class="sr-only">Email address</label>--}}
        <label for="userDropdown">Benutzer auswählen</label>
        <select class="form-control" id="userDropdown" name="nickname" required autofocus>
            @foreach($users as $user)
                <option value="{{ $user->nickname }}">{{ $user->nickname }} ({{ $user->type }})</option>
            @endforeach
        </select>

        <button class="btn btn-lg btn-primary btn-block" type="submit">Lass knacken!!</button>
        <p class="mt-5 mb-3 text-muted">Sven Köppel / Jonathan Ruiz &copy; 2018</p>
    </form>
@endsection