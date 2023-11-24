<form action="{{ route('comics.destroy', $comic) }}" method="POST" onsubmit="return confirm('Are you sure you want to delete {{ $comic->title }}?')">
    @csrf
    @method('DELETE')
    <button type="submit" class="btn btn-danger">
        Delate
    </button>
</form>
