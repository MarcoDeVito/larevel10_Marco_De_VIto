<x-layout>
    <div class="container">
        
        <img class="card-img-top" style="width:20rem" src="{{ $article->image ? Storage::url($article->image) : '/template/libroGenerico.jpg' }}" alt="Immagine articolo non presente">
        <div>Categoria: <a href="">{{ $article->category }}</a></div>
        <h1>{{ $article->title }}</h1>
        <p class="my-5">{{$article->text }}</p>
        <p>Scritto da {{ $article->author_name }} {{ $article->author_surname }}</p>
    </div>
</x-layout>
