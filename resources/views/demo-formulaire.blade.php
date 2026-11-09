<form method="POST" action="/demo-envoi">
    @csrf
    <input name="title" placeholder="Titre">
    <button type="submit">Envoyer</button>
</form>