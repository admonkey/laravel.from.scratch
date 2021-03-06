@extends('layouts.app')

@section('header')
  <meta name="csrf-token" content="{{ csrf_token() }}" />
@stop

@section('content')

  <div class="row">
    <div class="col-md-6 col-md-offset-3">

      <h1>{{ $card->title }}</h1>

      <ul class="list-group list-card-notes">
        @foreach ($card->notes as $note)
          <li class="list-group-item">

            {{ $note->body }}

            <a href="/notes/{{ $note->id }}/edit"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a>

            <hr/>
            <a href="#">{{ $note->user->name }}</a>

          </li>
        @endforeach
      </ul>

      <h3>Add a New Note</h3>

      <form method="POST" action="/cards/{{ $card->id }}/notes">

        {{ csrf_field() }}

        <div class="form-group">
          <textarea name="body" class="form-control" required>{{ old('body') }}</textarea>
        </div>

        <div class="form-group">
          <button type="submit" class="btn btn-primary">Add Note</button>
        </div>
      </form>

      @if (count($errors))
        <ul>
          @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
          @endforeach
        </ul>
      @endif

    </div>
  </div>

@stop