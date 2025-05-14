<h2>Confirmer la suppression</h2>
<form method="POST" action="{{ route('utilisateur.supprimer') }}">
    @csrf
    <button type="submit">Supprimer mon compte</button>
</form>
