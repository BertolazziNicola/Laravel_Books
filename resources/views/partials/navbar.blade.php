<div class="col-md-12 my-4">
    <div class="btn-group" role="group" aria-label="Basic example">
        <a href="{{ route('books.index') }}" class="btn btn-secondary">Books</a>
        <a href="{{ route('authors.index') }}" class="btn btn-secondary">Authors</a>
        <a href="{{ route('categories.index') }}" class="btn btn-secondary">Categories</a>
    </div>
    @php
        $url_links = explode('/', parse_url(url()->current(), PHP_URL_PATH));
    @endphp
    @if (count($url_links) > 1)
        @if ($url_links[1] == 'books')
            {{-- Book navbar --}}
            <a href="{{ route('books.create') }}" class="btn btn-primary"><i class="bi bi-plus-circle"></i> Add a
                book</a>
        @elseif($url_links[1] == 'categories')
            {{-- Category navbar --}}
            <a href="{{ route('categories.create') }}" class="btn btn-primary"><i class="bi bi-plus-circle"></i> Add a
                category</a>
        @elseif($url_links[1] == 'authors')
            {{-- Author navbar --}}
            <a href="{{ route('authors.create') }}" class="btn btn-primary"><i class="bi bi-plus-circle"></i> Add an
                author</a>
        @endif
        @if (!isset($url_links[2]))
            <h2 class="mt-5 mb-4">My {{ $url_links[1] }}</h2>
        @elseif($url_links[2] == 'create')
            <h2 class="mt-5 mb-4">Create {{ $url_links[1] }}</h2>
        @elseif(isset($url_links[3]))
            <h2 class="mt-5 mb-4">Edit {{ $url_links[1] }}</h2>
        @else
            <h2 class="mt-5 mb-4">Show {{ $url_links[1] }}</h2>
        @endif
    @endif
</div>