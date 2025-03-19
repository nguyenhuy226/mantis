@extends('authLayout')

@section('content')
    <div class="auth-main">
        <div class="auth-wrapper v3">
            <div class="auth-form">
                <div class="auth-header">
                    <a href="{{route('home')}}"><img src="{{ asset('/images/logo-dark.svg') }}" alt="img"></a>
                </div>
                <div class="card my-5">
                    <div class="card-body">
                        <form action="{{ route('registerpost') }}" method="POST">
                            @csrf
                            <div class="d-flex justify-content-between align-items-end mb-4">
                                <h3 class="mb-0"><b>Sign up</b></h3>
                                <a href="{{ route('login') }}" class="link-primary">Already have an account?</a>
                            </div>
                            <div class="form-group mb-3">
                                <label class="form-label">Name*</label>
                                <input type="text" class="form-control {{ $errors->has('name') ? 'is-invalid' : '' }}"
                                    placeholder="Name" name="name">
                                @error('name')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="form-group mb-3">
                                <label class="form-label">Phone</label>
                                <input type="text" class="form-control {{ $errors->has('phone') ? 'is-invalid' : '' }}"
                                    placeholder="Phone" name="phone">
                                @error('name')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="form-group mb-3">
                                <label class="form-label">Email Address*</label>
                                <input type="email" class="form-control {{ $errors->has('email') ? 'is-invalid' : '' }}"
                                    placeholder="Email" name="email">
                                @error('name')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="form-group mb-3">
                                <label class="form-label">Password</label>
                                <input type="password"
                                    class="form-control {{ $errors->has('password') ? 'is-invalid' : '' }}"
                                    placeholder="Password" name="password">
                                @error('name')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <p class="mt-4 text-sm text-muted">By Signing up, you agree to our <a href="#"
                                    class="text-primary"> Terms of Service </a> and <a href="#" class="text-primary">
                                    Privacy Policy</a></p>
                            <div class="d-grid mt-3">
                                <button type="submit" class="btn btn-primary">Create Account</button>
                            </div>
                            <div class="saprator mt-3">
                                <span>Sign up with</span>
                            </div>
                            <div class="row">
                                <div class="col-4">
                                    <div class="d-grid">
                                        <button type="button" class="btn mt-2 btn-light-primary bg-light text-muted">
                                            <img src="{{ asset('/images/authentication/google.svg') }}" alt="img">
                                            <span class="d-none d-sm-inline-block"> Google</span>
                                        </button>
                                    </div>
                                </div>
                                <div class="col-4">
                                    <div class="d-grid">
                                        <button type="button" class="btn mt-2 btn-light-primary bg-light text-muted">
                                            <img src="{{ asset('/images/authentication/twitter.svg') }}" alt="img">
                                            <span class="d-none d-sm-inline-block"> Twitter</span>
                                        </button>
                                    </div>
                                </div>
                                <div class="col-4">
                                    <div class="d-grid">
                                        <button type="button" class="btn mt-2 btn-light-primary bg-light text-muted">
                                            <img src="{{ asset('/images/authentication/facebook.svg') }}" alt="img">
                                            <span class="d-none d-sm-inline-block"> Facebook</span>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="auth-footer row">
                    <!-- <div class=""> -->
                    <div class="col my-1">
                        <p class="m-0">Copyright © <a href="#">Codedthemes</a></p>
                    </div>
                    <div class="col-auto my-1">
                        <ul class="list-inline footer-link mb-0">
                            <li class="list-inline-item"><a href="#">Home</a></li>
                            <li class="list-inline-item"><a href="#">Privacy Policy</a></li>
                            <li class="list-inline-item"><a href="#">Contact us</a></li>
                        </ul>
                    </div>
                    <!-- </div> -->
                </div>
            </div>
        </div>
    </div>
@endsection
