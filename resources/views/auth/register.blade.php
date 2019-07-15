@extends('auth.index')

@section('auth')


    <section class="auth-card auth-register">
        <div class="auth-header">
            <div class="heading-container">
                <h2 class="auth-header-subheading"> {{ __('Bienvenue!') }} </h2>
                <h1 class="auth-header-heading"> {{ __('Créer un compte') }} </h1>
            </div>
            <a href="{{route('welcome')}}">
                <img src="/images/icons/escaip-logo.svg" alt="Escaip">
            </a>
        </div>
        <div class="auth-body">
            <form class="auth-form" method="POST" action="{{ route('register') }}">
                @csrf

                <div class="form-group">
                    <label for="email" class="form-label">{{ __('E-Mail Address') }}</label>

                    <div class="form-input-container">
                        <input id="email" type="email" class="form-input @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                        @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>

                <div class="form-group">
                    <label for="password" class="form-label">{{ __('Password') }}</label>

                    @if (Route::has('password.request'))
                        <a class="sub-text" href="{{ route('password.request') }}">
                            {{ __('Forgot Your Password?') }}
                        </a>
                    @endif

                    <div class="form-input-container">
                        <input id="password" type="password" class="form-input @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                        @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>

                <div class="form-group">
                    <label for="password-confirm" class="form-label">{{ __('Confirm Password') }}</label>
    
                    <div class="form-input-container">
                        <input id="password-confirm" type="password" class="form-input" name="password_confirmation" required autocomplete="new-password">
                    </div>
                </div>

                <div class="form-group">
                    <div class=" offset-md-4">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                            <label class="form-check-label" for="remember">
                                {{ __('Remember Me') }}
                            </label>
                        </div>
                    </div>
                </div>

                <div class="form-footer">
                    <a href="{{route('login')}}" class="site-link"> {{__('Se connecter')}} </a>
                    <button type="submit" class="site-btn-primary">
                        {{ __('Créer un compte') }}
                    </button>
                </div>
            </form>
        </div>
    </section>
@endsection
