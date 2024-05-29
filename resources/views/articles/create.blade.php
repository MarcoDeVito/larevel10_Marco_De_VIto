<x-layout>
    <x-form>
        <x-slot:h1Text>Nuovo Articolo</x-slot:h1Text>
        <x-slot:route>{{ route('articles.store') }}</x-slot:route>
        <x-slot:method>@method('POST')</x-slot:method>
        <x-slot:title>{{ old('title') }}</x-slot:title>
        <x-slot:author_name>{{ old('author_name') }}</x-slot:author_name>
        <x-slot:author_surname>{{ old('author_surname') }}</x-slot:author_surname>
        <x-slot:category>{{ old('category') }}</x-slot:category>
        <x-slot:text>{{ old('text') }}</x-slot:text>
        <x-slot:button>Salva</x-slot:button>
        <x-slot:placeholder>Testo articolo</x-slot:placeholder>
        
    </x-form>
</x-layout>
