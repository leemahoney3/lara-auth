@extends('layouts.app')
@section('content')
<section class="hero is-medium is-primary has-text-centered">
  <div class="hero-body">
    <p class="title">
      Welcome to Lara Auth
    </p>
    <p class="subtitle">
      The lightweight Laravel authentication solution!
    </p>
  </div>
</section>
<section class="section has-text-centered">
    <div class="container">
        @include('layouts.partials.messages')
        <h1 class="title">
            Ready to get started?
        </h1>
        <br />
        <p class="subtitle">
            You can edit the contents of this page in the <code>views/home.blade.php</code> file.
        </p>
    </div>
</section>
@endsection