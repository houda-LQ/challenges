<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Liste des services</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-light">

<div class="container mt-4">
    <h2 class="mb-3 text-primary">Liste des services</h2>

    @if (session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <a href="{{ route('services.create') }}" class="btn btn-primary mb-3">+ Ajouter un service</a>

    <div class="table-responsive">
        <table class="table table-bordered table-striped text-center align-middle shadow-sm">
            <thead class="table-dark">
                <tr>
                    <th>ID</th>
                    <th>Nom</th>
                    <th>Prix</th>
                    <th>Durée</th>
                    <th>Image</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($services as $service)
                    <tr>
                        <td>{{ $service->id }}</td>
                        <td class="fw-semibold">{{ $service->name }}</td>
                        <td>{{ $service->price }} MAD</td>
                        <td>{{ $service->duration }}</td>
                        <td>
                            @if ($service->image)
                                <img src="{{ asset('storage/' . $service->image) }}" width="80" class="rounded shadow-sm" alt="{{ $service->name }}">
                            @else
                                <span class="text-muted">Pas d’image</span>
                            @endif
                        </td>
                        <td>
                            <a href="{{ route('services.show', $service) }}" class="btn btn-info btn-sm">Voir</a>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="6" class="text-muted py-3">Aucun service trouvé.</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>
</div>

</body>
</html>
