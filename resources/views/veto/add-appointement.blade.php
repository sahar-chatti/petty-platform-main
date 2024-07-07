@extends('veto.nav-side')
@section('content')



        <!--**********************************
            Content body start
        ***********************************-->
        <div class="content-body">
            <!-- row -->
            <div class="container-fluid">

                <div class="row page-titles mx-0">
                    <div class="col-sm-6 p-md-0">
                        <div class="welcome-text">
                            <h4>Réservation d'un rendez-vous</h4>
                        </div>
                    </div>
                    <div class="col-sm-6 p-md-0 justify-content-sm-end mt-2 mt-sm-0 d-flex">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="javascript:void(0)">Rendez-vous</a></li>
                            <li class="breadcrumb-item active"><a href="javascript:void(0)">Réserver un rendez-vous</a></li>
                        </ol>
                    </div>
                </div>
                <div class="row">

					<div class="col-xl-12 col-xxl-12 col-sm-12">
                        <div class="card">
                            <div class="card-header">
								<h5 class="card-title">Informations du compte </h5>
							</div>
							<div class="card-body">
                                <form action="#" method="post">
									<div class="col-xs-12">
                                    <div class="form-group">
											<label class="form-label" for="add-id">Nom l'animal </label>
											<input type="text" class="form-control" id="add-id" data-mask="id" placeholder="">
										</div>
										<div class="form-group">
											<label class="form-label" for="add-email">Email</label>
											<input type="text" class="form-control" id="add-email">
										</div>
										<div class="form-group">
											<label class="form-label" for="add-phone">Téléphone</label>
											<input type="text" class="form-control" id="add-phone" data-mask="phone" placeholder="(+216) ** *** ***">
										</div>
                                        <div class="form-group">
											<label class="form-label" for="add-adresse">Adresse </label>
											<input type="text" class="form-control" id="add-adresse" data-mask="Adresse" placeholder=" ">
										</div>
                                         <div class="form-group">
                                         <label class="form-label" for="add-date">Date </label>
                                         <input type="text" class="form-control" id="add-date" data-mask="Adresse" placeholder="Ajouter une date ">
                                        </div>
                                        <div class="form-group">
                                            <label class="form-label" for="add-date">Heure </label>
                                            <input type="text" class="form-control" id="add-date" data-mask="Adresse" placeholder="Préciser une heure ">
                                           </div>
									</div>
									<div class="col-xs-12">
										<button type="button" class="btn btn-primary">Confirmer la réservation</button>

									</div>
								</form>
                            </div>
                        </div>
                    </div>

                    </div>
                </div>

            </div>
        </div>
        <!--**********************************
            Content body end
        ***********************************-->

@endsection