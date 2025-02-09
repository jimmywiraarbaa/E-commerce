@extends('layouts.auth')

@section('title')
    Ndawin Store - Login
@endsection

@section('content')
    <div class="page-content page-auth">
        <section class="section-store-auth">
            <div class="container">
                <div class="row align-content-center row-login">
                    <div class="col-lg-6 text-center" data-aos="fade-right">
                        <img
                        src="/images/loginpage.png"
                        class="w-50 mb-4 mb-lg-none"
                        alt="Login Image"
                        />
                    </div>
                    <div class="col-lg-5" data-aos="fade-left">
                        <h2>
                            Silahkan login dahulu ya buk,<br> happy shopping!!!
                        </h2>
                        <form method="POST" class="mt-3" action="{{ route('login') }}">
                            @csrf
                            
                            <div class="form-group">
                                <label for="email">Alamat Email</label>
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                        @error('email')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                            </div>
                            <div class="form-group">
                                <label for="password">Kata Sandi</label>
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                        @error('password')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                            </div>

                            <div class="row">
                                <div class="col-lg-5">
                                    <div class="form-check form-group">
                                        <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
            
                                        <label class="form-check-label" for="remember">
                                            {{ __('Ingatkan saya') }}
                                        </label>
                                    </div>
                                </div>
        
                                <div class="col-lg-7 text-right">
                                    @if (Route::has('password.request'))
                                        <a class="reset-password" href="{{ route('password.request') }}">
                                            {{ __('Lupa Kata Sandi?') }}
                                        </a>
                                    @endif
                                </div>
                            </div>
                            



                            <button
                                type="submit"
                                class="btn btn-success btn-block px-4 mt-4" style="background-color:rgb(235, 226, 50); border: none; "
                            >
                                Masuk
                            </button>
                            <br>
                            <span>
                                Belum Punya Akun?<a href="{{ route('register') }}" class="px-1 mt-2"
                                >Daftar</a>
                            </span>
                        </form>
                    </div>
                </div>
            </div>
        </section>
    </div>


@endsection


@push('prepend-script')
<div class="animation-login">
    <div class="wrapper">
        <div><span class="dot"></span></div>
        <div><span class="dot"></span></div>
        <div><span class="dot"></span></div>
        <div><span class="dot"></span></div>
        <div><span class="dot"></span></div>
        <div><span class="dot"></span></div>
        <div><span class="dot"></span></div>
        <div><span class="dot"></span></div>
        <div><span class="dot"></span></div>
        <div><span class="dot"></span></div>
        <div><span class="dot"></span></div>
        <div><span class="dot"></span></div>
        <div><span class="dot"></span></div>
        <div><span class="dot"></span></div>
        <div><span class="dot"></span></div>
      </div>
</div>
@endpush