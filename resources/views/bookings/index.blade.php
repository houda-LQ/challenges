
<div class="container mt-4">
    <h2 class="mb-4">Liste des Réservations</h2>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <a href="{{ route('bookings.create') }}" class="btn btn-primary mb-3">+ Nouvelle réservation</a>

    <table class="table table-bordered">
        <thead class="table-dark">
            <tr>
                <th>#</th>
                <th>Nom client</th>
                <th>Email</th>
                <th>Service</th>
                <th>Date</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($bookings as $booking)
                <tr>
                    <td>{{ $booking->id }}</td>
                    <td>{{ $booking->customer_name }}</td>
                    <td>{{ $booking->customer_email }}</td>
                    <td>{{ $booking->service->title ?? '—' }}</td>
                    <td>{{ $booking->booking_date }}</td>
                    <td>
                        <a href="{{ route('bookings.show', $booking) }}" class="btn btn-info btn-sm">Voir</a>
                        <a href="{{ route('bookings.edit', $booking) }}" class="btn btn-warning btn-sm">Modifier</a>
                        <form action="{{ route('bookings.destroy', $booking) }}" method="POST" class="d-inline" onsubmit="return confirm('Supprimer cette réservation ?')">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-danger btn-sm">Supprimer</button>
                        </form>
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="6" class="text-center text-muted">Aucune réservation trouvée.</td>
                </tr>
            @endforelse
        </tbody>
    </table>
</div>