<x-layout>
    <x-slot name="title">Modify this Article!</x-slot>

    <div class="container">
        <div class="row justify-content-center mt-5">
            <div class="col-8">
                {{-- Form --}}
                <form method="post" action="{{ route('article.update', $article) }}" enctype="multipart/form-data">
                    @method('PUT')
                    @csrf
                    <div class="mb-3">
                        <label for="title" class="form-label">Title</label>
                        <input type="text" class="form-control" name="title" value="{{ $article->title }}">
                    </div>
                    <div class="mb-3">
                        <label for="subtitle" class="form-label">SubTitle</label>
                        <input type="text" class="form-control" name="subtitle" value="{{ $article->subtitle }}">
                    </div>
                    <label for="article">Write your article</label>
                    <div class="form-floating">
                        <textarea class="form-control" placeholder="Leave a comment here" name="article" style="height: 300px">{{ $article->article }}</textarea>
                      </div>
                      <label for="img" class="form-label mt-2">Cover</label>
                      <div class="mb-3 col-4 d-flex w-100">
                        <input type="file" class="form-control" name="img">
                        <img src="{{ Storage::url($article->img) }}" alt=" {{ $article->title }} " style="width: 80px;">
                    </div>
                    <div class="mb-3 mt-1">
                        <label for="author" class="form-label">Author</label>
                        <input type="text" class="form-control" name="author" value="{{ $article->author }}">
                    </div>
                    <button type="submit" class="btn btn-warning">Modify article</button>
                </form>
            </div>
        </div>
    </div>
</x-layout>