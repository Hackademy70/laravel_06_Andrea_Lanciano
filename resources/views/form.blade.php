<x-layout>
    <x-slot name="title">Create an Article!</x-slot>

    <div class="container">
        <div class="row justify-content-center mt-5">
            <div class="col-8">
                {{-- Form --}}
                <form method="post" action="{{ route('article.create') }}">
                    @csrf
                    <div class="mb-3">
                        <label for="title" class="form-label">Title</label>
                        <input type="text" class="form-control" name="title" aria-describedby="emailHelp">
                    </div>
                    <label for="article">Write your article</label>
                    <div class="form-floating">
                        <textarea class="form-control" placeholder="Leave a comment here" name="article" style="height: 100px"></textarea>
                      </div>
                    <div class="mb-3 mt-1">
                        <label for="author" class="form-label">Author</label>
                        <input type="text" class="form-control" name="author">
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>

</x-layout>