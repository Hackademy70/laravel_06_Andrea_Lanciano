<div class="my-card">
    <div class="thumb" style="background-image: url({{ Storage::url($article->img) }});"></div>
    <article class="my-article">
        <h5>{!! Str::limit($article->title, 45) !!}</h5>
        <p class="my-card-paragraph">{!! Str::limit($article->paragraph, 200) !!}</p>
        <span class="author">{{ $article->author }}</span>
        <div class="d-flex mt-3">
            {{-- Show single article page button --}}
            <a href="{{ route('singlecard.show', ['article' => $article]) }}" class="btn btn-primary">Read More</a>
            {{-- Edit Button --}}
            <a href="{{ route('article.edit', ['article' => $article]) }}" class="btn btn-warning mx-3"><i class="fa-solid fa-pen-to-square"></i></a>
            <!-- Button trigger modal Delete -->
            <button type="button" class="btn btn-danger" data-bs-toggle="modal"
                data-bs-target="#staticBackdrop">
                <i class="fa-solid fa-bucket"></i>
            </button>
        </div>
    </article>
</div>