<x-layout>
    <x-form>
        <x-slot:h1Text>Modifica Articolo</x-slot:h1Text>
        <x-slot:route>{{ route('articles.update',['article'=>$article]) }}</x-slot:route>
        <x-slot:method>@method('PUT')</x-slot:method>
        <x-slot:title>{{ $article->title }}</x-slot:title>
        <x-slot:author_name>{{ $article->author_name }}</x-slot:author_name>
        <x-slot:author_surname>{{ $article->author_surname }}</x-slot:author_surname>
        <x-slot:category>{{ $article->category }}</x-slot:category>
        <x-slot:text>{{ $article->text }}</x-slot:text>
        <x-slot:image><img width="200" src="{{ $article->image ? Storage::url($article->image) : '/template/libroGenerico.jpg' }}" class="img-responsive"></x-slot:image>
        <x-slot:button>Modifica</x-slot:button>

    </x-form>
</x-layout>
