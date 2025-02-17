<tr>
    <td class="align-middle">{{ $category->id }}</td>
    <td class="align-middle">{{ $category->name }}</td>
    <td class="text-end">
        <div class="btn-group" role="group" aria-label="Basic example">
            <a href="{{ route('categories.edit', $category->id) }}" class="btn btn-secondary"><i class="bi bi-pencil"></i></a>
            <form action="{{ route("categories.destroy", $category->id) }}" method="POST">
                @csrf
                @method('DELETE')
                <button type="submit" onclick="confirm('Are you sure? You are deleting a category')"
                    class="btn btn-secondary"><i class="bi bi-trash3"></i></button>
            </form>
        </div>
    </td>
</tr>