@extends('layouts.app')
@section('content')
<section class="hero is-medium is-link has-text-centered">
  <div class="hero-body">
    <p class="title">
      Welcome Aboard!
    </p>
    <p class="subtitle">
      Simply enter your details below to get started...
    </p>
  </div>
</section>

<section class="section">
    <div class="container">
        @include('layouts.partials.messages')
        <form action="{{ route('auth.signup') }}" method="POST">
            @csrf
            <div class="field">
                <label class="label" for="name">Name</label>
                <div class="control">
                    <input class="input{{ $errors->has('name') ? ' is-danger' : '' }}" type="text" name="name" id="name" placeholder="Your full name" value="{{ old('name') }}">
                    @if ($errors->has('name'))
                        <p class="help is-danger">{{ $errors->first('name') }}</p>
                    @endif
                </div>
            </div>

            <div class="field">
                <label class="label" for="email">Email</label>
                <div class="control">
                    <input class="input{{ $errors->has('email') ? ' is-danger' : '' }}" type="email" name="email" id="email" placeholder="Your email address" value="{{ old('email') }}">
                    @if ($errors->has('email'))
                        <p class="help is-danger">{{ $errors->first('email') }}</p>
                    @endif
                </div>
            </div>

            <div class="field">
                <label class="label" for="password">Password</label>
                <div class="control">
                    <input class="input{{ $errors->has('password') ? ' is-danger' : '' }}" type="password" name="password" id="password" placeholder="Enter a strong one!">
                    @if ($errors->has('password'))
                        <p class="help is-danger">{{ $errors->first('password') }}</p>
                    @endif
                </div>
            </div>

            <div class="field">
                <div class="control">
                    <button class="button is-link">Sign up</button>
                </div>
            </div>
            <p><a href="{{ route('auth.signin') }}">Already have an account?</a></p>
        </form>

    </div>
</section>
@endsection