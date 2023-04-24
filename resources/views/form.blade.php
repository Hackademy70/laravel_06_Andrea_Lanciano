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
                    {{-- First paragraph's title --}}
                    <div class="mb-3">
                        <label for="subtitle" class="form-label">Paragraph Title</label>
                        <input value="{{ old('subtitle') }}" type="text"
                            class="form-control @error('subtitle') is-invalid @enderror" name="subtitle"
                            placeholder="@error('subtitle') {{ $message }} @enderror">
                    </div>
                    {{-- First Paragraph --}}
                    <label for="paragraph" class="mb-2">Write first paragraph</label>
                    <div class="form-floating">
                        <textarea class="form-control @error('paragraph') is-invalid @enderror" name="paragraph" style="height: 100px">@error('paragraph'){{ $message }}@enderror {{ old('paragraph') }}</textarea>
                    </div>
                    <div class="mb-3 col-4 mt-2">
                        <label for="img" class="form-label">Cover first paragraph</label>
                        <input type="file" class="form-control" name="img">
                    </div>
                    {{-- End first paragraph --}}

                    {{-- Second paragraph's title --}}
                    <div class="mb-3">
                        <label for="subtitle2" class="mb-2">Second paragraph title</label>
                        <input value="{{ old('subtitle2') }}" type="text"
                            class="form-control @error('subtitle2') is-invalid @enderror" name="subtitle2"
                            placeholder="@error('subtitle2') {{ $message }} @enderror">
                    </div>
                    {{-- Second Paragraph --}}
                    <label for="paragraph2">Write second paragraph</label>
                    <div class="form-floating">
                        <textarea class="form-control @error('paragraph2') is-invalid @enderror" name="paragraph2" style="height: 100px">@error('paragraph2'){{ $message }}@enderror {{ old('paragraph2') }}</textarea>
                    </div>
                    <div class="mb-3 col-4 mt-2">
                        <label for="img2" class="form-label">Cover second paragraph</label>
                        <input type="file" class="form-control" name="img2">
                    </div>
                    {{-- End second paragraph --}}

                    {{-- Author Input --}}
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