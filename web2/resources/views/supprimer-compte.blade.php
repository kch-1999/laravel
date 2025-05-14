<h2>Confirmer la suppression</h2>
<form method="POST" action="{{ route('index') }}">
    @csrf
    <button type="submit">Supprimer mon compte</button>
</form>
