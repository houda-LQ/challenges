
<div class="container mt-4">
    <h2>Détails de la Réservation #{{ $booking->id }}</h2>

    <ul class="list-group mb-3">
        <li class="list-group-item"><strong>Nom du client :</strong> {{ $booking->customer_name }}</li>
        <li class="list-group-item"><strong>Email :</strong> {{ $booking->customer_email }}</li>
        <li class="list-group-item"><strong>Service :</strong> {{ $booking->service->title ?? '—' }}</li>
        <li class="list-group-item"><strong>Date :</strong> {{ $booking->booking_date }}</li>
        <li class="list-group-item"><strong>Notes :</strong> {{ $booking->notes ?? 'Aucune note' }}</li>
    </ul>

    <a href="{{ route('bookings.edit', $booking) }}" class="btn btn-warning">Modifier</a>
    <a href="{{ route('bookings.index') }}" class="btn btn-secondary">Retour</a>
</div>
