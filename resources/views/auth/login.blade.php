@extends('login')

@section('content')

                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div  class="mb-sm-7 mb-4">
                            <label for="email" class="form-label">{{ __('Adresse Email') }}</label>

                            <div class="mb-sm-7 mb-4">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="mb-sm-7 mb-4">
                            <label for="password" class="form-label">{{ __('Mot de passe') }}</label>
                            @if (Route::has('password.request'))
                                    <a class="link-info fs-6 text-decoration-none" href="{{ route('password.request') }}">
                                        {{ __('Mot de passe oublié?') }}
                                    </a>
                                @endif
                            <div class="mb-sm-7 mb-4">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
    

                        <div class="row mb-3">
                            <div class="mb-sm-7 mb-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Souviens-toi de moi') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="row mb-0">
                            <div class="d-grid mb-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Login') }}
                                </button>
                      <div class="row justify-content-between mt-5">
                        <div class="col-6">
                            <button type="button" class="btn  w-100 doctor-login" style='background-color:#FFCBCB; color:#121481' tabindex="4">Vétérinaire</button>
                        </div>
                            <div class="col-6">
                                <button type="button" class="btn  w-100 patient-login" style='background-color:#FFCBCB; color:#121481' tabindex="4">Utilisateur</button>
                            </div>
                        </div>
                     </div>
                     <div class="d-flex align-items-center mb-10 mt-4">
                     <span class="text-gray-700 me-2">Nouveau ici?</span>
                     <a href="register" class="link-info fs-6 text-decoration-none">
                        Créer un nouveau compte
                     </a>
                     </div>

                              
                        </div>
                    </form>
                
@endsection
