<div class="my-card">
    <div class="thumb" style="background-image: url({{ Storage::url($article->img) }});"></div>
    <article class="my-article">
        <h5>{!! Str::limit($article->title, 45) !!}</h5>
        <p class="my-card-paragraph">{!! Str::limit($article->paragraph, 200) !!}</p>
        <span class="author">{{ $article->author }}</span>
        <div class="d-flex mt-3">
            <a href="{{ route('singlecard.show', ['article' => $article]) }}" class="btn btn-primary">Read More</a>
            <a href="{{ route('article.edit', ['article' => $article]) }}" class="btn btn-warning mx-3"><i class="fa-solid fa-pen-to-square"></i></a>
            <form method="post" action="{{ route('article.delete', ['article' => $article]) }}">
                @method('DELETE')
                @csrf
                <button class="btn btn-danger">
                    <i class="fa-solid fa-bucket"></i>
                </button>
            </form>
        </div>
    </article>
</div>