<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Détails du service</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-light">

<div class="container mt-5">
    <h2 class="text-primary mb-4">Détails du service</h2>

    <div class="card shadow-sm rounded-3 p-4">
        <h4 class="fw-bold mb-3">{{ $service->name }}</h4>

        <p><strong>Description :</strong> {{ $service->description }}</p>
        <p><strong>Prix :</strong> <span class="text-success fw-semibold">{{ $service->price }} MAD</span></p>
        <p><strong>Durée :</strong> {{ $service->duration }}</p>

        @if ($service->image)
            <div class="my-3 text-center">
                <img src="{{ asset('storage/' . $service->image) }}" class="img-fluid rounded shadow-sm" style="max-width: 300px;" alt="{{ $service->name }}">
            </div>
        @else
            <p class="text-muted fst-italic">Pas d’image disponible.</p>
        @endif

        <div class="mt-4">
            <a href="{{ route('services.index') }}" class="btn btn-primary">
                ← Retour à la liste
            </a>
        </div>
    </div>
</div>

</body>
</html>
