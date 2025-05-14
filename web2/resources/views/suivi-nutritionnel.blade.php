<h2>Mon Suivi Nutritionnel</h2>
@foreach ($suivis as $suivi)
    <div>
        <strong>Date :</strong> {{ $suivi->date }} |
        Calories : {{ $suivi->calories }} |
        Lipides : {{ $suivi->lipides }} |
        Glucides : {{ $suivi->glucides }}
    </div>
@endforeach
