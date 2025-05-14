<h2>Choisir une Recette</h2>
@foreach ($recettes as $recette)
    <form method="POST" action="{{ route('recettes-choisie') }}">
        @csrf
        <input type="hidden" name="id_recette" value="{{ $recette->id_recette }}">
        <p>{{ $recette->nom }}</p>
        <button type="submit">Voir</button>
    </form>
@endforeach
