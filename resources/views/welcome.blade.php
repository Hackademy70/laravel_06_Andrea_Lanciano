<x-layout>

    @if (session('message'))
        <div class="container">
            <div class="alert alert-success alert-dismissible fade show">
                {{ session('message') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="close"></button>
            </div>
        </div>
    @endif

    <div class="container mt-3 d-flex justify-content-center">
        <div class="row justify-content-between">
            @foreach ($articles as $article)
            <div class="col-4">
                {{-- Card (Da trasformare in componente) --}}
                <div class="card mb-3" style="width: 18rem;">
                    <div class="card-body">
                        <h5 class="card-title">{!! Str::limit($article->title, 45) !!}</h5>
                        <p class="card-text">{!! Str::limit($article->article, 100) !!}</p>
                        <p class="lead">{{ $article->author }}</p>
                        <div class="d-flex">
                            <a href="{{ route('singlecard.show', ['article' => $article]) }}" class="btn btn-primary">Read More</a>
                            <a href="{{ route('article.edit', ['article' => $article]) }}" class="btn btn-warning mx-3"><i class="fa-solid fa-pen-to-square"></i></a>
                            <form method="post" action="{{ route('article.delete', ['article' => $article]) }}" >
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
            @endforeach
        </div>
    </div>


    {{-- Footer --}}
    <x-footer />

</x-layout>
