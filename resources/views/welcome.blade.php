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
                            {{-- read more button --}}
                            <a href="{{ route('singlecard.show', ['article' => $firstArticle]) }}" class="btn btn-primary">Read More</a>
                            {{-- edit button --}}
                            <a href="{{ route('article.edit', ['article' => $firstArticle]) }}" class="btn btn-warning mx-3"><i class="fa-solid fa-pen-to-square"></i></a>
                            <!-- Button trigger modal Delete -->
                            <button type="button" class="btn btn-danger" data-bs-toggle="modal"
                                data-bs-target="#staticBackdrop">
                                <i class="fa-solid fa-bucket"></i>
                            </button>
                        </div>
                    </article>
                </div>
            </div>
        @endif
        @foreach ($articles as $article)
            @if ($firstArticle->id != $article->id)
                <x-card :article="$article" />
            @endif
        @endforeach
    </div>

    {{-- Footer --}}
    <x-footer />


    <!-- Modal Delete -->
    <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="staticBackdropLabel">Modal title</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    Are you sure to delete your article? This change will be defenitive
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    {{-- DELETE FORM --}}
                    <form method="post" action="{{ route('article.delete', ['article' => $firstArticle]) }}">
                        @method('DELETE')
                        @csrf
                        <button class="btn btn-danger">
                            <i class="fa-solid fa-bucket"></i>
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>


</x-layout>
