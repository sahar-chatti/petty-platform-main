@extends('veto.nav-side')
@section('content')
    <!-- Content body start -->
    <div class="content-body">
        <div class="container-fluid">
            <div class="col-xl-12 col-xxl-12 col-lg-12 col-md-18 col-sm-18">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Liste des commandes</h4>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table verticle-middle table-responsive-md">
                                <thead>
                                    <tr>
                                        <th scope="col">Produit</th>
                                        <th scope="col">Quantité</th>
                                        <th scope="col">Prix total</th>
                                        <th scope="col">Statut</th>
                                        <th scope="col"></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($bookings as $booking)
                                    <tr>
                                        <td>{{ $booking->produit->nom }}</td>
                                        <td>{{ $booking->quantity }}</td>
                                        <td>{{ $booking->quantity * $booking->produit->prix }}</td>
                                        <td>
                                            @if($booking->booking_status == 'confirmed')
                                                <span class="badge badge-rounded badge-success">Confirmée</span>
                                            @elseif($booking->booking_status == 'canceled')
                                                <span class="badge badge-rounded badge-danger">Annulée</span>
                                            @elseif($booking->booking_status == 'pending')
                                                <span class="badge badge-rounded badge-warning">En attente</span>
                                            @endif
                                        </td>
                                        <td>
                                        <div class="dropdown custom-dropdown mb-0">
                                      <div data-toggle="dropdown">
                                         <i class="fa fa-ellipsis-v"></i>
                                       </div>
                                       <div class="dropdown-menu dropdown-menu-right">
                                   <a class="dropdown-item" href="{{ route('bookings.show', $booking->id) }}">Détails</a>
                               
                            </div>
                        </div>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Content body end -->
@endsection
