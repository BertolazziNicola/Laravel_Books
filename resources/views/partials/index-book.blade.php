<article class="card border-0">
    <div class="card-body">
        <h3 class="card-title">{{ $book->title }}</h3>
        @if (isset($book->author))
            <div>by {{ $book->author->name }}</div>
        @endif
        @if (isset($book->category))
            <div class="mt-2"><span class="badge text-bg-secondary">{{ $book->category->name }}</span>
            </div>
        @endif
        <div class="btn-group mt-3 d-flex justify-content-center" role="group">
            <a href="{{ route('books.show', $book->id) }}" class="btn btn-light"><i class="bi bi-eye"></i></a>
            <a href="{{ route('books.edit', $book->id) }}" class="btn btn-light"><i class="bi bi-pencil"></i></a>
            <form action="{{ route("books.destroy", $book->id) }}" method="POST">
                @csrf
                @method('DELETE')
                <button typer="submit" onclick="confirm('Are you sure? You are deleting a book')"
                    class="btn btn-light"><i class="bi bi-trash3"></i>
                </button>
            </form>
        </div>
    </div>
</article>