@extends('layouts.app')

@section('content')

        <section class="module bg-dark-30" data-background="{{asset('assets/images/shop/Header-img-1.jpg')}}">
          <div class="container">
            <div class="row">
              <div class="col-sm-6 col-sm-offset-3">
                <h1 class="module-title font-alt mb-0">Login</h1>
              </div>
            </div>
          </div>
        </section>
        <section class="module">
          <div class="container">
            <div class="row justify-content-center">
            <div class="col-sm-5 col-sm-offset-3 mb-sm-40">
                <h4 class="font-alt">Login</h4>
                <hr class="divider-w mb-10">
                <form class="form" method="POST" action="{{ route('login') }}">
                        @csrf
                        <div class="form-group row">

                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus placeholder="Email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                           
                        </div>
                        <div class="form-group row">

                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" placeholder="Password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                          
                        </div>


                  <div class="form-group row">
                            
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            
                        </div>

                        <div class="form-group row mb-0">
                            
                                <button class="btn btn-round btn-b" type="submit">
                                    {{ __('Login') }}
                                </button>

                                @if (Route::has('password.request'))
                                    <div class="form-group" ><a href="{{ route('password.request') }}">
                                        {{ __('Forgot Password?') }}</a>
                                    </div>
                                @endif
                            
                        </div>
                </form>
              </div>
            </div>
          </div>
        </section>



@endsection
