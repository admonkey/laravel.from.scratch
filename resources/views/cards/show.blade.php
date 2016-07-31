@extends('layout')

@section('content')
  <h1>{{ $card->title }}</h1>

  <ul class="list-group">
    @foreach ($card->notes as $note)
      <li class="list-group-item">{{ $note->body }}</li>
    @endforeach
  </ul>

@stop