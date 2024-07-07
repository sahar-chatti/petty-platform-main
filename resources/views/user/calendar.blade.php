@extends('user.nav-sidebar')
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
                            <h4>Mon calendrier</h4>
                        </div>
                    </div>

                </div>

                <div class="row">
                    <div class="col-lg-3">
                        <div class="card">
                            <div class="card-body">


                                <div class="">
                                    <div id="external-events" class="my-3">
                                        <p>Glissez- et déposez votre événement ou cliquez dans le calendrier</p>

                                    </div>
                                    <!-- checkbox -->
									<div class="checkbox custom-control checkbox-event custom-checkbox pt-3 pb-5">
										<input type="checkbox" class="custom-control-input" id="drop-remove">
										<label class="custom-control-label" for="drop-remove">Supprimer aprés le dépos</label>
									</div>
                                    <a href="javascript:void()" data-toggle="modal" data-target="#add-category" class="btn btn-primary btn-event w-100">
                                        <span class="align-middle"><i class="ti-plus"></i></span> Créer un événements
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-9">
                        <div class="card">
                            <div class="card-body">
                                <div id="calendar" class="app-fullcalendar"></div>
                            </div>
                        </div>
                    </div>
                    <!-- BEGIN MODAL -->
                    <div class="modal fade none-border" id="event-modal">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h4 class="modal-title"><strong>Créer un événements</strong></h4>
                                </div>
                                <div class="modal-body"></div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-default waves-effect" data-dismiss="modal">Annuler</button>
                                    <button type="button" class="btn btn-success save-event waves-effect waves-light">Créer
                                        </button>

                                    <button type="button" class="btn btn-danger delete-event waves-effect waves-light" data-dismiss="modal">Supprimer</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Modal Add Category -->
                    <div class="modal fade none-border" id="add-category">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h4 class="modal-title"><strong>Créer un évenement</strong></h4>
                                </div>
                                <div class="modal-body">
                                    <form>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label class="control-label"> Evenement</label>
                                                <input class="form-control form-white" placeholder="Nom de l'évenement" type="text" name="category-name">
                                            </div>
                                            <div class="col-md-6">
                                                <label class="control-label">Choisir catégorie</label>
                                                <select class="form-control form-white" data-placeholder="Choisir un couleur" name="category-color">
                                                    <option value="success">Succès</option>
                                                    <option value="danger">Danger</option>
                                                    <option value="info">Information</option>
                                                    <option value="primary">essentielle</option>
                                                    <option value="warning">Alerte</option>
                                                </select>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-default waves-effect" data-dismiss="modal">Fermer</button>
                                    <button type="button" class="btn btn-danger waves-effect waves-light save-category" data-dismiss="modal">Sauvegarder</button>
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