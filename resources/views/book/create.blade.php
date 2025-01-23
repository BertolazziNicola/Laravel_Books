@extends('layouts.main')

@section('page-title')
Create book
@endsection

@section('main-content')
<section class="row">
    @include('partials.navbar')
    <div class="col-md-4">
        <form action="{{ route('books.store') }}" method="POST" enctype="multipart/form-data">
            @csrf

            <!-- Title -->
            <div class="mb-3">
                <label class="form-label" for="title">Title</label>
                <input type="text" class="form-control @error('title') is-invalid @enderror"
                    placeholder="Enter book title" name="title" value="{{ old('title', '') }}">

                {{-- Display error --}}
                @error('title')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>

            <!-- Description -->
            <div class="mb-3">
                <label class="form-label d-flex justify-content-between align-items-center" for="description">
                    <span>Description</span>
                    <small class="text-muted">(optional)</small>
                </label>
                <textarea placeholder="Enter book description"
                    class="form-control @error('description') is-invalid @enderror" name="description" maxlength="800"
                    rows="6">{{ old('description', '') }}</textarea>

                {{-- Display error --}}
                @error('description')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>

            <!-- Pages -->
            <div class="mb-3">
                <label class="form-label d-flex justify-content-between align-items-center" for="pages">
                    <span>Pages</span>
                    <small class="text-muted">(optional)</small>
                </label>

                <input type="number" placeholder="Enter book pages (1 to 100000)" id="pages"
                    class="form-control @error('pages') is-invalid @enderror" name="pages"
                    value="{{ old('pages', '') }}">

                {{-- Display error --}}
                @error('pages')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>

            <!-- Author -->
            <div class="mb-3">
                <label class="form-label d-flex justify-content-between align-items-center" for="author">
                    <span>Author</span>
                    <small class="text-muted">(optional)</small>
                </label>
                <select class="form-control @error('author') is-invalid @enderror" name="author_id">
                    <option value="" selected>No author selected</option>
                    @foreach ($authors as $author)
                        <option value="{{ $author->id }}" {{ old('author') == $author->id ? 'selected' : '' }}>
                            {{ $author->name }}
                        </option>
                    @endforeach
                </select>

                {{-- Display error --}}
                @error('author')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>

            <!-- Category -->
            <div class="mb-3">
                <label class="form-label d-flex justify-content-between align-items-center" for="category">
                    <span>Category</span>
                    <small class="text-muted">(optional)</small>
                </label>
                <select class="form-control @error('category') is-invalid @enderror" name="category_id">
                    <option value="" selected>No category selected</option>
                    @foreach ($categories as $category)
                        <option value="{{ $category->id }}" {{ old('category') == $category->id ? 'selected' : '' }}>
                            {{ $category->name }}
                        </option>
                    @endforeach
                </select>

                {{-- Display error --}}
                @error('category')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>

            <!-- File cover -->
            <div class="mb-3">
                <label class="form-label d-flex justify-content-between align-items-center" for="cover">
                    <span>Cover</span>
                    <small class="text-muted">(optional)</small>
                </label>
                <input class="form-control d-none" type="file" id="fileInput" name="cover" accept=".jpg, .jpeg, .png">
                <a class="btn btn-outline-secondary w-100" id="fileInputButton">Press to upload a file</a>

                <!-- FileName (when inserted) -->
                <span class="badge bg-secondary d-none cursor-pointer" id="fileName">
                    <span></span>
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-x"
                        viewBox="0 0 16 16">
                        <path
                            d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708" />
                    </svg>
                </span>

                {{-- Display error --}}
                @error('cover')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>

            <!-- Submit -->
            <button type="submit" class="btn btn-success">Submit</button>
        </form>
    </div>
</section>

<script src="{{ asset('js/create.js') }}"></script>
<script>
    $(document).ready(function () {
        // Pages file (input)
        $('#pages').on('input', function () {
            checkNumberInput(this, 1, 100000);
        });

        // File input button (click)
        $('#fileInputButton').on('click', function () {
            $('#fileInput').click();
        });

        // File input (change)
        $('#fileInput').on('change', function () {
            $('#fileInputButton').addClass('d-none');
            $('#fileName').removeClass('d-none');
            var fileName = $(this).val().split('\\').pop(); // Ottieni il nome del file
            $('#fileName').find('span').text('Selected file: ' + fileName);
        });

        // Selected File name badge (click)
        $('#fileName').on('click', function () {
            $('#fileInputButton').removeClass('d-none');
            $('#fileName').addClass('d-none');
            $('#fileInput').val('');
        });
    });
</script>
@endsection