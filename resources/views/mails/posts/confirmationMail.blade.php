<h1>Il tuo nome è: {{ $post->name }}</h1>
<h1>La descrizione della mail è: {{ $post->description }}</h1>
<h1>Bravo campione, hai scritto il post con la data: {{ $post->date }}</h1>

<p>le categorie sono {{ $post->category->title }}</p>

<ul>
    @foreach ($post->tags as $elem)
        <li>{{ $elem->name }}</li>
    @endforeach
</ul>
