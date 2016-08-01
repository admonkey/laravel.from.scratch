@extends('layout')

@section('content')

    <h1>Welcome Page</h1>

    <p class="lead">
      <a target="_blank" href="https://laracasts.com/series/laravel-5-from-scratch/">
        Original Tutorial https://laracasts.com/series/laravel-5-from-scratch/
      </a>
    </p>

    @if (empty($people))
      There are no people.
    @else
      Something else here.
    @endif

    @unless (empty($people))
      There are some people.
    @endunless

    @foreach ($people as $person)
      <li>{{ $person }}</li>
    @endforeach

@stop
