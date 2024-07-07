@extends('registration')
@section('contenu')
<form method="POST" action="{{ route('register') }}">
    @csrf

    <div class="row mb-3">
        <label for="full_name" class="col-md-4 col-form-label text-md-end">{{ __('Nom et Prénom') }}</label>
        <div class="col-md-6">
            <input id="full_name" type="text" class="form-control @error('full_name') is-invalid @enderror" name="full_name" value="{{ old('full_name') }}" required autocomplete="full_name" autofocus>
            @error('full_name')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
    </div>

    <div class="row mb-3">
        <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Votre Email') }}</label>
        <div class="col-md-6">
            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">
            @error('email')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
    </div>

    <div class="row mb-3">
        <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Mot de passe') }}</label>
        <div class="col-md-6">
            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
            @error('password')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
    </div>

    <div class="row mb-3">
        <label for="password-confirm" class="col-md-4 col-form-label text-md-end">{{ __('Confirmer mot de passe') }}</label>
        <div class="col-md-6">
            <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
        </div>
    </div>

    <div class="row mb-3">
        <label class="col-md-4 col-form-label text-md-end">{{ __('Rôle') }}</label>
        <div class="col-md-6">
            <div class="form-check">
                <input type="radio" id="veterinarian" name="role" value="veterinarian" class="form-check-input">
                <label for="veterinarian" class="form-check-label">{{ __('Vétérinaire') }}</label>
            </div>
            <div class="form-check">
                <input type="radio" id="pet_owner" name="role" value="pet_owner" class="form-check-input">
                <label for="pet_owner" class="form-check-label">{{ __('Propriétaire d\'animal') }}</label>
            </div>
        </div>
    </div>

    <div class="row mb-3 specialty-field" style="display:none;">
        <label for="specialty" class="col-md-4 col-form-label text-md-end">{{ __('Spécialité') }}</label>
        <div class="col-md-6">
            <input id="specialty" type="text" class="form-control @error('specialty') is-invalid @enderror" name="specialty" value="{{ old('specialty') }}" autocomplete="specialty">
            @error('specialty')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
        <div class="row mb-3 vet-license-field" style="display:none;">
        <label for="vet_license" class="col-md-4 col-form-label text-md-end">{{ __('Numéro de Licence') }}</label>
        <div class="col-md-6">
            <input id="vet_license" type="text" class="form-control @error('vet_license') is-invalid @enderror" name="vet_license" value="{{ old('vet_license') }}" autocomplete="vet_license">
            @error('vet_license')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
</div>
    </div>

    


        <div class="row mb-0">
            <div class="col-md-6 offset-md-4">
                <button type="submit" class="btn btn-primary">
                    {{ __('Enregistrer') }}
                </button>
            </div>
        </div>
    </form>

    <script>
    // Show/hide specialty and vet license fields based on radio button selection
    document.querySelectorAll('input[type=radio][name=role]').forEach(function(radio) {
        radio.addEventListener('change', function() {
            if (this.value === 'veterinarian') {
                document.querySelector('.specialty-field').style.display = 'block';
                document.querySelector('.vet-license-field').style.display = 'block';
                
            } else if (this.value === 'pet_owner') {
                document.querySelector('.specialty-field').style.display = 'none';
                document.querySelector('.vet-license-field').style.display = 'none';
                
            }
        });
    });
</script>
@endsection




