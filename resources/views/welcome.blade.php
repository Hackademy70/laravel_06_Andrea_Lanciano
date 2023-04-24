<x-layout>

    @if (session('message'))
        <div class="container my-2">
            <div class="alert alert-success alert-dismissible fade show">
                {{ session('message') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="close"></button>
            </div>
        </div>
    @endif


    {{-- prova layout --}}

    <div class="band mt-3">
        @if ($firstArticle != null)
            <div class="item-1">
                <div class="my-card">
                    <div class="thumb" style="background-image: url({{ Storage::url($firstArticle->img) }});"></div>
                    <article class="my-article">
                        <h2>{!! Str::limit($firstArticle->title, 45) !!}</h2>
                        <p class="my-card-paragraph">{!! Str::limit($firstArticle->paragraph, 200) !!}</p>
                        <span class="author">{{ $firstArticle->author }}</span>
                        <div class="d-flex mt-3">
                            <a href="{{ route('singlecard.show', ['article' => $firstArticle]) }}" class="btn btn-primary">Read More</a>
                            <a href="{{ route('article.edit', ['article' => $firstArticle]) }}" class="btn btn-warning mx-3"><i class="fa-solid fa-pen-to-square"></i></a>
                            <form method="post" action="{{ route('article.delete', ['article' => $firstArticle]) }}">
                                @method('DELETE')
                                @csrf
                                <button class="btn btn-danger">
                                    <i class="fa-solid fa-bucket"></i>
                                </button>
                            </form>
                        </div>
                    </article>
                </div>
            </div>
        @endif
        @foreach ($articles as $article)
            @if ($firstArticle->id != $article->id)
                <x-card
                    :article="$article"
                /> 
            @endif
        @endforeach
    </div>


    {{-- Footer --}}
    <x-footer />

</x-layout>
