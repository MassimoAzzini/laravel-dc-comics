<form action="{{ route('comics.destroy', $comic) }}" method="POST">
    @csrf
    @method('DELETE')
    <button type="submit" class="btn btn-danger" onsubmit="return confirm('Are you sure you want to delete {{ $comic->title }}?')">
        Delate
    </button>
</form>
