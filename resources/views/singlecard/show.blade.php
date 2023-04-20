<x-layout>
    <x-slot name="title">{{ $article->title }}</x-slot>
    <div class="container flex-column d-flex justify-content-center">
        <h1>Leggi l'articolo</h1>
        <div class="mt-3 row align-items-center">
            <div class="col-4">
                <img src="{{ Storage::url($article->img) }}" style="width: 100%;" alt="">
            </div>
            <div class="col-7 ms-3">
                <h3>{{ $article->title }}</h3>
                <h5>{{ $article->subtitle }}</h5>
                <p class="lead">{{ $article->author }}</p>
                <p>{{ $article->article }}</p>
            </div>
        </div>
    </div>
</x-layout>