
<div class="container mt-4">
    <h2>Modifier la Réservation #{{ $booking->id }}</h2>

    <form action="{{ route('bookings.update', $booking) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label class="form-label">Nom du client</label>
            <input type="text" name="customer_name" class="form-control" value="{{ old('customer_name', $booking->customer_name) }}">
        </div>

        <div class="mb-3">
            <label class="form-label">Email</label>
            <input type="email" name="customer_email" class="form-control" value="{{ old('customer_email', $booking->customer_email) }}">
        </div>

        <div class="mb-3">
            <label class="form-label">Service</label>
            <select name="service_id" class="form-select">
                @foreach($services as $service)
                    <option value="{{ $service->id }}" {{ $booking->service_id == $service->id ? 'selected' : '' }}>
                        {{ $service->title }}
                    </option>
                @endforeach
            </select>
        </div>

        <div class="mb-3">
            <label class="form-label">Date de réservation</label>
            <input type="date" name="booking_date" class="form-control" value="{{ old('booking_date', $booking->booking_date) }}">
        </div>

        <div class="mb-3">
            <label class="form-label">Notes</label>
            <textarea name="notes" class="form-control">{{ old('notes', $booking->notes) }}</textarea>
        </div>

        <button type="submit" class="btn btn-primary">Mettre à jour</button>
        <a href="{{ route('bookings.index') }}" class="btn btn-secondary">Retour</a>
    </form>
</div>
