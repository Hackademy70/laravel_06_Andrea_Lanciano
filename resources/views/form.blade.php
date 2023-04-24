<x-layout>
    <x-slot name="title">Create an Article!</x-slot>




    <div class="container">
        <div class="row justify-content-center my-5">
            <div class="col-8">
                <h2 class="mb-5">Create your article for a free information!</h2>
                {{-- Form --}}
                <form method="post" action="{{ route('article.create') }}" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-3">
                        <label for="title" class="form-label">Title</label>
                        <input value="{{ old('title') }}" type="text"
                            class="form-control @error('title') is-invalid @enderror" name="title"
                            placeholder="@error('title') {{ $message }} @enderror">
                    </div>
                    <div class="mb-3">
                        <label for="subtitle" class="form-label">SubTitle</label>
                        <input value="{{ old('subtitle') }}" type="text"
                            class="form-control @error('subtitle') is-invalid @enderror" name="subtitle"
                            placeholder="@error('subtitle') {{ $message }} @enderror">
                    </div>
                    <label for="article">Write your article</label>
                    <div class="form-floating">
                        <textarea class="form-control @error('article') is-invalid @enderror" name="article" style="height: 100px">
                            @error('article'){{ $message }}@enderror {{ old('article') }}
                        </textarea>
                    </div>
                    <div class="mb-3 col-4 mt-2">
                        <label for="img" class="form-label">Cover</label>
                        <input type="file" class="form-control" name="img">
                    </div>
                    <div class="mb-3 mt-1">
                        <label for="author" class="form-label">Author</label>
                        <input value="{{ old('author') }}" type="text" class="form-control @error('author') is-invalid @enderror" name="author" placeholder="@error('author') {{ $message }} @enderror">
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>

            </div>
        </div>
    </div>


    {{-- Footer --}}
    <x-footer />



</x-layout>