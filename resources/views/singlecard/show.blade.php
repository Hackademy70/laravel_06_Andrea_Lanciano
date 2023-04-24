<x-layout>
    <x-slot name="title">NONèTimes - {{$article->title}}</x-slot>
    <div class="container flex-column d-flex justify-content-center">
        <br />
        <div class="mt-3 row justify-content-center">
            <div class="col-7 ms-3">
                <h2>{{ $article->title }}</h2>
                <img class="my-4" src="{{ Storage::url($article->img) }}" style="width: 100%;" alt="{{ $article->subtitle }}">
                <h3>{{ $article->subtitle }}</h3>
                <p>{{ $article->paragraph }}</p>
                <img class="my-4" src="{{ Storage::url($article->img2) }}" style="width: 100%;" alt="{{ $article->subtitle2 }}">
                <h3>{{ $article->subtitle2 }}</h3>
                <p>{{ $article->paragraph2 }}</p>
                <p class="lead">{{ $article->author }}</p>
            </div>
        </div>
    </div>
</x-layout>