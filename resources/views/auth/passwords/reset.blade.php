@extends('layouts.app')

@section('content')
        <div class="login-form">
            <h2 class="text-center">{{ __('Сбросить пароль') }}</h2>

            <form method="POST" action="{{ route('password.request') }}">
                @csrf

                <input type="hidden" name="token" value="{{ $token }}">

                <div class="form-group">
                    <input id="email" type="email" placeholder="{{ __('E-Mail Address') }}" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ $email ?? old('email') }}" required autofocus>

                    @if ($errors->has('email'))
                    <span class="invalid-feedback">
                        <strong>{{ $errors->first('email') }}</strong>
                    </span>
                    @endif
                </div>
        </div>

        <div class="form-group">
            <div class="form-group">
                <input id="password" type="password" placeholder="{{ __('Password') }}" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

                @if ($errors->has('password'))
                <span class="invalid-feedback">
                    <strong>{{ $errors->first('password') }}</strong>
                </span>
                @endif
            </div>
        </div>

        <div class="form-group">
            <div class="form-group">
                <input id="password-confirm" type="password" placeholder="{{ __('Confirm Password') }}" class="form-control" name="password_confirmation" required>
            </div>
        </div>

        <div class="form-group">
            <button type="submit" class="btn btn-primary btn-block">
                {{ __('Сбросить пароль') }}
            </button>
        </div>
</form>
@endsection