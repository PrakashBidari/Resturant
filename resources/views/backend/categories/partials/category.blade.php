<li class="mt-2">
    @if ($category->parent_id === null)
        <strong style="font-size: 1.2em;">{{ $category->name }}</strong>
    @else
        <strong>{{ $category->name }}</strong>
    @endif
    <a class="btn btn-sm btn-primary ms-2" href="{{ route('categories.edit', $category->id) }}">Edit</a>
    <form action="{{ route('categories.destroy', $category->id) }}" method="POST" style="display: inline;">
        @csrf
        @method('DELETE')
        <button class="btn btn-sm btn-danger" type="submit" onclick="return confirm('Are you sure?')">Delete</button>
    </form>
    @if ($category->children->isNotEmpty())
        <ul>
            @foreach ($category->children as $child)
                @include('backend.categories.partials.category', ['category' => $child])
            @endforeach
        </ul>
    @endif
</li>
