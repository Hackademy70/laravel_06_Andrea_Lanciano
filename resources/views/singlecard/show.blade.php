<x-layout>
    <x-slot name="title">{{ $article->title }}</x-slot>
    <div class="container flex-column d-flex justify-content-center">
        <h1>Leggi l'articolo</h1>
        <div class="mt-3 row">
            <div class="col-8">
                <h3>{{ $article->title }}</h3>
                <p class="lead">{{ $article->author }}</p>
                <p>{{ $article->article }}</p>
            </div>
        </div>
    </div>
</x-layout>