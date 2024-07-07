@extends('user.nav-sidebar')
@section('content')
<div class="content-body">
    <!-- row -->
    <div class="container-fluid">
        <div class="row page-titles mx-0">
            <h1 class="no-margin-top" style='color:#7286D3;'>Détails de la Commande</h1>
        </div>
        <div class="row content-center">
            <div class="col-xl-12">
                <div class="card" style='background-color:#E5E0FF'>
                    <div class="card-header">
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-12">
                                <ul class="list-group">
                                    <li class="list-group-item">Produit: <strong>{{ $booking->produit->nom }}</strong></li>
                                    <li class="list-group-item">Quantité: <strong>{{ $booking->quantity }}</strong></li>
                                    <li class="list-group-item">Status: 
    <strong>
        @if ($booking->booking_status === 'confirmed')
            Confirmée
        @elseif ($booking->booking_status === 'canceled')
            Annulée
        @endif
    </strong>
</li>

                                    @if ($booking->booking_status === 'confirmed')
                                        <li class="list-group-item">Prix total: <strong>{{ $booking->quantity * $booking->produit->prix }}</strong></li>
                                    @endif                                  
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
