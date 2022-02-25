@extends('layouts.app')
@section('content')
<section class="hero is-medium is-danger has-text-centered">
  <div class="hero-body">
    <p class="title">
      Welcome Back, {{ auth()->user()->name }}
    </p>
    <p class="subtitle">
      What magical ideas do you have for us today.. ?
    </p>
  </div>
</section>
<section class="section">
    <div class="container">
        @include('layouts.partials.messages')
        <p>Dashboard</p>
    </div>
</section>
@endsection