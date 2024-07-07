@extends('veto.nav-side')
@section('content')


<div class="content-body">
    <!-- row -->
    <div class="container-fluid">
        <div class="row page-titles mx-0">
            <div class="col-sm-6 p-md-0">
                <div class="welcome-text">
                    <h4>Ajouter un patient</h4>
                </div>
            </div>
            <div class="col-sm-6 p-md-0 justify-content-sm-end mt-2 mt-sm-0 d-flex">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="javascript:void(0)">Patient</a></li>
                    <li class="breadcrumb-item active"><a href="javascript:void(0)">Ajouter un patient</a></li>
                </ol>
            </div>
        </div>
        <div class="container">
    <div class="row justify-content-center">
       
        <div class="col-lg-6">
            <form id="add-patient-form" action="{{ route('patient.add') }}" method="POST">
                @csrf
                <!-- Hidden input for veterinarian's ID -->
                <input type="hidden" name="veterinarian_id" value="{{ Auth::user()->id }}">
                
                
                <div class="form-group">
                    <label for="user_email">Email du propriétaire:</label>
                    <input type="email" class="form-control" id="user_email" name="user_email" required>
                </div>
                
                <div class="form-group">
                    <label for="animal_id">Animal:</label>
                    <select class="form-control" name="animal_id" id="animal_id" multiple required>
                        @foreach($animals as $animal)
                            <option value="{{ $animal->id }}">{{ $animal->pet_name }} | {{ $animal->owner->full_name }}</option>
                        @endforeach
                    </select>
                </div>
                
                <button type="submit" class="btn btn-primary">Enregistrer</button>
                
                @if(session('success'))
    <div id="flash-message" class="alert alert-success mt-3">
        {{ session('success') }}
    </div> @endif

       <!-- Error messages -->
                @if ($errors->any())
                    <div class="alert alert-danger mt-3" id="flash-message">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                <script>
    // Fonction pour fermer automatiquement le message flash après quelques secondes
    setTimeout(function() {
        var flashMessage = document.getElementById('flash-message');
        if (flashMessage) {
            flashMessage.remove();
        }
    }, 5000); // Le message flash disparaîtra après 5 secondes (5000 millisecondes)
</script>
            </form>
        </div>
    </div>
</div>

<!--**********************************
Content body end
***********************************-->


<script>
    $(document).ready(function() {
        $('#add-patient-form').submit(function(event) {
            event.preventDefault(); // Prevent the default form submission

            var formData = $(this).serialize(); // Serialize form data

            // Send AJAX request
            $.ajax({
                url: $(this).attr('action'), // Get the form action URL
                method: $(this).attr('method'), // Get the form method (POST)
                data: formData, // Use serialized form data
                success: function(response) {
                    console.log(response);
                    // Handle success response (e.g., show success message)
                    // Redirect or perform any other action as needed
                },
                error: function(xhr, status, error) {
                    console.error(xhr.responseText);
                    // Handle error response (e.g., display error message)
                }
            });
        });
    });
</script>


<!--**********************************
Content body end
***********************************-->
@endsection
