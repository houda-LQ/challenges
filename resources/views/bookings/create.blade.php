
<div class="container mt-4">
    <h2>Créer une Réservation</h2>

    <form action="{{ route('bookings.store') }}" method="POST">
        @csrf

        <div class="mb-3">
            <label for="customer_name" class="form-label">Nom du client</label>
            <input type="text" name="customer_name" class="form-control" value="{{ old('customer_name') }}">
            @error('customer_name') <small class="text-danger">{{ $message }}</small> @enderror
        </div>

        <div class="mb-3">
            <label for="customer_email" class="form-label">Email</label>
            <input type="email" name="customer_email" class="form-control" value="{{ old('customer_email') }}">
            @error('customer_email') <small class="text-danger">{{ $message }}</small> @enderror
        </div>

        <div class="mb-3">
            <label for="service_id" class="form-label">Service</label>
            <select name="service_id" class="form-select">
                <option value="">-- Choisir un service --</option>
                @foreach($services as $service)
                    <option value="{{ $service->id }}" {{ old('service_id') == $service->id ? 'selected' : '' }}>
                        {{ $service->title }}
                    </option>
                @endforeach
            </select>
            @error('service_id') <small class="text-danger">{{ $message }}</small> @enderror
        </div>

        <div class="mb-3">
            <label for="booking_date" class="form-label">Date de réservation</label>
            <input type="date" name="booking_date" class="form-control" value="{{ old('booking_date') }}">
            @error('booking_date') <small class="text-danger">{{ $message }}</small> @enderror
        </div>

        <div class="mb-3">
            <label for="notes" class="form-label">Notes (optionnel)</label>
            <textarea name="notes" class="form-control">{{ old('notes') }}</textarea>
        </div>

        <button type="submit" class="btn btn-success">Enregistrer</button>
        <a href="{{ route('bookings.index') }}" class="btn btn-secondary">Annuler</a>
    </form>
</div>
