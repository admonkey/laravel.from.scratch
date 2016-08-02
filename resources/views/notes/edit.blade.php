@extends('layouts.app')

@section('nav-item')
  <li><a href="/cards/{{ $note->card_id }}">Notes</a></li>
@stop

@section('content')

  <div class="row">
    <div class="col-md-6 col-md-offset-3">

      <h1>Edit Note {{ $note->id }}</h1>

      <form method="POST" action="/notes/{{ $note->id }}">

        {{ method_field('PATCH') }}

        {{ csrf_field() }}

        <div class="form-group">
          <textarea name="body" class="form-control" required>{{ $note->body }}</textarea>
        </div>

        <div class="form-group">
          <button type="submit" class="btn btn-primary">Update Note</button>
          <a href="/cards/{{ $note->card_id }}" class="btn btn-danger">Cancel</a>
        </div>
      </form>

    </div>
  </div>

@stop