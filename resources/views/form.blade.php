<x-layout>
    <x-slot name="title">Create an Article!</x-slot>

    <div class="container">
        <div class="row justify-content-center mt-5">
            <div class="col-8">
                {{-- Form --}}
                <form method="post" action="{{ route('article.create') }}" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-3">
                        <label for="title" class="form-label">Title</label>
                        <input type="text" class="form-control" name="title" aria-describedby="emailHelp">
                    </div>
                    <div class="mb-3">
                        <label for="subtitle" class="form-label">SubTitle</label>
                        <input type="text" class="form-control" name="subtitle" aria-describedby="emailHelp">
                    </div>
                    <label for="article">Write your article</label>
                    <div class="form-floating">
                        <textarea class="form-control" placeholder="Leave a comment here" name="article" style="height: 100px"></textarea>
                      </div>
                      <div class="mb-3 col-4">
                        <label for="img" class="form-label">Cover</label>
                        <input type="file" class="form-control" name="img">
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