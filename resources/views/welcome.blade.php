@extends('layouts.app')

@section('content')
            
        <div class="login">
            
            <h1>Login</h1>

            <form method="POST" action="{{ route('login') }}">
            @csrf
                <div>
                    <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required autofocus>

                        @if ($errors->has('email'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('email') }}</strong>
                            </span>
                        @endif
                </div>

                <div>
                <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

                    @if ($errors->has('password'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('password') }}</strong>
                        </span>
                    @endif
                </div>

                <button class="btn btn-primary btn-block btn-large" type="submit" class="btn btn-primary">
                    {{ __('Login') }}
                </button>
            </form>
        </div>

        <a href="{{route('register')}}">{{ __('Register') }}</a>
@endsection
