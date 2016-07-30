@extends('layout')

@section('content')

    <h1>Welcome Page</h1>

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
