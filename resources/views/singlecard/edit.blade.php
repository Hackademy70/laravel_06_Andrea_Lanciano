<x-layout>
    <x-slot name="title">Modify this Article!</x-slot>

    <div class="container">
        <div class="row justify-content-center my-5">
            <div class="col-8">
                {{-- Form --}}
                <form method="post" action="{{ route('article.update', $article) }}" enctype="multipart/form-data">
                    @method('PUT')
                    @csrf
                    <div class="mb-3">
                        <label for="title" class="form-label">Title</label>
                        <input type="text" class="form-control" name="title" value="{{ $article->title }}">
                    </div>
                    {{-- primo paragrafo --}}
                    <div class="mb-3">
                        <label for="subtitle" class="form-label">SubTitle</label>
                        <input type="text" class="form-control" name="subtitle" value="{{ $article->subtitle }}">
                    </div>
                    <label for="paragraph">Modify first paragraph</label>
                    <div class="form-floating">
                        <textarea class="form-control" placeholder="Leave a comment here" name="paragraph" style="height: 300px">{{ $article->paragraph }}</textarea>
                      </div>
                      <label for="img" class="form-label mt-2">Cover</label>
                      <div class="mb-3 col-4 d-flex w-100">
                        <input type="file" class="form-control" name="img">
                        <img src="{{ Storage::url($article->img) }}" alt=" {{ $article->subtitle }} " class="edit-img">
                    </div>
                    {{-- secondo paragrafo --}}
                    <div class="mb-3">
                        <label for="subtitle2" class="form-label">SubTitle</label>
                        <input type="text" class="form-control" name="subtitle2" value="{{ $article->subtitle2 }}">
                    </div>
                    <label for="paragraph2">Modify second paragraph</label>
                    <div class="form-floating">
                        <textarea class="form-control" placeholder="Leave a comment here" name="paragraph2" style="height: 300px">{{ $article->paragraph2 }}</textarea>
                      </div>
                      <label for="img" class="form-label mt-2">Cover</label>
                      <div class="mb-3 col-4 d-flex w-100">
                        <input type="file" class="form-control" name="img">
                        <img src="{{ Storage::url($article->img2) }}" alt=" {{ $article->subtitle2 }} " class="edit-img">
                    </div>
                    <div class="mb-3 mt-1">
                        <label for="author" class="form-label">Author</label>
                        <input type="text" class="form-control" name="author" value="{{ $article->author }}">
                    </div>
                    <button type="submit" class="btn btn-warning">Save changes</button>
                </form>
            </div>
        </div>
    </div>
</x-layout>