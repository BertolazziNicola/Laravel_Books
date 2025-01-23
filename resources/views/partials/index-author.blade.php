<tr>
    <td class="align-middle">{{ $author->id }}</td>
    <td class="align-middle">{{ $author->name }}</td>
    @if (isset($author->birthday))
        <td class="align-middle">{{ $author->birthday->translatedFormat('d F Y') }}</td>
    @else
        <td class="align-middle">No data</td>
    @endif
    <td class="text-end">
        <div class="btn-group" role="group">
            <a href="{{ route('authors.edit', $author->id) }}" class="btn btn-secondary"><i class="bi bi-pencil"></i></a>
            <form action="{{ route("authors.destroy", $author->id) }}" method="POST">
                @csrf
                @method('DELETE')
                <button type="submit" onclick="confirm('Are you sure? You are deleting an author')"
                    class="btn btn-secondary"><i class="bi bi-trash3"></i></button>
            </form>
        </div>
    </td>
</tr>