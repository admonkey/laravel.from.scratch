@extends('layout')

@section('content')

  <div class="row">
    <div class="col-md-6 col-md-offset-3">

      <h1>Edit Note {{ $note->id }}</h1>

      <form method="POST" action="">

        <input type="hidden" name="_token" value="{{ csrf_token() }}">

        <div class="form-group">
          <textarea name="body" class="form-control">{{ $note->body }}</textarea>
        </div>

        <div class="form-group">
          <button type="submit" class="btn btn-primary">Update Note</button>
        </div>
      </form>

    </div>
  </div>

@stop