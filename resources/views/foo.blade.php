@if (session()->has('bar'))
  <div class="alert alert-success">
    {{ session('bar') }}
    <a href="/foo">
      <i class="fa fa-times pull-right" aria-hidden="true"></i>
    </a>
  </div>
@endif
