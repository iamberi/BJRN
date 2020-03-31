@extends('layouts.app')

@section('content')

<section class="module bg-dark-30" data-background="assets/images/section-4.jpg">
          <div class="container">
            <div class="row">
              <div class="col-sm-6 col-sm-offset-3">
                <h1 class="module-title font-alt mb-0">Register</h1>
              </div>
            </div>
          </div>
        </section>
        <section class="module">
          <div class="container">
          <div class="row justify-content-center">
            <div class="col-sm-5 col-sm-offset-3 mb-sm-40">
                <h4 class="font-alt">Register</h4>
                <hr class="divider-w mb-10">
                <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="form-group row">                    
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus  placeholder="Username">

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            
                        </div>

                        <div class="form-group row">                    
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email"placeholder="Email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            
                        </div>

                        <div class="form-group row">                  
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password"placeholder="Password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            
                        </div>

                        <div class="form-group row">                    
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password"placeholder="Re-enter Password">
                            
                        </div>

                        <div class="form-group row mb-0">
                            
                                <button type="submit" class="btn btn-block btn-round btn-b">
                                    {{ __('Register') }}
                                </button>
                           
                        </div>
                    </form>

</div>
</div>
</div>
</div>
</section>

@endsection
